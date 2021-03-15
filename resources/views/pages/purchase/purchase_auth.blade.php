@extends('layouts.base')
@section('content')
    <main>

        <!-- section 1 -  buy + edit info -->
        <section id="buy-section">
            <div class="container">

                <!--fixed aside-->
                <div class="order-info-aside">
                    <div class="order-aside-wrap">
                        <h2>{{__('client.information_on_order')}}</h2>

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


                </div>

                <div class="buy__left-container">
                    <h2 class="buy-warning-title">
                        {{__('client.purchase_')}}
                    </h2>

                    <h2 class="buy__title">{{__('client.delivery')}}</h2>

                    <form class="buy-grid" action="{{route('makePurchase', app()->getLocale())}}" method="POST">
                        @csrf
                        <div class="autorised__input editability">
                            <input required type="text" id="first-name"
                                   value="{{ Auth::user()->language()->where('language_id', $localization)->first()->first_name ?? ''}}"
                                   name="first_name" placeholder="{{__('client.first_name')}}">
                            <label for="">name</label>
                            <button type="button" onclick="editable(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091"
                                     viewBox="0 0 10.092 10.091">
                                    <path id="Icon_awesome-pen" data-name="Icon awesome-pen"
                                          d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z"
                                          transform="translate(0.001 -0.001)"></path>
                                </svg>

                            </button>
                        </div>

                        <div class="autorised__input editability">
                            <input required type="text" name="last_name" id="last-name"
                                   value="{{ Auth::user()->language()->where('language_id', $localization)->first()->last_name ?? ''}}"
                                   placeholder="{{__('client.last_name')}}">
                            <label for="">last_name</label>
                            <button type="button" onclick="editable(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091"
                                     viewBox="0 0 10.092 10.091">
                                    <path id="Icon_awesome-pen" data-name="Icon awesome-pen"
                                          d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z"
                                          transform="translate(0.001 -0.001)"></path>
                                </svg>

                            </button>
                        </div>

                        <div class="autorised__input editability">
                            <input required type="email" name="email" id="email" value="{{ Auth::user()->email}}"
                                   placeholder="{{__('client.email')}}">
                            <label for="">ელ-ფოსტა</label>
                            <button type="button" onclick="editable(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091"
                                     viewBox="0 0 10.092 10.091">
                                    <path id="Icon_awesome-pen" data-name="Icon awesome-pen"
                                          d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z"
                                          transform="translate(0.001 -0.001)"></path>
                                </svg>

                            </button>
                        </div>

                        <div class="autorised__input editability">
                            <input required type="number" name="phone" id="phone" value="{{ Auth::user()->phone ?? ''}}"
                                   placeholder="{{__('client.phone')}}">
                            <label for="">მობილურის ნომერი</label>
                            <button type="button" onclick="editable(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091"
                                     viewBox="0 0 10.092 10.091">
                                    <path id="Icon_awesome-pen" data-name="Icon awesome-pen"
                                          d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z"
                                          transform="translate(0.001 -0.001)"></path>
                                </svg>

                            </button>
                        </div>


                        <div class="autorised__input editability">
                            <input required type="text" name="address" id="address"
                                   value="{{ Auth::user()->language()->where('language_id', $localization)->first()->address ?? ''}}"
                                   placeholder="{{__('client.address')}}">
                            <label for="">მისამართი</label>
                            <button type="button" onclick="editable(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091"
                                     viewBox="0 0 10.092 10.091">
                                    <path id="Icon_awesome-pen" data-name="Icon awesome-pen"
                                          d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z"
                                          transform="translate(0.001 -0.001)"></path>
                                </svg>

                            </button>
                        </div>

                        <div class="autorised__input ">
                        </div>

                        <div class="choose-pay">
                            <h2 class="buy__title">{{__('client.payment_methods')}}</h2>

                            <div class="payment-methods">
                                <label class="checkbox">
                                    <input type="radio" onclick="showHideBanks(this)" name="paymethod" value="card">
                                    <span></span>
                                    {{__('client.pay_card')}}
                                </label>

                                <label class="checkbox">
                                    <input checked="checked" onclick="showHideBanks(this)" type="radio" name="paymethod"
                                           value="cash">
                                    <span></span>
                                    {{__('client.pay_courier')}}
                                </label>

                            </div>
                            <div class="banks-flex">
                            @foreach($banks as $bank)
                                <div id="banks-container" class="bank-checkbox">
                                        <input class="bank-items" type="radio" name="bank_id" value="{{$bank->id}}">
                                        {{__('client.')}}{{$bank->config_path}}
                                        <span>&check;</span>

                                </div>
                            @endforeach
                            </div>

                            <p hidden id="bank-error-message"
                               style="margin-top:-15px;font-size: 12px;color:red">{{__('client.please_choose_bank')}}</p>
                        </div>


                            <button onclick="checkIfSelected()" type="button" class="aside-card__delete-btn"
                                    style="width: max-content; padding:5px">
                                {{__('client.confirm')}}
                            </button>

                    </form>
                    <h2 class="buy__title">{{__('client.delivery_3_days')}}</h2>

                    <div class="buy__products" id="buyproduct">


                    </div>


                </div>


            </div>
        </section>
    </main>
@endsection
