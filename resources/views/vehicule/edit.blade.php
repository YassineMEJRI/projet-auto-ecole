@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Modifier un vehicule</h1>
        <form method="POST" action="/vehicules/{{ $vehicule->id }}">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <label for="matricule" class="col-sm-2 col-form-label">Matricule</label>
                <div class="col-sm-10">
                    <input type="text" name="matricule" class="form-control" id="matricule" value="{{ $vehicule->matricule }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                    <input type="text" name="type" class="form-control" id="type" value="{{ $vehicule->type }}">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Etat</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="etat" id="horsservice" value="horsservice" {{ $vehicule->horsService?"checked":"" }}>
                        <label class="form-check-label" for="horsservice">
                            Hors Service
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="etat" id="enservice" value="enservice" {{ $vehicule->horsService?"":"checked" }}>
                        <label class="form-check-label" for="enservice">
                            En Service
                        </label>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Mettre a jour</button>
        </form>
    </div>
@endsection
