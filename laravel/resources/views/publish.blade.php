<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8,chrome=1" />
<meta name="keywords" content=""/>
<meta name="description" content="" />
<link href="http://staticnew.mayi.com/resourcesWeb/css/global.css" rel="stylesheet" type="text/css" />
<link href="http://staticnew.mayi.com/resourcesWeb/css/PublishStep.css" rel="stylesheet" type="text/css" />
<link href="http://staticnew.mayi.com/resourcesWeb/css/account.css" rel="stylesheet" type="text/css" />
<link href="http://staticnew.mayi.com/resourcesWeb/css/PCenter.css?V=20160225" rel="stylesheet" type="text/css" />
<!-- new header -->
<link href="http://staticnew.mayi.com/resourcesWeb/v201510/css/public_element.css" rel="stylesheet"  type="text/css">
<title>房源-发布房源</title>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resources/js/layer/layer.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/room_base.js"></script>
<script type="text/ja	vascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ajaxfileupload.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/account.js?V=20160225"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/CutPic.js?V=20160225"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/account/ui/jquery-ui-1.9.2.custom.min.js" ></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/room_basicInfo.js?V=20160225"></script>
<script type="text/javascript">      
//图片异步上传     
function ajaxFileUpload(obj){
	if(validateImage(obj)){ 
		$.ajaxFileUpload({
			url:'/user/account/originalheadimage/upload.do',   //需要链接到服务器地址  
         	secureuri:false,  
         	fileElementId:'imageupload',                        //文件选择框的id属性  
         	dataType: 'json',                                     //服务器返回的格式，可以是json  
         	success: function (data, status){            //相当于java中try语句块的用法  
     	        if(data.error){
                  	layer.alert(data.error.message,8);
             	}else{
             		$("#isHavePic").val(data.data.result);
             	    $("#ImageDrag").attr("src", data.data.result);
             	    $("#ImageIcon").attr("src",data.data.result);
             	    $("#picture").attr("value",data.data.result);
         	    	img.src = data.data.result;
             	}
        	 },  
         	 error: function (data, status, e){ 
               	    layer.alert("图片上传失败",8);
        	 }  
    	}); 
	}
}
      
function validateImage(obj) {
    var file = obj;
    var tmpFileValue = file.value;
    
    //校验图片格式
    if(/^.*?\.(gif|png|jpg|jpeg|bmp)$/.test(tmpFileValue.toLowerCase())){
        return true;
    } else {
        layer.alert("请您上传jpg、jpeg、png、bmp或gif格式的图片！",8);
        return false;
    }
    //校验图片大小,这段代码需调整浏览器安全级别(调到底级)和添加可信站点(将服务器站点添加到可信站点中)
    if(file.value == ""){            
        layer.alert("请选择上传的文件!",8);
        return false;
    }
}
//下拉框 有选中时删除 请选择 选项
function optionChange(obj){
	$("#"+obj+" option[value='-1']").remove();
	$("#"+obj).removeAttr("onchange");
}
</script>
<!-- 有道统计所需js
<script type="text/javascript">
var youdao_conv_id = 279356; 
</script> 
<script type="text/javascript" src="http://conv.youdao.com/pub/conv.js"></script>
-->

<!-- 百度SEM统计所需js-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?02fc96fc6232fcb90748551f45e3bfa1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script> 

<!--  推广360dsp -->
 <script type="text/javascript">
var _mvq = _mvq || [];
_mvq.push(['$setAccount', 'm-196892-0']);

_mvq.push(['$logConversion']);
(function() {
var mvl = document.createElement('script');
mvl.type = 'text/javascript'; mvl.async = true;
mvl.src = ('https:' == document.location.protocol ? 'https://static-ssl.mediav.com/mvl.js' : 'http://static.mediav.com/mvl.js');
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(mvl, s);
})();

</script>
</head>
<body>
<!-- Header -->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/searchlist/index_searchlist_public.js"></script>
<script type="text/javascript">
    $(function(){
		$(".close-alert1").click(function(){
			$(".alert-box1").hide();
		})
	})
	
	function loginowner(userid){
	
		var ctx = $('#ctx').val();
 	  	$.get(ctx+"/user/checkFrozenAccount?frozenOwnerid="+userid,function(re){
			
			if(re==1){
				$(".alert-box1").show();
			}else{
				var ctx = $('#ctx').val();
		     	location.href =ctx+"/landlord/"+userid+"/orders";	
			}
	   }); 
    }
    
    function publish(userid){
	
		var ctx = $('#ctx').val();
 	  	$.get(ctx+"/user/checkFrozenAccount?frozenOwnerid="+userid,function(re){
			
			if(re==1){
				$(".alert-box1").show();
			}else{
				var ctx = $('#ctx').val();
		     	location.href =ctx+"/room/publish/basicinfo";	
			}
	   }); 
    }
    
    function menufrozen(userid,url,frozentype){
		
		var ctx = $('#ctx').val();
		var furl = ctx+"/user/checkFrozenAccount?frozenOwnerid="+userid;
		if(frozentype == "user"){
			furl += "&frozentype="+frozentype;
		}
  		$.get(furl,function(re){
			if(re==1){
				if(frozentype=='user'){
					$(".frozeninfo").text("对不起，用户账号被封禁");
				}
				$(".alert-box1").show();
			}else{
		     	location.href =url;	
			}
	  	 }); 
    }
    function getSuggest(e){       
		var s = $('#searchcityin').val().trim();		
		var ctx = $('#ctx').val();
		if(!e) var e=window.event;
		var code = e.keyCode;
		if(code==27){
			$('.error_tip_list').css('display','none');
			$('.suggest_results').css('display','none');
			return false;
		}		
		if(code==13||code==37||code==38||code==39||code==40){
			return false;
		}
		if(null!=s && s.length>0 && s!='目的地、景点、商圈等'){		   
			var sugurl = ctx+'/getSuggest';
			getSuggestResult(sugurl,s,0,'list');
		}else{		   
			$('.error_tip_list').html('请输入关键字');
			$('.error_tip_list').css('display','block');
			$('.suggest_results').css('display','none');			
		}
    }
function pressEve(e){
	var e=e||window.event;
	var code = e.keyCode;
	var sugcss = $('.suggest_results').css('display');
	
	if(sugcss!='none'){
		if(code==13){
			doSearch();
		}else if(code==38){
			movePrev();
		}else if(code==40){
			moveNext();
		}
	}
}

