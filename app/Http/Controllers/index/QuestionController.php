<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\index\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\QuestionModel;
use App\Model\TeacherModel;

class QuestionController extends Common
{
    //导航栏
    // 展示
    public function index(){
    	//获取全部题
        $url = "questionindex";
        $data = $this->getGet($url);
        // dd($data);
        $data = json_decode($data);
    	// dd($data->data);
        // $data = $data->data;
        //获取热门题
        $hotdata = QuestionModel::orderBy("question_time","desc")->paginate(4);
        // dd($hotdata);
        // $hotdata=$hotdata->data;
        // 获取优秀讲师
        $teacherurl = "questionteacher";
        $teacherdata = $this->getGet($teacherurl);
        $teacherdata = json_decode($teacherdata);
        $teacherdata = $teacherdata->data;
    
    	return view("question.index",['teacherdata'=>$teacherdata,'hotdata'=>$hotdata,'data'=>$data]);
    }

    public function dan(){
        //获取全部单选题
        $url = "questiondan";
        $data = $this->getGet($url);
        $data = json_decode($data);
        // $data = $data->data;
        $hotdata = QuestionModel::orderBy("question_time","desc")->paginate(4);
        // dd($data);
        // dd($hotdata);
         // 获取优秀讲师
        $teacherurl = "questionteacher";
        $teacherdata = $this->getGet($teacherurl);
        $teacherdata = json_decode($teacherdata);
        $teacherdata = $teacherdata->data;
        return view("question.index",['teacherdata'=>$teacherdata,'hotdata'=>$hotdata,'data'=>$data]);
    }
    public function duo(){
        //获取全部多选题
        $url = "questionduo";
        $data = $this->getGet($url);
        $data = json_decode($data);
        // $data = $data->data;
        $hotdata = QuestionModel::orderBy("question_time","desc")->paginate(4);
        // dd($hotdata);
         // 获取优秀讲师
        $teacherurl = "questionteacher";
        $teacherdata = $this->getGet($teacherurl);
        $teacherdata = json_decode($teacherdata);
        $teacherdata = $teacherdata->data;
        return view("question.index",['teacherdata'=>$teacherdata,'hotdata'=>$hotdata,'data'=>$data]);
    }
    public function jian(){
        //获取全部简答题
        $url = "questionjian";
        $data = $this->getGet($url);
        $data = json_decode($data);
        // $data = $data->data;
        $hotdata = QuestionModel::orderBy("question_time","desc")->paginate(4);
        // dd($hotdata);
         // 获取优秀讲师
        $teacherurl = "questionteacher";
        $teacherdata = $this->getGet($teacherurl);
        $teacherdata = json_decode($teacherdata);
        $teacherdata = $teacherdata->data;
        return view("question.index",['teacherdata'=>$teacherdata,'hotdata'=>$hotdata,'data'=>$data]);
    }
    public function info($question_id){
        //根据获取到id查询数据库 查询单条
        $url = "questioninfo/".$question_id;
        $data = $this->getGet($url);
        $data = json_decode($data);


        $hotdata = QuestionModel::orderBy("question_time","desc")->paginate(4);
        $teacherurl = "questionteacher";
        $teacherdata = $this->getGet($teacherurl);
        $teacherdata = json_decode($teacherdata);
        $teacherdata = $teacherdata->data;

        return view("question.info",['hotdata'=>$hotdata,'data'=>$data,'teacherdata'=>$teacherdata]);
    }
}
