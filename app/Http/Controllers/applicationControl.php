<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\application;
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
           'portfolio'=>'required'
        ]);

        $form_data['lising_id']=$request->listing;

        if($request->hasFile('cv')){
            $form_data['cv']=$request->file('cv')->store('cv','public');
        }
        application::create($form_data);
        return redirect('/')->with('Success', 'You have successfully applied! Goodluck!');
    }
}
