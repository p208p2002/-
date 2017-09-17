@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>
@section('main')
<h3 id="q1">最新消息</h3>
<small id="passwordHelpInline" class="text-muted">選擇要刪除的項目</small><br><br>

<!--  -->
<div class="input-group">
    <select class="form-control" name="classId">
        <option value="1">全部</option>
    </select>    
    <button type="button" class="btn btn-primary">篩選</button>
</div>
<br>

<!--  -->
<button type="button" class="btn btn-danger">執行</button>
<button type="button" class="btn btn-warning">全選</button>
<button type="button" class="btn btn-info">全不選</button><br><br>

@foreach($datas as $data)
<div class="input-group">
    <span class="input-group-addon">
    <input value={{ $data->id }} type="checkbox" aria-label="Checkbox for following text input">
    </span>
    <?php $className = DB::table('newnewsclass')->where('id', $data->classid )->first(); ?>
    <label  class="form-control col-2">{{ $className->className }}</label>
    <label  class="form-control">{{ $data->title }}</label>
    <label  class="form-control col-2">{{ $data->createtime }}</label>
    <button type="button" class="btn btn-light">查看</button>
</div><br>
@endforeach

@endsection