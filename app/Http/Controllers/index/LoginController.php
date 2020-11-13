<?php
    namespace App\Http\Controllers\index;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\LoginModel;
    use Illuminate\Support\Facades\Redis;
    class LoginController extends Controller
    {
    	//注册
        public function register(){
            return view("index.register");
        }
        public function regs(){
            //dd(111);
            $email_url=request()->post("email_url","");
            $name=request()->post("name","");
            $pwd=request()->post("pwd","");
            $pwds=request()->post("pwds","");
            $user=new LoginModel();
            $user->email_url=$email_url;
            $user->name=$name;
            $user->pwd=$pwd;
            $user->pwds=$pwds;
            //dd($user);
            $name_data=LoginModel::where('name',$name)->first();
            //dd($name_data);
           if(!empty($name_data)){
             return ['code'=>0001,'msg'=>'该用户已存在'];die;
           }
            //判断
            if($user->save()){
                $data=[
                    "error"=>0,
                    'msg'=>"注册成功"
                ];
            }else{
                $data=[
                    "error"=>40003,
                    'msg'=>"注册失败"
                ];
            }
            return $data;
            
        }

          //登录
        public function login(){
            return view("index.login");
        }
         public function logins(){
           $data=request()->post();
           //dd($data);
           // dd($data);
           if(empty($data['email_url'])){
                return redirect('/index/login')->with('msg','邮箱，账号不能为空');
           }
           if(empty($data['pwd'])){
                return redirect('/index/login')->with('msg','密码不能为空');
           }
           // dd(111);
           // $LoginModel=new LoginModel();
           $where=[
                'email_url'=>$data['email_url'],
                // 'name'=>$data['name'],
                'pwd'=>$data['pwd']
           ];
           // dd($where);
           $res=LoginModel::where($where)->first();
           // dd($res);
                 if($res){
                    $data=[
                        'error'=>0,
                        'msg'=>"登录成功"
                    ];
                   // session(["email_url"=>$data['email_url']]);
                    //request()->session()->save();
                 }
               return json_encode($data); 
           }
           // return $data;
        
    }