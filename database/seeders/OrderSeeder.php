<?php

   namespace Database\Seeders;

   use Illuminate\Database\Seeder;
   use App\Models\Order;

   class OrderSeeder extends Seeder
   {
       public function run()
       {
           Order::create(['user_id' => 1, 'total' => 150000, 'status' => 'pending']);
           Order::create(['user_id' => 2, 'total' => 120000, 'status' => 'completed']);
       }
   }