@extends('layouts.app')
<style>
    .navbar-brand{
        width: 10%;
    }

    body {
        background: url('https://i.pinimg.com/236x/58/87/d9/5887d92628279d70c160f20a2b960a92.jpg');
        background-size: contain;
    }
</style>
@section('content')

<div class="container h-50">
    <div class="row  mt-5 align-items-center justify-content-center ">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to resent email') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
