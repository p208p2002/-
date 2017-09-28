@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}

@foreach($datas as $data)
<div class="alert alert-success" role="alert">
 <h3 class="text-center">
    <a href={{ url('/calendar/'.$data->id) }} class="alert-link">[{{ $data->schoolName }}]{{ $data->title }}</a>
 </h3>
</div>
<br>
@endforeach

@endsection