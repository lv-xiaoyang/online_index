@extends("layouts.mycourse")
@section("title","登录页面")
@section("content")

<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="clearh"></div>
<div class="membertab">
<div class="memblist">
	<div class="membhead">
    <div style="text-align:center;"><img src="/static/images/0-0.JPG" width="80" ></div>
    <div style="width:220px;text-align:center;">
    <p class="membUpdate mine">某某某</p> 
    <p class="membUpdate mine"><a href="/index/mysetting">修改信息</a>&nbsp;|&nbsp;<a href="/index/myrepassword">修改密码</a></p>
    <div class="clearh"></div>
    </div>
    </div>
    <div class="memb">
   
    <ul>
    	<li class="currnav"><a class="mb1" href="/index/mycourse">我的课程</a></li>
		<li><a class="mb3" href="/index/myask">我的问答</a></li>
		<li><a class="mb4" href="/index/mynote">我的笔记</a></li>
		<li><a class="mb12" href="/index/myhomework">我的作业</a></li>
        <li><a class="mb2" href="/index/training_list" target="_blank">我的题库</a></li>
   </ul>
   
    </div>

    
  </div>


	<div class="membcont">
<h3 class="mem-h3">我的课程</h3>
<div class="box demo2" style="width:820px;">
			<ul class="tab_menu" style="margin-left:30px;">
				<li class="current">学习中</li>
				<li>已学完</li>
				<li>收藏</li>
			</ul>
			<div class="tab_box">
				<div>
					<ul class="memb_course">
                    	
                        <li>
                            <div class="courseli">
                            <a href="/index/video" target="_blank"><img width="230" src="/static/images/c8.jpg"></a>
                            <p class="memb_courname"><a href="/index/video" class="blacklink">会计基础</a></p>
                            <div class="mpp">
                                <div class="lv" style="width:20%;"></div>
                            </div>
                            <p class="goon"><a href="/index/video"><span>继续学习</span></a></p>
                            </div>
                        </li>
<li>
                            <div class="courseli">
                            <a href="/index/video" target="_blank"><img width="230" src="/static/images/c8.jpg"></a>
                            <p class="memb_courname"><a href="/index/video" class="blacklink">会计基础</a></p>
                            <div class="mpp">
                                <div class="lv" style="width:20%;"></div>
                            </div>
                            <p class="goon"><a href="/index/video"><span>继续学习</span></a></p>
                            </div>
                        </li>
<li>
                            <div class="courseli">
                            <a href="/index/video" target="_blank"><img width="230" src="/static/images/c8.jpg"></a>
                            <p class="memb_courname"><a href="/index/video" class="blacklink">会计基础</a></p>
                            <div class="mpp">
                                <div class="lv" style="width:20%;"></div>
                            </div>
                            <p class="goon"><a href="/index/video"><span>继续学习</span></a></p>
                            </div>
                        </li>
                        
                        
						
                        
                       
                        <div style="height:10px;" class="clearfix"></div>
                    </ul>
                    
				</div>
				<div class="hide">
					<div>
					<ul class="memb_course">
                    	
                        <li>
                            <div class="courseli">
                            <a href="/index/video" target="_blank"><img width="230" src="/static/images/c8.jpg"></a>
                            <p class="memb_courname"><a href="coursecont.html" class="blacklink">会计基础</a></p>
							<div class="mpp">
                                <div class="lv" style="width:100%;"></div>
                            </div>
                            <p class="goon"><a href="/index/coursecont"><span>查看课程</span></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="courseli">
                            <a href="/index/video" target="_blank"><img width="230" src="/static/images/c8.jpg"></a>
                            <p class="memb_courname"><a href="coursecont.html" class="blacklink">会计基础</a></p>
							<div class="mpp">
                                <div class="lv" style="width:100%;"></div>
                            </div>
                            <p class="goon"><a href="/index/coursecont"><span>查看课程</span></a></p>
                            </div>
                        </li>
                        
                       
                        <div class="clearfix" style="height:10px;"></div>
                    </ul>
                    
				</div>
				</div>
				<div class="hide">
					<div>
					<ul class="memb_course">                   	
                        <li>
                            <div class="courseli mysc">
                            <a href="/index/video" target="_blank"><img width="230" src="/static/images/c8.jpg" class="mm"></a>
                            <p class="memb_courname"><a href="/index/video" class="blacklink">会计基础</a></p>
                            <div class="mpp">
                                <div class="lv" style="width:20%;"></div>
                            </div>
                            <p class="goon"><a href="#"><span>继续学习</span></a></p>
							<div class="mask"><span class="qxsc"  title="移除收藏">▬</span></div>
                            </div>
                        </li>
                        <li>
                            <div class="courseli mysc">
                            <a href="/index/video" target="_blank"><img width="230" src="/static/images/c8.jpg" class="mm"></a>
                            <p class="memb_courname"><a href="/index/video" class="blacklink">会计基础</a></p>
                            <div class="mpp">
                                <div class="lv" style="width:20%;"></div>
                            </div>
                            <p class="goon"><a href="#"><span>继续学习</span></a></p>
							<div class="mask"><span class="qxsc"  title="移除收藏">▬</span></div>
                            </div>
                        </li>                                     
                        <div class="clearfix" style="height:10px;"></div>
                    </ul>
				</div>
				</div>
				
			</div>
		</div>
</div>


<div class="clearh"></div>
</div>

<!-- InstanceEndEditable -->


<div class="clearh"></div>
@endsection