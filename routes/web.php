<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AnswerController;
use App\Http\Controllers\Admin\DictionaryController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CabinetController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Support\Facades\Auth;
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


    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            if(Auth::user() && Auth::user()->can('isAdmin')){
                return redirect(\route('productIndex',app()->getLocale()));
            }else{
                if(Auth::user()){
                    return view('welcome');
                }else{
                    return redirect()->route('login-view', app()->getLocale());
                }
            }
        })->name('adminHome');

        Route::get('login', [AuthController::class, 'loginView'])->name('login-view');
        Route::middleware(['auth', 'can:isAdmin'])->group(function () {



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
    Route::get('/verifyaccount/{token}', [AuthController::class, 'verify'])->name('verify');

    Route::get('/', [HomeController::class,'index'])->name('welcome');

    Route::get('/facebook', [AuthController::class, 'facebook'])->name('loginfacebook');
    Route::get('/facebook/callback', [AuthController::class, 'facebookredirect'])->name('facebookredirect');

    Route::get('/google', [AuthController::class, 'google'])->name('google');
    Route::get('/google/callback', [AuthController::class, 'googleredirect'])->name('googleredirect');

    Route::get('/about-us', [AboutController::class, 'index'])->name('AboutUs');
    Route::get('/products', [ProductController::class, 'render'])->name('Products');
    Route::get('/product/{id}', [ProductController::class, 'show'])->name('ProductShow');

    Route::get('/club', [FrontController::class, 'club'])->name('Club');

    Route::get('/blog', [BlogController::class, 'index'])->name('Blog');
    Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('BlogShow');

    // Cabinet
    Route::get('/cabinet-info', [CabinetController::class, 'cabinetInfo'])->name('cabinetInfo');
    Route::put('/cabinet-info/{user}', [CabinetController::class, 'cabinetInfoUpdate'])->name('cabinetInfoUpdate');
    Route::get('/cabinet-orders', [CabinetController::class, 'cabinetorders'])->name('CabinetOrders');

    Route::match(['get','post'],'/contact-us', [ContactController::class, 'index'])->name('ContactUs');


    // Purchase
    Route::get('/purchase', [PurchaseController::class, 'index'])->name('Purchase');
    Route::post('/makepurchase', [PurchaseController::class, 'buy'])->name('makePurchase');

    // Cart Functions
    Route::get('/cart', [CartController::class, 'index'])->name('Cart');
    Route::get('/addcartcount/{id}/{type}', [CartController::class, 'addCartCount'])->name('addCartCount');
    Route::get('/removefromcart/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');
    Route::get('/addtocart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/getcartcount', [CartController::class, 'getCartCount'])->name('getCartCount');

    // Favorite Functions
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('Favorites');
    Route::get('/addtofavorites/{id}', [FavoriteController::class, 'addToFavorites'])->name('addToFavorites');
    Route::get('/removefromfavorites/{id}', [FavoriteController::class, 'removeFromFavorites'])->name('removeFromFavorites');
    Route::get('/getfavoritecount', [FavoriteController::class, 'getFavoriteCount'])->name('getFavoriteCount');

//    Route::get('invoice',[InvoiceController::class,'index'])->name('getInvoice');

    Route::get('/invoice/{order}', [InvoiceController::class,'index'])->name('getInvoice');

});

