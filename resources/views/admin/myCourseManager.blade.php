@extends('admin.layouts.main')

@section('main')
<h3>管理課程</h3>
<small class="text-muted">請選擇功能</small><br><br>

<!--  -->
<table class="table">
    <thead class="thead-inverse">
      <tr>
        <th>課程名稱</th>
        <th>開課年度</th>
        <th>開課學期</th>
        <th>課程簡介</th>
        <th>開課老師</th>
        <th>資訊</th>
        <th>管理</th>
      </tr>
    </thead>
    <tbody>
     @foreach($datas as $data)
     <tr>
        <td scope="row"><b> {{ $data->course_name }}</b> </td>
        <td> {{ $data->course_year }} </td>
        <td> 第{{ $data->course_term }}學期 </td>
        <td> {{ $data->course_context }} </td>
        <td> {{ $data->teacher_name }} </td>
        <td> <button type="button" class="btn btn-info" data-toggle="modal" data-target="#infoWindow">查看</button> </td>
        <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#dangerWindow">刪除</button> </td>
      </tr>
     @endforeach
    </tbody>
  </table>

@endsection

<!--  -->
<div class="modal fade" id="infoWindow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">查看資訊</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<!--  -->
<div class="modal fade" id="dangerWindow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">刪除確認</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          確定要執行刪除動作?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>