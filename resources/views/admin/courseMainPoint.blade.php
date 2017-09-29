@extends('admin.layouts.main')

@section('main')
<h3>課程大綱</h3>
<small class="text-muted">請選擇功能</small><br><br>
<a class="btn btn-primary" href={{ url('webAdmin/courseMainPoint/add') }} role="button">發佈行事曆</a>
<a class="btn btn-danger" href={{ url('webAdmin/courseMainPoint/del') }} role="button">刪除行事曆</a>
{{--  <a class="btn btn-danger" href={{ url('webAdmin/goodArticle/delete') }} role="button">刪除行事曆</a>  --}}
@endsection
