@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ajouter un moniteur</div>

                    <div class="card-body">
                        <form method="POST" action="/ajouter/moniteur">
                            @csrf
                            <div class="form-group row my-2">
                                <label for="fname" class="col-md-4 col-form-label text-md-right">First Name</label>

                                <div class="col-md-6">
                                    <input id="fname" type="text" class="form-control" name="firstName" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="lname" class="col-md-4 col-form-label text-md-right">Last Name</label>

                                <div class="col-md-6">
                                    <input id="lname" type="text" class="form-control" name="lastName" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="tel" class="col-md-4 col-form-label text-md-right">Numèro de téléphone </label>

                                <div class="col-md-6">
                                    <input id="tel" type="tel" class="form-control" name="tel" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="cin" class="col-md-4 col-form-label text-md-right">CIN</label>

                                <div class="col-md-6">
                                    <input id="cin" type="text" class="form-control" name="cin" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enregistrer
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
