@extends('layouts.app')
@section('content')
    <h1>Welcome
        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif
        !
    </h1>
    <a href="/vehicules/create">Ajouter un nouveau vehicule.</a>
    <br>
    <a href="/test">Passer un Quiz</a>
    <br>
    <a href="/quiz/ajouter">Ajouter une question de quiz</a>
@endsection
