
@extends("layouts.login")
@section("title","登录页面")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="login" style="background:url(/static/images/12.jpg) right center no-repeat #fff">
<h2>登录</h2>
<form style="width:600px">
<div>
    <p class="formrow">
    <label class="control-label" for="register_email">帐号</label>
    <input type="text" id="email_url" placeholder="请输入Email地址 / 用户昵称">
    </p>
</div>
<div>
    <p class="formrow">
    <label class="control-label" for="register_email">密码</label>
    <input type="password" id="pwd">
    </p>
    <p class="help-block"><span class="text-danger">密码错误</span></p>
</div>
<div class="loginbtn">
	<label><input type="checkbox"  checked="checked"> <span class="jzmm">记住密码</span> </label>&nbsp;&nbsp;
    <button type="button" class="uploadbtn ub1" id="button">登录</button>
    
</div>
<div class="loginbtn lb">
   <a href="#" class="link-muted">还没有账号？立即免费注册</a>
   <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>   
   <a href="forgetpassword.html" class="link-muted">找回密码</a>
</div>
</form>
<div class="hezuologo">
    <span class="hezuo">使用合作网站账号登录</span>
    <div class="hezuoimg">
    <img src="/static/images/hezuoqq.png" class="hzqq" title="QQ" width="40" height="40"/>
    <img src="/static/images/hezuowb.png" class="hzwb" title="微博" width="40" height="40"/>
    </div>
    
  </div>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
@endsection

<script src="/js/jquery.min.js"></script>
 <script>
    //页面加载事件
   $(document).on("click","#button",function(){
    //打印数据
    //alert(1);
    //获取表单的值
    var email_url=$("#email_url").val();
    var pwd=$("#pwd").val();
    if(email_url==''){
        alert('请输入邮箱地址');
         return false;
     }
      if(pwd==''){
        alert('请输入密码');
         return false;
     }
     var reg=/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
     if(!reg.test(email_url)){
        alert('Email格式不正确，例如1234567@qq.com');
        return false;
     }
    // console.log(email_url,name,pwd);
     var url="/index/logins";
     var data={email_url:email_url,pwd:pwd};
     $.ajax({
        url:url,
        data:data,
        headers:{'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        type:'post',
        dataType:'json',
        success:function(res){
            location.href="/index/index";
        }
     })

   })  

 </script>