<?php

namespace App\Models;

// ?belum dibutuhkan karena belum menggunakan database
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [

        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Irfan Raizel Tampan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat illum eius odio possimus temporibus perferendis libero reiciendis perspiciatis. Error quis ipsum ex id reprehenderit odit et labore sed quidem nulla quia fuga laudantium ullam eaque, provident at totam voluptatum. Aspernatur, cumque! Beatae provident dolores ex distinctio fuga nemo eos dolor, pariatur illum ratione modi nobis incidunt culpa delectus ipsam corrupti ipsa esse architecto in voluptatum? Neque quis eveniet culpa sequi pariatur, dolorem, tempora voluptatibus esse earum voluptates recusandae ducimus?"
        ],    [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Apis Ramadhan MantapBetul",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat quaerat illum eius odio possimus temporibus perferendis libero reiciendis perspiciatis. Error quis ipsum ex id reprehenderit odit et labore sed quidem nulla quia fuga laudantium ullam eaque, provident at totam voluptatum. Aspernatur, cumque! Beatae provident dolores ex distinctio fuga nemo eos dolor, pariatur illum ratione modi nobis incidunt culpa delectus ipsam corrupti ipsa esse architecto in voluptatum? Neque quis eveniet culpa sequi pariatur, dolorem, tempora voluptatibus esse earum voluptates recusandae ducimus? Error quis ipsum ex id reprehenderit odit et labore sed quidem nulla quia fuga laudantium ullam eaque, provident at totam voluptatum. Aspernatur, cumque! Beatae provident dolores ex distinctio fuga nemo eos dolor, pariatur illum ratione modi nobis incidunt culpa delectus ipsam corrupti ipsa esse architecto in voluptatum? Neque quis eveniet culpa sequi pariatur, dolorem, tempora voluptatibus esse earum voluptates recusandae ducimus?"
        ]

    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p) {
            if($p['slug'] === $slug){
                $post = $p;
            }
        }
        return $post;        
    }
}
