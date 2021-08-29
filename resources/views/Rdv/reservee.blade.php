@extends('layouts.app')
@section('content')
    <h1>Félicitation</h1>
    <h2>Ajouter votre rendez-vous dans votre calendrier Google</h2>
    <a role="button" class="btn btn-outline-primary btn-lg" href="https://calendar.google.com/calendar/r/eventedit?text=Rendez-vous+Seance+Auto+Ecole&dates={{ $start_date }}/{{ $end_date }}&details=Seance+de+code&location=Campus+Universitaire+de+la+Manouba،+Manouba+2010">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
            <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
        </svg>
        Google Calendar
    </a>

@endsection
