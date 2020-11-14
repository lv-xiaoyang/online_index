@extends("layouts.login")
@section("title","登录页面")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="register" style="background:url(/static/images/13.jpg) right center no-repeat #fff">
<h2>注册</h2>
<form>
    <div>
    <p class="formrow"><label class="control-label"  for="register_email">邮箱地址</label>
    <input type="text"  id="email_url"  placeholder="请输入邮箱地址"></p>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email" >昵称</label>
    <input type="text" id="name" placeholder=" 中、英文均可，最长14个英文或7个汉字"></p>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email" >密码</label>
    <input type="password" id="pwd" placeholder="5-20位英文、数字、符号，区分大小写"></p>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">确认密码</label>
    <input type="password"  id="pwds"  placeholder="再输入一次密码"></p>
    </div>
    <div class="loginbtn reg">
    <button type="button" class="uploadbtn ub1" id="button">注册</button>
    </div>

</form>
</div>
<!-- InstanceEndEditable -->


<div class="clearh"></div>
@endsection

<script src="/js/jquery.min.js"></script>
 <script>
   $(document).on("click","#button",function(){
    //var str=/^[a-zA-Z][]$/;
    //获取表单的值
    var email_url=$("#email_url").val();
    var name=$("#name").val();
    var pwd=$("#pwd").val();
    var pwds=$("#pwds").val();
    if(email_url==''){
        alert('邮箱地址不能为空');
         return false;
     }
      if(name==''){
        alert('昵称不能为空');
         return false;
     }
      if(pwd==''){
        alert('密码不能为空');
         return false;
     }
      if(pwds==''){
        alert('确认密码不能为空');
         return false;
     }
     var reg=/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;
     if(!reg.test(email_url)){
        alert('Email格式不正确，例如1234567@qq.com');
        return false;
     }
     var res=/^[a-zA-Z0-9]{4,10}$/;  
     if(!res.test(pwd)){
        alert('密码不能含有非法字符，长度在4-10之间');
        return false;
     }else if(pwd!=pwds){
         alert('确认密码和密码必须一致');
         return false;
     }
     // if(!pwds=pwd){
     //    alert('确认密码必须和密码一致');
     //    return false;
     // }
    // console.log(email_url,name,pwd);
     var url="/index/regs";
     var data={email_url:email_url,name:name,pwd:pwd,pwds:pwds};
     $.ajax({
        url:url,
        data:data,
        headers:{'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        type:'post',
        dataType:'json',
        success:function(res){
            location.href="/index/login";
        }
     })

   })  



 </script>