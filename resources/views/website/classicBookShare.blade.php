@extends('website.layouts.main')
@section('title', 'example')
@section('container')
<div class="row">
@foreach($datas as $data)
    <div class="col-4">
        <div class="card" style="width: 20rem;">
        <a href={{ url('/classicBookShare').'/'.$data->id}}>
            <img class="card-img-top" src={{ url('/').$data->filepath }} alt="Card image cap">
        </a>
        <div class="card-body">
        <h4 class="card-title text-center"><a style="color:black;" href={{ url('/classicBookShare').'/'.$data->id}}> {{ $data->title }} </a></h4>
        </div>
        </div>
    </div>
@endforeach
</div>

{!! $datas->render() !!}
  
@endsection