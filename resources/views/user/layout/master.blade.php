<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    @include('user.layout.header')
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
    
    @include('user.layout.footer')
</body>
</html>