@extends('admin.layouts.main')

@section('main')
<h3>行事曆</h3><br>
<form action={{ url('webAdmin/calendar/add') }} method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<label for="">標題</label><br>
<input type="text" name="title" id=""><br><br>
<label for="">選擇一個PDF</label><br>
<input type="file" name="pdfFile"><br><br>

<button type="submit">submit</button>


</form>
@endsection
