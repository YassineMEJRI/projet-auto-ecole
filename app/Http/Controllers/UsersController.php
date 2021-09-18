<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
        $users = DB::table('users')->where('droit', '=', 0)
                                        ->get();

        $moniteurs = DB::table('users')->where('droit', '=', 1)
                                            ->get();

        $admins = DB::table('users')->where('droit', '=', 2)
                                        ->get();

        return view('users', ['users'=> $users,
                                'moniteurs' => $moniteurs,
                                'admins' => $admins]);
    }

    public function ajouter_moniteur(){
        return view('ajoutermoniteur');
    }

    public function store_moniteur(Request $request){
        $this->validate($request, [
            'fname' => 'required|'
        ]);
    }
}
