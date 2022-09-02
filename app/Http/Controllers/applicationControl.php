<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class applicationControl extends Controller
{
    public function create(Listing $listing){
        
        return view('application')->with('listing',$listing);
    }
    public function  store(Request $request){
        dd($request->listing);
        $form_data=$request->validate([
           'name'=>'required',
           'email'=>'required',
           'coverletter'=>'required',
           'cv'=>'required',
           'listing_id'=>'required'
        ]);
    }
}
