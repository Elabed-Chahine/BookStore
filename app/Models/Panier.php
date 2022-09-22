<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $guarded = [""];
    
    use HasFactory;



    public function product()
    {
        return $this->belongsTo(Post::class,'post_id');
    }

    public function buyer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
