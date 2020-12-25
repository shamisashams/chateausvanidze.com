@if(count($products) > 0)            <!-- section 3 - products grid -->
<!-- section 6 - popular products  -->
  <section id="popular-products">
    <div class="container">
        <h2 class="section__title">
            {{__('client.popular')}}
        </h2>

        <div class="product__grid">
            @foreach($products as $product)
                <div class="product-card">
                    @if($product->created_at > Carbon\Carbon::now()->subWeek() && $product->status)
                        <div class="card__status">{{__('client.new')}} </div>
                    @elseif(!$product->status)
                        <div class="card__status out-sale">{{__('client.out_of_sale')}} </div>
                    @endif
                    <div class="card__rating">
                        <i class="fa fa-star fa-lg"></i>
                        <i class="fa fa-star fa-lg"></i>
                        <i class="fa fa-star fa-lg"></i>
                        <i class="fa fa-star fa-lg"></i>
                        <i class="fa fa-star fa-lg"></i>
                    </div>
                    <div class="card__img">
                        @if(count($product->files) > 0)
                            <img src="{{url('storage/product/'.$product->id. '/'.$product->files[0]->name)}}">
                        @else
                            <img src="{{url('noimage.png')}}">
                        @endif
                    </div>


                    <div class="card__info">
                        <div class="card__price">
                            @if($product->sale && $product->sale_price)
                                <span class="new-p">{{number_format($product->sale_price/100,2)}}₾</span>
                                <span class="old-p">{{number_format($product->price/100,2)}}₾</span>
                            @else
                                <span class="normal-p">{{number_format($product->price/100,2)}}₾</span>
                            @endif

                        </div>
                        @if(count($product->availableLanguage) > 0)
                            <p class="card__title">{{$product->availableLanguage[0]->title}}
                            </p>
                            <p class="card__description">{{$product->availableLanguage[0]->description}}</p>
                        @endif
                    </div>

                    <div class="card__overlay">
                        <a href="{{route('ProductShow',[app()->getLocale(),$product->id])}}">
                            {{__('client.details')}}
                            <span></span>

                            <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)" />
                            </svg>


                        </a>
                        <button onclick="addToCart(this,'{{$product->id}}')">
                            {{__('client.add_to_cart')}}
                            <span></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.259" height="15.018" viewBox="0 0 16.259 15.018">
                                <g id="Icon_ionic-ios-cart" data-name="Icon ionic-ios-cart" transform="translate(-3.382 -4.493)">
                                    <path id="Path_1" data-name="Path 1" d="M11.439,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,11.439,29.063Z" transform="translate(-2.744 -10.491)"></path>
                                    <path id="Path_2" data-name="Path 2" d="M27.224,29.063a.938.938,0,1,1-.938-.938A.938.938,0,0,1,27.224,29.063Z" transform="translate(-9.751 -10.491)"></path>
                                    <path id="Path_3" data-name="Path 3" d="M19.635,7.163a.23.23,0,0,0-.2-.164L6.7,5.768A.392.392,0,0,1,6.4,5.584a3.981,3.981,0,0,0-.477-.727c-.3-.368-.868-.356-1.908-.364a.57.57,0,0,0-.637.551.559.559,0,0,0,.61.551,5.2,5.2,0,0,1,1.017.074c.184.055.332.356.387.618a.014.014,0,0,0,0,.012c.008.047.078.4.078.4l1.564,8.273a3.041,3.041,0,0,0,.567,1.4A1.56,1.56,0,0,0,8.895,17h9.251a.556.556,0,0,0,.563-.524.545.545,0,0,0-.547-.571H8.887a.454.454,0,0,1-.325-.109,1.755,1.755,0,0,1-.45-1.017l-.168-.927a.021.021,0,0,1,.016-.023L18.818,12a.228.228,0,0,0,.192-.2l.626-4.528A.223.223,0,0,0,19.635,7.163Z"></path>
                                </g>
                            </svg>
                        </button>
                    </div>

                </div>
            @endforeach

        </div>

    </div>
</section>


 <!-- product img preview modal-->
 <div class="picture-modal">

    <div class="modal-img-content">
        <span class="close-img-modal">
            <img src="./img/icons/svg-close-circle (1).svg" alt="">
        </span>

        <img id="modal-img"   src="" alt="product-picture">
    </div>
</div>

@endif