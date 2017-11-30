@extends('website.layouts.main')
@section('title', 'example')
@section('container')

<div class="card text-center">
  
  <div class="card-body">
    <h4 class="card-title">臺中科大</h4>
    <p class="card-text">觀看臺中科大學生的作品</p>
    <a href={{ url('/stu-performance/school/1') }} class="btn btn-success">Go</a>
  </div>
 
</div>

<br>

<div class="card text-center">
  <div class="card-body">
    <h4 class="card-title">勤益科大</h4>
    <p class="card-text">觀看臺中科大學生的作品</p>
    <a href={{ url('/stu-performance/school/2') }} class="btn btn-success">Go</a>
  </div>
</div>

<br>

<div class="card text-center">
  <div class="card-body">
    <h4 class="card-title">靜宜大學</h4>
    <p class="card-text">觀看靜宜大學的作品</p>
    <a href={{ url('/stu-performance/school/2') }} class="btn btn-success">Go</a>
  </div>
</div>

@endsection