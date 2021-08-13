@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Ajouter un vehicule</h1>
        <form method="POST" action="/vehicules" enctype="multipart/form-data" >
            @csrf
            <div class="row mb-3">
                <label for="matricule" class="col-sm-2 col-form-label">Matricule</label>
                <div class="col-sm-10">
                    <input type="text" name="matricule" class="form-control" id="matricule">
                </div>
            </div>
            <div class="row mb-3">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <input type="text" name="type" class="form-control" id="type">
                </div>
            </div>
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
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Etat</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="etat" id="horsservice" value="horsservice" checked>
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
