<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\application;
use Illuminate\Http\Request;

class applicationControl extends Controller
{
    //It leads to the view containing the application form
    public function create(Listing $listing){
        
        return view('application')->with('listing',$listing);
    }
    //It is the controller that collects the data in from the application form view and stores it in the database
    public function  store(Request $request,Listing $listing){
        //It validates the form data 
        $form_data=$request->validate([
           'name'=>'required',//It makes sure the name input was filled
           'email'=>'required',
           'coverletter'=>'required',
           'cv'=>'required',
           'portfolio'=>'required',
           'listing_id'=>'required'
        ]);
       //It checks whether a file was added on the form and saves it to the public/cv folder in the storage/app directory 
        if($request->hasFile('cv')){
            $form_data['cv']=$request->file('cv')->store('cv','public');
        }

        application::create($form_data);
        return redirect('/')->with('Success', 'You Have Successfully Applied Goodluck!');
    }
}
