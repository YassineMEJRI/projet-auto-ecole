<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function index(){
        return view('offers');
    }

    public function store(Request $request){
        $this->validate($request, [
            'cardOwner' =>'required',
            'cardNumber' => 'required|digits:16',
            'expirationMonth' => 'required|between:1,12',
            'expirationYear' => 'required|digits:4',
            'ccv' => 'required|digits:3'
        ]);

        $user = Auth::user();
        $user->paid = true;
        $user->save();
       // $time = carboon::now();

        Mail::send('emails.mail', ['user' => $user ,
            'heuresCode'=>$request->heuresCode ,
            'somme'=>$request->somme ,
            'heuresConduite'=>$request->heuresConduite,
            'sommeConduite'=>$request->sommeConduite,
            'sommeCode'=>$request->sommeCode],
             function ($m) use ($user) {
            $m->from('autoecole@laravel.com', 'Auto ecole');
            $m->to($user->email, $user->firstName ." ". $user->lastName)->subject('Confirmation de paiement');
        });

        return redirect('home')->with('success', 'Paiement validé!');
    }

    public function paymentmethod(Request $request){
        return view('paiement', [
            'heuresCode' => $request->heuresCode,
            'heuresConduite' => $request->heuresConduite,
            'somme' => $request->somme,
            'sommeConduite' => $request->sommeConduite,
            'sommeCode' => $request->sommeCode
        ]);
    }
}
