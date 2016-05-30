<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <link rel="shortcut icon" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <link rel="bookmark" href="http://staticfile.tujia.com/PortalSite/Images/favicon.ico" type="image/x-icon" />
    <title>
        个人资料- 久久租
    </title>
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/css_user?v=5e55fe5" />
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/usersite/styles/user-data.css?v=5e55fe5" />
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/usersite/styles/base.css?v=5e55fe5" />
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/usersite/styles/common.css?v=5e55fe5" />
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/base/powerfloat.css?v=5e55fe5" />

    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/im.css?v=5e55fe5" />
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/menu.css?v=5e55fe5" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/jquery.js?v=5e55fe5"></script>
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/colorbox.css?v=5e55fe5" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/colorbox.js?v=5e55fe5"></script>

    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_user_head?v=5e55fe5"></script>
    <script src="http://staticfile.tujia.com/PortalSite2/Scripts/Base/validator.unobtrusive.js" type="text/javascript"></script>
    <script src="http://staticfile.tujia.com/Common/Scripts/jquery.unobtrusive-ajax.js" type="text/javascript"></script>
    <script src="http://staticfile.tujia.com/Common/Scripts/swfobject.js" type="text/javascript"></script>
    <script type="text/javascript" src="http://staticfile.tujia.com/Common/Scripts/fullAvatarEditor.js"></script>

    <script type="text/javascript">
        //window["WEB_XHR_POLLING"] = true;
        var MESSAGE_RADIO = "http://staticfile.tujia.com/PortalSite2/radio/message.wav", ORDERNOTICE_RADIO = "http://staticfile.tujia.com/PortalSite2/radio/ordernotice.wav";
    </script>
</head>
<body>
<!--M-81-129-->
<!-- head  start-->

<!-- head  end -->
<div  class="container_24">
    <div class="grid_24" id="dir"><a href="http://localhost/web/snail/laravel/public/">久久租</a><em>&gt;</em>个人资料</div>
