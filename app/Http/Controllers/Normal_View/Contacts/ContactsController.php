<?php

namespace App\Http\Controllers\Normal_View\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function index(){
        return view('Normal_View.Contact.index');
    }

    public function sendEmail(Request $request){
        $request->validate([
            'email' => 'required|email',
            'subject' => 'required|string',
            'content' => 'required|string'
        ]);


        Mail::send('Normal_View.Contact.email', ['content' => $request->content, 'subject' => $request->subject], function($mails) use($request){
            $mails->to($request->email);
            $mails->subject($request->subject);
        });
        return redirect()->back()->with('message', 'Email sent successfully!');
}
}
