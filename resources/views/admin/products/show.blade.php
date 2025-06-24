<!DOCTYPE html>
<html>
<head>
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Chi tiết sản phẩm</h1>
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Tên:</strong> {{ $product->name }}</p>
        <p><strong>Giá:</strong> {{ number_format($product->price, 0, ',', '.') }} VNĐ</p>
        <p><strong>Danh mục:</strong> {{ $product->category->name ?? 'Chưa có' }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Quay lại</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>