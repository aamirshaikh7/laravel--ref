<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserSubscribed;

class SubscribeController extends Controller
{
    public function show () {
        return view('subscribe.show');
    }

    public function store () {
        Subscriber::create(request()->validate([
            'name' => 'required | max:20',
            'email' => 'required | email'
        ]));

        Notification::route('email', request('email'))->notify(new UserSubscribed());
        
        return redirect(route('subscribe.show'))->with('message', 'You are now subscribed, check your email for the latest course link');
    }
}
