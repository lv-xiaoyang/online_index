
<!doctype html>
<html>
<head>
  <meta name="_token" content="{{ csrf_token() }}"/>
<meta charset="utf-8">
<title>谋刻职业教育在线测评与学习平台</title>

<script src="/static/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/static/js/rev-setting-1.js"></script>
<script type="text/javascript" src="rs-plugin//static/js/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" href="/static/css/style.css"/>
<link rel="stylesheet" href="/static/css/tab.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/css/main.css" id="main-css">
<!--课程选项卡-->
<script type="text/javascript">
function nTabs(thisObj,Num){
  if(thisObj.className == "current")return;
  var tabObj = thisObj.parentNode.id;
  var tabList = document.getElementById(tabObj).getElementsByTagName("li");
  for(i=0; i <tabList.length; i++)
    {
    if (i == Num)
    {
       thisObj.className = "current"; 
       document.getElementById(tabObj+"_Content"+i).style.display = "block";
    }else{
       tabList[i].className = "normal"; 
       document.getElementById(tabObj+"_Content"+i).style.display = "none";
    }
    } 
}


</script>


</head>

<body>

<div class="head" id="fixed">
  <div class="nav">
      <span class="navimg"><a href="/index/index"><img border="0" src="/static/images/logo.png"></a></span>
        <ul class="nag">
          <li><a href="/index/courselist" class="link1 current">课程</a></li>
            <li><a href="/index/articlelist" class="link1">资讯</a></li>
            <li><a href="/index/teacherlist" class="link1">讲师</a></li>
            <li><a href="/question/index" class="link1" target="_blank">题库</a></li>
            <li><a href="/index/askarea" class="link1" target="_blank">问答</a></li>
            <li><a href="#" class="link1" target="_blank">考试</a></li>
        </ul>
        
        <span class="massage">
        <!--<span class="select">
          <a href="#" class="sort">课程</a>
          <input type="text" value="关键字"/>
            <a href="#" class="sellink"></a>
            <span class="sortext">
              <p>课程</p>
                <p>题库</p>
                <p>讲师</p>
            </span>
        </span>-->
          
            
            
            <a href="/index/mycourse"  onMouseOver="logmine()" style="width:70px" class="link2 he ico" target="_blank">sherley</a>
            <span id="lne" style="display:none" onMouseOut="logclose()" onMouseOver="logmine()">
                <span style="background:#fff;">
                  <a href="/index/mycourse" style="width:70px; display:block;" class="link2 he ico" target="_blank">sherley</a>
                 
                </span>
                <div class="clearh"></div>
                <ul class="logmine" >
                    <li><a class="link1" href="#">我的课程</a></li>
                    <li><a class="link1" href="#">我的题库</a></li>
                    <li><a class="link1" href="#">我的问答</a></li>
                    <li><a class="link1" href="#">退出</a></li>
                </ul>
            </span>
        </span>
    </div>
</div>








<!-- 内容部分 -->
@yield("content")






<div class="foot">
<div class="fcontainer">
      <div class="fwxwb"> 
         <div class="fwxwb_1">
           <span>关注微信</span><img width="95" alt="" src="/static/images/num.png">
       </div>
           <div>
               <span>关注微博</span><img width="95" alt="" src="/static/images/wb.png">
       </div>               
      </div>
      <div class="fmenu">
       <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">优秀讲师</a> | <a href="#">帮助中心</a> | <a href="#">意见反馈</a> | <a href="#">加入我们</a></p>
      </div>
      <div class="copyright">      
        <div><a href="/">谋刻网</a>所有&nbsp;晋ICP备12006957号-9</div>
      </div>
    </div>
</div>
</div>




<!--右侧浮动-->
<div class="rmbar">
  <span class="barico qq" style="position:relative">
  <div  class="showqq">
     <p>官方客服QQ:<br>335049335</p>
  </div>
  </span>
  <span class="barico em" style="position:relative">
    <img src="/static/images/num.png" width="75" class="showem">
  </span>
  <span class="barico wb" style="position:relative">
    <img src="/static/images/wb.png" width="75" class="showwb">
  </span> 
  <span class="barico top" id="top">置顶</span> 
</div>

</body>
</html>
<script>
function logmine(){
  document.getElementById("lne").style.display="block";
}
function logclose(){
  document.getElementById("lne").style.display="none";  
}

 /*右侧客服飘窗*/
  $(".label_pa li").click(function() {
    $(this).siblings("li").find("span").css("background-color", "#fff").css("color", "#666");
    $(this).find("span").css("background", "#fb5e55").css("color", "#fff");
  });
  $(".em").hover(function() {
    $(".showem").toggle();
  });
  $(".qq").hover(function() {
    $(".showqq").toggle();
  });
  $(".wb").hover(function() {
    $(".showwb").toggle();
  });
  $("#top").click(function() {
    if (scroll == "off") return;
    $("html,body").animate({
      scrollTop: 0
    },
    600);
  });
</script>
