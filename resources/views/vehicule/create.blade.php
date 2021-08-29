@extends('layouts.app')
@section('content')
    <h1>Ajouter un vehicule</h1>
    <div class="container border border-3 border-primary">
        <form method="POST" action="/vehicules" enctype="multipart/form-data">
            @csrf
            <div class="container w-50 my-5">
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="matricule" class="my-3">Matricule</label>
                    {{--                <div class="col-sm-10">--}}
                    {{--                    <input type="text" name="matricule" class="form-control" id="matricule">--}}
                    {{--                </div>--}}
                    <div class="col-sm-10">
                        <div class="input-group">
                            <input type="text" name="matricule_1" id="matricule_1" aria-label="matricule_1"
                                   class="form-control" placeholder="123">
                            <span class="input-group-text">TU</span>
                            <input type="text" name="matricule_2" id="matricule_2" aria-label="matricule_2"
                                   class="form-control" placeholder="1234">
                        </div>
                    </div>
                </div>


                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="type" class="my-3">Fabricant</label>
                    <div class="col-sm-10">
                        <input type="text" name="fabricant" class="form-control" id="fabricant">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                    <div class="row mb-3">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="type" id="typeA" value="A">
                            <label class="form-check-label" for="typeA">A</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="type" id="typeB" value="B">
                            <label class="form-check-label" for="typeB">B</label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="type" id="typeD" value="D">
                            <label class="form-check-label" for="typeD">D</label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="visite" class="my-3">Prochaine date de visite</label>
                    <div class="col-sm-10">
                        <input type="date" name="visite" class="form-control" id="visite">
                    </div>
                </div>
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="image" class="my-3">Telecharger une image du véhicule</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" name="image" id="image">
                    </div>
                </div>
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="moniteur" class="my-3">Moniteur (Responsable)</label>
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
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Etat</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="etat" id="horsservice"
                                   value="horsservice"
                                   checked>
                            <label class="form-check-label" for="horsservice">
                                Hors Service
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="etat" id="enservice" value="enservice">
                            <label class="form-check-label" for="enservice">
                                En Service
                            </label>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
