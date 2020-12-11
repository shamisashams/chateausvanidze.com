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

        <table class="table table-bordered table-lg table-v2 table-striped">
            <tbody>
                <th>
                    Feature
                </th>
                <th>
                    Position
                </th>
                <th>
                    Slug
                </th>
                <th>
                    TiTle
                </th>
                <th>
                    Status
                </th>
                <th>
                    Permission
                </th>
            </tbody>
            @if ($answers)
            @foreach ($answers as $item)
            <tr>
                
                <form action="{{route('AnswerUpdate', [$locale, $item->id])}}" method="POST" class="bg-white py-3 mt-2 px-4 grid w-full grid-cols-5">
                    @csrf
                    @method('PUT')„
                <td>
                    <select name="feature" class="w-full border p-1 font-normal text-xs" >
                        @foreach ($features as $feature)
                            <option {{($item->feature->feature_id == $feature->id) ? 'selected' : ''}} value="{{$feature->language()->where('language_id', $localization)->first()->id}}">{{$feature->language()->where('language_id', $localization)->first()->title}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="text" name="position" value="{{$item->position}}" class="w-full border p-1 font-normal text-xs" placeholder="Position"> 
                </td>
                <td>
                    <input required type="text" name="slug" value="{{$item->slug}}" class="w-full border p-1 font-normal text-xs" placeholder="Slug"> 
                </td>
                <td>
                    <input required type="text" name="title" value="{{$item->language()->where('language_id', $localization)->first()->title}}" class="w-full border p-1 font-normal text-xs" placeholder="Title"> 
                </td>
                <td>
                    <select name="status" class="w-2/3 border p-1 font-normal text-xs" >
                        <option value="1" {{($item->status == 1) ? 'selected' : ''}}>on</option>
                        <option value="0" {{($item->status == 0) ? 'selected' : ''}}>off</option>
                    </select>
                </td>
                <td>
                    <div class="flex items-center">
                        <button type="submit" class="p-2 bg-gray-200 rounded-md">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                              </svg>
                        </button>
                    </form>
                    <form action="{{route('AnswerDestroy', [$locale, $item->id])}}"  method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="p-2 ml-2 bg-gray-200 rounded-md">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.037 3.225l1.684 10.104A2 2 0 0 0 5.694 15h4.612a2 2 0 0 0 1.973-1.671l1.684-10.104C13.627 4.224 11.085 5 8 5c-3.086 0-5.627-.776-5.963-1.775z"/>
                                <path fill-rule="evenodd" d="M12.9 3c-.18-.14-.497-.307-.974-.466C10.967 2.214 9.58 2 8 2s-2.968.215-3.926.534c-.477.16-.795.327-.975.466.18.14.498.307.975.466C5.032 3.786 6.42 4 8 4s2.967-.215 3.926-.534c.477-.16.795-.327.975-.466zM8 5c3.314 0 6-.895 6-2s-2.686-2-6-2-6 .895-6 2 2.686 2 6 2z"/>
                              </svg>
                        </button>
                    </form>
                    </div>
                </td>                
            </tr>
            
            @endforeach
            @endif
    
        </table>

    </div>
    <div class="col-span-1">
        
    </div>
</div>
@endsection