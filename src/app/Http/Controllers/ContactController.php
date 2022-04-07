<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
  
  public function index(){
    return view('contact');
  }

  public function confirm(ContactRequest $request){
    // Contact::create([
    //   'name' => $request->name,
    //   'email' => $request->email,
    //   'message' => $request->message,
    // ]);
    
    // Mail::to('test@contact.com')->send(new ContactMail());

    logger('aaa');

    return view('contact.confirm', ["input" => $request])
    ->with([ 'status'=> 'info']);
  }

  public function complete(ContactRequest $request){
    Contact::create([
      'name' => $request->name,
      'email' => $request->email,
      'message' => $request->message,
    ]);
    
    Mail::to('test@contact.com')->send(new ContactMail());
  }

  // public function store2(ContactRequest $request){

  //   return redirect()->route('/contactpage/confirm/completion');
  // }

}