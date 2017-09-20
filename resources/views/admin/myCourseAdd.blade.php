@extends('admin.layouts.main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
/*
    $(document).ready(function(){
        $("#block1-menuItem1").addClass("active");    
    });
    */
</script>
@section('main')
<h3>增加課程</h3>
<form action={{ url('./webAdmin/myCourse/create') }} method="POST">
{{ csrf_field() }}
<div class="form-group">
    <div class="row">
         <div class="col">
            <label for="exampleInputEmail1">課程年度</label>
            <input type="title" name="year" class="form-control" placeholder="輸入年度(民國)...">
        </div>
        <div class="col">
            <label for="exampleInputEmail1">第幾學期</label>
            <input type="title" name="term" class="form-control" placeholder="1,2...">
        </div>
        <div class="col">
            <label for="exampleInputEmail1">課程名稱</label>
            <input type="title" name="title" class="form-control" placeholder="輸入課程...">
        </div>
        <div class="col-3">
            <label for="exampleInputEmail1">開課老師</label>
            <input type="title" name="teacherName" class="form-control" placeholder="輸入名稱..." value={{ Auth::user()->name }}>
        </div>
    </div>
        <label for="exampleInputEmail1">簡短介紹</label>
        <input type="title" name="context" class="form-control" placeholder="輸入介紹...">
</div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection


