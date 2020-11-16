@extends("layouts.coursecont")
@section("title","课程首页")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic">
	<div class="course_img"><img src="{{env('IMG_URL')}}{{$first_data->course_img}}" width="500"></div>
    <div class="coursetitle">
   		<a class="state">{{$first_data->course_status==1?'更新中':'已完结'}}</a>
    	<h2 class="courseh2">{{$first_data->course_name}}</h2>    
        <p class="courstime">总课时：<span class="course_tt">{{$first_data->course_num}}课时</span></p>
		<p class="courstime">课程时长：<span class="course_tt">{{$first_data->course_video_time_h}}小时</span></p>
        <p class="courstime">学习人数：<span class="course_tt">{{$first_data->course_view}}人</span></p>
		<p class="courstime" lect_id="{{$first_data->lect_id}}">讲师：{{$lect_name}}老师</p>
		<p class="courstime">课程评价：<img width="71" height="14" src="/status/images/evaluate5.png">&nbsp;&nbsp;<span class="hidden-sm hidden-xs">5.0分（10人评价）</span></p>
        <!--<p><a class="state end">完结</a></p>-->      
        <span class="coursebtn"><a class="btnlink" href="/detail/course/{{$first_data->course_id}}.html">加入学习</a><a class="codol fx" href="javascript:void(0);" onClick="$('#bds').toggle();">分享课程</a><a class="codol sc" href="#">收藏课程</a></span> 
		<div style="clear:both;"></div>
		<div id="bds">
            <div class="bdsharebuttonbox">
				<a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a>
				<a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
				<a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a>
				<a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a>
				<a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a>
				<a href="#" class="bds_more" data-cmd="more"></a>
				<a class="bds_count" data-cmd="count"></a>
			</div>
            <script>
			window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"24"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/status/api//status/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
			</script>
       </div>
    </div>
    <div class="clearh"></div>
</div>

<div class="clearh"></div>
<div class="coursetext">
	<h3 class="leftit">课程简介</h3>
    <p class="coutex">{{$first_data->course_desc}}</p>
	<div class="clearh"></div>
	<h3 class="leftit">课程目录</h3>
    <dl class="mulu">
    @foreach($first_data->chapter as $k=>$v)
    	<dt><a href="/index/coursecont/{{$v['chapter_id']}}" class="graylink">第{{$k+1}}章&nbsp;&nbsp;{{$v['chapter_name']}}</a></dt>
        @foreach($v['section'] as $kk=>$vv)
        <dd><a href="">{{$vv['section_name']}}</a></dd>
        @endforeach
    @endforeach
    	
</div>

<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">授课讲师</h3>
    <div class="teacher">
    <div class="teapic ppi">
    <a href="/index/teacher" target="_blank"><img src="/{{$first_data->lect_img}}" width="80" class="teapicy" title="{{$first_data->lect_name}}"></a>
    <h3 class="tname"><a href="/index/teacher" class="peptitle" target="_blank">{{$first_data->lect_name}}</a><p style="font-size:14px;color:#666">{{$first_data->course_name}}讲师</p></h3>
    </div>
    <div class="clearh"></div>
    <p>{{$first_data->lect_name}}</p>
    </div>
    </div>
</div>

<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">课程公告</h3>
    <div class="gonggao">
        @foreach($article_data as $v)
        <div class="clearh"></div>
        <p>{{$v['ati_name']}}<br/>
        <span class="gonggao_time">{{$v['ati_add_time']}}</span>
        </p>
        @endforeach
	    <div class="clearh"></div>
    </div>
    </div>
</div>

<div class="ctext">
    <div class="cr1">
        <h3 class="righttit">相关课程</h3>
        <div class="teacher">
        @foreach($correlation_data as $v)
            <div class="teapic">
                <a href="/detail/{{$v['course_id']}}.html"  target="_blank"><img src="{{env('APP_URL')}}{{$v['course_img']}}" height="60" title="{{$v['course_name']}}"></a>
                <h3 class="courh3"><a href="/detail/{{$v['course_id']}}.html" class="peptitle" target="_blank">{{$v['course_name']}}</a></h3>
            </div>
            <div class="clearh"></div>
        @endforeach
        </div>
    </div>
</div>
   
</div>



<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
@endsection