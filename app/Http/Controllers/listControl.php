<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class listControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Cache::remember('listings',60*60*24,function(){
             return Listing::latest()->paginate(9);
            });
        return view('listings',['list'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_values=$request->validate([
            'company'=>'required',
            'title'=>'required',
            'description'=>'required',
            'email'=>['required','email'],
            'website'=>'required',
            'tags'=>'required',
            'location'=>'required'
        ]);
        if($request->hasFile('photo')){
            $form_values['photo']=$request->file('photo')->store('photo','public');
        }
        $form_values['user_id']=auth()->id();
        Listing::create($form_values);
        return redirect('/')->with('Success','You Have Successfully Created A Listing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //
        return view('listing',[
            'list'=>$listing
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        if($listing->user_id!=auth()->id()){
            return abort(403);
        }
        return view('edit',['listing'=>$listing]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        
        $form_values=$request->validate([
            'company'=>'required',
            'title'=>'required',
            'description'=>'required',
            'website'=>'required',
            'tags'=>'required',
            'location'=>'required'
        ]);

        $listing->update($form_values);
        return redirect('/'.$listing->id)->with('Success','You Have Successfully Updated The Listing');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        $listing->destroy($listing->id);
        return redirect('/')->with('Success','You have successfully deleted a listing');
    }
}
