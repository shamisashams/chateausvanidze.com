@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  buy + edit info -->
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
                    მომწოდებლებისა და მაღაზიების შეზღუდულ გრაფიკზე გადასვლის გამო, შესაძლოა თქვენი შეკვეთის მოწოდება გახანგრძლივდეს
                </h2>

                <h2 class="buy__title">მიწოდება</h2>

                <form class="buy-grid">
                    <div class="autorised__input editability">
                        <input readonly="true" type="text" value="ხვიჩა" placeholder="სახელი" required="">
                        <label for="">სახელი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input readonly="true" type="text" value="ხვიჩია" placeholder="გვარი" required="">
                        <label for="">გვარი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input readonly="true" type="email" value="mgaloblishvilige@gmail.com" placeholder="ელ-ფოსტა" required="">
                        <label for="">ელ-ფოსტა</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input readonly="true" type="number" value="579031950" placeholder="მობილურის ნომერი" required="">
                        <label for="">მობილურის ნომერი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>
                    

                    <div class="autorised__input">
                        <select name="" id="">
                            <option value="თბილისი">თბილისი</option>
                            <option value="ბათუმი">ბათუმი</option>
                            <option value="რუსთავი">რუსთავი</option>
                            <option value="გორი">გორი</option>
                            <option value="ზუგდიდი">ზუგდიდი</option>
                        </select>
                        <label for="">ქალაქი</label>
                    </div>    

                    <div class="autorised__input editability">
                        <input readonly="true" type="text" value="თბილისი, ქუჩის სახელი N4" placeholder="ქუჩა" required="">
                        <label for="">ქუჩა</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
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