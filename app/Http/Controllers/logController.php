<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Validation\ValidationException;

class logController extends Controller
{


    public function  login()
    {
        $user = request()->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);
        if (auth()->attempt($user))
            {return redirect("/")->with('success', "log in succeeded");}
    


           return back()
           ->withInput()
           ->withErrors((['email' => 'Your provided credentials could not be verified.']));
    }

    public function  create()
    {


        return view('/login');
    }


    public function  logout()
    {
        auth()->logout();
        return redirect("/")->with('success', "logout succeeded");
    }
}
