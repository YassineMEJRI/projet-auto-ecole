@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center stylebox mt-2">
        <div class="col-md-12  ">
            <div class="card">
                <div class="card-header text-center "><h3 class="">{{ __('Register') }}</h3><br></div>

                <div class="card-body">
                    <form method="POST" action="/register">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="ml-0 mt-1 col-md-5 col-form-label text-md-right">First Name</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="radius mlinv-2 form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required  autofocus>

                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="ml-0 mt-1 col-md-5 col-form-label text-md-right">Last Name</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="radius mlinv-2 form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required  autofocus>

                                @error('lastName')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class=" ml-0 mt-1 col-md-5 col-form-label text-md-right">Numèro de tétléphone </label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="radius mlinv-2 form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" required  autofocus>

                                @error('tel')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="ml-0 mt-1 col-md-5 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class=" radius mlinv-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cin" class="ml-0 mt-1 col-md-5 col-form-label text-md-right">CIN</label>

                            <div class="col-md-6">
                                <input id="cin" type="text" class="radius mlinv-2 form-control @error('cin') is-invalid @enderror" name="cin" value="{{ old('cin') }}" required  autofocus>

                                @error('cin')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="ml-0 mt-1 col-md-5 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="radius mlinv-2 form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="ml-0 mt-1 col-md-5 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="radius mlinv-2 form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="text-center ml-5">
                            <div class="col-md-6 offset-md-4 mt-5 ">
                                <button type="submit" class="btn btn-dark btn-effect">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
