<!-- section 1 - hero-->
@if(count($slider)>0)
    <section class="hero-slider">
        @foreach($slider as $slide)
            @if(count($slide->files) > 0)
                <div class="hero-slide">
                    <img class="img-cover"  src="{{url('storage/slider/'.$slide->id. '/'.$slide->files[0]->name)}}" alt="">

                    <div class="hero__overlay">
                        <div class="hero__content">
                            @if (count($slide->availableLanguage) > 0)
                                <h1>{{$slide->availableLanguage[0]->title}}</h1>
                                <h2>{{$slide->availableLanguage[0]->description}} </h2>
                            @endif

                            <a class="hero-link" href="{{route('Products',app()->getLocale())}}">
                                {{__('client.catalog')}}
                                <span></span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                                    <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                                        <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)" />
                                        <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)" />
                                        <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>

                </div>

            @endif
        @endforeach

    </section>
@endif