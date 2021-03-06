@extends('stuCenter.layouts.main')

@section('main')
    <h3>學生中心</h3>
    <br>
    <p>歡迎使用學生中心</p>
    <h3>學生成果展示</h3>
<hr>

<br>
<h5>選擇分類</h5>
@if (Session::has('isupload')) 
    <div class="alert alert-success" role="alert">File upload success!</div>
@endif
<form action={{ url('/student-center/my-works/upload') }} method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
    <div class="row">
        <div class="col">
            
          <select class="form-control" name="classId">
                @foreach ($datas as $data)
                    <option value={{ $data->id }}>
                        @if ($data->schoolid == 1)
                            臺中科大
                        @elseif ($data->schoolid == 2)
                            勤益科大
                        @else 
                            靜宜大學
                        @endif
                        |{{ $data->className }}
                    </option>
                @endforeach
            </select>
          
        </div>
    </div>
</div>

<div class="d-none d-md-block">
<div class="row">
    <div class="col-2 text-center"><p>學生名稱</p></div>
    <div class="col-6 text-center"><p>作品說明/備註</p></div>
    <div class="col-3 text-center"><p>選擇檔案(*pdf only)</p></div>
</div>
</div>

<div class="input-group">
    {{--  學生名稱  --}}
    <input name="stunames[]" class="form-control col-2" type="text" name="" id="" value={{ Auth::user()->name }} placeholder="學生姓名" >
    {{--  作品名稱  --}}
    <input name="worknames[]" class="form-control col-6" type="text" name="" id="" placeholder="作品名稱/備註">
    {{--  檔案  --}}
    <input name="userfile[]" class="form-control col-3" type="file" name="" id="">
</div>


<br>
<br>
  <button value="upload" type="submit" class="btn btn-primary">上傳檔案</button>
  <small><b>上傳前請確定已選擇正確的分類</b></small><br>
</form>


<hr class="d-block d-md-none">

@endsection

