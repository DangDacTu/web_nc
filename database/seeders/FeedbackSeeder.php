<?php

  namespace Database\Seeders;

  use Illuminate\Database\Seeder;
  use App\Models\Feedback;

  class FeedbackSeeder extends Seeder
  {
      public function run()
      {
          Feedback::create(['user_id' => 1, 'product_id' => 1, 'comment' => 'Rất đẹp!', 'rating' => 5]);
          Feedback::create(['user_id' => 2, 'product_id' => 2, 'comment' => 'Tốt', 'rating' => 4]);
      }
  }