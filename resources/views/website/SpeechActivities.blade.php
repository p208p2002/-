@extends('website.layouts.main')
@section('title', 'example')
@section('container')
@foreach($datas as $key=>$data)
    @if($key % 3 == 0)
    <div class="row">

    <div class="col">
        <div class="card" style="width: 20rem;">

        @if($data->imgfile!="empty")
        <img class="card-img-top" src={{ url('/').$data->imgfile }} alt="Card image cap">
        @else
        <img class="card-img-top" src="https://image.flaticon.com/icons/svg/512/512500.svg" alt="Card image cap">
        @endif

        <div class="card-body">
        <h4 class="card-title text-center"><a style="color:black;" href={{ url('/SpeechActivities').'/'.$data->id}}> {{ $data->eventname }} </a></h4>
        <p class="text-secondary text-center">活動日期:{{$data->eventdate}}</p>
        </div>
        </div>
    </div>
    @endif

    @if($key % 3 == 1)
    <div class="col">
        <div class="card" style="width: 20rem;">

        @if($data->imgfile!="empty")
        <img class="card-img-top" src={{ url('/').$data->imgfile }} alt="Card image cap">
        @else
        <img class="card-img-top" src="https://image.flaticon.com/icons/svg/512/512500.svg" alt="Card image cap">
        @endif
        
        <div class="card-body">
        <h4 class="card-title text-center"><a style="color:black;" href={{ url('/SpeechActivities').'/'.$data->id}}> {{ $data->eventname }} </a></h4>
        <p class="text-secondary text-center">活動日期:{{$data->eventdate}}</p>
        </div>
        </div>
    </div>
    @endif

    @if($key % 3 == 2)
    <div class="col">
        <div class="card" style="width: 20rem;">

        @if($data->imgfile!="empty")
        <img class="card-img-top" src={{ url('/').$data->imgfile }} alt="Card image cap">
        @else
        <img class="card-img-top" src="https://image.flaticon.com/icons/svg/512/512500.svg" alt="Card image cap">
        @endif

        <div class="card-body">
        <h4 class="card-title text-center"><a style="color:black;" href={{ url('/SpeechActivities').'/'.$data->id}}> {{ $data->eventname }} </a></h4>
        <p class="text-secondary text-center">活動日期:{{$data->eventdate}}</p>
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
@if(sizeof($datas)%3 != 0)
</div>
@endif

{!! $datas->render() !!}
  
@endsection