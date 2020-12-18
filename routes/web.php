<?php

use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\DictionaryController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\LocaleFileController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FrontController;
use App\Models\Dictionary;
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
    })->name('welcome');

    Route::prefix('admin')->group(function () {
        Route::middleware('loggedin')->group(function () {
            Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
        });

        Route::middleware(['auth', 'can:isAdmin'])->group(function () {

            Route::get('/', function () {
                return view('admin.welcome');
            })->name('adminHome');

            // Files
            Route::get('/files', [FileController::class, 'index'])->name('fileIndex');
            Route::get('/files/create', [FileController::class, 'create'])->name('FileCreate');
            Route::post('/files/store', [FileController::class, 'store'])->name('FileStore');
            Route::get('/removeimage/{file}', [FileController::class, 'remove'])->name('removeImage');

            // Localizations
            Route::resource('localizations', LocalizationController::class)
                ->name('index', 'localizationIndex')
                ->name('create', 'localizationCreateView')
                ->name('store', 'localizationCreate')
                ->name('edit', 'localizationEditView')
                ->name('update', 'localizationUpdate')
                ->name('destroy', 'localizationDestroy')
                ->name('show', 'localizationShow');

            // Features
            Route::resource('features', FeatureController::class)
                ->name('index', 'featureIndex')
                ->name('create', 'featureCreateView')
                ->name('store', 'featureCreate')
                ->name('edit', 'featureEditView')
                ->name('update', 'featureUpdate')
                ->name('destroy', 'featureDestroy')
                ->name('show', 'featureShow');

            // Language
            Route::resource('languages', DictionaryController::class)
                ->name('index', 'DictionaryIndex')
                ->name('store', 'DictionaryStore')
                ->name('create', 'DictionaryCreate')
                ->name('show', 'DictionaryShow')
                ->name('edit', 'DictionaryEdit')
                ->name('update', 'DictionaryUpdate')
                ->name('destroy', 'DictionaryDestroy');

            Route::get('language/rescan',[DictionaryController::class,'rescan'])->name('languageScanner');

            // Answers
            Route::resource('answers', AnswerController::class)
                ->name('index', 'AnswerIndex')
                ->name('store', 'AnswerStore')
                ->name('show', 'AnswerShow')
                ->name('create', 'AnswerCreate')
                ->name('edit', 'AnswerEdit')
                ->name('update', 'AnswerUpdate')
                ->name('destroy', 'AnswerDestroy');
            // News
            Route::resource('news', NewsController::class)
                ->name('index', 'NewsIndex')
                ->name('store', 'NewsStore')
                ->name('show', 'NewsShow')
                ->name('create', 'NewsCreate')
                ->name('edit', 'NewsEdit')
                ->name('update', 'NewsUpdate')
                ->name('destroy', 'NewsDestroy');

            // Products
            Route::resource('products', ProductController::class)
                ->name('index', 'productIndex')
                ->name('create', 'productCreateView')
                ->name('store', 'productCreate')
                ->name('edit', 'productEditView')
                ->name('update', 'productUpdate')
                ->name('destroy', 'productDestroy')
                ->name('show', 'productShow');

            // Users
            Route::resource('users',UserController::class)
                ->name('index', 'userIndex')
                ->name('create', 'userCreateView')
                ->name('store', 'userCreate')
                ->name('edit', 'userEditView')
                ->name('update', 'userUpdate')
                ->name('destroy', 'userDestroy')
                ->name('show', 'userShow');

            // Pages
            Route::resource('pages', PageController::class)->except('destroy')
                ->name('index', 'pageIndex')
                ->name('create', 'pageCreateView')
                ->name('store', 'pageCreate')
                ->name('edit', 'pageEditView')
                ->name('update', 'pageUpdate')
                ->name('show', 'pageShow');

            // Settings
            Route::resource('settings', SettingController::class)->except('destroy')
                ->name('index', 'settingIndex')
                ->name('create', 'settingCreateView')
                ->name('store', 'settingCreate')
                ->name('edit', 'settingEditView')
                ->name('update', 'settingUpdate')
                ->name('show', 'settingShow');
        });



    });

    // User Rotes

    // Auth
    Route::post('/register', [AuthController::class, 'register'])->name('Register');

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    
    Route::get('/facebook', [AuthController::class, 'facebook'])->name('loginfacebook');
    Route::get('/facebook/redirect', [AuthController::class, 'facebookredirect'])->name('facebookredirect');

    Route::get('/google', [AuthController::class, 'google'])->name('google');
    Route::get('/google/redirect', [AuthController::class, 'googleredirect'])->name('googleredirect');

    Route::get('/about-us', [FrontController::class, 'aboutus'])->name('AboutUs');
    Route::get('/products', [FrontController::class, 'products'])->name('Products');
    Route::get('/product/{id}', [FrontController::class, 'productshow'])->name('ProductShow');

    Route::get('/club', [FrontController::class, 'club'])->name('Club');
    Route::get('/favorites', [FrontController::class, 'favorites'])->name('Favorites');

    Route::get('/blog', [FrontController::class, 'blog'])->name('Blog');
    Route::get('/blog/{id}', [FrontController::class, 'blogshow'])->name('BlogShow');
    
    // Cabinet
    Route::get('/cabinet-info', [FrontController::class, 'cabinetinfo'])->name('CabinetInfo');
    Route::get('/cabinet-orders', [FrontController::class, 'cabinetorders'])->name('CabinetOrders');

    // Purchase
    Route::get('/cart', [FrontController::class, 'cart'])->name('Cart');
    Route::get('/purchase', [FrontController::class, 'purchase'])->name('Purchase');
});

