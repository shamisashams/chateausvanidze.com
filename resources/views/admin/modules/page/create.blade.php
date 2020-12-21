@extends('admin.layouts.app')
@section('content')
<div class="content-box">
    <div class="row">
        <div class="col-lg-6">
            <div class="element-wrapper">
                <h6 class="element-header">
                    @lang('admin.page_create')
                </h6>
                    <div class="element-box">
                        {!! Form::open(['url' => route('pageCreate',app()->getLocale()),'method' =>'post']) !!}
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    {{ Form::label('title', 'Title', []) }}
                                    {{ Form::text('title', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Title']) }}
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('meta_title') ? ' has-error' : '' }}">
                                    {{ Form::label('meta_title', 'Meta Title', []) }}
                                    {{ Form::text('meta_title', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Meta Title']) }}
                                    @if ($errors->has('meta_title'))
                                        <span class="help-block">
                                            {{ $errors->first('meta_title') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                    {{ Form::label('slug', 'Slug', []) }}
                                    {{ Form::text('slug', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Slug']) }}
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                    {{ $errors->first('slug') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    {{ Form::label('description', 'Description', []) }}
                                    {{ Form::text('description', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Description']) }}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                    {{ $errors->first('description') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                    <div
                                            class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                        {{ Form::label('content', 'Content', []) }}
                                        {{ Form::textarea('content', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content']) }}
                                        @if ($errors->has('content'))
                                            <span class="help-block">
                                    {{ $errors->first('content') }}
                                </span>
                                        @endif
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div
                                        class="form-group {{ $errors->has('content_2') ? ' has-error' : '' }}">
                                    {{ Form::label('content_2', 'Content 2', []) }}
                                    {{ Form::textarea('content_2', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content 2']) }}
                                    @if ($errors->has('content_2'))
                                        <span class="help-block">
                                    {{ $errors->first('content_2') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div
                                        class="form-group {{ $errors->has('content_3') ? ' has-error' : '' }}">
                                    {{ Form::label('content_3', 'Content 3', []) }}
                                    {{ Form::textarea('content_3', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content 3']) }}
                                    @if ($errors->has('content_3'))
                                        <span class="help-block">
                                    {{ $errors->first('content_3') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div
                                        class="form-group {{ $errors->has('content_4') ? ' has-error' : '' }}">
                                    {{ Form::label('content_4', 'Content 4', []) }}
                                    {{ Form::textarea('content_4', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content 4']) }}
                                    @if ($errors->has('content_4'))
                                        <span class="help-block">
                                    {{ $errors->first('content_4') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" name="status"
                                                                   type="checkbox">Status</label>
                        </div>
                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> Create</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
