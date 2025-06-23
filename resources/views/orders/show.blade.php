@extends('layouts.app')

@section('title', 'Danh sách Đơn hàng')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Danh sách Đơn hàng</h1>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b-2 border-gray-300">ID</th>
                <th class="py-2 px-4 border-b-2 border-gray-300">Người dùng</th>
                <th class="py-2 px-4 border-b-2 border-gray-300">Tổng tiền</th>
                <th class="py-2 px-4 border-b-2 border-gray-300">Trạng thái</th>
                <th class="py-2 px-4 border-b-2 border-gray-300">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $order->id }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $order->user->name }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ number_format($order->total) }} VNĐ</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $order->status }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">
                        <a href="{{ route('orders.show', $order->id) }}" class="text-blue-500 hover:underline">Xem</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection