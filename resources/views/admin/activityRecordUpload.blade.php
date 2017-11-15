@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{--  <script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>  --}}
@section('main')
<h3 id="q1">活動紀實</h3>
<hr>
<br>
分類選擇
<select name="" id="" class="form-control col-2">
    @foreach ($albums as $album)
        <option value={{ $album->id }}> {{$album->className}} </option>
    @endforeach
</select>
<br>

多張上傳
<form action={{ url('/webAdmin/activity-record/upload') }} method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input name="userfile[]" type="file" multiple="" /><br>
    <br>
    <input type="submit" class="btn btn-primary" value="上傳" />
</form>
@endsection