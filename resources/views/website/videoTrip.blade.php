@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}
<div class="row">
    @foreach($datas as $key=>$data)
        <div class="col-lg-4 col-12" style="margin-bottom:20px;">
            <div class="card" style="width: 20rem;padding:20px;">
                <a href={{ url('/videoTrip/'.$data->id) }}>
                <img class="card-img-top" src="https://image.flaticon.com/icons/svg/122/122628.svg" height="200" width="200" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title text-center">{{ $data->title }}</h4>
                </a>
                    <p class="card-text text-secondary text-center">{{ $data->id }} | {{ $data->createtime }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection