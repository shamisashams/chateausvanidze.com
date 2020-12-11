@extends('admin.layouts.app')
@section('content')
<div class="grid grid-cols-7">
    <div class="col-span-1">
        
    </div>
    <div class="col-span-7 md:col-span-5">

        <form action="{{route('AnswerStore', $locale)}}" method="POST" class="bg-white py-3 px-4 grid w-full grid-cols-5">
            @csrf
            <div class="col-span-1 px-2">
                <select name="feature" class="w-full border p-1 font-normal text-xs" >
                    @foreach ($features as $feature)
                        <option value="{{$feature->language()->where('language_id', $localization)->first()->id}}">{{$feature->language()->where('language_id', $localization)->first()->title}}</option>
                    @endforeach
                </select> <br>
                <small>Feature</small>
            </div>
            <div class="col-span-2 flex items-center">
                <div class="col-span-1 w-full px-2">
                    <input type="text" name="position" class="w-full border p-1 font-normal text-xs" placeholder="Position"> <br>
                    <small>Position</small>
                </div>
                <div class="col-span-1 w-full px-2">
                    <input required type="text" name="slug" class="w-full border p-1 font-normal text-xs" placeholder="Slug"> <br>
                    <small>Slug</small>
                </div>
            </div>
            <div class="col-span-1 px-2">
                <input required type="text" name="title" class="w-full border p-1 font-normal text-xs" placeholder="Title"> <br>
                <small>Title</small>
            </div>
            <div class="col-span-1 flex items-center justify-between">
                <div class="w-full">
                    <select name="status" class="w-2/3 border p-1 font-normal text-xs" >
                        <option value="1">on</option>
                        <option value="0">off</option>
                    </select> <br>
                    <small>Status</small>
                </div>
                <button type="submit" class="p-2 bg-gray-200 rounded-md">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                      </svg>
                </button>
            </div>
        </form>
        @if ($answers)
            @foreach ($answers as $item)
                <form action="{{route('AnswerStore', $locale)}}" method="POST" class="bg-white py-3 mt-2 px-4 grid w-full grid-cols-5">
                    @csrf
                    <div class="col-span-1 px-2">
                        <select name="feature" class="w-full border p-1 font-normal text-xs" >
                            @foreach ($features as $feature)
                                <option {{($item->feature->feature_id == $feature->id) ? 'selected' : ''}} value="{{$feature->language()->where('language_id', $localization)->first()->id}}">{{$feature->language()->where('language_id', $localization)->first()->title}}</option>
                            @endforeach
                        </select> <br>
                        <small>Feature</small>
                    </div>
                    <div class="col-span-2 flex items-center">
                        <div class="col-span-1 w-full px-2">
                            <input type="text" name="position" value="{{$item->position}}" class="w-full border p-1 font-normal text-xs" placeholder="Position"> <br>
                            <small>Position</small>
                        </div>
                        <div class="col-span-1 w-full px-2">
                            <input required type="text" name="slug" value="{{$item->slug}}" class="w-full border p-1 font-normal text-xs" placeholder="Slug"> <br>
                            <small>Slug</small>
                        </div>
                    </div>
                    <div class="col-span-1 px-2">
                        <input required type="text" name="title" value="{{$item->language()->where('language_id', $localization)->first()->title}}" class="w-full border p-1 font-normal text-xs" placeholder="Title"> <br>
                        <small>Title</small>
                    </div>
                    <div class="col-span-1 flex items-center justify-between">
                        <div class="w-full">
                            <select name="status" class="w-2/3 border p-1 font-normal text-xs" >
                                <option value="1" {{($item->status == 1) ? 'selected' : ''}}>on</option>
                                <option value="0" {{($item->status == 0) ? 'selected' : ''}}>off</option>
                            </select> <br>
                            <small>Status</small>
                        </div>
                        <button type="submit" class="p-2 bg-gray-200 rounded-md">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                            </svg>
                        </button>
                    </div>
                </form>
            @endforeach
        @endif


    </div>
    <div class="col-span-1">
        
    </div>
</div>
@endsection