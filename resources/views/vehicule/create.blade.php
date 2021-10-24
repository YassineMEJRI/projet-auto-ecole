@extends('layouts.app')
@section('content')
    <div class="container border border-3 border-secondary boxtool w-50 color_perso">
        <h1 class="text-dark text-center">Ajouter un vehicule</h1>
        <form method="POST" action="/vehicules" enctype="multipart/form-data">
            @csrf
            <div class="container w-75 my-4">
                <div class="row mb-2 d-md-flex justify-content-center">
                    <div class=""></div> <label for="matricule" class="fw-bold my-3 text-center  label-text">Matricule<span class="text-danger">*</span></label></div>
                    {{--                <div class="col-sm-10">--}}
                    {{--                    <input type="text" name="matricule" class="form-control" id="matricule">--}}
                    {{--                </div>--}}
                    <div class="col-sm-10 text-center">
                        <div class="input-group offset-1">
                            <input type="text" name="matricule_1" id="matricule_1" aria-label="matricule_1"
                                   class="form-control rounded-input" placeholder="123">
                            <span class="input-group-text">TU</span>
                            <input type="text" name="matricule_2" id="matricule_2" aria-label="matricule_2"
                                   class="form-control rounded-input" placeholder="1234">
                        </div>
                    </div>
                </div>
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="type" class="fw-bold my-3 text-center label-text ">Fabricant<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" name="fabricant" class="form-control text-center" id="fabricant">
                    </div>
                </div>
            <div class=" row mb-3 col-sm-8 d-md-flex justify-content-center">
                <label for="type" class="fw-bold my-3 text-center label-text ml-11">Type<span class="text-danger">*</span></label>
                        <select name="type" class="text-center form-select ml-11 rounded-input" aria-label="Default select example">
                            <option  name="type" id="typeB">Camion </option>
                            <option  name="type" id="typeA" selected>Voiture </option>
                            <option name="type" id="typeC">Moto </option>
                        </select>
            </div>
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="visite" class="fw-bold my-3 text-center label-text">Prochaine date de visite<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="date" name="visite" class="form-control" id="visite">
                    </div>
                </div>
                <div class="row mb-3 d-md-flex justify-content-center ">
                    <label for="image" class="fw-bold my-3 text-center label-text">Telecharger une image du véhicule<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input class="form-control " type="file" name="image" id="image">
                    </div>
                </div>
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="moniteur" class="fw-bold my-3 text-center label-text">Moniteur (Responsable)<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <select class="form-select" id="moniteur" name="moniteur" aria-label="Default select example">
                            <option selected disabled>Open this select menu</option>
                            @foreach($moniteurs as $moniteur)
                                <option
                                    value="{{ $moniteur->id }}">{{ $moniteur->firstName }} {{ $moniteur->lastName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            <br>
                <fieldset class="row mb-3 align-con justify-content-center">
                    <div class="text-center"><legend class="fw-bold col-form-label col-sm-2 pt-0 offset-5 label-text">Etat<span class="text-danger">*</span></legend></div>
                    <div class="col-sm-10">
                        <div class="form-check float-start offset-2">
                            <input class="form-check-input" type="radio" name="etat" id="horsservice"
                                   value="horsservice"
                                   checked>
                            <label class="form-check-label" for="horsservice">
                                Hors Service
                            </label>
                        </div>
                        <div class="form-check offset-7">
                            <input class="form-check-input" type="radio" name="etat" id="enservice" value="enservice">
                            <label class="form-check-label" for="enservice">
                                En Service
                            </label>
                        </div>
                    </div>
                </fieldset>
            <div><label class=" col-sm-12 col-form-label lgnt"><span class="fw-bold  text-danger">*</span> : signifie un champ obligatoire à saisir</label></div>
            <div class="text-center bottom-50 mt-4"><button type="submit" class="btn btn-outline-primary align-items-center text-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg> Enregistrer</button></div><br>
            </div>
        </form>

    </div>
@endsection
