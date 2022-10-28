<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        // User::create([
        //     'name'=> 'yusoff',
        //     'email'=> 'yusoff@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        //       User::create([
        //     'name'=> 'Aiman',
        //     'email'=> 'aiman@gmail.com',
        //     'password'=> bcrypt('12345')
        // ]);

        Category::create([
            'name' =>'Web Programming',
            'slug'=> 'web-programming'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug'=> 'judul-pertama',
        //     'excerpt'=> 'Lorem',
        //     'body'=> 'Testing',
        //     'category_id'=>1,
        //     'user_id'=>1
            
        // ]);

        //         Post::create([
        //     'title'=> 'Judul Kedua',
        //     'slug'=> 'judul-kedua',
        //     'excerpt'=> 'Lorem',
        //     'body'=> 'Testing',
        //     'category_id'=>1,
        //     'user_id'=>1
            
        // ]);

        
        //         Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'slug'=> 'judul-ketiga',
        //     'excerpt'=> 'Lorem',
        //     'body'=> 'Testing',
        //     'category_id'=>2,
        //     'user_id'=>1
            
        // ]);


                
        //         Post::create([
        //     'title'=> 'Judul Keempat ',
        //     'slug'=> 'judul-keempat',
        //     'excerpt'=> 'Lorem',
        //     'body'=> 'Testing',
        //     'category_id'=>2,
        //     'user_id'=>2
            
        // ]);
    }
}
