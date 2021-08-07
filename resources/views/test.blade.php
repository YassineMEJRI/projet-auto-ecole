@extends('layouts.app')
@section('content')
    <table ss="table">
        <th>{{ $question }}</th>
        @foreach($reponses as $reponse)
            <tr><td @if($reponse->correct) class="bg-success" @else class="bg-danger" @endif>{{$reponse->body}}</td></tr>
        @endforeach
    </table>
@endsection
