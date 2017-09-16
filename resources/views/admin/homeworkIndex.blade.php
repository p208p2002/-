@extends('admin.layouts.main')
@section('main')
<h3>選擇功能</h3><br>
<a class="btn btn-primary" href={{ url('webAdmin/homework/create') }} role="button">建立作業</a>
<a class="btn btn-warning" href="#" role="button">修改作業</a>
<a class="btn btn-danger" href="#" role="button">刪除作業</a>
<a class="btn btn-success" href="#" role="button">批改作業</a>
@endsection