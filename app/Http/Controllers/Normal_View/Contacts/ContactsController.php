<?php

namespace App\Http\Controllers\Normal_View\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){
        return view('Normal_View.Contact.index');
    }
}
