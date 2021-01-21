@extends('layouts.base')
@section('content')
    <main>

        <!-- section 1 -  blogs-section -->
        <section id="blog-details">
            <div class="container">
                @if(count($new->availableLanguage) > 0)

                    <h2 class="blog-details__title">
                        {{ $new->availableLanguage[0]->title }}
                    </h2>
                @endif
                <div class="blog-details__wrapper">
                    <div class="blog-details__main">
                        <div class="blog-details__date">
                            <img src="{{asset('../img/icons/svg-date.svg')}}" alt="">
                            {{\Carbon\Carbon::parse($new->created_at)->toFormattedDateString()}}
                        </div>
                        @if($new->file)
                            <div class="blog-details__main-img"
                                 style="background-image: url('{{url('storage/news/'.$new->file->name)}}')"></div>
                        @else
                            <div class="blog-details__main-img"
                                 style="background-image: url('{{url('noimage.png')}}')"></div>

                        @endif
                        @if(count($new->availableLanguage) > 0)
                            {!! $new->availableLanguage[0]->content !!}
                            @if($new->availableLanguage[0]->section)
                                <div class="blog-details__quote">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="31.5"
                                         viewBox="0 0 36 31.5">
                                        <path id="Icon_awesome-quote-left" data-name="Icon awesome-quote-left"
                                              d="M32.625,18H27V13.5A4.5,4.5,0,0,1,31.5,9h.563A1.683,1.683,0,0,0,33.75,7.313V3.938A1.683,1.683,0,0,0,32.063,2.25H31.5A11.247,11.247,0,0,0,20.25,13.5V30.375a3.376,3.376,0,0,0,3.375,3.375h9A3.376,3.376,0,0,0,36,30.375v-9A3.376,3.376,0,0,0,32.625,18Zm-20.25,0H6.75V13.5A4.5,4.5,0,0,1,11.25,9h.563A1.683,1.683,0,0,0,13.5,7.313V3.938A1.683,1.683,0,0,0,11.813,2.25H11.25A11.247,11.247,0,0,0,0,13.5V30.375A3.376,3.376,0,0,0,3.375,33.75h9a3.376,3.376,0,0,0,3.375-3.375v-9A3.376,3.376,0,0,0,12.375,18Z"
                                              transform="translate(0 -2.25)" fill="#b4b4b4"></path>
                                    </svg>
                                    <p>{!! $new->availableLanguage[0]->section !!}</p>
                                </div>
                            @endif
                        @endif

                    </div>
                    @if(count($otherNews) > 0)
                        @foreach($otherNews as $new)
                            <aside class="blog-details__aside">

                                <h2 class="aside-blogs__title">{{__('client.another_blogs')}}</h2>

                                <div class="aside-blog">
                                    <h2 class="aside-blog__name">{{count($new->availableLanguage) > 0 ? $new->availableLanguage[0]->title :
                                                                        (count($new->language) > 0 ? $new->language[0]->title : '') }}</h2>
                                    @if($new->file)

                                        <div class="aside-blog__img">
                                            <img src="{{url('storage/news/'.$new->file->name)}}">
                                        </div>
                                    @endif

                                    <div class="aside-blog__date">
                                        <img src="{{asset('../img/icons/svg-date.svg')}}" alt="">
                                        {{\Carbon\Carbon::parse($new->created_at)->toFormattedDateString()}}
                                    </div>
                                    <p class="aside-blog__p">
                                        {{count($new->availableLanguage) > 0 ? $new->availableLanguage[0]->description :
                                                                       (count($new->language) > 0 ? $new->language[0]->description : '') }}
                                    </p>

                                    <a href="" class="aside-blog__link">
                                        {{__('client.continue')}}
                                    </a>
                                </div>

                            </aside>
                        @endforeach
                    @endif
                </div>

            </div>

        </section>
    </main>
@endsection