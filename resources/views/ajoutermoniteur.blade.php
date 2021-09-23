@extends('layouts.app')

@section('content')
    <div class="container boxtool w-75">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="">
                    <div class="fw-bold card-header  text-center"><h2 class="fw-bold">Ajouter un moniteur</h2></div>
                    <div class="card-body">
                        <form method="POST" action="/moniteur/ajouter">
                            @csrf
                            <div class="form-group row my-2">
                                <label for="fname" class="fw-bold col-md-4 mt-2 col-form-label text-md-right">First Name<span class="text-danger">*</span></label>

                                <div class="col-md-6 mt-2">
                                    <input id="fname" type="text" class="form-control" name="firstName" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="lname" class="fw-bold col-md-4 mt-2 col-form-label text-md-right">Last Name<span class="text-danger">*</span></label>

                                <div class="col-md-6 mt-2">
                                    <input id="lname" type="text" class="form-control" name="lastName" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="tel" class="fw-bold col-md-4 mt-2 col-form-label text-md-right">Numèro de téléphone<span class="text-danger">*</span> </label>

                                <div class="col-md-6 mt-2">
                                    <input id="tel" type="tel" class="form-control" name="tel" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="email" class="fw-bold col-md-4 mt-2 col-form-label text-md-right">{{ __('E-Mail Address') }}<span class="text-danger">*</span></label>

                                <div class="col-md-6 mt-2">
                                    <input id="email" type="email" class="form-control" name="email" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="cin" class="fw-bold col-md-4 mt-2 col-form-label text-md-right">CIN<span class="text-danger">*</span></label>

                                <div class="col-md-6 mt-2">
                                    <input id="cin" type="text" class="form-control" name="cin" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="password" class="fw-bold col-md-4 mt-2 col-form-label text-md-right">Password<span class="text-danger">*</span></label>

                                <div class="col-md-6 mt-2">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row my-2">
                                <label for="password-confirm" class="fw-bold col-md-4 mt-2 col-form-label text-md-right">Confirm Password<span class="text-danger">*</span></label>

                                <div class="col-md-6 mt-2">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div><label class="mt-4 col-sm-12 col-form-label lgnt"><span class="fw-bold  text-danger">*</span> : signifie un champ obligatoire à saisir</label></div>
                            <div class="form-group row my-2">
                                <div class="col-md-6 offset-md-4 mt-2 ">
                                    <button type="submit" class="btn btn-outline-primary ml-2">
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
