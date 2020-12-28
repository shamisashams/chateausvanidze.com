<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">

    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="author" content="insite.international">

    <link rel="shortcut icon" type="image/x-icon" href="./">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('holding/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('holding/css/style.css')}}">

    <title> Svanidze Holding - Home </title>
</head>

<body>
    <!-- header -->
    <header  class="header">
        <nav class="nav">

            <a href="" class="brand-logo">
                <img src="{{asset('holding/img/icons/site-logo.svg')}}" alt="">
            </a>

            <button class="menu menu-icon"><span></span></button>

            <ul class="navigation">
                <li class="navigation__item scroll-home">
                    <a href="" class="navigation__link acitve">Home </a>
                </li>

                <li class="navigation__item scroll-projects">
                    <a href="" class="navigation__link">Projects</a>
                </li>
                <li class="navigation__item scroll-about">
                    <a href="" class="navigation__link">About us</a>
                </li>

                <li class="navigation__item scroll-gallery">
                    <a href="" class="navigation__link">Gallery</a>
                </li>

                <li class="navigation__item scroll-news">
                    <a href="" class="navigation__link">News</a>
                </li>

                <li class="navigation__item scroll-contact">
                    <a href="" class="navigation__link">Contact</a>
                </li>

            </ul>
        </nav>
    </header>


    <main>
        <!-- section 1 - hero --->
        <section id="hero">

            <div class="hero-slider">
                @if($slides)
                    @foreach($slides as $item)
                        <div class="hero-slide">

                            @if ($item->files)
                                <img src="{{asset('storage/slider/'.$item->id.'/'.$item->files[0]->name)}}" alt="">
                            @else
                                <img src="{{asset('holding/img/noimage.jpg')}}" alt="">
                            @endif

                            <div class="hero-slide__overlay">
                                <div class="hero-slide__content">
                                    <h2>{{ count($item->availableLanguage) > 0 ? $item->availableLanguage[0]->title : '' }}</h2>
                                    <p>{{ count($item->availableLanguage) > 0 ? $item->availableLanguage[0]->description: '' }}</p>
                                    <button class="hero-modal-btn" onclick="slideDetails({{ $item->id }})">
                                        დეტალურად
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <!-- slider thumbs -->
            <div class="slider-nav slider-thumbs">
                @if($slides)
                    @foreach($slides as $key => $item)

                        <div class="slider-thumb active">
                            <p class="thumb-text" >
                                <span>{{$key + 1}}</span>
                                {{ count($item->availableLanguage) > 0 ?  $item->availableLanguage[0]->title : ' ' }}

                            </p>
                            <div class="thumb-progress"></div>
                        </div>
                    @endforeach
                @endif
            </div>

        </section>

        <!-- hero slider MODALS  (8x  for - NEWS)-->
        <div class="slider-modal sl">
            <div class="modal-content-wrapper">
                <button class="close-hero-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                      </svg>
                </button>
                <div class="slider-modal__content">
                    <div class="slider-modal__content-img">
                        <img class="img-cover" src="{{asset('holding/img/slider-it.png')}}" alt="">
                    </div>

                    <div class="slider-modal__content-box">

                        <!-- Slider TItle -->
                        <div class="modal-title-box">
                            <div class="modal-title-box__bg"></div>
                            <h2></h2>
                        </div>

                        <!-- Slider Content -->
                        <p class="slider-modal__p">
                        </p>


                        <!-- Slider sub images -->
                        <div class="slider-modal__gallery">
                        </div>

                        <a href="" class="slider-modal__link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23.277" height="23.277" viewBox="0 0 23.277 23.277">
                                <path id="Icon_metro-earth" data-name="Icon metro-earth" d="M14.209,1.928A11.639,11.639,0,1,0,25.848,13.567,11.639,11.639,0,0,0,14.209,1.928Zm0,21.823a10.15,10.15,0,0,1-4.029-.829l5.3-5.962a.727.727,0,0,0,.184-.483V14.294a.727.727,0,0,0-.727-.727c-2.568,0-5.278-2.67-5.305-2.7a.727.727,0,0,0-.514-.213H6.208a.727.727,0,0,0-.727.727v4.365a.727.727,0,0,0,.4.651L8.39,17.653v4.271A10.19,10.19,0,0,1,5.006,9.2H7.663a.728.728,0,0,0,.514-.213l2.91-2.91a.728.728,0,0,0,.213-.514V3.805a10.212,10.212,0,0,1,7.372.6c-.094.08-.186.163-.274.251a4.365,4.365,0,0,0,3.083,7.451q.108,0,.216-.005a17.082,17.082,0,0,1-.191,8.464.725.725,0,0,0-.019.119,10.152,10.152,0,0,1-7.277,3.061Z" transform="translate(-2.571 -1.928)"/>
                              </svg>

                            www.svanidzeholding.com
                        </a>

                        <div class="slider-modal__share">
                            <h2>Share:</h2>
                            <div class="slider-modal__social">
                                <a href="" target="blank">
                                    <img src="./img/icons/svg-facebook-f.svg" alt="">
                                </a>
                                <a href="" target="blank">
                                    <img src="./img/icons/svg-messenger.svg" alt="">
                                </a>
                                <a href="" target="blank">
                                    <img src="./img/icons/svg-link.svg" alt="">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- End of slider modals  -->

        <!-- section 2 -  (Projects) -->
        <section id="projects">
            <div class="container">
                <div class="projects__grid">
                    @if($partners)
                        @foreach($partners as $item)
                            <button target="blank" class="project-btn" onclick="projectDetails({{ $item->id }})">
                                @if ($item->files)
                                    <img src="{{asset('storage/product/'.$item->id.'/'.$item->files[0]->name)}}" class="partner-img" alt="">
                                @else
                                    <img src="{{asset('holding/img/noimage.jpg')}}" class="partner-img"  alt="">
                                @endif
                            </button>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

        <!-- projects MODALS  (8x  for - Projects section above)-->
        <div class="slider-modal projects">
            <div class="modal-content-wrapper">
                <button class="close-hero-modal">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                        </svg>
                </button>
                <div class="slider-modal__content">
                    <div class="slider-modal__content-img">
                        <img class="img-cover" src="./img/slider-66.png" alt="">
                    </div>

                    <div class="slider-modal__content-box">

                        <div class="modal-title-box">
                            <div class="modal-title-box__bg"></div>
                            <h2>project 1</h2>
                        </div>

                        <p class="slider-modal__p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostruolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>


                        <div class="slider-modal__gallery">

                        </div>

                        <a href="" class="slider-modal__link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23.277" height="23.277" viewBox="0 0 23.277 23.277">
                                <path id="Icon_metro-earth" data-name="Icon metro-earth" d="M14.209,1.928A11.639,11.639,0,1,0,25.848,13.567,11.639,11.639,0,0,0,14.209,1.928Zm0,21.823a10.15,10.15,0,0,1-4.029-.829l5.3-5.962a.727.727,0,0,0,.184-.483V14.294a.727.727,0,0,0-.727-.727c-2.568,0-5.278-2.67-5.305-2.7a.727.727,0,0,0-.514-.213H6.208a.727.727,0,0,0-.727.727v4.365a.727.727,0,0,0,.4.651L8.39,17.653v4.271A10.19,10.19,0,0,1,5.006,9.2H7.663a.728.728,0,0,0,.514-.213l2.91-2.91a.728.728,0,0,0,.213-.514V3.805a10.212,10.212,0,0,1,7.372.6c-.094.08-.186.163-.274.251a4.365,4.365,0,0,0,3.083,7.451q.108,0,.216-.005a17.082,17.082,0,0,1-.191,8.464.725.725,0,0,0-.019.119,10.152,10.152,0,0,1-7.277,3.061Z" transform="translate(-2.571 -1.928)"/>
                                </svg>

                            www.svanidzeholding.com
                        </a>

                        <div class="slider-modal__share">
                            <h2>Share:</h2>
                            <div class="slider-modal__social">
                                <a href="" target="blank">
                                    <img src="./img/icons/svg-facebook-f.svg" alt="">
                                </a>
                                <a href="" target="blank">
                                    <img src="./img/icons/svg-messenger.svg" alt="">
                                </a>
                                <a href="" target="blank">
                                    <img src="./img/icons/svg-link.svg" alt="">
                                </a>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- End of projects modals  -->



        <!-- section 3 - about-us-->
        <section id="about-us">
            <div class="container">

                @if($about)

                    <div class="about-us__left">
                        <div class="about-us__img">

                            @if ($item->files)
                                <img src="{{asset('storage/page/'.$about->id.'/'.$about->files[0]->name)}}"  alt="">
                            @else
                                <img src="{{asset('holding/img/noimage.jpg')}}" alt="">
                            @endif
                        </div>
                        <div class="about-us__img-bg"></div>
                    </div>

                    <div class="about-us__right">
                        <h1 class="site-title-reusable">
                            {{ count($about->details) > 0 ? $about->details[0]->title : '' }}
                        </h1>
                        <p class="about-us__p">{{ count($about->details) > 0 ? $about->details[0]->description : '' }}</p>
                        <p class="about-us__p">{{ count($about->details) > 0 ? $about->details[0]->content : '' }}</p>

                    </div>

                @endif

            </div>
        </section>

        <!-- section 4 -  awards -->
        <section id="awards">
            <div class="container">

                <div class="awards__col">
                    <div class="awards__left">
                        <div class="awards__icon">
                            <img src="{{ asset('holding/img/icons/svg-award.svg') }}" alt="">
                        </div>
                        <div class="awards__shape"></div>
                    </div>

                    <div class="awards__right">
                        @if($rewards)
                            <h2>{{ count($rewards->details) > 0 ? $rewards->details[0]->title : '' }}</h2>
                            <p> {{ count($rewards->details) > 0 ? $rewards->details[0]->description : '' }}</p>
                        @endif
                    </div>
                </div>

                <div class="awards__col">
                    <div class="awards__left">
                        <div class="awards__icon">
                            <img src="{{ asset('holding/img/icons/wine-botle.svg') }}" alt="">
                        </div>
                        <div class="awards__shape"></div>
                    </div>

                    <div class="awards__right">
                         @if($taste)
                            <h2>{{ count($taste->details) > 0 ? $taste->details[0]->title : '' }}</h2>
                            <p> {{ count($taste->details) > 0 ? $taste->details[0]->description : '' }}</p>
                        @endif
                    </div>
                </div>

                <div class="awards__col">
                    <div class="awards__left">
                        <div class="awards__icon">
                            <img src="{{ asset('holding/img/icons/grapes.svg') }}" alt="">
                        </div>
                        <div class="awards__shape"></div>
                    </div>

                    <div class="awards__right">
                         @if($quality)
                            <h2>{{ count($quality->details) > 0 ? $quality->details[0]->title : '' }}</h2>
                            <p> {{ count($quality->details) > 0 ? $quality->details[0]->description : '' }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- section 5 - videos -->
        <section id="videos">
            <div class="container">

                <div class="videos__text">
                    <h1 class="site-title-reusable">
                        We Believe Sustainability Is Key
                    </h1>
                    <p>Château Svanidze is an organic wine, made from organically grown grapes. The award winning wine is produced in limited quantities, with a commitment to quality and detail in grape picking and processing.
                    </p>
                </div>

                <div class="videos__right">
                    <div class="videos__slider-bg"></div>
                    <div class="videos__slider">
                        <div class="videos__slide">
                            <img src="./img/video-bg.png" alt="" class="img-cover">
                            <div class="videos__slide-overlay">
                                <button class="video-modal-btn">
                                    <img src="./img/icons/play-svg.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="videos__slide">
                            <img src="./img/hero-1.png" alt="" class="img-cover">
                            <div class="videos__slide-overlay">
                                <button class="video-modal-btn">
                                    <img src="./img/icons/play-svg.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="videos__slide">
                            <img src="./img/slider-33.png" alt="" class="img-cover">
                            <div class="videos__slide-overlay">
                                <button class="video-modal-btn">
                                    <img src="./img/icons/play-svg.svg" alt="">
                                </button>
                            </div>
                        </div>
                        <div class="videos__slide">
                            <img src="./img/slider-66.png" alt="" class="img-cover">
                            <div class="videos__slide-overlay">
                                <button class="video-modal-btn">
                                    <img src="./img/icons/play-svg.svg" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- video slider modals(with-video) (4xvideo)-->
        <div class="video-modal">
            <div class="video-modal__wrap">
                <button class="video-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                      </svg>
                </button>
                <!-- put mp4 link here-->
                <video controls="">
                    <source src="./img/" type="video/mp4">
                    Your browser does not support HTML video.
                  </video>
            </div>
        </div>
        <div class="video-modal">
            <div class="video-modal__wrap">
                <button class="video-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                      </svg>
                </button>
                <!-- put mp4 link here-->
                <video controls="">
                    <source src="./img/" type="video/mp4">
                    Your browser does not support HTML video.
                  </video>
            </div>
        </div>
        <div class="video-modal">
            <div class="video-modal__wrap">
                <button class="video-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                      </svg>
                </button>
                <!-- put mp4 link here-->
                <video controls="">
                    <source src="./img/" type="video/mp4">
                    Your browser does not support HTML video.
                  </video>
            </div>
        </div>
        <div class="video-modal">
            <div class="video-modal__wrap">
                <button class="video-modal-close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.426" height="13.423" viewBox="0 0 13.426 13.423">
                        <path id="Icon_ionic-ios-close" data-name="Icon ionic-ios-close" d="M19.589,18l4.8-4.8A1.124,1.124,0,0,0,22.8,11.616l-4.8,4.8-4.8-4.8A1.124,1.124,0,1,0,11.616,13.2l4.8,4.8-4.8,4.8A1.124,1.124,0,0,0,13.2,24.384l4.8-4.8,4.8,4.8A1.124,1.124,0,1,0,24.384,22.8Z" transform="translate(-11.285 -11.289)"/>
                      </svg>
                </button>
                <!-- put mp4 link here-->
                <video controls="">
                    <source src="./img/" type="video/mp4">
                    Your browser does not support HTML video.
                  </video>
            </div>
        </div>

        <!-- section 6 - news -->
        <section id="news">
            <div class="container">
                <h1 class="site-title-reusable">
                    news
                </h1>
                <p class="news__p">
                    Our award winning selection of organically produced wines
                </p>

                <div class="news__grid shorten">

                    @if($news)
                        @foreach($news as $item)
                            <div class="news__card">
                                <div class="news__card-img">
                                @if ($item->files)
                                    <img src="{{asset('storage/news/'.$item->id.'/'.$item->files[0]->name)}}" alt="">
                                @else
                                    <img src="{{asset('holding/img/noimage.jpg')}}" alt="">
                                @endif
                            </div>
                                <div class="news__card-content">
                                    <div class="news__card-top">
                                        <h2>{{ count($item->availableLanguage) > 0 ? $item->availableLanguage[0]->title : '' }}</h2>
                                        <div class="news__card-date">
                                            <img src="./img/icons/png-calendar.png" alt="">
                                             {{  date("M d, Y", strtotime($item->created_at))}}

                                        </div>
                                    </div>
                                    <p class="news__card-p">{{ count($item->availableLanguage) > 0 ? $item->availableLanguage[0]->description: '' }}</p>
                                    <button class="news__card-btn" onclick="newsDetails({{ $item->id }})">
                                        Read More
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    @endif



                </div>

                <button class="switch-grid-btn more">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.193" height="14.193" viewBox="0 0 14.193 14.193">
                        <g id="Icon_feather-loader" data-name="Icon feather-loader" transform="translate(-2.5 -2.5)">
                          <path id="Path_79" data-name="Path 79" d="M18,3V5.639" transform="translate(-8.403)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          <path id="Path_80" data-name="Path 80" d="M18,27v2.639" transform="translate(-8.403 -13.446)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          <path id="Path_81" data-name="Path 81" d="M7.4,7.4,9.262,9.262" transform="translate(-2.462 -2.462)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          <path id="Path_82" data-name="Path 82" d="M24.36,24.36l1.867,1.867" transform="translate(-11.967 -11.967)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          <path id="Path_83" data-name="Path 83" d="M3,18H5.639" transform="translate(0 -8.403)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          <path id="Path_84" data-name="Path 84" d="M27,18h2.639" transform="translate(-13.446 -8.403)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          <path id="Path_85" data-name="Path 85" d="M7.4,26.227,9.262,24.36" transform="translate(-2.462 -11.967)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                          <path id="Path_86" data-name="Path 86" d="M24.36,9.262,26.227,7.4" transform="translate(-11.967 -2.462)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </g>
                      </svg>
                     <span>Load More</span>
                </button>
            </div>
        </section>

        <!-- section 7- clients -->
        <section id="clients">
            <div class="container">

                <div class="clients__text">
                    <h1 class="site-title-reusable">
                        What Clients Say
                    </h1>
                    <img class="quote" src="./img/icons/png-quote-right.png" alt="">

                    <p class="clients__p">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.
                    </p>

                    <div class="clients__profile">
                        <div class="clients__prof-img">
                            <img src="./img/person.png" alt="" class="img-cover">
                        </div>
                        <div class="clients__prof-text">
                            <h2>Joahnna Johns</h2>
                            <p>Svanidze Holding</p>
                        </div>
                    </div>
                </div>

                <div class="clients__imgs">
                    <div class="clients__imgs-left">
                        <img src="./img/client-1.png" alt="" class="img-cover">
                    </div>
                    <div class="clients__imgs-right">
                        <div class="clients__imgs-right-i">
                            <img src="./img/client-2.png" alt="" class="img-cover">
                        </div>
                        <div class="clients__imgs-right-i">
                            <img src="./img/client-3.png" alt="" class="img-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section 8 - contact -->
        <section id="contact">
            <div class="container">

                <div class="contact__left">

                    <h1 class="site-title-reusable">
                        Get in Touch
                    </h1>

                    <p class="contact__P">
                        Our award winning selection of organically produced wines
                    </p>

                    <form action="" class="contact__form">
                        <input type="text" placeholder="Name" required>
                        <input type="email" placeholder="E-Mail" required>
                        <textarea placeholder="Message" required name="" id="" cols="30" rows="10"></textarea>

                        <button class="contact__btn">Send Message</button>
                    </form>
                </div>

                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8426.500043046433!2d44.80081624030541!3d41.694236682267714!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x61d084ede2576ea3!2sTbilisi%2C%20Georgia!5e0!3m2!1sen!2sus!4v1603197121014!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>



    </main>


    <!-- footer-->
    <footer id="footer">
        <div class="container">
            <div class="footer__logo">
                <img src="./img/icons/site-logo.svg" alt="">
            </div>

            <button class="footer__scroll-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="25.243" height="24" viewBox="0 0 25.243 24">
                    <g id="Icon_feather-arrow-down" data-name="Icon feather-arrow-down" transform="translate(2.121 1.5)">
                      <path id="Path_70" data-name="Path 70" d="M18,28.5V7.5" transform="translate(-7.5 -7.5)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                      <path id="Path_71" data-name="Path 71" d="M28.5,28.5,18,18,7.5,28.5" transform="translate(-7.5 -18)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/>
                    </g>
                  </svg>
            </button>

            <div class="footer__copy">
                &copy; Created by
                <a href="https://insite.international/en/" target="blank">Insite International.</a>
                2020
            </div>
        </div>
    </footer>


    <!-- third-p js-->
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <!--slick js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>


    <!-- regular js-->
    <script src="{{asset('holding/script/general.js')}}"></script>

    <script src="{{asset('holding/script/index.js')}}"></script>

</body>

</html>
