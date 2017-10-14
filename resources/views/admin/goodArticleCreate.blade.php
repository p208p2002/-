@extends('admin.layouts.main')
<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
{{--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>  --}}
<script>
    // $(document).ready(function(){
    //     $("#block1-menuItem1").addClass("active");    
    // });
</script>
@section('main')
<h3>發布文章</h3>
<form action={{ url('/webAdmin/goodArticle/store') }} method="POST">
{{ csrf_field() }}
<div class="form-group">
    <div class="row">
        <div class="col-3">
            <label for="exampleInputEmail1">分類</label>
            <select class="form-control" name="classId">
                @foreach ($datas as $data)
                <option value={{ $data->id }}>{{ $data->className }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <label for="exampleInputEmail1">標題</label>
            <input type="title" name="title" class="form-control" placeholder="輸入標題...">
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


