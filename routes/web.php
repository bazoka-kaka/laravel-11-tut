<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Yehezkiel Wiradhika', 'title' => 'About']);
});

Route::get('/posts', function() {
    return view('posts', [
        'title' => 'Posts', 
        'posts' => [
            [
                'id' => 1,
                'slug' => 'post-title-1',
                'title' => 'Post Title 1',
                'author' => 'Author 1',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, illum, autem, tempora accusamus accusantium repellendus temporibus nisi non libero eaque porro neque incidunt alias iste voluptatibus error ducimus repellat ea?',
                'date' => 'September, 12th 2024'
            ],
            [
                'id' => 2,
                'slug' => 'post-title-2',
                'title' => 'Post Title 2',
                'author' => 'Author 2',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, illum, autem, tempora accusamus accusantium repellendus temporibus nisi non libero eaque porro neque incidunt alias iste voluptatibus error ducimus repellat ea?',
                'date' => 'September, 10th 2024'
            ],
            [
                'id' => 3,
                'slug' => 'post-title-3',
                'title' => 'Post Title 3',
                'author' => 'Author 3',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, illum, autem, tempora accusamus accusantium repellendus temporibus nisi non libero eaque porro neque incidunt alias iste voluptatibus error ducimus repellat ea?',
                'date' => 'September, 14th 2024'
            ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
            [
                'id' => 1,
                'slug' => 'post-title-1',
                'title' => 'Post Title 1',
                'author' => 'Author 1',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, illum, autem, tempora accusamus accusantium repellendus temporibus nisi non libero eaque porro neque incidunt alias iste voluptatibus error ducimus repellat ea?',
                'date' => 'September, 12th 2024'
            ],
            [
                'id' => 2,
                'slug' => 'post-title-2',
                'title' => 'Post Title 2',
                'author' => 'Author 2',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, illum, autem, tempora accusamus accusantium repellendus temporibus nisi non libero eaque porro neque incidunt alias iste voluptatibus error ducimus repellat ea?',
                'date' => 'September, 10th 2024'
            ],
            [
                'id' => 3,
                'slug' => 'post-title-3',
                'title' => 'Post Title 3',
                'author' => 'Author 3',
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam, illum, autem, tempora accusamus accusantium repellendus temporibus nisi non libero eaque porro neque incidunt alias iste voluptatibus error ducimus repellat ea?',
                'date' => 'September, 14th 2024'
            ]
    ];

    $post = Arr::first($posts, function($post) use($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
