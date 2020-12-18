@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  blogs-section -->
    <section id="blogs-section">
        <div class="container">
            <h2 class="blogs__title">სიახლეები &amp; ღონისძიებები</h2>

            <div class="blog-card-wrap">

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-1.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმა აღორძინდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, სახელი.
                    </p>
                    <a href="{{route('BlogShow', [app()->getLocale(), 1])}}" class="event-card__link">
                        დეტალურად
                    </a>
                </div>

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-2.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, სახელი.ა აღორძინდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგ.
                    </p>
                    <a href="" class="event-card__link">
                        დეტალურად
                    </a>

                </div>

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-3.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, სახელი.ა აღორძინდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგ.
                    </p>
                    <a href="" class="event-card__link">
                        დეტალურად
                    </a>

                </div>

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-4.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, საჰო კიეველმეტიალა გაგზარდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგ.
                    </p>
                    <a href="" class="event-card__link">
                        დეტალურად
                    </a>
                </div>

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-3.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, სახელი.ა აღორძინდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგ.
                    </p>
                    <a href="" class="event-card__link">
                        დეტალურად
                    </a>

                </div>

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-4.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, საჰო კიეველმეტიალა გაგზარდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგ.
                    </p>
                    <a href="" class="event-card__link">
                        დეტალურად
                    </a>
                </div>

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-1.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმა აღორძინდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, სახელი.
                    </p>
                    <a href="" class="event-card__link">
                        დეტალურად
                    </a>

                </div>

                <div class="event-card">
                    <div class="event-card__img">
                        <img class="img-cover" src="{{asset('../img/blog-c-2.png')}}" alt="">
                    </div>

                    <h2 class="event-card__title">შატო სვანიძე / ბლოგის დასახელება</h2>
                    <span class="event-card__date">23 ოქტ, 2020</span>

                    <p class="event-card__text">
                        ლორემ იპსუმ საჰო კიეველმეტიალა გაგზარდა, წარმოგვედგინა აგზარდა წარმოგვედგინა, სახელი.ა აღორძინდა, რადიატორზე ოკეანესავით, ძველმა, სჭამს იხეტიალა გაგ.
                    </p>
                    <a href="" class="event-card__link">
                        დეტალურად
                    </a>

                </div>
            </div>

            <!-- blogs pagination ( same for category) -->
            <div class="category-pagination">
                <a href="" class="left-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                        <g id="chevron-left" transform="translate(1 1.414)">
                          <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                        </g>
                      </svg>
                </a>

               <div class="pagination-list">
                <a href="" class="active">1</a>
                <a href="">2</a>
                <a href="">3</a>
                <a href="">4</a>
                <a href="">5</a>
                <a href="">6</a>
                <a href="">7</a>
                <a href="">8</a>
                <a href="">9</a>
                <a href="">10</a>
               </div>

                <a href="" class="left-right">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8.414" height="14.828" viewBox="0 0 8.414 14.828">
                        <g id="chevron-right" transform="translate(7.414 13.414) rotate(180)">
                          <path id="Path" d="M6,12,0,6,6,0" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></path>
                        </g>
                      </svg>
                      
                </a>
            </div>
        </div>
    </section>

</main>
@endsection