@extends('layouts.index')
@section('title', '首页')
@section('content')
<div class="content">
<div class="fullwidthbanner-container">
		<div id="revolution-slider" style="max-height:500px !important; background:#46B0AC">
			<ul>
            	 <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="/status/images-slider/thumbs/thumb1.jpg">
					<!--  BACKGROUND IMAGE -->
					<img src="/status/images-slider/wide2.jpg" alt="" />

					<!-- THE CAPTIONS IN THIS SLIDE -->
					<div class="tp-caption sfl"
						data-x="-130"
						data-y="100"
						data-speed="300"
						data-start="300"
						data-easing="easeOutBack">
						<img src="/status/images-slider/rb.png" alt="">
					</div>

					<div class="caption sfb"
						data-x="0"
						data-y="130"
						data-speed="300"
						data-start="800"
						data-easing="easeOutExpo">
						<h2>谋刻网全新上线</h2>
					</div>

					<div class="tp-caption med-white sfl"
						data-x="0"
						data-y="220"
						data-speed="300"
						data-start="1000"
						data-easing="easeOutExpo" style="font-size:20px;">
						请自备小板凳，强势围观。
					</div>

					<div class="tp-caption small-white sfr"
						data-x="0"
						data-y="260"
						data-speed="300"
						data-start="1200"
						data-easing="easeOutExpo">
						<a href="#" class="btn btn-large btn-primary">在线测评</a>
					</div>

					<div class="tp-caption small-white lfb"
						data-x="300"
						data-y="90"
						data-speed="1000"
						data-start="1400"
						data-easing="easeOutExpo">
						<img src="/status/images-slider/slider-10.png" alt="" />
					</div>
				</li>
				 <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="/status/images-slider/thumbs/thumb1.jpg">
					<!--  BACKGROUND IMAGE -->
					<img src="/status/images-slider/wide3.jpg" alt="" />

					<!-- THE CAPTIONS IN THIS SLIDE -->
					<div class="tp-caption sfl"
						data-x="-130"
						data-y="150"
						data-speed="300"
						data-start="300"
						data-easing="easeOutBack">
						<img src="/status/images-slider/rb.png" alt="">
					</div>

					<div class="tp-caption med-white lfl"
						data-x="0"
						data-y="200"
						data-speed="300"
						data-start="800"
						data-easing="easeOutExpo" style="font-size:18px; line-height:25px;">
						<p>我们一直致力于优秀的职业教育，<br/>为你搭建成就梦想的舞台。</p>
					</div>

					<div class="caption sfb very-big-white"
						data-x="700"
						data-y="230"
						data-speed="300"
						data-start="1200"
						data-easing="easeOutExpo">
						<i>winner</i>
					</div>
					<div class="tp-caption med-white lfl"
						data-x="0"
						data-y="150"
						data-speed="300"
						data-start="800"
						data-easing="easeOutExpo" style="font-size:22px; line-height:30px;">
						<h2 style="font-size:30px">职业教育在线测评与学习平台</h2>
					</div>

					<div class="tp-caption small-white lfr"
						data-x="0"
						data-y="280"
						data-speed="300"
						data-start="1600"
						data-easing="easeOutExpo">
						<a href="#" class="btn btn-large btn-primary">在线学习</a>
					</div>


					<div class="tp-caption lfb"
						data-x="390"
						data-y="90"
						data-speed="1000"
						data-start="2000"
						data-easing="easeOutExpo"
						data-endeasing="fade" style="left:700px"
						>
						<img src="/status/images-slider/guy-shadow.png" alt="">
					</div>

					<div class="tp-caption small-white lft"
						data-x="240"
						data-y="0"
						data-speed="2000"
						data-start="2600"
						data-easing="easeOutExpo">
						<img src="/status/images-slider/spotlight.png" alt="">
					</div>

					<div class="tp-caption fade"
						data-x="390"
						data-y="90"
						data-speed="2000"
						data-start="2600"
						data-easing="easeOutExpo">
						<img src="/status/images-slider/guy.png" alt="">
					</div>
				</li>
				
				<!-- THE FIRST SLIDE -->
				<li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="/status/images-slider/thumbs/thumb1.jpg">
					<!--  BACKGROUND IMAGE -->
					<img src="/status/images-slider/wide1.jpg" alt="" />

					<!-- THE CAPTIONS IN THIS SLIDE -->
					<div class="caption large_text sfb"
						data-x="300"
						data-y="207"
						data-speed="300"
						data-start="800"
						data-easing="easeOutExpo">
						<img src="/status/images-slider/our-features.png" alt="">
					</div>

					<div class="tp-caption sfr"
						data-x="220"
						data-y="115"
						data-speed="300"
						data-start="1000"
						data-easing="easeOutBack">
						<img src="/status/images-slider/lu.png" alt="">
					</div>

					<div class="tp-caption sfr"
						data-x="-50"
						data-y="110"
						data-speed="300"
						data-start="1200"
						data-easing="easeOutBack">
						<img src="/status/images-slider/clean.png" alt="">
					</div>

					<div class="tp-caption sfr"
						data-x="180"
						data-y="217"
						data-speed="300"
						data-start="1400"
						data-easing="easeOutBack">
						<img src="/status/images-slider/lm.png" alt="">
					</div>

					<div class="tp-caption sfr"
						data-x="-20"
						data-y="230"
						data-speed="300"
						data-start="1600"
						data-easing="easeOutBack">
						<img src="/status/images-slider/responsive.png" alt="">
					</div>

					<div class="tp-caption sfr"
						data-x="220"
						data-y="285"
						data-speed="300"
						data-start="1800"
						data-easing="easeOutBack">
						<img src="/status/images-slider/lb.png" alt="">
					</div>

					<div class="tp-caption sfr"
						data-x="40"
						data-y="360"
						data-speed="300"
						data-start="2000"
						data-easing="easeOutBack">
						<img src="/status/images-slider/bootstrap.png" alt="">
					</div>

					<div class="tp-caption sfl"
						data-x="625"
						data-y="115"
						data-speed="300"
						data-start="2200"
						data-easing="easeOutBack">
						<img src="/status/images-slider/ru.png" alt="">
					</div>

					<div class="tp-caption sfl"
						data-x="730"
						data-y="85"
						data-speed="300"
						data-start="2400"
						data-easing="easeOutBack">
						<img src="/status/images-slider/solid.png" alt="">
					</div>

					<div class="tp-caption sfl"
						data-x="650"
						data-y="217"
						data-speed="300"
						data-start="2600"
						data-easing="easeOutBack">
						<img src="/status/images-slider/rm.png" alt="">
					</div>

					<div class="tp-caption sfl"
						data-x="770"
						data-y="217"
						data-speed="300"
						data-start="2800"
						data-easing="easeOutBack">
						<img src="/status/images-slider/lightweight.png" alt="">
					</div>

					<div class="tp-caption sfl"
						data-x="625"
						data-y="285"
						data-speed="300"
						data-start="3000"
						data-easing="easeOutBack">
						<img src="/status/images-slider/rb.png" alt="">
					</div>

					<div class="tp-caption sfl"
						data-x="730"
						data-y="345"
						data-speed="300"
						data-start="3200"
						data-easing="easeOutBack">
						<img src="/status/images-slider/fresh.png" alt="">
					</div>
				</li>

				
			   
			</ul>
		</div>
