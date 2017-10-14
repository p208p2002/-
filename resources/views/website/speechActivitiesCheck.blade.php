@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}
   @foreach($datas as $data)
   <h1>{{ $data->eventname }}</h1>
   <p class="text-secondary">活動日期:{{ $data->eventdate }}</p>
   @if($data->pdffile!="empty")
   <a href={{ url('/').$data->pdffile }}>演講簡報下載</a><br>
   @endif

   @if($data->imgfile!="empty")
   <img src={{ url('/').$data->imgfile }} width="480" alt="" srcset=""><br><br><br>
   @endif

   <div class="border border-success">
    <div class="container">
   <p>{!! $data->context !!}</p>
</div>
   </div>
   @endforeach

@endsection