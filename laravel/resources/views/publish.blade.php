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
			<dl class="homesInfo clearfix">
				<dt><span class="fr">地理位置：</span><em class="notNull"></em></dt>
				<dl id="myLocation" style="margin-left:100px;">
			  	</dd>
			  	<dd>
					<a class="addAdress-btn" id="addNewPosition">+添加地址</a>
			  	</dd>
			</dl>
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
			<a class="save" id="baseSave" href="javascript:void(0);"  onclick="javascript:roomFormSubmit();return false;">保存，下一步</a>
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
					<select class="SmallPSelect" name="province" id="province">
						<option value="">请选择</option>
							<option  province_name="北京市" value ="1">北京</option>
							<option  province_name="上海市" value ="2">上海</option>
							<option  province_name="天津市" value ="3">天津</option>
							<option  province_name="重庆市" value ="4">重庆</option>
							<option  province_name="广东省" value ="5">广东</option>
							<option  province_name="四川省" value ="6">四川</option>
							<option  province_name="浙江省" value ="7">浙江</option>
							<option  province_name="贵州省" value ="8">贵州</option>
							<option  province_name="辽宁省" value ="9">辽宁</option>
							<option  province_name="江苏省" value ="10">江苏</option>
							<option  province_name="福建省" value ="11">福建</option>
							<option  province_name="河北省" value ="12">河北</option>
							<option  province_name="河南省" value ="13">河南</option>
							<option  province_name="吉林省" value ="14">吉林</option>
							<option  province_name="黑龙江省" value ="15">黑龙江</option>
							<option  province_name="山东省" value ="16">山东</option>
							<option  province_name="安徽省" value ="17">安徽</option>
							<option  province_name="广西壮族自治区" value ="18">广西</option>
							<option  province_name="海南省" value ="19">海南</option>
							<option  province_name="内蒙古自治区" value ="20">内蒙古</option>
							<option  province_name="山西省" value ="21">山西</option>
							<option  province_name="宁夏自治区" value ="22">宁夏</option>
							<option  province_name="甘肃省" value ="23">甘肃</option>
							<option  province_name="陕西省" value ="24">陕西</option>
							<option  province_name="青海省" value ="25">青海</option>
							<option  province_name="湖北省" value ="26">湖北</option>
							<option  province_name="湖南省" value ="27">湖南</option>
							<option  province_name="江西省" value ="28">江西</option>
							<option  province_name="云南省" value ="29">云南</option>
							<option  province_name="新疆维吾尔自治区" value ="30">新疆</option>
							<option  province_name="西藏自治区" value ="31">西藏</option>
							<option  province_name="其他" value ="32">其他</option>
							<option  province_name="香港特别行政区" value ="33">香港</option>
							<option  province_name="澳门特别行政区" value ="35">澳门</option>
							<option  province_name="台湾省" value ="36">台湾</option>
					</select><span id="provinceSpan">省</span>
					<select class="SmallPSelect" name="city" id="city">
						<option value="">请选择</option>
					</select><span id="citySpan">市</span>
					<select class="MiddlePriceSelect" name="district" id="district">
						<option value="">请选择</option>
					</select><span>区</span>
					<select class="selectborder" name="street" id="street">
						<option value="">请选择</option>
					</select><span id="streetSpan">街道</span>
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