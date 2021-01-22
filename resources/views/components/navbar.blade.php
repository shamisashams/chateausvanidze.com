<header class="header bg-dark">
    {{ Request::is('about') ? 'active' : '' }}
    <nav class="nav">

        <div class="container">

            <a href="{{route('welcome',app()->getLocale())}}" class="brand-logo">
                <img src="{{asset('../img/icons/svanidze-brand.svg')}}" alt="">
            </a>

            <ul class="navigation">
                <div class="language-switch-mobile">
                    @if(isset($languages['current']))
                            <a href="">
                                <img class="flag" src="/adm/img/flags-icons/{{$languages['current']['img']}}">
                                {{strtoupper($languages['current']['abbreviation'])}}
                            </a>
                            @if(count($languages['data']) > 0)

                                @foreach($languages['data'] as $data)
                                    <a href="{{$data['url']}}">
                                        <img src="/adm/img/flags-icons/{{$data['img']}}">
                                        {{strtoupper($data['abbreviation'])}}
                                    </a>
                                @endforeach
                            @endif
                    @endif
                </div>

                <li class="navigation__item">
                    <a href="{{route('welcome',app()->getLocale())}}" class="navigation__link {{(Request::route()->getName() == 'welcome') ? 'active' : ''}}">{{__('client.home')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('AboutUs', app()->getLocale())}}"
                       class="navigation__link {{(Request::route()->getName() == 'AboutUs') ? 'active' : ''}}">{{__('client.history')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('Products', app()->getLocale())}}" class="navigation__link {{(Request::route()->getName() == 'Products' || Request::route()->getName() == 'ProductShow') ? 'active' : ''}}">{{__('client.products')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('Club', app()->getLocale())}}" class="navigation__link {{(Request::route()->getName() == 'Club') ? 'active' : ''}}">{{__('client.wine_club')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('Blog', app()->getLocale())}}" class="navigation__link {{(Request::route()->getName() == 'Blog' || Request::route()->getName() =='BlogShow') ? 'active' : ''}}">{{__('client.news_and_events')}}</a>
                </li>
                <li class="navigation__item">
                    <a href="{{route('ContactUs',app()->getLocale())}}"
                       class="navigation__link  {{(Request::route()->getName() == 'ContactUs') ? 'active' : ''}}">{{__('client.contact-us')}}</a>
                </li>

            </ul>

            <button class="menu menu-icon"><span></span></button>

            <div class="nav__right">

                <button class="nav-r-item nav__cart">
                    <span id="cart-count">0</span>
                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="16.259" height="15.018"
                         viewBox="0 0 16.259 15.018">
                        <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart"
                           transform="translate(-3.382 -4.493)">
                            <path id="Path_1" data-name="Path 1"
                                  d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z"
                                  transform="translate(-2.744 -10.491)"></path>
                            <path id="Path_2" data-name="Path 2"
                                  d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z"
                                  transform="translate(-9.751 -10.491)"></path>
                            <path id="Path_3" data-name="Path 3"
                                  d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                        </g>
                    </svg>
                </button>

                <div class="nav-r-item profile-drop">
                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="18" height="18" viewBox="0 0 18 18">
                        <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt"
                              d="M9,10.125A5.063,5.063,0,1,0,3.938,5.063,5.064,5.064,0,0,0,9,10.125Zm4.5,1.125H11.563a6.12,6.12,0,0,1-5.126,0H4.5A4.5,4.5,0,0,0,0,15.75v.563A1.688,1.688,0,0,0,1.688,18H16.313A1.688,1.688,0,0,0,18,16.313V15.75A4.5,4.5,0,0,0,13.5,11.25Z"></path>
                    </svg>

                @guest
                    <!-- two dropdown for auth and un-auth ( "hidden" to switch)-->
                        <div class="profile-dropdown un-auth ">
                            <button class="log-in-btn">{{__('client.authorization')}}</button>
                            <button class="register-btn">{{__('client.registration')}}</button>
                        </div>
                    @endguest
                    @auth
                        <div class="profile-dropdown auth  ">
                            <div class="profile-dropdown__top">
                                <div class="profile-dropdown__top-img">
                                    <img class="img-cover" src="{{asset('../img/user.png')}}" alt="">
                                </div>
                                <div class="profile-dropdown__top-right">
                                    <p>{{__('client.hello')}}</p>
                                    <h1>{{Auth::user()->name}}</h1>
                                </div>
                            </div>

                            <a href="{{route('cabinetInfo', app()->getLocale())}}" class="profile-dropdown-link">
                                <div class="profile-dropdown-link-img">
                                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="18" height="18"
                                         viewBox="0 0 18 18">
                                        <path id="Icon_awesome-user-alt" data-name="Icon awesome-user-alt"
                                              d="M9,10.125A5.063,5.063,0,1,0,3.938,5.063,5.064,5.064,0,0,0,9,10.125Zm4.5,1.125H11.563a6.12,6.12,0,0,1-5.126,0H4.5A4.5,4.5,0,0,0,0,15.75v.563A1.688,1.688,0,0,0,1.688,18H16.313A1.688,1.688,0,0,0,18,16.313V15.75A4.5,4.5,0,0,0,13.5,11.25Z"
                                              fill="#111"></path>
                                    </svg>
                                </div>
                                {{__('client.my_information')}}
                            </a>
                            <a href="{{route('CabinetOrders', app()->getLocale())}}" class="profile-dropdown-link">
                                <div class="profile-dropdown-link-img">
                                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="11.775" height="15.494"
                                         viewBox="0 0 11.775 15.494">
                                        <g fill="#111" id="Icon_ionic-ios-document" data-name="Icon ionic-ios-document"
                                           transform="translate(-7.313 -3.938)">
                                            <path id="Path_173" data-name="Path 173"
                                                  d="M21.338,7.775h3.525a.192.192,0,0,0,.194-.194h0a1.146,1.146,0,0,0-.414-.887L21.686,4.231a1.244,1.244,0,0,0-.8-.287h0a.286.286,0,0,0-.287.287V7.039A.736.736,0,0,0,21.338,7.775Z"
                                                  transform="translate(-5.968 -0.003)"></path>
                                            <path fill="#111" id="Path_174" data-name="Path 174"
                                                  d="M13.626,7.036v-3.1H8.552a1.243,1.243,0,0,0-1.24,1.24V18.192a1.243,1.243,0,0,0,1.24,1.24h9.3a1.243,1.243,0,0,0,1.24-1.24V8.779H15.369A1.746,1.746,0,0,1,13.626,7.036Z"></path>
                                        </g>
                                    </svg>

                                </div>
                                {{__('client.my_orders')}}
                            </a>

                            <a href="{{route('logout', app()->getLocale())}}" class="profile-dropdown-exit">
                                <svg xmlns="http://www.w3.org/2000/svg')}}" width="12.327" height="13.149"
                                     viewBox="0 0 12.327 13.149">
                                    <path id="Icon_metro-exit" data-name="Icon metro-exit"
                                          d="M12.432,10.146V8.5H8.323V6.859h4.109V5.215L14.9,7.681Zm-.822-.822v3.287H7.5v2.465L2.571,12.611V1.928h9.04V6.037h-.822V2.75H4.214L7.5,4.393v7.4h3.287V9.324Z"
                                          transform="translate(-2.571 -1.928)"></path>
                                </svg>
                                {{__('client.logout')}}
                            </a>

                        </div>
                    @endauth
                </div>


