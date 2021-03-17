<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Đăng Nhập</title>
</head>
<body>
<form action="{{route('postLogin')}}" method="post">
@csrf
<label for="">Tên Đăng Nhập</label>
<input type="text" name="username">
<br>
<br>
<label for="">Mật Khẩu</label>
<input type="password" name="password">
<br>
<br>
<input type="submit" name="submit">
</form>
</body>
</html>