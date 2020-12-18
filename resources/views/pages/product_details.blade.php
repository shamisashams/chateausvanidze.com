@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  details -->
    <section id="details">
        <div class="container">

            <div class="details__preview">

                <div class="big-img-box shown">
                    <img class="img-cover" src="{{asset('../img/product-clear.png')}}" alt="">
                    <div class="big-img-overlay">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" class="svg-inline--fa fa-search-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path></svg>
                    </div>
                </div>

                <div class="big-img-box">
                    <img class="img-cover" src="{{asset('../img/details-2.png')}}" alt="">
                    <div class="big-img-overlay">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" class="svg-inline--fa fa-search-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path></svg>
                    </div>
                </div>

                <div class="big-img-box">
                    <img class="img-cover" src="{{asset('../img/details-img.png')}}" alt="">
                    <div class="big-img-overlay">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" class="svg-inline--fa fa-search-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path></svg>
                    </div>
                </div>

                <div class="big-img-box">
                    <img class="img-cover" src="{{asset('../img/details-2.png')}}" alt="">
                    <div class="big-img-overlay">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search-plus" class="svg-inline--fa fa-search-plus fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#fff" d="M304 192v32c0 6.6-5.4 12-12 12h-56v56c0 6.6-5.4 12-12 12h-32c-6.6 0-12-5.4-12-12v-56h-56c-6.6 0-12-5.4-12-12v-32c0-6.6 5.4-12 12-12h56v-56c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v56h56c6.6 0 12 5.4 12 12zm201 284.7L476.7 505c-9.4 9.4-24.6 9.4-33.9 0L343 405.3c-4.5-4.5-7-10.6-7-17V372c-35.3 27.6-79.7 44-128 44C93.1 416 0 322.9 0 208S93.1 0 208 0s208 93.1 208 208c0 48.3-16.4 92.7-44 128h16.3c6.4 0 12.5 2.5 17 7l99.7 99.7c9.3 9.4 9.3 24.6 0 34zM344 208c0-75.2-60.8-136-136-136S72 132.8 72 208s60.8 136 136 136 136-60.8 136-136z"></path></svg>
                    </div>
                </div>


                <div class="big-img-thumbs">
                    <div class="img-thumb active">
                        <img class="img-cover" src="{{asset('../img/product-clear.png')}}" alt="">
                    </div>
                    <div class="img-thumb">
                        <img class="img-cover" src="{{asset('../img/details-2.png')}}" alt="">
                    </div>
                    <div class="img-thumb">
                        <img class="img-cover" src="{{asset('../img/details-img.png')}}" alt="">
                    </div>
                    <div class="img-thumb">
                        <img class="img-cover" src="{{asset('../img/details-2.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="details__complete-info">
                <div class="complete-info__top">
                    <div class="product-id">ID 3251</div>
                    <div class="product-sale-percent">-14%</div>

                    <div class="share-product">
                        <p>გაზიარება</p>
                        <div class="share-social">
                            <a href="" target="blank"><img src="{{asset('../img/icons/fff-facebook-f.svg')}}" alt="">
                            </a>
                            <a href="" target="blank"><img src="{{asset('../img/icons/svg-messenger.svg')}}" alt="">
                            </a>
                            <a href="" target="blank"><img src="{{asset('../img/icons/svg-link.svg')}}" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="details__title">
                    შატო ზვანიძე დასახელება <span>მშრალი 0.75ლ</span>
                </div>

                <div class="prices-actions">
                    <div class="price-col">
                        <div class="current-price">1,259₾</div>
                        <div class="old-price">1,500₾</div>
                    </div>

                    <button class="details__add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                            <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                              <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                              <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                              <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                            </g>
                          </svg>
                        კალათაში დამატება
                    </button>

                    <a class="buy-item" href="">ყიდვა</a>

                    <button onclick="addToFav(this)" class="to-wishlist">
                        <img src="{{asset('../img/icons/heart-img.png')}}" alt="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14.758" height="13" viewBox="0 0 14.758 13">
                            <path id="Icon_feather-heart" data-name="Icon feather-heart" d="M15.02,5.558a3.62,3.62,0,0,0-5.121,0l-.7.7-.7-.7a3.621,3.621,0,1,0-5.121,5.121l.7.7L9.2,16.5l5.121-5.121.7-.7a3.62,3.62,0,0,0,0-5.121Z" transform="translate(-1.823 -3.997)" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                        </svg>
                    </button>
                    
                </div>
                
                <div class="details-divider"></div>
                
                <h3 class="description-title">მოკლე აღწერა</h3>

                <p class="details-description">
                    ლორემ იპსუმ თანხის ვუჩვენებდი გაედგა დაბრუნდებით იალტის, ჯოზეფ პარიზელი ჰვედრებდა, გადმოვარდნილიყო საათითაც, გულდაგულ კვალობაზე ქრისტემ. შეარცხვინა უდრიდა მიარტყამდა კარვის თავისუბური დაათრობს. კარჩაკეტილნი ორმოცდაათი მოიგონებენ გოდებასავით, სატვირთო სილვანა ვუჩვენებდი, მავრებივით ბზრიალასავით ჯოზეფ თანხის დღედ ფხაკაძის დავეხმაროთ. გიშველეთ სატვირთო ჭკუიდან ემსახურებოდნენ ვაჭმევდი უზ. რამიშვილმა საათითაც ვუჩვენებდი, ვალსები, გულდაგულ მართლწერაში ყოველნაირად. ბზრიალასავით ვალსები გამოყოფილა, გაფრენის სიბრაზით, მაცდურს ახლოვდება პარიზელი სატვირთო შვილიშვილი, ჩუმი საათითაც მშობლიურ შევუდგები დღედ. კინემატოგრაფისტთა გიშველეთ რივერსონი ცოლი მაცდურს იალტის ტრაპი. შვილიშვილი ჭკუიდან რივერსონი, სუვენირი ფხაკაძის ბნედიანივით.
                </p>


            </div>

        </div>
    </section>


    <!-- section 2 -  offered products -->
    <section id="offered-p">
        <div class="container">
            <h2 class="offered-p__title">ბოლოს დამატებული</h2>

            <div class="offered-divider"></div>

            <div class="offered-p__cards">

                <div class="offer-card">
                    <div class="offer-top">
                        <img class="img-cover" src="{{asset('../img/product-4.png')}}" alt="">
                        <div class="offer-overlay">
                            <a href="./">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                    <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                                </svg>
                                დეტალურად
                            </a>
                        </div>
                    </div>

                    <div class="offer-title">ღვინის დასახელება</div>
                    <div class="offer-subtitle">წითელი, ნახევრად ტკბილი</div>

                    <div class="offer-pricing">
                        <span class="cur-p">359 ₾</span>
                        <span class="old-p">422 ₾</span>
                    </div>

                    <div class="offer-brand">ბრენდი</div>

                    <button onclick="addOfferedToCart(this)" class="offer-add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                            <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                              <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                              <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                              <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                            </g>
                          </svg>
                        კალათაში დამატება
                    </button>

                </div>

                <div class="offer-card">
                    <div class="offer-top">
                        <img class="img-cover" src="{{asset('../img/product-1.png')}}" alt="">
                        <div class="offer-overlay">
                            <a href="./">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                    <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                                </svg>
                                დეტალურად
                            </a>
                        </div>
                    </div>

                    <div class="offer-title">ღვინის დასახელება</div>
                    <div class="offer-subtitle">წითელი, ნახევრად ტკბილი</div>

                    <div class="offer-pricing">
                        <span class="cur-p">359 ₾</span>
                        <span class="old-p">422 ₾</span>
                    </div>

                    <div class="offer-brand">ბრენდი</div>

                    <button onclick="addOfferedToCart(this)" class="offer-add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                            <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                              <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                              <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                              <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                            </g>
                          </svg>
                        კალათაში დამატება
                    </button>

                </div>

                <div class="offer-card">
                    <div class="offer-top">
                        <img class="img-cover" src="{{asset('../img/product-3.png')}}" alt="">
                        <div class="offer-overlay">
                            <a href="./">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                    <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                                </svg>
                                დეტალურად
                            </a>
                        </div>
                    </div>

                    <div class="offer-title">ღვინის დასახელება</div>
                    <div class="offer-subtitle">წითელი, ნახევრად ტკბილი</div>

                    <div class="offer-pricing">
                        <span class="cur-p">359 ₾</span>
                        <span class="old-p">422 ₾</span>
                    </div>

                    <div class="offer-brand">ბრენდი</div>

                    <button onclick="addOfferedToCart(this)" class="offer-add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                            <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                              <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                              <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                              <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                            </g>
                          </svg>
                        კალათაში დამატება
                    </button>

                </div>

                <div class="offer-card">
                    <div class="offer-top">
                        <img class="img-cover" src="{{asset('../img/product-2.png')}}" alt="">
                        <div class="offer-overlay">
                            <a href="./">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                    <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                                </svg>
                                დეტალურად
                            </a>
                        </div>
                    </div>

                    <div class="offer-title">ღვინის დასახელება</div>
                    <div class="offer-subtitle">წითელი, ნახევრად ტკბილი</div>

                    <div class="offer-pricing">
                        <span class="cur-p">359 ₾</span>
                        <span class="old-p">422 ₾</span>
                    </div>

                    <div class="offer-brand">ბრენდი</div>

                    <button onclick="addOfferedToCart(this)" class="offer-add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                            <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                              <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                              <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                              <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                            </g>
                          </svg>
                        კალათაში დამატება
                    </button>

                </div>

                <div class="offer-card">
                    <div class="offer-top">
                        <img class="img-cover" src="{{asset('../img/product-1.png')}}" alt="">
                        <div class="offer-overlay">
                            <a href="./">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                    <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                                </svg>
                                დეტალურად
                            </a>
                        </div>
                    </div>

                    <div class="offer-title">ღვინის დასახელება</div>
                    <div class="offer-subtitle">წითელი, ნახევრად ტკბილი</div>

                    <div class="offer-pricing">
                        <span class="cur-p">359 ₾</span>
                        <span class="old-p">422 ₾</span>
                    </div>

                    <div class="offer-brand">ბრენდი</div>

                    <button onclick="addOfferedToCart(this)" class="offer-add-to-cart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                            <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                              <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                              <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                              <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                            </g>
                          </svg>
                        კალათაში დამატება
                    </button>

                </div>
            </div>

        </div>
    </section>

     <!-- product img preview modal-->
     <div class="picture-modal">

        <div class="modal-img-content">
            <span class="close-img-modal">
                <img src="{{asset('../img/icons/svg-close-circle (1).svg')}}" alt="">
            </span>

            <img id="modal-img" src="" alt="product-picture">
        </div>
    </div>

</main>
@endsection