</div>
<div class="td1">
	<div class="tdcont">
    	<span class="tdimg"><img src="/status/images/ico4.jpg" width="450"></span>
        <span class="tdtext">
        	<h3>完全免费课程</h3>
            <p>精心录制视频课程与讲解，全部课程完全免费。</p><br/>
            <p><a href="courselist.html" class="btninto">开始学习</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>
<div class="td2">
	<div class="tdcont">
    	<span class="tdimg1"><img src="/status/images/ico5.jpg" width="500"></span>
        <span class="tdtext1">
        	<h3 class="co1">智能评估题库</h3>
            <p>智能能力评估，学员可以通过具体题目，匹配相
关知识点,文字解析与视频解析相结合。</p><br/>
			<p><a href="training.html" class="btninto">点击测评</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>
<div class="td1">
	<div class="tdcont np">
    	<span class="tdimg" style="margin-top:80px"><img src="/status/images/ico6.jpg" width="550"></span>
        <span class="tdtext" style="margin-top:120px">
        	<h3 class="co2">智能匹配练习</h3>
            <p class="tex1">跟随视频课程同步练习，紧扣重点难
点，点点精通。</p><br/>
			<p><a href="training.html" class="btninto">开始练习</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>
<div class="td2 np">
	<div class="tdcont np">
    	<span class="tdimg1 ni"><img src="/status/images/ico7.png" width="300"></span>
        <span class="tdtext1" style="margin-top:100px;">
        	<h3 class="co3">全天答疑解惑</h3>
            <p class="tex1">谋刻答疑社区，老师学员共同交流，我们的讲师更是倾囊相授，有问必答。</p><br/>
            <p><a href="#" class="btninto">提问问题</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>

