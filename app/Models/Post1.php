<?php
namespace App\Models;


use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post {


public $title;
public $excerpt;
public $date;
public $body;
public $path;

public function __construct($title,$excerpt,$date,$body,$path="")
{
 $this->title= $title;             
 $this->excerpt= $excerpt;
 $this->date= $date;
 $this->body= $body;
 $this->path= $path;
}






public static function all() {
 $files= file::files(resource_path("posts/"));

 

 return cache()->remember('post.all', now()->addHour(1),function () use($files){
        return collect($files)
    ->map(function($files){

    $document = YamlFrontMatter::parseFile(("$files"));
        
    return new Post(
        $document->title,
        $document->excerpt,
        $document->date,
        $document->body(),
        $document->path
    );

}
)
->sortByDesc("date") ;   

}); 
 

/* return array_map(function($file)  { 
     return $file->getContents();}, $files );*/
}






public static function find($slug){

    $post=Post::all()->firstWhere('path',$slug);


   /// if( $post== null  )
   // throw new ModelNotFoundException();
    

       return $post ;

   

}}