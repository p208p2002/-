@extends('website.layouts.main')
@section('title', '好文閱讀')
@section('container')

@foreach($datas as $data)
<h1> {{$data->title}} </h1>
<hr>
<p class="text-secondary">{{ $data->classid }} | {{ $data->createtime }} | {{ $data->createrid }}</p>
{!! $data->context !!}
@endforeach

@endsection