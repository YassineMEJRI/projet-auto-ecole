<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'cin' => ['required','digits:8','unique:users'],
            'tel'=>['required','digits_between:6,15']
        ]);

        $moniteur = new User();
        $moniteur->firstName = $request->firstName;
        $moniteur->lastName = $request->lastName;
        $moniteur->cin = $request->cin;
        $moniteur->email = $request->email;
        $moniteur->droit = 1;
        $moniteur->tel = $request->tel;
        $moniteur->password = Hash::make($request->password);

        try {
            $moniteur->save();
        }
        catch (QueryException $exception){
            ddd($exception);
        } finally {
            return redirect('/moniteur/ajouter')->with('success', "Moniteur ajouté avec succés!");
        }
    }
}
