<?php

use App\Http\Controllers\Admin\UserController;
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

Route::view('/', 'public.index');
Route::view('/about', 'public.about');
Route::view('/blog', 'public.blog');
Route::view('/mitra-form', 'public.mitra-form');
Route::view('/mitra-login', 'public.mitra-login');
Route::view('/mitra-prospek', 'public.mitra-prospek');
Route::view('/mitra-register', 'public.mitra-register');
Route::view('/blog-single', 'public.blog-single');
Route::view('/tipe-larissa-aesthetic-center.blade', 'public.tipe-larissa-aesthetic-center.blade');
Route::view('/tipe-salon', 'public.tipe-salon');
Route::view('/tipe-store', 'public.tipe-store');

Route::prefix('user')->group(function () {
    Route::view('/mitra', 'user.dashboard')->name('user.dashboard');
});

Route::prefix('mitra')->group(function () {
    Route::resource('join', \App\Http\Controllers\JoinController::class)
        ->only(['index', 'show', 'store'])
        ->names([
            'index' => 'join.mitra.index',
            'store' => 'join.mitra.store'
        ]);
    Route::resource('subscriber', \App\Http\Controllers\SubscriberController::class)
        ->only(['index', 'show', 'create'])
        ->names([
            'index' => 'subscriber.mitra.index',
            'show' => 'subscriber.mitra.show',
            'create' => 'subscriber.mitra.create'
        ]);
});

Route::prefix('admin')->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
        Route::prefix('mitra')->group(function () {
            Route::resource('/', \App\Http\Controllers\Admin\MitraController::class)->names([
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

            Route::get('/{mitra}/timeline/{timeline}', function (User $user, Post $post) {
                return $post;
            });
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


        // Route::get('users/show/{id}', [
        //     'as' => 'admin.users.show',
        //     'uses' => 'UserController@show'
        // ]);
    });
});
