<?php

namespace Database\Seeders;

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
            \App\Models\User::truncate();
            \App\Models\Post::truncate();
            \App\Models\Category::truncate();

        

        $post = \App\Models\Post::factory(5)->create();
       


            
    }
}
