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

{{--    --}}
@if (session()->has('status')) 
    @if(session('status') == '0' )
        <div class="alert alert-success" role="alert">
        上傳成功
        </div>
    @else
        <div class="alert alert-danger" role="alert">
        沒有選擇檔案!
        </div>
    @endif
@endif


<form action={{ url('/webAdmin/activity-record/upload') }} method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

    相簿選擇<br>
    <select name="albumid" id="" class="form-control col-2">
    @foreach ($albums as $album)
        <option value={{ $album->id }}> {{$album->className}} </option>
    @endforeach
    </select>
    <br>

    多張上傳<br>
    <input name="userfile[]" type="file" multiple="" /><br>
    <br>
    <input type="submit" class="btn btn-primary" value="上傳" />
</form>
@endsection