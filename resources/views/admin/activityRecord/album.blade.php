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
<br><br>
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
                <input type="checkbox" name="" id="">
              </div>
            </div>
            <br>
        </div>
    @endforeach
</div>

@endsection