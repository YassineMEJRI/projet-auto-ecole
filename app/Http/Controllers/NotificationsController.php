<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationsController extends Controller
{
    public function index(){
        $user = Auth::user();
        $notificationsUnread = Notification::where('user_id','=',$user->id)
            ->where('status', '=', '0')
            ->orderBy('created_at', 'DESC')
            ->get();
        $notificationsRead = Notification::where('user_id','=',$user->id)
            ->where('status', '=', '1')
            ->orderBy('created_at', 'DESC')
            ->take(4)
            ->get();


        //todo read notification
//        foreach ($notifications as $notification){
//            $notification->status= 1;
//            $notification->save();
//        }
        return $notificationsUnread->merge($notificationsRead);
    }

    public function read($id){
        $read = DB::table('notifications')
            ->where('user_id', $id)
            ->update(['status' => 1]);
        return $read;
    }
}
