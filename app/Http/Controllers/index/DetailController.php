<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\index\Common;

class DetailController extends Common
{
    /**
     * 课程介绍
     */
    public function getintroduce($slug){
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
            //获取课时信息
            foreach($first_data->chapter[$k]['section'] as $kk=>$vv){
                $class_url="index/getcourseclass?course_id=".$slug."&chapter_id=".$v['chapter_id']."&section_id=".$vv['section_id'];
                $class_data=$this->getGet($class_url);
                $class_data=json_decode($class_data,true);
                foreach($class_data as $kkk=>$vvv){
                    $class_data[$kkk]['level']=$kkk+1;
                }
                $first_data->chapter[$k]['section'][$kk]['class']=$class_data;               
            }
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
        // dd($first_data);
        return view('index.course.coursecont1',compact('first_data','lect_name','article_data','correlation_data'));
    }
    /**
     * 课时加载页
     */
    public function getvideo(){
        //获取课时id
        $class_id=request()->class_id;
        if(empty($class_id)){
            return json_encode(['code'=>0003,'msg'=>'缺少必要参数']);die;
        }
        //根据课时id换取视频信息
        $class_url="index/getvideo?class_id=".$class_id;
        $video_data=$this->getGet($class_url);
        $video_data=json_decode($video_data,true);
        if($video_data['code']==0001){
            $video_data=$video_data['data'];
        }else{
            print_r($video_data['msg']);die;
        }
        return view('index.course.video',compact('video_data'));
    }
}
