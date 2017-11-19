<!DOCTYPE html>
{{--  wholelanguagewriting  --}}
<html lang="en">
<head> 
@include('website.layouts.headContext')
<title>聽讀說寫:全面進擊-Engilsh Learning</title>
<style>
	html, body {
	max-width: 100%;
	overflow-x: hidden;
	}
</style>

{{--  icons  --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.css" rel="stylesheet">

</head>
<body>

	@include('website.layouts.topnav')
	<!--  -->
	@include('website.layouts.nav')

	<!--  -->
		  
	<!--  -->
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Listen</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Listen more</a>
				<div class="da-img"><img src="https://image.flaticon.com/icons/svg/136/136223.svg" width="180" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Read</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="https://image.flaticon.com/icons/svg/234/234616.svg" width="180" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>Speak</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Talk more</a>
				<div class="da-img"><img src="https://image.flaticon.com/icons/svg/547/547049.svg" width="180" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>Write</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Write more</a>
				<div class="da-img"><img src="https://image.flaticon.com/icons/svg/164/164962.svg" width="180" alt="image04" /></div>
			</div>
			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>

	</div>
	<!-- end: Slider -->


	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
    	<div class="container">
		<br>

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
					<td>{{ App\Newnewsarticle::find($data->id)->getClassName($data->classid) }}</td>
					<td  class="text-center"><a href={{ url('/newNewsCheck').'/'.$data->id}}>  {{ $data->title }} </a></td>
					<td> {{ $data->	createtime }}</td>
					<td></td>
				</tr>
				@endforeach

				</tbody>
			  </table>
			  <div class="row">
				  <div class="col text-right">
					<a class="btn btn-success" href={{ url('/newNewsDetail/0') }} role="button">more</a>
				  </div>
			  </div>
		</div>
		<!-- end newNewstable -->

		<hr>



			<!-- start: Row -->
			<div class="row">
			<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<a href={{ url('/curse-objectives') }}>
							<img src="https://image.flaticon.com/icons/svg/504/504651.svg" width="150" alt="..." class="rounded">
							</a>
							<br><br>
							<div class="title"><h3><a  style="color:black;" href={{ url('/curse-objectives') }}>Course Objectives</a></h3></div>
						</div>
						<p class="card-text text-secondary text-center">教學目標</p>
					</div>
					</div>
			</div>
			
			<div class="col">
				<div class="card border-0">
				<div class="card-body">
					<div class="text-center">
					<a href={{ url('/courseMainPoint') }}>
					<img src="https://image.flaticon.com/icons/svg/235/235296.svg" width="150" alt="..." class="rounded">
					</a>
					<br><br>
					<div class="title"><a style="color:black;" href={{ url('/courseMainPoint') }}><h3>Syllabus</h3></a></div>
					</div>					
					<p class="card-text text-secondary text-center">課程大綱</p>
				</div>
				</div>
			</div>

			<div class="col">
				<div class="card border-0">
				<div class="card-body">
					<div class="text-center">
						<a href={{ url('/SpeechActivities') }}>
						<img src="https://image.flaticon.com/icons/svg/567/567893.svg" width="150" alt="..." class="rounded">
						</a>
						<br><br>
						<div class="title"><h3><a  style="color:black;" href={{ url('/SpeechActivities') }}>Speeches</a></h3></div>
					</div>
					<p class="card-text text-secondary text-center">演講活動</p>
				</div>
				</div>
			</div>

			</div>
			<!-- end: Row -->

			<!--  -->
			<div class="row">

				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<a href={{ url('/classicBookShare') }}>
							<img src="https://image.flaticon.com/icons/svg/344/344422.svg" width="150" alt="..." class="rounded">
							</a>
							<br><br>
							<div class="title"><h3><a  style="color:black;" href={{ url('/classicBookShare') }}>Classic</a></h3></div>
						</div>
						<p class="card-text text-secondary text-center">經典著作</p>
					</div>
					</div>
				</div>

				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<a href={{ url('/goodArticle') }}>
							<img src="https://image.flaticon.com/icons/svg/148/148990.svg" width="150" alt="..." class="rounded">
							</a>
							<br><br>
							<div class="title"><h3><a  style="color:black;" href={{ url('/goodArticle') }}>Good Articles</a></h3></div>
						</div>
						<p class="card-text text-secondary text-center">好文閱讀</p>
					</div>
					</div>
				</div>

				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<img src="https://image.flaticon.com/icons/svg/201/201595.svg" width="150" alt="..." class="rounded">
							<br><br>
							<div class="title"><h3>Student Performance</h3></div>
						</div>
						<p class="card-text text-secondary text-center">學生成果展示</p>
					</div>
					</div>
				</div>

				</div>
				<!-- end: Row -->

			<!--  -->
			<div class="row">

				<div class="col">
						<div class="card border-0">
						<div class="card-body">
							<div class="text-center">
								<a href={{ url('/videoTrip') }}>
								<img src="https://image.flaticon.com/icons/svg/201/201578.svg" width="150" alt="..." class="rounded">
								</a>
								<br><br>
								<div class="title"><h3><a  style="color:black;" href={{ url('/videoTrip') }}>Video Trip</a></h3></div>
							</div>
							<p class="card-text text-secondary text-center">影音之旅</p>
						</div>
						</div>
				</div>


				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<a href={{ url('/online-course') }}>
							<img src="https://image.flaticon.com/icons/svg/234/234694.svg" width="150" alt="..." class="rounded">
							</a>
							<br><br>
							<div class="title"><h3><a  style="color:black;" href={{ url('/online-course') }}>Online Course</a></h3></div>
						</div>
						<p class="card-text text-secondary text-center">線上課程</p>
					</div>
					</div>
				</div>

				<div class="col">
						<div class="card border-0">
						<div class="card-body">
							<div class="text-center">
								<a href={{ url('/calendar') }}>
								<img src="https://image.flaticon.com/icons/svg/504/504677.svg" width="150" alt="..." class="rounded">
								</a>
								<br><br>
								<div class="title"><h3><a  style="color:black;" href={{ url('/calendar') }}>Calendar</a></h3></div>
							</div>
							<p class="card-text text-secondary text-center">行事曆</p>
						</div>
						</div>
				</div>

				</div>
				<!-- end: Row -->

			<hr>
			
			<div class="row">
				<div class="col">
				<div class="icons-box-vert">
				<img src="https://image.flaticon.com/icons/svg/204/204286.svg" width="70" alt="..." class="rounded" alt="" srcset="">
				<div class="icons-box-vert-info">
					<a style="color:black;" href={{ url('/activity-record') }}>
						<h3>Activity Record</h3>
						<br>
						<hr>
						<p>活動紀實</p>
					</a>
				</div>
				<div class="clear"></div>
				</div>
			</div>
			<div class="col">
				<div class="icons-box-vert">
				<img src="https://image.flaticon.com/icons/svg/236/236816.svg" width="70" alt="..." class="rounded" alt="" srcset="">
				<div class="icons-box-vert-info">
				<a style="color:black;" href={{ url('/about-us') }}>
					<h3>About Us</h3>
					<br>
					<hr>
					<p>關於我們</p>
				</a>
				</div>
				<div class="clear"></div>
				</div>
				</div>
			</div>

		</div>
		<!--end: Container-->

	</div>
	<!-- end: Wrapper  -->

   @include('website.layouts.footer')




<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
@include('website.layouts.jsFileAsBody')
<!-- end: Java Script -->
</body>
</html>