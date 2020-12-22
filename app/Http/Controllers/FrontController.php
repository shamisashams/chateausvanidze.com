<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Localization;
use App\Models\Product;
use App\Models\ProductAnswers;
use App\Models\ProductFeatures;
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
    public function products($locale, Request $request)
    {
        $products = Product::where('status', 1);
        
        if($request->answers !== null){
            $answerarray = ProductAnswers::select('product_id')->whereIn('answer_id', array_map('intval', $request->answers))->get()->toArray();
            $products = $products->whereIn('id', $answerarray);
        }
        if($request->minprice !== null){
            $products = $products->where('price', '>=', intval($request->minprice*100));
        }
        if($request->maxprice !== null){
            $products = $products->where('price', '<=', intval($request->maxprice*100));
        }
        if($request->sort !== null || $request->sort != ''){
            switch($request->sort){
                case "priceup" : 
                    $products = $products->orderBy('price', 'asc');
                    break;
                case "pricedown" :
                    $products = $products->orderBy('id', 'desc');
                    break;
                case "popular" : 
                    $products = $products->orderBy('position', 'asc');
                    break;
                default : 
                    $products = $products->orderBy('id', 'desc');

            }
        }

        $products = $products->paginate(20);
        $features = ProductFeatures::select('feature_id')->groupBy('feature_id')->get()->map(function ($feature) {
            return $feature->feature;
        });
        $localization = Localization::where('abbreviation', app()->getLocale())->first()->id;
        $minprice = Product::min('price');
        $maxprice = Product::max('price');
        return view('pages.products', compact('products', 'localization', 'features', 'minprice', 'maxprice'));
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
