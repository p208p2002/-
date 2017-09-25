@extends('admin.layouts.main')

@section('main')
    <h3>影音之旅</h3>
    <form action="#" method="post">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">影片標題</label>
            <input type="text" name="title" class="form-control">
            <label for="exampleFormControlTextarea1">影片嵌入</label>
            <textarea class="form-control" name="htmlframe" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <small id="emailHelp" class="form-text text-muted text-right"><a href="#">如何嵌入?</a></small>
            <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection
