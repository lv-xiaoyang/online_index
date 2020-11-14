
<!doctype html>
<html>
<head>
	<meta name="_token" content="{{ csrf_token() }}"/>
<meta charset="utf-8">
<title>谋刻职业教育在线测评与学习平台</title>
<script src="/static/js/jquery-1.8.0.min.js"></script>
<script src="/static/js/mine.js"></script>
<script src="/static/js/jquery.tabs.js"></script>
  		<!-- video.js must be in the <head> for older IEs to work. -->
<link rel="stylesheet" href="video-js.css" >
<link rel="stylesheet" href="/static/css/course.css"/>
<link rel="stylesheet" href="/static/css/tab.css" media="screen">
<script src="video.js"></script>
    
      <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
      <script>
        videojs.options.flash.swf = "video-js.swf";
		
      </script>
      <script type="text/javascript">
$(function(){

	$('.demo2').Tabs({
		event:'click'
	});
});
</script>
      <style>
      body { overflow:hidden;
	  		 scrollbar-base-color:#fff;
			 scrollbar-arrow-color:#fff; /*三角箭头的颜色*/
			 scrollbar-face-color: #333; /*立体滚动条的颜色（包括箭头部分的背景色）*/
			 scrollbar-3dlight-color: #fff; /*立体滚动条亮边的颜色*/
			 scrollbar-highlight-color: #fff; /*滚动条的高亮颜色（左阴影？）*/
			 scrollbar-shadow-color: #fff; /*立体滚动条阴影的颜色*/
			 scrollbar-darkshadow-color:#fff; /*立体滚动条外阴影的颜色*/
			 scrollbar-track-color: #fff; /*立体滚动条背景颜色*/
			 
			 
			
	  }
	   /* 设置滚动条的样式 */
			::-webkit-scrollbar {
				width: 10px;
			}
			/* 滚动槽 */
			::-webkit-scrollbar-track {
				border-radius:0
			}
			/* 滚动条滑块 */
			::-webkit-scrollbar-thumb {
				background: #333;
				
			}
			::-webkit-scrollbar-thumb:window-inactive {
				background: rgba(255,0,0,0.4);
			}
      </style>
</head>



<!-- 内容部分 -->
@yield("content")



