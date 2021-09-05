@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="fw-bold">Vous avez obtenu un score de:
            <span class={{ $score  > 23?"text-success":"text-danger"}}> {{ $score }} / 30</span>
        </h3>

        @if($score < 24)
            <div class="alert alert-danger d-flex align-items-center fs-3 mb-3" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle-fill ms-2 me-4" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                Désolé, Il faut avoir un minimum de 24 bonnes réponses pour réussir à l'examen.
            </div>
        @else
            <div class="alert alert-success d-flex align-items-center fs-3 mb-3" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-check-circle-fill ms-2 me-4" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg>
                Félicitation! Vous avez réussi votre examen.
            </div>
        @endif
        @foreach($correction as $cor)
        <p>{{$cor->body}}</p>
        <ul>
            @foreach($cor->answers as $ans)
                <li class={{ $ans->correct?"bg-success":"" }}>{{ $ans->body }}</li>
                @foreach($cor->chosen as $cho)
                    @if($cho->reponse_id == $ans->id)
                        ^
                    @endif
                @endforeach
            @endforeach

        </ul>
        @endforeach
    </div>
@endsection
