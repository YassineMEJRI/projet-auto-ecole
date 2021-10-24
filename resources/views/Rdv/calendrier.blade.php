@extends('layouts.app')
@section('content')
    <h3>Liste des rendez-vous planifiés</h3>
    <table class="table table-striped text-center">
        <tr>
            <th>Date et heure</th>
            <th>Client</th>
            <th class="float-right">Seance</th>
        </tr>
        @foreach($rdvs as $rdv)
            <tr class={{ \Illuminate\Support\Carbon::now()->greaterThan(\Illuminate\Support\Carbon::parse($rdv->date_heure))?"table-danger":"" }}>
                <td>{{ $rdv->date_heure }}</td>
                <td>{{ $rdv->fn }} {{ $rdv->ln }}</td>
                <td>
                    {{ $rdv->seance }}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
