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
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => ['setlocale']
], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::prefix('admin')->group(function () {
        Route::middleware('loggedin')->group(function () {
            Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
            Route::post('login', [AuthController::class, 'login'])->name('login');
        });

        Route::middleware(['auth', 'can:isAdmin'])->group(function () {
            // Logout action if user is loggedin
            Route::get('logout', [AuthController::class, 'logout'])->name('logout');

            Route::get('/', function () {
                return view('admin.welcome');
            });
            Route::group(config('translation.route_group_config') + ['namespace' => 'JoeDixon\\Translation\\Http\\Controllers'], function ($router) {
                $router->get(config('translation.ui_url'), 'LanguageController@index')
                    ->name('languages.index');

                $router->get(config('translation.ui_url') . '/create', 'LanguageController@create')
                    ->name('languages.create');

                $router->post(config('translation.ui_url'), 'LanguageController@store')
                    ->name('languages.store');

                $router->get(config('translation.ui_url') . '/{language}/translations', 'LanguageTranslationController@index')
                    ->name('languages.translations.index');

                $router->post(config('translation.ui_url') . '/{language}', 'LanguageTranslationController@update')
                    ->name('languages.translations.update');

                $router->get(config('translation.ui_url') . '/{language}/translations/create', 'LanguageTranslationController@create')
                    ->name('languages.translations.create');

                $router->post(config('translation.ui_url') . '/{language}/translations', 'LanguageTranslationController@store')
                    ->name('languages.translations.store');
            });


            Route::resource('localizations', LocalizationController::class)
                ->name('index', 'localizationIndex')
                ->name('create', 'localizationCreateView')
                ->name('store', 'localizationCreate')
                ->name('edit', 'localizationEditView')
                ->name('update', 'localizationUpdate')
                ->name('destroy', 'localizationDestroy')
                ->name('show', 'localizationShow');

        });
    });
});

