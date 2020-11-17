<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\index\Common;


class CourseListController extends Common
{
    //首页课程列表
    public function courselist(){
        //获取所有分类信息
        $type_url="getcoursetype";
        $type_data=$this->getGet($type_url);
        $type_data=json_decode($type_data,true);
        if($type_data['code']==0001){
            $data=$type_data['data'];
        }
        foreach($data as $k=>$v){
            //获取所有课程信息
            $course_url="getIndexcourse?course_type=".$v['type_id'];
            $course_data=$this->getGet($course_url);
            $course_data=json_decode($course_data,true);
            if($course_data['code']==0001){
                $data[$k]['course']=$course_data['data'];
            }else{
                $data[$k]['course']=[];
            }
            dd($data);
            foreach($data  as $kk=>$vv){
                
                dd($vv);
                $vv['level']=$kk+1;
            }
        }
        return view("index.courselist",compact('data'));
    }
    
}
