@extends('admin.layouts.app')
@section('content')
    {!! Form::open(['url' => route('newsIndex',app()->getLocale()),'method' =>'get']) !!}
    <div class="controls-above-table">
        <div class="row">
            <div class="col-sm-2">
                <a class="btn btn-lg btn-success" href="{{route('newsCreateView',app()->getLocale())}}">@lang('admin.create_News')</a>
            </div>
            <div class="col-sm-10 per-page-column">
                <div class="per-page-container">
                    {{ Form::select('per_page',[10 => 10,20 => 20,30 => 30,50 => 50,100=>100],(Request::get('per_page') != null ? Request::get('per_page') : 10),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-lg table-v2 table-striped">
            <thead>
            <tr>
                <th>{{__('admin.id')}}</th>
                <th>{{__('admin.title')}}</th>
                <th>{{__('admin.description')}}</th>
                <th>{{__('admin.slug')}}</th>
                <th>{{__('admin.status')}}</th>
                <th>{{__('admin.actions')}}</th>
            </tr>
            <tr>
                <th>
                    {{ Form::text('id',Request::get('id'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('id'))
                        <span class="help-block">
                        {{ $errors->first('id') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::text('title',Request::get('title'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('title'))
                        <span class="help-block">
                        {{ $errors->first('title') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::text('description',Request::get('description'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('description'))
                        <span class="help-block">
                        {{ $errors->first('description') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::text('slug',Request::get('slug'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('slug'))
                        <span class="help-block">
                        {{ $errors->first('slug') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::select('status',['' => 'All','1' => 'Active','0' => 'Not Active'],Request::get('status'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('status'))
                        <span class="help-block">
                        {{ $errors->first('status') }}
                        </span>
                    @endif
                </th>
                <th></th>
            </tr>
            </thead>
            {!! Form::close() !!}
            <tbody>
            @if($data)
                @foreach($data as $item)
                    <tr>
                        <td class="text-left">{{$item->id}}</td>
                        <td class="text-center">{{(count($item->availableLanguage) > 0) ?  $item->availableLanguage[0]->title : ''}}</td>
                        <td class="text-center">{{(count($item->availableLanguage) > 0) ?  $item->availableLanguage[0]->description : ''}}</td>
                        <td class="text-center">{{$item->slug}}</td>
                        <td class="text-center">
                            @if($item->status)
                                <span class="text-green">Active</span>
                            @else
                                <span class="text-red">Not Active</span>
                            @endif
                        </td>
                        <td class="row-actions d-flex">
                            {{-- <a href="{{route('sliderShow',[app()->getLocale(),$item->id])}}">
                                <i class="os-icon os-icon-documents-07"></i>
                            </a> --}}
                            <a href="{{route('newsEditView',[app()->getLocale(), $item->id])}}">
                                <i class="os-icon os-icon-ui-49">

                                </i>
                            </a>
                            {!! Form::open(['url' => route('newsDestroy',[app()->getLocale(),$item->id]),'method' =>'delete']) !!}
                                <button class="delete-icon" onclick="return confirm('Are you sure, you want to delete this item?!');" type="submit">
                                    <i
                                        class="os-icon os-icon-ui-15">
                                    </i>
                                </button>
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    {{ $data->links('admin.vendor.pagination.custom') }}

@endsection
