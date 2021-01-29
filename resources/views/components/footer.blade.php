<?php

use App\Models\Setting;

$address = Setting::where('key', 'address')->first();
$phone = Setting::where('key', 'phone')->first();
$contactEmail = Setting::where('key', 'contact_email')->first();
$facebook = Setting::where('key', 'facebook')->first();
$twitter = Setting::where('key', 'twitter')->first();
$pinterest = Setting::where('key', 'pinterest')->first();
//$behance = Setting::where('key','behance')->first();
//$linkedin = Setting::where('key','linkedin')->first();
$instagram = Setting::where('key', 'instagram')->first();
?>
<!-- footer-->
<footer id="footer">
    <div class="footer__top">
        <div class="container">

            <div class="footer__col">
                <a class="footer__brand" href="{{route('welcome',app()->getLocale())}}">
                    <img src="{{asset('../img/icons/svanidze-brand.svg')}}" alt="">
                </a>

                <p class="footer__about-text">
                </p>
            </div>

            <div class="footer__col">
                <h2>{{__('client.links')}}</h2>

                <ul class="footer__nav">
                    <a href="/">{{__('client.home')}}</a>
                    <a href="{{route('AboutUs', app()->getLocale())}}">{{__('client.history')}}</a>
                    <a href="{{route('Products', app()->getLocale())}}">{{__('client.products')}}</a>
                    <a href="{{route('Club', app()->getLocale())}}">{{__('client.wine_club')}}</a>
                    <a href="{{route('Blog', app()->getLocale())}}">{{__('client.news_and_events')}}</a>
                    <a href="{{route('ContactUs',app()->getLocale())}}">{{__('client.contact-us')}}</a>
                </ul>
            </div>

            <div class="footer__col">
                <h2>{{__('client.contact')}}</h2>

                <p class="footer_p">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.636" height="20" viewBox="0 0 11.636 14">
                        <g id="Icon_feather-map-pin" data-name="Icon feather-map-pin" transform="translate(-4 -1)">
                            <path fill="#fff" id="Path_55" data-name="Path 55" d="M15.136,6.818c0,4.136-5.318,7.682-5.318,7.682S4.5,10.955,4.5,6.818a5.318,5.318,0,0,1,10.636,0Z" transform="translate(0 0)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                            <path fill="#000" id="Path_56" data-name="Path 56" d="M17.045,12.273A1.773,1.773,0,1,1,15.273,10.5a1.773,1.773,0,0,1,1.773,1.773Z" transform="translate(-5.455 -5.455)" fill="#771732" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                        </g>
                    </svg>
                    {!! count($address->availableLanguage) > 0 ? $address->availableLanguage[0]->value : '' !!}
                </p>
                <p class="footer_p">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.411" height="18.41" viewBox="0 0 18.411 18.41">
                        <path fill="#fff" id="Icon_ionic-ios-call" data-name="Icon ionic-ios-call" d="M22.37,18.918a15.464,15.464,0,0,0-3.23-2.162c-.968-.465-1.323-.455-2.008.038-.57.412-.939.8-1.6.652a9.521,9.521,0,0,1-3.206-2.373,9.453,9.453,0,0,1-2.373-3.206c-.139-.661.244-1.026.652-1.6.494-.685.508-1.04.038-2.008a15.159,15.159,0,0,0-2.162-3.23c-.7-.7-.863-.551-1.251-.412a7.118,7.118,0,0,0-1.146.609A3.456,3.456,0,0,0,4.712,6.682c-.273.59-.59,1.687,1.021,4.553A25.407,25.407,0,0,0,10.2,17.192h0l0,0,0,0h0a25.506,25.506,0,0,0,5.958,4.467c2.866,1.61,3.964,1.294,4.553,1.021a3.4,3.4,0,0,0,1.452-1.376,7.118,7.118,0,0,0,.609-1.146C22.921,19.781,23.079,19.623,22.37,18.918Z" transform="translate(-4.49 -4.502)"></path>
                    </svg>
                    {!! count($phone->availableLanguage) > 0 ? $phone->availableLanguage[0]->value : '' !!}
                </p>
                <p class="footer_p">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22.5" height="15.577" viewBox="0 0 22.5 15.577">
                        <g id="Icon_ionic-ios-mail" data-name="Icon ionic-ios-mail" transform="translate(-3.375 -7.875)">
                            <path fill="#fff" id="Path_171" data-name="Path 171" class="cls-1" d="M25.691,10.347l-5.82,5.928a.1.1,0,0,0,0,.151l4.073,4.338a.7.7,0,0,1,0,1,.705.705,0,0,1-1,0l-4.056-4.322a.111.111,0,0,0-.157,0l-.99,1.006a4.355,4.355,0,0,1-3.1,1.309,4.442,4.442,0,0,1-3.169-1.347l-.952-.968a.111.111,0,0,0-.157,0L6.306,21.759a.705.705,0,0,1-1,0,.7.7,0,0,1,0-1l4.073-4.338a.115.115,0,0,0,0-.151L3.559,10.347a.107.107,0,0,0-.184.076V22.284a1.736,1.736,0,0,0,1.731,1.731H24.144a1.736,1.736,0,0,0,1.731-1.731V10.423A.108.108,0,0,0,25.691,10.347Z" transform="translate(0 -0.563)"></path>
                            <path fill="#fff" id="Path_172" data-name="Path 172" class="cls-1" d="M14.821,17.778a2.94,2.94,0,0,0,2.115-.887l8.486-8.638a1.7,1.7,0,0,0-1.071-.379H5.3a1.689,1.689,0,0,0-1.071.379l8.486,8.638A2.941,2.941,0,0,0,14.821,17.778Z" transform="translate(-0.196)"></path>
                        </g>
                    </svg>
                    {!! count($contactEmail->availableLanguage) > 0 ? $contactEmail->availableLanguage[0]->value : '' !!}
                </p>
            </div>

            <div class="footer__col">
                <div class="footer__map">
                    <img class="img-cover" src="{{asset('../img/map-img.PNG')}}" alt="">

                    <div class="overlay">
                        <button class="map-modal-btn">
                            <img src="{{asset('../img/icons/svg-fullscreen.svg')}}" alt="">
                            {{__('client.full_screen')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="soc-container">
            <div class="soc-links" id="soc-column">
                <a href="{{count($facebook->availableLanguage) > 0 ? $facebook->availableLanguage[0]->value : ''}}"
                   target="_blank">
                    <svg id="Group_7" data-name="Group 7" xmlns="http://www.w3.org/2000/svg" width="15.427" height="20"
                         viewBox="0 0 6.427 12">
                        <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f"
                              d="M7.615,6.75l.333-2.172H5.865V3.169A1.086,1.086,0,0,1,7.089,2h.947V.147A11.553,11.553,0,0,0,6.355,0,2.651,2.651,0,0,0,3.517,2.923V4.578H1.609V6.75H3.517V12H5.865V6.75Z"
                              transform="translate(-1.609)"/>
                    </svg>
                </a>

                <a href="{{count($twitter->availableLanguage) > 0 ? $twitter->availableLanguage[0]->value : ''}}"
                   target="_blank">
                    <svg id="Group_6" data-name="Group 6" xmlns="http://www.w3.org/2000/svg" width="20.998"
                         height="18.933" viewBox="0 0 10.998 8.933">
                        <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter"
                              d="M9.868,5.607c.007.1.007.2.007.293a6.369,6.369,0,0,1-6.413,6.413A6.37,6.37,0,0,1,0,11.3a4.663,4.663,0,0,0,.544.028,4.514,4.514,0,0,0,2.8-.963A2.258,2.258,0,0,1,1.235,8.8a2.843,2.843,0,0,0,.426.035,2.384,2.384,0,0,0,.593-.077A2.254,2.254,0,0,1,.447,6.549V6.521a2.27,2.27,0,0,0,1.019.286,2.257,2.257,0,0,1-.7-3.015A6.407,6.407,0,0,0,5.415,6.151a2.545,2.545,0,0,1-.056-.516,2.256,2.256,0,0,1,3.9-1.542,4.438,4.438,0,0,0,1.431-.544A2.248,2.248,0,0,1,9.7,4.79,4.519,4.519,0,0,0,11,4.442a4.845,4.845,0,0,1-1.13,1.165Z"
                              transform="translate(0 -3.381)"/>
                    </svg>
                </a>


                <a href="{{count($instagram->availableLanguage) > 0 ? $instagram->availableLanguage[0]->value : ''}}"
                   target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.326" height="20.326" viewBox="0 0 64 64"
                         aria-labelledby="title"
                         aria-describedby="desc" role="img">
                        <path data-name="layer2"
                              d="M44.122 2H19.87A17.875 17.875 0 0 0 2 19.835v24.2a17.875 17.875 0 0 0 17.87 17.834h24.252A17.875 17.875 0 0 0 62 44.034v-24.2A17.875 17.875 0 0 0 44.122 2zM55.96 44.034a11.825 11.825 0 0 1-11.838 11.812H19.87A11.825 11.825 0 0 1 8.032 44.034v-24.2A11.825 11.825 0 0 1 19.87 8.022h24.252A11.825 11.825 0 0 1 55.96 19.835zm0 0"
                              fill="#fff" stroke="#202020" stroke-linecap="round" stroke-miterlimit="10"
                              stroke-width="2" stroke-linejoin="round"></path>
                        <path data-name="layer1"
                              d="M32 16.45a15.484 15.484 0 1 0 15.514 15.484A15.519 15.519 0 0 0 32 16.45zm0 24.95a9.461 9.461 0 1 1 9.482-9.461A9.472 9.472 0 0 1 32 41.4zm19.263-24.834a3.719 3.719 0 1 1-3.719-3.711 3.714 3.714 0 0 1 3.719 3.711zm0 0"
                              fill="#fff" stroke="#fff" stroke-linecap="round" stroke-miterlimit="10"
                              stroke-width="2" stroke-linejoin="round"></path>
                    </svg>
                </a>
                <a href="{{count($pinterest->availableLanguage) > 0 ? $pinterest->availableLanguage[0]->value : ''}}" target="_blank">
                    <svg class="svg-icon" width="25" height="25" viewBox="0 0 20 20">
                        <path fill="#fff"
                              d="M9.797,2.214C9.466,2.256,9.134,2.297,8.802,2.338C8.178,2.493,7.498,2.64,6.993,2.935C5.646,3.723,4.712,4.643,4.087,6.139C3.985,6.381,3.982,6.615,3.909,6.884c-0.48,1.744,0.37,3.548,1.402,4.173c0.198,0.119,0.649,0.332,0.815,0.049c0.092-0.156,0.071-0.364,0.128-0.546c0.037-0.12,0.154-0.347,0.127-0.496c-0.046-0.255-0.319-0.416-0.434-0.62C5.715,9.027,5.703,8.658,5.59,8.101c0.009-0.075,0.017-0.149,0.026-0.224C5.65,7.254,5.755,6.805,5.948,6.362c0.564-1.301,1.47-2.025,2.931-2.458c0.327-0.097,1.25-0.252,1.734-0.149c0.289,0.05,0.577,0.099,0.866,0.149c1.048,0.33,1.811,0.938,2.218,1.888c0.256,0.591,0.33,1.725,0.154,2.483c-0.085,0.36-0.072,0.667-0.179,0.993c-0.397,1.206-0.979,2.323-2.295,2.633c-0.868,0.205-1.519-0.324-1.733-0.869c-0.06-0.151-0.161-0.418-0.101-0.671c0.229-0.978,0.56-1.854,0.815-2.831c0.243-0.931-0.218-1.665-0.943-1.837C8.513,5.478,7.816,6.312,7.579,6.858C7.39,7.292,7.276,8.093,7.426,8.672c0.047,0.183,0.269,0.674,0.23,0.844c-0.174,0.755-0.372,1.568-0.587,2.31c-0.223,0.771-0.344,1.562-0.56,2.311c-0.1,0.342-0.096,0.709-0.179,1.066v0.521c-0.075,0.33-0.019,0.916,0.051,1.242c0.045,0.209-0.027,0.467,0.076,0.621c0.002,0.111,0.017,0.135,0.052,0.199c0.319-0.01,0.758-0.848,0.917-1.094c0.304-0.467,0.584-0.967,0.816-1.514c0.208-0.494,0.241-1.039,0.408-1.566c0.12-0.379,0.292-0.824,0.331-1.24h0.025c0.066,0.229,0.306,0.395,0.485,0.52c0.56,0.4,1.525,0.77,2.573,0.523c1.188-0.281,2.133-0.838,2.755-1.664c0.457-0.609,0.804-1.313,1.07-2.112c0.131-0.392,0.158-0.826,0.256-1.241c0.241-1.043-0.082-2.298-0.384-2.981C14.847,3.35,12.902,2.17,9.797,2.214"></path>
                    </svg>
                </a>

            </div>
        </div>

    </div>

    {{--    <div class="footer__bottom">--}}
    {{--        <div class="container">--}}

    {{--            <p>--}}
    {{--                <img src="{{asset('../img/icons/svg-phone.svg')}}" alt="">--}}
    {{--                {!! count($phone->availableLanguage) > 0 ? $phone->availableLanguage[0]->value : '' !!}--}}
    {{--            </p>--}}

    {{--            <p>--}}
    {{--                <img src="{{asset('../img/icons/svg-mail.svg')}}" alt="">--}}
    {{--                {!! count($contactEmail->availableLanguage) > 0 ? $contactEmail->availableLanguage[0]->value : '' !!}--}}
    {{--            </p>--}}

    {{--            <div class="language-box">--}}
    {{--                <div class="language-menu">--}}
    {{--                    @if(isset($languages['current']))--}}
    {{--                        <a href="">--}}
    {{--                            <img class="flag" src="/adm/img/flags-icons/{{$languages['current']['img']}}">--}}
    {{--                            {{strtoupper($languages['current']['abbreviation'])}}--}}

    {{--                        </a>--}}
    {{--                        @if(count($languages['data']) > 0)--}}

    {{--                            @foreach($languages['data'] as $data)--}}
    {{--                                <a href="{{$data['url']}}">--}}
    {{--                                    <img src="/adm/img/flags-icons/{{$data['img']}}" alt="">--}}
    {{--                                    {{strtoupper($data['abbreviation'])}}--}}

    {{--                                </a>--}}
    {{--                            @endforeach--}}
    {{--                        @endif--}}
    {{--                    @endif--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <p>--}}
    {{--                <img src="{{asset('../img/icons/svg-pin.svg')}}" alt="">--}}
    {{--                {!! count($address->availableLanguage) > 0 ? $address->availableLanguage[0]->value : '' !!}--}}
    {{--            </p>--}}


    {{--            <div class="soc-links">--}}
    {{--                <a href="{{count($facebook->availableLanguage) > 0 ? $facebook->availableLanguage[0]->value : ''}}" target="_blank">--}}
    {{--                    <svg id="Group_7" data-name="Group 7" xmlns="http://www.w3.org/2000/svg" width="6.427" height="12" viewBox="0 0 6.427 12">--}}
    {{--                        <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M7.615,6.75l.333-2.172H5.865V3.169A1.086,1.086,0,0,1,7.089,2h.947V.147A11.553,11.553,0,0,0,6.355,0,2.651,2.651,0,0,0,3.517,2.923V4.578H1.609V6.75H3.517V12H5.865V6.75Z" transform="translate(-1.609)"/>--}}
    {{--                    </svg>--}}
    {{--                </a>--}}

    {{--                <a href="{{count($twitter->availableLanguage) > 0 ? $twitter->availableLanguage[0]->value : ''}}" target="_blank">--}}
    {{--                    <svg id="Group_6" data-name="Group 6" xmlns="http://www.w3.org/2000/svg" width="10.998" height="8.933" viewBox="0 0 10.998 8.933">--}}
    {{--                        <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M9.868,5.607c.007.1.007.2.007.293a6.369,6.369,0,0,1-6.413,6.413A6.37,6.37,0,0,1,0,11.3a4.663,4.663,0,0,0,.544.028,4.514,4.514,0,0,0,2.8-.963A2.258,2.258,0,0,1,1.235,8.8a2.843,2.843,0,0,0,.426.035,2.384,2.384,0,0,0,.593-.077A2.254,2.254,0,0,1,.447,6.549V6.521a2.27,2.27,0,0,0,1.019.286,2.257,2.257,0,0,1-.7-3.015A6.407,6.407,0,0,0,5.415,6.151a2.545,2.545,0,0,1-.056-.516,2.256,2.256,0,0,1,3.9-1.542,4.438,4.438,0,0,0,1.431-.544A2.248,2.248,0,0,1,9.7,4.79,4.519,4.519,0,0,0,11,4.442a4.845,4.845,0,0,1-1.13,1.165Z" transform="translate(0 -3.381)"/>--}}
    {{--                    </svg>--}}
    {{--                </a>--}}

    {{--                <a href="{{count($behance->availableLanguage) > 0 ? $behance->availableLanguage[0]->value : ''}}" target="_blank">--}}
    {{--                    <svg id="Group_5" data-name="Group 5" xmlns="http://www.w3.org/2000/svg" width="12.284" height="7.701" viewBox="0 0 12.284 7.701">--}}
    {{--                        <path id="Icon_awesome-behance" data-name="Icon awesome-behance" d="M4.948,8.752A1.618,1.618,0,0,0,5.98,7.174C5.98,5.668,4.858,5.3,3.564,5.3H0V12.86H3.664c1.373,0,2.664-.659,2.664-2.195a1.821,1.821,0,0,0-1.38-1.913ZM1.661,6.592H3.22c.6,0,1.139.168,1.139.864,0,.642-.42.9-1.013.9H1.661V6.592Zm1.777,4.984H1.661V9.494H3.472c.732,0,1.194.3,1.194,1.079s-.552,1-1.228,1Zm7.646-5.133H8.019V5.7h3.065v.744Zm1.2,3.76A2.69,2.69,0,0,0,9.621,7.234a2.75,2.75,0,0,0-2.8,2.9A2.666,2.666,0,0,0,9.621,13a2.44,2.44,0,0,0,2.561-1.841H10.856a1.245,1.245,0,0,1-1.188.714,1.238,1.238,0,0,1-1.344-1.393h3.948C12.278,10.394,12.284,10.3,12.284,10.2ZM8.326,9.537A1.175,1.175,0,0,1,9.574,8.368a1.12,1.12,0,0,1,1.2,1.169Z" transform="translate(0 -5.302)"/>--}}
    {{--                    </svg>--}}
    {{--                </a>--}}

    {{--                <a href="{{count($linkedin->availableLanguage) > 0 ? $linkedin->availableLanguage[0]->value : ''}}" target="_blank">--}}
    {{--                    <svg id="Group_4" data-name="Group 4" xmlns="http://www.w3.org/2000/svg" width="10.326" height="10.326" viewBox="0 0 10.326 10.326">--}}
    {{--                        <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M2.311,10.326H.171V3.432H2.311ZM1.24,2.492A1.246,1.246,0,1,1,2.48,1.241,1.25,1.25,0,0,1,1.24,2.492Zm9.084,7.834H8.187V6.97c0-.8-.016-1.825-1.113-1.825-1.113,0-1.284.869-1.284,1.768v3.414H3.652V3.432H5.706v.94h.03A2.249,2.249,0,0,1,7.761,3.26c2.167,0,2.565,1.427,2.565,3.28v3.787Z" transform="translate(0 -0.001)"/>--}}
    {{--                    </svg>--}}
    {{--                      --}}
    {{--                </a>--}}
    {{--                <a href="{{count($instagram->availableLanguage) > 0 ? $instagram->availableLanguage[0]->value : ''}}" target="_blank">--}}
    {{--                    <svg xmlns="http://www.w3.org/2000/svg" width="10.326" height="10.326" viewBox="0 0 64 64" aria-labelledby="title"--}}
    {{--                         aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink">--}}
    {{--                        <path data-name="layer2"--}}
    {{--                              d="M44.122 2H19.87A17.875 17.875 0 0 0 2 19.835v24.2a17.875 17.875 0 0 0 17.87 17.834h24.252A17.875 17.875 0 0 0 62 44.034v-24.2A17.875 17.875 0 0 0 44.122 2zM55.96 44.034a11.825 11.825 0 0 1-11.838 11.812H19.87A11.825 11.825 0 0 1 8.032 44.034v-24.2A11.825 11.825 0 0 1 19.87 8.022h24.252A11.825 11.825 0 0 1 55.96 19.835zm0 0"--}}
    {{--                              fill="#771732" stroke="#202020" stroke-linecap="round" stroke-miterlimit="10"--}}
    {{--                              stroke-width="2" stroke-linejoin="round"></path>--}}
    {{--                        <path data-name="layer1" d="M32 16.45a15.484 15.484 0 1 0 15.514 15.484A15.519 15.519 0 0 0 32 16.45zm0 24.95a9.461 9.461 0 1 1 9.482-9.461A9.472 9.472 0 0 1 32 41.4zm19.263-24.834a3.719 3.719 0 1 1-3.719-3.711 3.714 3.714 0 0 1 3.719 3.711zm0 0"--}}
    {{--                              fill="#771732" stroke="#771732" stroke-linecap="round" stroke-miterlimit="10"--}}
    {{--                              stroke-width="2" stroke-linejoin="round"></path>--}}
    {{--                    </svg>--}}
    {{--                </a>--}}
    {{--            </div>--}}

    {{--        </div>--}}
    {{--    </div>--}}


    <div class="footer-video-modal">
        <div class="footer-modal-wrap">
            <button class="map-modal-close">
                <img src="{{asset('../img/icons/svg-close-circle (1).svg')}}" alt="">
            </button>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8426.500043046433!2d44.80081624030541!3d41.694236682267714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x61d084ede2576ea3!2sTbilisi%2C%20Georgia!5e0!3m2!1sen!2sus!4v1603197121014!5m2!1sen!2sus"
                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </div>

</footer>