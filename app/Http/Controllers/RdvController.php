<?php

namespace App\Http\Controllers;

use App\Models\Rdv;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RdvController extends Controller
{
    public function index(){
        $rdvs_code = DB::table('rdvs')
                    ->where('seance', '=', 'code')
                    ->leftJoin('users', 'users.id', '=', 'rdvs.moniteur')
                    ->select('rdvs.*', 'users.firstName', 'users.lastName')
                    ->orderBy('reserved')
                    ->orderBy('date_heure')
                    ->get();
        $rdvs_conduite = DB::table('rdvs')
            ->where('seance', '=', 'conduite')
            ->leftJoin('users', 'users.id', '=', 'rdvs.moniteur')
            ->select('rdvs.*', 'users.firstName', 'users.lastName')
            ->orderBy('reserved')
            ->orderBy('date_heure')
            ->get();
        foreach ($rdvs_code as $rdv){
            setlocale(LC_TIME, 'French');
            //dd(Carbon::parse($rdv->date_heure)->locale('fr_FR')->toDayDateTimeString());
            $rdv->date_name = Carbon::parse($rdv->date_heure)->locale('fr_FR')->toDayDateTimeString();
        }
        foreach ($rdvs_conduite as $rdv){
            setlocale(LC_TIME, 'French');
            //dd(Carbon::parse($rdv->date_heure)->locale('fr_FR')->toDayDateTimeString());
            $rdv->date_name = Carbon::parse($rdv->date_heure)->locale('fr_FR')->toDayDateTimeString();
        }
        return view('Rdv.list')->with('rdvs_code', $rdvs_code)
                                    ->with('rdvs_conduite', $rdvs_conduite);
    }

    public function ajouter(){
        $moniteurs = DB::table('users')
            ->where('droit', '=', '1')
            ->select('firstName', 'lastName', 'id')
            ->get();
        return view('Rdv.ajouter')->with('moniteurs', $moniteurs);
    }

    public function store(Request $request){
        $this->validate($request, [
            'moniteur' => 'required',
            'date_heure' => 'required|date|after:now',
            'seance' => 'required'
        ]);

//        if(strcmp($request->seance, "code") || strcmp($request->seance, "conduite"))
//            return redirect('/rdv/ajouter')->with('error', "Erreur lors de la selection du type de seance.");

        $rdv = new Rdv();
        $rdv->moniteur = $request->moniteur;
        $rdv->date_heure = $request->date_heure;
        $rdv->seance = $request->seance;
        $rdv->save();

        return redirect('/rdv/list')->with('success', "Rendez vous ajouté avec succés!");
    }

    public function reserver($id){
        $rdv = Rdv::find($id);

        if($rdv->user == NULL) {
            $rdv->user = Auth::user()->id;
            $rdv->reserved = true;
            $rdv->save();

            $start_date = Carbon::parse($rdv->date_heure)->isoFormat('YYYYMMDD[T]HHmmss');
            $end_date = Carbon::parse($rdv->date_heure)->addMinutes(90)->isoFormat('YYYYMMDD[T]HHmmss');

            return view('Rdv.reservee')->with('success', "Rendez vous reservé avec succés")
                                            ->with('start_date', $start_date)
                                            ->with('end_date', $end_date);
        }
        else
            return redirect('/rdv/list')->with('error', "Erreur lors de la reservation!");

    }
}
