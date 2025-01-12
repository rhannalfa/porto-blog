<?php

use App\Models\Post;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About'], ['nama' => 'Raihan Alfarizi']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog'], ['posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){

    return view('post', ['title' => 'Single Post', 'post' =>$post]);
});       

Route::get('/authors/{user:username}', function(User $user){
    return view('posts', ['title' => count($user->posts) . ' Articels by ' . $user->name,'posts' => 
    $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', ['title' => ' Articels in: ' . $category->name,'posts' => 
    $category->posts]);
});         

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact'], ['nama' => 'Raihan Alfarizi'], ['email' => 'rhannalfa@gmail.com']);
});