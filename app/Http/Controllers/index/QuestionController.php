<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\QuestionModel;


class QuestionController extends Controller
{
    //导航栏
    // 展示
    public function index(){
    	$danwhere = [
    		'question_type_id'=>1
    	];
    	$duowhere = [
    		'question_type_id'=>2
    	];
    	$jianwhere = [
    		'question_type_id'=>3
    	];
    	$dandata = QuestionModel::where($danwhere)->get();
    	$duodata = QuestionModel::where($duowhere)->get();
    	$jiandata = QuestionModel::where($jianwhere)->get();
        $data = QuestionModel::paginate(4);
    	
    	return view("question.index",['data'=>$data]);
    }
    public function dan(){
        $where = [
            'question_type_id'=>1
        ];
        $data = QuestionModel::where($where)->paginate(4);
        return view("question.index",['data'=>$data]);
    }
    public function duo(){
        $where = [
            'question_type_id'=>2
        ];
        $data = QuestionModel::where($where)->paginate(4);
        return view("question.index",['data'=>$data]);
    }
    public function jian(){
        $where = [
            'question_type_id'=>3
        ];
        $data = QuestionModel::where($where)->paginate(4);
        return view("question.index",['data'=>$data]);
    }
}
