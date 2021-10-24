@extends('layouts.app')
@section('content')
    <div  class="container w-75 my-5 boxtool mt-5" style="height:450px;">
        <form method="GET" action="/paiement">
        @csrf
            <div>
                <table class="w-100">
                    <caption style="caption-side: top">
                        <label for="heuresCode" class="fw-bold form-label float-lg-start fs-5 text-center">Nombre d'heures de code: 7dt/hr</label>
                    </caption>
                    <tr>
                        <td rowspan="2" width="50%">
                            <input type="range" class="form-range w-75 mt-1" min="5" max="20" value="5" step="1" name="heuresCode" id="heuresCode" onchange="calcul_somme()">
                        </td>
                        <td>
                            <div id="nbHrCode" class ="btn btn-outline-primary w-100">5 heures</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold float-lg-start mt-2 text-center"><h4 class="text-center">le prix total de code:</h4></label>
                        </td>
                        <td>
                            <div id="sommeCode" class="btn btn-outline-primary fw-bold">35dt</div>
                        </td>
                    </tr>
                </table>

{{--                <label for="heuresCode" class="fw-bold form-label float-lg-start lgnb text-center">Nombre d'heures de code: 7dt/hr</label>--}}
{{--                <div class="mb-2">--}}
{{--                    <div class="d-flex">--}}
{{--                        <input type="range" class="form-range w-75 mt-1" min="5" max="20" value="5" step="1" name="heuresCode" id="heuresCode" onchange="calcul_somme()">--}}
{{--                        <div id="nbHrCode" class ="btn btn-outline-primary ml-0 w-13">5 heures</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="mb-2 text-center ml-4">--}}
{{--                    <label class="fw-bold float-lg-start mt-2 text-center"><h4 class="text-center fw-bold">le prix total de code:</h4></label>--}}
{{--                    <div id="sommeCode" class="btn btn-outline-primary w-13"><h3 class="fw-bold mt-1">35dt</h3></div>--}}
{{--                </div>--}}
            </div>

            <div>
                <table class="w-100">
                    <caption style="caption-side: top">
                        <label for="heuresConduite" class="fw-bold form-label float-lg-start fs-5 text-center"> Nombre d'heures de conduite: 20dt/hr</label>
                    </caption>
                    <tr>
                        <td rowspan="2" width="50%">
                            <input type="range" class="form-range w-75 mt-1" min="10" max="50" value="10" step="1" name="heuresConduite" id="heuresConduite" onchange="calcul_somme()">
                        </td>
                        <td>
                            <div id="nbHrConduite" class="btn btn-outline-primary w-100">10 heures</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="fw-bold float-lg-start mt-2 text-center"><h4 class="text-center">le prix total de conduite:</h4></label>
                        </td>
                        <td>
                            <div id="sommeConduite" class="btn btn-outline-primary fw-bold">200dt</div>
                        </td>
                    </tr>
                </table>

{{--            <label for="heuresConduite" class="fw-bold form-label float-lg-start  lgnb text-center"> Nombre d'heures de conduite: 20dt/hr</label>--}}
{{--                <div class="mb-2">--}}
{{--                    <div class="d-flex">--}}
{{--                        <input type="range" class="form-range w-75 mt-1" min="10" max="50" value="10" step="1" name="heuresConduite" id="heuresConduite" onchange="calcul_somme()">--}}
{{--                        <div id="nbHrConduite" class="btn btn-outline-primary ml-0 w-13">10 heures</div>--}}
{{--                    </div>--}}
{{--                <div id="sommeConduite" class="btn btn-secondary mx-2">200 dt</div>--}}
{{--                </div>--}}
                <div class="d-flex flex-row justify-content-center mt-4"><h3 class="btn btn-outline-success fw-bold btn-lg active w-auto">Total: <span id="somme" >235 dt</span></h3></div>


            <input type="hidden" id="sommeinput" name="somme" value="235">
            <input type="hidden" id="sommeConduiteinput" name="sommeConduite" value="200">
            <input type="hidden" id="sommeCodeinput" name="sommeCode" value="35">
                <div class="d-flex flex-row justify-content-center">
                    <button type="submit" class="btn btn-primary mt-2 mb-4 text-white fw-bold w-50">Passer au
                        paiement
                    </button>
                </div>
            </div>
        </form>
 </div>
    <script>
        function calcul_somme(){
            var nbHCod = $('input[name=heuresCode]').val();
            var nbHCon = $('input[name=heuresConduite]').val();

            var sommeCode = nbHCod * 7;
            var sommeConduite = nbHCon * 20;
            var somme = sommeCode + sommeConduite;

            $("#somme").html(somme + " dt");
            $("#sommeinput").attr('value',somme);

            $("#nbHrCode").html(nbHCod + " heures");
            $("#nbHrConduite").html(nbHCon + " heures");

            $("#sommeCode").html(sommeCode + " dt");
            $("#sommeConduite").html(sommeConduite + " dt");

            $("#sommeCodeinput").attr('value', sommeCode);
            $("#sommeConduiteinput").attr('value', sommeConduite);
        }
    </script>
@endsection
