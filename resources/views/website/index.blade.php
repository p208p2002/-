<!DOCTYPE html>
<html lang="en">
<head> @include('website.layouts.headContext')
</head>
<body>
	@include('website.layouts.topnav')
	<!--  -->

	<div class="row"></div>
		<div class="row">
			<div class="col-1"></div>
			<div class="col">
				<a class="navbar-brand" href={{ url('./') }}>
					<img src={{ url('./website/img/logo.png') }} width="150" class="d-inline-block align-top" alt="">
				</a>
			</div>
			<div class="col">

			</div>
		</div>
	<hr>
	<!--  -->
	<!-- start: Slider -->
	<div class="slider-wrapper">

		<div id="da-slider" class="da-slider">
			<div class="da-slide">
				<h2>Twitter Bootstrap</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/twitter.png" alt="image01" /></div>
			</div>
			<div class="da-slide">
				<h2>Responsive Design</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/responsive.png" alt="image02" /></div>
			</div>
			<div class="da-slide">
				<h2>HTML5</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/html5.png" alt="image03" /></div>
			</div>
			<div class="da-slide">
				<h2>CSS3</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				<a href="#" class="da-link">Read more</a>
				<div class="da-img"><img src="img/parallax-slider/css3.png" alt="image04" /></div>
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
			<table class="table">
				<thead class="thead-default border border-success">
				  <tr>
					<th>#</th>
					<th>發佈時間</th>
					<th>分類</th>
					<th>標題</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
				  </tr>
				  <tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				  </tr>
				  <tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				  </tr>
				  <tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td>Larry</td>
					<td>the Bird</td>
					<td>@twitter</td>
				</tr>
				</tbody>
			  </table>
			  <div class="row">
				  <div class="col-10"></div>
				  <div class="col">
						<button type="button" class="btn btn-light">上10則</button>
						<button type="button" class="btn btn-light">下10則</button>
				  </div>
			  </div>
		</div>

		<hr>



			<!-- start: Row -->
			<div class="row">
			<div class="col">
				<div class="card border-0">
				<div class="card-body">
					<div class="text-center">
					<img src="https://image.flaticon.com/icons/svg/235/235296.svg" width="150" alt="..." class="rounded-circle">
					<br><br>
					<div class="title"><h3>課程大綱</h3></div>
					</div>
					<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
				</div>
				</div>
			</div>
			<div class="col">
				<div class="card border-0">
				<div class="card-body">
					<div class="text-center">
						<img src="https://image.flaticon.com/icons/svg/148/148990.svg" width="150" alt="..." class="rounded-circle">
						<br><br>
						<div class="title"><h3>好文閱讀</h3></div>
					</div>
					<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
				</div>
				</div>
			</div>
				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<img src="https://image.flaticon.com/icons/svg/234/234694.svg" width="150" alt="..." class="rounded-circle">
							<br><br>
							<div class="title"><h3>教學觀摩</h3></div>
						</div>
						<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
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
								<img src="https://image.flaticon.com/icons/svg/201/201578.svg" width="150" alt="..." class="rounded-circle">
								<br><br>
								<div class="title"><h3>影音之旅</h3></div>
							</div>
							<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
						</div>
						</div>
				</div>

				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<img src="https://image.flaticon.com/icons/svg/344/344422.svg" width="150" alt="..." class="rounded-circle">
							<br><br>
							<div class="title"><h3>經典著作分享</h3></div>
						</div>
						<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
					</div>
					</div>
				</div>
				<div class="col">
					<div class="card border-0">
					<div class="card-body">
						<div class="text-center">
							<img src="https://image.flaticon.com/icons/svg/201/201595.svg" width="150" alt="..." class="rounded-circle">
							<br><br>
							<div class="title"><h3>學生成果展示</h3></div>
						</div>
						<p class="card-text text-secondary text-center">With supporting text below as a natural lead-in to additional content.</p>
					</div>
					</div>
				</div>

				</div>
				<!-- end: Row -->

			<hr>

		</div>
		<!--end: Container-->

	</div>
	<!-- end: Wrapper  -->

    <!-- start: Footer Menu -->
	<div id="footer-menu" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<p class="text-center"></p>
		<!-- end: Container  -->
	</div>
	<!-- end: Footer Menu -->

	<div class="container-fluid" id="footer">
			<div class="row">
				<div class="col-1"></div>
				<div class="col">
					<ul class="list-unstyled">
							<li class="media">
								<img class="d-flex mr-3" src="http://aeit.nutc.edu.tw/images/NUTC.png" alt="Generic placeholder image">
								<div class="media-body">
								<!-- <h5 class="mt-0 mb-1">臺中科大</h5> -->
								<!-- <hr> -->
								<!-- best school best school best school best school best school -->
								</div>
					</ul>
				</div>
				<div class="col">
					<ul class="list-unstyled">
						<li class="media">
							<img class="d-flex mr-3" src="http://aeit.nutc.edu.tw/images/NCUT.png" alt="Generic placeholder image">
							<div class="media-body">
							<!-- <h5 class="mt-0 mb-1">勤益科大</h5> -->
							<!-- <hr> -->
							<!-- best school best school best school best school best school -->
						</div>
					</ul>
				</div>
				<div class="col">
					<ul class="list-unstyled">
						<li class="media">
							<img class="d-flex mr-3" src="http://aeit.nutc.edu.tw/images/PU.png" alt="Generic placeholder image">
							<div class="media-body">
							<!-- <h5 class="mt-0 mb-1">靜宜大學</h5> -->
							<!-- <hr> -->
							<!-- best school best school best school best school best school -->
						</div>
					</ul>
				</div>
				<div class="col-1"></div>
			</div>
			<br>
			<hr>

			<div class="row">
				<div class="col">
					<p class="text-right">2017臺中科大</p>
				</div>
				<div class="col-1"></div>
			</div>
	</div>




<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
@include('website.layouts.jsFileAsBody')
<!-- end: Java Script -->
</body>
</html>