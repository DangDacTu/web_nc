<?php

   namespace Database\Seeders;

   use Illuminate\Database\Seeder;
   use App\Models\Product;

   class ProductSeeder extends Seeder
   {
       public function run()
       {
           Product::create(['name' => 'Hoa Hồng Đỏ', 'price' => 150000, 'stock' => 50, 'image' => '/images/rose.jpg', 'category_id' => 1]);
           Product::create(['name' => 'Hoa Cẩm Chướng Trắng', 'price' => 120000, 'stock' => 30, 'image' => '/images/carnation.jpg', 'category_id' => 2]);
       }
   }