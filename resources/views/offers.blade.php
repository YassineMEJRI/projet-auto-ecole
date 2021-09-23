@extends('layouts.app')
@section('content')
    <div  class="container w-75 my-5">
        <form method="GET" action="/paiement">
        @csrf
            <label for="heuresCode" class="form-label float-lg-start">Nombre d'heures de code: 7dt/hr</label>

             <div class="mb-5">
                 <div class="d-flex justify-content-center  ">
                  <input type="range" class="form-range" min="5" max="20" value="5" step="1" name="heuresCode" id="heuresCode" onchange="calcul_somme()">
                  <div id="nbHrCode" class ="btn btn-secondary w-25">5 heures</div>

              </div>
                 <div id="sommeCode" class="btn btn-secondary d-flex justify-content-center">35 dt</div>
             </div>

        <label for="heuresConduite" class="form-label float-lg-start "> Nombre d'heures de conduite: 20dt/hr</label>
        <input type="range" class="form-range" min="10" max="50" value="10" step="1" name="heuresConduite" id="heuresConduite" onchange="calcul_somme()">
            <div class="btn-group-justified d-flex justify-content-center">
            <div id="nbHrConduite" class="btn btn-secondary">10 heures</div>
            <div id="sommeConduite" class="btn btn-secondary mx-2">200 dt</div>
            </div>
        <div><h3 id="somme" class="text-success  btn btn-secondary ">235 dt</h3></div>


        <input type="hidden" id="sommeinput" name="somme" value="235">
        <input type="hidden" id="sommeConduiteinput" name="sommeConduite" value="200">
        <input type="hidden" id="sommeCodeinput" name="sommeCode" value="35">
        <button type="submit" class="btn btn-primary float-end mt-2">Passer au paiement</button>
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
