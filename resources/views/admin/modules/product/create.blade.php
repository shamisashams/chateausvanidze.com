@extends('admin.layouts.app')
@section('content')
    {!! Form::open(['url' => route('featureCreate',app()->getLocale()),'method' =>'post']) !!}

    <div class="content-box">
        <div class="row">
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        @lang('admin.products_create')
                    </h6>
                    <div class="element-box">
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
                                    class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
                                    {{ Form::label('position', 'Position', []) }}
                                    {{ Form::text('position', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Position']) }}
                                    @if ($errors->has('position'))
                                        <span class="help-block">
                                            {{ $errors->first('position') }}
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
                                    class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                    {{ Form::label('price', 'Price', []) }}
                                    {{ Form::text('price', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Price']) }}
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            {{ $errors->first('price') }}
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
                                    {{ $errors->first('native') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('locale') ? ' has-error' : '' }}">
                                    {{ Form::label('release_date', 'Release Date', []) }}
                                    <div class="date-input">
                                        {{ Form::text('release_date', '', ['class' => 'form-control single-daterange', 'no','placeholder'=>'Release date']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('features') ? ' has-error' : '' }}">
                                    {{ Form::label('features', 'Features', []) }}
                                    <select name="features[]" class="form-control select2" multiple="true">

                                    </select>

                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('answers') ? ' has-error' : '' }}">
                                    {{ Form::label('answers', 'Answers', []) }}
                                    <select name="answers[]" class="form-control select2" multiple="true">

                                    </select>

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
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <h6 class="element-header" style="padding-top: 16px;">
                    </h6>
                    <div class="element-box">
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="form-group {{ $errors->has('features') ? ' has-error' : '' }}">
                                    {{ Form::label('features', 'Features', []) }}
                                    <select name="features[]" class="form-control select2" multiple="true">
                                        @if(count($features) > 0)
                                            @foreach($features as $feature)
                                                @if(count($feature->availableLanguage) > 0)
                                                    <option value="{{$feature->id}}">{{$feature->availableLanguage[0]->title}}</option>
                                                @else
                                                    <option value="{{$feature->id}}">{{(count($feature->language) > 0) ? $feature->language[0]->title : $feature->slug}}</option>
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div
                                    class="form-group {{ $errors->has('answers') ? ' has-error' : '' }}">
                                    {{ Form::label('answers', 'answers', []) }}
                                    <select name="answers[]" class="form-control select2" id="answers-select2"
                                            multiple="true">

                                    </select>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    <script type="text/javascript">
        function featureChange() {

        }
    </script>
@endsection
