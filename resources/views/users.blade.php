@extends('layouts.app')
@section('content')
    <h2>Users List</h2>
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-users-tab" data-bs-toggle="pill" data-bs-target="#pills-users" type="button" role="tab" aria-controls="pills-users" aria-selected="true">Users</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-moniteurs-tab" data-bs-toggle="pill" data-bs-target="#pills-moniteurs" type="button" role="tab" aria-controls="pills-moniteurs" aria-selected="false">Moniteurs</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-admins-tab" data-bs-toggle="pill" data-bs-target="#pills-admins" type="button" role="tab" aria-controls="pills-admins" aria-selected="false">Admins</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
            <ul class="list-group">
                @foreach($users as $user)

                    <li class="list-group-item">{{ $user->firstName }}  {{ $user->id }}</li>

                @endforeach
            </ul>
        </div>
        <div class="tab-pane fade" id="pills-moniteurs" role="tabpanel" aria-labelledby="pills-moniteurs-tab">
            <ul class="list-group">
                @foreach($moniteurs as $moniteur)

                    <li class="list-group-item">{{ $moniteur->firstName }}  {{ $moniteur->id }}</li>

                @endforeach
            </ul>
        </div>
        <div class="tab-pane fade" id="pills-admins" role="tabpanel" aria-labelledby="pills-admins-tab">
            <ul class="list-group">
                @foreach($admins as $admin)

                    <li class="list-group-item">{{ $admin->firstName }}  {{ $admin->id }}</li>

                @endforeach
            </ul>
        </div>
    </div>
@endsection
