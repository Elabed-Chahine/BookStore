<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\Category;
use \App\Models\User;
use \App\Models\Panier;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                
            "path"=> $this->faker->sentence(),
            'User_id'=> User::Factory(),
            "Category_id"=> Category::Factory(),
            "title"=> $this->faker->sentence(),
            "excerpt"=> $this->faker->paragraph(2),
            "body"=>$this->faker->paragraph(5), 
            "price"=>$this->faker->randomNumber()
        ];
    }
}
