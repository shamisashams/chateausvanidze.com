<!-- section 5 - about-video  -->
<section id="about-video">

{{--    <div id="video-modal" >--}}
{{--        <div class="video-modal__wrap">--}}
{{--            <button class="video-modal-close">--}}
{{--                <img src="./img/icons/svg-close-circle (1).svg" alt="">--}}
{{--            </button>--}}

{{--            <video  controls>--}}
{{--                <source src="./img/" type="video/mp4">--}}

{{--                Your browser does not support HTML video.--}}
{{--              </video>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container">

        <div class="about-video__left">
            <img src="./img/video-about.png" alt="">
           <div class="about-video__overlay">
                <button id="play-video-btn">
                    <img src="./img/icons//big-play.svg" alt="">
                </button>
           </div>
        </div>

        <div class="about-video__right">
            <img src="./img/icons/svg-paragraph.svg" alt="">

            <h2>{{__('client.about_us')}}</h2>

            @if(count($page->availableLanguage) > 0)
            <p>{{$page->availableLanguage[0]->content_3}}</p>
            @endif
            <img src="./img/icons/svg-paragraph.svg" alt="">
        </div>

    </div>
</section>