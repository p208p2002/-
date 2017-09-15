@extends('admin.layouts.main')

@section('main')
<h3>最新消息</h3>
<form action={{ url('webAdmin/newNews') }} method="POST">
{{ csrf_field() }}
<div class="form-group">
    <div class="row">
        <div class="col-3">
            <label for="exampleInputEmail1">分類</label>
            <select class="form-control">
                <option>分類1</option>
                <option>分類2</option>
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
  <textarea class="form-control" rows="8" id="comment"></textarea>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection