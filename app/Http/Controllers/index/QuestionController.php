<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\index\Common;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\QuestionModel;


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
    	
    	return view("question.index",['data'=>$data]);
    }
    public function dan(){
        //获取全部单选题
        $url = "questiondan";
        $data = $this->getGet($url);
        $data = json_decode($data);

        return view("question.index",['data'=>$data]);
    }
    public function duo(){
        //获取全部多选题
        $url = "questionduo";
        $data = $this->getGet($url);
        $data = json_decode($data);
        return view("question.index",['data'=>$data]);
    }
    public function jian(){
        //获取全部简答题
        $url = "questionjian";
        $data = $this->getGet($url);
        $data = json_decode($data);
        return view("question.index",['data'=>$data]);
    }
}
