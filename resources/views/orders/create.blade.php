@extends('layouts.app')

  @section('title', 'Thêm Đơn hàng')

  @section('content')
      <h1 class="text-2xl font-bold mb-4">Thêm Đơn hàng</h1>
      <form action="{{ route('orders.store') }}" method="POST">
          @csrf
          <div class="mb-4">
              <label class="block">Người dùng</label>
              <select name="user_id" class="border p-2 w-full">
                  @foreach (\App\Models\User::all() as $user)
                      <option value="{{ $user->id }}">{{ $user->name }}</option>
                  @endforeach
              </select>
          </div>
          <div class="mb-4">
              <label class="block">Tổng tiền</label>
              <input type="number" name="total" class="border p-2 w-full" required>
          </div>
          <div class="mb-4">
              <label class="block">Trạng thái</label>
              <select name="status" class="border p-2 w-full">
                  <option value="pending">Pending</option>
                  <option value="completed">Completed</option>
              </select>
          </div>
          <button type="submit" class="bg-blue-500 text-white p-2 rounded">Lưu</button>
      </form>
  @endsection