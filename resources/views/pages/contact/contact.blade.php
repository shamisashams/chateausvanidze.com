<?php

use App\Models\Setting;

$address = Setting::where('key', 'address')->first();
$phone = Setting::where('key', 'phone')->first();
$contactEmail = Setting::where('key', 'contact_email')->first();
?>

@extends('layouts.base')
@section('content')
    <main>

        <!-- section 1 -  contact -->
        <section id="contact-section">
            <div class="container">
                <h2 class="contact-section__title">
                    {{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->description : ''}}
                </h2>

                <div class="contact-wrap">
                    <div class="contact__left">
                        <p>{!! (count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content : '' !!}</p>

                        <div class="info-box-flex">
                            <div class="info-box-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.636" height="14"
                                     viewBox="0 0 11.636 14">
                                    <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin"
                                       transform="translate(-4 -1)">
                                        <path id="Path_55" data-name="Path 55"
                                              d="M15.136,6.818c0,4.136-5.318,7.682-5.318,7.682S4.5,10.955,4.5,6.818a5.318,5.318,0,0,1,10.636,0Z"
                                              transform="translate(0 0)" stroke-linecap="round" stroke-linejoin="round"
                                              stroke-width="1"/>
                                        <path id="Path_56" data-name="Path 56"
                                              d="M17.045,12.273A1.773,1.773,0,1,1,15.273,10.5a1.773,1.773,0,0,1,1.773,1.773Z"
                                              transform="translate(-5.455 -5.455)" fill="#771732" stroke-linecap="round"
                                              stroke-linejoin="round" stroke-width="1"/>
                                    </g>
                                </svg>
                            </div>
                            <p>{!! count($address->availableLanguage) > 0 ? $address->availableLanguage[0]->value : '' !!}  </p>

                        </div>

                        <div class="info-box-flex">
                            <div class="info-box-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.411" height="18.41"
                                     viewBox="0 0 18.411 18.41">
                                    <path id="Icon_ionic-ios-call" data-name="Icon ionic-ios-call"
                                          d="M22.37,18.918a15.464,15.464,0,0,0-3.23-2.162c-.968-.465-1.323-.455-2.008.038-.57.412-.939.8-1.6.652a9.521,9.521,0,0,1-3.206-2.373,9.453,9.453,0,0,1-2.373-3.206c-.139-.661.244-1.026.652-1.6.494-.685.508-1.04.038-2.008a15.159,15.159,0,0,0-2.162-3.23c-.7-.7-.863-.551-1.251-.412a7.118,7.118,0,0,0-1.146.609A3.456,3.456,0,0,0,4.712,6.682c-.273.59-.59,1.687,1.021,4.553A25.407,25.407,0,0,0,10.2,17.192h0l0,0,0,0h0a25.506,25.506,0,0,0,5.958,4.467c2.866,1.61,3.964,1.294,4.553,1.021a3.4,3.4,0,0,0,1.452-1.376,7.118,7.118,0,0,0,.609-1.146C22.921,19.781,23.079,19.623,22.37,18.918Z"
                                          transform="translate(-4.49 -4.502)"/>
                                </svg>

                            </div>
                            <p>{!! count($phone->availableLanguage) > 0 ? $address->availableLanguage[0]->value : '' !!}  </p>

                        </div>

                        <div class="info-box-flex">
                            <div class="info-box-img">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22.5" height="15.577"
                                     viewBox="0 0 22.5 15.577">

                                    <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail"
                                       transform="translate(-3.375 -7.875)">
                                        <path id="Path_171" data-name="Path 171" class="cls-1"
                                              d="M25.691,10.347l-5.82,5.928a.1.1,0,0,0,0,.151l4.073,4.338a.7.7,0,0,1,0,1,.705.705,0,0,1-1,0l-4.056-4.322a.111.111,0,0,0-.157,0l-.99,1.006a4.355,4.355,0,0,1-3.1,1.309,4.442,4.442,0,0,1-3.169-1.347l-.952-.968a.111.111,0,0,0-.157,0L6.306,21.759a.705.705,0,0,1-1,0,.7.7,0,0,1,0-1l4.073-4.338a.115.115,0,0,0,0-.151L3.559,10.347a.107.107,0,0,0-.184.076V22.284a1.736,1.736,0,0,0,1.731,1.731H24.144a1.736,1.736,0,0,0,1.731-1.731V10.423A.108.108,0,0,0,25.691,10.347Z"
                                              transform="translate(0 -0.563)"/>
                                        <path id="Path_172" data-name="Path 172" class="cls-1"
                                              d="M14.821,17.778a2.94,2.94,0,0,0,2.115-.887l8.486-8.638a1.7,1.7,0,0,0-1.071-.379H5.3a1.689,1.689,0,0,0-1.071.379l8.486,8.638A2.941,2.941,0,0,0,14.821,17.778Z"
                                              transform="translate(-0.196)"/>
                                    </g>
                                </svg>
                            </div>
                            <p>{!! count($contactEmail->availableLanguage) > 0 ? $address->availableLanguage[0]->value : '' !!}  </p>
                        </div>
                    </div>
                    {!! Form::open(['url' => route('ContactUs',[app()->getLocale()]),'method' =>'post','class' =>'contact__right']) !!}

                        <input type="text" name="full_name" placeholder="{{__('client.full_name')}}">
                        @if ($errors->has('full_name'))
                            <div class="error-message show"><h2>{{ $errors->first('full_name') }}</h2></div>
                        @endif
                        <input type="text" name="email" placeholder="{{__('client.email')}}">
                        @if ($errors->has('email'))
                            <div class="error-message show"><h2>{{ $errors->first('email') }}</h2></div>
                        @endif
                        <input type="text" name="subject" placeholder="{{__('client.subject')}}">
                        @if ($errors->has('subject'))
                            <div class="error-message show"><h2>{{ $errors->first('subject') }}</h2></div>
                        @endif
                        <textarea placeholder="{{__('client.message')}}"  name="message" id="" cols="30"
                                  rows="10"></textarea>
                        @if ($errors->has('message'))
                            <div class="error-message show"><h2>{{ $errors->first('message') }}</h2></div>
                        @endif
                        <button class="contact-form-btn">{{__('client.send')}}</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </section>

    </main>
@endsection