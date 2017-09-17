@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#block1-menuItem4").addClass("active");    
    });
</script>
@section('main')
<h3 id="q1">課堂作業</h3>
<small id="passwordHelpInline" class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('webAdmin/homework/create') }} role="button">建立作業</a>
<a class="btn btn-warning" href="#" role="button">修改作業</a>
<a class="btn btn-danger" href="#" role="button">刪除作業</a>
<a class="btn btn-success" href="#" role="button">批改作業</a>
@endsection

