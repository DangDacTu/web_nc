<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\Product;

  class ProductController extends Controller
  {
      public function index()
      {
          $products = Product::all();
          return view('products.index', compact('products'));
      }

      public function create()
      {
          return view('products.create');
      }

      public function store(Request $request)
      {
          $request->validate([
              'name' => 'required|string|max:255',
              'price' => 'required|numeric',
              'category_id' => 'required|exists:categories,id',
          ]);

          Product::create($request->all());
          return redirect()->route('products.index')->with('success', 'Sản phẩm đã được thêm.');
      }
  }