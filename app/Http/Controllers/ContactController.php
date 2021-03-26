<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show () {
        return view('contact.show');
    }

    public function store () {
        request()->validate([
            'name' => 'required | max:20',
            'email' => 'required | email',
            'message' => 'required | max:500'
        ]);

        $name = request('name');
        $email = request('email');
        $message = request('message');

        Mail::raw($message, function ($msg) {
            $msg->from(request('email'))
                ->to('aamir@email.com')
                ->subject('Contact');
        });

        return redirect(route('contact.show'))->with('message', 'Email sent successfully !');
    }
}
