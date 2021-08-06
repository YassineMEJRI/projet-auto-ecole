<?php

namespace App\Http\Controllers;

use App\Models\Vehicule;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class VehiculesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('vehicule.index')->with('vehicules', $vehicules);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vehicule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'matricule' => 'required',
            'type' => 'required'
        ]);

        $vehicule = new Vehicule();
        $vehicule->matricule = $request->matricule;
        $vehicule->type = $request->type;
        if($request->etat == "horsservice")
            $vehicule->horsService = 1;
        else
            $vehicule->horsService = 0;
        try {
            $vehicule->save();
        }catch(QueryException $ex){
            return redirect('/vehicules/create')->with('error', 'Matricule existe déja!');
        }

        return redirect('/vehicules')->with('success', 'Vehicule ajouté!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "test";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicule = Vehicule::find($id);
        return view('vehicule.edit')->with('vehicule', $vehicule);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'matricule' => 'required',
            'type' => 'required'
        ]);

        $vehicule = Vehicule::find($id);
        $vehicule->matricule = $request->matricule;
        $vehicule->type = $request->type;
        if($request->etat == "horsservice")
            $vehicule->horsService = 1;
        else
            $vehicule->horsService = 0;
        try {
            $vehicule->save();
        }catch(QueryException $ex){
            return redirect('/vehicules/'.$id.'/edit')->with('error', 'Matricule existe déja!');
        }
        return redirect('/vehicules')->with('success', "Données mises a jour avec succés!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehicule = Vehicule::find($id);
        $vehicule->delete();
        return redirect('/vehicules')->with('success', 'Vehicule supprimé avec succés!');
    }
}