<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Post;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        // User::create([
        //   'name' => 'Akbar Sinyo',
        //   'username' => 'akbarsinyo',
        //   'email' => 'akbar@gmail.com',
        //   'password' => bcrypt('root')
        //   ]);
          
        // User::create([
        //   'name' => 'Sinyo',
        //   'username' => 'sinyotahe',
        //   'email' => 'sinyo@gmail.com',
        //   'password' => bcrypt('12345')
        //   ]);
        
        User::factory(5)->create();
        
        Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
          ]);
        
        Category::create([
          'name' => 'Programing',
          'slug' => 'programing'
        ]);
        
        Category::create([
          'name' => 'Web Desain',
          'slug' => 'web-desain'
        ]);
        
        Post::factory(20)->create();
    }
}
