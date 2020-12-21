<?php

namespace App\Http\Controllers;
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
        $products = session('products') ?? array();
        return response()->json(array('status' => true, 'count' => count($products)));
    }
}
