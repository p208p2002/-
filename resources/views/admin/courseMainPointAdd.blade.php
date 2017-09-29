@extends('admin.layouts.main')

@section('main')
<h3>課程大綱</h3><br>
<form action={{ url('webAdmin/courseMainPoint/add') }} method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="">學校</label><br>
<input type="text" name="school" id=""><br><br>
<label for="">標題</label><br>
<input type="text" name="title" id=""><br><br>
<label for="">課程大綱檔案(*.pdf)</label><br>
<input type="file" name="pdfFile"><br><br>

<button type="submit">submit</button>


</form>
@endsection
