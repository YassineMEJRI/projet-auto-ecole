@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Ajouter un vehicule</h1>
        <form method="POST" action="/vehicules" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="matricule" class="col-sm-2 col-form-label">Matricule</label>
                <div class="col-sm-10">
                    <input type="text" name="matricule" class="form-control" id="matricule">
                </div>
            </div>
            <div class="row mb-3">
                <label for="type" class="col-sm-2 col-form-label">Fabricant</label>
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
            <div class="row mb-3">
                <label for="visite" class="col-sm-2 col-form-label">Prochaine date de visite</label>
                <div class="col-sm-10">
                    <input type="date" name="visite" class="form-control" id="visite">
                </div>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Telecharger une image du véhicule</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <label for="moniteur">Moniteur</label>
            <select class="form-select" id="moniteur" name="moniteur" aria-label="Default select example">
                <option selected disabled>Open this select menu</option>
                @foreach($moniteurs as $moniteur)
                    <option value="{{ $moniteur->id }}">{{ $moniteur->firstName }} {{ $moniteur->lastName }}</option>
                @endforeach
            </select>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Etat</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="etat" id="horsservice" value="horsservice"
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
        </form>
    </div>
@endsection
