<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function create(){
        return view('register.create');

    }

    public function store(){
       $attributes= request()->validate([
           "email"=> 'required|max:255|unique:Users,email',
        "username"=> 'required|max:255|unique:Users,username',        
        "password"=>'required|max:255',    
            "name"=>'required|max:255|unique:Users,name',        
        ]);

        
        
        $user= User::create($attributes);
        
       auth()->login($user);
       return redirect("/")->with('success','your account has been created');
    }
}
