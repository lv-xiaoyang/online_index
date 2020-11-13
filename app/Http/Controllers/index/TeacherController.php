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

    // 文件上传
    // public function upload($filename){

    //     if (request()->file($filename)->isValid()){
    //         // 接收文件
    //         $file = request()->$filename;
    //         // 实现上传
    //         $path = $file->store('uploads');
    //         return $path;
    //     }
    //     exit("上传文件出错！");
    // }

    public function story(Request $request){
        // $post = request()->except(['_token']);
        // if (request()->hasFile('lereg_qual')){
        //     $post['lereg_qual'] = $this->upload('lereg_qual');
        // };
        // 接视图ajax传来的值
        $lereg_name = request()->post('lereg_name');
        // var_dump($lereg_name);
        $lereg_res = request()->lereg_res;
        
        $lereg_edu = request()->lereg_edu;
        $lereg_school = Request()->lereg_school;
        $lereg_magor = request()->lereg_magor;
        
        $lereg_time = request()->lereg_time;
        
        // $data = [
        //     'lereg_name'=>$lereg_name,
        //     'lereg_res'=>$lereg_res,
        //     'lereg_edu'=>$lereg_edu,
        //     'lereg_school'=>$lereg_school,
        //     'lereg_magor'=>$lereg_magor,
        //     // 'lereg_qual'=>$lereg_qual,
        //     'lereg_time'=>$lereg_time,
        // ];
        
        $tea = new TeacherModel();
        $tea->lereg_name=$lereg_name;
        $tea->lereg_res=$lereg_res;
        $tea->lereg_edu=$lereg_edu;
        $tea->lereg_school=$lereg_school;
        $tea->lereg_magor=$lereg_magor;
        $tea->lereg_time=$lereg_time;
        $res = $tea->save();



        if($res){
            echo json_encode(['code'=>0,'msg'=>"ok"]);
        }else{
            echo json_encode(['code'=>1,"msg"=>"no"]);
        }


    }
}
