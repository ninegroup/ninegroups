<!DOCTYPE HTML>
<html>
<head>
<title>久久租</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.useso.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/cityselect.css">
<script type="text/javascript" src="js/jquery.js"></script>
	 	<!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<!---//strat-slider---->
<!-- start top_js_button -->

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/dateRange.js"></script>
<script type="text/javascript" src="js/area/cityselect.js"></script>
<link rel="stylesheet" type="text/css" href="css/dateRange.css"/>
<link rel="stylesheet" href="css/lanrenzhijia.css" media="all">
<style type="text/css">
::selection {
	background-color: #E13300;
	color: white;
}
::moz-selection {
	background-color: #E13300;
	color: white;
}
::webkit-selection {
	background-color: #E13300;
	color: white;
}
input {
	color: #333333;
	font: 12px /1.5 Tahoma, Helvetica, 'SimSun', sans-serif;
}
code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}
h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}
.wrapper {
	margin: 0 15px 0 15px;
}

</style>


</head>
<body>
<div id='search'>
	<input type="text" class="cityinput" id="citySelect" placeholder="请输入地区...">
		 <input type="text"  class="date_title" id="date_demo3"  placeholder="请输入日期..." />
				<a class="opt_sel" id="input_trigger_demo3" href="#">
					<i class="i_orderd"></i>
				</a>
		<script type="text/javascript">
			var dateRange = new pickerDateRange('date_demo3', {
				isTodayValid : false,
				defaultText : ' 至 ',
				inputTrigger : 'input_trigger_demo3',
				theme : 'ta',
				success : function(obj) {
					$("#dCon_demo3").html('开始时间 : ' + obj.startDate + '<br/>结束时间 : ' + obj.endDate);
				}
			});


			jQuery(document).ready(function($) {
		$('.theme-login').click(function(){
			$('.theme-popover-mask').fadeIn(100);
			$('.theme-popover').slideDown(200);
		})
		$('.theme-poptit .close').click(function(){
			$('.theme-popover-mask').fadeOut(100);
			$('.theme-popover').slideUp(200);
		})
	})
		
		
		
		jQuery(document).ready(function($) {
		$('.theme-register').click(function(){
			$('.theme-register-mask').fadeIn(100);
			$('.register').slideDown(200);
		})
		$('.theme-poptit .close').click(function(){
			$('.theme-register-mask').fadeOut(100);
			$('.register').slideUp(200);
		})
	})

	function housing()
	{
		//var name=document.cookie('name');
		location.href="{{ URL::route('Login/housing') }}";
	}

		</script>
		<script type="text/javascript">
			var test=new Vcity.CitySelector({input:'citySelect'});
		</script>
	<input type="button" value='搜索' id='ssearch' onclick="search()" />
</div>
<!-- start header -->
<div class="logo" id='logo'>
	<a href="index.html"><img src="images/jiujiu.jpg" alt="" style='width:180px;height:80px;' id="jiujiu"/></a>
</div>
<div class="header_bg" id='pt'>
<div class="wrap">
	<div class="header">
		<div class="social-icons">
		    <ul>
		      <?php if(empty($_COOKIE['name'])){?>
		      <li><a href="javascript:;" class="btn btn-primary btn-large theme-register">注册送红包</a></li>
			  <li><a href="javascript:;" class="btn btn-primary btn-large theme-login">登陆</a></li>
			  <?php }else{?>
				<li><h3>欢迎<a href="{{URL::route('Index/user')}}"><?php echo $_COOKIE['name']?></a>	登陆</h3></li>
				<li><a href="{{URL('unset1')}}">退出</a></li>
			  <?php }?>	
			  <li><input type="button" value="免费发布房源" class="btn btn-primary btn-large" onclick="housing()"/></li>

			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<!-- start slider -->
<div class="">
<div class="wrap">
	<div class="slider">
				<!---start-da-slider----->	
<div id="wowslider-container1">
<div class="ws_images"><ul>
		@foreach($db as $v)
		<li><img src="images/uploads/{{ $v->pi_path }}" alt="1" title="" id="wows1_0" style="height:600px;width:100%;"></li>
		@endforeach
	</ul></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="js/wowslider.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</div>
 			<!---//End-da-slider----->
 	</div>
