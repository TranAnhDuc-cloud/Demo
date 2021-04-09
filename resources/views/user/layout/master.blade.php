
@include('user.layout.header')

    <div class="container" style="padding-top: 80px">
        @if (Auth::check())
        <marquee style="color: red; padding-top:10px">
            Chào Mừng {{Auth::user()->name}}
            Bạn Đang Đăng Nhập Với Quyền
            @if(Auth::user()->level==1)
                {{"Admin"}}
                @elseif(Auth::user()->level=2)
                    {{"Thành Viên"}} 
            @endif
        @endif
        </marquee>
        <div class="content">
            @yield('content')
        </div>
    </div>

    
@include('user.layout.footer')
