@extends('admin.layouts.app')
@section('content')
<div class="content-box">
    <div class="row">
        <div class="col-lg-6">
            <div class="element-wrapper">
            <h6 class="element-header">
                @lang('admin.answer_create')
            </h6>
            <form action="{{route('AnswerStore', $locale)}}" method="POST" class="bg-white py-3 px-4 grid w-full grid-cols-3 gap-3">
                @csrf
                <div class="col-span-1">
                    <label for="feature">@lang('answer.feature')</label>
                    <select name="feature" id="feature" class="form-control" >
                        @foreach ($features as $feature)
                        <option value="{{$feature->id}}">{{(count($feature->availableLanguage) > 0) ? $feature->availableLanguage[0]->title : $feature->language[0]->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-span-1 w-full ">
                    <label for="position">@lang('answer.position')</label>
                    <input type="text" id="position" name="position" class="form-control" placeholder="@lang('answer.position')"> 
                </div>
                <div class="col-span-1 w-full">
                    <label for="slug">@lang('answer.slug')</label >
                    <input required id="slug" type="text" name="slug" class="form-control" placeholder="@lang('answer.slug')"> 
                </div>
                <div class="col-span-2 w-full">
                    <label for="title">@lang('answer.title')</label>
                    <input required type="text" id="title" name="title" class="form-control" placeholder="@lang('answer.title')"> <br>
                </div>
                <div class="col-span-1 w-full">
                    <label for="status">@lang('answer.status')</label>
                    <select name="status" id="status" class="form-control" >
                        <option value="1">@lang('answer.on')</option>
                        <option value="0">@lang('answer.off')</option>
                    </select> <br>
                </div>
                <div class="border-t m-0 py-3 col-span-3">
                    <button class="btn btn-primary" type="submit"> @lang('answer.create')</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection


         