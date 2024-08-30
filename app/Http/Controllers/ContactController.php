<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show(Request $request) {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $details = [
            'subject' => 'Contact Us Message',
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message']
        ];

        Mail::to('nehapalsdett@gmail.com')->send(new ContactMail($details));

        return redirect()->route('contact.show')->with('success', 'Thank you for your message!');
    }
}
