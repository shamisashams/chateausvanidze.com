<?php

use App\Models\Setting;

$address = Setting::where('key','address')->first();
$phone = Setting::where('key','phone')->first();
$contactEmail = Setting::where('key','contact_email')->first();
?>

@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 - about us  -->
    <section class="about-us-content">
        <div class="container">
            <h1 class="main-title">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->title : ''}}</h1>

            <div class="fx top">
                <div class="img">
                    <img class="img-cover" src="{{asset('../img/about-1.png')}}">
                    <div class="abs-img">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="content">
                    <div class="heading">
                        <p class="s">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->meta_title : ''}}</p>
                        <h4 class="title">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->description : ''}}</h4>
                    </div>
                    <p class="r">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content : ''}}</p>
                    <p class="g">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content_2 : ''}}</p>

                    <div class="contact-info">
                        <a href="#" class="info">
                            <div class="icon">
                                <img src="{{asset('../img/icons/location.svg')}}">
                            </div>
                            <p>{!! count($address->availableLanguage) > 0 ? $address->availableLanguage[0]->value : '' !!}  </p>
                        </a>
                        <a href="#" class="info">
                            <div class="icon">
                                <img src="{{asset('../img/icons/call.svg')}}">
                            </div>
                            <p>{!! count($phone->availableLanguage) > 0 ? $phone->availableLanguage[0]->value : '' !!}  </p>
                        </a>
                        <a href="#" class="info">
                            <div class="icon">
                                <img src="{{asset('../img/icons/email.svg')}}">
                            </div>
                            <p>{!! count($contactEmail->availableLanguage) > 0 ? $contactEmail->availableLanguage[0]->value : '' !!}  </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="fx bottom">
                <div class="content">
                    <p class="r">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content_3 : ''}}</p>
                    <p class="g">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content_4 : ''}}</p>
                </div>
                <div class="img for-small">
                    <img class="img-cover" src="{{asset('../img/about-2.png')}}">
                    <div class="abs-img">
                        <div class="overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


  
</main>
@endsection