<div class="crdiv">

<div class="course">
    <h2 style="text-align:center; font-weight:normal; font-size:34px">精品课程</h2>
    <div class="clearh" style="height:20px;"></div>
    
    <div>
        <ul id="myTab3">
			@foreach($type_data as $v)
				@if($v['type_id']==1)
				<li class="current" value="{{$v['type_id']}}">{{$v['type_name']}}</li>
				@else
				<li class="type" value="{{$v['type_id']}}">{{$v['type_name']}}</li>
				@endif
			@endforeach
        </ul>
        <div class="clearh"></div>
        <div>
           <ul class="courseul course_course" id="myTab3_Content0" style="display: block;">
		   @foreach($course_data as $v)
            <a href="/courselist/detail/{{$v['course_id']}}.html"><li course_id="{{$v['course_id']}}">
            	<div class="courselist">
                <img width="263" style="border-radius:3px 3px 0 0;" src="{{env('APP_URL')}}{{$v['course_img']}}" >
                <p class="courTit">{{$v['course_name']}}</p>
                <div class="gray">
					<span>1小时前更新</span>
					<span class="sp1">{{$v['course_view']}}人学习</span>
					<div style="clear:both"></div>
                </div>
                </div>
		   </li>
		   </a>
			@endforeach
           <div class="clearh"></div>
          </ul>               
        </div>
	</div>
        
    
    
    <div class="line no"></div>
    
    
</div>
<span class="morecourse"><a href="/courselist" class="btnlink">更多课程</a></span>

</div>



<script>
	$(document).on('click','.type',function(){
		var _this=$(this);
		//清除其他li的样式
		_this.siblings().prop('class','type');
		_this.prop('class','current');
		//获取分类id
		var type_id=_this.val();
		//将分类id传到控制器，获取新的课程数据
		$.ajax({
			url:'ajaxIndexCourse',
			type:'get',
			data:{type_id:type_id},
			success:function(res){
				if(res!=null){
					var jj="";
					$.each(JSON.parse(res),function(idx,obj){
						jj +="<a href='/detail/"+obj.course_id+".html'><li course_id='"+obj.course_id+"'><div class='courselist'><img width='263' style='border-radius:3px 3px 0 0;' src='"+obj.course_img+"' ><p class='courTit'>"+obj.course_name+"</p><div class='gray'><span>1小时前更新</span><span class='sp1'>"+obj.course_view+"人学习</span><div style='clear:both'></div></div></div></li></a>";
					});
					$('.course_course').html(jj);
				}else{
					alert('请稍后再试');
				}
				
			}
		})
	})
</script>
@endsection('content')
