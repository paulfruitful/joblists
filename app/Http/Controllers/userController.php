<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\Welcome;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Notification;

class userController extends Controller
{
    //Gets the register page
    public function create(){
        return view('user.register');
    }
    //Store users profile
    public function store(Request $request){
     $formData=$request->validate(
        [
          'name'=>['required','min:4'],
          'email'=>['required','email',Rule::unique('users','email')],
          'password'=>['required','min:6']
        ]
        );
        $formData['password']=bcrypt($formData['password']);
        $user=User::create($formData);
        Notification::send($user,new Welcome($user->name));
  
        auth()->login($user);
     return redirect('/')->with('success','Account Created Successfully');
    }
    //User logout function
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success','Account Created Successfully');
    }
    // User login fuction
    public function login(Request $request){
        $form_data=$request->validate(
            [
                'email'=>['email','required'],
                'password'=>['required','min:6']
            ]
            );
            if(auth()->attempt($form_data)){
                $request->session()->regenerate();
                return redirect('/')->with('success','Account Logged In Successfully');

            }
            return back()->withErrors(['email'=>'Invalid Login Details'])->onlyInput('email');
        
    }
}
