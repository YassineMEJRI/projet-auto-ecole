@extends('layouts.app')
@section('content')
    <h1>Welcome
        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif
        !
    </h1>
    <a href="/vehicules/create">Ajouter un nouveau vehicule.</a>
@endsection
