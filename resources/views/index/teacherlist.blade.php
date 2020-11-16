@extends("layouts.tail")
@section("title","课程首页")
@section("content")
<!-- InstanceBeginEditable name="EditRegion1" -->
	
<meta name="csrf-token" content="{{ csrf_token() }}">
<form action="" method="post" id="banner-upload" enctype="multipart/form-data">
	<div class="coursecont" style="background: none repeat scroll 0 0 #fff;border-radius: 3px;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);" >
		<h3 class="righttit" style="padding-left:50px;">优秀讲师</h3>
		@foreach($data as $k=>$v)
		<div class="coursepic tecti">
			<div class="teaimg" lereg_id="{{$v->lereg_id}}">
				<a target="_blank" name="teacher">
					<img  src="/{{$v->lereg_qual}}" width="150">
				</a>
			</div>
			<div class="teachtext">
				<h3 lereg_name="{{$v->lereg_name}}">
					<a  name="teacher2" target="_blank" class="teatt">{{$v->lereg_name}}</a>&nbsp;&nbsp;
					<strong>{{$v->lereg_magor}}</strong></h3>
				<h4>个人简介</h4>
				<p>{{$v->lereg_res}}</p>
				<h4>授课风格</h4>
				<p>{{$v->lereg_style}}</p>
			</div>
			<div class="clearh"></div>
		</div>
		@endforeach

	</div>
</form>
<!-- InstanceEndEditable -->	

	<script>
		$(document).ready(function(){
			//根据标签选择器 写方法 
			//	$("a[name='teacher']").click(function(){
			//根据图片a标签获取他的父级标签的id
			$("a[name='teacher']").click(function(){
				var lereg_id = $(this).parent().attr("lereg_id");;
				// console.log(lereg_id);	    
				var formData = new FormData(document.getElementById('banner-upload'));
				$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
				$.ajax({
					url:'/index/teacher/'+lereg_id,
					type:'post',
					data:formData,
					contentType: false,
					processData: false,
					success:function(res){
						alert(res);
						// if(res.code==0001){
						// 		location.href="/index/teacher";
						// }else{
						// 	alert(res.msg);
						// }
					}
				});

		
			});

			$("a[name='teacher2']").click(function(){
				var lereg_name = $(this).parent().attr("lereg_name");
				console.log(lereg_name);
			})





		})
	
	</script>


@endsection