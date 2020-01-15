<?php

namespace Milen\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Mail;
use Milen\Contact\Models\Contact;
use Milen\Contact\Mail\ContactMailable;
class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name,$request->email));
        Contact::create($request->all());
        return redirect(route('contact'));
    }



}
