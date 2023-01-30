@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  buy + register -->
    <section id="buy-section">
        <div class="container">

             <!--fixed aside-->
             <div class="order-info-aside">
                <div class="order-aside-wrap">
                    <h2>{{__('client.order_information')}}</h2>
                    <p>
                        <span>{{__('client.delivery_price')}}</span>
                        <span>0₾</span>
                    </p>
                    <p>
                        <span>{{__('client.product_price')}}</span>
                        <span><span id="buy-prod"></span> ₾</span>
                    </p>

                    <div class="order-aside-divider"></div>

                    <p class="order-total">
                        <span>{{__('client.total_price')}}:</span>
                        <span class="buy-total"><span id="buy-total"></span> ₾</span>
                    </p>
                </div>

                <a class="order-aside-btn" href="">
                    {{__('client.end_order')}}
                </a>

            </div>
            
            <div class="buy__left-container">
                <h2 class="buy-warning-title">
                    {{__('client.authorization_validate_1')}}
                </h2>

                <h2 class="buy__title">{{__('client.delivery')}}</h2>
{{--                <p style="margin-top:10px">{{__('client.authorization_validate_2')}}</p>--}}
                <div class="buy__products" id="buyproduct">
                </div>
            </div>
        </div>
    </section>



</main>
@endsection