</div>
</div>
<!-- start main -->
<div class="wrap">
	<div class="main">
		<div class="main_text">
			<h2 style="background-color:#ffffff;width:1250px;height:70px;line-height:70px;">热门短租</h2>
			<p class="para">海内存知己,天涯若比邻</p>
		</div>
		<!-- start grids_of_3 -->
		<!--<div class="grids_of_3">
			<div class="grid1_of_3">
				<img src="images/icon1.png" alt=""/>
				<h3><a href="#">Lorem Ipsum is <span> simply </span> </a></h3>
				<p>热门短租</p>
			</div>
			<div class="grid1_of_3">
				<img src="images/icon2.png" alt=""/>
				<h3><a href="#">Lorem Ipsum is <span> simply </span> </a></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
			</div>
			<div class="grid1_of_3">
				<img src="images/icon3.png" alt=""/>
				<h3><a href="#">Lorem Ipsum is <span> simply </span> </a></h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
			</div>
			<div class="clear"></div>
		</div>-->
		<!-- end grids_of_3 -->
	</div>
</div>
<!-- start main_bg -->
<div class="main_bg">
<div class="wrap">
	<div class="main content_top">
		<!-- start span_of_3 -->
		<div class="span_of_3"> 
			@foreach($hot as $v)
			<div class="span1_of_3">
				<a href="#"><img src="images/uploads/{{ $v->pi_path }}" alt="{{ $v->h_title }}"/></a>
				<div class="span1_of_3_text">
					<h3><a href="#">{{ $v->h_title }}</a></h3>
					<p>{{ $v->h_content }}</p>
				</div>
			</div>
			@endforeach
			<div class="clear"></div>
		</div>			
		<!-- end grids_of_3 -->
	</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg">
@include('components.foot2');
</div>
<!-- start footer -->




<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>登录 是一种态度</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="{{URL('login')}}" method="post">
		   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <ol>
                     <li><strong>用户名：</strong><input class="ipt" type="text" name="u_name" size="20" /></li>
                     <li><strong>密码：</strong><input class="ipt" type="password" name="u_pwd"  size="20" /></li>
                     <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
                </ol>
           </form>
     </div>
</div>
<div class="theme-popover-mask"></div>



<div class="register">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h2><font style="font-size:30px;">重磅消息</font>：<font style="font-size:25px;">所有新用户，注册就送<span style="color:red;font-size:50px;">200元</span>代金券</font></h2>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" action="{{URL('register')}}" method="post" onsubmit="return fun()">
		   <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <ol>
                     <li><strong>用户名：</strong><input class="ipt" type="text" name="u_name" placeholder="请输入您的昵称" size="20" id="u_name" onblur="s_name()"/><span id="s_name"></span></li>
                     <li><strong>密码：</strong><input class="ipt" type="password" name="u_pwd" placeholder="密码长度6~16位" size="20" id="u_pwd" onblur="s_pwd()"/><span id="s_pwd"></span></li>
                     <li><strong>手机号：</strong><input class="ipt" type="text" placeholder="请输入您的手机号" name="u_tel" size="20" /></li>
                     <li><input class="btn btn-primary" type="submit" value=" 注 册 " />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary" type="reset" value=" 重 置 " /></li>
                </ol>
           </form>
     </div>
</div>
<div class="theme-register-mask"></div>

</body>
</html>

<script>
	function s_name()
	{
		var u_name=document.getElementById('u_name').value;
		//alert(u_name)
		if(u_name=='')
		{
			document.getElementById('s_name').innerHTML="<font style='color:red;'>用户名不能为空！</font>";
			return false;
		}else{
			document.getElementById('s_name').innerHTML="<font style='color:green;'>OK!</font>";
			return true;
		}
	}
function s_pwd()
	{
		var u_pwd=document.getElementById('u_pwd').value;
	    var reg=/^\w{6,16}$/;
		//alert(u_name)
		if(u_pwd=='')
		{
			document.getElementById('s_pwd').innerHTML="<font style='color:red;'>密码不能为空！</font>";
			return false;
		}else if(!reg.test(u_pwd)){
			document.getElementById('s_pwd').innerHTML="<font style='color:red;'>密码格式不正确！请输入由6~16位的密码！</font>";
			return false;
		}else{
			document.getElementById('s_pwd').innerHTML="<font style='color:green;'>OK!</font>";
			return true;
		}
	}

	function fun()
	{
		if(s_name()&&s_pwd())
		{
			return true;
		}else{
			alert("请完成信息再提交")
				return false;
		}
	}
	function search(){
		var city=document.getElementById("citySelect").value;
		if(city==""){
			alert("城市不能为空!");
		}else{
			location.href="{{ URL::route('Search/HomepageSearch') }}?city="+city;
		}
	}
</script>