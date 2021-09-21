@extends('layouts.app')
@section('content')
{{--    TODO styling--}}

    <a role="button" id="start_quiz" class="btn boxstyle btn-outline-primary btn-lg mt-9 ml-8">Commencer le Quiz</a>

    <div id="test_container" style="display: none;" class="boxtool mt-6">
        <div class="container lgnb">
            <h3 class="text-center">Question N°</h3>
            <h3 class="text-center" id="questionnumber"></h3>
        </div>

        <div class="container  px-4 lgnb mb-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 position-relative h-100">
                        <h4 id="question" class="mt-2 "></h4>
                        <input type="hidden" value="" id="questionId">
                        <div class="btn-group-vertical position-absolute top-50 end-0 translate-middle-y w-100 d-flex" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" value="ans1" id="btnradio1" autocomplete="off">
                            <label id="btnradio1text" class="btn btn-outline-primary" for="btnradio1">Radio 1</label>

                            <input type="radio" class="btn-check" name="btnradio" value="ans2" id="btnradio2" autocomplete="off">
                            <label id="btnradio2text" class="btn btn-outline-primary" for="btnradio2">Radio 2</label>

                            <input type="radio" class="btn-check" name="btnradio" value="ans3" id="btnradio3" autocomplete="off">
                            <label id="btnradio3text" class="btn btn-outline-primary" for="btnradio3">Radio 3</label>

                            <input type="radio" class="btn-check" name="btnradio" value="ans4" id="btnradio4" autocomplete="off">
                            <label id="btnradio4text" class="btn btn-outline-primary" for="btnradio4">Radio 4</label>
                        </div>
                        <div class="clearfix position-absolute bottom-0 ml-8 mb-3">
                            <a role="button" class="btn btn-lg  btn-success float-end" id="next">Next</a>
                        </div>
                        <div class="clearfix position-absolute bottom-0 end-0 mb-3">
                            <button id="finish" class="btn btn-lg btn-primary float-end" style="display: none" onclick="finishQuiz()">Afficher le resultat</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 h-100 ">
                        <img class="w-100 radius" id="image" src="">
                    </div>
                </div>
            </div>
        </div>

        <div class="progress w-75 ml-2 text-center border border-1 border-info">
            <div class="progress-bar " id="progress" role="progressbar" style="width: 10%" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}">
    </script>
    <script type="text/javascript">
        function nextQuestion() {
            $.ajax(
                {
                    url: '/nextquestion',
                    dataType: 'json',
                    async: false,
                    data: {
                        answer: $('input[name="btnradio"]:checked').val(),
                        questionId: $("#questionId").val()
                    },
                    success: function (response) {

                        $('#question').html(response[0].body);
                        $('#image').attr("src", 'storage/images/' + response[0].image);
                        $('#questionnumber').html(response[1]);
                        $('#questionId').attr("value", response[0].id);
                        $('#btnradio1text').html(response[2][0].body);
                        $('#btnradio2text').html(response[2][1].body);
                        if (response[2][2]) {
                            $('#btnradio3text').html(response[2][2].body);
                            $('#btnradio3').attr("value", response[2][2].id);
                            $('#btnradio3text').show();
                        } else {
                            $('#btnradio3text').hide();
                        }
                        if (response[2][3]) {
                            $('#btnradio4text').html(response[2][3].body);
                            $('#btnradio4').attr("value", response[2][3].id);
                            $('#btnradio4text').show();
                        } else {
                            $('#btnradio4text').hide();
                        }

                        $('#btnradio1').attr("value", response[2][0].id);
                        $('#btnradio2').attr("value", response[2][1].id);

                        $('#progress').width(response[1] * 100 / 30 + '%');
                        if (response[1] == 30) {
                            $("#next").hide();
                            $("#finish").show();
                            //alert("test");
                        }

                    }
                });

        }

        $(document).ready(function () {
            $("#next").click(nextQuestion);

            $("#start_quiz").click(function () {
                $("#start_quiz").remove();
                nextQuestion();
                $("#test_container").show();
            });
        });
        function  finishQuiz(){
            $.ajax(
                {
                    url: '/nextquestion',
                    dataType: 'json',
                    data: {
                        answer: $('input[name="btnradio"]:checked').val(),
                        questionId: $("#questionId").val()
                    },
                    success: function(){}
                }
            );
            window.location.href = "quiz/results";
        }
    </script>
@endsection
