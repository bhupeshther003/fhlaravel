@extends('layouts.app')
<style>
    body {
        background: url('https://img.freepik.com/free-photo/blur-pool-hotel-resort_74190-5770.jpg?size=626&ext=jpg&ga=GA1.1.1406591241.1684115342&semt=ais');
        background-size: contain;
    }
    
    .card{
        box-shadow:1ch 2ch 3ch black;
        border-radius: 30px;
        border:1px solid red;
    }
    .container>img{
       
    }

    

</style>
@section('content')
    <div class="container position-realtive" >
     <img src="{{ asset('./image/logoes2.jpeg')}}" style=" width:25%;mix-blend-mode:multiply;top:20%; " class="position-absolute start-0 ps-4" alt="">
      <p class=" col-5 fs-3 fw-bold position-absolute start-0 top-50 ps-5  ">  Delivering Exceptional Healthcare Services: Your Trusted Hospital for Comprehensive Care. </p>
        <div class="row justify-content-end">
            <div class="col-md-6 ">
                <div class="card" style="
                border-radius: 30px;">
                    <div class="card-header text-center">{{ __('Sign Up ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Enter Your Name" >

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            {{-- <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Enter Mobile Number') }}</label>

                                <div class="col-md-6">
                                    <input id="mobile_no" type="text"
                                        class="form-control @error('mobile_num') is-invalid @enderror" name="email"
                                        value="{{ old('mobile_num') }}"  placeholder="Enter Mobile Number" required autocomplete="mobile number"  minlength="10" maxlength="10" required>
                                      
                                    @error('mobile_num')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"  placeholder="Enter Email Address" >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Gender') }}</label>

                                <div class="col-md-6">
                                        <input type="radio" name="gender" id="male" value="male">
                                        <label for="male" class="p-1">Male</label>
                                        <input type="radio" name="gender" id="female" value="female"> 
                                        <label for="female" class="p-1">Female</label>
                                        <input type="radio" name="gender" id="other" value="other">
                                        <label for="other" class="p-1">Other</label>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password"  placeholder="Password" >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"  placeholder="Conform password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                    <p>Already have an account? <a href="{{url("login")}}" id="signin-link">Sign In</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
