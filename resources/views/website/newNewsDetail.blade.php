@extends('website.layouts.main')
@section('title', '最新消息')
@section('container')
    <div class="newNewstable">
			<h3 class="text-center">最新消息</h3>
			<hr>
			<table class="table table-sm">
				<thead class="thead-default border border-success">
					<tr>
						<th style="width: 5%"></th>
						<th style="width: 10%">#</th>
						<th style="width: 10%">分類</th>		
						<th style="width: 50%" class="text-center">標題</th>
						<th style="width: 20%">發佈時間</th>
						<th style="width: 5%"></th>
					</tr>
				</thead>
				<tbody>
				
				@foreach($datas as $data)
				<tr>
					<td></td>
					<td>{{ $data->id }}</td>
					<td>{{ App\Newnewsarticle::find($data->id)->getClassName() }}</td>
					<td  class="text-center">{{ $data->title }}</td>
					<td> {{ $data->	createtime }}</td>
					<td></td>
				</tr>
				@endforeach

				</tbody>
			  </table>
			  <div class="row">
				  <div class="col text-right">
                    <a class="btn btn-success" href={{ $page <=0 ? 0 : $page-1 }} role="button">上10則</a>
                    <a class="btn btn-success" href={{ $page+1 }} role="button">下10則</a>
				  </div>
			  </div>
		</div>
@endsection