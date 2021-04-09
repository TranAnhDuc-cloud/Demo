@extends('admin.layout.master')
@section('title','User')
@section("content")

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Quản Lý User</h1>
    <p class="mb-4">Admin có thể thêm, sửa, xóa các users</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('addUser')}}" class="btn btn-warning pt-2 pr-5 pl-5 pb-2">Thêm User</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        {{$i =1}}
                        @foreach ($data ?? ''  as $item)
                        <tr>
                           
                            <td>{{$i++}}</td>
                            <td>{{$item ->name}}</td>
                            <td>{{$item ->email}}</td>
                            <td>{{$item ->level}}</td>
                            <th><a href="editUser/{{$item->id}}" class="btn btn-primary">Edit</a></th>
                            <th><a href="deleteUser/{{$item->id}}" class="btn btn-danger">Remove</a></th>
                           
                        </tr>
                        @endforeach
                        @if (session('thongbao'))
                        <div class="alert alert-danger">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

@endsection