@extends('admin.layouts.app')
@section('content')
<div class="grid grid-cols-7">
    <div class="col-span-1">
        
    </div>
    <div class="col-span-7 md:col-span-5">
        <div class="flex items-center mb-2 justify-between">
            <a href="{{route('AnswerCreate', $locale)}}" class=" bg-green-400 text-white p-2 rounded-md">
                answer.create
            </a>

        </div>
        

        <table class="table table-bordered table-lg table-v2 table-striped">
            <tr>
                <form action="{{route('AnswerIndex', $locale)}}">
                    <th>
                        <select name="feature" class="w-full border p-1 font-normal text-xs" >
                            <option value="" selected></option>
                            @foreach ($features as $feature)
                            <option value="{{$feature->id}}" {{(\Request::get('feature') == $feature->id) ? 'selected' : ''}}>{{($feature->language()->where('language_id', $localization)->first()->title) ?? $feature->language()->first()->title}}</option>
                            @endforeach
                        </select>
                    </th>
                    <th>
                        <input type="text" value="{{\Request::get('position')}}"  name="position" class="w-full border p-1 font-normal text-xs" placeholder="Position">
                    </th>
                    <th>
                        <input  type="text" value="{{\Request::get('slug')}}"  name="slug" class="w-full border p-1 font-normal text-xs" placeholder="Slug">
                    </th>
                    <th>
                        <input  type="text" value="{{\Request::get('title')}}"  name="title" class="w-full border p-1 font-normal text-xs" placeholder="Title">
                    </th>
                    <th>
                        <select name="status" class="w-2/3 border p-1 font-normal text-xs" >
                            <option value="" selected></option>
                            <option value="1">on</option>
                            <option value="0">off</option>
                        </select> 
                    </th>
                    <th>
                        <div class="flex items-center">
                            <select name="per_page" class="ml-2" onchange="this.form.submit()">
                                <option value="10" {{\Request::get('per_page') == 10 ? 'selected' : ''}}>10</option>
                                <option value="20" {{\Request::get('per_page') == 20 ? 'selected' : ''}}>20</option>
                                <option value="30" {{\Request::get('per_page') == 30 ? 'selected' : ''}}>30</option>
                                <option value="50" {{\Request::get('per_page') == 50 ? 'selected' : ''}}>50</option>
                                <option value="100" {{\Request::get('per_page') == 100 ? 'selected' : ''}}>100</option>
                            </select>
                            <button type="submit" class="p-2 ml-2 bg-white rounded-md">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                  </svg>
                            </button>
                        </div>
                    </th>
                </form>
            </tr>
            <tbody>
                <th>
                    @lang('answer.feature')
                </th>
                <th>
                    @lang('answer.position')
                </th>
                <th>
                    @lang('answer.slug')
                </th>
                <th>
                    @lang('answer.title')
                </th>
                <th>
                    @lang('answer.status')
                </th>
                <th>
                    @lang('answer.permission')
                </th>
            </tbody>
            @if ($answers)
            @foreach ($answers as $item)
            <tr>
                
                
                <td>
                    {{($feature->language()->where('language_id', $localization)->first()->title) ?? $feature->language()->first()->title}}
                </td>
                <td>
                    {{$item->position}}
                </td>
                <td>
                    {{$item->slug}}
                </td>
                <td>
                    {{($item->language()->where('language_id', $localization)->first()->title) ?? $item->language()->first()->title}}
                </td>
                <td>
                    @if($item->status == 1)
                    @lang('answer.on')
                    @else
                    @lang('answer.off')
                    @endif
                </td>
                <td>
                    <div class="flex items-center">
                        <a href="{{route('AnswerEdit', [$locale, $item->id])}}" type="submit" class="p-2 bg-gray-200 rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                              </svg>
                            </a>
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