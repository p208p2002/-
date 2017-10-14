@extends('admin.layouts.main')

@section('main')
<h3 id="q1">演講活動</h3>
<small class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('webAdmin/speeches/add') }} role="button">新增活動</a>
<a class="btn btn-danger" href={{ url('webAdmin/speeches/del') }} role="button">刪除活動</a>
<br><br>
@endsection
