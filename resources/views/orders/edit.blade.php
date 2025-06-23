@extends('layouts.app')

  @section('title', 'Sửa Đơn hàng')

  @section('content')
      <h1 class="text-2xl font-bold mb-4">Sửa Đơn hàng</h1>
      <form action="{{ route('orders.update', $order) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="mb-4">
              <label class="block">Người dùng</label>
              <select name="user_id" class="border p-2 w-full">
                  @foreach (\App\Models\User::all() as $user)
                      <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="mb-4">
              <label class="block">Tổng tiền</label>
              <input type="number" name="total" value="{{ $order->total }}" class="border p-2 w-full" required>
          </div>
          <div class="mb-4">
              <label class="block">Trạng thái</label>
              <select name="status" class="border p-2 w-full">
                  <option value="pending" {{ $order->status == 'pending' ? 'selected' : '' }}>Pending</option>
                  <option value="completed" {{ $order->status == 'completed' ? 'selected' : '' }}>Completed</option>
              </select>
          </div>
          <button type="submit" class="bg-blue-500 text-white p-2 rounded">Cập nhật</button>
      </form>
  @endsection