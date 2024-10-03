<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Yehezkiel Wiradhika', 'title' => 'About']);
});

Route::get('/blog', function() {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Posts',
        'posts' => [
            [
                'title' => 'Post Title 1',
                'author' => 'Author 1',
                'content' => 'Post Content 1',
                'date' => 'September, 12th 2024'
            ],
            [
                'title' => 'Post Title 2',
                'author' => 'Author 2',
                'content' => 'Post Content 2',
                'date' => 'September, 10th 2024'
            ],
            [
                'title' => 'Post Title 3',
                'author' => 'Author 3',
                'content' => 'Post Content 3',
                'date' => 'September, 14th 2024'
            ]
        ]
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
