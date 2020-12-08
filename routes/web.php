<?php

use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', function () {

    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::middleware('loggedin')->group(function () {
        Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
        Route::post('login', [AuthController::class, 'login'])->name('login');
    });

    Route::middleware(['auth','can:isAdmin'])->group(function () {
        // Logout action if user is loggedin
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', function () {

            return view('admin.welcome');
        })->name('adminIndex');
        Route::get('/test', function () {

            return view('admin.welcome');
        })->name('sss');

        Route::resource('localizations', LocalizationController::class)
            ->name('index', 'localizationIndex')
            ->name('create','localizationCreateView')
            ->name('store','localizationCreate')
            ->name('edit','localizationEditView')
            ->name('update','localizationUpdate')
            ->name('destroy','localizationDestroy')
            ->name('show','localizationShow')
        ;
    });
});
