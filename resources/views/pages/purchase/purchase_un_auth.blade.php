@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  buy + register -->
    <section id="buy-section">
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

                <a class="order-aside-btn" href="">
                    შეკვეთის დასრულება
                </a>

            </div>
            
            <div class="buy__left-container">
                <h2 class="buy-warning-title">
                    თქვენ ხართ არაავტორიზირებული მომხმარებელი, შეკვეთის განთავსებისთვის გთხოვთ გაიარეთ რეგისტრაცია და შეავსეთ ქვემოთ მოცემული ველები
                </h2>

                <h2 class="buy__title">მიწოდება</h2>

                <form class="buy-grid">
                    <div class="unauth__input">
                        <input type="text" placeholder="სახელი" required="">
                        <label for="">სახელი</label>
                    </div>

                    <div class="unauth__input">
                        <input type="text" placeholder="გვარი" required="">
                        <label for="">გვარი</label>
                    </div>

                    <div class="unauth__input">
                        <input type="email" placeholder="ელ-ფოსტა" required="">
                        <label for="">ელ-ფოსტა</label>
                    </div>

                    <div class="unauth__input">
                        <input type="number" placeholder="მობილურის ნომერი" required="">
                        <label for="">მობილურის ნომერი</label>
                    </div>

                    <div class="unauth__input password-wrap">
                        <input class="auth__input" type="password" placeholder="პაროლი" maxlength="12">
                        <label for="">პაროლი</label>
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                    <div class="unauth__input password-wrap">
                        <input class="auth__input" type="password" placeholder="დაადასტურეთ პაროლი" maxlength="12">
                        <label for="">დაადასტურეთ პაროლი</label>
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                </form>

                <h2 class="buy__title">გადახდის მეთოდები</h2>

                <div class="payment-methods">
                    <label class="checkbox">
                        <input type="radio" name="pay-method" value="val">
                        <span></span>
                        ბარათით გადახდა
                    </label>

                    <label class="checkbox">
                        <input checked="checked" type="radio" name="pay-method" value="val">
                        <span></span>
                        კურიერთან გადახდა
                    </label>

                </div>

                <h2 class="buy__title">მიწოდება 3 სამუშაო დღეში</h2>

                <div class="buy__products">
                    <div class="card-long">
                        <div class="card-long__img">
                            <img class="img-cover" src="{{asset('../img/product-1.png')}}" alt="">
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