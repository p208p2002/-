@extends('stuCenter.layouts.main')

@section('main')
    <h3>上傳作品</h3>
    <br>
    <p>歡迎使用學生中心</p>
    <a href={{ url('/student-center/my-works/upload') }} class="btn btn-primary">上傳作品</a>
@endsection
