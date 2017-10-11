@extends('admin.layouts.main')
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    // $(document).ready(function(){
    //     $("#block1-menuItem1").addClass("active");    
    // });
</script>
@section('main')
<h3>分享著作</h3>
<form action={{ url('/webAdmin/classicBook/add') }} method="POST" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="form-group">
    <div class="row">
        <div class="col">
            <label for="exampleInputEmail1">標題</label>
            <input type="title" name="title" class="form-control" placeholder="輸入標題..."><br>
            <label for="">圖片檔案:</label>
            <input type="file" name="imgFile"><br><br>
        </div>
    </div>
</div>

<div class="form-group">
  <label for="comment">內文</label>
  <textarea name="context"></textarea>
		<script>
			CKEDITOR.replace( 'context' );
		</script>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


