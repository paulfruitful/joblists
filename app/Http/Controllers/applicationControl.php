<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicationControl extends Controller
{
    public function create(Request $request){
        return view('application')->with('listing',$listing);
    }
}
