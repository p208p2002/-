@extends('website.layouts.main')
@section('title', 'example')
@section('container')

<div class="row">
    @foreach($datas as $data)

    <div class="col-12 col-md-4 col-lg-4">
        <a href={{ url('/stu-performance/school' ).'/'.$data->schoolid.'/'.$data->id }} style="color:black; text-decoration:none;">
        <div class="card">
            <div class="card-body">
            @if($data->imgpath!="")
            <img src={{ url($data->imgpath) }} alt="" srcset="" class="card-img-top" style="height:250px;">
            @else
            <img src="https://image.flaticon.com/icons/png/512/554/554826.png" alt="" srcset="" class="card-img-top" style="height:250px;">
            @endif
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