<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $locale, $id)
    {
        $products = session('products') ?? array();
        $bool = true;
        foreach ($products as $item) {
            if($item->product_id == $id){
                $bool = false;
                break;
            }

        }
        if ($bool) {
            $products[] = (object) ['product_id' => $id, 'quantity' => 1];
        }
        $request->session()->put('products', $products);
        return response()->json(array('status' => true));
    }
    public function getCartCount()
    {
        $products = array();
        $cart = session('products') ?? array();
        if($cart !== null){
            foreach ($cart as $item) {
                $products[] = $item->product_id;
            }
        }
        $localization = Localization::where('abbreviation', app()->getLocale())->first()->id ?? 1;
        $total = 0;
        $products = Product::whereIn('id', array_map('intval', $products))->get()->map(function ($prod) use ($localization, $total) {
            $item = [
                'id' => $prod->id,
                'price' => $prod->price,
                'sale' => ($prod->sale === true) ? $prod->sale_price : '',
                'title' => $prod->language()->where('language_id', $localization)->first()->title ?? '',
                'description' => $prod->language()->where('language_id', $localization)->first()->description ?? '',
                'file' => $prod->files[0]->name ?? ''
            ];
            $total += ($prod->sale === true) ? $prod->sale_price : $prod->price;
            return $item;
        });
        return response()->json(array('status' => true, 'count' => count($cart), 'products' => $products, 'total' => $total));
    }
}
