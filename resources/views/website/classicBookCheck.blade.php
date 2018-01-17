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
   
   <br>

   @if(Auth::check())
   <form action={{ url('./user-api/classicbook-response') }} method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="textarea">發表回應</label>
            <textarea name="context" class="form-control" id="textarea" rows="3"></textarea>
        </div>

        <input type="hidden" name="pageid" value={{ $pageid }}>

        <div class="d-flex justify-content-end">
            <button class="btn btn-success" type="submit">發表回應</button>
        </div>
   </form>
   @else 
   <!-- no login -->
   <div class="form-group">
        <label for="textarea">發表回應</label>
        <textarea class="form-control" id="textarea" rows="3" disabled> 需要登入才能發表回應 </textarea>
    </div>
    <div class="d-flex justify-content-end">
        <button class="btn btn-success" type="submit" disabled>發表回應</button>
    </div>
   
   @endif

   <br>

   @foreach($responses as $res)
    <div class="card">
        <div class="card-body">
            <div class="d-flex">
                <h5 class="card-title">{{ Auth::user()->findName($res->uid) }}</h5>
                @if($res->uid == Auth::user()->id)
                    <div class="ml-auto p-2">
                        <a href={{ url('./user-api/classicbook-response/'.$res->id) }} class="btn btn-danger">刪除</a>
                    </div>
                @endif
            </div>
            <h6 class="card-subtitle mb-2 text-muted">{{ $res->createtime }}</h6>
            {{ $res->context }}
        </div>
    </div>
    <br>
   @endforeach

@endsection