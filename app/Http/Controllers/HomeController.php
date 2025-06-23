<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Auth;


  class HomeController extends Controller
  {
      public function index()
      {
          return view('home');
      }

      public function userDashboard()
      {
          return view('user.dashboard');
      }

      public function logout()
      {
          Auth::logout();
          return redirect('/')->with('success', 'Đã đăng xuất.');
      }
  }