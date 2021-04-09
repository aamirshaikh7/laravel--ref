<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

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

        Mail::to(request('email'))
            ->send(new Contact('http://laravel-8-course.com/'));
        
        return redirect(route('subscribe.show'))->with('message', 'You are now subscribed, check your email for the latest course link');
    }
}
