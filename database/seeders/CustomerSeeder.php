<?php

   namespace Database\Seeders;

   use Illuminate\Database\Seeder;
   use App\Models\Customer;

   class CustomerSeeder extends Seeder
   {
       public function run()
       {
           Customer::create(['user_id' => 1, 'name' => 'Admin User', 'phone' => '0901234567', 'address' => '123 Hoa Street']);
           Customer::create(['user_id' => 2, 'name' => 'Normal User', 'phone' => '0907654321', 'address' => '456 Sen Road']);
       }
   }