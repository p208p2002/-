@extends('website.layouts.main')
@section('title', 'example')
@section('container')
@foreach($datas as $key=>$data)
    @if($key % 3 == 0)
    <div class="row">

    <div class="col">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src={{ url('/').$data->filepath }} alt="Card image cap">
        <div class="card-body">
        <h4 class="card-title text-center">{{ $data->title }}</h4>
        </div>
        </div>
    </div>
    @endif

    @if($key % 3 == 1)
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src={{ url('/').$data->filepath }} alt="Card image cap">
        <div class="card-body">
        <h4 class="card-title text-center">{{ $data->title }}</h4>
        </div>
        </div>
    </div>
    @endif

    @if($key % 3 == 2)
    <div class="col">
        <div class="card" style="width: 20rem;">
        <img class="card-img-top" src={{ url('/').$data->filepath }} alt="Card image cap">
        <div class="card-body">
        <h4 class="card-title text-center">{{ $data->title }}</h4>
        </div>
        </div>
    </div>

    </div><br>
    @endif

@endforeach
<!--  -->
@if(sizeof($datas)%3 == 2)
<div class="col"></div>
@endif
@if(sizeof($datas)%3 != 1)
</div>
@endif
  
@endsection