<?php

namespace App\Http\Controllers;

use App\Models\Localization;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index($locale)
    {
        $products = array();
        $cart = session('products') ?? array();
        
        $total = 0;
        if($cart !== null){
            foreach ($cart as $item) {
                $products[] = $item->product_id;
            }
            $localization = Localization::where('abbreviation', app()->getLocale())->first()->id ?? 1;
            $products = Product::whereIn('id', array_map('intval', $products))->get()->map(function ($prod) use ($localization, $total, $cart) {
                $item = [
                    'id' => $prod->id,
                    'price' => $prod->price,
                    'sale' => ($prod->sale == 1) ? $prod->sale_price : '',
                    'title' => $prod->language()->where('language_id', $localization)->first()->title ?? '',
                    'description' => $prod->language()->where('language_id', $localization)->first()->description ?? '',
                    'file' => $prod->files[0]->name ?? ''
                ];
                foreach ($cart as $key => $value) {
                    if($prod->id == $value->product_id){
                        $item['quantity'] = $value->quantity;
                    }
                }
               
                return $item;
            });
            foreach ($cart as $item) {
                $total += intval($item->quantity) * intval($item->price)/100;
            }
           
        }
        
        return view('pages.cart', compact('products', 'total'));
    }
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
        $product = Product::findOrFail(intval($id));
        if ($bool) {
            $products[] = (object) ['product_id' => $product->id, 'quantity' => 1, 'price'=> ($product->sale == 1) ? $product->sale_price : $product->price];
            $request->session()->put('products', $products);
            return response()->json(array('status' => true));
        }
        return response()->json(array('status' => false));
    }
    public function getCartCount()
    {
        $products = array();
        $cart = session('products') ?? array();
        
        $total = 0;
        if($cart !== null){
            foreach ($cart as $item) {
                $products[] = $item->product_id;
            }
            $localization = Localization::where('abbreviation', app()->getLocale())->first()->id ?? 1;
            $products = Product::whereIn('id', array_map('intval', $products))->get()->map(function ($prod) use ($localization, $total, $cart) {
                $item = [
                    'id' => $prod->id,
                    'price' => $prod->price,
                    'sale' => ($prod->sale == 1) ? $prod->sale_price : '',
                    'title' => $prod->language()->where('language_id', $localization)->first()->title ?? '',
                    'description' => $prod->language()->where('language_id', $localization)->first()->description ?? '',
                    'file' => $prod->files[0]->name ?? ''
                ];
                foreach ($cart as $key => $value) {
                    if($prod->id == $value->product_id){
                        $item['quantity'] = $value->quantity;
                    }
                }
               
                return $item;
            });
            foreach ($cart as $item) {
                $total += intval($item->quantity) * intval($item->price)/100;
            }
           
        }
        $translations = [
            'count' => __('client.count'),
            'add_to_cart' => __('client.add_to_cart'),
            'clear' => __('client.clear')
        ];
        return response()->json(array('status' => true, 'count' => count($cart), 'products' => $products, 'total' => $total,'translations' => $translations));
    }
    public function addCartCount($locale, $id, $type)
    {
        $cart = session('products') ?? array();
        if($cart !== null){
            foreach ($cart as $key => $item) {
                if($item->product_id == intval($id)){
                    ($type == 1) ? $cart[$key]->quantity++ : $cart[$key]->quantity--;
                }
                if($item->quantity <= 0){
                    unset($cart[$key]);
                }
            }
            session(['products' => $cart]);
            return response()->json(array('status' => true));
        }
        return response()->json(array('status' => false));
    }
    public function removeFromCart($locale, $id)
    {
        $cart = session('products') ?? array();
        if($cart !== null){
            foreach ($cart as $key => $item) {
                if($item->product_id == intval($id)){
                    unset($cart[$key]);
                }
            }
            session(['products' => $cart]);
            return response()->json(array('status' => true));
        }
        return response()->json(array('status' => false));
    }
}
