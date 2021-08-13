@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Ajouter une Question de Quiz</h1>
        <form method="POST" action="/quiz/ajouter" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="enonce" class="col-sm-2 col-form-label">Enoncé de la Question</label>
                <div class="col-sm-10">
                    <input type="text" name="enonce" class="form-control" id="enonce">
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class="form-label">Telecharger une image désriptive de l'énoncé</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <div class="row mb-3">
                <label for="rep1" class="col-sm-2 col-form-label">Reponse 1</label>
                <div class="col-sm-10">
                    <input type="text" name="rep1" class="form-control" id="rep1">
                </div>
            </div>
            <div class="row mb-3">
                <label for="rep2" class="col-sm-2 col-form-label">Reponse 2</label>
                <div class="col-sm-10">
                    <input type="text" name="rep2" class="form-control" id="rep2">
                </div>
            </div>
            <div class="row mb-3">
                <label for="rep3" class="col-sm-2 col-form-label">Reponse 3</label>
                <div class="col-sm-10">
                    <input type="text" name="rep3" class="form-control" id="rep3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="rep4" class="col-sm-2 col-form-label">Reponse 4</label>
                <div class="col-sm-10">
                    <input type="text" name="rep4" class="form-control" id="rep4">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Reponse correcte</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correcte" id="rep1correcte" value="1" checked>
                        <label class="form-check-label" for="rep1correcte">
                            Reponse 1 correcte
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correcte" id="rep2correcte" value="2">
                        <label class="form-check-label" for="rep2correcte">
                            Reponse 2 correcte
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correcte" id="rep3correcte" value="3">
                        <label class="form-check-label" for="rep3correcte">
                            Reponse 3 correcte
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="correcte" id="rep4correcte" value="4">
                        <label class="form-check-label" for="rep4correcte">
                            Reponse 4 correcte
                        </label>
                    </div>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
@endsection
