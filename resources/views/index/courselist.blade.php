
@extends("layouts.coursecont")
@section("title","课程首页")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
    <div class="courseleft">
    <span class="select">       
      <input type="text" value="请输入关键字" class="pingjia_con"/>
      <a href="#" class="sellink"></a>        
    </span>
    <ul class="courseul">
    <li class="curr" style="border-radius:3px 3px 0 0;background:#fb5e55;"><h3 style="color:#fff;"><a href="#" class="whitea">全部课程</a></h3>
     @foreach($data as $v)
     <li>
          <h4>{{$v['type_name']}}</h4>
               <ul class="sortul">
               @foreach($v['course'] as $vv)
               @php dd($vv);  @endphp
                    <li class="{{$vv['level'==1 ? course_curr : '' ]}}" ><a href="#"></a></li>
               @endforeach
               </ul>
          <div class="clearh"></div>
     </li>
     @endforeach
    </ul>
    <div style="height:20px;border-radius:0 0 5px 5px; background:#fff;box-shadow:0 2px 4px rgba(0, 0, 0, 0.1)"></div>
    </div>
    <div class="courseright">
        <div class="clearh"></div>
      <ul class="courseulr">
        <li>
            <div class="courselist">
            <a href="/index/coursecont" target="_blank"><img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c1.jpg" title="会计基础"></a>
            <p class="courTit"><a href="/index/coursecont" target="_blank">会计基础</a></p>
            <div class="gray">
            <span>30课时 600分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
        <li>
            <div class="courselist">
            <a href="/index/coursecont" target="_blank"><img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c2.jpg" title="会计基础"></a>
            <p class="courTit"><a href="/index/coursecont" target="_blank">HTTP下载课程</a></p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
        </li>
        <li>
            <div class="courselist">
            <a href="/index/coursecont" target="_blank"><img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c3.jpg" title="会计基础"></a>
            <p class="courTit"><a href="coursecont.html" target="_blank">HTTP下载课程</a></p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
            <div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c4.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
            <div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c5.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
            <div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c6.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
            <div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c7.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
            <div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c8.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
            <div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/status/images/c9.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
    </ul>
    </div>
    <div class="clearh"></div>
</div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
@endsection