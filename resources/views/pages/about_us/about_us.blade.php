@extends('layouts.base')
@section('content')
    <main>

        <!-- section 1 - about us  -->
        <section class="about-us-content">
            <div class="container">
                <h1 class="main-title">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->title : ''}}</h1>

            <div class="fx top">
                @if(count($page->files) > 0)
                    <div class="img">
                        <img class="img-cover" src="{{url('storage/page/'.$page->id.'/'.$page->files[0]->name)}}">
                        <div class="abs-img">
                            <div class="overlay"></div>
                        </div>
                    </div>
                @endif
                <div class="content">
                    <div class="heading">
                        @if(count($page->availableLanguage) > 0)
                        <p class="s">{{$page->availableLanguage[0]->meta_title}}</p>
                        @endif
                        @if(count($page->availableLanguage) > 0)
                        <h4 class="title">{{$page->availableLanguage[0]->description}}</h4>
                        @endif
                    </div>
                    <p class="r">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content : ''}}</p>
                    <p class="g">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content_2 : ''}}</p>

                    </div>
                </div>
                <div class="fx bottom">
                    <div class="content">
                        <p class="r">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content_3 : ''}}</p>
                        <p class="g">{{(count($page->availableLanguage) > 0) ?  $page->availableLanguage[0]->content_4 : ''}}</p>
                    </div>
                    @if(count($page->files) > 1)
                        <div class="img">
                            <img class="img-cover" src="{{url('storage/page/'.$page->id.'/'.$page->files[1]->name)}}">
                            <div class="abs-img">
                                <div class="overlay"></div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>


    </main>
@endsection