
@extends("layouts.tail")
@section("title","咨询首页")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->




<div class="coursecont">
<div class="coursepic">
    <h3 class="righttit">题库</h3>
    <div class="clearh"></div>
    <span class="bread nob">
        <a class="fombtn cur" href="/question/index">全部题</a>
        <a class="fombtn" href="/question/dan">单选题</a>
        <a class="fombtn" href="/question/duo">多选题</a>
        <a class="fombtn" href="/question/jian">简答题</a>
    </span>
    
</div>  
<div class="clearh"></div>
<div class="coursetext">
    @php
        $url_name=request()->route()->getName();
    @endphp

    

    @if($url_name=='jian')
        
        @foreach($data as $k=>$v)
            <div class="articlelist">
                <h3><a class="artlink" href="{{url('/question/info/'.$v->question_id)}}">题目： {{$v->question_name}}</a></h3>
                <p>
                   答案： <textarea name="" id="" cols="40" rows="5"></textarea>
                </p>
                <p class="artilabel">
                <b class="labtime"> {{date('Y-m-d H:i:s',$v->question_time)}}</b>
                </p>
                <div class="clearh">
                    
                </div>
            </div>
        @endforeach
        
    @elseif($url_name=='dan')
        
        @foreach($data as $k=>$v)
            <div class="articlelist">
                <h3><a class="artlink" href="{{url('/question/info/'.$v->question_id)}}">{{$v->question_name}}</a></h3>
                <p></p>
                <p class="artilabel">
                <!-- <b class="labtime"> -->
                    A.{{$v->cor_a}}<input type="radio" id="question_cor"   value="1"  name="cor_dan">
                    B.{{$v->cor_b}}<input type="radio" id="question_cor_2" value="2"  name="cor_dan">
                    C.{{$v->cor_c}}<input type="radio" id="question_cor_3" value="3"  name="cor_dan">
                    D.{{$v->cor_d}}<input type="radio" id="question_cor_4" value="4"  name="cor_dan">
                <!-- </b> -->
                </p>
                <div class="clearh"></div>
            </div>
        @endforeach
    
    @elseif($url_name=='duo')

        @foreach($data as $k=>$v)
            <div class="articlelist">
                <h3><a class="artlink" href="{{url('/question/info/'.$v->question_id)}}">{{$v->question_name}}</a></h3>
                <p></p>
                <p class="artilabel">
                <!-- <b class="labtime"> -->
                    A.{{$v->cor_a}}<input type="checkbox">
                    B.{{$v->cor_b}}<input type="checkbox">
                    C.{{$v->cor_c}}<input type="checkbox">
                    D.{{$v->cor_d}}<input type="checkbox">
                <!-- </b> -->
                <b class="labtime"> {{date('Y-m-d H:i:s',$v->question_time)}}</b>
                </p>
                <div class="clearh"></div>
            </div>
        @endforeach
    
    @elseif($url_name=='index')
        @foreach($data as $k=>$v)
            @if($v->question_type_id==1)
                <div class="articlelist">
                    <h3><a class="artlink" href="{{url('/question/info/'.$v->question_id)}}">{{$v->question_name}}</a></h3>
                    <p></p>
                    <p class="artilabel">
                    <!-- <b class="labtime"> -->
                        A.{{$v->cor_a}}<input type="radio" id="question_cor"   value="1"  name="cor_dan">
                        B.{{$v->cor_b}}<input type="radio" id="question_cor_2" value="2"  name="cor_dan">
                        C.{{$v->cor_c}}<input type="radio" id="question_cor_3" value="3"  name="cor_dan">
                        D.{{$v->cor_d}}<input type="radio" id="question_cor_4" value="4"  name="cor_dan">
                    <!-- </b> -->
                    <b class="labtime"> {{date('Y-m-d H:i:s',$v->question_time)}}</b>
                    </p>
                    <div class="clearh"></div>
                </div>
            @elseif($v->question_type_id==2)
                <div class="articlelist">
                    <h3><a class="artlink" href="{{url('/question/info/'.$v->question_id)}}">{{$v->question_name}}</a></h3>
                    <p></p>
                    <p class="artilabel">
                    <!-- <b class="labtime"> -->
                        A.{{$v->cor_a}}<input type="checkbox">
                        B.{{$v->cor_b}}<input type="checkbox">
                        C.{{$v->cor_c}}<input type="checkbox">
                        D.{{$v->cor_d}}<input type="checkbox">
                    <!-- </b> -->
                        <b class="labtime"> {{date('Y-m-d H:i:s',$v->question_time)}}</b>
                    </p>
                    <div
                     class="clearh"></div>
                </div>
            @elseif($v->question_type_id==3)
                <div class="articlelist">
                    <h3><a class="artlink" href="{{url('/question/info/'.$v->question_id)}}">题目： {{$v->question_name}}</a></h3>
                    <p>
                       答案： <textarea name="" id="" cols="40" rows="5"></textarea>
                    </p>
                    <p class="artilabel">
                    <b class="labtime"> {{date('Y-m-d H:i:s',$v->question_time)}}</b>
                    </p>
                    <div class="clearh">
                        
                    </div>
                </div>
            @endif
           
        @endforeach
    @endif


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
        <a href="{{url('/index/teacher/'.$v->lereg_id)}}"  target="_blank"><img src="{{env('IMG_URL')}}{{$v->lereg_qual}}" height="60" ></a>
        <h3 class="courh3"><a href="{{url('/index/teacher/'.$v->lereg_id)}}" class="ask_link" target="_blank">{{$v->lereg_name}}</a></h3>
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

<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection