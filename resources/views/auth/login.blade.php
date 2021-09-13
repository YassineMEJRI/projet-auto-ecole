@extends('layouts.app')

@section('content')
<div class="align-content-center ">
    <div class="row flex-row">
        <div class="col-md-8  stylebox ml-5 mt-5">
            <div class="card">
                <div class="card-header text-center " ><h3 class="">{{ __('Login') }}</h3></div><br>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row ">
                            <label for="email" class="pad-1 col-md-4 col-form-label p-lg-3">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email " class="radius form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="password" class=" pad-1 col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="radius form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ml-1">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check" >
                                    <input class="form-check-input round-test " type="radio" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-8 offset-md-4 ml-5 mt-2">
                                <button type="submit" class="btn btn-dark btn-effect">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <button class="btn btn-effect text-dark btn-dark" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
