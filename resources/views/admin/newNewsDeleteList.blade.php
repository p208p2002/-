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

{{--    --}}
<nav aria-label="...">
  <ul class="pagination pagination">
    <li class="page-item active">
      <a class="page-link" href= {{url('/webAdmin/newNews/delete/0')}} tabindex="-1">First page</a>
    </li>

    @for($i=0;$i<5;$i++)
    <li class="page-item"><a class="page-link" href={{ url('/webAdmin/newNews/delete').'/'.($page+$i+1) }} >{{ $page+$i+2}}</a></li>
    @endfor

  </ul>
</nav>


<!--  -->
<form action={{ url('webAdmin/newNews/delete') }} method="POST">
{{ csrf_field() }}
<button type="submit" class="btn btn-danger">執行</button>
<button type="button" class="btn btn-warning" onclick="selectAll()">全選</button>
<button type="button" class="btn btn-info" onclick="unselectAll()">全不選</button><br><br>


@foreach($datas as $data)
<div class="input-group">
    <span class="input-group-addon">
    <input id="checbox" name="ids[]" value={{ $data->id }} type="checkbox" aria-label="Checkbox for following text input">
    </span>
    <?php $className = DB::table('newnewsclass')->where('id', $data->classid )->first(); ?>
    <label  class="form-control col-2">
    <?php 
    try{
        echo $className->className;
    }
    catch (\Exception $e){
        echo "其他";
    }
    ?>
    </label>
    <label  class="form-control">{{ $data->title }}</label>
    <label  class="form-control col-2">{{ $data->createtime }}</label>
    <button type="button" class="btn btn-light">查看</button>
</div><br>
@endforeach
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