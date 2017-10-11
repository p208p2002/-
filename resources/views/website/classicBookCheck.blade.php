@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}
   @foreach($datas as $data)
   <h1>{{ $data->title }}</h1>
   <img src={{ url('/').$data->filepath }} width="480" alt="" srcset="">
   <p>{!! $data->context !!}</p>
   @endforeach
@endsection