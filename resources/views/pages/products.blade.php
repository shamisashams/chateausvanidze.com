@extends('layouts.base')
@section('content')
    <main>
    {!! Form::open(['url' => route('Products',app()->getLocale()),'method' =>'get']) !!}

    <!-- section 1 - catalog-->
        <section id="category">
            <div class="container">

                <aside class="category__aside">
                    <h2 class="aside-title">ფასი</h2>

                    <div class="range-block">
                        <div class="price-range-meta">
                            <div class="price-range-txt">
                                <input type="number" onchange="" name="minprice" value="{{Request::get('minprice') ?? (ceil($minprice/100) ?? 0)}}"  id="range-low-price">
                                <span>₾ -</span>
                                <input type="number" onchange="this.form.submit()" name="maxprice" value="{{  Request::get('maxprice') ?? (ceil($maxprice/100) ?? 0)}}" id="range-high-price">
                                <span>- ₾</span>
                            </div>
                        </div>

                        <div id="price-range"></div>
                    </div>


                    @foreach ($features as $item)

                        <div class="aside-divider"></div>

                        <h2 class="aside-title" style="margin-bottom: 10px">{{$item->language()->where('language_id', $localization)->first()->title ?? ''}}</h2>

                        <div class="aside-checkboxes">

                            @foreach ($item->answers as $answer)
                                <label class="checkbox">
                                    <input type="checkbox" name="answers[]" onchange="this.form.submit()" {{ Request::get('answers') ? (in_array($answer->answer_id, Request::get('answers')) ? 'checked' : '') : ''}} value="{{$answer->answer_id}}">
                                    <span></span>
                                    {{$answer->answer->language()->where('language_id', $localization)->first()->title ?? ''}}
                                </label>
                            @endforeach

                        </div>

                    @endforeach



                    <a href="{{route('Products', app()->getLocale())}}" class="clear-filter-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17.648" height="14.119" viewBox="0 0 17.648 14.119">
                            <path id="Icon_material-delete-sweep" data-name="Icon material-delete-sweep" d="M14.471,16.589H18v1.765h-3.53Zm0-7.059h6.177v1.765H14.471Zm0,3.53h5.295v1.765H14.471ZM3.882,18.354a1.77,1.77,0,0,0,1.765,1.765h5.295a1.77,1.77,0,0,0,1.765-1.765V9.53H3.882ZM13.589,6.882H10.942L10.059,6H6.53l-.882.882H3V8.647H13.589Z" transform="translate(-3 -6)"></path>
                        </svg>

                        გასუფთავება
                    </a>

                </aside>

                <div class="category__right">
                    <div class="category__top-panel" style="display: flex;     justify-content: space-between;">
                        <p class="items-found">
                            მოიძებნა <span>2,532</span> პროდუქტი
                        </p>
                        <form action="{{url()->full()}}" method="GET" style="float:right">
                            <select name="sort" onchange="this.form.submit()"  class="select-by">
                                <option value="">აირჩიეთ</option>
                                <option value="popular">პოპულარული</option>
                                <option value="new">ახალი დამატებული</option>
                                <option value="priceup">ფასი ზრდადობით</option>
                                <option value="pricedown">ფასი კლებადობით</option>
                            </select>
                        </form>

                    </div>

                    <div class="product__grid category">

                        @foreach ($products as $product)
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
                                    @if (count($product->files) > 0)
                                        <img src="{{asset('storage/product/'.$product->id.'/'.$product->files[0]->name)}}" alt="">
                                    @else
                                        <img src="{{asset('img/noimage.jpg')}}" alt="">
                                    @endif
                                </div>

                                <div class="card__info">
                                    <div class="card__price">
                                        <span class="normal-p"></span>
                                        <span class="normal-p">{{ ($product->sale == 1) ? number_format($product->sale_price/100, 2) : number_format($product->price/100, 2)}}₾</span>
                                        @if ($product->sale == 1)
                                            <span class="old-p">{{number_format($product->price/100, 2)}}</span>
                                        @endif

                                    </div>
                                    <p class="card__title">{{$product->language()->where('language_id', $localization)->first()->title ?? ''}}
                                    </p>
                                    <p class="card__description">{{$product->language()->where('language_id', $localization)->first()->description ?? ''}}</p>
                                </div>

                                <div class="card__overlay">
                                    <a href="{{route('ProductShow', [app()->getLocale(), $product->id])}}">
                                        დეტალურად
                                        <span></span>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.473" height="10.315" viewBox="0 0 15.473 10.315">
                                            <path id="Icon_awesome-eye" data-name="Icon awesome-eye" d="M15.379,9.265A8.616,8.616,0,0,0,7.736,4.5,8.617,8.617,0,0,0,.094,9.266a.869.869,0,0,0,0,.784,8.616,8.616,0,0,0,7.643,4.765,8.617,8.617,0,0,0,7.643-4.766A.869.869,0,0,0,15.379,9.265Zm-7.643,4.26A3.868,3.868,0,1,1,11.6,9.658,3.868,3.868,0,0,1,7.736,13.526Zm0-6.447a2.56,2.56,0,0,0-.68.1,1.285,1.285,0,0,1-1.8,1.8,2.573,2.573,0,1,0,2.477-1.9Z" transform="translate(0 -4.5)"></path>
                                        </svg>


                                    </a>
                                    <button type="button" onclick="addToCart(this, '{{$product->id}}')">
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

                    {{ $products->links('vendor.pagination.custom') }}

                </div>

            </div>
        </section>


        {!! Form::close() !!}

    </main>
@endsection
