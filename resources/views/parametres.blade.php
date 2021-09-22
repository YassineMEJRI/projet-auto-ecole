@extends('layouts.app')
@section('content')

    <div class="container boxtool w-75">
        <div class="row">
            <div class="col-sm-3 mt-7 ml-3">
                <img class="mb-4 rounded-circle" src="https://avatars.dicebear.com/api/initials/{{Auth::user()->firstName}}_{{Auth::user()->lastName}}.svg">
                <ul class="nav nav-pills flex-column" id="parametres-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100 active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general"
                                type="button" role="tab" aria-controls="general" aria-selected="true">
                            Général
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link w-100" id="password-tab" data-bs-toggle="tab" data-bs-target="#password-reset"
                                type="button" role="tab" aria-controls="password-reset" aria-selected="false">
                            Reset Password
                        </button>
                    </li>
                </ul>
            </div>

            <div class="col ms-5">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                        <form method="POST" action="/parametres/updatedata">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="firstName" class="col-sm-3 col-form-label w-100">First Name</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="firstName" name="firstName" type="text" value="{{ Auth::user()->firstName }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="lastName" class="col-sm-3 col-form-label w-100">Last Name</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="lastName" name="lastName" type="text" value="{{ Auth::user()->lastName }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tel" class="col-sm-2 col-form-label w-100">Téléphone</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="tel" name="tel" type="tel" value="{{ Auth::user()->tel }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="cin" class="col-sm-2 col-form-label w-100">CIN</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="cin" name="cin" type="text" value="{{ Auth::user()->cin }}">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label w-100">E-mail</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="email" name="email" type="text" value="{{ Auth::user()->email }}">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="password" class="col-sm-2 col-form-label w-100">Mot de passe</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="password" name="password" type="password">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-primary">Enregistrer les modification</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="password-reset" role="tabpanel" aria-labelledby="password-tab">
                        <form method="POST" action="/parametres/updatepassword">
                            @csrf
                            <div class="row mb-3">
                                <label for="old-password" class="col-sm-2 col-form-label w-100">Ancien mot de passe</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="old-password" name="old_password" type="password">
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="new-password" class="col-sm-2 col-form-label w-100">Nouveau mot de passe</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="new-password" name="new_password" type="password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="confirm-password" class="col-sm-2 col-form-label w-100">Confirmer le nouveau mot de passe</label>
                                <div class="col-md-7">
                                    <input class="form-control" id="confirm-password" name="confirm_password" type="password">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
