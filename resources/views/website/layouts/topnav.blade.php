<nav class="navbar navbar-expand-lg navbar-light bg-light setnav">
    <div class="col-1"></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
		</ul>
		<div class="span">	
			<div id="footer-menu-links">
				<ul id="footer-nav">
				@if(!Auth::check())
					<li><a href={{ url('./register') }}>註冊</a></li>
					<li><a href={{ url('./login') }}>登入</a></li>
				@endif

				@if(Auth::check())
					<li><a>{{ Auth::user()->name }} 您好!</a></li>
					<li><a href={{ url('./logout') }}>登出</a></li>
					@if(Auth::user()->isAdmin())
					<li><a href={{ url('./webAdmin') }}>網站管理</a></li>
					@else
					<li><a href={{ url('./memberPlantform') }}>學生中心</a></li>
					@endif
				@endif					
				</ul>
			</div>
		</div>
    </div>
</nav>
<br><br><br>
	