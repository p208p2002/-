@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
/*
    $(document).ready(function(){
        {{--  $("#block1-menuItem1").addClass("active");      --}}
    });
    */
</script>
@section('main')
<h3>管理分類</h3>
<small class="text-muted">新稱或刪除分類</small><br><br>
<small class="text-muted">*刪除分類前必須清空該分類</small><br>
<small class="text-muted">*封面圖片格式限制.jpg/.jpeg</small><br>
<br>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr class="table-active">
                <th>分類</th>
                <th>名稱</th>
                <th>封面</th>
                <th>操作</th>
                </tr>
            </thead>
            <tbody>

                {{--  list  --}}
                @foreach($datas as $data)
                    <tr>
                    <td>{{ $data->schoolid }}</td>
                    <td>{{ $data->className }}</td>
                    <td>
                        <form action={{ url('/webAdmin/stu-works/manager-filter/change-index-img') }} method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="classid" value={{ $data->id }}>
                            <input type="file" name="img">
                            <button type="submit">變更封面</button>
                        </form>
                    </td>
                    <td><a class="btn btn-danger" href={{ url('./webAdmin/stu-works/manager-filter')."/".$data->id }} role="button-danger">刪除分類</a></td>
                    </tr>
                @endforeach
                
                {{--  add  --}}
                <form action={{ url('./webAdmin/stu-works/manager-filter')}} method="POST">
                {{ csrf_field() }}

                <tr>
                    <td>
                        <select name="schoolid" class="form-control" class="form-control"  id="">
                                <option value="1">臺中科大</option>
                                <option value="2">勤益科大</option>
                                <option value="3">靜宜大學</option>
                        </select>
                    </td>
                    <td><input type="text" name="className" class="form-control" placeholder="新增分類..."></td>
                    <td><button type="submit" class="btn btn-success">新增分類</button></td>
                </tr>
                </from>
            </tbody>
        </table>   
    </div>
</div>
@endsection
