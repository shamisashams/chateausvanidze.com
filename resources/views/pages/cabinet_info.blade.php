@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 - cabinet -->
    <section id="cabinet-section">
        <div class="container">

            <!--fixed cabinet nav-->
            <aside class="cabinet-nav">

                <div class="cabinet__user">
                    <div class="cabinet__user-img">
                        <img class="img-cover" src="{{asset('../img/user.png')}}" alt="">
                    </div>
                    <div class="cabinet__user-name">
                        <h2>რატი მგალობლიშვილი</h2>
                        <p>ID - 217923</p>
                    </div>

                </div>

                <div class="cabinet__navigation">
                    <a class="active" href="{{route('CabinetOrders', app()->getLocale())}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.909" height="18.182" viewBox="0 0 15.909 18.182">
                            <path id="Icon_open-document" data-name="Icon open-document" d="M0,0V18.182H15.909V9.091H6.818V0ZM9.091,0V6.818h6.818ZM2.273,4.546H4.546V6.818H2.273Zm0,4.546H4.546v2.273H2.273Zm0,4.546h9.091v2.273H2.273Z"></path>
                          </svg>
                          ჩემი შეკვეთები
                    </a>

                    <a class="active" href="{{route('CabinetInfo', app()->getLocale())}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.909" height="18.182" viewBox="0 0 15.909 18.182">
                            <path id="Icon_open-document" data-name="Icon open-document" d="M0,0V18.182H15.909V9.091H6.818V0ZM9.091,0V6.818h6.818ZM2.273,4.546H4.546V6.818H2.273Zm0,4.546H4.546v2.273H2.273Zm0,4.546h9.091v2.273H2.273Z"></path>
                          </svg>
                          ჩემი მონაცემები
                    </a>


                    <a href="" class="cabinet__exit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.327" height="13.149" viewBox="0 0 12.327 13.149">
                            <path id="Icon_metro-exit" data-name="Icon metro-exit" d="M12.432,10.146V8.5H8.323V6.859h4.109V5.215L14.9,7.681Zm-.822-.822v3.287H7.5v2.465L2.571,12.611V1.928h9.04V6.037h-.822V2.75H4.214L7.5,4.393v7.4h3.287V9.324Z" transform="translate(-2.571 -1.928)"></path>
                        </svg>
                        გასვლა
                    </a>
                </div>
            
            </aside>
          

            <div class="cabinet-content">
                <h1 class="cabinet-content__title">ჩემი მონაცემები</h1>

                <!-- cabinet page content -  information -->
                
                <!-- main info inputs-->
                <div class="cabinet__info-grid">
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
                        <input readonly="true" type="number" value="" placeholder="დაამატე ინფორმაცია" required="">
                        <label for="">პირადი ნომერი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input readonly="true" type="text" value="" placeholder="დაამატე ინფორმაცია" required="">
                        <label for="">დაბადების თარიღი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input readonly="true" type="number" value="579031950" placeholder="დაამატე ინფორმაცია" required="">
                        <label for="">ტელეფონის ნომერი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input readonly="true" type="email" value="mgaloblishvilige@gmail.com" placeholder="დაამატე ინფორმაცია" required="">
                        <label for="">ელ-ფოსტა</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>
                </div>

                <h1 class="cabinet-content__title cabinet-add-phone">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.411" height="18.41" viewBox="0 0 18.411 18.41">
                            <path id="Icon_ionic-ios-call" data-name="Icon ionic-ios-call" d="M22.37,18.918a15.464,15.464,0,0,0-3.23-2.162c-.968-.465-1.323-.455-2.008.038-.57.412-.939.8-1.6.652a9.521,9.521,0,0,1-3.206-2.373,9.453,9.453,0,0,1-2.373-3.206c-.139-.661.244-1.026.652-1.6.494-.685.508-1.04.038-2.008a15.159,15.159,0,0,0-2.162-3.23c-.7-.7-.863-.551-1.251-.412a7.118,7.118,0,0,0-1.146.609A3.456,3.456,0,0,0,4.712,6.682c-.273.59-.59,1.687,1.021,4.553A25.407,25.407,0,0,0,10.2,17.192h0l0,0,0,0h0a25.506,25.506,0,0,0,5.958,4.467c2.866,1.61,3.964,1.294,4.553,1.021a3.4,3.4,0,0,0,1.452-1.376,7.118,7.118,0,0,0,.609-1.146C22.921,19.781,23.079,19.623,22.37,18.918Z" transform="translate(-4.49 -4.502)"></path>
                          </svg>
                    </span>
                    დამატებითი ნომრები</h1>
                
                <!-- more phone inputs-->
                <div class="cabinet__info-grid">
                    <div class="autorised__input editability">
                        <input readonly="true" type="number" value="" placeholder="დაამატე ინფორმაცია" required="">
                        <label for="">დამატებითი ტელ.ნომერი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input readonly="true" type="number" value="" placeholder="დაამატე ინფორმაცია" required="">
                        <label for="">დამატებითი ტელ.ნომერი</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>
                </div>
            

                <h1 class="cabinet-content__title">პაროლის შეცვლა</h1>
                
                <!-- password change inputs-->
                <div class="cabinet__pass-grid">
                    <div class="password-wrap">
                        <input class="auth__input" type="password" placeholder="მიმდინარე პაროლი" maxlength="12">
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                    <div class="password-wrap">
                        <input class="auth__input" type="password" placeholder="ახალი პაროლი" maxlength="12">
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                    <div class="password-wrap">
                        <input class="auth__input" type="password" placeholder="გაიმეორე პაროლი" maxlength="12">
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                    <button class="change-passwords-btn">
                        ცვლილებების შენახვა
                    </button>
                </div>
                
            </div>
           
            
        </div>
    </section>

</main>
@endsection