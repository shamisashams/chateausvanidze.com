@extends('admin.layouts.app')
@section('content')
<div class="content-box">
    <div class="row">
        <div class="col-lg-6">
            <div class="element-wrapper">
                <h6 class="element-header">
                    @lang('admin.slider_create')
                </h6>
                    <div class="element-box">
                        {!! Form::open(['url' => route('slideCreate',app()->getLocale()),'method' =>'post','files' => true]) !!}
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
                        <div class="form-group">
                            <div class="input-images"></div>
                            @if ($errors->has('images'))
                                <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                            @endif
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
