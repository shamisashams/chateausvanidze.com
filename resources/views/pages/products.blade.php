@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 - catalog-->
    <section id="category">
        <div class="container">

            <aside class="category__aside">
                <h2 class="aside-title">ფასი</h2>

                <div class="range-block">
                    <div class="price-range-meta">
                        <div class="price-range-txt">
                            <input type="number" placeholder="1" id="range-low-price">
                            <span>₾ -</span>
                            <input type="number" placeholder="100" id="range-high-price">
                            <span>- ₾</span>
                        </div>
                    </div>

                    <div id="price-range" class="noUi-target noUi-ltr noUi-horizontal noUi-txt-dir-ltr"><div class="noUi-base"><div class="noUi-connects"><div class="noUi-connect" style="transform: translate(0.5%, 0px) scale(0.195, 1);"></div></div><div class="noUi-origin" style="transform: translate(-995%, 0px); z-index: 5;"><div class="noUi-handle noUi-handle-lower" data-handle="0" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="0.0" aria-valuemax="400.0" aria-valuenow="10.0" aria-valuetext="10"><div class="noUi-touch-area"></div></div></div><div class="noUi-origin" style="transform: translate(-800%, 0px); z-index: 6;"><div class="noUi-handle noUi-handle-upper" data-handle="1" tabindex="0" role="slider" aria-orientation="horizontal" aria-valuemin="10.0" aria-valuemax="2000.0" aria-valuenow="400.0" aria-valuetext="400"><div class="noUi-touch-area"></div></div></div></div></div>
                </div>

                <div class="aside-divider"></div>

                <h2 class="aside-title">ფილტრი 01</h2>

                <div class="aside-search">
                    <input type="text" placeholder="ძებნა">
                </div>

                <div class="aside-checkboxes">
                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 1
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 2
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 1
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 2
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 1
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 2
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 1
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 2
                    </label>
                  
                </div>

                <div class="aside-divider"></div>

                <h2 class="aside-title">ფილტრი 01</h2>

                <div class="aside-search">
                    <input type="text" placeholder="ძებნა">
                </div>

                <div class="aside-checkboxes">
                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 1
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 2
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="" value="val">
                        <span></span>
                        ფილტრი 1
                    </label>
                  
                </div>

                <button class="clear-filter-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17.648" height="14.119" viewBox="0 0 17.648 14.119">
                        <path id="Icon_material-delete-sweep" data-name="Icon material-delete-sweep" d="M14.471,16.589H18v1.765h-3.53Zm0-7.059h6.177v1.765H14.471Zm0,3.53h5.295v1.765H14.471ZM3.882,18.354a1.77,1.77,0,0,0,1.765,1.765h5.295a1.77,1.77,0,0,0,1.765-1.765V9.53H3.882ZM13.589,6.882H10.942L10.059,6H6.53l-.882.882H3V8.647H13.589Z" transform="translate(-3 -6)"></path>
                      </svg>

                      გასუფთავება
                </button>

            </aside>

            <div class="category__right">
                <div class="category__top-panel">
                    <p class="items-found">
                        მოიძებნა <span>2,532</span> პროდუქტი
                    </p>

                    <select name="" id="" class="select-by">
                        <option value="">პოპულარული</option>
                        <option value="">ახალი დამატებული</option>
                        <option value="">ფასი ზრდადობით</option>
                        <option value="">ფასი კლებადობით</option>
                    </select>
                   
                </div>

                <div class="product__grid category">

                   @foreach ($products as $product)
                    <div class="product-card">

                        <div class="card__status">ახალი </div>
                        <div class="card__rating">
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                            <i class="fa fa-star fa-lg"></i>
                        </div>

                        <div class="card__img">
                            <img src="{{asset('../storage/product/'.$product->id.'/'.$product->files[0]->name)}}" alt="">
                        </div>

                        <div class="card__info">
                            <div class="card__price">
                                <span class="normal-p">{{number_format($product->price/100, 2)}}</span>
                            
                            </div>
                            <p class="card__title">{{$product->language('language_id', $localization)->first()->title ?? ''}}
                            </p>
                            <p class="card__description">{{$product->language('language_id', $localization)->first()->description ?? ''}}</p>
                        </div>

                        <div class="card__overlay">
                            <a href="{{route('ProductShow', [app()->getLocale(), 1])}}">
                                დეტალურად
                                <span></span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                    <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                                    </svg>
        
                            
                            </a>
                            <button onclick="addToCart(this, '{{$product->id}}')">
                                კალათაში
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

        </div>
    </section>



</main>
@endsection