<?php

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
            Route::resource('/potential', \App\Http\Controllers\Admin\PotentialMitraController::class)->names([
                'index' => 'admin.potential_mitra.index',
                'show' => 'admin.potential_mitra.show',
                'create' => 'admin.potential_mitra.create',
                'store' => 'admin.potential_mitra.store',
                'destroy' => 'admin.potential_mitra.destroy',
                'edit' => 'admin.potential_mitra.edit',
            ]);
            Route::resource('/on_going', \App\Http\Controllers\Admin\OnGoingMitraController::class)->names([
                'index' => 'admin.on_going_mitra.index',
                'show' => 'admin.on_going_mitra.show',
                'create' => 'admin.on_going_mitra.create',
                'store' => 'admin.on_going_mitra.store',
                'destroy' => 'admin.on_going_mitra.destroy',
                'edit' => 'admin.on_going_mitra.edit',
            ]);
        });
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class)->names([
            'index' => 'admin.users.index',
            'show' => 'admin.users.show',
            'create' => 'admin.users.create',
            'store' => 'admin.users.store',
            'destroy' => 'admin.users.destroy',
            'edit' => 'admin.users.edit',
        ]);

    });
});
