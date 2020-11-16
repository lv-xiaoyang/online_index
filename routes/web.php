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
//首页课程列表
Route::any('/index/courselist','index\IndexController@courselist');
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
Route::any('/index/teacher/{id}','index\IndexController@teacher');
//讲师课程页面
Route::any('/index/coursecont','index\IndexController@coursecont');
//讲师课程章节页面
Route::any('/index/coursecont1','index\IndexController@coursecont1');
//讲师课程视频页面
Route::any('/index/video','index\IndexController@video');
//讲师课程评论页面
Route::any('/index/comment','index\IndexController@comment');

//讲师列表展示页面
// Route::get("/teacherlist",'index\TeacherController@teacherlist');

// 讲师注册模块
Route::prefix("/index")->group(function(){
	//个人中心讲师申请页面
	Route::any('/regteacher','index\IndexController@regteacher');
	// 讲师登录页面
	Route::any('/loginteacher','index\IndexController@loginteacher');
	// 讲师添加注册方法
	Route::get('/regteacher/create','index\TeacherController@create');
	// 讲师执行添加，注册方法
	Route::post('/regteacher/story','index\TeacherController@story');
	// 讲师执行添加，注册方法
	Route::post('/regteacher/getsun','index\TeacherController@getsun');
});


//前台题库模块
Route::prefix("question")->group(function(){
	//讲师模块导航栏展示
	Route::get("/index","Index\QuestionController@index");
	//单选题展示
	Route::get("/dan","Index\QuestionController@dan");
	// 多选题展示
	Route::get("/duo","Index\QuestionController@duo");
	// 简答题展示
	Route::get("/jian","Index\QuestionController@jian");
});


