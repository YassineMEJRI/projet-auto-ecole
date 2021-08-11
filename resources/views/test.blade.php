@extends('layouts.app')
@section('content')

    <div class="container">
        <h3>Question N°</h3><h3 id="questionnumber"></h3>
        <h2 id="question" ></h2>
        <p id="reponse"></p>
        <button class="btn btn-secondary" id="next">Next</button>
    </div>
    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
    </div>
    <script type = "text/javascript"
            src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script type = "text/javascript">
        $(document).ready(function() {
            $("#next").click(function(){
                $.getJSON('/nextquestion',
                    function(response) {
                    $('#question').html(response[0].body);
                    $('#questionnumber').html(response[1]);
                    $('#reponse').html(response[2][0].body);
                });

            });
        });
    </script>
@endsection
