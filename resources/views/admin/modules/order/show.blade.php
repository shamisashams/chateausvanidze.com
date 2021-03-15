@extends('admin.layouts.app')
@section('content')
    <div class="content-i">
        <div class="content-box">
            <div class="element-wrapper">


                <div class="row">
                    <div class="col-4">
                        <h3>{{__('admin.order_details')}}</h3>
                        <br>
                        <table class="table table-striped table-bordered">
                            <tbody>
                            <tr>
                                <th>{{__('admin.full_name')}}</th>
                                <td>
                                    {{$order->full_name}}
                                </td>
                            </tr>

                            <tr>
                                <th>{{__('admin.email')}}</th>
                                <td>{{$order->email}}</td>
                            </tr>

                            <tr>
                                <th>{{__('admin.phone')}}</th>
                                <td>{{$order->phone}}</td>
                            </tr>
                            @if($order->address)
                                <tr>
                                    <th>{{__('admin.address')}}</th>
                                    <td>{{$order->address}}</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <br>
                        <h3>{{__('admin.products')}}</h3>
                        <br>
                        <table class="table table-bordered  table-v2 table-striped">
                            <thead>
                            <tr>
                                <th>@lang('products.image')</th>
                                <th>@lang('products.title')</th>
                                <th>@lang('products.total_price')</th>
                                <th>@lang('orders.quantity')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($order)
                                @foreach($order->products as $singleOrder)
                                    <tr>
                                        <td class="text-center">
                                            @if(isset($singleOrder->product->files[0]))
                                                <img style="width:100px"
                                                     src="/storage/product/{{$singleOrder->product->id}}/{{$singleOrder->product->files[0]->name}}">
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{count($singleOrder->product->availableLanguage)>0?$singleOrder->product->availableLanguage[0]->title:""}}
                                        </td>
                                        <td class="text-center">
                                            {{number_format($singleOrder->price/100,2)}}
                                        </td>
                                        <td class="text-center">
                                            {{$singleOrder->quantity}}
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
