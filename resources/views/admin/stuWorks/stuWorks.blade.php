@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
/*
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
    */
</script>
@section('main')
<h3 id="q1">學生成果展示</h3>
<small class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ action('Admin\stuWorksController@create') }} role="button">上傳作品</a>
<a class="btn btn-info" href={{ url('webAdmin/#') }} role="button">管理作品</a>
<a class="btn btn-success" href={{ action('Admin\stuWorksController@mfclass') }} role="button">管理分類</a>
@endsection