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
<h3 id="q1">演講活動</h3>
<small id="passwordHelpInline" class="text-muted">選擇要刪除的項目</small><br><br>

<!--  -->
<form action={{ url('webAdmin/speeches/del') }} method="POST">
{{ csrf_field() }}
<button type="submit" class="btn btn-danger">執行</button>
<button type="button" class="btn btn-warning" onclick="selectAll()">全選</button>
<button type="button" class="btn btn-info" onclick="unselectAll()">全不選</button><br><br>

{{$datas->render()}}

@foreach($datas as $data)
<div class="input-group">
    <span class="input-group-addon">
    <input id="checbox" name="ids[]" value={{ $data->id }} type="checkbox" aria-label="Checkbox for following text input">
    </span>
    <label  class="form-control col-2">
    {{ $data->eventdate }}
    </label>
    <label  class="form-control">{{ $data->eventname }}</label>
   
    {{--  <a role="button" class="btn btn-secondary" href={{ url('/newNewsCheck').'/'.$data->id}}>查看</a>  --}}

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