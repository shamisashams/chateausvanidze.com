<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Models\Localization;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function index($locale)
    {
        $cart = session('products') ?? null;
        if ($cart !== null || count($cart) > 0) {
            if (Auth::user()) {
                $localization = Localization::where('abbreviation', app()->getLocale())->first()->id;
                return view('pages.purchase.purchase_auth', compact('localization'));
            }
            return view('pages.purchase.purchase_un_auth');
        }
        return redirect()->back();
    }

    public function buy(PurchaseRequest $request, $locale)
    {
        $cart = session('products') ?? null;


        if ($cart !== null) {
            $total = 0;
            // validate and get total
            foreach ($cart as $item) {
                $product = Product::find(intval($item->product_id));
                if ($product && $item->quantity > 0) {
                    $total += $item->quantity * (($product->sale == 1) ? $product->sale_price : $product->price);
                }
            }

            $total += 0; // mitana

            $order = Auth::user()->orders()->create([
                'address' => $request->address,
                'paymethod' => $request->paymethod,
                'pay_status' => 'Aproved',
                'full_name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone
            ]);
            $products = array();
            foreach ($cart as $item) {
                $product = Product::find(intval($item->product_id));
                if ($product && $item->quantity > 0) {
                    $products[] = (array)[
                        'product_id' => $product->id,
                        'price' => ($product->sale == 1) ? $product->sale_price : $product->price,
                        'quantity' => intval($item->quantity)
                    ];
                }
            }
            $order->products()->createMany($products);

            return redirect('https://mpi.gc.ge/page1/?lang_code='.app()->getLocale().'&merch_id=A903470D9AA87DAA2BC7&back_url_s=https://chateausvanidze.com/ge&back_url_f=https://chateausvanidze.com/ge');

            session(['products' => []]);
            return redirect()->route('CabinetOrders', app()->getLocale());
        } else {
            return redirect()->back();
        }
    }

    public function checkPaymentAvailUrl(Request $request)
    {
        dd($request);
        return view('pages.purchase.checkPaymentAvail');
    }

    public function registerPaymentUrl()
    {
        return 'Response register payment url';
    }
}
