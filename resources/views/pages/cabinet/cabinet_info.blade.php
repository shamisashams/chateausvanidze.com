@extends('layouts.base')
@section('content')
<main>
{!! Form::open(['url' => route('cabinetInfoUpdate',[app()->getLocale(),$user->id]),'method' =>'put','files'=>true]) !!}

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
                        <h2>{{(count($user->availableLanguage) > 0)
                            ? $user->availableLanguage[0]->first_name . ' ' .$user->availableLanguage[0]->last_name :
                            $user->language[0]->first_name . ' '. $user->language[0]->last_name
                            }}
                        </h2>
                        <p>ID - {{$user->id}}</p>
                    </div>

                </div>

                <div class="cabinet__navigation">
                    <a class="" href="{{route('CabinetOrders', app()->getLocale())}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.909" height="18.182" viewBox="0 0 15.909 18.182">
                            <path id="Icon_open-document" data-name="Icon open-document" d="M0,0V18.182H15.909V9.091H6.818V0ZM9.091,0V6.818h6.818ZM2.273,4.546H4.546V6.818H2.273Zm0,4.546H4.546v2.273H2.273Zm0,4.546h9.091v2.273H2.273Z"></path>
                          </svg>
                        {{__('client.my_orders')}}
                    </a>

                    <a class="active" href="{{route('cabinetInfo', app()->getLocale())}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.909" height="18.182" viewBox="0 0 15.909 18.182">
                            <path id="Icon_open-document" data-name="Icon open-document" d="M0,0V18.182H15.909V9.091H6.818V0ZM9.091,0V6.818h6.818ZM2.273,4.546H4.546V6.818H2.273Zm0,4.546H4.546v2.273H2.273Zm0,4.546h9.091v2.273H2.273Z"></path>
                          </svg>
                        {{__('client.my_information')}}
                    </a>


                    <a href="" class="cabinet__exit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.327" height="13.149" viewBox="0 0 12.327 13.149">
                            <path id="Icon_metro-exit" data-name="Icon metro-exit" d="M12.432,10.146V8.5H8.323V6.859h4.109V5.215L14.9,7.681Zm-.822-.822v3.287H7.5v2.465L2.571,12.611V1.928h9.04V6.037h-.822V2.75H4.214L7.5,4.393v7.4h3.287V9.324Z" transform="translate(-2.571 -1.928)"></path>
                        </svg>
                        {{__('client.logout')}}
                    </a>
                </div>
            
            </aside>
          

            <div class="cabinet-content">
                <h1 class="cabinet-content__title">{{__('client.my_information')}}</h1>

                <!-- cabinet page content -  information -->
                
                <!-- main info inputs-->
                <div class="cabinet__info-grid">
                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                class="{{$errors->has('first_name') ? 'auth-input error' : '' }}"
                                name="first_name"
                                type="text"  placeholder="{{__('client.first_name')}}"
                                value="{{(count($user->availableLanguage)>0) ? $user->availableLanguage[0]->first_name : '' }}">
                        @if ($errors->has('first_name'))
                            <div class="error-message show"><h2>{{ $errors->first('first_name') }}</h2></div>
                        @endif
                        <label for="">{{__('client.first_name')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                type="text"
                                name="last_name"
                                class="{{$errors->has('last_name') ? 'auth-input error' : '' }}"
                                placeholder="{{__('client.last_name')}}"
                                value="{{(count($user->availableLanguage)>0) ? $user->availableLanguage[0]->last_name : '' }}">
                        @if ($errors->has('last_name'))
                            <div class="error-message show"><h2>{{ $errors->first('last_name') }}</h2></div>
                        @endif
                        <label for="">{{__('client.last_name')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div> 
                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                class="{{$errors->has('id_number') ? 'auth-input error' : '' }}"
                                name="id_number"
                                type="number"  placeholder="{{__('client.add_information')}}"
                                value="{{$user->id_number}}">
                        @if ($errors->has('id_number'))
                            <div class="error-message show"><h2>{{ $errors->first('id_number') }}</h2></div>
                        @endif
                        <label for="">{{__('client.personal_id')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>
                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                type="date"
                                name="birthday"
                                class="{{$errors->has('birthday') ? 'auth-input error' : '' }}"
                                placeholder="{{__('client.add_information')}}"
                                value="{{($user->profile != null) ? \Carbon\Carbon::parse($user->profile->birthday)->format('Y-m-d') : ''}}">
                        @if ($errors->has('birthday'))
                            <div class="error-message show"><h2>{{ $errors->first('birthday') }}</h2></div>
                        @endif
                        <label for="">{{__('client.birthday')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                name="phone"
                                type="text" placeholder="{{__('client.add_information')}}"
                                value="{{$user->phone}}"
                        >
                        @if ($errors->has('phone'))
                            <div class="error-message show"><h2>{{ $errors->first('phone') }}</h2></div>
                        @endif
                        <label for="">{{__('client.mobile_phone')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                type="email"
                                class="{{$errors->has('email') ? 'auth-input error' : '' }}"
                                name="email"
                                placeholder="{{__('client.add_information')}}"
                                value="{{$user->email}}">
                        @if ($errors->has('email'))
                            <div class="error-message show"><h2>{{ $errors->first('email') }}</h2></div>
                        @endif
                        <label for="">{{__('client.email')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>
                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                type="address"
                                class="{{$errors->has('address') ? 'auth-input error' : '' }}"
                                name="address"
                                placeholder="{{__('client.add_information')}}"
                                value="{{(count($user->availableLanguage)>0) ? $user->availableLanguage[0]->address : '' }}">
                        @if ($errors->has('address'))
                            <div class="error-message show"><h2>{{ $errors->first('address') }}</h2></div>
                        @endif
                        <label for="">{{__('client.address')}}</label>
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
                    {{__('client.additional_info')}}</h1>
                
                <!-- more phone inputs-->
                <div class="cabinet__info-grid">
                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                name="phone_1"
                                class="{{$errors->has('phone_1') ? 'auth-input error' : '' }}"
                                placeholder="{{__('client.add_information')}}"
                                value="{{($user->profile != null) ? $user->profile->phone_1 : ''}}"
                        >
                        @if ($errors->has('phone_1'))
                            <div class="error-message show"><h2>{{ $errors->first('phone_1') }}</h2></div>
                        @endif
                        <label for="">{{__('client.add_phone')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>

                    <div class="autorised__input editability">
                        <input
                                readonly="true"
                                name="phone_2"
                                class="{{ $errors->has('phone_2') ? 'auth-input error' : '' }}"
                                placeholder="{{__('client.add_information')}}"
                                value="{{($user->profile != null) ? $user->profile->phone_2 : ''}}">
                        @if ($errors->has('phone_2'))
                            <div class="error-message show"><h2>{{ $errors->first('phone_2') }}</h2></div>
                        @endif
                        <label for="">{{__('client.add_phone')}}</label>
                        <button type="button" onclick="editable(this)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.092" height="10.091" viewBox="0 0 10.092 10.091">
                                <path id="Icon_awesome-pen" data-name="Icon awesome-pen" d="M5.73,1.838,8.253,4.361,2.774,9.84l-2.25.248A.473.473,0,0,1,0,9.566l.25-2.251L5.73,1.838Zm4.084-.376L8.629.278a.947.947,0,0,0-1.338,0L6.176,1.392,8.7,3.916,9.814,2.8a.947.947,0,0,0,0-1.338Z" transform="translate(0.001 -0.001)"></path>
                              </svg>
                              
                        </button>
                    </div>
                </div>
            

                <h1 class="cabinet-content__title">{{__('client.change_password')}}</h1>
                
                <!-- password change inputs-->
                <div class="cabinet__pass-grid">
                    <div class="password-wrap">
                        <input
                                class="auth__input {{ $errors->has('current_password') ? ' error' : '' }}"
                                name="current_password" type="password"
                                placeholder="{{__('client.current_password')}}">
                        @if ($errors->has('current_password'))
                            <div class="error-message show"><h2>{{ $errors->first('current_password') }}</h2></div>
                        @endif
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                    <div class="password-wrap">
                        <input
                                class="auth__input {{ $errors->has('password') ? ' error' : '' }}"
                                type="password"
                                name="password"
                                placeholder="{{__('client.new_password')}}">
                        @if ($errors->has('password'))
                            <div class="error-message show"><h2>{{ $errors->first('password') }}</h2></div>
                        @endif
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                    <div class="password-wrap">
                        <input
                                class="auth__input {{ $errors->has('password_confirmation') ? ' error' : '' }}"
                                type="password"
                                name="password_confirmation"
                                placeholder="{{__('client.password_confirmation')}}">
                        @if ($errors->has('password_confirmation'))
                            <div class="error-message show"><h2>{{ $errors->first('password_confirmation') }}</h2></div>
                        @endif
                        <div class="hide-show pass-hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                              </svg>
                        </div>
                    </div>

                    <button class="change-passwords-btn">
                        {{__('client.save_changes')}}
                    </button>
                </div>
                
            </div>
           
            
        </div>
    </section>
    {!! Form::close() !!}

</main>
@endsection