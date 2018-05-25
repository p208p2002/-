@extends('stuCenter.layouts.main')

@section('main')
    <h3>管理上傳作品</h3>
    <br>
    <p>歡迎使用學生中心</p>
    <div class="row">
        <div class="col">學校</div>
        <div class="col">分類名稱</div>
        <div class="col">作品備註</div>
        <div class="col">檔案下載</div>
        <div class="col">檔案刪除</div>
    </div>

    <hr>

    @foreach($datas as $data)
        <div class="row">
            <div class="col">學校</div>
            <div class="col">分類名稱</div>
            <div class="col">作品備註</div>
            <div class="col">檔案下載</div>
            <div class="col">檔案刪除</div>        
        </div>
    @endforeach


    
@endsection
