@extends('admin.layouts.auth.app')
@section('content')
    <div class="all-wrapper menu-side with-pattern">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href=""><img alt="" src="img/logo-big.png"></a>
            </div>
            <h4 class="auth-header">
                Login Form
            </h4>
            {!! Form::open(['url' => route('login'),'method' =>'post']) !!}
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            {{ Form::label('email', 'Username', []) }}
            {{ Form::email('email', '', ['class' => 'form-control', 'no','placeholder'=>'Enter your username']) }}
            @if ($errors->has('email'))
                <span class="help-block">
                    {{ $errors->first('email') }}
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            {{ Form::label('password', 'Password', []) }}
            {{ Form::password('password',  ['class' => 'form-control', 'no','placeholder'=>'Enter your password']) }}
            @if ($errors->has('password'))
                <span class="help-block">
                    {{ $errors->first('password') }}
                </span>
            @endif
        </div>
        <div class="buttons-w">
            <button class="btn btn-primary">Log me in</button>
{{--            <div class="form-check-inline">--}}
{{--                <label class="form-check-label"><input class="form-check-input" name="remember_me" type="checkbox">Remember--}}
{{--                    Me</label>--}}
{{--            </div>--}}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
@endsection


