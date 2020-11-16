<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\index\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Common
{
    //
    public function index(){
    	//获取考试数据
    	$url = "examindex";
    	$data = $this->getGet($url);
    	$data = json_decode($data);

    	//获取热门考题
    	$hoturl = "hotexam";
    	$hotdata = $this->getGet($hoturl);
    	$hotdata = json_decode($hotdata);
    	$hotdata = $hotdata->data;
    	// dd($hotdata);
    	//获取优秀讲师
    	$teacherurl = "questionteacher";
    	$teacher = $this->getGet($teacherurl);
    	$teacherdata =  json_decode($teacher);
    	$teacherdata = $teacherdata->data;
    	return view("exam.index",['teacherdata'=>$teacherdata,'hotdata'=>$hotdata,'data'=>$data]);
    }
    //xiangqing
    public function info($exam_id)
    {
    	//调用接口获取数据
    	$url = "examinfo/".$exam_id;
    	$data = $this->getGet($url);
    	$data = json_decode($data);


    	//获取优秀讲师
    	$teacherurl = "questionteacher";
    	$teacher = $this->getGet($teacherurl);
    	$teacherdata =  json_decode($teacher);
    	$teacherdata = $teacherdata->data;

    	
    	
    	return view("exam.info",['teacherdata'=>$teacherdata,'data'=>$data]);
    }

}
