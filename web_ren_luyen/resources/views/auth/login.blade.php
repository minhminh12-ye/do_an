<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> <!-- Thêm dòng này -->
</head>
<body>
    <form method="POST" action="{{ route('login.process') }}" class="login-form">
    @csrf
    <input type="email" name="email" placeholder="Email" class="input-field" required>
    <input type="password" name="password" placeholder="Mật khẩu" class="input-field" required>
    <button type="submit" class="login-btn">Đăng nhập</button>
</form>
</body>
</html>
