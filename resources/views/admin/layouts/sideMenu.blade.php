<h3><a href={{ url('/webAdmin') }} >後台首頁</a></h3><br>
<h3>一般操作</h3>
<div class="list-group">
  <a id="block1-menuItem1" href={{ url('/webAdmin/newNews') }} class="list-group-item list-group-item-action">最新消息</a>
  <a id="block1-menuItem2" href={{ url('/webAdmin/goodArticle') }} class="list-group-item list-group-item-action">好文閱讀</a>
  <a id="block1-menuItem3" href={{ url('/webAdmin/videoTrip') }} class="list-group-item list-group-item-action">影音之旅</a>
  {{--  <a id="block1-menuItem4" href={{ url('/webAdmin/homework') }} class="list-group-item list-group-item-action">課堂作業</a>  --}}
  <a id="block1-menuItem4" href={{ url('/webAdmin/courseMainPoint') }} class="list-group-item list-group-item-action">課程大綱</a>
  <a id="block1-menuItem5" href={{ url('/webAdmin/calendar') }} class="list-group-item list-group-item-action">行事曆</a>
  <a id="block1-menuItem5" href={{ url('/webAdmin/classicBook') }} class="list-group-item list-group-item-action">經典著作</a>
  <a id="block1-menuItem5" href={{ url('/webAdmin/speeches') }} class="list-group-item list-group-item-action">演講活動</a>
  <a id="block1-menuItem5" href={{ url('/webAdmin/course-objectives') }} class="list-group-item list-group-item-action">教學目標</a>
  <a id="block1-menuItem5" href={{ url('/webAdmin/online-course') }} class="list-group-item list-group-item-action">線上課程</a>
  <a id="block1-menuItem5" href={{ url('/webAdmin/activity-record') }} class="list-group-item list-group-item-action">活動紀實</a>
  <a id="block1-menuItem5" href={{ action('Admin\stuWorksController@index') }} class="list-group-item list-group-item-action">學生成果展示</a>
</div><br>

<h3>其他操作</h3>
<ul class="list-group">
    <li class="list-group-item"><a href={{ url('/logout') }}>登出</a></li>
</ul><br>
