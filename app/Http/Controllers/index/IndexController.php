<?php
    namespace App\Http\Controllers\index;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Redis;
    class IndexController extends Controller
    {	
    	//首页
    	 public function index(){
    		return view("index.index");
    	}
    	//首页课程列表
    	public function courselist(){
    		return view("index.courselist");
    	}
    	//首页咨询列表
    	public function articlelist(){
    		return view("index.articlelist");
    	}
        //首页讲师列表
        public function teacherlist(){
            return view("index.teacherlist");
        }
         //个人中心
        public function mycourse(){
            return view("index.mycourse");
        }
         //注册
        public function register(){
            return view("index.register");
        }
          //登录
        public function login(){
            return view("index.login");
        }

        //讲师模块
        //讲师个人详情页面
        public function teacher(){
            return view("index.teacher");
        }
        //讲师课程页面
        public function coursecont(){
            return view("index.coursecont");
        }
        //讲师课程章节页面
        public function coursecont1(){
            return view("index.coursecont1");
        }
        //讲师课程视频页面
        public function video(){
            return view("index.video");
        }

}