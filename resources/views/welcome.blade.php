@extends('layouts.app')
@section('content')
    <div><h1 class="align-middle text-center">Welcome
        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif
        !
    </h1>
        <br>
    </div>
    <div class="align-middle align-content-center">
    <a type="button" class="text-center button1 align-middle float-start" href='/vehicules/create'><span>Ajouter un nouveau vehicule</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/test'><span>Passer un Quiz.</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/users'><span>Liste des utilisateurs</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/vehicules'><span>Afficher la liste des vehicules.</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/quiz/ajouter'><span>Ajouter une question de quiz</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/rdv/ajouter'><span>Ajouter un rendez-vous</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/offers'><span>Liste des offres</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/rdv/list'><span>Reserver un rendez-vous (code/conduite)</span></a>
    <a type="button" class="text-center button1 align-middle float-start" href='/moniteur/ajouter'><span>Inscrir un moniteur</span></a>

    </div>
@endsection
