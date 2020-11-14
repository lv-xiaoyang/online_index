
@extends("layouts.head")
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
    
    @foreach($data as $k=>$v)
    <div class="articlelist">
        <h3><a class="artlink" href="/index/article">{{$v->question_name}}</a></h3>
        <p>2015年第一季度山西省会计从业资格考务日程安排已公布，望各位同学周知。 按照《山西省财政厅关于印发会计从业资格无纸化考试管理规定的通知》(晋财会【2014】5号)，现将我省2015年一季度会计从业资格考试考务安排如下。 一、考试时间： 1、网上报名时间：3月2...</p>
        <p class="artilabel">
        <span class="ask_label">热门题</span>
        <b class="labtime">{{date('Y-m-d H:i:s',$v->question_time)}}</b>
        </p>
        <div class="clearh"></div>
    </div>
    @endforeach
    
    
    <div class="clearh" style="height:20px;"></div>
    <span class="pagejump">
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
    </span>
    <div class="clearh" style="height:10px;"></div>
</div>

<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">热门资讯</h3>
    <div class="gonggao">
    <ul class="hotask">
            <li><a class="ask_link" href="#"><strong>●</strong>?</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>?</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>?</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>?</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>请问女子监狱人民狱人民警察?</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>请问女子监狱人民狱人民警察?</a></li>
        </ul>
    </div>
    </div>
</div>

<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">推荐课程</h3>
    <div class="teacher">
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/images/c1.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/images/c2.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/images/c3.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    </div>
    </div>
</div>
   
</div>



<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>


@endsection