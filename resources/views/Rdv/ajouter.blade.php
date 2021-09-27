@extends('layouts.app')
@section('content')
    <div class="container border boxtool w-50">
        <h1 class=" text-center pb-3 lgnb">Ajouter un Rendez-vous</h1>
        <form method="POST" action="/rdv/ajouter">
            @csrf
            <div class="container w-50">
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="rdv_dh" class="fw-bold my-3 text-center">Date et heure du rendez-vous<span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <input type="datetime-local" name="date_heure" class="form-control" id="rdv_dh">
                    </div>
                </div>

                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="moniteur" class="fw-bold my-3 text-center">Moniteur<span class="text-danger">*</span></label>
                    <div class="col-sm-12">
                        <select class="form-select" id="moniteur" name="moniteur" aria-label="Default select example">
                            <option selected disabled>Open this select menu</option>
                            @foreach($moniteurs as $moniteur)
                                <option
                                    value="{{ $moniteur->id }}">{{ $moniteur->firstName }} {{ $moniteur->lastName }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <label class="my-2 fw-bold text-center ml-6">Type de seance<span class="text-danger">*</span></label>
                <div class="row mb-3 d-grid gap-2 d-md-flex justify-content-evenly">
                    <input type="radio" class="btn-check" name="seance" id="code" value="code" autocomplete="off"
                           checked>
                    <label class="btn btn-outline-secondary w-33 ms-lg-4 me-lg-4" for="code">Code</label>
                    <input type="radio" class="btn-check" name="seance" id="conduite" value="conduite" autocomplete="off"
                           checked>
                    <label class="btn btn-outline-info w-33 ms-lg-4 me-lg-4" for="conduite">Conduite</label>
                </div>
            </div>
            <div class="  mb-3 lgnt"><label class=" col-sm-12 col-form-label ml-1"><span class="fw-bold  text-danger">*</span> : signifie un champ obligatoire à saisir</label></div>
            <button type="submit" class="ml-8 btn btn-outline-primary text-center">Enregistrer</button>
    </div>
    </form>
    </div>
@endsection
