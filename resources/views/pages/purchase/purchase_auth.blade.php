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
                        <span>მიტანის ღირებულება</span>
                        <span>5₾</span>
                    </p>
                    <p>
                        <span>პროდუქტის ფასი</span>
                        <span><span id="buy-prod"></span> ₾</span>
                    </p>

                    <div class="order-aside-divider"></div>

                    <p class="order-total">
                        <span>სულ თანხა:</span>
                        <span class="buy-total"><span id="buy-total"></span> ₾</span>
                    </p>
                </div>



            </div>
            
            <div class="buy__left-container">
                <h2 class="buy-warning-title">
                    მომწოდებლებისა და მაღაზიების შეზღუდულ გრაფიკზე გადასვლის გამო, შესაძლოა თქვენი შეკვეთის მოწოდება გახანგრძლივდეს
                </h2>

                <h2 class="buy__title">მიწოდება</h2>

                <form class="buy-grid" action="{{route('makePurchase', app()->getLocale())}}" method="POST">
                    @csrf
                    <div class="autorised__input editability">
                        <input required type="text" value="{{ Auth::user()->language()->where('language_id', $localization)->first()->first_name ?? ''}}" name="first_name" placeholder="სახელი" >
                        <label for="">სახელი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input required type="text" name="last_name" value="{{ Auth::user()->language()->where('language_id', $localization)->first()->last_name ?? ''}}" placeholder="გვარი" >
                        <label for="">გვარი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input required type="email" name="email"  value="{{ Auth::user()->email}}" placeholder="ელ-ფოსტა" >
                        <label for="">ელ-ფოსტა</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input required type="number" name="phone" value="{{ Auth::user()->phone ?? ''}}" placeholder="მობილურის ნომერი" >
                        <label for="">მობილურის ნომერი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>
                    



                    <div class="autorised__input editability">
                        <input required type="text" name="address"  value="{{ Auth::user()->language()->where('language_id', $localization)->first()->address ?? ''}}" placeholder="მისამართი" >
                        <label for="">მისამართი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input ">
                    </div>

                <div>
                    <h2 class="buy__title">გადახდის მეთოდები</h2>

                    <div class="payment-methods" style="float: left">
                        <label class="checkbox">
                            <input type="radio" name="paymethod" value="card">
                            <span></span>
                            ბარათით გადახდა
                        </label>

                        <label class="checkbox">
                            <input checked="checked" type="radio" name="paymethod" value="cash">
                            <span></span>
                            კურიერთან გადახდა
                        </label>

                    </div>
                </div>
                <div></div>
                <div >
                    <button type="submit" class="aside-card__delete-btn" style="width: max-content; padding:5px">
                        დადასტურება
                    </button>
                </div>
            </form>
                <h2 class="buy__title">მიწოდება 3 სამუშაო დღეში</h2>

                <div class="buy__products" id="buyproduct">

                    
                </div>



            </div>
           
            
        </div>
    </section>


   

    

</main>
@endsection