@extends('layouts.base')
@section('content')
    <main>

        <!-- section 1 -  blogs-section -->
        <section id="blogs-section">
            <div class="container">
                <h2 class="blogs__title">{{__('client.news_and_events')}}</h2>

                <div class="blog-card-wrap">

                    @if (count($news) > 0)
                        @foreach($news as $new)
                            <div class="event-card">
                                <div class="event-card__img">
                                    <img class="img-cover" src="{{asset('../img/blog-c-2.png')}}" alt="">
                                </div>

                                <h2 class="event-card__title">
                                    {{count($new->availableLanguage) > 0 ? $new->availableLanguage[0]->title :
                                                                        (count($new->language) > 0 ? $new->language[0]->title : '') }}</h2>
                                <span class="event-card__date">{{\Carbon\Carbon::parse($new->created_at)->toFormattedDateString()}}</span>

                                <p class="event-card__text">
                                    {{count($new->availableLanguage) > 0 ? $new->availableLanguage[0]->description :
                                                                        (count($new->language) > 0 ? $new->language[0]->description : '') }}
                                </p>
                                <a href="{{route('BlogShow',[app()->getLocale(),$new->slug])}}" class="event-card__link">
                                    დეტალურად
                                </a>
                            </div>
                        @endforeach
                    @endif


                </div>

                <!-- blogs pagination ( same for category) -->
                {{ $news->links('vendor.pagination.custom') }}

            </div>
        </section>

    </main>
@endsection