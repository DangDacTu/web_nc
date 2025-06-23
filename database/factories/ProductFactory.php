<?php

   namespace Database\Factories;

   use Illuminate\Database\Eloquent\Factories\Factory;

   class ProductFactory extends Factory
   {
       public function definition()
       {
           return [
               'name' => fake()->word() . ' Hoa',
               'price' => fake()->randomFloat(2, 100000, 500000),
               'stock' => fake()->numberBetween(10, 100),
               'image' => '/images/' . fake()->word() . '.jpg',
               'category_id' => \App\Models\Category::factory(),
           ];
       }
   }