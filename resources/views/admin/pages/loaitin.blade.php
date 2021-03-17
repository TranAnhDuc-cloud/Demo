@extends('admin.layout.master')
@section('title','Loại Tin')
@section('NoiDung')

<h2>Loai Tin Trong Admin</h2>
{{-- đánh dấu comment --}}
<!-- In Tham số từ controller lấy từ route qua views -->
 {{$tllt}}
 {!!$tllt!!}
 {!! isset($tllt)? $tllt : "Khong co " !!}
</br>
 @for($i=1;$i<=10;$i++)
     {{$i.""}}
 @endfor
 </br>

@endsection