</script>
<style>	
.logo58{background:url(http://staticnew.mayi.com/resourcesWeb/images/index/58logo.png) no-repeat;left:14px !important;top:16px !important;}
.logomayi{left:200px !important;}
.alert-box1{width:100%;height: 100%;z-index: 300000;position: absolute;display:none;line-height:40px;}
.surveYY1{background: #000;width:100%;height:100%;opacity: 0.7;position: fixed;top: 0px;left: 0px;}
.offmax_no{width:400px;height:186px;position:fixed;top:50%;margin-top:-93px;left:50%;margin-left:-200px;background-color:#fff;z-index:999;text-align:center;box-shadow:0px 0px 4px #ccc;border-radius:2px;} 
.offmax_no p{padding:0 20px;line-height:25px;}
.alert_tit1{border-bottom:1px solid #e0e0e0;font-size:18px;margin-bottom:20px;}
.close-alert1{cursor:pointer;width:50%;margin:20px auto;background-color:#22bb62;text-align:center;color:#fff;border-radius:2px;}
</style>
<input  type="hidden" name="ctx" id="ctx" value="" />
<div class='header relave'>
		    <!--<a href="/"><div class='asote head_left'></div></a>-->
		<div class='head_cnt relave'> 
			<span class='search'></span>		
			<ul class="nav_R asote nav_right">
            	 <li>
	                <div class="showinfo">
	                    <a href="javascript:menufrozen(851686525,'/tenant/851686525/orders','user')" target="_self"><img src="http://i1.mayi.com/gjfs15/M06/C7/19/CgEHQFcxdRfgpEk7AABlcbtch,g688.jpg_35x35c.jpg" id="aaa" class="user_img">                	
	                    <span class="name" id="head_nickname"></span></a>
	                    <div class="head_pop">
	                        <div class="pop_column">
	                            <p><a href="javascript:menufrozen(851686525,'/tenant/851686525/orders','user')" target="_self" id="myorder" rel="nofollow">我的订单</a></p>
	                            <p><a href="javascript:menufrozen(851686525,'/user/tenant/accountmanager','user')" target="_self" id="myorder" rel="nofollow" class="slideactive">我的账户</a></p>
	                            <p><a href="javascript:menufrozen(851686525,'/user/tenant/mycollection','user')" target="_self" id="mycollect" rel="nofollow">我的收藏</a></p>
	                            <p><a href="javascript:menufrozen(851686525,'/user/tenant/msgmanager','user')" target="_self" id="mymsg" rel="nofollow">消息通知</a></p>
	                            <p class="textCt"><a href="javascript:void(0)" id="loginoutbut" target="_self" class="stclick" clicktag="1_6">退出登录</a></p>
	                        </div>
	                    </div>
	                </div>
               </li>          
            	<li>
	            	<div class="showinfo">
	            		<a href="javascript:loginowner(851686525)" target="_self" class="stclick">我是房东</a>
	                	<div class="head_pop">
		                	<div class="pop_column plr10">
		                        <p><a href="javascript:menufrozen(851686525,'/landlord/851686525/orders','landlord')">订单管理</a></p>
		                        <p><a href="javascript:menufrozen(851686525,'/user/landlord/roommanager','landlord')">房源管理</a></p>
		                        <p><a href="javascript:menufrozen(851686525,'/landlord/851686525/settlements','landlord')">结算管理</a></p>
		                        <p><a href="javascript:menufrozen(851686525,'/user/landlord/msgmanager','landlord')">消息通知</a></p>
		                        <p><a href="javascript:menufrozen(851686525,'/user/landlord/accountmanager','landlord')">账户管理</a></p>
		                        <p><a href="/user/landlord/landlordhelper/">下载房东助手</a></p>
		                    </div>
	                	</div>
	                </div>
                </li>  
            	<li>
            	<div class="showinfo">
                	<a href="/activity/app50" target="_blank">APP下单立送55元</a>
                	<div class="b-app-img head_pop"><img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/commom/mark_quick.jpg"></div>
                </div>
            </li>
            	<li>
                <a class="recruit" href="/landlord/recruit" target="_blank">房东招募</a>
            </li>
             <li>
                <a rel="nofollow" href="javascript:publish(851686525)" class="room-btn f16 t-center" >免费发布房源</a>
             </li>
            </ul>
            <b style="width:1px;height:100%;background-color:#f00;display:block;"></b>
		</div>
		
	</div>
	<!--公共头部结束-->
	<div class="alert-box1">
    <div class="surveYY1"></div> 	
    <div class="offmax_no">
        <div class="alert_tit1">温馨提示</div>
        <p class="frozeninfo">对不起，房东账号被封禁</p>
        <p>如有疑问，请联系蚂蚁短租客服400-069-6060</p>
        <div class="close-alert1">我知道了</div>
    </div>
</div>
<input  type="hidden" name="subdomain" id="subdomain" value="" />
<input  type="hidden" name="mainsite" id="mainsite" value="" />
<input  type="hidden" name="ctx" id="ctx" value="" />
<input  type="hidden" name="ctx1" id="ctx1" value="http://staticnew.mayi.com" />
<input  type="hidden" name="uid" id="uid" value="851686525" />
<input  type="hidden" name="loginurl" id="loginurl" value="none" />
<input type="hidden" name="head_userName" id="head_userName" value="<?php echo $_COOKIE['name']?>">
<script type="text/javascript">
$(function() {	
  	var userName=$("#head_userName").val();
  	if(userName!='' && userName.length>0){
  		var realLength = 0;
  		var len = userName.length;
  		var charCode = -1;
		for (var i = 0; i < len; i++) {
			charCode = userName.charCodeAt(i);
			if (charCode >= 0 && charCode <= 128){ 
				realLength += 1;
			}else{
				realLength += 2;
			}
			if(realLength>20){
				$("#head_nickname").html(userName.substring(0,i)+"...");
				break;
			}
		}
		if(realLength <= 20){
			$("#head_nickname").html(userName);
		}
  	}
  	
  	$(".showinfo").hover(function(){
		$(this).children(".head_pop").css("display","block");		
	}).mouseleave(function(){
		$(this).children(".head_pop").css("display","none");
	})
  			
});
</script>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><html xmlns:wb="http://open.weibo.com/wb">
<head>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/c.js"></script>   
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/im/im_n.js"></script>   

<link rel="stylesheet" href="http://staticnew.mayi.com/resourcesWeb/im/css/IM.css" />   
</head> 
<body>   
		<input type="hidden" id="MAYIUID" value="851686525" />
	<div id="point" class="contacts_landlord clearfloat IM_content ui-draggable" style="display:none;">
		<span class="right_open_btn"></span>  
	</div>
	<a class='IM_btn' style='display:none;' href='javascript:;'><span class='IM_btn_span' ><i style="display:none;">0</i></span>站内信</a> 
    <div class="IM_cancel" style="display:none;">
    	<div class="IM_cancel_bg"></div>
    	<div class="IM_cancel_box">
        	<p class="c322c27 f18 lineht45 t-center mb10">即日起，PC端IM功能暂停使用</p>
            <p class="c777776 t-center lineheight20 mt10 mb5">扫描下方二维码，下载APP查看消息。<br>随时随地沟通，不再错过。</p>
            <ul class="IM_to_app mt10 clearfloat">
            	<li class="fl t-center">
                	<img src="http://staticnew.mayi.com/resourcesWeb/im/images/dz_pcim.png" alt="">
                    <p class="lineht45 c322c27">我是房客</p>
                </li>
                <li class="fr t-center">
                	<img src="http://staticnew.mayi.com/resourcesWeb/im/images/zs_pcim.png" alt="">
                    <p class="lineht45 c322c27">我是房东</p>
                </li>
            </ul>
            <i class="close_imapp"></i>
          
        </div>
    </div>
    <style>
    .c322c27{color:#322c27;}
	.lineheight20{line-height:20px;}
	.IM_cancel_bg{z-index:100000; background-color:#000; opacity:0.3; filter:alpha(opacity=30);position:fixed;width:100%;height:100%;top:0;left:0;}
	.IM_cancel_box{width:442px;position:fixed;background-color:#fff;top:50%;left:50%;margin-left:-221px;margin-top:-165px;z-index:100001;padding:30px 70px;box-sizing:border-box;}
	.IM_to_app img{width:121px;height:121px;display:inline-block;vertical-align:middle;}
	.close_imapp{background:url(http://staticnew.mayi.com/resourcesWeb/im/images/close_icon.png) no-repeat center center;background-size:18px 18px;position: absolute;display:inline-block;width: 28px;height: 28px;cursor:pointer;top:5px;right:5px;}
	.close_imapp:hover{background-color:#f2f2f2;border-radius:50%;}
    </style> 
</body> 
<script>
	var uid=$('#MAYIUID').val();
	if(uid!='')
	{
		$('.IM_btn').css('display','block');
		var ctx = $('#ctx').val();
		var url = ctx+"/im/getNotice"; 
		$.ajax({
			url :url,
			type : 'POST',
			async:true, 
			dataType:'json',
			timeout: 5000,
			error: function(data){
				//getToken();
				//alert("im登录失败，请刷新后重试");
			},
			success : function(data)
			{
				if(data.error||data.data==0)
				{
					imTimer.init(); 
				}
			}
		});  
	}
</script>

</html><!-- Header END -->
<!-- Content -->
<div class="main">
<link href="http://staticnew.mayi.com/resourcesWeb/css/flow_chart.css" rel="stylesheet"  type="text/css">
	<div class='one_workflow yes_person'>
		<div class='workflow relave'>
			<div class='progress '></div>
			<b class='workflow1'>房源信息</b>
			<b class='workflow2'>房源描述</b>
			<b class='workflow3'>房源图片</b>
			<b class='workflow4'>价格要求</b>
			<b class='workflow5'>个人信息</b>
			<b class='workflow6'>发布成功</b>
			<span class='workflow1_1'><a href="javascript:;" class='a_after'>1</a></span>
			<span class='workflow1_2'><a href="javascript:;" >2</a></span>
			<span class='workflow1_3'><a href="javascript:;" >3</a></span>
			<span class='workflow1_4'><a href="javascript:;" >4</a></span>
			<span class='workflow1_5'><a href="javascript:;" >5</a></span>
			<span class='workflow1_6'><a href="javascript:;" class='duigo'></a></span>
		</div>
	</div>
	<!--增加房东上传头像功能开始-->
	<input type="hidden" id="isHavePic" value="isHavePic">
	<!--增加房东上传头像功能结束-->	
		
	<div class="homes-con" style="margin-top:0px;">
		<div class="homesTitle">
			<div class="homesTitlebg">
			房源信息
			</div>
		</div>
		<form autocomplete="off" name="roomform" action="/room/publish/basicinfoSubmit"  method = "post">
		<input type="hidden" name="roomId" id="roomId" value=""/>
		<input type="hidden" name="flag" id="flag" value=""/>
		<input type="hidden" name="ctx" id="ctx" value="" />
		<input type="hidden" name="cookprice" id="cookprice" value="0" />
		<div class="homes">
			<dl class="homesInfo clearfix">
            	<label class="rentType">
					<dt><span class="fr">出租类型：</span><em class="notNull"></em></dt>
					<p>整套出租（目前久久租只接受整套出租的房屋，单间床位等其他类型请勿上传）</p>
				</label>
            </dl>
			<!-- <dl class="homesInfo clearfix">
				<dt><span class="fr">地理位置：</span><em class="notNull"></em></dt>
				<dl id="myLocation" style="margin-left:100px;">
			  	</dd>
			  	<dd>
					<a class="addAdress-btn" id="addNewPosition">+添加地址</a>
			  	</dd>
			</dl> -->
			<dl class="homesInfo clearfix">
				<dt><span class="fr">房屋类型：</span><em class="notNull"></em></dt>
				<dd>
					<select class="largeSelect" name="type" >
                        		<option value="1" >民居</option>
                        		<option value="2" >公寓</option>
                        		<option value="3" >独栋别墅</option>
                        		<option value="5" >客栈</option>
                        		<option value="6" >阁楼</option>
                        		<option value="7" >四合院</option>
                        		<option value="8" >海边小屋</option>
                        		<option value="10" >林间小屋</option>
                        		<option value="11" >豪宅</option>
                        		<option value="12" >城堡</option>
                        		<option value="13" >树屋</option>
                        		<option value="14" >船舱</option>
                        		<option value="15" >房车</option>
                        		<option value="16" >冰屋</option>
					</select>
				</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">是否地下室：</span><em class="notNull"></em></dt>
				<dd>
					<select class="largeSelect" name="cellar" >
                        <option value="0" >否</option>
                        <option value="1" >地下室</option>
                        <option value="2" >半地下室</option>
					</select>
				</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">房屋面积：</span><em class="notNull" ></em></dt>
				<dd>
					<label><input maxlength="6" class="largeInput fl" type="text" name="area" id="area" value="" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/></label>
					<span class="fl">平米</span>
				</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">户型：</span><em class="notNull"></em></dt>
				<dd>
					<label class="toilet">
						<select class="smallSelect" name="roomnum" id="roomnum">
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
							<option value="10" >9+</option>
						</select>
                        <span class="mgl_4">室</span>
					</label> 
					<label class="toilet">
						
						<select class="smallSelect" name="parlor" id="parlor">
								<option value="0" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
							<option value="10" >9+</option>
						</select>
                        <span class="mgl_4">厅</span>
					</label> 
                   	<label class="toilet">
						<select class="smallSelect" name="cookhouse" id="cookhouse">
								<option value="0" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
							<option value="10" >9+</option>
						</select>
                        <span class="mgl_4">厨</span>
					</label> 
					<label class="toilet">
						<select class="smallSelect" name="balcony" id="balcony">
								<option value="0" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
							<option value="10" >9+</option>
						</select>
                        <span class="mgl_4">阳台</span>
					</label> 
					<label class="toilet">
						（开间客厅数选0，开放式厨房的厨房数选1）
					</label>
				</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">卫生间数：</span><em class="notNull"></em></dt>
				<dd>
					<label class="toilet">
						<span>独立</span>
						<select class="smallSelect" name="privatetoiletnum" id="privatetoiletnum">
								<option value="0" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
							<option value="10" >9+</option>
						</select>
					</label> 
					<label class="toilet">
						<span>公共</span>
						<select class="smallSelect" name="publictoiletnum" id="publictoiletnum">
								<option value="0" >0</option>
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>
								<option value="5" >5</option>
								<option value="6" >6</option>
								<option value="7" >7</option>
								<option value="8" >8</option>
								<option value="9" >9</option>
							<option value="10" >9+</option>
						</select>
					</label>
					<label class="toilet">
						（在一套房内请勾选独立卫生间，多套房源共用一个卫生间请勾选公共卫生间）
					</label> 
				</dd>
			</dl> 
			<dl class="homesInfo clearfix">
				<dt><span class="fr">可住人数：</span><em class="notNull"></em></dt>
				<dd>
					<select class="middleSelect" name="guestnum" id="guestnum" onchange="optionChange('guestnum')">
						<option value="-1">请选择</option>
							<option value="1" >1</option>
							<option value="2" >2</option>
							<option value="3" >3</option>
							<option value="4" >4</option>
							<option value="5" >5</option>
							<option value="6" >6</option>
							<option value="7" >7</option>
							<option value="8" >8</option>
							<option value="9" >9</option>
						<option value="10" >9+</option>
					</select> 
			 	</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<input  type="hidden" name="bedtype" id="bedtype" value="" />
				<dt><span class="fr">床数：</span><em class="notNull"></em></dt>
					<dd>
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">双人床</span>
							<select class="smallSelect" style="width:50px;" id="双人床（大，宽2m左右）" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4">（大，宽2m左右）</span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">双人床</span>
							<select class="smallSelect" style="width:50px;" id="双人床（中，宽1.8m左右）" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4">（中，宽1.8m左右）</span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">双人床</span>
							<select class="smallSelect" style="width:50px;" id="双人床（小，宽1.5m左右）" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4">（小，宽1.5m左右）</span>
						</label> 
					</dd>
					<dd>
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">单人床</span>
							<select class="smallSelect" style="width:50px;" id="单人床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">双层床</span>
							<select class="smallSelect" style="width:50px;" id="双层床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">单人沙发床</span>
							<select class="smallSelect" style="width:50px;" id="单人沙发床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
					</dd>
					<dd>
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">双人沙发床</span>
							<select class="smallSelect" style="width:50px;" id="双人沙发床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">儿童床</span>
							<select class="smallSelect" style="width:50px;" id="儿童床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">婴儿床</span>
							<select class="smallSelect" style="width:50px;" id="婴儿床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
					</dd>
					<dd>
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">榻榻米</span>
							<select class="smallSelect" style="width:50px;" id="榻榻米" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">圆床</span>
							<select class="smallSelect" style="width:50px;" id="圆床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">气垫床</span>
							<select class="smallSelect" style="width:50px;" id="气垫床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
					</dd>
					<dd>
						<label class="bed" style="width:235px;margin-right:0px;">
							<span style="width:60px;text-align:right;">炕床</span>
							<select class="smallSelect" style="width:50px;" id="炕床" value="">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
								<option value="10">9+</option>
							</select>
							<span class="mgl_4"></span>
						</label> 
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">被单更换：</span></dt>
				<dd>
					<select class="middleSelect" name="sheetreplace" >
                        <option value="1" >每客一换</option>
                        <option value="2" >每日一换</option>
					</select>
			 	</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">配套设施：</span></dt>
				<dd>
					<label class="facility" style="width:50px;margin-right:0px;"><span>免费项</span></label>
				</dd>
				<input  type="hidden" name="facilities" id="facilities" value="" />
				<dd>
						<label class="facility"><input name="supporting" id="name_冰箱" value="冰箱" type="checkbox"/> 冰箱</label>
						<label class="facility"><input name="supporting" id="name_洗衣机" value="洗衣机" type="checkbox"/> 洗衣机</label>
						<label class="facility"><input name="supporting" id="name_饮水机" value="饮水机" type="checkbox"/> 饮水机</label>
						<label class="facility"><input name="supporting" id="name_对讲系统" value="对讲系统" type="checkbox"/> 对讲系统</label>
						<label class="facility"><input name="supporting" id="name_电脑" value="电脑" type="checkbox"/> 电脑</label>
						<label class="facility"><input name="supporting" id="name_淋浴" value="淋浴" type="checkbox"/> 淋浴</label>
						<label class="facility"><input name="supporting" id="name_浴缸" value="浴缸" type="checkbox"/> 浴缸</label>
						<label class="facility"><input name="supporting" id="name_24小时热水" value="24小时热水" type="checkbox"/> 24小时热水</label>
						<label class="facility"><input name="supporting" id="name_沐浴露洗发水" value="沐浴露洗发水" type="checkbox"/> 沐浴露洗发水</label>
						<label class="facility"><input name="supporting" id="name_牙具香皂" value="牙具香皂" type="checkbox"/> 牙具香皂</label>
						<label class="facility"><input name="supporting" id="name_毛巾浴巾" value="毛巾浴巾" type="checkbox"/> 毛巾浴巾</label>
						<label class="facility"><input name="supporting" id="name_拖鞋" value="拖鞋" type="checkbox"/> 拖鞋</label>
						<label class="facility"><input name="supporting" id="name_可以吸烟" value="可以吸烟" type="checkbox"/> 可以吸烟</label>
						<label class="facility"><input name="supporting" id="name_电梯" value="电梯" type="checkbox"/> 电梯</label>
						<label class="facility"><input name="supporting" id="name_保安" value="保安" type="checkbox"/> 保安</label>
						<label class="facility"><input name="supporting" id="name_欢迎小孩" value="欢迎小孩" type="checkbox"/> 欢迎小孩</label>
						<label class="facility"><input name="supporting" id="name_欢迎老人" value="欢迎老人" type="checkbox"/> 欢迎老人</label>
						<label class="facility"><input name="supporting" id="name_无障碍设施" value="无障碍设施" type="checkbox"/> 无障碍设施</label>
				</dd>
    			<dd>
					<label class="facilityM"><span>可收费项</span><span class="mgl_20">（勾选此房源支持的配套设施。若收费，请填写价格，不填写则为免费）</span></label>
				</dd>
						<dd>
							<label class="wid25">
								<input name="chargeSupporting" id="name_电视" value="电视" type="checkbox">电视</input>
								<label id="more_电视" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_电视" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/天</font>
								</div>
							</label>
							<label class="wid25">
								<input name="chargeSupporting" id="name_空调" value="空调" type="checkbox">空调</input>
								<label id="more_空调" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_空调" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/天</font>
								</div>
							</label>
							<label class="wid25">
								<input name="chargeSupporting" id="name_无线WIFI" value="无线WIFI" type="checkbox">无线WIFI</input>
								<label id="more_无线WIFI" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_无线WIFI" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/天</font>
								</div>
							</label>
							<label class="wid25">
								<input name="chargeSupporting" id="name_有线网络" value="有线网络" type="checkbox">有线网络</input>
								<label id="more_有线网络" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_有线网络" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/天</font>
								</div>
							</label>
						</dd>
						<dd>
							<label class="wid25">
								<input name="chargeSupporting" id="name_暖气" value="暖气" type="checkbox">暖气</input>
								<label id="more_暖气" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_暖气" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/天</font>
								</div>
							</label>
							<label class="wid25">
								<input name="chargeSupporting" id="name_可养宠物" value="可养宠物" type="checkbox">可养宠物</input>
								<label id="more_可养宠物" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_可养宠物" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/天</font>
								</div>
							</label>
							<label class="wid25">
								<input name="chargeSupporting" id="name_停车位" value="停车位" type="checkbox">停车位</input>
								<label id="more_停车位" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_停车位" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/天</font>
								</div>
							</label>
							<label class="wid25">
								<input name="chargeSupporting" id="name_允许聚会" value="允许聚会" type="checkbox">允许聚会</input>
								<label id="more_允许聚会" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_允许聚会" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/人/天</font>
								</div>
							</label>
						</dd>
						<dd>
							<label class="wid25">
								<input name="chargeSupporting" id="name_早餐" value="早餐" type="checkbox">早餐</input>
								<label id="more_早餐" style="color:#ff8a00;font-size:10px;margin-left:5px;"></label>
								<div style="width: 160px; display: inline-block;">
									<input class="midMiddleSelect wid90" id="price_早餐" maxlength="4"  onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')" type="text">
										<font style="float: left; display: block;margin-left:2px;margin-top:2px;font-size:12px;">元/人/天</font>
								</div>
							</label>
			</dl>
    		<dl class="homesInfo clearfix">
				<dt><span class="fr">提供服务：</span></dt>
				<input  type="hidden" name="service" id="service" value="" />
				<dd>
					<label class="facilityM"><span>常见</span><span class="mgl_20">（勾选您能提供的服务。若收费，请填写说明，不填写则为免费）</span></label>
				</dd>
				<dd>
					<label class="wid25"><input name="commonService" id="机场/火车站接送" value="机场/火车站接送" type="checkbox"/>机场/火车站接送<input class="midMiddleSelect" type="text"  value="说明..." maxlength="15"></label>
					<label class="wid25"><input name="commonService" id="行李寄存" value="行李寄存" type="checkbox"/>行李寄存<input class="midMiddleSelect" type="text"  value="说明..." maxlength="15"></label>
					<label class="wid25"><input name="commonService" id="导游" value="导游" type="checkbox"/>导游<input class="midMiddleSelect" type="text"  value="说明..." maxlength="15"></label>
    			<dd>
					<p>更多</p><input name="moreservice" id="moreservice" value="您可以提供的其他服务（30字以内）" class="larLargeInput" type="text" maxlength="30"/>
    			</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">房源别名：</span></dt>
				<dd>
					<label><input type="text" value="" name="alias" class="largeInput fl"></label>
					<span class="fl">&nbsp;辨别房间的参考信息，仅自己可见</span>
				</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">同类房源：</span><em class="notNull"></em></dt>
				<dd>
					<label><input maxlength="3" type="text" value="" name="stock" id="stock" class="largeInput fl" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></label>
					<span class="fl">&nbsp;套</span>
					<span class="fl ml30">户型、装修、陈设、价格相同的房间（含此房源在内）</span>
				</dd>
			</dl>
		</div>
		<input type="hidden" id="positionId4Edit" name="roomLocationId" value="" />
		<div class="submit-wrap">
			<a class="save" id="baseSave" href="javascript:void(0);" onclick="aaaa()">保存，下一步</a>
		</div>
	</form>
	</div>
	<!-- 空调弹层开始 -->
	<div class="tanceng" id="ktTanceng"  style="position:absolute;right:505px;bottom:470px;width:100px;height:120px;background:url(http://staticnew.mayi.com/resourcesWeb/images/tanceng.png) no-repeat;overflow:hidden;display:none;background-size: 100px 118px;">
		<label class="facility mgl_20"><input class="kongtiao" name="kongtiao" value="卧室全有" type="checkbox">卧室全有</label>
    	<label class="facility mgl_20 mgt_0"><input class="kongtiao" name="kongtiao" value="客厅有" type="checkbox">客厅有</label>
    	<label class="facility mgl_20 mgt_0"><input class="kongtiao" name="kongtiao" value="主卧有" type="checkbox">主卧有</label>
    	<label class="facility mgl_20 mgt_0"><input class="kongtiao" name="kongtiao" value="次卧有" type="checkbox">次卧有</label>
		<div class="makeSure" id="makeSure" onclick="hideImg()" style="width:46px;height:18px;border:1px solid #39a002;background-color:#53c866;border-radius:3px;margin-left:22px;margin-top:3px;text-align:center;color:#fff;line-height:18px;">确定</div>
	</div>
	<!-- 空调弹层结束 -->
</div>
	
<!-- 添加地址 -->
<div class="AddAddress" id="addAddress" style="display:none;">
	<h2><span id="moveTitle">添加地址</span></h2>
	<ul class="price-set clearfix">
			<li>
				<div class="dayPrice">
					<span class="price-title"><b>*</b>地址位置：</span>

					<select id="s_province" name="s_province"></select>    
					<select id="s_city" name="s_city" ></select>    
					<select id="s_county" name="s_county"></select> 
				</div>
			</li>
			<li>
				<div class="dayPrice">
				    <input type="hidden" id="havestreet" value="0" />
					<span><input class="larLargeInput fl ml100" type="text" id="inputAddress" name="inputAddress" value="请输入您房屋的详细地址"></span>
				</div>
			</li>
			<li>
				<div class="dayPrice">
					<span class="price-title"><b>*</b>标记地图：</span>
					<span style="color:#999;">（正确的标记房源所在位置，可以让房客更容易找到你的房源）</span>
				</div>
				<div class="AddAddressMap">
			        <div class="mapbox" id="container" style="width:580px;height:370px;">
                    </div>
				</div>
			</li>
		</ul>
	<div class="submit-wrap">
		<input id="latlng" type="hidden" value="" name="latlng" />
		<a class="affirm" href="javascript:void(0);" id="PositionSubmit">确定</a>
		<a class="cancel" href="javascript:void(0);" id="PositionCancel">取消</a>
	</div>
</div>
<!-- Content END -->
	
<!-- 个人信息修改 弹窗 START -->					
<!-- 修改头像 -->
<div id="headimagediv" class="smallalert-box" style="display: none;" >
	<div class="alert-title">
		修改头像
		<a id="headimagedivclose" class="alert-close" href="javascript:void(0)"></a>
	</div>
	<div class="alert-con">
		<div class="alteravatar">
		      <!-- 图像裁剪层 start  -->
		      <div id="Canvas" class="uploaddiv">
    				<div id="ImageDragContainer">                               
       						<img id="ImageDrag" class="imagePhoto"  style="border-width:0px;" />                                        
    				</div>
    				<div id="IconContainer">                               
       						<img id="ImageIcon" class="imagePhoto" style="border-width:0px;" />                                                        
    				</div>                          
				</div>
		       <!-- 图像裁剪层  end -->
		</div>
		<div class="uploaddiv">
   			<table>
        		<tr>
            		<td id="Min">
                    	<img alt="缩小" src="http://staticnew.mayi.com/resourcesWeb/images/account/_c.gif" onmouseover="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/_c.gif';" onmouseout="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/_h.gif';" id="moresmall" class="smallbig" />
            		</td>
            		<td>
                		<div id="bar">
                    		<div class="child"></div>
                		</div>
            		</td>
            		<td id="Max">
                    	<img alt="放大" src="http://staticnew.mayi.com/resourcesWeb/images/account/c.gif" onmouseover="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/c.gif';" onmouseout="this.src='http://staticnew.mayi.com/resourcesWeb/images/account/h.gif';" id="morebig" class="smallbig" />
            		</td>
        		</tr>
    		</table>
		</div>
		<div class="btn-box pdtop20">
		    <input class="small-btn fontsize12 mglt20 uploadinput" id="imageupload" type="file" value="选取照片" name="imageupload" accept="image/jpg,image/png,image/gif,image/bmp,image/jpeg" onchange="ajaxFileUpload(this);"  />
		    <input id="cancelUpdateHeadImage" class="blue mglt110 btn" type="button" value="取消" name=""/>
			<input class="checking-btn samll-bton nomargin displayinline" type="button" id="saveheadimage" value="保存" name=""/>
			
			  <div id="headimageparamImage"  style="display: none;">
			        <input name="picture"  type="hidden" value="" id="picture" /> <!--   图片url-->                    
               		<input name="txt_width"  type="hidden"  value="1" id="txt_width" /> <!-- 图片实际宽度-->
					<input name="txt_height"  type="hidden"  value="1" id="txt_height" /> <!-- 图片实际高度-->  
 					<input name="txt_top"  type="hidden" value="82" id="txt_top" /><!-- 距离顶部-->  
 					<input name="txt_left"  type="hidden"  value="73" id="txt_left" /><!--  距离左边--> 
					<input name="txt_DropWidth"  type="hidden"  value="120" id="txt_DropWidth" /><!--  截取框的宽--> 
					<input name="txt_DropHeight"  type="hidden"  value="120" id="txt_DropHeight" /><!--  截取框的高--> 
  					<input name="txt_Zoom"  type="hidden"  id="txt_Zoom" /><!--  放大倍数-->
              </div>
		</div>
	</div>
</div>
<!-- 修改头像 END -->

<!-- 重新发布 -->
<!-- 重新发布 END -->
<!-- Footer -->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jQuery.md5.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/login.js?v=20151027"></script>

<script src="http://sta.ganji.com/cgi/ganji_sta.php?file=ganji&documentDomain=mayi.com&cookieDomain=mayi.com"></script>
<script type="text/javascript">
$(document).ready(function(){
    function getCookie(objName) {
        var arrStr = document.cookie.split("; ");
        for(var i = 0;i < arrStr.length;i ++){
            var temp = arrStr[i].split("=");
            if(temp[0] == objName) return unescape(temp[1]);
        }
    }
    
    function deleteCookie(name, path) {
        var name = escape(name);
        var expires = new Date(0);
        path = path == "" ? "" : ";path=" + path;
        document.cookie = name + "=" + ";expires=" + expires.toUTCString() + path;
    }

    //修正cookie中的MayiUserInfo
    var user = getCookie('MayiUserInfo');
    if (user != null) {
        var pattern = new RegExp(/^\".+\"$/);
        if (pattern.exec(user)) {
            user = user.substring(1,user.length-1);
            deleteCookie('MayiUserInfo', '/');
            document.cookie = "MayiUserInfo=" + escape(user) + ";path=/;domain=.mayi.com";
        }
    }
    //未登录的登录后才能显示站内信
    	//加载IM
    	//GJ.use('tool/webim_v1/js/webim.js');
});

function sinaWeibo(){
	window.open("http://widget.weibo.com/dialog/follow.php?fuid=2357071361");
}
</script>
<div class="foot index-foot clearfloat">
	<div class="w1190 pb20 clearfloat">
        	<div class="link_end">
    <p class="t-center f12 c777776">客户服务：400-069-6060&nbsp;&nbsp;010-60642468&nbsp;&nbsp;010-89177759 |<a href="http://www.mayi.com/tenantlogin/" target="_blank" class="c777776">&nbsp;帮助中心&nbsp;|</a><a href="http://www.mayi.com/aboutcompany/" target="_blank" class="c777776">&nbsp;公司信息&nbsp;|</a><a href="http://www.mayi.com/activity/app50" target="_blank" class="c777776">&nbsp;app下载&nbsp;|</a>关注我们
        <span class="mr10 cursorpt showinfo relave" style="display:inline-block;vertical-align:middle;">
            <img src="http://staticnew.mayi.com/resourcesWeb/images/weixin_logo_s.png">
            <img src="http://staticnew.mayi.com/resourcesWeb/v201510/images/index_own/weixin.jpg" class="head_pop absot" style="bottom:24px;left:-32px;">
        </span>
        <span class="cursorpt" style="display:inline-block;vertical-align:middle;">
            <img src="http://staticnew.mayi.com/resourcesWeb/images/xinlang_logo_s.png" onclick="sinaWeibo();">
        </span>
    </p>
    <p class="t-center f12 c777776">网站备案/许可证号：京ICP证130021号 易云游网络技术（北京）有限公司</p>
    <p class="t-center f12 c777776">京公网安备11010802018218号</p>
</div>
     </div>
</div>
<!--[statistics start]-->
<script src="http://staticnew.mayi.com/resources/js/mayi/mayi.js" type="text/javascript" charset="utf-8"></script>	<!-- Footer END -->
 <!-- 登录弹窗 -->
	<div class="loginbox" id="loginboxdiv" nexturl="none" name="loginboxdiv" style="display:none;">
	<div class="login-type">
		<span id="logindivtitle">手机验证码登录</span>
		
	</div><!-- 蚂蚁账号登陆-->
	<a class="login-colse"  id="loginclose" name="loginclose" onclick="" href="javascript:void(0)"></a>
	<!-- 手机登陆 -->		
	<div class="login-input" id="loginbymadiv" name="loginbymadiv" >
		<div class="input">
			<span class="phone-icon"></span>
			<input class="dlargeinput" type="text" id="loginmobile" name="loginmobile" placeholder="手机号" value=""/>
		</div>
		<div class="largeinputbox small-top clearfix">
			<div class="dinput fl" >
				<span class="verification-icon"></span>
				<input class="dsmallinput" type="text" id="imagecode" placeholder="图形验证码" value=""/>
			</div>
			<div class="yz-code fr">
				  <img src=""  id="loginauthimage" title="点击刷新" />
			</div>
		</div>
		<div class="largeinputbox small-top clearfix" id="maerrordiv">
			<div class="dinput fl" id="maerrordiv">
				<span class="password-icon"></span>
				<input class="dsmallinput" type="text" id="loginphonecode" name="loginphonecode" placeholder="短信验证码" value=""/>
			</div>
			<div class="yz-code fr">
				<input class="sendnumber defaultsend" type="button" id="getloginphonecode" name="getloginphonecode" value="获取验证码"/>
			</div>
		</div>
		<div class="logincheckbox large-top clearfix">
			<label class="fl">
				<input class="selectcheckbox" type="checkbox" name="rememberloginstate" checked="checked" value=""/>自动登录
			</label>				
		</div>	
		<div class="logincheckbox large-top clearfix"><font>无需注册，您可用手机号和验证码直接登录!</font></div>
		<div class="btn-wrap btnpdt20">
			<a href="javascript:void(0)" id="loginbymado">登录</a>
		</div>
	</div>
	<!-- 手机登陆 end  -->	
	<!-- 密码登陆 start -->
	<div class="login-input" id="loginbyupdiv" name="loginbyupdiv" style="display:none;">
		<div class="input">
			<span class="user-icon"></span>
			<input class="dlargeinput" type="text"  id="loginnamein" name="loginnamein"  placeholder="手机号/邮箱/账号" value=""/>
		</div>
		<div class="input large-top" >
			<span class="password-icon"></span>
			<input class="dlargeinput" type="password" id="loginpassin" name="loginpassin" placeholder="密码" value=""/>
			<!--<span class="errorprompt">密码输入错误</span>-->
		</div>
		<div class="largeinputbox small-top clearfix" id="uperrordiv">
			<div class="dinput fl" id="yui_3_5_1_1_1434542056373_108">
				<span class="verification-icon"></span>
				<input type="text" class="dsmallinput" id="imagecode1" placeholder="图形验证码" value="">
			</div>
			<div class="yz-code fr">
				  <img src="" id="loginauthimage1" title="点击刷新">
			</div>
		</div>
		<div class="logincheckbox large-top clearfix">
			<label class="fl">
				<input class="selectcheckbox" type="checkbox" name="rememberpass" checked="checked" value=""/>自动登录
			</label>				
		</div>	
		<div class="btn-wrap btnpdt20">
			<a href="javascript:void(0)" id="loginbyupdo">登录</a>
		</div>
		<p class="otherwaytitle mt20">没有账号密码请 <a href="javascript:void(0)" id="changeloginbymwa">使用手机验证码登录</a></p>
	</div>
	<!-- 密码登陆 end -->
	<ul class="otherway">
		<li>	
			<a class="phoneway_current" id="changeloginbyma" href="javascript:void(0)">手机验证码</a>
		</li>
		<li>	
			<a class="mayiway" id="changeloginbyup" href="javascript:void(0)">账号密码</a>
		</li>
		<li>	
			<a class="qqway" id="loginbyqq" href="javascript:void(0)" >QQ号码</a> 
		</li>
		<li>	
			<a class="sinaway" id="loginbysina" href="javascript:void(0)" >新浪微博</a>
		</li>
	</ul>
</div>
<!-- 登录弹窗 END --> 
<!--公共尾部结束-->
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/layer/layer.min.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/jQuery.md5.js"></script>
<script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/login.js?v=20151027"></script>

<script src="http://sta.ganji.com/cgi/ganji_sta.php?file=ganji&documentDomain=mayi.com&cookieDomain=mayi.com"></script>
<script type="text/javascript">
$(document).ready(function(){
    function getCookie(objName) {
        var arrStr = document.cookie.split("; ");
        for(var i = 0;i < arrStr.length;i ++){
            var temp = arrStr[i].split("=");
            if(temp[0] == objName) return unescape(temp[1]);
        }
    }
    
    function deleteCookie(name, path) {
        var name = escape(name);
        var expires = new Date(0);
        path = path == "" ? "" : ";path=" + path;
        document.cookie = name + "=" + ";expires=" + expires.toUTCString() + path;
    }

    //修正cookie中的MayiUserInfo
    var user = getCookie('MayiUserInfo');
    if (user != null) {
        var pattern = new RegExp(/^\".+\"$/);
        if (pattern.exec(user)) {
            user = user.substring(1,user.length-1);
            deleteCookie('MayiUserInfo', '/');
            document.cookie = "MayiUserInfo=" + escape(user) + ";path=/;domain=.mayi.com";
        }
    }
    //未登录的登录后才能显示站内信
    	//加载IM
    	//GJ.use('tool/webim_v1/js/webim.js');
});

function sinaWeibo(){
	window.open("http://widget.weibo.com/dialog/follow.php?fuid=2357071361");
}
</script>
<style type="text/css">
.email{ position:fixed; bottom:0px; right:0px; width:190px; height:35px; line-height:35px; background:#e8e8e8; border:1px #CCCCCC solid; border-right:none; z-index:400000000;}
.email a{ padding-left:10px; float:left; font-weight:normal; font-family:"宋体"; font-size:12px; width:120px; box-shadow:1px 0px 0px 0px #ccc; border-right:1px #fff solid;}
.email a img{ margin:12px 3px 0px 0px; float:left; width:16px; height:12px;}
.imjs-status{color:#55aa39 !important}
#webIM ul.tab-im .offline-icon,#webIM ul.tab-im .online-icon{background-position:0 !important}
#webIM .all-list a.on, #webIM .all-list a.off{background-position:-239px -297px !important;color:#2883C3 !important}
#webIM ul.tab-im a{color:#2883C3 !important}
</style> 
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
<!-- load statistics js -->
<!--[statistics start]-->
<script src="http://staticnew.mayi.com/resources/js/mayi/mayi.js" type="text/javascript" charset="utf-8"></script>

<!-- 蚂蚁统计所需js -->
<script type="text/javascript">
 	   var _maq = _maq || [];
        _maq.push(['_setAccount', 'mayi']);
        (function ()
        { 
                var ma = document.createElement('script');
                ma.type = 'text/javascript';
                ma.async = true;
                ma.src ='http://staticnew.mayi.com/resourcesWeb/js/statistics/stmy.js?v=1311111130';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ma, s);
        })();
</script> 

<!--GA 统计所需js 新  2015-06-03-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63543541-1', 'auto');
  ga('send', 'pageview');

</script>

<!--GA 统计所需js       
<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26666284-1']);
		_gaq.push(['_setDomainName', '.mayi.com']);
		_gaq.push(['_addIgnoredRef', 'mayi.com']);
		_gaq.push(['_addOrganic', 'sogou', 'query']);
		_gaq.push(['_addOrganic', 'youdao', 'q']);
		_gaq.push(['_addOrganic', 'soso', 'w']);
		_gaq.push(['_addOrganic', 'baidu', 'word']);
		_gaq.push(['_addOrganic', 'baidu', 'q1']);
		_gaq.push(['_addOrganic', 'ucweb', 'keyword']);
		_gaq.push(['_addOrganic', 'ucweb', 'word']);
		_gaq.push(['_addOrganic', '114so', 'kw']);
		_gaq.push(['_trackPageview']);
		(function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
</script> --> 

<!--GANJI 统计所需js-->
<script type="text/javascript"> 
		var SPEED_RENDER_END = new Date().getTime();
		var gjchparamele = document.getElementById('gjchparam');
		var __gjchparam__ = (gjchparamele?gjchparamele.value:'')||"";
		
		var gcparamele = document.getElementById('gcparam');
		var __gcparam__ = (gcparamele?gcparamele.value:'')||"";
		
		var __gjchver__ = "";
		var __gjjs__ = '';
			 __gjjs__ = 'http://sta.ganji.com/cgi/ganji_sta.php?file=ganji&documentDomain=mayi.com&cookieDomain=mayi.com';
		(function(){
		    if(__gjchparam__){
		        if(undefined == window.GJ){
		            document.write(unescape("%3Cscript src='"+__gjjs__+"' type='text/javascript' %3E%3C/script%3E"));
		        }
		        var timer = null;
		        var counter = 1000;
		        var gjlog = function(from){
		            if(undefined == window.__GJ_LOADED__){
		                timer && clearTimeout(timer);
		                if(counter--){
		                    timer = setTimeout(gjlog, 20);
		                }
		            }else{
		                GJ.use('log_tracker', function(){
		                    GJ.LogTracker.gjch = __gjchparam__;
		                    GJ.LogTracker.gjchNew = __gcparam__;
		                    if(typeof(__gjchver__) !== 'undefined' && __gjchver__ != ''){
		                        GJ.LogTracker.gjchver = encodeURI(__gjchver__);
		                    }
		                    GJ.LogTracker.trackPageView(); 
		                    GJ.LogTracker.bindSpeedEvent();
		                    GJ.LogTracker.trackSpeedEvent();
		                });
		            }
		        };
		        gjlog();
		    }
		})();
</script> 

<!-- 百度统计所需js
<div style="display:none;">
<!--
	<script type="text/javascript"> 
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0294bbb72b1c6a6b342da076397c9af2' type='text/javascript'%3E%3C/script%3E"));
	</script>
 -->	 
 
 <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?0294bbb72b1c6a6b342da076397c9af2";
  var s = document.getElementsByTagName("script")[0];
  s.parentNode.insertBefore(hm, s);
})();
</script>

	 <!-- SOUGOU 统计所需js -->
	<script  type="text/javascript">
		var _sogou_sa_q = _sogou_sa_q || [];
		_sogou_sa_q.push(['_sid', '90723-93231']);
		(function() {
		    var _sogou_sa_protocol = (("https:" == document.location.protocol) ? "https://" : "http://");
		    var _sogou_sa_src=_sogou_sa_protocol+"hermes.sogou.com/sa.js%3Fsid%3D90723-93231";
		    document.write(unescape("%3Cscript src='" + _sogou_sa_src + "' type='text/javascript'%3E%3C/script%3E"));
		})();
	</script>
</div>

<!--[statistics end]--><!-- load End--><script type="text/javascript" src="http://staticnew.mayi.com/resourcesWeb/js/room_location.js"></script>
</body>
</html>

<script language="javascript">  
$(function(){  
    $(document).area("s_province","s_city","s_county");//调用插件  
});  
</script> 






<script type="text/javascript">

	    (function($){  
        function Dsy(){  
            this.Items = {};  
        }  
        Dsy.prototype.add = function(id,iArray){  
            this.Items[id] = iArray;  
        }  
        Dsy.prototype.Exists = function(id){  
            if(typeof(this.Items[id]) == "undefined") return false;  
            return true;  
        }  
        var dsy=new Dsy();  
        var opt0 = ["省份","地级市","市、县级市"];  
        var s=["s_province","s_city","s_county"];  
        dsy.add("0",["北京市","天津市","上海市","重庆市","河北省","山西省","内蒙古","辽宁省","吉林省","黑龙江省","江苏省","浙江省","安徽省","福建省","江西省","山东省","河南省","湖北省","湖南省","广东省","广西","海南省","四川省","贵州省","云南省","西藏","陕西省","甘肃省","青海省","宁夏","新疆","香港","澳门","台湾省"]);  
    dsy.add("0_0_0",["东城区","西城区","崇文区","宣武区","朝阳区","丰台区","石景山区","海淀区","门头沟区","房山区","通州区","顺义区","昌平区","大兴区","怀柔区","平谷区","密云县","延庆县","延庆镇"]);  
    dsy.add("0_0",["北京市"]);  
    dsy.add("0_1_0",["和平区","河东区","河西区","南开区","河北区","红桥区","塘沽区","汉沽区","大港区","东丽区","西青区","津南区","北辰区","武清区","宝坻区","蓟县","宁河县","芦台镇","静海县","静海镇"]);  
    dsy.add("0_1",["天津市"]);  
    dsy.add("0_2_0",["黄浦区","卢湾区","徐汇区","长宁区","静安区","普陀区","闸北区","虹口区","杨浦区","闵行区","宝山区","嘉定区","浦东新区","金山区","松江区","青浦区","南汇区","奉贤区","崇明县","城桥镇"]);  
    dsy.add("0_2",["上海市"]);  
    dsy.add("0_3_0",["渝中区","大渡口区","江北区","沙坪坝区","九龙坡区","南岸区","北碚区","万盛区","双桥区","渝北区","巴南区","万州区","涪陵区","黔江区","长寿区","合川市","永川区市","江津市","南川市","綦江县","潼南县","铜梁县","大足县","荣昌县","璧山县","垫江县","武隆县","丰都县","城口县","梁平县","开县","巫溪县","巫山县","奉节县","云阳县","忠县","石柱土家族自治县","彭水苗族土家族自治县","酉阳土家族苗族自治县","秀山土家族苗族自治县"]);  
    dsy.add("0_3",["重庆市"]);  
    dsy.add("0_4_0",["长安区","桥东区","桥西区","新华区","裕华区","井陉矿区","辛集市","藁城市","晋州市","新乐市","鹿泉市","井陉县","微水镇","正定县","正定镇","栾城县","栾城镇","行唐县","龙州镇","灵寿县","灵寿镇","高邑县","高邑镇","深泽县","深泽镇","赞皇县","赞皇镇","无极县","无极镇","平山县","平山镇","元氏县","槐阳镇","赵县","赵州镇"]);  
    dsy.add("0_4_1",["桥西区","桥东区","宣化区","下花园区","宣化县","张家口市宣化区","张北县","张北镇","康保县","康保镇","沽源县","平定堡镇","尚义县","南壕堑镇","蔚县","蔚州镇","阳原县","西城镇","怀安县","柴沟堡镇","万全县","孔家庄镇","怀来县","沙城镇","涿鹿县","涿鹿镇","赤城县","赤城镇","崇礼县","西湾子镇"]);  
    dsy.add("0_4_2",["双桥区","双滦区","鹰手营子矿区","承德县","下板城镇","兴隆县","兴隆镇","平泉县","平泉镇","滦平县","滦平镇","隆化县","隆化镇","丰宁满族自治县","大阁镇","宽城满族自治县","宽城镇","围场满族蒙古族自治县","围场镇"]);  
    dsy.add("0_4_3",["海港区","山海关区","北戴河区","昌黎县","昌黎镇","抚宁县","抚宁镇","卢龙县","卢龙镇","青龙满族自治县","青龙镇"]);  
    dsy.add("0_4_4",["路北区","路南区","古冶区","开平区","丰润区","丰南区","遵化市","迁安市","滦县","滦州镇","滦南县","倴城镇","乐亭县","乐亭镇","迁西县","兴城镇","玉田县","玉田镇","唐海县","唐海镇"]);  
    dsy.add("0_4_5",["安次区","广阳区","霸州市","三河市","固安县","固安镇","永清县","永清镇","香河县","淑阳镇","大城县","平舒镇","文安县","文安镇","大厂回族自治县","大厂镇"]);  
    dsy.add("0_4_6",["新市区","北市区","南市区","定州市","涿州市","安国市","高碑店市","满城县","满城镇","清苑县","清苑镇","易县","易州镇","徐水县","安肃镇","涞源县","涞源镇","定兴县","定兴镇","顺平县","蒲阳镇","唐县","仁厚镇","望都县","望都镇","涞水县","涞水镇","高阳县","高阳镇","安新县","安新镇","雄县","雄州镇","容城县","容城镇","曲阳县","恒州镇","阜平县","阜平镇","博野县","博陵镇","蠡县","蠡吾镇"]);  
    dsy.add("0_4_7",["桃城区","冀州市","深州市","枣强县","枣强镇","武邑县","武邑镇","武强县","武强镇","饶阳县","饶阳镇","安平县","安平镇","故城县","郑口镇","景县","景州镇","阜城县","阜城镇"]);  
    dsy.add("0_4_8",["运河区","新华区","泊头市","任丘市","黄骅市","河间市","沧县","沧州市新华区","青县","清州镇","东光县","东光镇","海兴县","苏基镇","盐山县","盐山镇","肃宁县","肃宁镇","南皮县","南皮镇","吴桥县","桑园镇","献县","乐寿镇","孟村回族自治县","孟村镇"]);  
    dsy.add("0_4_9",["桥东区","桥西区","南宫市","沙河市","邢台县","邢台市桥东区","临城县","临城镇","内丘县","内丘镇","柏乡县","柏乡镇","隆尧县","隆尧镇","任县","任城镇","南和县","和阳镇","宁晋县","凤凰镇","巨鹿县","巨鹿镇","新河县","新河镇","广宗县","广宗镇","平乡县","丰州镇","威县","洺州镇","清河县","葛仙庄镇","临西县","临西镇"]);  
    dsy.add("0_4_10",["丛台区","邯山区","复兴区","峰峰矿区","武安市","邯郸县","南堡乡东小屯村","临漳县","临漳镇","成安县","成安镇","大名县","大名镇","涉县","涉城镇","磁县","磁州镇","肥乡县","肥乡镇","永年县","临洺关镇","邱县","新马头镇","鸡泽县","鸡泽镇","广平县","广平镇","馆陶县","馆陶镇","魏县","魏城镇","曲周县","曲周镇"]);  
    dsy.add("0_4",["石家庄市","张家口市","承德市","秦皇岛市","唐山市","廊坊市","保定市","衡水市","沧州市","邢台市","邯郸市"]);  
    dsy.add("0_5_0",["杏花岭区","小店区","迎泽区","尖草坪区","万柏林区","晋源区","古交市","清徐县","清源镇","阳曲县","黄寨镇","娄烦县","娄烦镇"]);  
    dsy.add("0_5_1",["朔城区","平鲁区","山阴县","岱岳乡","应县","金城镇","右玉县","新城镇","怀仁县","云中镇"]);  
    dsy.add("0_5_2",["城区","矿区","南郊区","新荣区","阳高县","龙泉镇","天镇县","玉泉镇","广灵县","壶泉镇","灵丘县","武灵镇","浑源县","永安镇","左云县","云兴镇","大同县","西坪镇"]);  
    dsy.add("0_5_3",["城区","矿区","郊区","平定县","冠山镇","盂县","秀水镇"]);  
    dsy.add("0_5_4",["城区","郊区","潞城市","长治县","韩店镇","襄垣县","古韩镇","屯留县","麟绛镇","平顺县","青羊镇","黎城县","黎侯镇","壶关县","龙泉镇","长子县","丹朱镇","武乡县","丰州镇","沁县","定昌镇","沁源县","沁河镇"]);  
    dsy.add("0_5_5",["城区","高平市","泽州县","南村镇","沁水县","龙港镇","阳城县","凤城镇","陵川县","崇文镇"]);  
    dsy.add("0_5_6",["忻府区","原平市","定襄县","晋昌镇","五台县","台城镇","代县","上馆镇","繁峙县","繁城镇","宁武县","凤凰镇","静乐县","鹅城镇","神池县","龙泉镇","五寨县","砚城镇","岢岚县","岚漪镇","河曲县","文笔镇","保德县","东关镇","偏关县","新关镇"]);  
    dsy.add("0_5_7",["榆次区","介休市","榆社县","箕城镇","左权县","辽阳镇","和顺县","义兴镇","昔阳县","乐平镇","寿阳县","朝阳镇","太谷县","明星镇","祁县","昭余镇","平遥县","古陶镇","灵石县","翠峰镇"]);  
    dsy.add("0_5_8",["尧都区","侯马市","霍州市","曲沃县","乐昌镇","翼城县","唐兴镇","襄汾县","新城镇","洪洞县","大槐树镇","古县","岳阳镇","安泽县","府城镇","浮山县","天坛镇","吉县","吉昌镇","乡宁县","昌宁镇","蒲县","蒲城镇","大宁县","昕水镇","永和县","芝河镇","隰县","龙泉镇","汾西县","永安镇"]);  
    dsy.add("0_5_9",["离石区","孝义市","汾阳市","文水县","凤城镇","中阳县","宁乡镇","兴县","蔚汾镇","临县","临泉镇","方山县","圪洞镇","柳林县","柳林镇","岚县","东村镇","交口县","水头镇","交城县","天宁镇","石楼县","灵泉镇"]);  
    dsy.add("0_5_10",["盐湖区","永济市","河津市","芮城县","古魏镇","临猗县","猗氏镇","万荣县","解店镇","新绛县","龙兴镇","稷山县","稷峰镇","闻喜县","桐城镇","夏县","瑶峰镇","绛县","古绛镇","平陆县","圣人涧镇","垣曲县","新城镇"]);  
    dsy.add("0_5",["太原市","朔州市","大同市","阳泉市","长治市","晋城市","忻州市","晋中市","临汾市","吕梁市","运城市"]);  
    dsy.add("0_6_0",["回民区","新城区","玉泉区","赛罕区","托克托县","双河镇","武川县","可可以力更镇","和林格尔县","城关镇","清水河县","城关镇","土默特左旗","察素齐镇"]);  
    dsy.add("0_6_1",["昆都仑区","东河区","青山区","石拐区","白云矿区","九原区","固阳县","金山镇","土默特右旗","萨拉齐镇","达尔罕茂明安联合旗","百灵庙镇"]);  
    dsy.add("0_6_2",["海勃湾区","海南区","乌达区"]);  
    dsy.add("0_6_3",["红山区","元宝山区","松山区","宁城县","天义镇","林西县","林西镇","阿鲁科尔沁旗","天山镇","巴林左旗","林东镇","巴林右旗","大板镇","克什克腾旗","经棚镇","翁牛特旗","乌丹镇","喀喇沁旗","锦山镇","敖汉旗","新惠镇"]);  
    dsy.add("0_6_4",["科尔沁区","霍林郭勒市","开鲁县","开鲁镇","库伦旗","库伦镇","奈曼旗","大沁他拉镇","扎鲁特旗","鲁北镇","科尔沁左翼中旗","保康镇","科尔沁左翼后旗","甘旗卡镇"]);  
    dsy.add("0_6_5",["海拉尔区","满洲里市","扎兰屯市","牙克石市","根河市","额尔古纳市","阿荣旗","那吉镇","新巴尔虎右旗","阿拉坦额莫勒镇","新巴尔虎左旗","阿穆古郎镇","陈巴尔虎旗","巴彦库仁镇","鄂伦春自治旗","阿里河镇","鄂温克族自治旗","巴彦托海镇","莫力达瓦达斡尔族自治旗","尼尔基镇"]);  
    dsy.add("0_6_6",["东胜区","达拉特旗","树林召镇","准格尔旗","薛家湾镇","鄂托克前旗","敖勒召其镇","鄂托克旗","乌兰镇","杭锦旗","锡尼镇","乌审旗","嘎鲁图镇","伊金霍洛旗","阿勒腾席热镇"]);  
    dsy.add("0_6_7",["集宁区","丰镇市","卓资县","卓资山镇","化德县","长顺镇","商都县","商都镇","兴和县","城关镇","凉城县","岱海镇","察哈尔右翼前旗","土贵乌拉镇","察哈尔右翼中旗","科布尔镇","察哈尔右翼后旗","白音察干镇","四子王旗","乌兰花镇"]);  
    dsy.add("0_6_8",["临河区","五原县","隆兴昌镇","磴口县","巴彦高勒镇","乌拉特前旗","乌拉山镇","乌拉特中旗","海流图镇","乌拉特后旗","巴音宝力格镇","杭锦后旗","陕坝镇"]);  
    dsy.add("0_6_9",["乌兰浩特市","阿尔山市","突泉县","突泉镇","科尔沁右翼前旗","大坝沟镇","科尔沁右翼中旗","巴彦呼硕镇","扎赉特旗","音德尔镇"]);  
    dsy.add("0_6_10",["锡林浩特市","二连浩特市","多伦县","多伦淖尔镇","阿巴嘎旗","别力古台镇","苏尼特左旗","满都拉图镇","苏尼特右旗","赛汉塔拉镇","东乌珠穆沁旗","乌里雅斯太镇","西乌珠穆沁旗","巴拉嘎尔郭勒镇","太仆寺旗","宝昌镇","镶黄旗","新宝拉格镇","正镶白旗","明安图镇","正蓝旗","上都镇"]);  
    dsy.add("0_6_11",["巴彦浩特镇","阿拉善右旗","额肯呼都格镇","额济纳旗","达来呼布镇"]);  
    dsy.add("0_6",["呼和浩特市","包头市","乌海市","赤峰市","通辽市","呼伦贝尔市","鄂尔多斯市","乌兰察布市","巴彦淖尔市","兴安盟","锡林郭勒盟","阿拉善盟"]);  
    dsy.add("0_7_0",["沈河区","和平区","大东区","皇姑区","铁西区","苏家屯区","东陵区","新城子区","于洪区","新民市","辽中县","辽中镇","康平县","康平镇","法库县","法库镇"]);  
    dsy.add("0_7_1",["双塔区","龙城区","北票市","凌源市","朝阳县","朝阳市双塔区","建平县","喀喇沁左翼蒙古族自治县","大城子镇"]);  
    dsy.add("0_7_2",["海州区","新邱区","太平区","清河门区","细河区","彰武县","彰武镇","阜新蒙古族自治县","阜新镇"]);  
    dsy.add("0_7_3",["银州区","清河区","调兵山市","开原市","铁岭县","铁岭市银州区","西丰县","西丰镇","昌图县","昌图镇"]);  
    dsy.add("0_7_4",["顺城区","新抚区","东洲区","望花区","抚顺县","抚顺市顺城区","新宾满族自治县","新宾镇","清原满族自治县","清原镇"]);  
    dsy.add("0_7_5",["平山区","溪湖区","明山区","南芬区","本溪满族自治县","小市镇","桓仁满族自治县","桓仁镇"]);  
    dsy.add("0_7_6",["白塔区","文圣区","宏伟区","弓长岭区","太子河区","灯塔市","辽阳县","首山镇"]);  
    dsy.add("0_7_7",["铁东区","铁西区","立山区","千山区","海城市","台安县","台安镇","岫岩满族自治县","岫岩镇"]);  
    dsy.add("0_7_8",["振兴区","元宝区","振安区","凤城市","东港市","宽甸满族自治县","宽甸镇"]);  
    dsy.add("0_7_9",["西岗区","中山区","沙河口区","甘井子区","旅顺口区","金州区","瓦房店市","普兰店市","庄河市","长海县","大长山岛镇"]);  
    dsy.add("0_7_10",["站前区","西市区","鲅鱼圈区","老边区","大石桥市","盖州市"]);  
    dsy.add("0_7_11",["兴隆台区","双台子区","大洼县","大洼镇","盘山县","盘锦市双台子区"]);  
    dsy.add("0_7_12",["太和区","古塔区","凌河区","凌海市","北宁市","黑山县","黑山镇","义县","义州镇"]);  
    dsy.add("0_7_13",["龙港区","连山区","南票区","兴城市","绥中县","绥中镇","建昌县","建昌镇"]);  
    dsy.add("0_7",["沈阳市","朝阳市","阜新市","铁岭市","抚顺市","本溪市","辽阳市","鞍山市","丹东市","大连市","营口市","盘锦市","锦州市","葫芦岛市"]);  
    dsy.add("0_8_0",["朝阳区","南关区","宽城区","二道区","绿园区","双阳区","德惠市","九台市","榆树市","农安县","农安镇"]);  
    dsy.add("0_8_1",["洮北区","大安市","洮南市","镇赉县","镇赉镇","通榆县","开通镇"]);  
    dsy.add("0_8_2",["宁江区","扶余县","三岔河镇","长岭县","长岭镇","乾安县","乾安镇","前郭尔罗斯蒙古族自治县","前郭镇"]);  
    dsy.add("0_8_3",["船营区","龙潭区","昌邑区","丰满区","磐石市","蛟河市","桦甸市","舒兰市","永吉县","口前镇"]);  
    dsy.add("0_8_4",["铁西区","铁东区","双辽市","公主岭市","梨树县","梨树镇","伊通满族自治县","伊通镇"]);  
    dsy.add("0_8_5",["龙山区","西安区","东丰县","东丰镇","东辽县","白泉镇"]);  
    dsy.add("0_8_6",["东昌区","二道江区","梅河口市","集安市","通化县","快大茂镇","辉南县","朝阳镇","柳河县","柳河镇"]);  
    dsy.add("0_8_7",["八道江区","临江市","江源县","孙家堡子镇","抚松县","抚松镇","靖宇县","靖宇镇","长白朝鲜族自治县","长白镇"]);  
    dsy.add("0_8_8",["延吉市","图们市","敦化市","珲春市","龙井市","和龙市","汪清县","汪清镇","安图县","明月镇"]);  
    dsy.add("0_8",["长春市","白城市","松原市","吉林市","四平市","辽源市","通化市","白山市","延边州"]);  
    dsy.add("0_9_0",["松北区","道里区","南岗区","道外区","香坊区","动力区","平房区","呼兰区","双城市","尚志市","五常市","阿城市","依兰县","依兰镇","方正县","方正镇","宾县","宾州镇","巴彦县","巴彦镇","木兰县","木兰镇","通河县","通河镇","延寿县","延寿镇"]);  
    dsy.add("0_9_1",["建华区","龙沙区","铁锋区","昂昂溪区","富拉尔基区","碾子山区","梅里斯达斡尔族区","讷河市","龙江县","龙江镇","依安县","依安镇","泰来县","泰来镇","甘南县","甘南镇","富裕县","富裕镇","克山县","克山镇","克东县","克东镇","拜泉县","拜泉镇"]);  
    dsy.add("0_9_2",["桃山区","新兴区","茄子河区","勃利县","勃利镇"]);  
    dsy.add("0_9_3",["爱辉区","北安市","五大连池市","嫩江县","嫩江镇","逊克县","边疆镇","孙吴县","孙吴镇"]);  
    dsy.add("0_9_4",["萨尔图区","龙凤区","让胡路区","大同区","红岗区","肇州县","肇州镇","肇源县","肇源镇","林甸县","林甸镇","杜尔伯特蒙古族自治县","泰康镇"]);  
    dsy.add("0_9_5",["兴山区","向阳区","工农区","南山区","兴安区","东山区","萝北县","凤翔镇","绥滨县","绥滨镇"]);  
    dsy.add("0_9_6",["伊春区","南岔区","友好区","西林区","翠峦区","新青区","美溪区","金山屯区","五营区","乌马河区","汤旺河区","带岭区","乌伊岭区","红星区","上甘岭区","铁力市","嘉荫县","朝阳镇"]);  
    dsy.add("0_9_7",["前进区","永红区","向阳区","东风区","郊区","同江市","富锦市","桦南县","桦南镇","桦川县","悦来镇","汤原县","汤原镇","抚远县","抚远镇"]);  
    dsy.add("0_9_8",["尖山区","岭东区","四方台区","宝山区","集贤县","福利镇","友谊县","友谊镇","宝清县","宝清镇","饶河县","饶河镇"]);  
    dsy.add("0_9_9",["鸡冠区","恒山区","滴道区","梨树区","城子河区","麻山区","虎林市","密山市","鸡东县","鸡东镇"]);  
    dsy.add("0_9_10",["爱民区","东安区","阳明区","西安区","穆棱市","绥芬河市","海林市","宁安市","东宁县","东宁镇","林口县","林口镇"]);  
    dsy.add("0_9_11",["北林区","安达市","肇东市","海伦市","望奎县","望奎镇","兰西县","兰西镇","青冈县","青冈镇","庆安县","庆安镇","明水县","明水镇","绥棱县","绥棱镇"]);  
    dsy.add("0_9_12",["呼玛县","呼玛镇","塔河县","塔河镇","漠河县","西林吉镇"]);  
    dsy.add("0_9",["哈尔滨市","齐齐哈尔市","七台河市","黑河市","大庆市","鹤岗市","伊春市","佳木斯市","双鸭山市","鸡西市","牡丹江市","绥化市","大兴安岭地区"]);  
    dsy.add("0_10_0",["玄武区","白下区","秦淮区","建邺区","鼓楼区","下关区","浦口区","六合区","栖霞区","雨花台区","江宁区","溧水县","永阳镇","高淳县","淳溪镇"]);  
    dsy.add("0_10_1",["云龙区","鼓楼区","九里区","贾汪区","泉山区","邳州市","新沂市","铜山县","铜山镇","睢宁县","睢城镇","沛县","沛城镇","丰县","凤城镇"]);  
    dsy.add("0_10_2",["新浦区","连云区","海州区","赣榆县","青口镇","灌云县","伊山镇","东海县","牛山镇","灌南县","新安镇"]);  
    dsy.add("0_10_3",["宿城区","宿豫区","沭阳县","沭城镇","泗阳县","众兴镇","泗洪县","青阳镇"]);  
    dsy.add("0_10_4",["清河区","清浦区","楚州区","淮阴区","金湖县","黎城镇","盱眙县","盱城镇","洪泽县","高良涧镇","涟水县","涟城镇"]);  
    dsy.add("0_10_5",["亭湖区","盐都区","东台市","大丰市","射阳县","合德镇","阜宁县","阜城镇","滨海县","东坎镇","响水县","响水镇","建湖县","近湖镇"]);  
    dsy.add("0_10_6",["维扬区","广陵区","邗江区","仪征市","江都市","高邮市","宝应县","安宜镇"]);  
    dsy.add("0_10_7",["海陵区","高港区","靖江市","泰兴市","姜堰市","兴化市"]);  
    dsy.add("0_10_8",["崇川区","港闸区","海门市","启东市","通州市","如皋市","如东县","掘港镇","海安县","海安镇"]);  
    dsy.add("0_10_9",["京口区","润州区","丹徒区","扬中市","丹阳市","句容市"]);  
    dsy.add("0_10_10",["钟楼区","天宁区","戚墅堰区","新北区","武进区","金坛市","溧阳市"]);  
    dsy.add("0_10_11",["崇安区","南长区","北塘区","滨湖区","惠山区","锡山区","江阴市","宜兴市"]);  
    dsy.add("0_10_12",["金阊区","沧浪区","平江区","虎丘区","吴中区","相城区","吴江市","昆山市","太仓市","常熟市","张家港市"]);  
    dsy.add("0_10",["南京市","徐州市","连云港市","宿迁市","淮安市","盐城市","扬州市","泰州市","南通市","镇江市","常州市","无锡市","苏州市"]);  
    dsy.add("0_11_0",["拱墅区","上城区","下城区","江干区","西湖区","滨江区","余杭区","萧山区","临安市","富阳市","建德市","桐庐县","淳安县","千岛湖镇"]);  
    dsy.add("0_11_1",["吴兴区","南浔区","长兴县","雉城镇","德清县","武康镇","安吉县","递铺镇"]);  
    dsy.add("0_11_2",["南湖区","秀洲区","平湖市","海宁市","桐乡市","嘉善县","魏塘镇","海盐县","武原镇"]);  
    dsy.add("0_11_3",["定海区","普陀区","岱山县","高亭镇","嵊泗县","菜园镇"]);  
    dsy.add("0_11_4",["海曙区","江东区","江北区","北仑区","镇海区","鄞州区","慈溪市","余姚市","奉化市","宁海县","象山县"]);  
    dsy.add("0_11_5",["越城区","诸暨市","上虞市","嵊州市","绍兴县","新昌县","城关镇"]);  
    dsy.add("0_11_6",["柯城区","衢江区","江山市","常山县","天马镇","开化县","城关镇","龙游县"]);  
    dsy.add("0_11_7",["婺城区","金东区","兰溪市","永康市","义乌市","东阳市","武义县","浦江县","磐安县","安文镇"]);  
    dsy.add("0_11_8",["椒江区","黄岩区","路桥区","临海市","温岭市","三门县","海游镇","天台县","仙居县","玉环县","珠港镇"]);  
    dsy.add("0_11_9",["鹿城区","龙湾区","瓯海区","瑞安市","乐清市","永嘉县","上塘镇","文成县","大峃镇","平阳县","昆阳镇","泰顺县","罗阳镇","洞头县","北岙镇","苍南县","灵溪镇"]);  
    dsy.add("0_11_10",["莲都区","龙泉市","缙云县","五云镇","青田县","鹤城镇","云和县","云和镇","遂昌县","妙高镇","松阳县","西屏镇","庆元县","松源镇","景宁畲族自治县","鹤溪镇"]);  
    dsy.add("0_11",["杭州市","湖州市","嘉兴市","舟山市","宁波市","绍兴市","衢州市","金华市","台州市","温州市","丽水市"]);  
    dsy.add("0_12_0",["庐阳区","瑶海区","蜀山区","包河区","长丰县","水湖镇","肥东县","店埠镇","肥西县","上派镇"]);  
    dsy.add("0_12_1",["埇桥区","砀山县","砀城镇","萧县","龙城镇","灵璧县","灵城镇","泗县","泗城镇"]);  
    dsy.add("0_12_2",["相山区","杜集区","烈山区","濉溪县","濉溪镇"]);  
    dsy.add("0_12_3",["谯城区","涡阳县","城关镇","蒙城县","城关镇","利辛县","城关镇"]);  
    dsy.add("0_12_4",["颍州区","颍东区","颍泉区","界首市","临泉县","城关镇","太和县","城关镇","阜南县","城关镇","颍上县","慎城镇"]);  
    dsy.add("0_12_5",["蚌山区","龙子湖区","禹会区","淮上区","怀远县","城关镇","五河县","城关镇","固镇县","城关镇"]);  
    dsy.add("0_12_6",["田家庵区","大通区","谢家集区","八公山区","潘集区","凤台县","城关镇"]);  
    dsy.add("0_12_7",["琅区","南谯区","明光市","天长市","来安县","新安镇","全椒县","襄河镇","定远县","定城镇","凤阳县","府城镇"]);  
    dsy.add("0_12_8",["雨山区","花山区","金家庄区","当涂县","姑孰镇"]);  
    dsy.add("0_12_9",["镜湖区","弋江区","三山区","鸠江区","芜湖县","湾镇","繁昌县","繁阳镇","南陵县","籍山镇"]);  
    dsy.add("0_12_10",["铜官山区","狮子山区","郊区","铜陵县","五松镇"]);  
    dsy.add("0_12_11",["迎江区","大观区","宜秀区","桐城市","怀宁县","高河镇","枞阳县","枞阳镇","潜山县","梅城镇","太湖县","晋熙镇","宿松县","孚玉镇","望江县","雷阳镇","岳西县","天堂镇"]);  
    dsy.add("0_12_12",["屯溪区","黄山区","徽州区","歙县","徽城镇","休宁县","海阳镇","黟县","碧阳镇","祁门县","祁山镇"]);  
    dsy.add("0_12_13",["金安区","裕安区","寿县","寿春镇","霍邱县","城关镇","舒城县","城关镇","金寨县","梅山镇","霍山县","衡山镇"]);  
    dsy.add("0_12_14",["居巢区","庐江县","庐城镇","无为县","无城镇","含山县","环峰镇","和县","历阳镇"]);  
    dsy.add("0_12_15",["贵池区","东至县","尧渡镇","石台县","七里镇","青阳县","蓉城镇"]);  
    dsy.add("0_12_16",["宣州区","宁国市","郎溪县","建平镇","广德县","桃州镇","泾县","泾川镇","旌德县","旌阳镇","绩溪县","华阳镇"]);  
    dsy.add("0_12",["合肥市","宿州市","淮北市","亳州市","阜阳市","蚌埠市","淮南市","滁州市","马鞍山市","芜湖市","铜陵市","安庆市","黄山市","六安市","巢湖市","池州市","宣城市"]);  
    dsy.add("0_13_0",["鼓楼区","台江区","仓山区","马尾区","晋安区","福清市","长乐市","闽侯县","连江县","凤城镇","罗源县","凤山镇","闽清县","梅城镇","永泰县","樟城镇","平潭县","潭城镇"]);  
    dsy.add("0_13_1",["延平区","邵武市","武夷山市","建瓯市","建阳市","顺昌县","浦城县","光泽县","杭川镇","松溪县","松源镇","政和县","熊山镇"]);  
    dsy.add("0_13_2",["城厢区","涵江区","荔城区","秀屿区","仙游县"]);  
    dsy.add("0_13_3",["梅列区","三元区","永安市","明溪县","雪峰镇","清流县","龙津镇","宁化县","翠江镇","大田县","均溪镇","尤溪县","城关镇","沙县","将乐县","古镛镇","泰宁县","杉城镇","建宁县","濉城镇"]);  
    dsy.add("0_13_4",["鲤城区","丰泽区","洛江区","泉港区","石狮市","晋江市","南安市","惠安县","螺城镇","安溪县","凤城镇","永春县","桃城镇","德化县","浔中镇","金门县","☆"]);  
    dsy.add("0_13_5",["思明区","海沧区","湖里区","集美区","同安区","翔安区"]);  
    dsy.add("0_13_6",["芗城区","龙文区","龙海市","云霄县","云陵镇","漳浦县","绥安镇","诏安县","南诏镇","长泰县","武安镇","东山县","西埔镇","南靖县","山城镇","平和县","小溪镇","华安县","华丰镇"]);  
    dsy.add("0_13_7",["新罗区","漳平市","长汀县","汀州镇","永定县","凤城镇","上杭县","临江镇","武平县","平川镇","连城县","莲峰镇"]);  
    dsy.add("0_13_8",["蕉城区","福安市","福鼎市","寿宁县","鳌阳镇","霞浦县","柘荣县","双城镇","屏南县","古峰镇","古田县","周宁县","狮城镇"]);  
    dsy.add("0_13",["福州市","南平市","莆田市","三明市","泉州市","厦门市","漳州市","龙岩市","宁德市"]);  
    dsy.add("0_14_0",["东湖区","西湖区","青云谱区","湾里区","青山湖区","南昌县","莲塘镇","新建县","长堎镇","安义县","龙津镇","进贤县","民和镇"]);  
    dsy.add("0_14_1",["浔阳区","庐山区","瑞昌市","九江县","沙河街镇","武宁县","新宁镇","修水县","义宁镇","永修县","涂埠镇","德安县","蒲亭镇","星子县","南康镇","都昌县","都昌镇","湖口县","双钟镇","彭泽县","龙城镇"]);  
    dsy.add("0_14_2",["珠山区","昌江区","乐平市","浮梁县","浮梁镇"]);  
    dsy.add("0_14_3",["月湖区","贵溪市","余江县","邓埠镇"]);  
    dsy.add("0_14_4",["渝水区","分宜县","分宜镇"]);  
    dsy.add("0_14_5",["安源区","湘东区","莲花县","琴亭镇","上栗县","上栗镇","芦溪县","芦溪镇"]);  
    dsy.add("0_14_6",["章贡区","瑞金市","南康市","赣县","梅林镇","信丰县","嘉定镇","大余县","南安镇","上犹县","东山镇","崇义县","横水镇","安远县","欣山镇","龙南县","龙南镇","定南县","历市镇","全南县","城厢镇","宁都县","梅江镇","于都县","贡江镇","兴国县","潋江镇","会昌县","文武坝镇","寻乌县","长宁镇","石城县","琴江镇"]);  
    dsy.add("0_14_7",["信州区","德兴市","上饶县","旭日镇","广丰县","永丰镇","玉山县","冰溪镇","铅山县","河口镇","横峰县","岑阳镇","弋阳县","弋江镇","余干县","玉亭镇","鄱阳县","鄱阳镇","万年县","陈营镇","婺源县","紫阳镇"]);  
    dsy.add("0_14_8",["临川区","南城县","建昌镇","黎川县","日峰镇","南丰县","琴城镇","崇仁县","巴山镇","乐安县","鳌溪镇","宜黄县","凤冈镇","金溪县","秀谷镇","资溪县","鹤城镇","东乡县","孝岗镇","广昌县","旴江镇"]);  
    dsy.add("0_14_9",["袁州区","丰城市","樟树市","高安市","奉新县","冯川镇","万载县","上高县","宜丰县","新昌镇","靖安县","双溪镇","铜鼓县","永宁镇"]);  
    dsy.add("0_14_10",["吉州区","青原区","井冈山市","厦坪镇","吉安县","敦厚镇","吉水县","文峰镇","峡江县","水边镇","新干县","金川镇","永丰县","恩江镇","泰和县","澄江镇","遂川县","泉江镇","万安县","芙蓉镇","安福县","平都镇","永新县","禾川镇"]);  
    dsy.add("0_14",["南昌市","九江市","景德镇市","鹰潭市","新余市","萍乡市","赣州市","上饶市","抚州市","宜春市","吉安市"]);  
    dsy.add("0_15_0",["市中区","历下区","槐荫区","天桥区","历城区","长清区","章丘市","平阴县","平阴镇","济阳县","济阳镇","商河县"]);  
    dsy.add("0_15_1",["市南区","市北区","四方区","黄岛区","崂山区","城阳区","李沧区","胶州市","即墨市","平度市","胶南市","莱西市"]);  
    dsy.add("0_15_2",["东昌府区","临清市","阳谷县","莘县","茌平县","东阿县","冠县","冠城镇","高唐县"]);  
    dsy.add("0_15_3",["德城区","乐陵市","禹城市","陵县","陵城镇","平原县","夏津县","夏津镇","武城县","武城镇","齐河县","晏城镇","临邑县","宁津县","宁津镇","庆云县","庆云镇"]);  
    dsy.add("0_15_4",["东营区","河口区","垦利县","垦利镇","利津县","利津镇","广饶县","广饶镇"]);  
    dsy.add("0_15_5",["张店区","淄川区","博山区","临淄区","周村区","桓台县","索镇","高青县","田镇","沂源县","南麻镇"]);  
    dsy.add("0_15_6",["潍城区","寒亭区","坊子区","奎文区","安丘市","昌邑市","高密市","青州市","诸城市","寿光市","临朐县","昌乐县"]);  
    dsy.add("0_15_7",["莱山区","芝罘区","福山区","牟平区","栖霞市","海阳市","龙口市","莱阳市","莱州市","蓬莱市","招远市","长岛县","南长山镇"]);  
    dsy.add("0_15_8",["环翠区","荣成市","乳山市","文登市"]);  
    dsy.add("0_15_9",["东港区","岚山区","五莲县","洪凝镇","莒县","城阳镇"]);  
    dsy.add("0_15_10",["兰山区","罗庄区","河东区","郯城县","郯城镇","苍山县","卞庄镇","莒南县","十字路镇","沂水县","沂水镇","蒙阴县","蒙阴镇","平邑县","平邑镇","费县","费城镇","沂南县","界湖镇","临沭县","临沭镇"]);  
    dsy.add("0_15_11",["薛城区","市中区","峄城区","台儿庄区","山亭区","滕州市"]);  
    dsy.add("0_15_12",["市中区","任城区","曲阜市","兖州市","邹城市","微山县","鱼台县","谷亭镇","金乡县","金乡镇","嘉祥县","嘉祥镇","汶上县","汶上镇","泗水县","梁山县","梁山镇"]);  
    dsy.add("0_15_13",["泰山区","岱岳区","新泰市","肥城市","宁阳县","宁阳镇","东平县","东平镇"]);  
    dsy.add("0_15_14",["莱城区","钢城区"]);  
    dsy.add("0_15_15",["滨城区","惠民县","惠民镇","阳信县","阳信镇","无棣县","无棣镇","沾化县","富国镇","博兴县","博兴镇","邹平县"]);  
    dsy.add("0_15_16",["牡丹区","曹县","曹城镇","定陶县","定陶镇","成武县","成武镇","单县","单城镇","巨野县","巨野镇","郓城县","郓城镇","鄄城县","鄄城镇","东明县","城关镇"]);  
    dsy.add("0_15",["济南市","青岛市","聊城市","德州市","东营市","淄博市","潍坊市","烟台市","威海市","日照市","临沂市","枣庄市","济宁市","泰安市","莱芜市","滨州市","菏泽市"]);  
    dsy.add("0_16_0",["中原区","二七区","管城回族区","金水区","上街区","惠济区","新郑市","登封市","新密市","巩义市","荥阳市","中牟县","城关镇"]);  
    dsy.add("0_16_1",["鼓楼区","龙亭区","顺河回族区","禹王台区","金明区","杞县","城关镇","通许县","城关镇","尉氏县","城关镇","开封县","城关镇","兰考县","城关镇"]);  
    dsy.add("0_16_2",["湖滨区","义马市","灵宝市","渑池县","城关镇","陕县","大营镇","卢氏县","城关镇"]);  
    dsy.add("0_16_3",["西工区","老城区","瀍河回族区","涧西区","吉利区","洛龙区","偃师市","孟津县","城关镇","新安县","城关镇","栾川县","城关镇","嵩县","城关镇","汝阳县","城关镇","宜阳县","城关镇","洛宁县","城关镇","伊川县","城关镇"]);  
    dsy.add("0_16_4",["解放区","山阳区","中站区","马村区","孟州市","沁阳市","修武县","城关镇","博爱县","清化镇","武陟县","木城镇","温县","温泉镇"]);  
    dsy.add("0_16_5",["卫滨区","红旗区","凤泉区","牧野区","卫辉市","辉县市","新乡县","新乡市红旗区","获嘉县","城关镇","原阳县","城关镇","延津县","城关镇","封丘县","城关镇","长垣县","城关镇"]);  
    dsy.add("0_16_6",["淇滨区","山城区","鹤山区","浚县","城关镇","淇县","朝歌镇"]);  
    dsy.add("0_16_7",["北关区","文峰区","殷都区","龙安区","林州市","安阳县","安阳市北关区","汤阴县","城关镇","滑县","道口镇","内黄县","城关镇"]);  
    dsy.add("0_16_8",["华龙区","清丰县","城关镇","南乐县","城关镇","范县","城关镇","台前县","城关镇","濮阳县","城关镇"]);  
    dsy.add("0_16_9",["梁园区","睢阳区","永城市","虞城县","城关镇","民权县","城关镇","宁陵县","城关镇","睢县","城关镇","夏邑县","城关镇","柘城县","城关镇"]);  
    dsy.add("0_16_10",["魏都区","禹州市","长葛市","许昌县","许昌市魏都区","鄢陵县","安陵镇","襄城县","城关镇"]);  
    dsy.add("0_16_11",["源汇区","郾城区","召陵区","舞阳县","舞泉镇","临颍县","城关镇"]);  
    dsy.add("0_16_12",["新华区","卫东区","湛河区","石龙区","舞钢市","汝州市","宝丰县","城关镇","叶县","昆阳镇","鲁山县","鲁阳镇","郏县","城关镇"]);  
    dsy.add("0_16_13",["卧龙区","宛城区","邓州市","南召县","城关镇","方城县","城关镇","西峡县","镇平县","城关镇","内乡县","城关镇","淅川县","社旗县","赊店镇","唐河县","新野县","城关镇","桐柏县","城关镇"]);  
    dsy.add("0_16_14",["河区","平桥区","息县","城关镇","淮滨县","城关镇","潢川县","光山县","固始县","城关镇","商城县","城关镇","罗山县","城关镇","新县","新集镇"]);  
    dsy.add("0_16_15",["川汇区","项城市","扶沟县","城关镇","西华县","城关镇","商水县","城关镇","太康县","城关镇","鹿邑县","城关镇","郸城县","城关镇","淮阳县","城关镇","沈丘县","槐店镇"]);  
    dsy.add("0_16_16",["驿城区","确山县","盘龙镇","泌阳县","泌水镇","遂平县","灈阳镇","西平县","上蔡县","蔡都镇","汝南县","汝宁镇","平舆县","古槐镇","新蔡县","古吕镇","正阳县","真阳镇"]);  
    dsy.add("0_16",["郑州市","开封市","三门峡市","洛阳市","焦作市","新乡市","鹤壁市","安阳市","濮阳市","商丘市","许昌市","漯河市","平顶山市","南阳市","信阳市","周口市","驻马店市","济源市"]);  
    dsy.add("0_17_0",["江岸区","江汉区","硚口区","汉阳区","武昌区","青山区","洪山区","东西湖区","汉南区","蔡甸区","江夏区","黄陂区","新洲区"]);  
    dsy.add("0_17_1",["张湾区","茅箭区","丹江口市","郧县","城关镇","竹山县","城关镇","房县","城关镇","郧西县","城关镇","竹溪县","城关镇"]);  
    dsy.add("0_17_2",["襄城区","樊城区","襄阳区","老河口市","枣阳市","宜城市","南漳县","城关镇","谷城县","城关镇","保康县","城关镇"]);  
    dsy.add("0_17_3",["东宝区","掇刀区","钟祥市","沙洋县","沙洋镇","京山县","新市镇"]);  
    dsy.add("0_17_4",["孝南区","应城市","安陆市","汉川市","孝昌县","花园镇","大悟县","城关镇","云梦县","城关镇"]);  
    dsy.add("0_17_5",["黄州区","麻城市","武穴市","红安县","城关镇","罗田县","凤山镇","英山县","温泉镇","浠水县","清泉镇","蕲春县","漕河镇","黄梅县","黄梅镇","团风县","团风镇"]);  
    dsy.add("0_17_6",["鄂城区","梁子湖区","华容区"]);  
    dsy.add("0_17_7",["黄石港区","西塞山区","下陆区","铁山区","大冶市","阳新县","兴国镇"]);  
    dsy.add("0_17_8",["咸安区","赤壁市","嘉鱼县","鱼岳镇","通城县","隽水镇","崇阳县","天城镇","通山县","通羊镇"]);  
    dsy.add("0_17_9",["沙市区","荆州区","石首市","洪湖市","松滋市","江陵县","郝穴镇","公安县","斗湖堤镇","监利县","容城镇"]);  
    dsy.add("0_17_10",["西陵区","伍家岗区","点军区","猇亭区","夷陵区","枝江市","宜都市","当阳市","远安县","鸣凤镇","兴山县","古夫镇","秭归县","茅坪镇","长阳土家族自治县","龙舟坪镇","五峰土家族自治县","五峰镇"]);  
    dsy.add("0_17_11",["曾都区","广水市"]);  
    dsy.add("0_17_12",["仙桃市","天门市","潜江市","神农架林区","松柏镇"]);  
    dsy.add("0_17_13",["恩施市","利川市","建始县","业州镇","巴东县","信陵镇","宣恩县","珠山镇","咸丰县","高乐山镇","来凤县","翔凤镇","鹤峰县","容美镇"]);  
    dsy.add("0_17",["武汉市","十堰市","襄樊市","荆门市","孝感市","黄冈市","鄂州市","黄石市","咸宁市","荆州市","宜昌市","随州市","省直辖县级行政单位","恩施州"]);  
    dsy.add("0_18_0",["长沙市","岳麓区","芙蓉区","天心区","开福区","雨花区","浏阳市","长沙县","星沙镇","望城县","高塘岭镇","宁乡县","玉潭镇"]);  
    dsy.add("0_18_1",["永定区","武陵源区","慈利县","零阳镇","桑植县","澧源镇"]);  
    dsy.add("0_18_2",["武陵区","鼎城区","津市市","安乡县","城关镇","汉寿县","龙阳镇","澧县","澧阳镇","临澧县","安福镇","桃源县","漳江镇","石门县","楚江镇"]);  
    dsy.add("0_18_3",["赫山区","资阳区","沅江市","南县","南洲镇","桃江县","桃花江镇","安化县","东坪镇"]);  
    dsy.add("0_18_4",["岳阳楼区","君山区","云溪区","汨罗市","临湘市","岳阳县","荣家湾镇","华容县","城关镇","湘阴县","文星镇","平江县","汉昌镇"]);  
    dsy.add("0_18_5",["天元区","荷塘区","芦淞区","石峰区","醴陵市","株洲县","渌口镇","攸县","城关镇","茶陵县","城关镇","炎陵县","霞阳镇"]);  
    dsy.add("0_18_6",["岳塘区","雨湖区","湘乡市","韶山市","湘潭县","易俗河镇"]);  
    dsy.add("0_18_7",["雁峰区","珠晖区","石鼓区","蒸湘区","南岳区","常宁市","耒阳市","衡阳县","西渡镇","衡南县","云集镇","衡山县","开云镇","衡东县","城关镇","祁东县","洪桥镇"]);  
    dsy.add("0_18_8",["北湖区","苏仙区","资兴市","桂阳县","城关镇","永兴县","城关镇","宜章县","城关镇","嘉禾县","城关镇","临武县","城关镇","汝城县","城关镇","桂东县","城关镇","安仁县","城关镇"]);  
    dsy.add("0_18_9",["冷水滩区","零陵区","东安县","白牙市镇","道县","道江镇","宁远县","舜陵镇","江永县","潇浦镇","蓝山县","塔峰镇","新田县","龙泉镇","双牌县","泷泊镇","祁阳县","浯溪镇","江华瑶族自治县","沱江镇"]);  
    dsy.add("0_18_10",["双清区","大祥区","北塔区","武冈市","邵东县","两市镇","邵阳县","塘渡口镇","新邵县","酿溪镇","隆回县","桃洪镇","洞口县","洞口镇","绥宁县","长铺镇","新宁县","金石镇","城步苗族自治县","儒林镇"]);  
    dsy.add("0_18_11",["鹤城区","洪江市","沅陵县","沅陵镇","辰溪县","辰阳镇","溆浦县","卢峰镇","中方县","中方镇","会同县","林城镇","麻阳苗族自治县","高村镇","新晃侗族自治县","新晃镇","芷江侗族自治县","芷江镇","靖州苗族侗族自治县","渠阳镇","通道侗族自治县","双江镇"]);  
    dsy.add("0_18_12",["娄星区","冷水江市","涟源市","双峰县","永丰镇","新化县","上梅镇"]);  
    dsy.add("0_18_13",["吉首市","泸溪县","白沙镇","凤凰县","沱江镇","花垣县","花垣镇","保靖县","迁陵镇","古丈县","古阳镇","永顺县","灵溪镇","龙山县"]);  
    dsy.add("0_18",["长沙市","张家界市","常德市","益阳市","岳阳市","株洲市","湘潭市","衡阳市","郴州市","永州市","邵阳市","怀化市","娄底市","湘西州"]);  
    dsy.add("0_19_0",["越秀区","荔湾区","海珠区","天河区","白云区","黄埔区","番禺区","花都区","南沙区","萝岗区","增城市","从化市"]);  
    dsy.add("0_19_1",["福田区","罗湖区","南山区","宝安区","龙岗区","盐田区"]);  
    dsy.add("0_19_2",["清城区","英德市","连州市","佛冈县","石角镇","阳山县","阳城镇","清新县","太和镇","连山壮族瑶族自治县","吉田镇","连南瑶族自治县","三江镇"]);  
    dsy.add("0_19_3",["浈江区","武江区","曲江区","乐昌市","南雄市","始兴县","太平镇","仁化县","仁化镇","翁源县","龙仙镇","新丰县","乳源瑶族自治县","乳城镇"]);  
    dsy.add("0_19_4",["源城区","紫金县","紫城镇","龙川县","老隆镇","连平县","元善镇","和平县","阳明镇","东源县","仙塘镇"]);  
    dsy.add("0_19_5",["梅江区","兴宁市","梅县","程江镇","大埔县","湖寮镇","丰顺县","汤坑镇","五华县","水寨镇","平远县","大柘镇","蕉岭县","蕉城镇"]);  
    dsy.add("0_19_6",["湘桥区","潮安县","庵埠镇","饶平县","黄冈镇"]);  
    dsy.add("0_19_7",["金平区","濠江区","龙湖区","潮阳区","潮南区","澄海区","南澳县","后宅镇"]);  
    dsy.add("0_19_8",["榕城区","普宁市","揭东县","曲溪镇","揭西县","河婆镇","惠来县","惠城镇"]);  
    dsy.add("0_19_9",["城区","陆丰市","海丰县","海城镇","陆河县","河田镇"]);  
    dsy.add("0_19_10",["惠城区","惠阳区","博罗县","罗阳镇","惠东县","龙门县"]);  
    dsy.add("0_19_12",["香洲区","斗门区","金湾区"]);  
    dsy.add("0_19_14",["江海区","蓬江区","新会区","恩平市","台山市","开平市","鹤山市"]);  
    dsy.add("0_19_15",["禅城区","南海区","顺德区","三水区","高明区"]);  
    dsy.add("0_19_16",["端州区","鼎湖区","高要市","四会市","广宁县","南街镇","怀集县","怀城镇","封开县","江口镇","德庆县"]);  
    dsy.add("0_19_17",["云城区","罗定市","云安县","六都镇","新兴县","新城镇","郁南县","都城镇"]);  
    dsy.add("0_19_18",["江城区","阳春市","阳西县","织镇","阳东县","东城镇"]);  
    dsy.add("0_19_19",["茂南区","茂港区","化州市","信宜市","高州市","电白县","水东镇"]);  
    dsy.add("0_19_20",["赤坎区","霞山区","坡头区","麻章区","吴川市","廉江市","雷州市","遂溪县","遂城镇","徐闻县","撤销广州市东山区","芳村区","设立广州市南沙区","萝岗区"]);  
    dsy.add("0_19",["广州市","深圳市","清远市","韶关市","河源市","梅州市","潮州市","汕头市","揭阳市","汕尾市","惠州市","东莞市","珠海市","中山市","江门市","佛山市","肇庆市","云浮市","阳江市","茂名市","湛江市"]);  
    dsy.add("0_20_0",["青秀区","兴宁区","江南区","西乡塘区","良庆区","邕宁区","武鸣县","横县","宾阳县","上林县","隆安县","马山县"]);  
    dsy.add("0_20_1",["象山区","叠彩区","秀峰区","七星区","雁山区","阳朔县","阳朔镇","临桂县","临桂镇","灵川县","灵川镇","全州县","全州镇","兴安县","兴安镇","永福县","永福镇","灌阳县","灌阳镇","资源县","资源镇","平乐县","平乐镇","荔浦县","荔城镇","龙胜各族自治县","龙胜镇","恭城瑶族自治县","恭城镇"]);  
    dsy.add("0_20_2",["城中区","鱼峰区","柳南区","柳北区","柳江县","拉堡镇","柳城县","大埔镇","鹿寨县","鹿寨镇","融安县","长安镇","三江侗族自治县","古宜镇","融水苗族自治县","融水镇"]);  
    dsy.add("0_20_3",["万秀区","蝶山区","长洲区","岑溪市","苍梧县","龙圩镇","藤县","藤州镇","蒙山县","蒙山镇"]);  
    dsy.add("0_20_4",["港北区","港南区","覃塘区","桂平市","平南县","平南镇"]);  
    dsy.add("0_20_5",["玉州区","北流市","兴业县","石南镇","容县","容州镇","陆川县","陆城镇","博白县","博白镇"]);  
    dsy.add("0_20_6",["钦南区","钦北区","灵山县","灵城镇","浦北县","小江镇"]);  
    dsy.add("0_20_7",["海城区","银海区","铁山港区","合浦县","廉州镇"]);  
    dsy.add("0_20_8",["港口区","防城区","东兴市","上思县","思阳镇"]);  
    dsy.add("0_20_9",["江州区","凭祥市","扶绥县","新宁镇","大新县","桃城镇","天等县","天等镇","宁明县","城中镇","龙州县","龙州镇"]);  
    dsy.add("0_20_10",["右江区","田阳县","田州镇","田东县","平马镇","平果县","马头镇","德保县","城关镇","靖西县","新靖镇","那坡县","城厢镇","凌云县","泗城镇","乐业县","同乐镇","西林县","八达镇","田林县","乐里镇","隆林各族自治县","新州镇"]);  
    dsy.add("0_20_11",["金城江区","宜州市","南丹县","城关镇","天峨县","六排镇","凤山县","凤城镇","东兰县","东兰镇","巴马瑶族自治县","巴马镇","都安瑶族自治县","安阳镇","大化瑶族自治县","大化镇","罗城仫佬族自治县","东门镇","环江毛南族自治县","思恩镇"]);  
    dsy.add("0_20_12",["兴宾区","合山市","象州县","象州镇","武宣县","武宣镇","忻城县","城关镇","金秀瑶族自治县","金秀镇"]);  
    dsy.add("0_20_13",["八步区","昭平县","昭平镇","钟山县","钟山镇","富川瑶族自治县","富阳镇"]);  
    dsy.add("0_20",["南宁市","桂林市","柳州市","梧州市","贵港市","玉林市","钦州市","北海市","防城港市","崇左市","百色市","河池市","来宾市","贺州市"]);  
    dsy.add("0_21_0",["龙华区","秀英区","琼山区","美兰区"]);  
    dsy.add("0_21_2",["文昌市","琼海市","万宁市","五指山市","东方市","儋州市","临高县","临城镇","澄迈县","金江镇","定安县","定城镇","屯昌县","屯城镇","昌江黎族自治县","石碌镇","白沙黎族自治县","牙叉镇","琼中黎族苗族自治县","营根镇","陵水黎族自治县","椰林镇","保亭黎族苗族自治县","保城镇","乐东黎族自治县","抱由镇"]);  
    dsy.add("0_21",["海口市","三亚市","省直辖行政单位"]);  
    dsy.add("0_22_0",["青羊区","锦江区","金牛区","武侯区","成华区","龙泉驿区","青白江区","新都区","温江区","都江堰市","彭州市","邛崃市","崇州市","金堂县","赵镇","双流县","郫县","郫筒镇","大邑县","晋原镇","蒲江县","鹤山镇","新津县","五津镇"]);  
    dsy.add("0_22_1",["市中区","元坝区","朝天区","旺苍县","东河镇","青川县","乔庄镇","剑阁县","下寺镇","苍溪县","陵江镇"]);  
    dsy.add("0_22_2",["涪城区","游仙区","江油市","三台县","潼川镇","盐亭县","云溪镇","安县","花荄镇","梓潼县","文昌镇","北川羌族自治县","曲山镇","平武县","龙安镇"]);  
    dsy.add("0_22_3",["旌阳区","什邡市","广汉市","绵竹市","罗江县","罗江镇","中江县","凯江镇"]);  
    dsy.add("0_22_4",["顺庆区","高坪区","嘉陵区","阆中市","南部县","南隆镇","营山县","朗池镇","蓬安县","周口镇","仪陇县","新政镇","西充县","晋城镇"]);  
    dsy.add("0_22_5",["广安区","华蓥市","岳池县","九龙镇","武胜县","沿口镇","邻水县","鼎屏镇"]);  
    dsy.add("0_22_6",["船山区","安居区","蓬溪县","赤城镇","射洪县","太和镇","大英县","蓬莱镇"]);  
    dsy.add("0_22_7",["市中区","东兴区","威远县","严陵镇","资中县","重龙镇","隆昌县","金鹅镇"]);  
    dsy.add("0_22_8",["市中区","沙湾区","五通桥区","金口河区","峨眉山市","犍为县","玉津镇","井研县","研城镇","夹江县","漹城镇","沐川县","沐溪镇","峨边彝族自治县","沙坪镇","马边彝族自治县","民建镇"]);  
    dsy.add("0_22_9",["自流井区","大安区","贡井区","沿滩区","荣县","旭阳镇","富顺县","富世镇"]);  
    dsy.add("0_22_10",["江阳区","纳溪区","龙马潭区","泸县","福集镇","合江县","合江镇","叙永县","叙永镇","古蔺县","古蔺镇"]);  
    dsy.add("0_22_11",["翠屏区","宜宾县","柏溪镇","南溪县","南溪镇","江安县","江安镇","长宁县","长宁镇","高县","庆符镇","筠连县","筠连镇","珙县","巡场镇","兴文县","中城镇","屏山县","屏山镇"]);  
    dsy.add("0_22_12",["东区","西区","仁和区","米易县","攀莲镇","盐边县","桐子林镇"]);  
    dsy.add("0_22_13",["巴州区","通江县","诺江镇","南江县","南江镇","平昌县","江口镇"]);  
    dsy.add("0_22_14",["通川区","万源市","达县","南外镇","宣汉县","东乡镇","开江县","新宁镇","大竹县","竹阳镇","渠县","渠江镇"]);  
    dsy.add("0_22_15",["雁江区","简阳市","乐至县","天池镇","安岳县","岳阳镇"]);  
    dsy.add("0_22_16",["东坡区","仁寿县","文林镇","彭山县","凤鸣镇","洪雅县","洪川镇","丹棱县","丹棱镇","青神县","城厢镇"]);  
    dsy.add("0_22_17",["雨城区","名山县","蒙阳镇","荥经县","严道镇","汉源县","富林镇","石棉县","新棉镇","天全县","城厢镇","芦山县","芦阳镇","宝兴县","穆坪镇"]);  
    dsy.add("0_22_18",["马尔康县","马尔康镇","汶川县","威州镇","理县","杂谷脑镇","茂县","凤仪镇","松潘县","进安镇","九寨沟县","永乐镇","金川县","金川镇","小金县","美兴镇","黑水县","芦花镇","壤塘县","壤柯镇","阿坝县","阿坝镇","若尔盖县","达扎寺镇","红原县","邛溪镇"]);  
    dsy.add("0_22_19",["康定县","炉城镇","泸定县","泸桥镇","丹巴县","章谷镇","九龙县","呷尔镇","雅江县","河口镇","道孚县","鲜水镇","炉霍县","新都镇","甘孜县","甘孜镇","新龙县","茹龙镇","德格县","更庆镇","白玉县","建设镇","石渠县","尼呷镇","色达县","色柯镇","理塘县","高城镇","巴塘县","夏邛镇","乡城县","桑披镇","稻城县","金珠镇","得荣县","松麦镇"]);  
    dsy.add("0_22_20",["西昌市","盐源县","盐井镇","德昌县","德州镇","会理县","城关镇","会东县","会东镇","宁南县","披砂镇","普格县","普基镇","布拖县","特木里镇","金阳县","天地坝镇","昭觉县","新城镇","喜德县","光明镇","冕宁县","城厢镇","越西县","越城镇","甘洛县","新市坝镇","美姑县","巴普镇","雷波县","锦城镇","木里藏族自治县","乔瓦镇"]);  
    dsy.add("0_22",["成都市","广元市","绵阳市","德阳市","南充市","广安市","遂宁市","内江市","乐山市","自贡市","泸州市","宜宾市","攀枝花市","巴中市","达州市","资阳市","眉山市","雅安市","阿坝州","甘孜州","凉山州"]);  
    dsy.add("0_23_0",["乌当区","南明区","云岩区","花溪区","白云区","小河区","清镇市","开阳县","城关镇","修文县","龙场镇","息烽县","永靖镇"]);  
    dsy.add("0_23_1",["钟山区","盘县","红果镇","六枝特区","平寨镇","水城县"]);  
    dsy.add("0_23_2",["红花岗区","汇川区","赤水市","仁怀市","遵义县","南白镇","桐梓县","娄山关镇","绥阳县","洋川镇","正安县","凤仪镇","凤冈县","龙泉镇","湄潭县","湄江镇","余庆县","白泥镇","习水县","东皇镇","道真仡佬族苗族自治县","玉溪镇","务川仡佬族苗族自治县","都濡镇"]);  
    dsy.add("0_23_3",["西秀区","平坝县","城关镇","普定县","城关镇","关岭布依族苗族自治县","关索镇","镇宁布依族苗族自治县","城关镇","紫云苗族布依族自治县","松山镇"]);  
    dsy.add("0_23_4",["毕节市","大方县","大方镇","黔西县","城关镇","金沙县","城关镇","织金县","城关镇","纳雍县","雍熙镇","赫章县","城关镇","威宁彝族回族苗族自治县","草海镇"]);  
    dsy.add("0_23_5",["铜仁市","江口县","双江镇","石阡县","汤山镇","思南县","思唐镇","德江县","青龙镇","玉屏侗族自治县","平溪镇","印江土家族苗族自治县","峨岭镇","沿河土家族自治县","和平镇","松桃苗族自治县","蓼皋镇","万山特区","万山镇"]);  
    dsy.add("0_23_6",["凯里市","黄平县","新州镇","施秉县","城关镇","三穗县","八弓镇","镇远县","阳镇","岑巩县","思旸镇","天柱县","凤城镇","锦屏县","三江镇","剑河县","革东镇","台江县","台拱镇","黎平县","德凤镇","榕江县","古州镇","从江县","丙妹镇","雷山县","丹江镇","麻江县","杏山镇","丹寨县","龙泉镇"]);  
    dsy.add("0_23_7",["都匀市","福泉市","荔波县","玉屏镇","贵定县","城关镇","瓮安县","雍阳镇","独山县","城关镇","平塘县","平湖镇","罗甸县","龙坪镇","长顺县","长寨镇","龙里县","龙山镇","惠水县","和平镇","三都水族自治县","三合镇"]);  
    dsy.add("0_23_8",["兴义市","兴仁县","城关镇","普安县","盘水镇","晴隆县","莲城镇","贞丰县","珉谷镇","望谟县","复兴镇","册亨县","者楼镇","安龙县","新安镇","剑河县人民政府驻地由柳川镇迁至革东镇"]);  
    dsy.add("0_23",["贵阳市","六盘水市","遵义市","安顺市","毕节地区","铜仁地区","黔东南州","黔南州","黔西南州"]);  
    dsy.add("0_24_0",["盘龙区","五华区","官渡区","西山区","东川区","安宁市","呈贡县","龙城镇","晋宁县","昆阳镇","富民县","永定镇","宜良县","匡远镇","嵩明县","嵩阳镇","石林彝族自治县","鹿阜镇","禄劝彝族苗族自治县","屏山镇","寻甸回族彝族自治县","仁德镇"]);  
    dsy.add("0_24_1",["麒麟区","宣威市","马龙县","通泉镇","沾益县","西平镇","富源县","中安镇","罗平县","罗雄镇","师宗县","丹凤镇","陆良县","中枢镇","会泽县","金钟镇"]);  
    dsy.add("0_24_2",["红塔区","江川县","大街镇","澄江县","凤麓镇","通海县","秀山镇","华宁县","宁州镇","易门县","龙泉镇","峨山彝族自治县","双江镇","新平彝族傣族自治县","桂山镇","元江哈尼族彝族傣族自治县","澧江镇"]);  
    dsy.add("0_24_3",["隆阳区","施甸县","甸阳镇","腾冲县","腾越镇","龙陵县","龙山镇","昌宁县","田园镇"]);  
    dsy.add("0_24_4",["昭阳区","鲁甸县","文屏镇","巧家县","新华镇","盐津县","盐井镇","大关县","翠华镇","永善县","溪落渡镇","绥江县","中城镇","镇雄县","乌峰镇","彝良县","角奎镇","威信县","扎西镇","水富县","向家坝镇"]);  
    dsy.add("0_24_5",["古城区","永胜县","永北镇","华坪县","中心镇","玉龙纳西族自治县","黄山镇","宁蒗彝族自治县","大兴镇"]);  
    dsy.add("0_24_6",["翠云区","普洱哈尼族彝族自治县","宁洱镇","墨江哈尼族自治县","联珠镇","景东彝族自治县","锦屏镇","景谷傣族彝族自治县","威远镇","镇沅彝族哈尼族拉祜族自治县","恩乐镇","江城哈尼族彝族自治县","勐烈镇","孟连傣族拉祜族佤族自治县","娜允镇","澜沧拉祜族自治县","勐朗镇","西盟佤族自治县","勐梭镇"]);  
    dsy.add("0_24_7",["临翔区","凤庆县","凤山镇","云县","爱华镇","永德县","德党镇","镇康县","南伞镇","双江拉祜族佤族布朗族傣族自治县","勐勐镇","耿马傣族佤族自治县","耿马镇","沧源佤族自治县","勐董镇"]);  
    dsy.add("0_24_8",["潞西市","瑞丽市","梁河县","遮岛镇","盈江县","平原镇","陇川县","章凤镇"]);  
    dsy.add("0_24_9",["泸水县六库镇","泸水县","六库镇","福贡县","上帕镇","贡山独龙族怒族自治县","茨开镇","兰坪白族普米族自治县","金顶镇"]);  
    dsy.add("0_24_10",["香格里拉县","建塘镇","德钦县","升平镇","维西傈僳族自治县","保和镇"]);  
    dsy.add("0_24_11",["大理市","祥云县","祥城镇","宾川县","金牛镇","弥渡县","弥城镇","永平县","博南镇","云龙县","诺邓镇","洱源县","茈碧湖镇","剑川县","金华镇","鹤庆县","云鹤镇","漾濞彝族自治县","苍山西镇","南涧彝族自治县","南涧镇","巍山彝族回族自治县","南诏镇"]);  
    dsy.add("0_24_12",["楚雄市","双柏县","妥甸镇","牟定县","共和镇","南华县","龙川镇","姚安县","栋川镇","大姚县","金碧镇","永仁县","永定镇","元谋县","元马镇","武定县","狮山镇","禄丰县","金山镇"]);  
    dsy.add("0_24_13",["蒙自县","文澜镇","个旧市","开远市","绿春县","大兴镇","建水县","临安镇","石屏县","异龙镇","弥勒县","弥阳镇","泸西县","中枢镇","元阳县","南沙镇","红河县","迤萨镇","金平苗族瑶族傣族自治县","金河镇","河口瑶族自治县","河口镇","屏边苗族自治县","玉屏镇"]);  
    dsy.add("0_24_14",["文山县","开化镇","砚山县","江那镇","西畴县","西洒镇","麻栗坡县","麻栗镇","马关县","马白镇","丘北县","锦屏镇","广南县","莲城镇","富宁县","新华镇"]);  
    dsy.add("0_24_15",["景洪市","勐海县","勐海镇","勐腊县","勐腊镇"]);  
    dsy.add("0_24",["昆明市","曲靖市","玉溪市","保山市","昭通市","丽江市","思茅市","临沧市","德宏州","怒江州","迪庆州","大理州","楚雄州","红河州","文山州","西双版纳州"]);  
    dsy.add("0_25_0",["城关区","林周县","甘丹曲果镇","当雄县","当曲卡镇","尼木县","塔荣镇","曲水县","曲水镇","堆龙德庆县","东嘎镇","达孜县","德庆镇","墨竹工卡县","工卡镇"]);  
    dsy.add("0_25_1",["那曲县","那曲镇","嘉黎县","阿扎镇","比如县","比如镇","聂荣县","聂荣镇","安多县","帕那镇","申扎县","申扎镇","索县","亚拉镇","班戈县","普保镇","巴青县","拉西镇","尼玛县","尼玛镇"]);  
    dsy.add("0_25_2",["昌都县","城关镇","江达县","江达镇","贡觉县","莫洛镇","类乌齐县","桑多镇","丁青县","丁青镇","察雅县","烟多镇","八宿县","白玛镇","左贡县","旺达镇","芒康县","嘎托镇","洛隆县","孜托镇","边坝县","草卡镇"]);  
    dsy.add("0_25_3",["林芝县","八一镇","工布江达县","工布江达镇","米林县","米林镇","墨脱县","墨脱镇","波密县","扎木镇","察隅县","竹瓦根镇","朗县","朗镇"]);  
    dsy.add("0_25_4",["乃东县","泽当镇","扎囊县","扎塘镇","贡嘎县","吉雄镇","桑日县","桑日镇","琼结县","琼结镇","曲松县","曲松镇","措美县","措美镇","洛扎县","洛扎镇","加查县","安绕镇","隆子县","隆子镇","错那县","错那镇","浪卡子县","浪卡子镇"]);  
    dsy.add("0_25_5",["日喀则市","南木林县","南木林镇","江孜县","江孜镇","定日县","协格尔镇","萨迦县","萨迦镇","拉孜县","曲下镇","昂仁县","卡嘎镇","谢通门县","卡嘎镇","白朗县","洛江镇","仁布县","德吉林镇","康马县","康马镇","定结县","江嘎镇","仲巴县","拉让乡","亚东县","下司马镇","吉隆县","宗嘎镇","聂拉木县","聂拉木镇","萨嘎县","加加镇","岗巴县","岗巴镇"]);  
    dsy.add("0_25_6",["噶尔县","狮泉河镇","普兰县","普兰镇","札达县","托林镇","日土县","日土镇","革吉县","革吉镇","改则县","改则镇","措勤县","措勤镇","林芝县人民政府驻地由林芝镇迁至八一镇"]);  
    dsy.add("0_25",["拉萨市","那曲地区","昌都地区","林芝地区","山南地区","日喀则地区","阿里地区"]);  
    dsy.add("0_26_0",["莲湖区","新城区","碑林区","灞桥区","未央区","雁塔区","阎良区","临潼区","长安区","蓝田县","蓝关镇","周至县","二曲镇","户县","甘亭镇","高陵县","鹿苑镇"]);  
    dsy.add("0_26_1",["宝塔区","延长县","七里村镇","延川县","延川镇","子长县","瓦窑堡镇","安塞县","真武洞镇","志丹县","保安镇","吴起县","吴旗镇","甘泉县","城关镇","富县","富城镇","洛川县","凤栖镇","宜川县","丹州镇","黄龙县","石堡镇","黄陵县","桥山镇"]);  
    dsy.add("0_26_2",["耀州区","王益区","印台区","宜君县","城关镇"]);  
    dsy.add("0_26_3",["临渭区","华阴市","韩城市","华县","华州镇","潼关县","城关镇","大荔县","城关镇","蒲城县","城关镇","澄城县","城关镇","白水县","城关镇","合阳县","城关镇","富平县","窦村镇"]);  
    dsy.add("0_26_4",["秦都区","杨陵区","渭城区","兴平市","三原县","城关镇","泾阳县","泾干镇","乾县","城关镇","礼泉县","城关镇","永寿县","监军镇","彬县","城关镇","长武县","昭仁镇","旬邑县","城关镇","淳化县","城关镇","武功县","普集镇"]);  
    dsy.add("0_26_5",["渭滨区","金台区","陈仓区","凤翔县","城关镇","岐山县","凤鸣镇","扶风县","城关镇","眉县","首善镇","陇县","城关镇","千阳县","城关镇","麟游县","九成宫镇","凤县","双石铺镇","太白县","嘴头镇"]);  
    dsy.add("0_26_6",["汉台区","南郑县","城关镇","城固县","博望镇","洋县","洋州镇","西乡县","城关镇","勉县","勉阳镇","宁强县","汉源镇","略阳县","城关镇","镇巴县","泾洋镇","留坝县","城关镇","佛坪县","袁家庄镇"]);  
    dsy.add("0_26_7",["榆阳区","神木县","神木镇","府谷县","府谷镇","横山县","横山镇","靖边县","张家畔镇","定边县","定边镇","绥德县","名州镇","米脂县","银州镇","佳县","佳芦镇","吴堡县","宋家川镇","清涧县","宽洲镇","子洲县","双湖峪镇"]);  
    dsy.add("0_26_8",["汉滨区","汉阴县","城关镇","石泉县","城关镇","宁陕县","城关镇","紫阳县","城关镇","岚皋县","城关镇","平利县","城关镇","镇坪县","城关镇","旬阳县","城关镇","白河县","城关镇"]);  
    dsy.add("0_26_9",["商州区","洛南县","城关镇","丹凤县","龙驹寨镇","商南县","城关镇","山阳县","城关镇","镇安县","永乐镇","柞水县","乾佑镇"]);  
    dsy.add("0_26",["西安市","延安市","铜川市","渭南市","咸阳市","宝鸡市","汉中市","榆林市","安康市","商洛市"]);  
    dsy.add("0_27_0",["城关区","七里河区","西固区","安宁区","红古区","永登县","城关镇","皋兰县","石洞镇","榆中县","城关镇"]);  
    dsy.add("0_27_1",["金昌市","金川区","永昌县","城关镇"]);  
    dsy.add("0_27_2",["白银区","平川区","靖远县","乌兰镇","会宁县","会师镇","景泰县","一条山镇"]);  
    dsy.add("0_27_3",["秦州区","麦积区","清水县","永清镇","秦安县","兴国镇","甘谷县","大像山镇","武山县","城关镇","张家川回族自治县","张家川镇"]);  
    dsy.add("0_27_4",["凉州区","民勤县","城关镇","古浪县","古浪镇","天祝藏族自治县","华藏寺镇"]);  
    dsy.add("0_27_5",["肃州区","玉门市","敦煌市","金塔县","金塔镇","安西县","渊泉镇","肃北蒙古族自治县","党城湾镇","阿克塞哈萨克族自治县","红柳湾镇"]);  
    dsy.add("0_27_6",["甘州区","民乐县","洪水镇","临泽县","沙河镇","高台县","城关镇","山丹县","清泉镇","肃南裕固族自治县","红湾寺镇"]);  
    dsy.add("0_27_7",["西峰区","庆城县","庆城镇","环县","环城镇","华池县","柔远镇","合水县","西华池镇","正宁县","山河镇","宁县","新宁镇","镇原县","城关镇"]);  
    dsy.add("0_27_8",["崆峒区","泾川县","城关镇","灵台县","中台镇","崇信县","锦屏镇","华亭县","东华镇","庄浪县","水洛镇","静宁县","城关镇"]);  
    dsy.add("0_27_9",["安定区","通渭县","平襄镇","临洮县","洮阳镇","漳县","武阳镇","岷县","岷阳镇","渭源县","清源镇","陇西县","巩昌镇"]);  
    dsy.add("0_27_10",["武都区","成县","城关镇","宕昌县","城关镇","康县","文县","城关镇","西和县","汉源镇","礼县","城关镇","两当县","城关镇","徽县","城关镇"]);  
    dsy.add("0_27_11",["临夏市","临夏县","韩集镇","康乐县","附城镇","永靖县","刘家峡镇","广河县","城关镇","和政县","城关镇","东乡族自治县","锁南坝镇","积石山保安族东乡族撒拉族自治县","吹麻滩镇"]);  
    dsy.add("0_27_12",["合作市","临潭县","城关镇","卓尼县","柳林镇","舟曲县","城关镇","迭部县","电尕镇","玛曲县","尼玛镇","碌曲县","玛艾镇","夏河县","拉卜楞镇"]);  
    dsy.add("0_27",["兰州市","嘉峪关市","白银市","天水市","武威市","酒泉市","张掖市","庆阳市","平凉市","定西市","陇南市","临夏州","甘南州"]);  
    dsy.add("0_28_0",["城中区","城东区","城西区","城北区","大通回族土族自治县","桥头镇","湟源县","城关镇","湟中县","鲁沙尔镇"]);  
    dsy.add("0_28_1",["平安县","平安镇","乐都县","碾伯镇","民和回族土族自治县","川口镇","互助土族自治县","威远镇","化隆回族自治县","巴燕镇","循化撒拉族自治县","积石镇"]);  
    dsy.add("0_28_2",["海晏县","三角城镇","祁连县","八宝镇","刚察县","沙柳河镇","门源回族自治县","浩门镇"]);  
    dsy.add("0_28_3",["共和县","恰卜恰镇","同德县","尕巴松多镇","贵德县","河阴镇","兴海县","子科滩镇","贵南县","茫曲镇"]);  
    dsy.add("0_28_4",["同仁县","隆务镇","尖扎县","马克唐镇","泽库县","泽曲镇","河南蒙古族自治县","优干宁镇"]);  
    dsy.add("0_28_5",["玛沁县","大武镇","班玛县","赛来塘镇","甘德县","柯曲镇","达日县","吉迈镇","久治县","智青松多镇","玛多县","黄河乡"]);  
    dsy.add("0_28_6",["玉树县","结古镇","杂多县","萨呼腾镇","称多县","称文镇","治多县","加吉博洛镇","囊谦县","香达镇","曲麻莱县","约改镇"]);  
    dsy.add("0_28_7",["德令哈市","格尔木市","乌兰县","希里沟镇","都兰县","察汗乌苏镇","天峻县","新源镇"]);  
    dsy.add("0_28",["西宁市","海东地区","海北州","海南州","黄南州","果洛州","玉树州","海西州"]);  
    dsy.add("0_29_0",["兴庆区","金凤区","西夏区","灵武市","永宁县","杨和镇","贺兰县","习岗镇"]);  
    dsy.add("0_29_1",["大武口区","惠农区","平罗县","城关镇"]);  
    dsy.add("0_29_2",["利通区","青铜峡市","盐池县","花马池镇","同心县","豫海镇"]);  
    dsy.add("0_29_3",["原州区","西吉县","吉强镇","隆德县","城关镇","泾源县","香水镇","彭阳县","白阳镇"]);  
    dsy.add("0_29_4",["沙坡头区","中宁县","海原县"]);  
    dsy.add("0_29",["银川市","石嘴山市","吴忠市","固原市","中卫市"]);  
    dsy.add("0_30_0",["天山区","沙依巴克区","新市区","水磨沟区","头屯河区","达坂城区","东山区","乌鲁木齐县","乌鲁木齐市水磨沟区"]);  
    dsy.add("0_30_1",["克拉玛依区","独山子区","白碱滩区","乌尔禾区"]);  
    dsy.add("0_30_2",["石河子市","阿拉尔市","图木舒克市","五家渠市"]);  
    dsy.add("0_30_3",["喀什市","疏附县","托克扎克镇","疏勒县","疏勒镇","英吉沙县","英吉沙镇","泽普县","泽普镇","莎车县","莎车镇","叶城县","喀格勒克镇","麦盖提县","麦盖提镇","岳普湖县","岳普湖镇","伽师县","巴仁镇","巴楚县","巴楚镇","塔什库尔干塔吉克自治县","塔什库尔干镇"]);  
    dsy.add("0_30_4",["阿克苏市","温宿县","温宿镇","库车县","库车镇","沙雅县","沙雅镇","新和县","新和镇","拜城县","拜城镇","乌什县","乌什镇","阿瓦提县","阿瓦提镇","柯坪县","柯坪镇"]);  
    dsy.add("0_30_5",["和田市","和田县","墨玉县","喀拉喀什镇","皮山县","固玛镇","洛浦县","洛浦镇","策勒县","策勒镇","于田县","木尕拉镇","民丰县","尼雅镇"]);  
    dsy.add("0_30_6",["吐鲁番市","鄯善县","鄯善镇","托克逊县","托克逊镇"]);  
    dsy.add("0_30_7",["哈密市","伊吾县","伊吾镇","巴里坤哈萨克自治县","巴里坤镇"]);  
    dsy.add("0_30_8",["阿图什市","阿克陶县","阿克陶镇","阿合奇县","阿合奇镇","乌恰县","乌恰镇"]);  
    dsy.add("0_30_9",["博乐市","精河县","精河镇","温泉县","博格达尔镇"]);  
    dsy.add("0_30_10",["昌吉市","阜康市","米泉市","呼图壁县","呼图壁镇","玛纳斯县","玛纳斯镇","奇台县","奇台镇","吉木萨尔县","吉木萨尔镇","木垒哈萨克自治县","木垒镇"]);  
    dsy.add("0_30_11",["库尔勒市","轮台县","轮台镇","尉犁县","尉犁镇","若羌县","若羌镇","且末县","且末镇","和静县","和静镇","和硕县","特吾里克镇","博湖县","博湖镇","焉耆回族自治县","焉耆镇"]);  
    dsy.add("0_30_12",["伊宁市","奎屯市","伊宁县","吉里于孜镇","霍城县","水定镇","巩留县","巩留镇","新源县","新源镇","昭苏县","昭苏镇","特克斯县","特克斯镇","尼勒克县","尼勒克镇","察布查尔锡伯自治县","察布查尔镇"]);  
    dsy.add("0_30_13",["塔城市","乌苏市","额敏县","额敏镇","沙湾县","三道河子镇","托里县","托里镇","裕民县","哈拉布拉镇","和布克赛尔蒙古自治县","和布克赛尔镇"]);  
    dsy.add("0_30_14",["阿勒泰市","布尔津县","布尔津镇","富蕴县","库额尔齐斯镇","福海县","哈巴河县","青河县","吉木乃县"]);  
    dsy.add("0_30",["乌鲁木齐市","克拉玛依市","自治区直辖县级行政单位","喀什地区","阿克苏地区","和田地区","吐鲁番地区","哈密地区","克孜勒苏柯州","博尔塔拉州","昌吉州","巴音郭楞州","伊犁州","塔城地区","阿勒泰地区"]);  
    dsy.add("0_31_0",["中西区","东区","九龙城区","观塘区","南区","深水埗区","湾仔区","黄大仙区","油尖旺区","离岛区","葵青区","北区","西贡区","沙田区","屯门区","大埔区","荃湾区","元朗区"]);  
    dsy.add("0_31",["香港特别行政区"]);  
    dsy.add("0_32_0",["澳门特别行政区"]);  
    dsy.add("0_32",["澳门特别行政区"]);  
    dsy.add("0_33_0",[" "]);  
    dsy.add("0_33",["台北","高雄","台中","花莲","基隆","嘉义","金门","连江","苗栗","南投","澎湖","屏东","台东","台南","桃园","新竹","宜兰","云林","彰化"]);  
    dsy.add("0",["北京市","天津市","上海市","重庆市","河北省","山西省","内蒙古","辽宁省","吉林省","黑龙江省","江苏省","浙江省","安徽省","福建省","江西省","山东省","河南省","湖北省","湖南省","广东省","广西","海南省","四川省","贵州省","云南省","西藏","陕西省","甘肃省","青海省","宁夏","新疆","香港","澳门","台湾省"]);  
        $.prototype.area=function(province,city,county){  
            var s=[province,city,county];  
            var opt0 = ["省份","地级市","市、县级市"];  
            ar=dsy.Items["0"];  
            for(i=0;i<ar.length;i++){  
                $("#"+s[0])[0].options[i]=new Option(ar[i],ar[i]);  
            }  
            var pid="";  
            var cid="";  
            $("#"+s[0]).change(function(){  
                    pid=this.selectedIndex;  
                    str="0_"+pid;  
                    if(dsy.Exists(str)){  
                        ar = dsy.Items[str];  
                        $("#"+s[1]).empty();  
                        for(i=0;i<ar.length;i++){  
                              
                            $("#"+s[1])[0].options[i]=new Option(ar[i],ar[i]);     
                        }  
                        $("#"+s[1]).change();     
                    }  
            });  
            $("#"+s[1]).change(function(){  
                    cid=this.selectedIndex;  
                    str="0_"+pid+"_"+cid  
                    if(dsy.Exists(str)){  
                        ar = dsy.Items[str];  
                        $("#"+s[2]).empty();  
                        for(i=0;i<ar.length;i++){  
                              
                            $("#"+s[2])[0].options[i]=new Option(ar[i],ar[i]);     
                        }  
                    }  
            });  
        }  
    })(jQuery);  


	function aaaa()
	{
		location.href="{{ URL::route('Login/publish2') }}";
	}
</script>