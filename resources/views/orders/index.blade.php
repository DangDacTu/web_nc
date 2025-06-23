@extends('layouts.app')

  @section('title', 'Danh sách Đơn hàng')

  @section('content')
      <h1 class="text-2xl font-bold mb-4">Danh sách Đơn hàng</h1>
      @if (auth()->user()->role === 'admin')
          <a href="{{ route('orders.create') }}" class="bg-blue-500 text-white p-2 rounded mb-4">Thêm Đơn hàng</a>
      @endif
      @if ($orders->isEmpty())
          <p>Không có đơn hàng nào.</p>
      @else
          <table class="w-full border-collapse">
              <thead>
                  <tr class="bg-gray-200">
                      <th class="border p-2">ID</th>
                      <th class="border p-2">Người dùng</th>
                      <th class="border p-2">Tổng tiền</th>
                      <th class="border p-2">Trạng thái</th>
                      <th class="border p-2">Hành động</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($orders as $order)
                      <tr>
                          <td class="border p-2">{{ $order->id }}</td>
                          <td class="border p-2">{{ $order->user->name }}</td>
                          <td class="border p-2">{{ number_format($order->total) }} VNĐ</td>
                          <td class="border p-2">{{ $order->status }}</td>
                          <td class="border p-2">
                              @if (auth()->user()->role === 'admin')
                                  <a href="{{ route('orders.edit', $order) }}" class="text-blue-500 mr-2">Sửa</a>
                                  <form action="{{ route('orders.destroy', $order) }}" method="POST" class="inline">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="text-red-500" onclick="return confirm('Bạn có chắc?')">Xóa</button>
                                  </form>
                              @endif
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      @endif
  @endsection