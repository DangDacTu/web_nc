<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoleSeeder::class,        
            UserSeeder::class,        
            CategorySeeder::class,   
            ProductSeeder::class,    
            CustomerSeeder::class,   
            OrderSeeder::class,       
            FeedbackSeeder::class,   
        ]);
    }
}