<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Models\Localization;
use App\Models\Order;
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
                'transaction_id' => uniqid(),
                'total_price' => $total,
                'paymethod' => $request->paymethod,
                'pay_status' => Order::STATUS_PENDING,
                'full_name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
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
            return redirect('https://mpi.gc.ge/page1/?lang_code=ka&merch_id=A903470D9AA87DAA2BC7&back_url_s=https://chateausvanidze.com/ge/successful-payment&back_url_f=https://chateausvanidze.com/ge/fail-payment&o.order_id=' . $order->id);

            session(['products' => []]);
            return redirect()->route('CabinetOrders', app()->getLocale());
        } else {
            return redirect()->back();
        }
    }

    public function checkPaymentAvailUrl(Request $request)
    {
        $orderId = $request['o_order_id'];
        $order = Order::where(['id' => $orderId])->first();
        if ($order) {
            $xml = <<<XML
<?xml version="1.0" encoding="utf-8" standalone="yes"?><payment-avail-response>

        <result>

          <code>1</code>

          <desc>OK</desc>

        </result>

        <merchant-trx>$order->transaction_id</merchant-trx>

        <purchase>

          <shortDesc>Buy</shortDesc>

          <longDesc>Buy Wines</longDesc>

          <account-amount>

            <amount>$order->total_price</amount>

            <currency>981</currency>

            <exponent>2</exponent>

          </account-amount>

        </purchase>

        </payment-avail-response>
XML;
        } else {
            $xml = <<<XML
<?xml version="1.0" encoding="utf-8" standalone="yes"?>
        <payment-avail-response>
          <result>
            <code>2</code>
            <desc>Unable to accept this payment</desc>
          </result>
        </payment-avail-response>
XML;
        }
        return response()->xml($xml);


    }

    public function registerPaymentUrl(Request $request)
    {
        $result = $request['result_code'];
        $code = $result == 1 ? 1 : 2;
        $desc = $result == 1 ? "OK" : "Temporary unavailable";
        $orderId = $request['o_order_id'];
        $status = $result == 1 ? Order::STATUS_APPROVED : Order::STATUS_FAILED;
        Order::where(['id' => $orderId])
            ->update([
                'transaction_id' => $request['trx_id'],
                'pay_status' => $status,
                'card_number' => $request['p_maskedPan'],
                'card_holder' => $request['p_cardholder']
            ]);
        $xml = <<<XML
<?xml version="1.0" encoding="utf-8" standalone="yes"?>
      <register-payment-response>
        <result>
          <code>$code</code>
          <desc>$desc</desc>
        </result>
      </register-payment-response>
XML;
        return response()->xml($xml);

    }
}
