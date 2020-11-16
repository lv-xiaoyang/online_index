@extends("layouts.video")
@section("title","课程首页")
@section("content")

   <div class="linevideo" style="overflow-x:hidden">
    	<span class="returnindex"><a class="gray" href="/index/coursecont1" style="font-size:14px;">返回课程</a></span>   
        <span class="taskspan"><span class="ts">课时100</span>&nbsp;&nbsp;<b class="tasktit">会计的概念与目标1</b></span> 
        <div style="width:100%;margin-top:20px;">
			<video width="auto" id="example_video_1" class="video-js vjs-default-skin  vjs-big-play-centered vvi " controls preload="none"  poster="" data-setup="{}"><!--poster是视频未播放前的展示图片-->
			<source src="{{env('VIDEO_URL')}}{{$video_data['video_url']}}" type='video/mp4' />
			<!-- <source src="{{$video_data['video_url']}}" type='video/webm' />
			<source src="{{$video_data['video_url']}}" type='video/ogg' />     -->
			</video>
			<p class="signp"><span class="sign">学过了</span><span class="nextcourse" title="下一课时">∨</span></p>
        </div>       
    </div>    
  <div class="interact">
   		<span class="ii" title="展开或收起">></span>
        <div class="clearh"></div>
        <!--<div class="coursmall">
        
        <img class="csimg" src="/static/images/121.png" width="153" height="75">
        <span class="lineevalue">
        <p>计算机等级考试二级C语言</p>
            <!--<p class="graytext"><img src="/static/images/evaluate.png" width="71" height="14">(181份评价)</p>
            <p class="graytext">讲师：王老师</p>
            <p><a class="dowork" target="_blank" href="#">去做作业→</a></p>
         </span>
         <div class="clearh"></div>
        </div>-->
  
          <div class="box1 demo2">
			<ul class="tab_menu vmulu">
				<li class="current">目录</li>
				<li>笔记</li>
				<li>问答</li>
                <li>作业</li>
            </ul>
			<div class="tab_box tabcard">
				<div style="padding-bottom:30px;">
					<dl class="mulu noo1">
                        <dt>第一章&nbsp;&nbsp;总论</dt>
						<dd class="smalltitle"><strong>第一节&nbsp;&nbsp;会计的概念与目标</strong></dd>
                        <a href="#"><dd><i class="forwa nn"></i><strong class="cataloglink">课时1：会计的概念与目标1</strong></dd></a>
                        <dd><i class="forwa fn"></i><strong class="cataloglink">课时2：会计的概念与目标2</strong></dd>

                        <dt>第二章&nbsp;&nbsp;会计要素与会计等式</dt>
						<dd class="smalltitle"><strong>第一节&nbsp;&nbsp;会计要素</strong></dd>
                        <dd><i class="forwa ff"></i><strong class="cataloglink">课时1：会计要素与会计等式1</strong></dd>
                        <dd><i class="forwa nn"></i><strong class="cataloglink">课时2：会计要素与会计等式2</strong></dd>

						<dt>第三章&nbsp;&nbsp;总论</dt>
						<dd class="smalltitle"><strong>第一节&nbsp;&nbsp;会计的概念与目标</strong></dd>
                        <a href="#"><dd><i class="forwa nn"></i><strong class="cataloglink">课时1：会计的概念与目标1</strong></dd></a>
                        <dd><i class="forwa nn"></i><strong class="cataloglink">课时2：会计的概念与目标2</strong></dd>

						<dt>第四章&nbsp;&nbsp;总论</dt>
						<dd class="smalltitle"><strong>第一节&nbsp;&nbsp;会计的概念与目标</strong></dd>
                        <a href="#"><dd><i class="forwa nn"></i><strong class="cataloglink">课时1：会计的概念与目标1</strong></dd></a>
                        <dd><i class="forwa nn"></i><strong class="cataloglink">课时2：会计的概念与目标2</strong></dd>

						<dt>第五章&nbsp;&nbsp;总论</dt>
						<dd class="smalltitle"><strong>第一节&nbsp;&nbsp;会计的概念与目标</strong></dd>
                        <a href="#"><dd><i class="forwa nn"></i><strong class="cataloglink">课时1：会计的概念与目标1</strong></dd></a>
                        <dd><i class="forwa nn"></i><strong class="cataloglink">课时2：会计的概念与目标2</strong></dd>
                   </dl>	
				   <div class="clearh"></div>
				</div>
				
				<div class="hide">
					<div style="padding-left:25px;">
                    <div class="c_eform" style="width:280px;margin-left:10px;">
                        <div class="clearh" ></div>
                        <textarea rows="7" class="pingjia_con" style="width:100%;height:500px;" onblur="if (this.value =='') this.value='记下课程笔记';this.className='pingjia_con'" onclick="if (this.value=='记下课程笔记') this.value='';this.className='pingjia_con_on'">记下课程笔记</textarea>
                       <a href="#" class="fombtn">提交</a>
                       <div class="clearh"></div>
                    </div>					
				</div>
				</div>
                <div class="hide">
					<div style="padding-left:15px;">                   
                    <div class="c_eform veform">
                    <div class="clearh" ></div>
                        <input class="inputitle pingjia_con" type="text"  value="请输入问题标题" onblur="if (this.value =='') this.value='请输入问题标题';this.className='inputitle pingjia_con'" onclick="if (this.value=='请输入问题标题') this.value='';this.className='inputitle pingjia_con_on'"/>
                        <textarea rows="7" class="pingjia_con" style="width:90%;"  onblur="if (this.value =='') this.value='请输入问题的详细内容';this.className='pingjia_con'" onclick="if (this.value=='请输入问题的详细内容') this.value='';this.className='pingjia_con_on'"></textarea><br/>
                       <a href="#" class="fombtn" style="margin-right:30px;">发布</a>
                       <div class="clearh"></div>
                    </div>
					<ul class="evalucourse" style="width:280px;">
                    	<li>
                        	<p class="vptext"><a target="_blank" class="peptitle" href="#">2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年?</a></p>         <p class="peptime pswer"><span style="float:left;"><b class="coclass">候候&nbsp;&nbsp;</b>发表于 2015-05-8 </span><span class="pepask" style="float:right;">回答(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)&nbsp;&nbsp;&nbsp;&nbsp;浏览(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)</span>					
                            </p>                           
                        </li>
                        <li>
                        	<p class="vptext"><a target="_blank" class="peptitle" href="#">2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年?</a></p>         <p class="peptime pswer"><span style="float:left;"><b class="coclass">候候&nbsp;&nbsp;</b>发表于 2015-05-8 </span><span class="pepask" style="float:right;">回答(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)&nbsp;&nbsp;&nbsp;&nbsp;浏览(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)</span>					
                            </p>                           
                        </li>                       
                    </ul>
                    
				</div>
				</div>
				<div class="hide">
                    <div class="c_eform veform" style="margin-top:15px;margin-left:35px;">
					   <!--四种状态-->
					   <p>此课时暂无作业</p>
					   <p>共4道作业题<a href="/index/homework" target="_blank"><span class="star_zy">继续做题</span></a></p>
					   <p>共4道作业题<a href="/index/homework_jiexi" target="_blank"><span class="star_zy">查看解析</span></a></p>
					   <p>共4道作业题<a href="/index/homework" target="_blank"><span class="star_zy">开始作业</span></a></p>                                 
				</div>
				</div>				
			</div>
		</div> 
    </div>
	@endsection
