<?php

namespace App\Http\Controllers;
use App\Models\FindTutor;
use Illuminate\Http\Request;

class FindTutorController extends Controller
{
    public function view(){
        $findTutor = FindTutor::inRandomOrder()->get();

        $FT = compact('findTutor');
        return view('FindATutor')->with($FT);
    }
}
