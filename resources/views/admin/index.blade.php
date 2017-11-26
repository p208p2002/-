@extends('admin.layouts.main')

@section('main')
    <h3>後臺首頁</h3>
    <br>
    <iframe src={{ url('/status.php') }} width="300" height="240" frameborder="0"></iframe>
    
    <h3>操作有困難嗎?</h3>
    <ul>
        <li><a href={{ url('/webAdmin/video-insert-help') }}>如何嵌入影片?</a></li>
    </ul>
    <hr>
    <h3>全功能已經上線!</h3>
    <ul>待完成功能
        <li>分類功能</li>
        <li>RWD頁面優化</li>
        <li>其他頁面優化</li>
        <li>Dashbord選單點選顯示</li>
    </ul>
@endsection
