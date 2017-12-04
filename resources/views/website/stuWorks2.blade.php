@extends('website.layouts.main')
@section('title', 'example')
@section('container')

<div class="row">
    @foreach($datas as $data)    
    <div class="col-12 col-md-4 col-lg-3">
        <a href={{ url('/stu-performance').'/'.$data->id }} style="color:black; text-decoration:none;">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title text-center">學生作品{{ $data->id }}</h4>
              <p class="card-text text-center">{{ $data->context }}</p>
            </div>
            <div class="card-footer text-center">
              <small class="text-muted">{{ $data->createtime }}</small>
            </div>
          </div>
          <br>
        </a>
    </div>
    @endforeach
</div>
{!! $datas->render() !!}
@endsection