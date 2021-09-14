@extends('layouts.app')
@section('content')
    <br>
    <div class="container">
        <table class="table table-striped text-center color_perso1">
            <tr class="bg-info text-white">
                <th>Id</th>
                <th>Type</th>
                <th>Matricule</th>
                <th>Fabricant</th>
                <th>Etat</th>
                <th>Visite</th>
                <th class="float-right">Actions</th>
            </tr>
            @foreach($vehicules as $vehicule)
                <tr class="{{ $vehicule->horsService?"table-danger":"" }} color_perso2 align-middle">
                    <td>{{ $vehicule->id }}</td>
                    <td>{{ $vehicule->type }}</td>
                    <td>{{ $vehicule->matricule }}</td>
                    <td>{{ $vehicule->fabricant }}</td>
                    <td>{{ $vehicule->horsService?"Hors Service":"En Service" }}</td>
                    <td>{{ $vehicule->visite }}</td>
                    <td>
                            <button type="submit" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmationModal" data-id=" {{ $vehicule->id }}" onclick="confirmDelete(this)">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                </svg>
                            </button>
                        <a type="button" class="btn btn-outline-secondary float-right" href="/vehicules/{{ $vehicule->id }}/edit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

            <a href="/vehicules/create" class="btn btn-info float-end">Ajouter</a>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationLabel">Delete Vehicule</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
               Are you sure you want to delete this vehicule  ?
                    <form method="POST" action="" class="float-right" id="form-delete-vehicule">
                    @csrf
                    @method('DELETE')
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="cancel" type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                    <button  id="confirm" type="submit" class="btn btn-danger" form="form-delete-vehicule">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function confirmDelete(self) {
            var id = self.getAttribute("data-id") ;
            document.getElementById("form-delete-vehicule").action="/vehicules/" +id ;
            $("#confirmationModal").modal("show");
        }

    </script>

@endsection
