@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  cart -->
    <section id="cart-section">
        <div class="container">

            <!--fixed aside-->
            <div class="order-info-aside">
                <div class="order-aside-wrap">
                    <h2>ინფორმაცია შეკვეთაზე</h2>

                    <p>
                        <span>პროდუქტის რაოდენობა</span>
                        <span>1</span>
                    </p>
                    <p>
                        <span>მიტანის ღირებულება</span>
                        <span>5₾</span>
                    </p>
                    <p>
                        <span>პროდუქტის ფასი</span>
                        <span>404₾</span>
                    </p>

                    <div class="order-aside-divider"></div>

                    <p class="order-total">
                        <span>სულ თანხა:</span>
                        <span class="buy-total">409₾</span>
                    </p>
                </div>

                <a class="order-aside-btn" href="{{route('Purchase', app()->getLocale())}}">
                    ყიდვის გაგრძელება
                </a>

            </div>
            
            <div class="cart__left-container">
                <div class="cart-section__title">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                            <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                              <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                              <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                              <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                            </g>
                          </svg>
                    </span>
                    ჩემი კალათა
                </div>

                <div class="buy__products">

                    <div class="card-long">
                        <div class="card-long__img">
                            <img class="img-cover" src="{{asset('../img/product-3.png')}}" alt="">
                        </div>

                        <div class="card-long__text">
                            <h2>
                                <a href="">შატო ზვანიძე დასახელება</a>
                                <span>მშრალი 0.75ლ</span>
                            </h2>
                            <div class="card-long__pricing">
                                <span class="cur-p">399.00₾</span>
                                <span class="old-p">449.00₾</span>
                            </div>
                        </div>

                        <div class="card-long__qty">
                            <h2>რაოდენობა</h2>

                            <div class="plus-minus-box ">
                                <button class="qty_btn" type="button" onclick="QuantityMinus(this)"> -</button>
                            
                                <input type="number" name="qty" min="1" max="11" value="1" class="qty_input" readonly="">
        
                                <button class="qty_btn" type="button" onclick="QuantityPlus(this)">+</button>
                            </div>

                            <button class="card-long__delete-btn">წაშლა</button>
                        </div>

                    </div>

                    <div class="card-long">
                        <div class="card-long__img">
                            <img class="img-cover" src="{{asset('../img/product-4.png')}}" alt="">
                        </div>

                        <div class="card-long__text">
                            <h2>
                                <a href="">შატო ზვანიძე დასახელება</a>
                                <span>მშრალი 0.75ლ</span>
                            </h2>
                            <div class="card-long__pricing">
                                <span class="cur-p">399.00₾</span>
                                <span class="old-p">449.00₾</span>
                            </div>
                        </div>

                        <div class="card-long__qty">
                            <h2>რაოდენობა</h2>

                            <div class="plus-minus-box ">
                                <button class="qty_btn" type="button" onclick="QuantityMinus(this)"> -</button>
                            
                                <input type="number" name="qty" min="1" max="11" value="1" class="qty_input" readonly="">
        
                                <button class="qty_btn" type="button" onclick="QuantityPlus(this)">+</button>
                            </div>

                            <button class="card-long__delete-btn">წაშლა</button>
                        </div>

                    </div>

                    <div class="card-long">
                        <div class="card-long__img">
                            <img class="img-cover" src="{{asset('../img/product-2.png')}}" alt="">
                        </div>

                        <div class="card-long__text">
                            <h2>
                                <a href="">შატო ზვანიძე დასახელება</a>
                                <span>მშრალი 0.75ლ</span>
                            </h2>
                            <div class="card-long__pricing">
                                <span class="cur-p">399.00₾</span>
                                <span class="old-p">449.00₾</span>
                            </div>
                        </div>

                        <div class="card-long__qty">
                            <h2>რაოდენობა</h2>

                            <div class="plus-minus-box ">
                                <button class="qty_btn" type="button" onclick="QuantityMinus(this)"> -</button>
                            
                                <input type="number" name="qty" min="1" max="11" value="1" class="qty_input" readonly="">
        
                                <button class="qty_btn" type="button" onclick="QuantityPlus(this)">+</button>
                            </div>

                            <button class="card-long__delete-btn">წაშლა</button>
                        </div>

                    </div>
                </div>

                <div class="total-info-panel">
                    <p>
                        რაოდენობა (<span class="quantity">2</span>)
                    </p>
                    <p>სულ თანხა: <span class="total-cost">404₾</span>
                    </p>
                </div>


            </div>
           
            
        </div>
    </section>

</main>
@endsection