@extends('admin.layouts.main')

@section('main')
    <h3>線上課程</h3>
    <br>
    <small class="text-muted">請選擇功能</small><br><br>
    <a class="btn btn-primary" href={{ url('webAdmin/online-course/add') }} role="button">發佈文章</a>
    <a class="btn btn-danger" href={{ url('webAdmin/online-course/del') }} role="button">刪除文章</a>
    <br><br>
    <a class="btn btn-info" href={{ url('webAdmin/online-course/manager-filter') }} role="button">管理分類</a>
@endsection
