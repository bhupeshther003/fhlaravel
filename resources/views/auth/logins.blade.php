@extends('layouts.app')

<style>
      body {
            background-image: url("https://images.pexels.com/photos/3985163/pexels-photo-3985163.jpeg?auto=compress&cs=tinysrgb&w=1600");
            background-size: cover;
            color: rgb(235, 235, 235);
        }
        .back {
            background-color: rgba(0, 0, 0, 0.2);
            color: rgb(235, 235, 235);
            border-radius: 15px;
        }
</style>
<script src="{{ 'js/javascript.js' }}"></script>
    <link rel="stylesheet" href="{{ 'css/main.css' }}">
@section('content')
    <form method="POST" action="{{ route('login') }}"  class="fade-slide border border-dark back m-auto" style="width:80%;">
        @csrf
        <div class="row  m-auto p-4 back">
            <div class="col d-md-block  d-none">
                <div class="animated-ie">
                    <img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg?auto=compress&cs=tinysrgb&w=1600"
                        class="img-fluid  " alt="">
                </div>
            </div>
            <div class="col ">
                <div class="card-header text-center fw-bold fs-3 ">{{ __('Sign in ') }}</div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="email" class=" text-md-end">{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class=" text-md-end">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2" id="signin-btn">Sign In</button>
                <span class="d-block mt-1">Don't have an account? <a href="{{ url('register') }}">Sign Up</a></span>
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}</a>
                @endif
            </div>
        </div>
    </form>
@endsection