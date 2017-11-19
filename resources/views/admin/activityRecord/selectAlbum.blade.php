@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{--  <script>
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
</script>  --}}
@section('main')
<h3 id="q1">活動紀實</h3>
<a class="btn btn-success" href={{ url('webAdmin/activity-record/manager-filter') }} role="button">新增/刪除相簿</a>
<br><br>
<div class="row">
    @foreach($datas as $data)
        <div class="card col-4" style="width: 20rem;">
            <div class="d-flex justify-content-center">
                <img class="card-img-top" height="100" src="https://image.flaticon.com/icons/svg/26/26619.svg" alt="Card image cap">
            </div>
            <div class="card-body">
              <h4 class="card-title text-center">{{ $data->className }}</h4>
              <div class="d-flex justify-content-center">
                <a href={{ action('Admin\activityController@showalbum',['id' =>$data->id]) }} class="btn btn-primary">選擇此相簿</a>
              </div>
            </div>
            <br>
        </div>
    @endforeach
</div>

@endsection