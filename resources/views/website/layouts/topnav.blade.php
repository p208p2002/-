		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="footer-menu-links">

						<ul id="footer-nav">
						@if(!Auth::check())
							<li><a href={{ url('./register') }}>註冊</a></li>
							<li><a href={{ url('./login') }}>登入</a></li>
						@endif

						@if(Auth::check())
							<li><a>{{ Auth::user()->name }} 您好!</a></li>
							<li><a href={{ url('./logout') }}>登出</a></li>
							@if(Auth::user()->userLevel==5)
							<li><a href={{ url('./webAdmin') }}>網站管理</a></li>
							@else
							<li><a href={{ url('./memberPlantform') }}>學生中心</a></li>
							@endif
						@endif
						
						</ul>

					</div>
					
				</div>
				<!-- end: Footer Menu Links-->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	