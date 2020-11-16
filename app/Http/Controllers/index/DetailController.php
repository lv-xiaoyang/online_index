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
        //根据id获取课程详情
        $url="index/firstCourse?course_id=".$slug;
        $first_data=$this->getGet($url);
        $first_data=json_decode($first_data);
        // dd($first_data);
        return view('index.course.coursecont',compact('first_data'));
    }
}
