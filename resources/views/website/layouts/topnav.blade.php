<nav class="navbar navbar-expand-lg navbar-light bg-light setnav">
    <div class="col-1"></div>
	@if(!Auth::check())
	<div class="navbar-toggler">
			<a href={{ url('./register') }}>註冊</a>
			<a href={{ url('./login') }}>登入</a>
	</div>
	@endif

	<select name="forma" onchange="location = this.value;" class="navbar-toggler">
	<option value="#">選擇...</option>
	@if(Auth::check())
		<option value={{ url('./logout') }}>登出</option>
		@if(Auth::user()->isAdmin())
		<option value={{ url('./webAdmin') }}>網站管理</option>
		@else
		<option value={{ url('./student-center') }}>學生中心</option>
		@endif
		<option value="#">------</option>
	@endif

	<option value={{ url('/') }}>回首頁</option>
	</select>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href={{ url('./curse-objectives') }} >教學目標 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./courseMainPoint')}} >課程大綱 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./SpeechActivities')}} >演講活動 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./classicBookShare')}}>經典著作 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./goodArticle')}}>好文閱讀 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./stu-performance') }}>學生成果展示 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./videoTrip')}}>影音之旅 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./online-course')}}>線上課程 <span class="sr-only">(current)</span></a>
        </li>
		<li class="nav-item">
            <a class="nav-link" href={{ url('./calendar')}}>行事曆 <span class="sr-only">(current)</span></a>
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
					<li><a href={{ url('./student-center') }}>學生中心</a></li>
					@endif
				@endif
				</ul>
			</div>
		</div>
    </div>
</nav>
<br><br><br>
