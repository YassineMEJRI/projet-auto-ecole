<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(){
        return view('paiement');
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

        return redirect('home')->with('success', 'Paiement validé!');
    }
}
