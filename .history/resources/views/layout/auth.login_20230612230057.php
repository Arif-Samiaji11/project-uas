php
@extends('adminlte::master')

@section('title', 'Login')

@section('body_class', 'login-page')

@section('body')
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}"><b>{{ config('app.name', 'Laravel') }}</b></a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg">{{ __('Login') }}</p>

            <form action="{{ route('login') }}" method="post">
                @csrf

                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control" placeholder="{{ __('Password') }}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Sign In') }}</button>
                </div>

                <div class="form-group">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
