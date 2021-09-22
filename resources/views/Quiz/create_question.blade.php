@extends('layouts.app')
@section('content')
    <div class="container border ml-5 p-3 boxtool w-75">
        <h1 class=" text-center">Ajouter une Question de Quiz</h1>
        <form method="POST" action="/quiz/ajouter" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label for="enonce" class="fw-bold  col-sm-12 text-center col-form-label">Enoncé de la Question<span class="text-danger">*</span></label>
                <div class="col-sm-8 ml-3">
                    <input type="text" name="enonce" class="form-control" id="enonce">
                </div>
            </div>
            <div class="row mb-3">
                <label for="image" class=" fw-bold col-sm-12 text-center  form-label">Telecharger une image désriptive de l'énoncé<span class="text-danger">*</span></label>
                <div class="col-sm-10"> <input class="form-control ml-2" type="file" name="image" id="image"></div>
            </div>
            <p class="fw-bold  text-center mt-4">Donner les réponses<span class="text-danger">*</span></p>
            <div class="row mb-3 ">
                <label for="rep1" class="col-sm-2 col-form-label">Reponse 1<span class="text-danger">*</span></label>
                <div class="col-sm-4">
                    <input type="text" name="rep1" class="form-control mlinv-2" id="rep1">
                </div>
                <label for="rep2" class="col-sm-2 col-form-label">Reponse 2<span class="text-danger">*</span></label>
                <div class="col-sm-4">
                    <input type="text" name="rep2" class="form-control mlinv-2" id="rep2">
                </div>
            </div>
            <div class="row mb-3">
                <label for="rep3" class="col-sm-2 col-form-label">Reponse 3<span class="text-danger">*</span></label>
                <div class="col-sm-4">
                    <input type="text" name="rep3" class="form-control mlinv-2" id="rep3">
                </div>
                <label for="rep4" class="col-sm-2 col-form-label">Reponse 4</label>
                <div class="col-sm-4">
                    <input type="text" name="rep4" class="form-control mlinv-2" id="rep4">
                </div>
            </div>
            <fieldset class="row mb-3">
                <label class="fw-bold  col-sm-12 text-center col-form-label lgnb">Choisir la question correcte<span class="text-danger">*</span></label>
                <div class="row mb-4 mt-3">
                    <div class="form-check ml-2 col-sm-perso">
                        <input class="form-check-input" type="radio" name="correcte" id="rep1correcte" value="1" checked>
                        <label class="form-check-label repcor" for="rep1correcte">
                            Reponse 1
                        </label>
                    </div>
                    <div class="form-check col-sm-perso">
                        <input class="form-check-input" type="radio" name="correcte" id="rep2correcte" value="2">
                        <label class="form-check-label repcor" for="rep2correcte">
                            Reponse 2
                        </label>
                    </div>
                    <div class="form-check col-sm-perso">
                        <input class="form-check-input" type="radio" name="correcte" id="rep3correcte" value="3">
                        <label class="form-check-label repcor active"  for="rep3correcte">
                            Reponse 3
                        </label>
                    </div>
                    <div class="form-check col-sm-perso">
                        <input class="form-check-input" type="radio" name="correcte" id="rep4correcte" value="4">
                        <label class="form-check-label repcor active" for="rep4correcte">
                            Reponse 4
                        </label>
                    </div>
                </div>
            </fieldset>
            <div><label class=" col-sm-12 col-form-label lgnt"><span class="fw-bold  text-danger">*</span> : signifie un champ obligatoire à saisir</label></div>
            <button type="submit" class="btn btn-outline-primary align-items-center ml-8">Enregistrer</button>
        </form>
    </div>
@endsection
