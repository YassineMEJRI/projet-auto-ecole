@extends('layouts.app')
@section('content')
    <div class="stylebox">
    <div class=" mar"><h3 class="text-white text-center ">Ajouter un vehicule</h3></div>
    <div class="text-center">
        <form method="POST" action="/vehicules" enctype="multipart/form-data">
            @csrf
            <div class="container w-50 my-5">
                <div class="row mb-3 d-md-flex justify-content-center mt-3">
                    <div class="text-center"> <label for="matricule" class="my-3 text-center label-text">Matricule</label></div>
                    {{--                <div class="col-sm-10">--}}
                    {{--                    <input type="text" name="matricule" class="form-control" id="matricule">--}}
                    {{--                </div>--}}
                    <div class="col-sm-12 text-center">
                        <div class="input-group offset-1">
                            <input type="text" name="matricule_1" id="matricule_1" aria-label="matricule_1"
                                   class="radius form-control text-center" placeholder="123">
                            <span class="input-group-text">TU</span>
                            <input type="text" name="matricule_2" id="matricule_2" aria-label="matricule_2"
                                   class="radius form-control text-center" placeholder="1234">
                        </div>
                    </div>
                </div>


                <div class="row mb-3 d-md-flex justify-content-center text-center mt-5">
                    <label for="type" class="my-3 text-center label-text mt-3">Fabricant</label>
                    <div class="col-sm-11">
                        <input type="text" name="fabricant" class="radius form-control text-center mt-1" id="fabricant">
                    </div>
                </div>
                <fieldset class="row mb-3 d-md-flex justify-content-center text-center mt-5">
                    <label class="col-form-label text-center label-text">Type</label><br>
                    <table class="row col-sm-10 mb-3 offset-sm-1 mt-3 text-center ml-1"><tr>
                        <td class="form-check float-start test ">
                            <input class="form-check-input" type="radio" name="type" id="typeA" value="A">
                        <label class="form-check-label" for="typeA">A</label></td>
                        <td class="form-check float-start test">
                            <input class="form-check-input " type="radio" name="type" id="typeB" value="B">
                        <label class="form-check-label text-lg-start" for="typeB">B</label></td>
                        <td class="form-check float-end test">
                            <input class="form-check-input" type="radio" name="type" id="typeB" value="D">
                            <label class="form-check-label " for="typeD">D</label></td></tr>
                    </table>
                </fieldset>
                <div class="row mb-3 d-md-flex justify-content-center text-center mt-5">
                    <label for="visite" class="my-3 text-center label-text ">Prochaine date de visite</label>
                    <div class="col-sm-8 text-center ml-3 mt-2">
                        <input type="date" name="visite" class="radius form-control" id="visite">
                    </div>
                </div>
                <div class="row mb-3 d-md-flex justify-content-center mt-5">
                    <label for="image" class="my-3 text-center label-text">Telecharger une image du véhicule</label>
                    <div class="col-sm-10 ">
                        <input class="form-control mt-2 ml-1 radius" type="file" name="image" id="image">
                    </div>
                </div>
                <div class="row mb-3 d-md-flex justify-content-center">
                    <label for="moniteur" class="my-3 text-center mt-5 label-text">Moniteur (Responsable)</label>
                    <div class="col-sm-10 ">
                        <select class="form-select radius ml-1 mt-2" id="moniteur" name="moniteur" aria-label="Default select example">
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
                    <div class="text-center"><label class="my-3 label-text">Etat</label></div>
                    <div class="col-sm-10">
                        <div class="form-check float-none offset-2">
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
                <div class="text-center bottom-50"><button type="submit" class="btn btn-primary align-items-center text-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                    </svg> Enregistrer</button></div><br>
            </div>
        </form>
    </div>
    </div>
@endsection
