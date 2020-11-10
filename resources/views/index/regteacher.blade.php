
<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>

<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<meta name="_token" content="{{ csrf_token() }}"/>
<title>谋刻职业教育在线测评与学习平台</title>
<!-- <link rel="stylesheet" href="/js/uploadify/uploadify.css"> -->
<link rel="stylesheet" href="/static/css/course.css"/>
<link rel="stylesheet" href="/static/css/register-login.css"/>
<script src="/static/js/jquery-1.8.0.min.js"></script>
<link rel="stylesheet" href="/static/css/tab.css" media="screen">
<script src="/static/js/jquery.tabs.js"></script>
<script src="/static/js/mine.js"></script>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

</head>

<body>

<div class="head" id="fixed">
	<div class="nav">
    	<span class="navimg"><a href="/index/index"><img border="0" src="/static/images/logo.png"></a></span>
        <ul class="nag">
        	<li><a href="/index/courselist" class="link1 current">课程</a></li>
            <li><a href="/index/articlelist" class="link1">资讯</a></li>
            <li><a href="/index/teacherlist" class="link1">讲师</a></li>
            <li><a href="/index/exam_index" class="link1" target="_blank">题库</a></li>
            <li><a href="/index/askarea" class="link1" target="_blank">问答</a></li>
            
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
        	<!--未登录-->
        	<span class="exambtn_lore">
                 <a class="tkbtn tklog" href="/index/loginteacher">讲师登录</a>
                 <a class="tkbtn tkreg" href="/index/regteacher">讲师注册</a>
            </span>
            <!--登录后-->
            <!--<div class="logined">
                <a href="mycourse.html"  onMouseOver="logmine()" style="width:70px" class="link2 he ico" target="_blank">sherley</a>
                <span id="lne" style="display:none" onMouseOut="logclose()" onMouseOver="logmine()">
                    <span style="background:#fff;">
                        <a href="mycourse.html" style="width:70px; display:block;" class="link2 he ico" target="_blank">sherley</a>
                    </span>
                    <div class="clearh"></div>
                    <ul class="logmine" >
                        <li><a class="link1" href="#">我的课程</a></li>
                        <li><a class="link1" href="#">我的题库</a></li>
                        <li><a class="link1" href="#">我的问答</a></li>
                        <li><a class="link1" href="#">退出</a></li>
                    </ul>
                </span>
            </div>-->
            
        </span>
    </div>
</div>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="register" style="background:url(/static/images/13.jpg) right center no-repeat #fff">
<h2>讲师注册</h2>
<form action=""  id="banner-upload"  enctype="multipart/form-data">
    <div>
    <p class="formrow"><label class="control-label" for="register_email">讲师昵称</label>
    <input type="text" name="lereg_name" id="lereg_name">
    <span id="text-name" ></span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">讲师履历</label>
    <textarea name="lereg_res" id="lereg_res" cols="50" rows="5"></textarea> 
    <span id="text-res"></span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">学历</label>
    <select name="lereg_edu" id="lereg_edu">
        <option value="">--请选择--</option>
        <option value="1">博士研究生</option>
        <option value="2">硕士研究生</option>
        <option value="3">本科</option>
        <option value="4">专科</option>
        <option value="5">中专/高中</option>
    </select>
    <span id="text-edu"></span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">毕业院校</label>
    <input type="text" id="lereg_school" name="lereg_school">
    <span id="text-school"></span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">所学专业</label>
    <input type="text" id="lereg_magor" name="lereg_magor"></p>
    <span id="text-magor">填写所学专业</span>
    </div>
   
    <div>
    <p class="formrow"><label class="control-label" for="register_email">教师资格证</label>
    <input type="file" id="lereg_qual" name="lereg_qual">
    <div class="showimg"></div>
        <input type="hidden"  id="lereg_qual" width="50" hight="50" name="img_path"><span id="text-qual"></span>
    </div>
   

    <div>
    <p class="formrow"><label class="control-label" for="register_email">从业时长</label>
    <select name="lereg_time" id="lereg_time">
        <option value="">--请选择--</option>
        <option value="1">10年以上</option>
        <option value="2">5-10年</option>
        <option value="3">2-5年</option>
        <option value="4">1-2年</option>
    </select>
    <span id="text-time"></span>
    </div>
    <div class="loginbtn reg">
    <button  class="uploadbtn ub1" id="button">注册</button>
    </div>

</form>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
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

<!-- InstanceEnd --></html>
<script src="/jquery.js"></script>
<script>

   	$("form").submit(function(){
		return false;
	});
    function check(){
        return false;
    };
   
    $("#button").click(function(){
        
        var lereg_name = $("#lereg_name").val();
        var lereg_res = $("#lereg_res").val();
        var lereg_edu=$("#lereg_edu option:selected").val();
        
        var lereg_school = $("#lereg_school").val();
        var lereg_magor = $("#lereg_magor").val();
        var lereg_time=$("#lereg_time option:selected").val();
        if(lereg_name==""){
            $("#text-name").html("<font color=red>*昵称不能为空</font>");
            return false;
        }
        if(lereg_res==""){
            $("#text-res").html("<font color=red>*讲师履历不可为空</font>");
            return false;
        }
        if(lereg_school==''){
        	$("#text-school").html("<font color=red>*毕业院校不可为空</font>");
        	return false;
        };
        if(lereg_magor==''){
        	$("#text-magor").html("<font color=red>*所学专业不可为空</font>");
        	return false;
        };
        if(lereg_edu==""){
            $("#text-edu").html("<font color=red>*请选择学历</font>");
            return false;
        }
        if(lereg_time==""){
            $("#text-time").html("<font color=red>*请选择从业时长</font>");
            return false;
        }
        if(lereg_qual==""){
            $("#text-qual").html("<font color=red>*请上传教师资格证证件照</font>");
            return false;
        }

        $(document).on('click','#button',function(a){
            $(function(){
                $("[data-toggle='popover']").popover();
            });
            a.preventDefault();
            var formData =new FormData(document.getElementById('banner-upload'))
            $.ajax({
            headers:{
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            url:"{{url('/index/regteacher/story')}}",
            type:"post",
            dataType:"json",
            processData: false,
            contentType: false,
            data:formData,
            success:function(res){
                    if(res.code==0){  
                        location.href="http://www.onlineadmin.com/";
                    }else{
                        alert('跳转失败');
                    };
                   

            }
        });
        
        
        
        })
        
        // $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        
    });





</script>
