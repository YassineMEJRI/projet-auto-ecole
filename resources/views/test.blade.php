@extends('layouts.app')
@section('content')

    <div class="container">
        <h3 class="text-center">Question N°</h3><h3 class="text-center rounded-circle" id="questionnumber"></h3>
        <h2 id="question" ></h2>
        <img id="image" src="">
    </div>
    <div class="btn-group-vertical" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
        <label id="btnradio1text" class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label id="btnradio2text" class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label id="btnradio3text" class="btn btn-outline-primary" for="btnradio3">Radio 3</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
        <label id="btnradio4text" class="btn btn-outline-primary" for="btnradio4">Radio 4</label>
    </div>
    <div class="clearfix">
        <button class="btn btn-secondary float-end" id="next">Next</button>
    </div>
    <div class="progress">
        <div class="progress-bar" id="progress" role="progressbar" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
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
                    $('#image').attr("src", 'storage/images/' + response[0].image);
                    $('#questionnumber').html(response[1]);
                    $('#btnradio1text').html(response[2][0].body);
                    $('#btnradio2text').html(response[2][1].body);
                    $('#btnradio3text').html(response[2][2].body);
                    $('#btnradio4text').html(response[2][3].body);
                    $('#progress').width(response[1]*100/30 + '%');
                });

            });
        });
    </script>
@endsection
