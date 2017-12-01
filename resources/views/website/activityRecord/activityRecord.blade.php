@extends('website.layouts.main')
@section('title', 'example')
@section('container')
   {{--  code here  --}}
{{--    --}}
<div class="row">
    <!-- <ul class="d-inline-flex">
        <li class="btn btn-success">All</li>
        <li class="btn btn-success">test</li>
    </ul> -->
</div>
<div class="row">
@foreach($datas as $data)
    <div class="col-lg-4 col-md-6 col-12">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src={{ url($data->filepath) }} alt="Card image cap">
        </div>
        <br>
    </div>
@endforeach

</div>
<div class="d-flex justify-content-center">
{!! $datas->links() !!}
</div>
@endsection