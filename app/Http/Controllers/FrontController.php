<?php

namespace App\Http\Controllers;

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
        return view('pages.favorites');
    }
    public function club()
    {
        return view('pages.club');
    }
    // Product
    public function products()
    {
        return view('pages.products');
    }
    public function productshow($id)
    {
        return view('pages.product_details');
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
