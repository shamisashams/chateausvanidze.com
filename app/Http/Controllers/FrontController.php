<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{

    public function cart()
    {
        return view('pages.cart');
    }
    public function favorites()
    {
        if(!Auth::user()){
            return redirect()->back();
        }
        $favorites = Auth::user()->favorites;
        $localization = Localization::where('abbreviation', app()->getLocale())->first()->id;
        return view('pages.favorites', compact('favorites', 'localization'));
    }
    public function club()
    {
        return view('pages.club');
    }
    // Product
    public function products()
    {
        $products = Product::where('status', 1)->paginate(20);
        $localization = Localization::where('abbreviation', app()->getLocale())->first()->id;
        return view('pages.products', compact('products', 'localization'));
    }
    public function productshow($locale, $id)
    {
        $product = Product::findOrFail(intval($id));
        $localization = Localization::where('abbreviation', app()->getLocale())->first()->id;
        return view('pages.product_details', compact('product', 'localization'));
    }
     
    // Blog
    public function blog()
    {
        return view('pages.blog');
    }
    public function blogshow($id)
    {
        return view('pages.blog_details');
    }

    // Puchase
    public function purchase()
    {
        if (Auth::user()) {
            return view('pages.purchase.purchase_auth');
        }
        
        return view('pages.purchase.purchase_un_auth');
    }

    public function cabinetorders()
    {
        return view('pages.cabinet_orders');
    }
}
