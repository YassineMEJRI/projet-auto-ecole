@extends('layouts.app')
@section('content')
    <form>
        <label for="heuresCode" class="form-label">Nombre d'heures de code: 7dt/hr</label>
        <input type="range" class="form-range" min="5" max="20" value="5" step="1" name="heuresCode" id="heuresCode" onchange="somme()">
        <div id="nbHrCode">5 heures</div> <div id="sommeCode">35 dt</div>
        <label for="heuresConduite" class="form-label">Nombre d'heures de conduite: 20dt/hr</label>
        <input type="range" class="form-range" min="10" max="50" value="10" step="1" name="heuresConduite" id="heuresConduite" onchange="somme()">
        <div id="nbHrConduite">10 heures</div> <div id="sommeConduite">200 dt</div>
        <div><h3 id="somme" class="text-success fw-bold">235 dt</h3></div>
        <a class="btn btn-primary" href="/paiement">Passer au paiement</a>
    </form>
    <script>
        function somme(){
            var nbHCod = $('input[name=heuresCode]').val();
            var nbHCon = $('input[name=heuresConduite]').val();

            var sommeCode = nbHCod * 7;
            var sommeConduite = nbHCon * 20;
            var somme = sommeCode + sommeConduite;

            $("#somme").html(somme + " dt");

            $("#nbHrCode").html(nbHCod + " heures");
            $("#nbHrConduite").html(nbHCon + " heures");

            $("#sommeCode").html(sommeCode + " dt");
            $("#sommeConduite").html(sommeConduite + " dt");
        }
    </script>
@endsection
