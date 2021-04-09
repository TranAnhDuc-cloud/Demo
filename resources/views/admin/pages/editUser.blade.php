@extends('admin.layout.master')
@section('title','User')
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sửa User
        <small>{{$user->name}}</small>
    </h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('getUser')}}" class="btn btn-warning pt-2 pr-5 pl-5 pb-2">Trở Về Danh Sách</a>
        </div>
        @if ( Session::has('success') )
            <div class="alert alert-success text-center">{{ Session::get('success') }}</div>
            @elseif ( Session::has('error') )
            <div class="alert alert-error">{{ Session::get('error') }}</div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                {{-- @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($error->all() as $err)
                            {{$err}}</br>
                        @endforeach
                    </div>
                @endif --}}
                @if (session('thongbao'))
                    <div class="alert alert-danger">
                        {{session('thongbao')}}
                    </div>
                @endif
                
                <form action="{{URL('Update/'.$user->id)}}" method="POST">
                    {{-- @method('PATCH') --}}
                    @csrf
                    {{csrf_field()}}
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Nhập Username">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Nhập Email">
                    </div>
                    <div class="form-group">
                        <label>Phân Quyền</label>
                        <br>
                        <!-- <input type="number" name="tenloaitin" class="form-control" placeholder="1 or 0"> -->
                        <select name="level" id="level">
                            <option value="1" name="admin">Admin</option>
                            <option value="2" name="user">User</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="form-control btn btn-primary" value="Sửa">
                    </div>
                </form>
                   
                   
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection