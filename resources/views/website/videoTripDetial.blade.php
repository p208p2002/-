@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}

@foreach($datas as $key=>$data)

{!! $data->htmlframe !!}

@endforeach
 
@endsection