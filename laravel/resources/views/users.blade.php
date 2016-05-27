<meta charset="utf-8"/>
<link rel="stylesheet" href="../css/users.css" />
<link rel="stylesheet" href="../css/use.css" />
 <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/animate.min.css" />
	<link rel="shortcut icon" href=" img/bitbug_favicon.ico" /> 
<div class="main">

		 <link rel="stylesheet" href="../css/css.css" />

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
			<li><a  href="{{url('blog')}}">房源管理<span class="zhgl_current"></span></a></li>
		</ul>
<script type="text/javascript" href="../js/jquery.js"></script>
<script type="text/javascript">
	
</script>
	        <!-- Center-sidebar END -->			
			<div class="centerCon">
				<ul class="centerTab">
					<li class="active">个人信息</li>
				</ul>
				<div class="accountMt clearfix">
					<!-- 个人信息 -->
					<form action="{{URL::route('Index/userGai')}}" enctype='multipart/form-data' method="post">
					 <input type="hidden" name="_token" value="{{csrf_token()}}"/>
					<input style="display: none;" name="issetpass" id="issetpass" value="false" type="hidden">
					<input style="display: none;" name="isbandmobile" id="isbandmobile" value="true" type="hidden">
					<input style="display: none;" name="usertype" id="usertype" value="tenant" type="hidden">
					<input style="display: none;" name="bjlandlord" id="bjlandlord" value="0" type="hidden">
					<div class="MtList" style="display: block;">
						<div class="avatar-box">
							<div class="avatar">
							@if(($db->u_header)=="")
									<img id="headimage" style="width:100px;height:100px;" src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_110x110c.jpg" alt="">
							@else
									<img id="headimage" style="width:100px;height:100px;" src="{{URL::asset('uploads')}}/<?php echo $db->u_header?>" alt="">
							@endif
							</div>
							<p>
							<a id="upheadimgdo" class="alertAvatar" rel="nofollow" href="javascript:void(0)" ><span onclick="photoupd();">[修改头像]</span>
							</a>
							</p>
							
								<div id="photoupd" style="display:none">
									<input type="file" name="myfiles"/>
								</div>
							
						</div>

						<div class="tabCon">
						
							<ul class="userInfo">
							
								<li class="clearfix">
									<span class="infoTitle">昵&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;称：</span> 
									<input class="personLargeInput" name="u_name"  id="nickname" value="{{$db->u_name}}" placeholder="请输入您的昵称" style="width:276px;" type="text">
									
								</li>
								<li class="clearfix">
									<span class="infoTitle">真实姓名：</span> 
									<input class="personLargeInput" name="realname" id="username" readonly value="<?php echo $_COOKIE['name']?>" style="width:276px;" type="text">
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
									<?php if($db->u_sex==''){?>
										<input type="radio"  name="u_sex"   value="男" /> 男&nbsp;
										<input type="radio"  name="u_sex"   value="女" /> 女&nbsp;
									<?php }else if($db->u_sex=='男'){?>
										<input type="radio"  name="u_sex"   value="男" checked/> 男&nbsp;
										<input type="radio"  name="u_sex"   value="女" /> 女&nbsp;
									<?php }else{?>
										<input type="radio"  name="u_sex"   value="男" /> 男&nbsp;
										<input type="radio"  name="u_sex"   value="女" checked/> 女&nbsp;
										<?php }?>
								</li>
								<li class="clearfix">
									<span class="infoTitle">手机号码：</span> 
									<input class="personLargeInput" name="u_tel" id="u_phone" value="{{$db->u_tel}}" style="color:#000;" type="text">
										<a id="updatemobile" class="checking" rel="nofollow" href="javascript:void(0)"></a>
									<!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
								</li>
								<li class="clearfix">
								 <?php 
									if($db->u_idcard!=""){
									?>
									<span class="infoTitle">身份证号：</span>
									<input class="personLargeInput" name="u_idcard" id="u_email" value="{{$db->u_idcard}}" type="text">
									<?php }else{?>
									<span class="infoTitle">身份证号：</span>
									<input class="personLargeInput" name="u_idcard" id="u_email" value="" type="text">
									<?php }?>
									<!-- <span class="prompt">2-10个汉字，或2-20个英文字符</span> -->
								</li>
								<!--<button>确定</button>-->
								
							</ul>

							<div class="submit-wrap" style="bgcolor:green">
							<!-- 	<a id="saveuser" class="btn btn-theme navbar-btn btn-default sign-in" rel="nofollow" href="javascript:void(0)">保存</a> -->
							
								<input type="submit" value="保存" id="saveuser" class="btn btn-theme navbar-btn btn-default sign-in" rel="nofollow"/>
							</div>
						</div>
					</div>
					</form>
					<!-- 个人信息 END -->

					<!-- 收款账户 -->
					<!-- 收款账户 END -->
					
					
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript" src="../js/jquery-2.1.4.js"></script>
	<script>
		
		function photoupd(){
			$("#upheadimgdo").attr({style:"display:none"});
			$("#photoupd").attr({style:""});
		}
	</script>