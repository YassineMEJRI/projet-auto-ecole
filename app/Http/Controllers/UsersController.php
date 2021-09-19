<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

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

    public function parametres(){
        return view('parametres');
    }

    public function update_password(Request $request){
        $this->validate($request, [
            'old_password' => ['required', 'string', 'min:8'],
            'new_password' => ['required', 'string', 'min:8'],
            'confirm_password' => ['required', 'string', 'min:8']
        ]);
        $user = $request->user();

        if(! Hash::check($request->old_password, $user->getAuthPassword()))
            return redirect('/parametres')->with('error', 'Ancien mot de passe incorrect!');

        if($request->new_password != $request->confirm_password)
            return redirect('/parametres')->with('error', 'Confirmation de mot de passe incorrecte!');

        $user->password = Hash::make($request->new_password);
        $user->save();
        return redirect('/parametres')->with('success', 'Mot de passe mis à jour avec succees!');
    }

    public function update_data(Request $request){
        $user = $request->user();

        $this->validate($request, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users',)->ignore($user->id)],
            'password' => ['required', 'string', 'min:8'],
            'cin' => ['required','digits:8',Rule::unique('users',)->ignore($user->id)],
            'tel'=>['required','digits_between:6,15'],
        ]);


        if(Hash::check($request->password, $user->getAuthPassword())){
            $user->firstName = $request->firstName;
            $user->lastName = $request->lastName;
            $user->tel = $request->tel;
            if($user->cin != $request->cin)
                $user->cin = $request->cin;
            if($user->email != $request->email)
                $user->email = $request->email;
            $user->save();
            return redirect('/parametres')->with('success', 'Informations mises à jour avec succes!');
        }else{
            return redirect('/parametres')->with('error', 'Mot de passe incorrect!');
        }

    }
}
