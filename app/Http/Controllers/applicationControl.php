<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class applicationControl extends Controller
{
    public function create(Listing $listing){
        
        return view('application')->with('listing',$listing);
    }
}
