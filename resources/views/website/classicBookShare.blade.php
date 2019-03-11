@extends('website.layouts.main')
@section('title', 'example')
@section('container')
<div class="row">
@foreach($datas as $data)
    <div class="col-lg-4 col-12">
        <div class="card" style="width: 20rem;">
        <a href={{ url('/classicBookShare').'/'.$data->id}}>
            <div class="img-responsive">
            <img class="card-img-top" src={{ url('/').$data->filepath }} alt="Card image cap">
            </div>
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