<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MitraController;
use App\Http\Controllers\BlogController as PublicBlogController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index'])->name('public.index');
Route::view('/about', 'public.about');
Route::get('/blog', [PublicBlogController::class, 'index'])->name('public.blog');
Route::get('/blog/show/{show}', [PublicBlogController::class, 'show'])->name('public.blog.show');
Route::view('/mitra-form', 'public.mitra-form')->name('public.mitra_form');

#Jangan di ubah susunannya
Route::post('/mitra-login/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('user.login');
Route::get('/mitra-login/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('user.logout');
Route::resource('/mitra-login/{token?}', \App\Http\Controllers\AuthController::class)
    ->only(['index'])
    ->names([
        'index' => 'public.login_form'
    ]);

Route::view('/mitra-prospek', 'public.mitra-prospek');
Route::view('/mitra-register', 'public.mitra-register');
Route::view('/blog-single', 'public.blog-single');
Route::view('/tipe-larissa', 'public.tipe-larissa-aesthetic-center');
Route::view('/tipe-salon', 'public.tipe-salon');
Route::view('/tipe-store', 'public.tipe-store');

Route::group(['prefix' => 'user',  'middleware' => ['auth', 'registereduser']], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/gerai', [DashboardController::class, 'gerai'])->name('user.gerai');
    Route::get('/add_gerai', [DashboardController::class, 'add_gerai'])->name('user.add_gerai');
    Route::get('/gerai/show/{show}', [DashboardController::class, 'gerai_show'])->name('user.gerai.show');
    Route::put('/{mitra}/timeline/{timeline}', [DashboardController::class, 'update_message'])->name('user.mitra_timeline.update');
    Route::post('/join_gerai', [DashboardController::class, 'join_gerai'])->name('user.join.gerai');
});

Route::prefix('mitra')->group(function () {
    Route::resource('join', \App\Http\Controllers\JoinController::class)
        ->only(['index', 'store'])
        ->names([
            'index' => 'join.mitra.index',
            'store' => 'join.mitra.store'
        ]);
    Route::resource('subscriber', \App\Http\Controllers\SubscriberController::class)
        ->only(['index', 'store'])
        ->names([
            'index' => 'subscriber.mitra.index',
            'store' => 'subscriber.mitra.store'
        ]);
});

Route::post('/news_letter', [\App\Http\Controllers\NewsLetterController::class, 'store'])->name('public.news_letter.store');
Route::group(['prefix' => 'admin',  'middleware' => ['auth', 'isadmin']], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::resource('/news_letter', \App\Http\Controllers\Admin\NewsLetterController::class)->names([
            'index' => 'admin.news_letter.index'
        ]);
        Route::prefix('mitra')->group(function () {
            Route::resource('/list', \App\Http\Controllers\Admin\MitraController::class)->names([
                'index' => 'admin.mitra.index',
                'show' => 'admin.mitra.show',
                'create' => 'admin.mitra.create',
                'store' => 'admin.mitra.store',
                'destroy' => 'admin.mitra.destroy',
                'edit' => 'admin.mitra.edit',
            ]);
            Route::resource('/potential', \App\Http\Controllers\Admin\PotentialMitraController::class)
                ->only(['index', 'show', 'store'])
                ->names([
                    'index' => 'admin.potential_mitra.index',
                    'show' => 'admin.potential_mitra.show',
                    'store' => 'admin.potential_mitra.store'
                ]);
            Route::resource('/on_going', \App\Http\Controllers\Admin\OnGoingMitraController::class)->names([
                'index' => 'admin.on_going_mitra.index',
                'show' => 'admin.on_going_mitra.show',
                'create' => 'admin.on_going_mitra.create',
                'store' => 'admin.on_going_mitra.store',
                'destroy' => 'admin.on_going_mitra.destroy',
                'edit' => 'admin.on_going_mitra.edit',
            ]);
            Route::put('/{mitra}/timeline/{timeline}', [\App\Http\Controllers\Admin\OnGoingMitraController::class, 'update'])->name('admin.mitra_timeline.update');
            Route::get('mitra_export', [MitraController::class, 'export'])->name('admin.mitra.export');
        });
        Route::resource('subscriber', \App\Http\Controllers\Admin\SubscriberController::class)->names([
            'index' => 'admin.subscriber.index',
            'show' => 'admin.subscriber.show',
            'create' => 'admin.subscriber.create',
            'store' => 'admin.subscriber.store',
            'destroy' => 'admin.subscriber.destroy',
            'edit' => 'admin.subscriber.edit',
        ]);
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names([
            'index' => 'admin.users.index',
            'show' => 'admin.users.show',
            'create' => 'admin.users.create',
            'store' => 'admin.users.store',
            'destroy' => 'admin.users.destroy',
            'edit' => 'admin.users.edit',
        ]);
        Route::resource('blogs', BlogController::class)->names([
            'index' => 'admin.blogs.index',
            'show' => 'admin.blogs.show',
            'create' => 'admin.blogs.create',
            'store' => 'admin.blogs.store',
            'destroy' => 'admin.blogs.destroy',
            'edit' => 'admin.blogs.edit',
            'update' => 'admin.blogs.update',
        ]);
    });
});
