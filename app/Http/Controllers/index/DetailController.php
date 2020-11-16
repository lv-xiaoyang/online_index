<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\index\Common;

class DetailController extends Common
{
    /**
     * 课程详情
     */
    public function getdetail($slug){
        if(empty($slug)){
            return ['code'=>0003,'msg'=>'缺少必要参数'];
        }
        //根据id获取课程详情
        $courseurl="index/firstCourse?course_id=".$slug;
        $first_data=$this->getGet($courseurl);
        $first_data=json_decode($first_data);
        // dd($first_data);
        //获取章程信息
        $chapterurl="index/getCourseChapter?course_id=".$slug;
        $chapter_data=$this->getGet($chapterurl);
        $chapter_data=json_decode($chapter_data,true);
        // dd($chapter_data);
        $first_data->chapter=$chapter_data;
        foreach($first_data->chapter as $k=>$v){
            //获取节信息
            $sectionurl="index/getCourseSection?course_id=".$slug."&chapter_id=".$v['chapter_id'];
            $section_data=$this->getGet($sectionurl);
            $section_data=json_decode($section_data,true);
            $first_data->chapter[$k]['section']=$section_data;
        }
        $lect_name=substr($first_data->lect_name,0,3);
        //获取课程咨询信息
        $articleurl="index/getcoursearticle?course_id=".$slug;
        $article_data=$this->getGet($articleurl);
        $article_data=json_decode($article_data,true);
        //获取相关详情
        $correlation_url="index/getcoursecorrelation?course_id=".$slug."&coursetype_id=".$first_data->course_type;
        $correlation_data=$this->getGet($correlation_url);
        $correlation_data=json_decode($correlation_data,true);
        // dd($correlation_data);
        return view('index.course.coursecont',compact('first_data','lect_name','article_data','correlation_data'));
    }
}
