@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}
   @foreach($datas as $data)
   <h1>{{ $data->title }}</h1>
   <img src={{ url('/').$data->filepath }} width="480" alt="" srcset="">
   <br><br>
   <div class="border border-success">
   <div class="container">
   <p>{!! $data->context !!}</p>
   </div>
   </div>
   @endforeach
@endsection