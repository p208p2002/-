@extends('admin.layouts.main')

@section('main')
<h3>我的開課</h3>
<small class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('webAdmin/myCourse/create') }} role="button">增加課程</a>
<a class="btn btn-info" href={{ url('webAdmin/myCourse/manager') }} role="button">管理課程</a>
@endsection