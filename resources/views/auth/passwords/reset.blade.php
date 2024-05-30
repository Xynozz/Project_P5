@extends('layouts.layout')
@section('content')
<style>
    .gradient-custom {
        background-image:
            url("https://cdn.kimkim.com/files/a/images/eac41e38fd98585442c93908627df067a6a9c67d/original-a97a725edbc8736c0ed85f54e6c69da3.jpg");
        /* The image used */
        background-color: #cccccc00;
        /* Used if the image is unavailable */
        height: 900px;
        /* You must set a specified height */
        background-position: center;
        /* Center the image */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */
    }

    .card {
        margin-right: auto;
        margin-left: auto;
        width: 500px;
        box-shadow: 0 15px 25px rgba(129, 124, 124, 0.2);
        height: 800px;
        border-radius: 5px;
        backdrop-filter: blur(14px);
        background-color: rgba(255, 255, 255, 0.2);
        padding: 10px;
        text-align: center;
    }
</style>
<section class=" gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-5 text-uppercase">{{ __('Reset Password') }}</h2>

                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                {{-- Email --}}
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <label for="email" class="col-md-4 col-form-label">
                                        {{ __('Email Address') }}</label>

                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                {{-- Password --}}
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <label for="password" class="col-md-4 col-form-label">{{
                                        __('Password')}}
                                    </label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                {{-- Confirm Password --}}
                                <div data-mdb-input-init class="form-outline form-white mb-4">
                                    <label for="password-confirm" class="col-form-label">
                                        {{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-outline-light btn-lg px-5" type="submit">
                                    {{ __('Register')}}
                                </button>
                        </div>
                        <div>
                            <p class="mb-0">Sudah Punya Akun?<a href="{{url('login')}}"
                                    class="text-white-50 fw-bold">Login</a>
                            </p>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
