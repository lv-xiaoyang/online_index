<?php

namespace App\Http\Controllers\index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\index\Common;


class CourseListController extends Common
{
    //首页课程列表
    public function courselist(){
        return view("index.courselist");
    }
    
}
