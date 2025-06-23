<?php

   namespace Database\Seeders;

   use Illuminate\Database\Seeder;
   use App\Models\Category;

   class CategorySeeder extends Seeder
   {
       public function run()
       {
           Category::create(['name' => 'Hoa Hồng', 'description' => 'Hoa biểu tượng của tình yêu']);
           Category::create(['name' => 'Hoa Cẩm Chướng', 'description' => 'Hoa mang ý nghĩa kiêu sa']);
       }
   }