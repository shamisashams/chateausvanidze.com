@extends('admin.layouts.app')
@section('content')
<div class="grid grid-cols-10">
    <div class="col-span-3">
        <form action="{{route('DictionaryStore', $locale)}}" method="POST" class="bg-white py-3 px-4 grid w-full grid-cols-2 gap-3">
            @csrf

            <div class="col-span-1 w-full ">
                <small>@lang('language.key')</small>
                <input type="text" required name="key" class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" placeholder="@lang('language.key')">
                @error('key')
                <p>{{$message}}</p>
                @enderror 
            </div>
            <div class="col-span-1 w-full">
                <small>@lang('language.module')</small>
                <input required type="text" name="module" class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" placeholder="@lang('language.module')"> 
                @error('module')
                <p>{{$message}}</p>
                @enderror 
            </div>
                @foreach ($langs as $lang)
                <div class="text-left col-span-2">
                    <small>{{$lang->title}}</small>
                    <input type="text" name="translates[]"  class="w-full py-2 px-3 bg-gray-100 rounded-md font-normal text-xs" placeholder="{{$lang->abbreviation}} "> <br>
                </div>
            @endforeach
            <button type="submit" class="p-2 col-span-3 flex items-center justify-center bg-gray-200 rounded-md">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi mr-2 bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                  </svg>
                  @lang('language.create')
            </button>
        </form>
    </div>
</div>
@endsection


         