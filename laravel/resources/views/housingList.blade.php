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
			       <li><a href="/tenant/851658049/orders">我是房东</a> <span class="divider">》</span></li>
			<li>房源管理</li>
		</ul>
		
		<div class="personalCenter clearfix">		
		    <!-- Center-sidebar -->
<ul class="center-sidebar">
		<li><a href="{{url('userList')}}">个人信息<span class="ddgl"></span></a></li>
		<li><a  href="{{url('orderList')}}">订单管理<span class="ddgl"></span></a></li>
		<!--<li><a   href="/user/tenant/commentmanager.html">点评管理<span class="dpgl" ></span></a></li>-->
		<li><a class="slideactive" href="{{url('housingList')}}">房源管理<span class="zhgl_current"></span></a></li>
</ul>

<script type="text/javascript">
	//初始化样式展示
	$(document).ready(function(){
		$.ajax({
			url : "/user/getLastAuditDate.do",
			type : 'POST',
			async:true,
			dataType:'json',
			timeout: 3000,
			success : function(data){
				var lastAuditTime=data;
				var cookietime = -1;
				var arr = document.cookie.split("; ");
				for(var i=0,len=arr.length;i<len;i++){
					var item = arr[i].split("=");
					if(item[0]=="MAYI_LA_TIME"){
						cookietime=item[1];
						break;
					}
				}
				if(lastAuditTime == 0 || cookietime > lastAuditTime){
					$(".fdshop").hide();
					$(".fdshop").remove();
				}else{
					$(".fdshop").show();
				}
			}
		});
	});
</script>
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
								<td>房间类型</td>
								<td>是否安全认证</td>
								<td>是否上架</td>
								<td>价格</td>
								<td>户型</td>
								<td>添加时间</td>
								<td>描述</td>
								<td>房屋地址</td>
								<td>操作</td>
							</tr>
						
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