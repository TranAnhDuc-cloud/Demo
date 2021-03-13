
<form method="POST" action="{{route('postForm')}}">
    @csrf
    ...
    <label for="ten">Nhập Tên</label>
    <input type="text" name="HoTen">
    <label for="tuoi">Nhập Tuổi</label>
    <input type="text" name="Tuoi">
    <input type="submit">
    
</form>