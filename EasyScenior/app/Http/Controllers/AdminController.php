<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Users;

class AdminController extends Controller
{
    public function Mailview(){

        $contact = Contact::all();
        $data = compact('contact');
        return view('Admin-Dash-Home')->with($data);
    }

    public function Userview(){

        $user = Users::all();
        $data = compact('user');
        return view('Admin-Dash-Users')->with($data);
    }
}
