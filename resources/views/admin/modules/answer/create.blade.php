@extends('admin.layouts.app')
@section('content')
<div class="grid grid-cols-10">
    <div class="col-span-3">
        <form action="{{route('AnswerStore', $locale)}}" method="POST" class="bg-white py-3 px-4 grid w-full grid-cols-3 gap-3">
            @csrf
            <div class="col-span-1">
                <small>@lang('answer.feature')</small>
                <select name="feature" class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" >
                    @foreach ($features as $feature)
                    <option value="{{$feature->id}}">{{($feature->language()->where('language_id', $localization)->first()->title) ?? $feature->language()->first()->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-span-1 w-full ">
                <small>@lang('answer.position')</small>
                <input type="text" name="position" class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" placeholder="@lang('answer.position')"> 
            </div>
            <div class="col-span-1 w-full">
                <small>@lang('answer.slug')</small>
                <input required type="text" name="slug" class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" placeholder="@lang('answer.slug')"> 
            </div>
            <div class="col-span-2 w-full">
                <small>@lang('answer.title')</small>
                <input required type="text" name="title" class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" placeholder="@lang('answer.title')"> <br>
            </div>
            <div class="col-span-1 w-full">
                <small>@lang('answer.status')</small>
                <select name="status" class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" >
                    <option value="1">@lang('answer.on')</option>
                    <option value="0">@lang('answer.off')</option>
                </select> <br>
            </div>
            <button type="submit" class="p-2 col-span-3 flex items-center justify-center bg-gray-200 rounded-md">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi mr-2 bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                  </svg>
                  @lang('answer.create')
            </button>
        </form>
    </div>
</div>
@endsection


         