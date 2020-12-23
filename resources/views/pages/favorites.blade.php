@extends('layouts.base')
@section('content')
<main>

    <!-- section 1 -  favourites -->
    <section id="cart-section">
        <div class="container">

            <div class="cart-section__title">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14.758" height="13" viewBox="0 0 14.758 13">
                        <path id="Icon_feather-heart" data-name="Icon feather-heart" d="M15.02,5.558a3.62,3.62,0,0,0-5.121,0l-.7.7-.7-.7a3.621,3.621,0,1,0-5.121,5.121l.7.7L9.2,16.5l5.121-5.121.7-.7a3.62,3.62,0,0,0,0-5.121Z" transform="translate(-1.823 -3.997)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                    </svg>
                </span>
                ჩემი ფავორიტები
            </div>

            <div class="buy__products fav-grid">
                @foreach ($favorites as $item)
                <div class="card-long">
                    <div class="card-long__img">
                        <img class="img-cover" src="{{asset('../storage/product/'.$item->product_id.'/'.$item->product->files[0]->name)}}" alt="">
                    </div>

                    <div class="card-long__text">
                        <h2>
                            <a href="">{{$item->product->language()->where('language_id', $localization)->first()->title ?? ''}}</a>
                            <span>{{$item->product->language()->where('language_id', $localization)->first()->description ?? ''}}</span>
                        </h2>
                        <div class="card-long__pricing">
                            <span class="cur-p">{{number_format($item->product->price/100, 2)}} ₾</span>
                            {{-- <span class="old-p">449.00₾</span> --}}
                        </div>
                    </div>

                    <div class="card-long__qty">
                        

                        <a href="{{route('removeFromFavorites', [app()->getLocale(), $item->id])}}" class="card-long__delete-btn" style="text-align: center">წაშლა</a>
                    </div>

                </div>
                @endforeach

               
           
            
        </div>
    </section>

</main>
@endsection