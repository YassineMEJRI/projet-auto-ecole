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
            <table class="table table-striped text-center color_perso1">
                <tr class="bg-info text-white">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>CIN</th>
                    <th>e-mail</th>
                    <th>Téléphone</th>
                    <th>Paid</th>
                </tr>
                @foreach($users as $user)

                    <tr>
                        <td>{{ $user->firstName }}</td>
                        <td>{{ $user->lastName }}</td>
                        <td>{{ $user->cin }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->tel }}</td>
                        <td>
                            @if($user->paid)
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                            </svg>
                            @endif
                        </td>

                    </tr>

                @endforeach
            </table>
            </ul>
        </div>
        <div class="tab-pane fade" id="pills-moniteurs" role="tabpanel" aria-labelledby="pills-moniteurs-tab">
            <table class="table table-striped text-center color_perso1">
                <tr class="bg-info text-white">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>CIN</th>
                    <th>e-mail</th>
                    <th>Téléphone</th>
                </tr>
                @foreach($moniteurs as $moniteur)

                    <tr>
                        <td>{{ $moniteur->firstName }}</td>
                        <td>{{ $moniteur->lastName }}</td>
                        <td>{{ $moniteur->cin }}</td>
                        <td>{{ $moniteur->email }}</td>
                        <td>{{ $moniteur->tel }}</td>

                    </tr>

                @endforeach
            </table>
            </ul>
        </div>
        <div class="tab-pane fade" id="pills-admins" role="tabpanel" aria-labelledby="pills-admins-tab">
            <table class="table table-striped text-center color_perso1">
                <tr class="bg-info text-white">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>CIN</th>
                    <th>e-mail</th>
                    <th>Téléphone</th>
                </tr>
                @foreach($admins as $admin)

                    <tr>
                        <td>{{ $admin->firstName }}</td>
                        <td>{{ $admin->lastName }}</td>
                        <td>{{ $admin->cin }}</td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->tel }}</td>

                    </tr>

                @endforeach
            </table>
            </ul>
        </div>
    </div>
@endsection
