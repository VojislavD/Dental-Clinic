<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactUs;

class ContactController extends Controller
{
    public function store()
    {
    	request()->validate([
    		'name' => ['required'],
    		'email' => ['required','email'],
    		'subject' => ['required'],
    		'body' => ['required'],
    	]);

    	Mail::send(new ContactUs(request('subject'), request('name'), request('email'), request('body')));

    	return redirect('/contact')->with('message', "Email is sent, we will answer you as soon as possible.");
    }
}
