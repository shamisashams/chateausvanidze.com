<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param string $lang
     *
     * @return Application
     */
    public function index(string $lang, Request $request)
    {
        $page = Page::where(['status' => true, 'slug' => 'home'])->first();
        if (!$page) {
            return abort('404');
        }

        $vipProducts = Product::inRandomOrder()->where('status',true)->limit(10)->get();
        $popularProducts = Product::inRandomOrder()->limit(10)->get();


        return view('pages.home.home',[
            'page' => $page,
            'vipProducts' => $vipProducts,
            'popularProducts' => $popularProducts
        ]);
    }
}
