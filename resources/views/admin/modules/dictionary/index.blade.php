@extends('admin.layouts.app')
@section('content')
<div class="grid grid-cols-7">
    <div class="col-span-1">
        
    </div>
    <div class="col-span-7 md:col-span-5">
        <form action="{{route('DictionaryStore', $locale)}}" method="POST" class="bg-white py-3 flex items-center justify-between justify-between px-4">
            @csrf
            <div>
                <h6 class="font-bold">
                    <input type="text" name="key" placeholder="Key" required class="focus:outline-none border  p-0.5" style="@error('key') border:1px solid red !important @enderror">
                </h6>
                <small class="font-normal"><input type="text" name="module" placeholder="module" required class="focus:outline-none border p-0.5 mt-0.5" style="@error('module') border:1px solid red !important @enderror"></small>
            </div>
            
            @foreach ($langs as $item)
            <div>
                <h6>
                    <input type="text" name="translates[]"  class="focus:outline-none border p-0.5" placeholder="Translation on {{$item->abbreviation}} ">
                </h6>
            <small class="font-normal">{{$item->abbreviation}}</small>
            </div>
            @endforeach
            <div>
                <button class="p-2 rounded-md bg-gray-200" type="submit">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                      </svg>
                </button>
            </div>
        </form>
            <form action="{{route('DictionaryIndex', $locale)}}" class="bg-white py-3 px-4 mt-2 flex items-center">
                <input type="text" value="{{\Request::get('key') }}" name="key" class="w-full focus:outline-none" placeholder="Search by Key..">
                <button type="submit">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                    </svg>
                </button>
                <select name="per_page" class="ml-2" onchange="this.form.submit()">
                    <option value="10" {{\Request::get('per_page') == 10 ? 'selected' : ''}}>10</option>
                    <option value="20" {{\Request::get('per_page') == 20 ? 'selected' : ''}}>20</option>
                    <option value="30" {{\Request::get('per_page') == 30 ? 'selected' : ''}}>30</option>
                    <option value="50" {{\Request::get('per_page') == 50 ? 'selected' : ''}}>50</option>
                    <option value="100" {{\Request::get('per_page') == 100 ? 'selected' : ''}}>100</option>
                </select>
            </form>
        @if ($dictionaries)
            @foreach ($dictionaries as $item) 
            <div class="bg-white py-3 mt-2 flex items-center justify-between justify-between px-4">
                          
                <form action="{{route('DictionaryUpdate', [app()->getLocale(),$item->id])}}" method="POST" class="flex w-full justify-between justify-between " >
                    @csrf
                    @method('PUT')
                    <div>
                        <h6 class="font-bold">
                            <input type="text" name="key" value="{{$item->key}}" placeholder="Key" required class="focus:outline-none border @error('key') border-red-500 @enderror p-0.5">
                        </h6>
                        <small class="font-normal"><input type="text" name="module" placeholder="module" required class="focus:outline-none border @error('module') border-red-500 @enderror p-0.5 mt-0.5" value="{{$item->module}}"></small>
                    </div>
                    @foreach ($langs as $lang)
                    <div>
                        <h6>
                            <input type="text" name="translates[]"  class="focus:outline-none border p-0.5" value="{{$item->language()->where('language_id', $lang->id)->first()->value}} ">
                        </h6>
                    <small class="font-normal">{{$lang->abbreviation}}</small>
                    </div>
                    @endforeach
                    
                    <div class="flex items-center">
                        <button type="submit" class="p-2 rounded-md bg-gray-200" type="submit">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                        </button>
                        
                        
                    </div>
                </form>
                <form action="{{route('DictionaryDestroy', [$locale, $item->id])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="p-2 ml-2 rounded-md bg-gray-200" type="submit">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.037 3.225l1.684 10.104A2 2 0 0 0 5.694 15h4.612a2 2 0 0 0 1.973-1.671l1.684-10.104C13.627 4.224 11.085 5 8 5c-3.086 0-5.627-.776-5.963-1.775z"/>
                            <path fill-rule="evenodd" d="M12.9 3c-.18-.14-.497-.307-.974-.466C10.967 2.214 9.58 2 8 2s-2.968.215-3.926.534c-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466zM8 5c3.314 0 6-.895 6-2s-2.686-2-6-2-6 .895-6 2 2.686 2 6 2z"/>
                        </svg>
                    </button>
                </form>
            
            </div> 
            @endforeach   

            <div class="w-full mt-1">
                {{$dictionaries->links()}}
            </div>
        @endif
    </div>
    <div class="col-span-1">
        
    </div>
</div>
@endsection