<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

use App\Models\Panier;

use App\models\User;
class shop extends Controller
{
    //
    public function index(User $user){
        
        return view('shop.index',
    ['paniers' => $user->paniers]);
    }


    public function create(){
        
        $attribute = request()->validate([
            'user_id' =>['required'],
            'post_id' =>['required'],
            'price'=>'required'

        ]);
        
        Panier::create($attribute);
        return back()->with('success', 'Product added to cart!');
    }
}
