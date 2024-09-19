<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/posts', function () {
    return view('posts', [
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
