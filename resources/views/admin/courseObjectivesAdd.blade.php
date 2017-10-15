@extends('admin.layouts.main')

@section('main')
    <h3>課程目標</h3>
    <hr>
    <br>
    @if (Session::has('isupload')) 
    <div class="alert alert-success" role="alert">File upload success!</div>
    @endif
    <form action={{ url('webAdmin/course-objectives') }} method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
        <label for="exampleInputFile">Select File(*.pdf only)</label>
        <input name="pdffile" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" accept="application/pdf">
        <small id="fileHelp" class="form-text text-muted">choose a file you want to show</small>
        <br>
        <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </form>
@endsection
