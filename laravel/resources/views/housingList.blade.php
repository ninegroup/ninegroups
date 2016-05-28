<meta charset="utf-8"/>
<link rel="stylesheet" href="css/users.css" />
<link rel="stylesheet" href="css/use.css" />
 <link rel="stylesheet" href="plugin/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="plugin/animate.min.css" />
	<link rel="shortcut icon" href=" img/bitbug_favicon.ico" /> 
<div class="main">
	<style type="text/css">
		<link rel="stylesheet" href="css/css.css" />
	</style>

		<ul class="breadcrumb clearfix">
			       
			<li>》房源管理</li>
		</ul>
		
		<div class="personalCenter clearfix">		
		    <!-- Center-sidebar -->
<ul class="center-sidebar">
		<li><a href="{{URL::route('Index/userList')}}">个人信息<span class="ddgl"></span></a></li>
		<!--<li><a   href="/user/tenant/commentmanager.html">点评管理<span class="dpgl" ></span></a></li>-->
		<li><a class="slideactive" href="{{url('housingList')}}">房源管理<span class="zhgl_current"></span></a></li>
</ul>

	        <!-- Center-sidebar END -->			
			<div class="centerCon">
				<ul class="centerTab">
					<li class="active">房源管理</li>
				</ul>
				<div class="accountMt clearfix">
					<!-- 个人信息 -->
					<input style="display: none;" name="issetpass" id="issetpass" value="false" type="hidden">
					<input style="display: none;" name="isbandmobile" id="isbandmobile" value="true" type="hidden">
					<input style="display: none;" name="usertype" id="usertype" value="tenant" type="hidden">
					<input style="display: none;" name="bjlandlord" id="bjlandlord" value="0" type="hidden">
					<div class="MtList" style="display: block;">
						<table class="gathering">
							<tr bgcolor="#ccc">
								<td>房间id</td>
								<td>房屋标题</td>
								<td>房屋描述</td>
								<td>价格</td>
								<td>居住人数</td>
								<td>房屋地址</td>
								<td>审核状态</td>
							</tr>
							@foreach($db as $v)
							<tr>
								<td>{{$v->h_id}}</td>
								<td>{{$v->h_title}}</td>
								<td>{{$v->h_content}}</td>
								<td>{{$v->h_price}}</td>
								<td>{{$v->h_people}}人</td>
								<td>{{$v->h_city}}</td>
								<td>
									@if($v->h_state==0)
									审核中
									@elseif($v->h_state==1)
									审核不通过
									@else
									审核通过
									@endif
								</td>
							</tr>
							@endforeach
						</table>
							
					</div>
				
					</div>
					<div class="tcdPageCode">
					</div>
					<!-- 个人信息 END -->

				
					
				</div>
			</div>
		</div>
	</div>


	<script src="script/jquery-1.8.3.min.js"></script>
	<script src="script/jquery.page.js"></script>
	<script>
		$(".tcdPageCode").createPage({
			pageCount:2,  //
			current:1,
			backFn:function(p){
				console.log(p);
			}
		});
	</script>