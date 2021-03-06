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
	@include('html.top')
		<ul class="breadcrumb clearfix">
			       <li><a href="/tenant/851658049/orders">我是房东</a> <span class="divider">》</span></li>
			<li>账户管理</li>
		</ul>
		
		<div class="personalCenter clearfix">		
		    <!-- Center-sidebar -->
		<ul class="center-sidebar">
			<li><a class="slideactive" href="{{url('userList')}}">个人信息<span class="ddgl"></span></a></li>
			<li><a href="{{url('orderList')}}">订单管理<span class="ddgl"></span></a></li>
			<!--<li><a   href="/user/tenant/commentmanager.html">点评管理<span class="dpgl" ></span></a></li>-->	
			<li><a  href="{{url('housingList')}}">房源管理<span class="zhgl_current"></span></a></li>
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
					<li class="active">个人信息</li>
					<li class="">密码设置</li>
						<li class="" id="promotionli" name="promotionli">优惠信息</li>
				</ul>
				<div class="accountMt clearfix">
					<!-- 个人信息 -->
					<input style="display: none;" name="issetpass" id="issetpass" value="false" type="hidden">
					<input style="display: none;" name="isbandmobile" id="isbandmobile" value="true" type="hidden">
					<input style="display: none;" name="usertype" id="usertype" value="tenant" type="hidden">
					<input style="display: none;" name="bjlandlord" id="bjlandlord" value="0" type="hidden">
					<div class="MtList" style="display: block;">
					@foreach($user as $v)
						<div class="avatar-box">
						
							<div class="avatar">
									<!--<img id="headimage" style="width:100px;height:100px;" src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_110x110c.jpg" alt="">-->
									<img id="headimage" style="width:100px;height:100px;" src="img/{{$v->u_photo}}" alt="">
							</div>
							<p><a id="upheadimgdo" class="alertAvatar" rel="nofollow" href="javascript:void(0)">[修改头像]</a></p>
							
						</div>
						<div class="tabCon">
						
							<ul class="userInfo">
								<!--<li class="clearfix"><span class="infoTitle">用 &nbsp;户&nbsp;名：</span>{{$v->u_name}}</li>-->
								<li class="clearfix">
									<span class="infoTitle">昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</span> 
									<input class="personLargeInput" name="nickname" placeholder="4-20个字符（汉字、字母、数字、下划线）" id="nickname" value="{{$v->u_nickname}}" style="width:276px;" type="text">
									
								</li>
								<li class="clearfix">
									<span class="infoTitle">真实姓名：</span> 
									<input class="personLargeInput" name="realname" id="username" placeholder="{{$v->u_name}}" value="{{$v->u_name}}" style="width:276px;" type="text">
									<span class="namenotice">请务必使用真实姓名，否则影响我们向您的账户支付</span>
                                    	<div class="zhima_des" id="zmsq_des" style="display: none;">
	                                    	<p class="zm_top zhima_green">芝麻信用是依法成立的独立信用评估及管理机构。授权后得到分数越高，代表信用越好。</p>
	                                        <div class="zm_bottom plr10 c322c27">在天朝居，若您的芝麻信用分≥600，可享受优质房源入住免押金的特权服务（免押金房源会有相应标示）</div>
	                                        <a class="green_button shouquan">立即授权</a>
	                                        <div class="t-center">
	                                        	<a href="/zmxy/introduce" target="_blank" class="blue clearfloat">了解更多&gt;&gt;</a>
	                                        </div>
	                                    </div>
								</li>
							</ul>
							
							<ul class="userInfo">
								<li class="clearfix">
									<span class="infoTitle">性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别：</span> 
										{{$sex}}				
								</li>
								<li class="clearfix">
									<span class="infoTitle">身&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;份：</span> 
									@if($area==1)
										房东
									@else
										房客
									@endif
									
								</li>
								<li class="clearfix">
									<span class="infoTitle">邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱：</span> 
									<input class="personLargeInput" name="u_email" id="u_email" value="{{$v->u_email}}" type="text">
										<a id="validemail" class="checking" rel="nofollow" href="javascript:void(0)"></a>
									<!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
								</li>
								<li class="clearfix">
									<span class="infoTitle">手机号码：</span> 
									<input class="personLargeInput" name="u_phone" id="u_phone" value="{{$v->u_phone}}" style="color:#000;" type="text">
										<a id="updatemobile" class="checking" rel="nofollow" href="javascript:void(0)"></a>
									<!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
								</li>
								<li class="clearfix">
									<span class="infoTitle">身份证号：</span>
									<a href="javascript:void(0);" onclick="xiu(this)">
										<span class="ressaddlist">
												{{$v->u_ressadd}}
										</span>
									</a>
									<!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
								</li>
								<li class="clearfix">
									<span class="infoTitle">详细住址：</span>
									{{$v->u_zhuzhi}}
										<a id="updatemobile" class="checking" rel="nofollow" href="javascript:void(0)"></a>
									<!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
								</li>
								<li class="clearfix">
									<span class="infoTitle">注册时间：</span> 
									{{$v->u_time}}
										<a id="updatemobile" class="checking" rel="nofollow" href="javascript:void(0)"></a>
									<!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
								</li>
							</ul>
							@endforeach
							<!--<div class="submit-wrap">
								<a id="saveuser" class="save-btn" rel="nofollow" href="javascript:void(0)">保存</a>
							</div>-->
						</div>
					</div>
					<!-- 个人信息 END -->

					<!-- 收款账户 -->
					<!-- 收款账户 END -->
					
					<!-- 密码设置 START -->
					<div style="display: none;" class="MtList">
					<input name="issetpass" id="issetpass" value="false" type="hidden">
					<input name="isbandmobile" id="isbandmobile" value="true" type="hidden">
						    <ul class="userInfo">
								<li class="clearfix"><span class="infoTitle">登录账号：</span> m#_851658049</li>
								<li class="clearfix">
									<span class="infoTitle">验证码：</span> 
									<input value="" name="setpauthcode" id="setpauthcode" class="personLargeInput" type="text">
									<input class="securitycode" value="获取验证码" name="getSetPassValidCode" id="getSetPassValidCode" type="button">
								</li>
								<li class="clearfix">
									<span class="infoTitle">新密码：</span> 
									<input value="" name="newpass" id="newpass" class="personLargeInput" type="password">
									<span class="prompt" id="newpassspan" name="newpassspan">6-16个字符</span>
								</li>
								<li class="clearfix">
									<span class="infoTitle">确认密码：</span> 
									<input value="" name="repass" id="repass" class="personLargeInput" type="password">
									<span class="prompt" id="repassspan" name="repassspan">重复输入一次密码</span>
								</li>
							</ul>						
					  <div class="submit-wrap">
							<a class="save-btn" id="savepassbtn" name="savepassbtn" rel="nofollow" href="javascript:void(0)">保存</a>
					  </div>
					</div>
					<!-- 密码设置 END-->
				</div>
			</div>
		</div>
	</div>
	@include("html.footer");

	<script>
		function xiu(obj){
			alert("1213")
		}
		//昵称修改
		$("#nickname").blur(function(){
			var nickname=$("#nickname").val();
			$.ajax({
			   type: "POST",
			   url: "{{url('nicknameUpdate')}}",
			   data: "nickname="+nickname,
			   success: function(msg){
					 if(msg==1){
						alert("修改成功");
					 }
				  }
			});
		});
		//用户名修改
		$("#username").blur(function(){
			alert(11)
			var username=$("#username").val();
			$.ajax({
			   type: "POST",
			   url: "{{url('usernameUpdate')}}",
			   data: "username="+username,
			   success: function(msg){   
				 if(msg==1){
					alert("修改成功");
				 }
			   }
			});
		});
		//邮箱修改
		$("#u_email").blur(function(){
			var email=$("#u_email").val();
			var reg=/^\w+@\w+\.(com|net|cn)$/;
			if(!reg.test(email)){
				alert("请注意邮箱格式");
			}else{
				$.ajax({
				   type: "POST",
				   url: "{{url('emailUpdate')}}",
				   data: "email="+email,
				   success: function(msg){   
						 if(msg==1){
							alert("修改成功");
						 }
					 }
				});
			}
			
		});


		//手机号修改
		$("#u_phone").blur(function(){
			var phone=$("#u_phone").val();
			var reg=/^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])\d{8}/;
			if(!reg.test(phone)){
				alert("请注意手机号格式");
			}else{
				$.ajax({
				   type: "POST",
				   url: "{{url('phoneUpdate')}}",
				   data: "phone="+phone,
				   success: function(msg){   
						 if(msg==1){
							alert("修改成功");
							$("#phones").html("<span>"+phone+"</span>");
						 }
					 }
				});
			}
			
		});
		function photoupd(){
			$("#upheadimgdo").attr({style:"display:none"});
			$("#photoupd").attr({style:""});
		}
	</script>