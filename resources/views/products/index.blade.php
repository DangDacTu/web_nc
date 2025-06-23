@extends('layouts.app')

    @section('title', 'Product List')

    @section('content')
        <h1 class="text-2xl font-bold mb-4">Danh sách sản phẩm</h1>
        <a href="{{ route('products.create') }}" class="bg-blue-500 text-white px-4 py-2 mb-4">Thêm sản phẩm</a>
        @if ($products->isEmpty())
            <p>Không có sản phẩm nào.</p>
        @else
            <ul>
                @foreach ($products as $product)
                    <li>{{ $product->name }} - {{ $product->price }} VND</li>
                @endforeach
            </ul>
        @endif
    @endsection