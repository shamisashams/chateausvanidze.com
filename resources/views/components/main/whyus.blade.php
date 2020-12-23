  <!-- section 4 - why us -->
  <section id="why-us">
    <div class="container">

        <div class="why-us__wrapper">
            <div class="why-us__overlay">
                <h2 class="why-us__title">{{__('client.why_us')}}</h2>
                @if(count($page->availableLanguage) > 0)
                <p class="why-us__parapraph">{{$page->availableLanguage[0]->content_2}}</p>
                @endif

                <div class="divider">
                    <img src="./img/icons/paragraph-fff.svg" alt="">  
                </div>

                <div class="why-us__flex">
                    <div class="why-us__col">
                        <img src="./img/icons/svg-award.svg" alt="">
                        <h2>უამრავი ჯილდო</h2>

                        <p>ლორემ იპსუმ გრძელნაწნავიან დაგარტყა საქმეც.</p>
                    </div>

                    <div class="why-us__col">
                        <img src="./img/icons/svg-wines.svg" alt="">
                        <h2>საუკეთესო გემო</h2>

                        <p>ლორემ იპსუმ გრძელნაწნავიან დაგარტყა საქმეც.</p>
                    </div>

                    <div class="why-us__col">
                        <img src="./img/icons/svg-w.svg" alt="">
                        <h2>საუკეთესო ხარისხი</h2>

                        <p>ლორემ იპსუმ გრძელნაწნავიან დაგარტყა საქმეც.</p>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>