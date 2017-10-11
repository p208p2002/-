@extends('admin.layouts.main')

@section('main')
<h3 id="q1">經典著作</h3>
<small class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('webAdmin/classicBook/add') }} role="button">著作分享</a>
<a class="btn btn-danger" href={{ url('webAdmin/classicBook/del') }} role="button">刪除分享</a>
<br><br>
@endsection
