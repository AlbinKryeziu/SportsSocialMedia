<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    public function deleteNotification($notifyId){
        
        $notification = Notification::where('id',$notifyId)->delete();
        if($notification){
            return redirect()->back();
        }
    }
}
