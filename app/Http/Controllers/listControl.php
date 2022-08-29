<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class listControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Listing::latest()->paginate(3);
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
        return redirect('/');
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
        if($listing->user_id==auth()->id())
        $form_values=$request->validate([
            'company'=>'required',
            'title'=>'required',
            'description'=>'required',
            'email'=>['required','email'],
            'website'=>'required',
            'tags'=>'required',
            'location'=>'required'
        ]);

        $listing->update($form_values);
        return redirect('/'.$listing->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
