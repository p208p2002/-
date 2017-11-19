@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{--  <script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>  --}}
@section('main')
<h3 id="q1">活動紀實</h3>
<a class="btn btn-primary" href={{ url()->previous() }}>回上頁</a>
<a href={{ action('Admin\activityController@create',['default'=>$id]) }} class="btn btn-success">新增相片</a>
<hr>

<form action={{ action('Admin\activityController@delphoto') }} method="post">
{{ csrf_field() }}
<button type="submit" class="btn btn-danger">刪除</button>
<button type="button" class="btn btn-warning" onclick="selectAll()">全選</button>
<button type="button" class="btn btn-info" onclick="unselectAll()">全不選</button><br><br>


<div class="row">
    @foreach($datas as $data)
        <div class="card col-4" style="width: 20rem;">
            <br>
            <div class="d-flex justify-content-center">
                <img class="card-img-top" height="120"  src={{ url($data->filepath) }} alt="Card image cap">
            </div>
            <div class="card-body">
              <p class="card-title text-center" style="font-size:8px;">{{ $data->filename }}<p>
              <div class="d-flex justify-content-center">
                    <input id="checbox" name="ids[]" value={{ $data->id }} type="checkbox" aria-label="Checkbox for following text input">
              </div>
            </div>
            <br>
        </div>
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