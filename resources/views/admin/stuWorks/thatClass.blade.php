@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{--  <script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>  --}}
@section('main')
<h3 id="q1">學生成果展示</h3>
<a class="btn btn-primary" href={{ url()->previous() }}>回上頁</a>
<a href={{ url('webAdmin/stu-works/upload') }} class="btn btn-success">新增相片</a>
<hr>

<form action={{ action('Admin\stuWorksController@delworks') }} method="post">
{{ csrf_field() }}
<button type="submit" class="btn btn-danger">刪除</button>
<button type="button" class="btn btn-warning" onclick="selectAll()">全選</button>
<button type="button" class="btn btn-info" onclick="unselectAll()">全不選</button><br><br>

{!! $datas->render() !!}

<div class="row">
    @foreach($datas as $data)
    <div class="input-group">
    <span class="input-group-addon">
    <input id="checbox" name="ids[]" value={{ $data->id }} type="checkbox" aria-label="Checkbox for following text input">
    </span>
    <label  class="form-control">學生作品{{ $data->id }}</label>
    <label  class="form-control">{{ $data->studentname }}</label>
    <label  class="form-control">{{ $data->context }}</label>
    <label  class="form-control col-2">{{ $data->createtime }}</label>
   
    <a role="button" class="btn btn-secondary" href={{ url('/stu-performance').'/'.$data->id }}>查看</a>

</div><br>
    @endforeach
</div>

</form>

<script>
        function selectAll(){
            $(':checkbox').each(function() {
                this.checked = true;                        
            });
        }
        
        function unselectAll(){
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }
</script>

@endsection