<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;


    protected $guarded = [""];
    protected $with = ['author', 'category','comments'];



    public function scopefilter($requette, array $filters)
    {


        $requette->when($filters['search'] ?? false, fn ($requette, $search) =>
        $requette->where(
            fn ($requette) =>
            $requette->Where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%')
        ));


        $requette
            ->when($filters['category'] ?? false, fn ($requette, $category) =>
            $requette->whereHas(
                'category',
                fn ($requette) =>
                $requette->where('name', $category)
            ));


        $requette
            ->when($filters['author'] ?? false, fn ($requette, $author) =>

            $requette->whereHas('author', fn ($requette) => $requette->where('username', $author)));
    }






    public function comments()
    {
        return $this->hasMany(Comment::class);
    }



    public function category()
    {
        return $this->belongsTo(Category::class, 'Category_id', 'id'); // idModele
    }
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id', 'id'); // idModele
    }

   /* public function paniers()
    {
        return $this->hasMany(Panier::class); // idModele
    }*/

    

}
