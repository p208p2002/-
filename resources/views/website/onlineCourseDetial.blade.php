@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}

@foreach($datas as $key=>$data)

{!! $data->videoframe !!}
<br>
{!! $data->context !!}


@endforeach
 
@endsection