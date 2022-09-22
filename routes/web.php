<?php

use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\logController;
use App\Http\Controllers\Commentcontroller;
use App\Http\Controllers\shop;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


use Spatie\YamlFrontMatter\YamlFrontMatter;

use function PHPUnit\Framework\fileExists;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* affichage d'accuielle */
Route::get('/', [Postcontroller::class,'index'])->name("home");


/*affichage d'un post quand on clique et d'un register et un recherche tous dans post controller */
Route::get('post/{post:path}', [Postcontroller::class,"show"]);
// Admin
Route::post('admin/posts', [AdminController::class, 'store'])->middleware('admin');
Route::get('admin/posts/create', [AdminController::class, 'create'])->middleware('admin');
Route::get('admin/posts', [AdminController::class, 'index'])->middleware('admin');
Route::get('admin/posts/{post}/edit', [AdminController::class, 'edit'])->middleware('admin');
Route::PATCH('admin/posts/{post}', [AdminController::class, 'updat']);
Route::delete('admin/posts/{post}', [AdminController::class, 'destroy'])->middleware('admin');


Route::get('user/shop/{user}', [shop::class,'index']);

Route::post('user/shop/add', [shop::class,'create']);



Route::get('register', [RegisterController::class,'create'])->middleware('guest');
Route::POST('register', [RegisterController::class,'store'])->middleware('guest');

Route::post("posts/{post:path}/comment", [Commentcontroller::class,'store'])->middleware('auth');
Route::get('login',[logController::class,"create"])->middleware('guest');

Route::Post('login',[logController::class,'login'])->middleware('guest');
Route::get('logout',[logController::class,'logout'])->middleware('auth');





/*Route::get('categories/{category:name}', function (Category $category){
return view('welcome',[
    'posts'=> $category->post,
    'categories'=>Category::all(),
    'currentcategory'=>$category
    
]);
});*/

/*
Route::get('authors/{author:username}', function (User $author){
    return view('welcome',[
        'posts'=> $author->post,
        'categories'=>Category::all()
    ]);
    });*/
