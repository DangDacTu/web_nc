# 🌸 Ứng dụng Web Quản Lý Cửa Hàng Hoa

## Họ và tên sinh viên : Nguyễn Thị Huyền Trang 
## Mã sinh viên : 23010181
---

## 1. Giới thiệu

Dự án xây dựng một ứng dụng web quản lý cửa hàng hoa sử dụng framework **Laravel**.
Ứng dụng gồm ba đối tượng chính:

- `User`: Quản lý người dùng và phân quyền (admin/user).
- `Product`: Quản lý sản phẩm (tên, giá, danh mục).
- `Order`: Quản lý đơn hàng, bao gồm chức năng **CRUD**.

---

## 2. Yêu cầu và phân tích

- **Framework**: Laravel (với Breeze cho xác thực).
- **Đối tượng chính**:
  - `User`: Đăng nhập, phân quyền.
  - `Product`: Tên, giá, danh mục.
  - `Order`: Gắn với user và product.

- **Chức năng chính**:
  - Đăng nhập / xác thực (authentication + authorization).
  - CRUD cho `Order`.

- **Security**:
  - CSRF protection.
  - XSS prevention.
  - Data validation.
  - Session & cookies.
  - SQL Injection bảo vệ thông qua query builder.

---

## 3. Thiết kế và triển khai

- **Cơ sở dữ liệu**: Sử dụng Aiven for MySQL, migrate qua Eloquent ORM.

### Cấu trúc bảng:

- `users`: `id`, `name`, `email`, `password`, `role`, `email_verified_at`, `timestamps`.
- `products`: `id`, `name`, `price`, `category_id`, `timestamps`.
- `orders`: `id`, `user_id`, `product_id`, `quantity`, `status`, `timestamps`.

### Controllers:

- `LoginController`: Xử lý đăng nhập / đăng xuất.
- `OrderController`: CRUD đơn hàng.

### Routes:

- Định nghĩa trong `routes/web.php`.
- Áp dụng `middleware: auth` và `role`.

### View:

- Blade Template Engine.
- Giao diện kế thừa từ `layouts/app.blade.php`.

---
