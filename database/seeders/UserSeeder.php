<?php

  namespace Database\Seeders;

  use Illuminate\Database\Seeder;
  use App\Models\User;
  use Illuminate\Support\Facades\Hash;
  use Illuminate\Support\Facades\DB;

  class UserSeeder extends Seeder
  {
      public function run()
      {
          DB::statement('SET FOREIGN_KEY_CHECKS=0;');
          User::truncate(); // Xóa toàn bộ dữ liệu cũ
          DB::statement('SET FOREIGN_KEY_CHECKS=1;');

          User::create([
              'name' => 'Admin User',
              'email' => 'admin@flowershop.com',
             'password' => Hash::make(env('DEFAULT_ADMIN_PASSWORD', '123456')),
              'role' => 'admin',
              'email_verified_at' => now(),
          ]);
          User::create([
              'name' => 'Normal User',
              'email' => 'user@flowershop.com',
               'password' => Hash::make(env('DEFAULT_USER_PASSWORD', '123456')),
              'role' => 'user',
              'email_verified_at' => now(),
          ]);
      }
  }