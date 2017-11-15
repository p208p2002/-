@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{--  <script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>  --}}
@section('main')
<h3 id="q1">活動紀實</h3>
<small class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('#') }} role="button">上傳相片</a>
{{--  <a class="btn btn-warning" href="#" role="button">編輯消息</a>  --}}
<a class="btn btn-danger" href={{ url('#') }} role="button">刪除相片</a>
<br><br>
<a class="btn btn-info" href={{ url('#') }} role="button">管理相簿</a>
@endsection