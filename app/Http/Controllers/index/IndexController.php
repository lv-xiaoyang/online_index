<?php
    namespace App\Http\Controllers\index;
    use App\Http\Controllers\Controller;
    use App\Http\Controllers\index\Common;
    use Illuminate\Http\Request;
    
    use GuzzleHttp\Client;
    use Illuminate\Support\Facades\Redis;
    class IndexController extends Common
    {	
    	//首页
    	 public function index(){
            //获取课程分类
            $url="getcoursetype";
            $type_data=$this->getGet($url);
            $type_data=json_decode($type_data);
            //获取首页课程信息--第一次加载
            $course_data=$this->getIndexcourse(1);
    		return view("index.index",compact('type_data','course_data'));
        }
        /**
         * 获取首页课程信息
         */
        public function getIndexcourse($course_type_id){
            //获取课程信息
            $url="getIndexcourse?course_type=".$course_type_id;;
            $course_data=$this->getGet($url);
            $course_data=json_decode($course_data);
            return $course_data;
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

         //讲师课程评论页面
        public function comment(){
            return view("index.comment");
        }

        //个人中心讲师申请页面
         public function regteacher(){
            return view("index.regteacher");
        }
         //个人中心讲师申请页面
         public function loginteacher(){
            return view("index.loginteacher");
        }


}