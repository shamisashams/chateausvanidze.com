@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  blogs-section -->
    <section id="blog-details">
        <div class="container">

            <h2 class="blog-details__title">
                ბლოგის დასახელება ლორემ იპსუმ 
                დოლორ სიტ ამეტ
            </h2>

            <div class="blog-details__wrapper">

                <div class="blog-details__main">
                    <div class="blog-details__date">
                        <img src="{{asset('../img/icons/svg-date.svg')}}" alt="">
                        იან 20, 2019
                    </div>

                    <div class="blog-details__main-img">

                    </div>

                    <p class="blog-details__p">ლორემ იპსუმ გზებსა მამაკაცობით ჭეშმარიტებაა გაიგონა სკლიდან ცუდსაც სიუჟეტი ფიცქვეშ. ვიმსახურებდე ბეჭედი ტენდენციის დავდიოდით, შეიმაგრა გეჩქარებათ, ისტორიულია ფიცქვეშ დაფიქრების კინოვარსკვლავი მოტყუვდებოდა მოუხდება დააშოშმანა პლეხანოველებსო. ვიზიტობენ ფიცქვეშ შუქფარი დენთის მსუქანის კოლასა. მესაუბრა ექქვა უქებს, ამდენად გაიგონა პანაშვიდი შედიან გეჩქარებათ, მსუქანის ტურტლიანებს დაფიქრების მოზვერი მოუხდება. შეუერთდნენ შეიმაგრა საუკუნეებში სკლიდან მოუხდება იმსიგრძე</p>
                    <p class="blog-details__p">ლორემ იპსუმ გზებსა მამაკაცობით ჭეშმარიტებაა გაიგონა სკლიდან ცუდსაც სიუჟეტი ფიცქვეშ. ვიმსახურებდე ბეჭედი ტენდენციის დავდიოდით, შეიმაგრა გეჩქარებათ, ისტორიულია ფიცქვეშ დაფიქრების კინოვარსკვლავი მოტყუვდებოდა მოუხდება დააშოშმანა პლეხანოველებსო. ვიზიტობენ ფიცქვეშ შუქფარი დენთის მსუქანის კოლასა. მესაუბრა ექქვა უქებს, ამდენად გაიგონა პანაშვიდი შედიან გეჩქარებათ, მსუქანის ტურტლიანებს დაფიქრების მოზვერი მოუხდება. შეუერთდნენ შეიმაგრა საუკუნეებში სკლიდან მოუხდება იმსიგრძე ლორემ იპსუმ გზებსა მამაკაცობით ჭეშმარიტებაა გაიგონა სკლიდან ცუდსაც სიუჟეტი ფიცქვეშ. ვიმსახურებდე ბეჭედი ტენდენციის დავდიოდით, შეიმაგრა გეჩქარებათ, ისტორიულია ფიცქვეშ დაფიქრების კინოვარსკვლავი მოტყუვდებოდა მოუხდება დააშოშმანა პლეხანოველებსო. ვიზიტობენ ფიცქვეშ შუქფარი დენთის მსუქანის კოლასა. მესაუბრა ექქვა უქებს, ამდენად გაიგონა პანაშვიდი შედიან გეჩქარებათ, მსუქანის ტურტლიანებს დაფიქრების მოზვერი მოუხდება. შეუერთდნენ შეიმაგრა საუკუნეებში სკლიდან მოუხდება იმსიგრძე</p>

                    <div class="blog-details__video">
                       <div class="blog-details__overlay">
                            <button class="blog-video-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="91" height="91" viewBox="0 0 91 91">
                                    <defs>
                                    <style>
                                        .cls-1, .cls-4 {
                                        fill: none;
                                        }
                                
                                        .cls-1 {
                                        stroke: #fff;
                                        stroke-width: 3px;
                                        }
                                
                                        .cls-2 {
                                        fill: #fff;
                                        }
                                
                                        .cls-3 {
                                        stroke: none;
                                        }
                                    </style>
                                    </defs>
                                    <g id="Group_2838" data-name="Group 2838" transform="translate(-0.062 0)">
                                    <g id="Ellipse_1" data-name="Ellipse 1" class="cls-1" transform="translate(0.062 0)">
                                        <circle class="cls-3" cx="45.5" cy="45.5" r="45.5"></circle>
                                        <circle class="cls-4" cx="45.5" cy="45.5" r="44"></circle>
                                    </g>
                                    <path id="Polygon_1" data-name="Polygon 1" class="cls-2" d="M16.5,0,33,29H0Z" transform="translate(62.062 29) rotate(90)"></path>
                                    </g>
                                </svg>
                            </button>
                       </div>
                    </div>

                    <div class="blog-details__quote">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="31.5" viewBox="0 0 36 31.5">
                            <path id="Icon_awesome-quote-left" data-name="Icon awesome-quote-left" d="M32.625,18H27V13.5A4.5,4.5,0,0,1,31.5,9h.563A1.683,1.683,0,0,0,33.75,7.313V3.938A1.683,1.683,0,0,0,32.063,2.25H31.5A11.247,11.247,0,0,0,20.25,13.5V30.375a3.376,3.376,0,0,0,3.375,3.375h9A3.376,3.376,0,0,0,36,30.375v-9A3.376,3.376,0,0,0,32.625,18Zm-20.25,0H6.75V13.5A4.5,4.5,0,0,1,11.25,9h.563A1.683,1.683,0,0,0,13.5,7.313V3.938A1.683,1.683,0,0,0,11.813,2.25H11.25A11.247,11.247,0,0,0,0,13.5V30.375A3.376,3.376,0,0,0,3.375,33.75h9a3.376,3.376,0,0,0,3.375-3.375v-9A3.376,3.376,0,0,0,12.375,18Z" transform="translate(0 -2.25)" fill="#b4b4b4"></path>
                        </svg>
                        <p>ლორემ იპსუმ გზებსა მამაკაცობით ჭეშმარიტებაა გაიგონა სკლიდან ცუდსაც სიუჟეტი ფიცქვეშ. ვიმსახურებდე ბეჭედი ტენდენციის დავდიოდით, შეიმაგრა გეჩქარებათ, ისტორიულია ფიცქვეშ დაფიქრების</p>
                    </div>

                    <p class="blog-details__p">ლორემ იპსუმ გზებსა მამაკაცობით ჭეშმარიტებაა გაიგონა სკლიდან ცუდსაც სიუჟეტი ფიცქვეშ. ვიმსახურებდე ბეჭედი ტენდენციის დავდიოდით, შეიმაგრა გეჩქარებათ, ისტორიულია ფიცქვეშ დაფიქრების კინოვარსკვლავი მოტყუვდებოდა მოუხდება დააშოშმანა პლეხანოველებსო. ვიზიტობენ ფიცქვეშ შუქფარი დენთის მსუქანის კოლასა. მესაუბრა ექქვა უქებს, ამდენად გაიგონა პანაშვიდი შედიან გეჩქარებათ, მსუქანის ტურტლიანებს დაფიქრების მოზვერი მოუხდება. შეუერთდნენ შეიმაგრა საუკუნეებში სკლიდან მოუხდება იმსიგრძე</p>

                </div>

                <aside class="blog-details__aside">

                    <h2 class="aside-blogs__title">სხვა ბლოგები</h2>
                
                    <div class="aside-blog">
                        <h2 class="aside-blog__name">ბლოგის დასახელება ლორემ.</h2>
                        <div class="aside-blog__img">
                            <img src="{{asset('../img/blog-c-3.png')}}" alt="" class="img-cover">
                        </div>
                        <div class="aside-blog__date">
                            <img src="{{asset('../img/icons/svg-date.svg')}}" alt="">
                            იან 20, 2019
                        </div>
                        <p class="aside-blog__p">
                            ლორემ იპსუმ დამაკმაყოფილებელიც ბატონოთი მოიმარგვა რიმ, სავალდებულო.
                        </p>

                        <a href="" class="aside-blog__link">
                            გაგრძელება
                        </a>
                    </div>

                    <div class="aside-blog">
                        <h2 class="aside-blog__name">ბლოგის დასახელება ლორემ.</h2>
                        <div class="aside-blog__img">
                            <img src="{{asset('../img/blog-c-1.png')}}" alt="" class="img-cover">
                        </div>
                        <div class="aside-blog__date">
                            <img src="{{asset('../img/icons/svg-date.svg')}}" alt="">
                            იან 20, 2019
                        </div>
                        <p class="aside-blog__p">
                            ლორემ იპსუმ დამაკმაყოფილებელიც ბატონოთი მოიმარგვა რიმ, სავალდებულო.
                        </p>

                        <a href="" class="aside-blog__link">
                            გაგრძელება
                        </a>
                    </div>

                    <div class="aside-blog">
                        <h2 class="aside-blog__name">ბლოგის დასახელება ლორემ.</h2>
                        <div class="aside-blog__img">
                            <img src="{{asset('../img/blog-c-4.png')}}" alt="" class="img-cover">
                        </div>
                        <div class="aside-blog__date">
                            <img src="{{asset('../img/icons/svg-date.svg')}}" alt="">
                            იან 20, 2019
                        </div>
                        <p class="aside-blog__p">
                            ლორემ იპსუმ დამაკმაყოფილებელიც ბატონოთი მოიმარგვა რიმ, სავალდებულო.
                        </p>

                        <a href="" class="aside-blog__link">
                            გაგრძელება
                        </a>
                    </div>
                </aside>
            </div>
          
        </div>

    </section>


    <!-- blog video modal -->
    <div id="blog-vid-modal">
        <div class="video-modal__wrap">
            <button class="video-modal-close close-blog-vid">
                <img src="{{asset('../img/icons/svg-close-circle (1).svg')}}" alt="">
            </button>
            
            <video controls="">
                <source src="{{asset('../img/" type="video/mp4">
                
                Your browser does not support HTML video.
              </video>
        </div>
    </div>
</main>
@endsection