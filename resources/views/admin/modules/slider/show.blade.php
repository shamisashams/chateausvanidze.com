@extends('admin.layouts.app')
@section('content')

@dd('here we go')
    <div class="content-i">
        <div class="content-box"><div class="element-wrapper">
                <h6 class="element-header">
                    {{ (count($data->availableLanguage) > 0) ? $data->availableLanguage[0]->title : ''}}
                </h6>

                <div class="row">
                    <div class="col-2">
                        <table class="table table-striped table-bordered">
                            <tbody>
                            <tr>
                                <th>Title</th>
                                <td>
                                    {{ (count($data->availableLanguage) > 0) ? $data->availableLanguage[0]->title : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>
                                    {{ (count($data->availableLanguage) > 0) ? $data->availableLanguage[0]->description : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>Content</th>
                                <td>
                                    {{ (count($data->availableLanguage) > 0) ? $data->availableLanguage[0]->content : ''}}
                                </td>
                            </tr>
                            <tr>
                                <th>Position</th>
                                <td>{{$data->position}}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="image-container">
                            @if(count($data->files) >0 )
                                @foreach($data->files as $file)
                                    <div class="view-image" style="background-image: url('{{url('storage/slider/'.$file->fileable_id.'/'.$file->name)}}')"></div>
                                @endforeach
                            @endif
                        </div>
                </div>

        </div>
    </div>

@endsection
