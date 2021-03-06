<?php
    namespace App\Http\Controllers\index;
    use App\Http\Controllers\Controller;
    use App\Http\Controllers\index\Common;
    use Illuminate\Http\Request;
    use App\Model\TeacherModel;
    use GuzzleHttp\Client;
    use Illuminate\Support\Facades\Redis;
    class IndexController extends Common
    {	
    	//首页
    	 public function index(){
            //获取课程分类
            $url="getcoursetype";
            $type_data=$this->getGet($url);
            $type_data=json_decode($type_data,true);
            if($type_data['code']==0001){
                $type_data=$type_data['data'];
            }
            //获取首页课程信息--第一次加载
            $course_data=$this->getIndexcourse(1);
            if($course_data['code']==0001){
                $course_data=$course_data['data'];
            }
            // dd($course_data);
    		return view("index.index",compact('type_data','course_data'));
        }
        /**frist
         * ajax回调课程信息
         */
        public function ajaxIndexCourse(){
            //获取课程id
            $type_id=request()->type_id;
            $data=$this->getIndexcourse($type_id);
            if($data['code']==1){
                $data=$data['data'];
            }
            foreach($data as $k=>$v){
                $data[$k]['course_img']=env('APP_URL').$v['course_img'];
            }
            return json_encode($data);
        }
        /**
         * 获取首页课程信息
         */
        public function getIndexcourse($course_type_id){
            //获取课程信息
            $url="getIndexcourse?course_type=".$course_type_id;;
            $course_data=$this->getGet($url);
            $course_data=json_decode($course_data,true);
            return $course_data;
        }
    	
    	//首页咨询列表
    	public function articlelist(){
    		return view("index.articlelist");
    	}
        //首页讲师列表
        public function teacherlist(){
            $data = TeacherModel::paginate(3);
            return view("index.teacherlist",['data'=>$data]);
        }
         //个人中心
        public function mycourse(){
            return view("index.mycourse");
        }
        

        //讲师模块
        //讲师个人详情页面
        public function teacher(Request $request,$id){

            
            $data = teacherModel::first();

            //接收ajax传来的数据
            $res = request()->post();
            dump($res);exit;
            $lereg_qual=$this->fileImg($lereg_qual);
            $tea = new TeacherModel();
            $tea = $res->update();


            return view("index.teacher");
        }

        //图片上传处理
        public function fileImg($lereg_qual){
            if ($lereg_qual->isValid()){
                $path = $lereg_qual->store('img');
            }
            return $path;
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