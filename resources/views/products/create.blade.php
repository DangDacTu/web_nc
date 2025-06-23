@extends('layouts.app')

    @section('title', 'Add Product')

    @section('content')
        <h1 class="text-2xl font-bold mb-4">Thêm sản phẩm mới</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div>
                <label>Tên sản phẩm</label>
                <input type="text" name="name" class="border p-2 w-full">
            </div>
            <div>
                <label>Giá</label>
                <input type="number" name="price" class="border p-2 w-full" step="0.01">
            </div>
            <div>
                <label>Danh mục</label>
                <select name="category_id" class="border p-2 w-full">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 mt-4">Lưu</button>
        </form>
    @endsection