@extends('website.layouts.main')
@section('title', 'example')
@section('container')

<div class="row">
    @foreach($datas as $data)    
    
    <div class="col-12 col-md-4 col-lg-3">
        <a href={{ url('/stu-performance/school' ).'/'.$data->schoolid.'/'.$data->id }} style="color:black; text-decoration:none;">
        <div class="card">
            <div class="card-body">
              <p class="card-text text-center">{{ $data->className }}</p>
            </div>
          </div>
          <br>
        </a>
    </div>
    @endforeach
</div>
{!! $datas->render() !!}
@endsection