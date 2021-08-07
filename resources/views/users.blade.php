@extends('layouts.app')
@section('content')
    <h2>Users List</h2>
    <ul class="list-group">
        @foreach($users as $user)

                <li class="list-group-item">{{ $user->name }}  {{ $user->id }}</li>

        @endforeach
    </ul>
@endsection
