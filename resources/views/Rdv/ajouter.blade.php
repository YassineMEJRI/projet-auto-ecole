@extends('layouts.app')
@section('content')
    <h1>Ajouter un Rendez-vous</h1>
    <div class="border border-3 border-primary">
        <form method="POST" action="/rdv/ajouter">
            @csrf
            <div class="container w-50 my-5">
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="rdv_dh" class="my-3">Date et heure du rendez-vous</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" name="date_heure" class="form-control" id="rdv_dh">
                    </div>
                </div>

                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="moniteur" class="my-3">Moniteur</label>
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
                <fieldset>
                    <label class="my-3">Type de seance</label>
                    <div class="row mb-3 d-grid gap-2 d-md-flex justify-content-evenly">
                        <input type="radio" class="btn-check" name="seance" id="code" value="code" autocomplete="off"
                               checked>
                        <label class="btn btn-outline-secondary w-25 ms-lg-4 me-lg-4" for="code">Code</label>
                        <input type="radio" class="btn-check" name="seance" id="conduite" value="conduite" autocomplete="off"
                               checked>
                        <label class="btn btn-outline-info w-25 ms-lg-4 me-lg-4" for="conduite">Conduite</label>
                    </div>
                </fieldset>
                <br>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
    </div>
@endsection
