
@extends("layouts.tail")
@section("title","咨询首页")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->




<div class="coursecont">
<div class="coursepic">
    <h3 class="righttit">题库</h3>
    <div class="clearh"></div>
    <span class="bread nob">
    @if($data->question_type_id==1)
        题目类型：<a class="fombtn" href="/question/dan">单选题</a>
    @elseif($data->question_type_id==2)
        题目类型：<a class="fombtn" href="/question/duo">多选题</a>
    @elseif($data->question_type_id==3)
        题目类型：<a class="fombtn" href="/question/jian">简答题</a>
    @endif
    </span>
    
</div>  
<div class="clearh"></div>
<div class="coursetext">
    
        <div class="articlelist">
                <h3><a class="artlink" href="#">题目： {{$data->question_name}}</a></h3>
                <p>
                   答案： <textarea name="" id="" cols="40" rows="5"></textarea>
                </p>
                <p id="question_daan"><a href="">查看答案</a></p>
                <span></span>
                <p class="artilabel">
                <b class="labtime"> {{date('Y-m-d H:i:s',$data->question_time)}}</b>
                </p>
                <div class="clearh">
                    
                </div>
        </div>

    <div class="clearh" style="height:20px;"></div>
    <span class="pagejump">
        <!-- <p class="userpager-list">
            
           <a href="#" class="page-number">首页</a>
           <a href="#" class="page-number">上一页</a>
           <a href="#" class="page-number">1</a>
           <a href="#" class="page-number pageractive">2</a>
           <a href="#" class="page-number">3</a>
            <a href="#" class="page-number">...</a>
            <a href="#" class="page-number">10</a>
           <a href="#" class="page-number">下一页</a>
           <a href="#" class="page-number">末页</a>
        </p> -->
    </span>
    <div class="clearh" style="height:10px;"></div>
</div>

<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">热门题</h3>
    @foreach($hotdata as $k=>$v)
    <div class="gonggao">
        <ul class="hotask">
            @if($v->question_type_id==1)
                <a href="{{url('/question/info/'.$v->question_id)}}">{{$v->question_name}}</a>
            @elseif($v->question_type_id==2)
                <a href="{{url('/question/info/'.$v->question_id)}}">{{$v->question_name}}</a>
            @elseif($v->question_type_id==3)
                <a href="{{url('/question/info/'.$v->question_id)}}">{{$v->question_name}}</a>
            @endif
        </ul>
    </div>
    @endforeach
    </div>
</div>

<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">优秀讲师</h3>
    
    <div class="teacher">
    
    @foreach($teacherdata as $k=>$v)
    <!-- 跳转讲师详情页面 - - - - - - - -  - - - - - - - - - - - - - - - -  -->
    <div class="teapic">
        <a href="#"  target="_blank"><img src="{{env('IMG_URL')}}{{$v->lereg_qual}}" height="60" ></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">{{$v->lereg_name}}</a></h3>
    </div>
    @endforeach
    
    
    <div class="clearh"></div>
    </div>
    </div>
</div>
   
</div>



<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
<script>
    $("#question_daan").click(function(){
        alert(123)
    })
</script>
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection