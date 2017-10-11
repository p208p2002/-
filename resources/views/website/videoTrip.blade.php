@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}

@foreach($datas as $key=>$data)

@if($key%3==0)
<br>
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 20rem;">
            <a href={{ url('/videoTrip/'.$data->id) }}>
            <img class="card-img-top" src="https://image.flaticon.com/icons/svg/122/122628.svg" height="200" width="200" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title text-center">{{ $data->title }}</h4>
            </a>
                <p class="card-text text-secondary text-center">{{ $data->id }} | {{ $data->createtime }}</p>
            </div>
          
        </div>
    </div>
@endif

@if($key%3==1)
    <div class="col-4">
        <div class="card" style="width: 20rem;">
            <a href={{ url('/videoTrip/'.$data->id) }}>
            <img class="card-img-top" src="https://image.flaticon.com/icons/svg/122/122628.svg" height="200" width="200" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title text-center">{{ $data->title }}</h4>
            </a>
                <p class="card-text text-secondary text-center">{{ $data->id }} | {{ $data->createtime }}</p>
            </div>
        </div>
    </div>
@endif

@if($key%3==2)
    <div class="col-4">
        <div class="card" style="width: 20rem;">
            <a href={{ url('/videoTrip/'.$data->id) }}>
            <img class="card-img-top" src="https://image.flaticon.com/icons/svg/122/122628.svg" height="200" width="200" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title text-center">{{ $data->title }}</h4>
            </a>
                <p class="card-text text-secondary text-center">{{ $data->id }} | {{ $data->createtime }}</p>
            </div>
        </div>
    </div>

</div>
@endif


@endforeach

@if(count($datas)%3 !=0)
    </div>
@endif
 
@endsection