@extends('layouts.app')
@section('content')
    <div><h1 class="align-middle text-center">Welcome
        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif
        !
    </h1><br></div>
    <div class="align-middle align-content-center">
    <button type="button" class="text-center button1 align-middle float-start" onclick="window.location.href='/vehicules/create';"><span>Ajouter un nouveau vehicule</span></button>
    <button type="button" class="text-center button1 align-middle float-start" onclick="window.location.href='/test';"><span>Passer un Quiz.</span></button>
        <button type="button" class="text-center button1 align-middle float-start" onclick="window.location.href='/users';"><span>Liste des utilisateurs</span></button>
        <button type="button" class="text-center button1 align-middle float-start" onclick="window.location.href='/vehicules';"><span>Afficher la liste des vehicules.</span></button>
        <button type="button" class="text-center button1 align-middle float-start" onclick="window.location.href='/quiz/ajouter';"><span>Ajouter une question de quiz</span></button>
    <button type="button" class="text-center button1 align-middle float-start" onclick="window.location.href='/rdv/ajouter';"><span>Ajouter un rendez-vous</span></button>

    </div>
@endsection
