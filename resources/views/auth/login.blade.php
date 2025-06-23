<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h2>Đăng nhập</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email:</label>
            <input type="email" name="email" required autofocus>
        </div>

        <div>
            <label>Mật khẩu:</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
</body>
</html>
