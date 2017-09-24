@extends('website.layouts.main')
@section('title', '最新消息')
@section('container')

@foreach($datas as $data)
<h1> {{$data->title}} </h1>
<hr>
<p class="text-secondary">{{ App\Newnewsarticle::find($data->id)->getClassName() }} | {{ $data->createtime }}</p>
<p> <?php echo $data->context; ?> </p>
@endforeach

@endsection