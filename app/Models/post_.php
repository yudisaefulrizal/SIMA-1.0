<?php

namespace App\Models;

use function PHPUnit\Framework\returnSelf;

class post
{
    private static $blog_posts = [

        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ad earum dolorum eos eveniet nemo aliquam architecto amet excepturi deserunt?"

        ],

        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "ys",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ad earum dolorum eos eveniet nemo aliquam architecto amet excepturi deserunt?"

        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
