@extends('admin.layouts.app')
@section('content')
    <input name="old-images[]" id="old_images" hidden disabled value="{{$data->files}}">
    {!! Form::open(['url' => route('newsUpdate',[app()->getLocale(),$data->id]),'method' =>'put','files'=>true]) !!}

    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                @lang('admin.news_update')
            </h6>
            <div class="element-box">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-4">
                                <div
                                        class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    {{ Form::label('title', 'Title', []) }}
                                    {{ Form::text('title', (count($data->availableLanguage) > 0) ? $data->availableLanguage[0]->title : '', ['class' => 'form-control', 'no','placeholder'=>'Enter Title']) }}
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-4">
                                <div
                                        class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
                                    {{ Form::label('position', 'Position', []) }}
                                    {{ Form::text('position', $data->position, ['class' => 'form-control', 'no','placeholder'=>'Enter Position']) }}
                                    @if ($errors->has('position'))
                                        <span class="help-block">
                                            {{ $errors->first('position') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-4">
                                <div
                                        class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                    {{ Form::label('slug', 'Slug', []) }}
                                    {{ Form::text('slug', $data->slug, ['class' => 'form-control', 'no','placeholder'=>'Enter Slug']) }}
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                    {{ $errors->first('slug') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    {{ Form::label('description', 'Description', []) }}
                                    {{ Form::textarea('description', (count($data->availableLanguage) > 0) ? $data->availableLanguage[0]->description : '', ['class' => 'form-control', 'no','placeholder'=>'Enter Description']) }}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                    {{ $errors->first('description') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-8">
                                <div
                                    class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                    {{ Form::label('content', 'Content', []) }}
                                    {{ Form::textarea('content', (count($data->availableLanguage) > 0) ? $data->availableLanguage[0]->content : '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content']) }}
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                            {{ $errors->first('content') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group">
                                <div class="input-images"></div>
                                @if ($errors->has('images'))
                                    <span class="help-block">
                                                {{ $errors->first('images') }}
                                            </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" name="status"
                                                                           {{$data->status ? 'checked' : ''}}
                                                                           type="checkbox">Status</label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-2">
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {!! Form::close() !!}
@endsection
