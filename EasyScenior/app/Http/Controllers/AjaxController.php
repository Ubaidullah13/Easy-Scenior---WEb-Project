<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorRatings;
use App\Models\Packages;

class AjaxController extends Controller
{
    public function view($name){
        $findratings = TutorRatings::WHERE('tutor',$name)->inRandomOrder()->get();        
        $da = compact('findratings');
        $count = count($findratings);
        return response()->json(array('msg'=> $da, 'count'=>$count), 200);


    }

    public function PKG($id)
    {
        $price = Packages::SELECT('price')->WHERE('pkg_ID',$id)->get();
        $pr = compact('price');
        return response()->json(array('PR'=> $pr), 200);
    }
}
