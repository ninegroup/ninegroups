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
	                            <p class="textCt"><a href="{{URL('unset1')}}" id="loginoutbut" target="_self" class="stclick" clicktag="1_6">退出登录</a></p>
	                        </div>
	                    </div>
	                </div>
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
	
	<!--增加房东上传头像功能开始-->
	<input type="hidden" id="isHavePic" value="isHavePic">
	<!--增加房东上传头像功能结束-->	
		
	<div class="homes-con" style="margin-top:0px;">
		<div class="homesTitle">
			<div class="homesTitlebg">
			房源信息
			</div>
		</div>
		<form autocomplete="off" name="roomform" action="{{URL('addhouse1')}}"  method = "post">
		<input type="hidden" name="roomId" id="roomId" value=""/>
		<input type="hidden" name="flag" id="flag" value=""/>
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		<input type="hidden" name="ctx" id="ctx" value="" />
		<input type="hidden" name="cookprice" id="cookprice" value="0" />
		<div class="homes">
			<dl class="homesInfo clearfix">
            	<label class="rentType">
					<dt><span class="fr">出租房位置：</span><em class="notNull"></em></dt>
					<p><input type="text" maxlength="6" class="largeInput fl" name="h_city"/></p>
				</label>
            </dl>

		
			<dl class="homesInfo clearfix">
				<dt><span class="fr">是否地下室：</span><em class="notNull"></em></dt>
				<dd>
					<select class="largeSelect" name="h_message" >
                        <option value="不是地下室" >否</option>
                        <option value="地下室" >地下室</option>
                        <option value="半地下室" >半地下室</option>
					</select>
				</dd>
			</dl>
			<dl class="homesInfo clearfix">
				<dt><span class="fr">居住人数：</span><em class="notNull" ></em></dt>
				<dd>
					<label><input maxlength="6" class="largeInput fl" type="text" name="h_people" id="area" value="" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"/></label>
					<span class="fl">人</span>
				</dd>
			</dl>

			<dl class="homesInfo clearfix">
				<dt><span class="fr">同类房源：</span><em class="notNull"></em></dt>
				<dd>
					<label><input maxlength="3" type="text" name="h_state" id="stock" class="largeInput fl" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></label>
					<span class="fl">&nbsp;套</span>
					<span class="fl ml30">户型、装修、陈设、价格相同的房间（含此房源在内）</span>
				</dd>
			</dl>
			<dl class="homesDescribe clearfix">
				<dt><span class="fr">特色标题：</span><em class="notNull"></em></dt>
				<dd>
					<label><input type="text" maxlength="22" minlength="5" class="larLargeInput clickhs fl hasPlaceholder" id="title" name="h_title" value="" placeholder="例如：近鼓楼大街地铁站温馨便捷的两居房"></label>
                    <span class="lineh28">(5-22字，不能含有公寓、宾馆等词语)</span>
				</dd>
			</dl>
			<dl class="homesDescribe clearfix">
			<input  type="hidden" name="" id="detail" value="" />
				<dt>
					<span class="fr">房屋内部情况介绍：</span>
					<em class="notNull"></em>
					<span class="wordNumber">（50字以上）</span>
				</dt>
				<dd>
					<label>
						<textarea class="textArea hasPlaceholder" id="intro" name="h_content" placeholder="如户型、面积、装修、家具家电、网络情况等"></textarea>
					</label>
				</dd>
			</dl>
			<dl class="homesDescribe clearfix">
				<dt>
					<span class="fr">地理位置/地标建筑：</span>
					<span class="wordNumber"></span>
				</dt>
				<dd>
					<label>
						<textarea class="textArea hasPlaceholder" maxlength="1000" id="landmark" name="h_site" placeholder="如具体地点、周围的标志性建筑等"></textarea>
					</label>
				</dd>
			</dl>
			<dl class="homesDescribe clearfix">
				<dt>
					<span class="fr">房源入住须知：</span>
					<span class="wordNumber"></span>
				</dt>
				<dd>
					<label>
						<textarea class="textArea hasPlaceholder" maxlength="1000" id="landmark1" name="h_checkin" placeholder="请填写您的房间入住须知"></textarea>
					</label>
				</dd>
			</dl>
			<dl class="homesDescribe clearfix">
				<dt>
					<span class="fr">房屋配套设施</span>
					<span class="wordNumber"></span>
				</dt>
				<dd>
					<label>
						<textarea class="textArea hasPlaceholder" maxlength="1000" id="landmark11" name="h_mating" placeholder="请填写您的房间配套设施"></textarea>
					</label>
				</dd>
			</dl>
			<ul class="price-set">
					<li>
						<div class="dayPrice">
							<span class="price-title"><b>*</b>每日价格：</span>
							<input maxlength="5" class="LargePriceInput" type="text" name="h_price" id="dayprice" value="" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"  autocomplete="off"/>
							元/天
						</div>
					</li>                  
				</ul>
		</div>
		<input type="hidden" id="positionId4Edit" name="roomLocationId" value="" />
		<div class="submit-wrap">
			<input type="submit" value="保存,下一步" class="save" id="detailSave"/>
		</div>
	</form>
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
<div style="margin-top:150px;"></div>
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
