<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        //Truncating the table
//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        User::create([
            'name' => 'Admin',
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'permissions' => 'admin',
            'password' => bcrypt('admin'),
            'remember_token' => 'mkrNh3DYK1',
        ]);

        User::factory(300)->create();

        $array = ['Game', 'CD', 'Music'];
        $i = 0;
        foreach($array as $arr){
            Category::create([
                'name' => $arr,
                'slug' => $arr,
                'thumbnail' => $arr,
            ]);
        }

        Post::factory(300)->create();
    }
}
