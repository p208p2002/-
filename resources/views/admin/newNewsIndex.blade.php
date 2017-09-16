@extends('admin.layouts.main')
@section('main')
<h3>選擇功能</h3><br>
<a class="btn btn-primary" href={{ url('webAdmin/newNews/create') }} role="button">發佈消息</a>
<a class="btn btn-warning" href="#" role="button">編輯消息</a>
<a class="btn btn-danger" href="#" role="button">刪除消息</a>
@endsection