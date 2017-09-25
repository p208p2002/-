@extends('admin.layouts.main')

@section('main')
    <h3>影音之旅</h3>
    <small class="text-muted">請選擇功能</small><br><br>
    <a class="btn btn-primary" href={{ url('webAdmin/videoTrip/create') }} role="button">發佈影片</a>
    <a class="btn btn-danger" href={{ url('webAdmin/videoTrip/create') }} role="button">刪除影片</a>
@endsection
