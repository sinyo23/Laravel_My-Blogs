<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
          'title' => 'Judul Post Pertama',
          'slug' => 'judul-post-pertama',
          'excerpt' => 'Lorem ipsum dolor sit amet 1',
          'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptatum quia dignissimos, corrupti nemo quod maiores quam aliquid similique rem sed, illo vero deserunt possimus deleniti? Sit, eos. Ipsam velit aperiam eum consequatur architecto maxime minima laudantium, voluptates officia in inventore, facere repellat debitis necessitatibus vero assumenda, ex minus cupiditate.'
          ],
          [
          'title' => 'Judul Post Ke Dua',
          'slug' => 'judul-post-dua',
          'excerpt' => 'Lorem ipsum dolor sit amet 2',
          'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptatum quia dignissimos, corrupti nemo quod maiores quam aliquid similique rem sed, illo vero deserunt possimus deleniti? Sit, eos. Ipsam velit aperiam eum consequatur architecto maxime minima laudantium, voluptates officia in inventore, facere repellat debitis necessitatibus vero assumenda, ex minus cupiditate.'
          ],
          [
          'title' => 'Judul Post Ke Tiga',
          'slug' => 'judul-post-tiga',
          'excerpt' => 'Lorem ipsum dolor sit amet 3',
          'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis voluptatum quia dignissimos, corrupti nemo quod maiores quam aliquid similique rem sed, illo vero deserunt possimus deleniti? Sit, eos. Ipsam velit aperiam eum consequatur architecto maxime minima laudantium, voluptates officia in inventore, facere repellat debitis necessitatibus vero assumenda, ex minus cupiditate.'
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
