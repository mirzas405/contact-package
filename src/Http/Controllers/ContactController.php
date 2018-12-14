<?php

namespace Weanio\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Weanio\Contact\Models\Contact;
use Weanio\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
      //first parameter package name and second one is the view name
      return view('contact::contact');
    }

    public function send(Request $request)
    {
      Mail::to($request->email)->send(new ContactMailable($request->message, $request->name));
      Contact::create($request->all());
      return redirect()->route('contact');
    }
}
