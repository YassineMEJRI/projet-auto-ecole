@extends ('layouts.app')
@section('content')
    <h2>vehicule list List</h2>
    <ul class="list-group">
        @foreach($vehicule as $vehicule)

            <li class="list-group-item">{{ $vehicule ->matricule }}  {{ $vehicule >id }}</li>

        @endforeach
    </ul>


@endsection