</div>
<div class="container_24 clearfix" id="orderWrapper">
    <div class="grid_5">
        <div remindsummaryurl="/WebParts/Portal/UserMessageSummary"></div>
        <div class="userInfoWrapper">
            <p>
        <span class="fb" style="font-size: 15px">
        	个人中心
        </span>
                <br />
        
                <br />
            </p>
        </div>
        <div class="navWrapper">
            <h5>我的订单</h5>
            <ul>
                <li><a id="myorders" href="order" class="current" onclick="_gaq.push(['_trackEvent', 'pcUserInfo', '订单管理']);">订单管理<span></span></a></li>
            </ul>
        </div>
        <div class="navWrapper">
            <h5>
                个人中心
            </h5>
            <ul>
                <li><a id="myUserInfoInfo" href="{{URL::route('Index/userList')}}" >个人资料</a></li>
            </ul>
        </div>
		<!-- <div class="navWrapper">
		            <h5>
		                收藏管理
		            </h5>
		            <ul>
		                <li><a id="myUserInfoInfo" href="{{URL::route('Details/CollectList')}}" >收藏列表</a></li>
		            </ul>
		        </div> -->
    </div>
    
    <div class="grid_19" id="order">
        <form action="{{URL::route('Index/userGai')}}"  method="post"  enctype='multipart/form-data' >
            <div class="wrapper">
                <input data-val="true" data-val-number="字段 Id 必须是一个数字。" data-val-required="Id 字段是必需的。" id="Id" name="Id" type="hidden" value="4310990" />
                <div class="clearfix">
                    <!-- 主体左侧导航 -->
                    <div class="main-nav m-fl">
                        <!-- 右侧主体内容 -->
                        <div class="main-con m-fl" style="width: auto;">
                            <div class="u-box">
                                <div class="ud-tit">个人资料</div>

                                <div class="ud-con">
                                    <div class="clearfix">
                                        <div class="data-result m-fl">
                                          
                                                <a href=""><div href="" class="usp-bg">
                                                <span><img src="" alt=""/></span>
                                            </div></a>
										
                                            <div class="usp-info">
                                               
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


						 <div class="group-cont">
                                         <label class="lb-txt">用户名：</label><input id="LoginName" maxlength="15" name="LoginName" type="hidden" value="{{$db->u_name}}" /><strong class="lb-info">{{$db->u_name}}</strong>
                         </div>
                                                <div class="group-cont">
                                                    <label class="lb-txt">绑定手机：</label><strong class="lb-info">{{$db->u_tel}}</strong>
                                                </div>
                                            </div>
                               
                                        </div>

                                    </div>
                                    <div class="blank-box">
                                        <div class="form">
                                            <div class="control-group ">
                                                <span class="controls-span">真实姓名：</span>
                                                <div class="controls">
                                                    <input id="Name_Old" name="Name_Old" type="hidden" value="" />
                                                    <input class="ipt-lg" maxlength="15" name="realname" type="text" value="{{$db->realname}}"/>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <span class="field-validation-valid" data-valmsg-for="Name"  name='sname' id='sname' style="color:red"></span>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <span class="controls-span">性别：</span>
                                                <div class="controls" >
                                                    <input data-val="true" data-val-required="Sex 字段是必需的。" id="Sex" name="Sex" type="hidden" value="Male" />
                                            <span >
                                                <?php if($db->u_sex==''){?>
										<input type="radio"  name="u_sex"   value="男" /> 男&nbsp;
										<input type="radio"  name="u_sex"   value="女" /> 女&nbsp;
									<?php }else if($db->u_sex=='男'){?>
										<input type="radio"  name="u_sex"   value="男" checked/> 男&nbsp;
										<input type="radio"  name="u_sex"   value="女" /> 女sss&nbsp;
									<?php }else{?>
										<input type="radio"  name="u_sex"   value="男" /> 男&nbsp;
										<input type="radio"  name="u_sex"   value="女" checked/> 女&nbsp;
										<?php }?>
                                            </span>
                                                </div>
                                            </div>

											<div class="control-group ">
                                                <span class="controls-span">手机号码：</span>
                                                <div class="controls">
                                                    <input class="ipt-lg" maxlength="15" name="u_tel" type="text" value="{{$db->u_tel}}"/>
                                                    &nbsp;&nbsp;&nbsp;
                                                    <span class="field-validation-valid" data-valmsg-for="Name"  name='sname' id='' style="color:red"></span>
                                                </div>
                                            </div>                          
                                    <div class="control-group submit-group">
                                        <div class="controls">
                                            <input name="_token" value="{{csrf_token()}}" type="hidden"/>
                                            <input type="submit" value="修改并提交"  /></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </form>
            <div id="div_ZMAlert" class="pop-outer userData-pop" style="display:none">

            </div>
    </div>
    <div id="maskWrap" class="mask dn"></div>

</div>
</div>
<!-- footer Start -->
<!-- footer  End -->
<div class="edm-pop " id="dialog" style="display: none">
    <div class="edm-hd"><h2>订阅邮件</h2><a class="close-btn" title="关闭"></a></div>
    <div class="edm-bd">
        <div class="msg-box">
            <img src="http://staticfile.tujia.com/portalsite2/images/loading.gif"/>正在提交订阅
        </div>
    </div>
</div>
<script type="text/javascript">
    var _mvq = _mvq || [];
    _mvq.push(
            ['$setAccount', 'm-21039-1'],
            ['$logConversion']
    );
    (function () {
        var mvjs = document.createElement('script');
        mvjs.type = 'text/javascript';
        mvjs.async = true;
        mvjs.src = ('https:' == document.location.protocol ? 'https://static-ssl' : 'http://static') + ".mediav.com/mv.js";
        (document.getElementsByTagName('head')[0] ||
        document.getElementsByTagName('body')[0]).appendChild(mvjs);
    })();
</script>

