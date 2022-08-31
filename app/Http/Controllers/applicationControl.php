<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicationControl extends Controller
{
    public function create(){
        return view('application')->with('listing',$listing);
    }
}
