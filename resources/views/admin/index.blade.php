@extends('admin.layouts.main')

@section('main')
    <h3>後臺首頁</h3>
    <iframe src={{ url('/status.php') }} width="640" height="240" frameborder="0"></iframe>
@endsection
