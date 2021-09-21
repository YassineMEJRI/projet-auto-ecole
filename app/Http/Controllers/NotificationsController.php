<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index(){
        $user = Auth::user();
        $notifications = Notification::where('user_id','=',$user->id)->get();
        ddd($notifications);
    }
}
