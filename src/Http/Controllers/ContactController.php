<?php

namespace Goldfeesh\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Goldfeesh\Contact\Models\Contact;
use Goldfeesh\Contact\Mail\ContactMailable;

class ContactController extends Controller
{

  public function index()
  {
    return view('contact::contact');
  }

  public function send(Request $request)
  {
      unset($request['_token']);

      $result = Contact::create($request->all());
      $result =  Mail::to(config('contact.goldfeesh_contact_email'))->send(new ContactMailable($request->name, $request->email,$request->subject, $request->comments));
      return redirect(route('contact'))
          ->with(['code'=>'success', 'message'=> config('contact.goldfeesh_contact_replymessage'),'title' => 'Email Result']);
  }

}
