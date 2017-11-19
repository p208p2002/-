@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        {{--  $("#block1-menuItem1").addClass("active");      --}}
    });
</script>
@section('main')
<h3>管理分類</h3>
<small class="text-muted">新稱或刪除相簿</small><br><br>
<div class="row">
    <div class="col-5">
        <table class="table">
            <thead>
                <tr class="table-active">
                <th>名稱</th>
                <th>操作</th>
                </tr>
            </thead>
            <tbody>

                {{--  list  --}}
                @foreach($datas as $data)
                    <tr>
                    <td>{{ $data->className }}</td>
                    <td><a class="btn btn-danger" href={{ url('./webAdmin/activity-record/manager-filter')."/".$data->id }} role="button-danger">－</a></td>
                    </tr>
                @endforeach
                
                {{--  add  --}}
                <form action={{ url('./webAdmin/activity-record/manager-filter')}} method="POST">
                {{ csrf_field() }}
                <tr>
                    <td><input type="text" name="className" class="form-control" placeholder="新增相簿..."></td>
                    <td><button type="submit" class="btn btn-success">＋</button></td>
                </tr>
                </from>
            </tbody>
        </table>   
        <small class="text-muted">*刪除相簿前必須清空該相簿</small><br><br>
    </div>
</div>
@endsection
