 <!-- section 2 -  -->
 <section id="brand-info">

    <div class="container">
        <div class="brand-info__text">
            <img src="./img/icons/svg-paragraph.svg" alt="">
            <h2>{{__('client.shato_svanidze')}}</h2>
            @if(count($page->availableLanguage) > 0)
            <p>{{$page->availableLanguage[0]->content }}</p>
                <img src="./img/icons/svg-paragraph.svg" alt="">

            @endif
        </div>

        <div class="brand-info__picture">
            <img class="img-cover" src="./img/brand-info-pic.jpg" alt="">
        </div>
    </div>
</section>
