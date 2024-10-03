<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Yehezkiel Wiradhika', 'title' => 'About']);
});

Route::get('/posts', function() {
    return view('posts', [
        'title' => 'Posts', 
        'posts' => Post::all() 
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    return view('post', [
        'title' => 'Single Post', 
        'post' => Post::find($slug)
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
