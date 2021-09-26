<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class NotificationsController extends Controller
{
    public function index(){
        $user = Auth::user();
        $notifications = Notification::where('user_id','=',$user->id)
            ->where('status','=',0)
            ->get();
        //todo read notification
//        foreach ($notifications as $notification){
//            $notification->status= 1;
//            $notification->save();
//        }
        return $notifications;
    }

    public function contactus(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'comments' => 'required'
        ]);
        Mail::send('emails.contact', [
            'name' => $request->name,
            'comments' => $request->comments
        ],
            function ($m) use ($request) {
                $m->from('autoecole@laravel.com', 'Auto ecole');
                $m->to($request->email, $request->name)->subject('[Email reçu] ' . $request->subject);
            });

        return redirect('/home');
    }
}
