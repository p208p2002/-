@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>
@section('main')
<h3>管理分類</h3>
<small class="text-muted">自訂文章分類</small><br><br>
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
                    <td><button type="button" class="btn btn-danger">－</button></td>
                    </tr>
                @endforeach
                
                {{--  add  --}}
                <tr>
                    <td><input type="text" class="form-control" placeholder="新增分類..."></td>
                    <td><button type="button" class="btn btn-success">＋</button></td>
                </tr>

            </tbody>
        </table>   
    </div>
</div>
@endsection
