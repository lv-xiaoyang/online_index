<?php

namespace App\Http\Controllers\index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TeacherModel;
class TeacherController extends Controller
{
    //
    // 讲师注册页面--添加
    public function create(){
        return view('index.regteacher');
    }

    public function story(Request $request){
        // echo 11;die;
        // 接视图ajax传来的值
        $lereg_name = request()->post('lereg_name');
        if(!$lereg_name){
            echo json_encode(['code'=>0002,"msg"=>"昵称不可为空"]);die;
        }
        // var_dump($lereg_name);
        $lereg_res = request()->lereg_res;
        if(!$lereg_res){
            echo json_encode(['code'=>0002,"msg"=>"简介不可为空"]);die;
        }
        $lereg_edu = request()->lereg_edu;
        if(!$lereg_edu){
            echo json_encode(['code'=>0002,"msg"=>"学历不可为空"]);die;
        }
        $lereg_school = Request()->lereg_school;
        if(!$lereg_school){
            echo json_encode(['code'=>0002,"msg"=>"学校不可为空"]);die;
        }
        $lereg_magor = request()->lereg_magor;
        if(!$lereg_magor){
            echo json_encode(['code'=>0002,"msg"=>"专业不可为空"]);die;
        }
        $lereg_qual=request()->lereg_qual;
        if(!$lereg_qual){
            echo json_encode(['code'=>0002,"msg"=>"教师证件照不可为空"]);die;
        }
        $lereg_time = request()->lereg_time;
        $lereg_style = request()->lereg_style;
        // dd($lereg_style);
        if(!$lereg_style){
            echo json_encode(['code'=>0002,"msg"=>"授课风格不可为空"]);die;
        }
        
        //文件上传验证
        if(empty($lereg_qual)){
            
            return ['code'=>0002,'msg'=>'请上传文件'];die;
        }
        $lereg_qual=$this->fileImg($lereg_qual);
        // dd($lereg_qual);
        $tea = new TeacherModel();
        $tea->lereg_name=$lereg_name;
        $tea->lereg_res=$lereg_res;
        $tea->lereg_edu=$lereg_edu;
        $tea->lereg_school=$lereg_school;
        $tea->lereg_magor=$lereg_magor;
        $tea->lereg_time=$lereg_time;
        $tea->lereg_qual=$lereg_qual;
        $tea->lereg_style=$lereg_style;
        $res = $tea->save();
        // dd($res);
        if($res){
            return  ['code'=>0001,'msg'=>"ok"];
        }else{
            return ['code'=>0002,"msg"=>"no"];
        }
    }

    //图片上传处理
    public function fileImg($lereg_qual){
        if ($lereg_qual->isValid()){
            $path = $lereg_qual->store('images');
        }
        return $path;
    }






}
