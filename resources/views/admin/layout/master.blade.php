<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Admin | Trang Chủ</title>
</head>
<body>
    @include('admin.layout.header')

    <div class="content">
        <h1 >Hello Admin </h1>
        @yield('NoiDung')
    </div>
    
    @include('admin.layout.footer')
</body>
</html>