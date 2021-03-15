<form action="{{route('postFile')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="myfile">
    <input type="submit">
</form>