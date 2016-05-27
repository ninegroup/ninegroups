<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <title>用户中心</title> 
</head>
<style>
	@charset "utf-8";
/* CSS Document */
body{font-family:Arial, Helvetica, sans-serif;font-size:11px;}
*{margin:0;padding:0;}

/****** tab1 ******/
.tabqh{height:180px;margin:30px auto;position:relative;width:450px;}
.tabqh .menu{height:32px;width:450px;background:url(../images/qhbg.jpg) no-repeat left center;}
.tabqh .menu ul{margin:0px;padding:0px;height:26px;list-style:none;text-align:center;}
.tabqh .menu li{display:block;float:left;height:26px;line-height:26px;margin-right:4px;margin-top:5px;width:96px;}
.tabqh .menu li a{color:#000000;font-size:14px;text-decoration:none;display:block;background:url(../images/unhovbg.jpg) no-repeat left bottom;}
.tabqh .menu li a.tabactive{color:#ffffff;font-weight:bold;background:url(../images/hovbg.jpg) no-repeat left bottom;}
.tabqh .tabdiv ul{list-style:none;}
.tabqh .tabdiv ul li{height:24px;line-height:24px;overflow:hidden;background:url(../images/linarr.jpg) no-repeat left center;text-indent:15px;}
.tabqh .tabdiv ul li a{text-decoration:none;color:#000000;}
.tabqh .tabdiv ul li a:hover{color:#ff0000;}
.tabqh .tabfirstli{margin-left:8px;}
.tabqh .tabdiv{font-size:12px;height:128px;padding:10px;position:absolute;text-align:left;top:32px;width:428px;border:1px solid #A9CBF0;border-top:none;}	

/****** tab2 ******/
.tabqh2{height:180px;margin:30px auto;position:relative;width:480px;}
.tabqh2 .menu{height:32px;width:480px;background:url(../images/qhbg2.jpg) no-repeat left center;}
.tabqh2 .menu ul{margin:0px;padding:0px;height:26px;list-style:none;text-align:center;}
.tabqh2 .menu li{display:block;float:left;height:26px;line-height:26px;margin-right:4px;margin-top:5px;width:107px;}
.tabqh2 .menu li a{color:#000000;font-size:14px;text-decoration:none;display:block;background:url(../images/unhovbg2.jpg) no-repeat left bottom;}
.tabqh2 .menu li a.tabactive{color:#268bdd;font-weight:bold;height:27px;background:url(../images/hovbg2.jpg) no-repeat left bottom;}
.tabqh2 .tabdiv ul{list-style:none;}
.tabqh2 .tabdiv ul li{height:24px;line-height:24px;overflow:hidden;background:url(../images/linarr.jpg) no-repeat left center;text-indent:15px;}
.tabqh2 .tabdiv ul li a{text-decoration:none;color:#000000;}
.tabqh2 .tabdiv ul li a:hover{color:#ff0000;}
.tabqh2 .tabfirstli{margin-left:8px;}
.tabqh2 .tabdiv{font-size:12px;height:128px;padding:10px;position:absolute;text-align:left;top:32px;width:458px;border:1px solid #A9CBF0;border-top:none;}	
</style>
<body>
<link rel="stylesheet" type="text/css" href="../css/user.css" />
  <h1></h1>
              <div class="right_con">
                                                                                <div class="manage_breadcrumb">
        <a href="#">用户中心</a>
                <span> &gt;</span>我是房东
                    <span> &gt;</span><strong>房源列表</strong>
            </div>                                <ul class="tabs marginT15 width594">
                    <li class="no_tab no_pointer"><strong>房源审核信息</strong></li>
                </ul>
          <form  method="post" action="{{URL::route('Index/userGai')}}" enctype='multipart/form-data'  name="userForm" id="userForm" target="postframe">
          	<input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="con_wraper width594 fl">
                    <!--
                    <p class="field_p">
                        <label>用户名：</label>
                        <span>xza_673118536yqgs4</span>
                    </p>
                    -->
			      <!-- start -->
		<div class="tabqh">

	<div class="menu">
		<ul>
			<li class="tabfirstli"><a href="javascript:void(0);" onmouseover="showThis(1,'divNumber','tabcontent','tablink');" class="tabactive" id="tablink1">最新公告</a></li>
			<li><a href="javascript:void(0);" onmouseover="showThis(2,'divNumber','tabcontent','tablink');" id="tablink2">行业纵览</a></li>
			<li><a href="javascript:void(0);" onmouseover="showThis(3,'divNumber','tabcontent','tablink');" id="tablink3">产业聚焦</a></li>
			<li><a href="javascript:void(0);" onmouseover="showThis(4,'divNumber','tabcontent','tablink');" id="tablink4">创新成果</a></li>
		</ul>
	</div>

	<div id="tabcontent1" name="divNumber" class="tabdiv">
		<ul>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料转换......</a></li>
		</ul>
	</div>
	<div id="tabcontent2" name="divNumber" class="tabdiv hiddendiv">
		<ul>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料转换......</a></li>
		</ul>
	</div>
	<div id="tabcontent3" name="divNumber" class="tabdiv  hiddendiv">
		<ul>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料转换......</a></li>
		</ul>
	</div>
	<div id="tabcontent4" name="divNumber" class="tabdiv hiddendiv">
		<ul>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料转换......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型......</a></li>
			<li><span style="float: right;">[2014-06-12]</span><a href="#">创新型热电材料转换效率创世界纪录创新型热电材料转换......</a></li>
		</ul>
	</div>
</div>

		<!-- end -->


                    <div class="sns_wraper">
<a href="http://www.gaojiahao.com/database/ninegroups/laravel/public/">返回主页</a>
</div>
                     
                </div>
                <div class="user_img_right">
    <div class="user_infor_all">
        <div class="user_infor_T">丰富您的个人信息<br />我们会为您：</div>
        <ul class="infor_all_ul">
            <li>&middot; 推荐志趣相投的房东</li>
            <li>&middot; 找到符合您品味的房间</li>
            <li>&middot; 结识最有意思的房客</li>
        </ul>
    </div>
    <div class="user_percent">
        
        
    </div>
</div>           
 </form>
            </div>
        </div>
        <!-- content dialog-->
        <div class="zhima_pop pop_330" style="display:none" id="alipayTrustAuthDialog">

</div>
</body>
<script type="text/javascript" src="http://jci.xiaozhustatic3.com/e1605163/js/jquery/jquery.js"></script>
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/xzjs?k=Footer&httphost=www.xiaozhu.com"></script>
<link rel="stylesheet" type="text/css" href="http://jci.xiaozhustatic1.com/e1605163/xzcss?css=jquery.mCustomScrollbar,nyroModal,uploadify" />
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/js/jquery/lazyload.js"></script>
<script type="text/javascript" src="http://www.xiaozhu.com/e1605163/js/webimv4/application/xzim4.js?source=xiaozhu&dm=xiaozhu.com" id="webimSource"></script>
<script src="../js/tabqh.js"></script>
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/xzjs?k=FangDong_Header&httphost=www.xiaozhu.com"></script>
        <script type="text/javascript" src="../css/user2.css"></script>
</html>
