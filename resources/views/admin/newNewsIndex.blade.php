@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>
@section('main')
<h3 id="q1">最新消息</h3>
<small id="passwordHelpInline" class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('webAdmin/newNews/create') }} role="button">發佈消息</a>
<a class="btn btn-warning" href="#" role="button">編輯消息</a>
<a class="btn btn-danger" href="#" role="button">刪除消息</a>
@endsection