<script type="text/javascript">
    setTimeout(function(){var a=document.createElement("script");
        var b=document.getElementsByTagName("script")[0];
        a.src=document.location.protocol+"//script.crazyegg.com/pages/scripts/0025/8248.js?"+Math.floor(new Date().getTime()/3600000);
        a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<script>
    (function () {

        var bp = document.createElement('script');
        bp.async = 'async';
        bp.src = '//push.zhanzhang.baidu.com/push.js';
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
<script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/RongIMLib-2.1.0.min.js?v=5e55fe5"></script>
<script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/im_v2.js?v=5e55fe5"></script>

<script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_user_foot?v=5e55fe5"></script>
<!-- <script type="text/javascript">
    $(document).ready(function () {



        $(".j-detail-email").powerFloat({
            container: "plugin",
            reverseSharp: true,
            position: "7-5"
        });

        $(".j-detail-mobile").powerFloat({
            container: "plugin",
            reverseSharp: true,
            position: "7-5"
        });

        loadProvince(0);
        loadProvinceNow(0);
        loadCityNow(0,0);
        loadCity(0,0);

        /*$("#select_Province").change(function () {
         var provinceid = $("#select_Province").val();
         loadCity(provinceid);

         });*/

        $(".close-btn").bind("click",function(){
            $("#div_InterestAdd").css("display","none");
            $("#div_InterestAddInner").css("display","none");
        })

        /*$("#select_ProvinceNow").change(function () {
         var provinceNowid = $("#select_ProvinceNow").val();
         loadCityNow(provinceNowid);
         });*/

        $("#myinfo").addClass("current");


        var $order = $("#order");

        $("a.usp-bg").click(function () {
            $.get("/UserInfo/AvatarUpload", function (data) {
                $order.empty().append(data);
                document.title = "上传头像";
            });
        });

        $(document).bind("click", function (e) {
            var target = $(e.target);
            if (target.closest("#div_Year").length == 0) {
                $("#div_Year").css("overflow", "hidden");
            }
            if (target.closest("#div_Month").length == 0) {
                $("#div_Month").css("overflow", "hidden");
            }
            if (target.closest("#div_Date").length == 0) {
                $("#div_Date").css("overflow", "hidden");
            }
            if (target.closest("#div_Education").length == 0) {
                $("#div_Education").css("overflow", "hidden");
            }
        })

        initializeDate();

        $("#div_Education").bind("click", (function () {
            if ($(this).css("overflow") == "hidden") {
                $(this).css("overflow", "initial");
            } else {
                $(this).css("overflow", "hidden");
            }
        }))


    });

    function div_Msg_Cancel_Click(){
        $("#div_Msg").css("display","none");
        $("#div_MsgInner").css("display","none");
    }

    function Submit_Click(){

        $("#UpdateInfo").submit();

    }

    function input_Changed(event,inputValue){
        $("#div_ZMAlert").css("display","");
        $("#div_ZMAlertInner").css("display","");
        $("#a_CancelChange").on("click",function (){
            $("#div_ZMAlert").css("display","none");
            $("#div_ZMAlertInner").css("display","none");
            $(event).val(inputValue);
        });
        $("#a_SubmitChange").on("click",function (){
            $("#div_ZMAlert").css("display","none");
            $("#div_ZMAlertInner").css("display","none");
            $(event).removeAttr("oninput")
        })
    }

    function i_CancelChange(){
        $("#div_ZMAlert").css("display","none");
        $("#div_ZMAlertInner").css("display","none");
    }

    function bindZM_Click(){
        $("#div_BindZM").css("display","");
        $("#div_BindZMInner").css("display","");
        $("#a_SendZM").css("display","");
        $("#a_SendingZM").css("display","none");
        $("#input_ZMName").val("");
        $("#input_ZMCardNo").val("");
    }
    function closeDiv_BindZM(){
        $("#div_BindZM").css("display","none");
        $("#div_BindZMInner").css("display","none");
    }

    function SendZM(){
        var zMName = $("#input_ZMName").val();
        var zMCardNo = $("#input_ZMCardNo").val();
        if(zMName==null||zMName==""){
            $("#span_ZMName").addClass(" error");
            return;
        }else{
            $("#span_ZMName").removeClass("error");
        }
        if(zMCardNo==null||zMCardNo==""){
            $("#span_ZMCardNo").addClass(" error");
            return;
        }else{
            $("#span_ZMCardNo").removeClass("error");
        }
        $("#a_SendZM").css("display","none");
        $("#a_SendingZM").css("display","");
        $.ajax({
            type:"get",
            dataType: "json",
            url:"/UserInfo/ZmSend",
            data:{"cardNo":zMCardNo,"name":zMName},
            success: function (result) {
                var msg = result;
                if(result.IsSuccess){
                    //window.open(result.Url) ;
                    if(result.Url == "reload"){
                        window.location.reload();
                    }else{
                        window.location.href=result.Url;
                    }
                }else{
                    alert(result.Message);
                    $("#a_SendZM").css("display","");
                    $("#a_SendingZM").css("display","none");
                }
            },
            error:function(msg){
                var m = msg;
                alert(msg);
            }
        });
    }

    function loadProvince(provinceid) {
        if ($("#select_Province option").length > 0)
            return;
        $.ajax({
            type: "get",
            dataType: "json",
            url: "/userinfo/getprovinces",
            cache: true,
            async:false,
            success: function (msg) {
                var data = msg;
                $("#select_Province").empty();
                if(data.length>0)
                {
                    for (var i = 0; i < data.length; i++) {
                        $("#select_Province").append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
                    }
                    $("#select_Province").val(provinceid);
                }
                else
                {
                    $("#select_Province").append("<option value='0'>" + "请选择省份" + "</option>");
                }
                $("#select_Province").selectinput({
                    Offset: [5, 5],
                    autowidth: true,
                    css: {
                        rootclass: "ui-select",
                        headclass: "u-select-primary u-select-value",
                        mouseon: "mouseon",
                        current: "current"
                    },
                    change: function(){
                        loadCity(this.getValue());
                    }

                });
            }
        });
    }

    function loadProvinceNow(provinceid) {
        if ($("#select_ProvinceNow option").length > 0)
            return;
        $.ajax({
            type: "get",
            dataType: "json",
            url: "/userinfo/getprovinces",
            cache: true,
            success: function (msg) {
                var data = msg;
                $("#select_ProvinceNow").empty();
                if(data.length>0)
                {
                    for (var i = 0; i < data.length; i++) {
                        $("#select_ProvinceNow").append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
                    }
                    $("#select_ProvinceNow").val(provinceid);
                }
                else
                {
                    $("#select_ProvinceNow").append("<option value='0'>" + "请选择省份" + "</option>");
                }
                $("#select_ProvinceNow").selectinput({
                    Offset: [5, 5],
                    autowidth: true,
                    css: {
                        rootclass: "ui-select",
                        headclass: "u-select-sm u-select-value",
                        mouseon: "mouseon",
                        current: "current"
                    },
                    change: function(){
                        loadCityNow(this.getValue());
                    }
                });
            }
        });
    }

    function loadCity(provinceid,cityID) {
        $("#select_City").empty();
        if (provinceid > 0) {
            $.ajax({
                type: "get",
                dataType: "json",
                url: "/userinfo/getcitys",
                cache: true,
                data: { provinceid: provinceid },
                success: function (msg) {
                    var data = msg;
                    if (data.length > 0) {
                        //$("#select_City").show();
                        for (var i = 0; i < data.length; i++) {
                            $("#select_City").append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
                        }
                        $("#select_City").val(cityID);
                    }
                    else {
                        $("#select_City").empty();
                        //$("#select_City").hide();
                    }

                    if($("#select_City").data("selectinput")){
                        $("#select_City").data("selectinput").repaint();
                    }else{
                        $("#select_City").selectinput({
                            Offset: [5, 5],
                            autowidth: true,
                            css: {
                                rootclass: "ui-select",
                                headclass: "u-select-primary u-select-value",
                                mouseon: "mouseon",
                                current: "current"
                            }
                        });
                    }

                }
            });
        }
    }

    function loadCityNow(provinceid,cityID) {
        $("#select_CityNow").empty();
        if (provinceid > 0) {
            $.ajax({
                type: "get",
                dataType: "json",
                url: "/userinfo/getcitys",
                cache: true,
                data: { provinceid: provinceid },
                success: function (msg) {
                    var data = msg;
                    if (data.length > 0) {
                        //$("#select_CityNow").show();
                        for (var i = 0; i < data.length; i++) {
                            $("#select_CityNow").append("<option value='" + data[i].id + "'>" + data[i].name + "</option>");
                        }
                        $("#select_CityNow").val(cityID);
                    }
                    else {
                        $("#select_CityNow").empty();
                        //$("#select_CityNow").hide();
                    }
                    if($("#select_CityNow").data("selectinput")){
                        $("#select_CityNow").data("selectinput").repaint();
                    }else{
                        $("#select_CityNow").selectinput({
                            Offset: [5, 5],
                            autowidth: true,
                            css: {
                                rootclass: "ui-select",
                                headclass: "u-select-sm u-select-value",
                                mouseon: "mouseon",
                                current: "current"
                            }
                        });
                    }

                }
            });
        }
    }

    function InterestsChanged(obj) {
        var ul = document.getElementById("ul_EnumInterest");
        var inputList = $("#ul_EnumInterest input");
        var count = 0;
        for (var i = 0; i < inputList.length; i++) {
            if (inputList.eq(i)[0].checked) {
                count++;
            }
        }
        if (count > 10) {
            obj.checked = false;
            alert("最多可以添加10个爱好！");

            return false;
        }


    }

    function deleteInterest(obj) {
        $(obj).parent().remove();
        var lblList = $("#ul_EnumInterest label");
        var listLi = $("#ul_EnumInterest input");
        var count = 0;
        var Interests = "";



        for (var i = 0; i < listLi.length; i++) {
            var listLiText = lblList.eq(i)[0].innerHTML.replace(/[^u4e00-u9fa5]/gi,"");
            if (listLi.eq(i)[0].checked&&obj.parentNode.innerHTML.indexOf(listLiText)<0) {
                if (Interests == "") {
                    Interests = listLiText;
                    count++;
                }
                else {
                    Interests += "," + listLiText;
                    count++;
                }
            }else if(listLi.eq(i)[0].checked&&obj.parentNode.innerHTML.indexOf(listLiText)>-1) {
                listLi.eq(i)[0].checked = false;

            }
        }
        $("#Interests").val(Interests);
        var countLi = 10 - count;
        if (count ==9) {

            $("#div_Interests").append("<a href='javascript:;' class='btn-sm btn-add' onclick='interestAdd()'><i class='plus-sign'>+</i>添加</a><span class='ad-warn'>还可添加<span id='span_InterestCount'>" + countLi + "</span>个爱好</span>");
        }
        else
        {
            $("#span_InterestCount").html(countLi);
        }
    }

    function interestBind() {
        $("#div_Interests").empty();
        var ul = $("#ul_EnumInterest");
        var listLi = $("#ul_EnumInterest input");
        var label = $("#ul_EnumInterest label");
        var count = 0;
        var Interests = "";
        for (var i = 0; i < listLi.length; i++) {
            if (listLi.eq(i)[0].checked) {
                if (Interests == "") {
                    Interests = label.eq(i)[0].innerHTML.replace(/[^u4e00-u9fa5]/gi,"");
                    count++;
                }
                else {
                    Interests += "," + label.eq(i)[0].innerHTML.replace(/[^u4e00-u9fa5]/gi,"");
                    count++;
                }
                $("#div_Interests").append("<span class='interest-box'>" + label.eq(i)[0].innerHTML.replace(/[^u4e00-u9fa5]/gi,"") + "<a href='javascript:;' class='its-close its-close-a'  onclick='deleteInterest(this)'>x</a></span>");
            }
        }
        if (count < 10) {
            var countLi = 10 - count;
            $("#div_Interests").append("<a href='javascript:;' class='btn-sm btn-add' onclick='interestAdd()'><i class='plus-sign'>+</i>添加</a><span class='ad-warn'>还可添加<span id='span_InterestCount'>" + countLi + "</span>个爱好</span>");
        }
        $("#Interests").val(Interests);
        $("#div_InterestAdd").css("display", "none");
        $("#div_InterestAddInner").css("display","none");

    }

    function interestAdd() {
        $("#div_InterestAdd").css("display", "");
        $("#div_InterestAddInner").css("display","");
    }

    function educationChanged(obj) {
        $("#span_Education").html(obj.innerHTML);
    }

    function signs(year,month,date) {
        var start = 1901;
        var value = "";
        var x = (start - year) % 12

        if (month == 12 && date >=22 || month == 12 && date <=31) {value = "摩羯座";}

        if (month == 1 && date >=1 || month == 1 && date <=19) {value = "摩羯座";}

        if (month == 1 && date >=20 || month == 2 && date <=18) {value = "水瓶座";}

        if (month == 2 && date >=19 || month == 3 && date <=20) {value = "双鱼座";}

        if (month == 3 && date >=21 || month == 4 && date <=20) {value = "白羊座";}

        if (month == 4 && date >=21 || month == 5 && date <=20) {value = "金牛座";}

        if (month == 5 && date >=21 || month == 6 && date <=21) {value = "双子座";}

        if (month == 6 && date >=22 || month == 7 && date <=22) {value = "巨蟹座";}

        if (month == 7 && date >=23 || month == 8 && date <=22) {value = "狮子座";}

        if (month == 8 && date >=23 || month == 9 && date <=22) {value = "处女座";}

        if (month == 9 && date >=23 || month == 10 && date <=23) {value = "天秤座";}

        if (month == 10 && date >=24 || month == 11 && date <=22) {value = "天蝎座";}

        if (month == 11 && date >=23 || month == 12 && date <=21) {value = "射手座";}



        $("#strong_Birthday").html(value);


    }

    function initializeDate() {


        $("#Year").change(function(){
            var dateOld = $("#Date").find('option:selected').val();
            var date = getDaysInMonth($("#Year").find('option:selected').val(), $("#Month").find('option:selected').val());
            $("#Date option").remove();
            for (var i = 1; i <= date; i++) {
                if (i < 10) {
                    $("#Date").append("<option value='0" + i + "'>0" + i + "</option>");
                }
                else {
                    $("#Date").append("<option value='" + i + "'>" + i + "</option>");
                }
            }
            if(dateOld<date)
            {
                $("#Date").val(dateOld);
                signs($("#Year").find('option:selected').val(), $("#Month").find('option:selected').val(),dateOld);
            }
            else
            {
                signs($("#Year").find('option:selected').val(), $("#Month").find('option:selected').val(),$("#Date").find('option:selected').val());
            }
        })

        $("#Month").change(function () {
            var dateOld = $("#Date").find('option:selected').val();
            var date = getDaysInMonth($("#Year").find('option:selected').val(), $("#Month").find('option:selected').val());

            $("#Date option").remove();
            for (var i = 1; i <= date; i++) {
                if (i < 10) {
                    $("#Date").append("<option value='0" + i + "'>0" + i + "</option>");
                }
                else {
                    $("#Date").append("<option value='" + i + "'>" + i + "</option>");
                }
            }
            if(dateOld<date)
            {
                $("#Date").val(dateOld);
                signs($("#Year").find('option:selected').val(), $("#Month").find('option:selected').val(),dateOld);
            }
            else
            {
                signs($("#Year").find('option:selected').val(), $("#Month").find('option:selected').val(),$("#Date").find('option:selected').val());
            }

        });

        $("#Date").change(function () {
            signs($("#Year").find('option:selected').val(), $("#Month").find('option:selected').val(),$("#Date").find('option:selected').val());

        });

    }

    function getDaysInMonth(year, month) {
        month = parseInt(month, 10); //parseInt(number,type)这个函数后面如果不跟第2个参数来表示进制的话，默认是10进制。
        var temp = new Date(year, month, 0);
        return temp.getDate();
    }

    function SexChanged(enumSex) {
        if (enumSex == 1) {
            $("#SexMale").addClass("active");
            $("#SexFeMale").removeClass("active");
            $("#Sex").val("Male");
        }
        else if (enumSex == 2) {
            $("#SexFeMale").addClass("active");
            $("#SexMale").removeClass("active");
            $("#Sex").val("Female");
        }

    }
    (function () {
        if (traceLog) {
            traceLog("Common", {
                pageName: "InfoIndex",
                pageId: traceData.pageId,
                prevId: getPrevId(),
                url: traceData.url,
                params: traceData.params
            });
        }
    })();
</script> -->

<script type='text/javascript' src='http://webchat.7moor.com/javascripts/7moorInit.js?accessId=797098a0-b29d-11e5-b3b1-49764155fe50&autoShow=false' async='async'></script>

<!--底部 Google analytics访问分析代码/ 百度统计 -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    _gaq.push(['_setAccount', 'UA-30952525-1']);
    _gaq.push(['_setDomainName', 'tujia.com']);
    //_gaq.push(['_setAllowHash', false]);
    _gaq.push(['_addIgnoredRef', 'tujia.com']);
    _gaq.push(['_addOrganic', 'soso', 'w']);
    _gaq.push(['_addOrganic', 'youdao', 'q']);
    _gaq.push(['_addOrganic', 'sogou', 'query']);
    _gaq.push(['_addOrganic', 'baidu', 'wd']);
    _gaq.push(['_addOrganic', 'baidu', 'word']);
    _gaq.push(['_addOrganic', 'bing', 'q']);
    _gaq.push(['_addOrganic', '360', 'q']);
    _gaq.push(['_addOrganic', '360', 'wd']);
    _gaq.push(['_addOrganic', 'so.com', 'q']);
    _gaq.push(['_addOrganic', 'so.com', 'wd']);
    if ($("#btnDianzan").length > 0) {
        $("#btnDianzan").click(function () {
            if ($(this).hasClass("active")) {
                _gaq.push(['_trackEvent', 'pcDetail', '取消点赞']);
            } else {
                _gaq.push(['_trackEvent', 'pcDetail', '点赞']);
            }
        });
    }
    if ($("#favorite").length > 0) {
        $("#favorite").click(function () {
            if ($(this).hasClass("active")) {
                _gaq.push(['_trackEvent', 'pcDetail', '取消收藏']);
            } else {
                _gaq.push(['_trackEvent', 'pcDetail', '收藏']);
            }
        });
    }
    if (typeof selectedConditionInfos != "undefined") {
        var arrList = selectedConditionInfos.split("|");
        _gaq.push(['_setCustomVar', 1, 'City', arrList[0], 3]);
        _gaq.push(['_setCustomVar', 2, 'District', arrList[1], 3]);
        _gaq.push(['_setCustomVar', 3, 'Circle', arrList[2], 3]);
        _gaq.push(['_setCustomVar', 4, 'Price', arrList[3], 3]);
    }

    if (typeof (ServerDomain) != 'undefined' && $.cookie && (($.cookie(ServerDomain + "_ABTest") && $.cookie(ServerDomain + "_ABTest") != "None") || typeof (specialcityabtest) != 'undefined')) {
        var abCode = "";
        if ($.cookie(ServerDomain + "_ABTest") && $.cookie(ServerDomain + "_ABTest") != "None")
            abCode = $.cookie(ServerDomain + "_ABTest");
        if (typeof (specialcityabtest) != 'undefined') {
            if (abCode != "")
                abCode += ",";
            abCode += specialcityabtest;
        }
        _gaq.push(['_trackPageview', window.location.pathname + window.location.search + (window.location.search == "" ? "?" : "&") + "abtest=" + abCode]);
    }
    else {
        _gaq.push(['_trackPageview']);
    }

    _gaq.push(['_trackPageLoadTime']);
    if (typeof (trackTrans) != "undefined") { trackTrans(); }
    setTimeout(function () {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        //ga.src = ('https:' == document.location.protocol ? ' https://ssl' : ' http://www') + '.google-analytics.com/ga.js';
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    }, 800);

    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?405c96e7f6bed44fb846abfe1f65c6f5";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
    var google_tag_params = {
        ecomm_prodid: '',
        ecomm_pagetype: 'member',
        ecomm_totalvalue: ''
    };
    var google_tag_params
    /* <![CDATA[ */
    var google_conversion_id = 964995166;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript">
    function asyncLoadScript(url, delayTime) {
        setTimeout(function () {
            var bd = document.createElement('script'); bd.type = 'text/javascript'; bd.async = true;
            bd.src = unescape(_bdhmProtocol + url);
            var b = document.getElementsByTagName('script')[0]; b.parentNode.insertBefore(bd, b);
        }, delayTime);
    }
    asyncLoadScript("www.googleadservices.com/pagead/conversion.js", 200);
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/964995166/?value=0&amp;guid=ON&amp;script=0" />
    </div>
</noscript>

<!--网易有道DSP跟踪代码 -->
<script type="text/javascript">var youdao_conv_id = 273380;</script>
<script type="text/javascript">
    (function () {
        setTimeout(function () {
            var a = document.createElement("script");
            var b = document.getElementsByTagName("script")[0];
            a.src = document.location.protocol + "//conv.youdao.com/pub/conv.js";
            a.async = true; a.type = "text/javascript"; b.parentNode.insertBefore(a, b)
        }, 1);
    }());
</script>
</body>
</html>


<script type="text/javascript" src="../js/jquery-2.1.4.js"></script>
	<script>
		
		function photoupd(){
			$("#upheadimgdo").attr({style:"display:none"});
			$("#photoupd").attr({style:""});
		}
	</script>