@extends('stuCenter.layouts.main')

@section('main')
    <h3>學生中心</h3>
    <br>
    <p>歡迎使用學生中心</p>
    <h3>學生成果展示</h3>
<hr>
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

<div class="row">
    <div class="col-1 text-center"><p>編號</p></div>
    <div class="col-2 text-center"><p>學生名稱</p></div>
    <div class="col-6 text-center"><p>作品說明/備註</p></div>
    <div class="col-3 text-center"><p>選擇檔案(*pdf only)</p></div>
</div>


<div class="input-group">
    <span class="input-group-addon col-1">1</span>
    {{--  學生名稱  --}}
    <input name="stunames[]" class="form-control col-2" type="text" name="" id="" value={{ Auth::user()->name }}>
    {{--  作品名稱  --}}
    <input name="worknames[]" class="form-control col-6" type="text" name="" id="">
    {{--  檔案  --}}
    <input name="userfile[]" class="form-control col-3" type="file" name="" id="">
</div>


<br>  
  <button value="upload" type="submit" class="btn btn-primary">上傳檔案</button>
</form>


@endsection

