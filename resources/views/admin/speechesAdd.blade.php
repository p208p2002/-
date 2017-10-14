@extends('admin.layouts.main')
@section('head')
<!-- date picker -->
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- cke -->
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) { 
        $(function(){
	$( ".simple_date" ).datepicker({
		dateFormat : 'yy-mm-dd'
	});
});
    });
</script>
@endsection

@section('main')
<h3>演講活動</h3><br>
<form action={{ url('webAdmin/speeches/add') }} method="post" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="row">
    <div class="col">
        <label for="">活動名稱</label><br>
        <input class="form-control" type="text" name="eventname" id="">
    </div>
    <div class="col">
        <label for="">活動日期</label><br>
        <input type="text" name="datetime" class="simple_date form-control" id="">
    </div>
</div>
<br><br>
<div class="row">
    <div class="col">
        <label for="">演講海報(*.jpg)</label><br>
        <input type="file" name="imgFile" accept=".jpg">
    </div>
    <div class="col">
        <label for="">演講簡報(*.pdf)</label><br>
        <input type="file" name="pdfFile" accept=".pdf">
    </div>
</div>
<br>
<label for="">活動詳情</label><br>
<textarea name="context"></textarea>
<script>
    CKEDITOR.replace( 'context' );
</script>
<br>
<button type="submit" class="btn btn-primary">submit</button>






</form>
@endsection
