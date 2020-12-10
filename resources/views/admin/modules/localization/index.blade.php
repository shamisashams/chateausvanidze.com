@extends('admin.layouts.app')
@section('content')
    {!! Form::open(['url' => route('localizationIndex',app()->getLocale()),'method' =>'get']) !!}
    <div class="controls-above-table">
        <div class="row">
            <div class="col-sm-2">
                <a class="btn btn-lg btn-success" href="{{route('localizationCreateView',app()->getLocale())}}">@lang('admin.create_localizations')</a>
            </div>
            <div class="col-sm-10 per-page-column">
                <div class="per-page-container">
                    {{ Form::select('per_page',[10 => 10,20 => 20,30 => 30,50 => 50,100=>100],(Request::get('per_page') != null ? Request::get('per_page') : 10),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-lg table-v2 table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Abbreviation</th>
                <th>native</th>
                <th>locale</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <tr>
                <th>
                    {{ Form::text('id',Request::get('id'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('id'))
                        <span class="help-block">
                        {{ $errors->first('id') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::text('title',Request::get('title'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('title'))
                        <span class="help-block">
                        {{ $errors->first('title') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::text('abbreviation',Request::get('abbreviation'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('abbreviation'))
                        <span class="help-block">
                        {{ $errors->first('abbreviation') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::text('native',Request::get('native'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('native'))
                        <span class="help-block">
                        {{ $errors->first('native') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::text('locale',Request::get('locale'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('locale'))
                        <span class="help-block">
                        {{ $errors->first('locale') }}
                        </span>
                    @endif
                </th>
                <th>
                    {{ Form::select('status',['' => 'All','1' => 'Active','0' => 'Not Active'],Request::get('status'),  ['class' => 'form-control', 'no','onChange' => 'this.form.submit()']) }}
                    @if ($errors->has('status'))
                        <span class="help-block">
                        {{ $errors->first('status') }}
                        </span>
                    @endif
                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if($localizations)
                @foreach($localizations as $localization)
                    <tr>
                        <td class="text-left">{{$localization->id}}</td>
                        <td class="text-center">{{$localization->title}}</td>
                        <td class="text-center">{{$localization->abbreviation}}</td>
                        <td class="text-center">{{$localization->native}}</td>
                        <td class="text-center">{{$localization->locale}}</td>
                        <td class="text-center">
                            @if($localization->status)
                                <span class="text-green">Active</span>
                            @else
                                <span class="text-red">Not Active</span>
                            @endif
                        </td>
                        <td class="row-actions d-flex">
                            <a href="{{route('localizationShow',[app()->getLocale(),$localization->id])}}">
                                <i class="os-icon os-icon-documents-07"></i>
                            </a>
                            <a href="{{route('localizationEditView',[app()->getLocale(), $localization->id])}}">
                                <i class="os-icon os-icon-ui-49">

                                </i>
                            </a>
                            {!! Form::open(['url' => route('localizationDestroy',[app()->getLocale(),$localization->id]),'method' =>'delete']) !!}
                                <button class="delete-icon" onclick="return confirm('Are you sure, you want to delete this item?!');" type="submit">
                                    <i
                                        class="os-icon os-icon-ui-15">
                                    </i>
                                </button>
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
    {{ $localizations->links('admin.vendor.pagination.custom') }}
    {!! Form::close() !!}

@endsection
