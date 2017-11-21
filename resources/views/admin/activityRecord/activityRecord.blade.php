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
<a class="btn btn-primary" href={{ url('webAdmin/activity-record/upload') }} role="button">上傳相片</a>

{{--  先選擇要操作的相簿  --}}
<a class="btn btn-info" href={{ url('webAdmin/activity-record/select-album') }} role="button">管理相簿</a>
<a class="btn btn-success" href={{ url('webAdmin/activity-record/manager-filter') }} role="button">新增/刪除相簿</a>
<br><br>

@endsection