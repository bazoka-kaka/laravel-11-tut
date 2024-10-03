<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
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
    }

    public static function find($slug): array {
        $post = Arr::first(self::all(), fn($post) => $post['slug'] == $slug);

        if(!$post) {
            abort(404);
        }

        return $post;
    }
}