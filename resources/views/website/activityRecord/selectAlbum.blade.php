@extends('website.layouts.main')
@section('title', 'example')
@section('container')
<div class="row">
    <!-- <ul class="d-inline-flex">
        <li class="btn btn-success">All</li>
        <li class="btn btn-success">test</li>
    </ul> -->
</div>
<div class="row">
@foreach($datas as $data)

<?php 
  try{
    $imgpath = DB::table('activityrecord')->where('albumid',$data->id)->first()->filepath;  
  }catch (\Exception $e){
    $imgpath = "https://image.flaticon.com/icons/svg/502/502636.svg";  
  }
  
?>  
<div class="card col-3" style="width: 20rem;">
  <p></p>
  <img class="card-img-top" src={{ $imgpath }} alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">{{ $data->className }}</h4>
    <a href={{ url('activity-record').'/'.$data->id }} class="btn btn-primary">瀏覽相簿</a>
  </div>
</div>
<br>
@endforeach

</div>
<div class="d-flex justify-content-center">
{!! $datas->links() !!}
</div>
@endsection