{{--                <div class="nav-r-item nav__search">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="15.215" height="15.218"--}}
{{--                         viewBox="0 0 15.215 15.218">--}}
{{--                        <path id="Icon_ionic-ios-search" data-name="Icon ionic-ios-search"--}}
{{--                              d="M4.678,18.61,8.91,14.339a6.03,6.03,0,1,1,.915.927l-4.2,4.243a.651.651,0,0,1-.919.024A.655.655,0,0,1,4.678,18.61Zm8.97-3.292a4.762,4.762,0,1,0-3.368-1.395A4.732,4.732,0,0,0,13.649,15.317Z"--}}
{{--                              transform="translate(-4.5 -4.493)"></path>--}}
{{--                    </svg>--}}

{{--                    <!-- search form -->--}}
{{--                    <form class="nav__form" action="">--}}
{{--                        <div class="nav__form-wrap">--}}
{{--                            <input type="text" placeholder="{{__('client.search')}}">--}}
{{--                            <button>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg')}}" width="15.215" height="15.218"--}}
{{--                                     viewBox="0 0 15.215 15.218">--}}
{{--                                    <path id="Icon_ion ic-ios-search" data-name="Icon ionic-ios-search"--}}
{{--                                          d="M4.678,18.61,8.91,14.339a6.03,6.03,0,1,1,.915.927l-4.2,4.243a.651.651,0,0,1-.919.024A.655.655,0,0,1,4.678,18.61Zm8.97-3.292a4.762,4.762,0,1,0-3.368-1.395A4.732,4.732,0,0,0,13.649,15.317Z"--}}
{{--                                          transform="translate(-4.5 -4.493)"></path>--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </form>--}}

{{--                </div>--}}

                <a class="nav-r-item nav__fav" href="{{route('Favorites', app()->getLocale())}}">
                    <span id="fav-count">0</span>
                    <svg xmlns="http://www.w3.org/2000/svg')}}" width="14.758" height="13" viewBox="0 0 14.758 13">
                        <path id="Icon_feather-heart" data-name="Icon feather-heart"
                              d="M15.02,5.558a3.62,3.62,0,0,0-5.121,0l-.7.7-.7-.7a3.621,3.621,0,1,0-5.121,5.121l.7.7L9.2,16.5l5.121-5.121.7-.7a3.62,3.62,0,0,0,0-5.121Z"
                              transform="translate(-1.823 -3.997)" fill="none" stroke="#fff" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="1"></path>
                    </svg>
                </a>

                <div class="language-box">
                    <div class="language-menu">
                        @if(isset($languages['current']))
                                <a href="">
                                    <img class="flag" src="/adm/img/flags-icons/{{$languages['current']['img']}}">
                                    {{strtoupper($languages['current']['abbreviation'])}}

                                </a>
                                @if(count($languages['data']) > 0)

                                    @foreach($languages['data'] as $data)
                                        <a href="{{$data['url']}}">
                                            <img src="/adm/img/flags-icons/{{$data['img']}}" alt="">
                                            {{strtoupper($data['abbreviation'])}}

                                        </a>
                                    @endforeach
                                @endif
                        @endif

                    </div>
                </div>
            </div>

        </div>

    </nav>
</header>