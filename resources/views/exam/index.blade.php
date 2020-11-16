
@extends("layouts.tail")
@section("title","咨询首页")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->



<div class="coursecont">
<!-- <div class="coursepic"> -->
  <!--   <h3 class="righttit">全部资讯</h3>
    <div class="clearh"></div>
    <span class="bread nob">
        <a class="fombtn cur" href="/index/articlelist">全部资讯</a>
        <a class="fombtn" href="/index/articlelist">热门资讯</a>
        <a class="fombtn" href="/index/articlelist">考试指导</a>
        <a class="fombtn" href="/index/articlelist">精彩活动</a>
    </span> -->
    
<!-- </div> -->
<div class="clearh"></div>
<div class="coursetext">

	@foreach($data as $k=>$v)

    <div class="articlelist">
        <h3><a class="artlink" href="{{url('/exam/info/'.$v->exam_id)}}">{{$v->exam_name}}</a></h3>
        <p> 
			
			开始时间：{{$v->start_time}}
		</p>
		<p>
			结束时间：{{$v->end_time}}
         </p>
        <p class="artilabel">
        <span class="ask_label">热门考题</span>
        <b class="labtime">{{date("Y-m-d H:i:s",$v->exam_time)}}</b>
        </p>
        <div class="clearh"></div>
    </div>

    @endforeach
    
    
    <div class="clearh" style="height:20px;"></div>
   <!--  <span class="pagejump">
        <p class="userpager-list">
           <a href="#" class="page-number">首页</a>
           <a href="#" class="page-number">上一页</a>
           <a href="#" class="page-number">1</a>
           <a href="#" class="page-number pageractive">2</a>
           <a href="#" class="page-number">3</a>
            <a href="#" class="page-number">...</a>
            <a href="#" class="page-number">10</a>
           <a href="#" class="page-number">下一页</a>
           <a href="#" class="page-number">末页</a>
        </p>
    </span> -->
    <div class="clearh" style="height:10px;"></div>
</div>

<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">热门考题</h3>

    @foreach($hotdata as $k=>$v)
    <div class="gonggao">
    <ul class="hotask">
            
            <li><a class="ask_link" href="{{url('/exam/info/'.$v->exam_id)}}"><strong>●</strong>{{$v->exam_name}}</a></li>
            
        </ul>
    </div>
    @endforeach
    </div>
</div>

<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">推荐讲师</h3>
    <div class="teacher">

    
    @foreach($teacherdata as $k=>$v)
    <div class="teapic">
        <a href="{{url('/index/teacher/'.$v->lereg_id)}}"  target="_blank"><img src="{{env('IMG_URL')}}{{$v->lereg_qual}}" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="{{url('/index/teacher/'.$v->lereg_id)}}" class="ask_link" target="_blank">{{$v->lereg_name}}</a></h3>
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


