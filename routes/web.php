<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('index.index');
// });
//首页
Route::get('/','index\IndexController@index');
Route::get('/ajaxIndexCourse','index\IndexController@ajaxIndexCourse');//ajax课程回调
//课程列表页
Route::prefix('/courselist')->group(function(){
    Route::get('/','index\CourseListController@courselist');//课程列表页
    
});
Route::prefix('/detail')->group(function(){
    Route::get('/{slug}.html','index\DetailController@getdetail');//课程详情页
    Route::get('/getencrypt','index\DetailController@getencrypt');//伪静态加密
});


//首页咨询列表
Route::any('/index/articlelist','index\IndexController@articlelist');
//首页讲师列表
Route::any('/index/teacherlist','index\IndexController@teacherlist');
//个人中心
Route::any('/index/mycourse','index\IndexController@mycourse');


//注册
Route::any('/index/register','index\LoginController@register');
Route::any('/index/regs','index\LoginController@regs');
//登录
Route::get('/index/login','index\LoginController@login');
Route::post('/index/logins','index\LoginController@logins');


//讲师模板
//讲师个人详情页面
Route::any('/index/teacher','index\IndexController@teacher');
//讲师课程页面
Route::any('/index/coursecont','index\IndexController@coursecont');
//讲师课程章节页面
Route::any('/index/coursecont1','index\IndexController@coursecont1');
//讲师课程视频页面
Route::any('/index/video','index\IndexController@video');

//讲师课程评论页面
Route::any('/index/comment','index\IndexController@comment');

//个人中心讲师申请页面
Route::any('/index/regteacher','index\IndexController@regteacher');
// 讲师登录页面
Route::any('/index/loginteacher','index\IndexController@loginteacher');
// 讲师添加注册方法
Route::get('/index/regteacher/create','index\TeacherController@create');
// 讲师执行添加，注册方法
Route::post('/index/regteacher/story','index\TeacherController@story');
// 讲师执行添加，注册方法
Route::post('/index/regteacher/getsun','index\TeacherController@getsun');

