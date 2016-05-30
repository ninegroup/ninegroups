<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    填写订单信息
</title>
    
    
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/css_global?v=67e5d64" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/portalsite2/styles/base/powerFloat.css">
    <link rel="stylesheet" href="http://staticfile.tujia.com/Common/tooltip/poshytip/tip-white/tip-white.css" type="text/css" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/bookingSite/Styles/common.css">
    <link rel="stylesheet" href="http://staticfile.tujia.com/bookingSite/Styles/order-info.css">

    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/im.css?v=67e5d64" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/jquery.js?v=67e5d64"></script>
    
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_order_head?v=67e5d64"></script>
    <script src="http://staticfile.tujia.com/Common/tooltip/poshytip/jquery.poshytip.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        var mindate =  new Date(2016,4,29);
        
        var maxdate= new Date('2016','10','25');
    </script>

    <script type="text/javascript">
        var MESSAGE_RADIO="http://staticfile.tujia.com/PortalSite2/radio/message.wav", ORDERNOTICE_RADIO = "http://staticfile.tujia.com/PortalSite2/radio/ordernotice.wav";
        </script>
</head>
<body>
<!--[if lt IE 8]>
<div class="ie-tips">
    <p>已经有超过90%的用户使用更高版本 <a target="_blank" title="下载Chrome" href="http://www.google.com/chrome/">Google Chrome</a> 或 <a target="_blank" href="http://www.microsoft.com/zh-cn/download/ie.aspx?q=internet+explorer">Internet Explorer</a> 体验到了更流畅更精彩的页面，您还不试试？</p>
</div>
<![endif]-->

    <!--ORDER-81-48-->
    
         


    








<div class="m-fluid-cont t-fluid-cont">
    <div class="m-hd-cont">
        <div class="logo-cont">
            <img src="../images/jiujiu.jpg" alt="久久租" style="height:70px;width:250px;" />
        </div>
        <div class="step-cont">
            <div class="m-step-no1">
                <div class="m-step">
                    <ul class="cols3">

                        <li class="step1"><span class="s-num">1</span><span class="s-text">提交订单</span></li>
                                                    <li class="step3"><span class="s-num">2</span><span class="s-text">支付订金</span></li>
                        <li class="step4"><span class="s-num">3</span><span class="s-text">预订成功</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>






    <form action="/Order/Info" autocomplete="off" id="orderForm" method="post">
    <div class="m-wrap clearfix">
        <div class="m-cont">
            <!--预订信息-->
            <div id="outOrderBookingInfo">
                
    
    <div class="m-columns-hd new-columns-hd">
    <h2>预订信息</h2>
</div>

    <div class="m-form-cont booking-info">
        <div class="control-group">
            <label for="" class="control-lab">房费：</label>
            <div class="controls">
                 <span class="total-picer" id="spnBookingInfoUnitAmount" rel="rateDetailLayer" onmouseover="_gaq.push(['_trackEvent', 'pcOrderInfo', '房费提示']);"><dfn>¥</dfn><b class="picer-value">{{$house->h_price}}</b></span>
                <!--房费明细-->
                <div class="m-tips-wrap" id="rateDetailLayer" style="display: none">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label for="" class="control-lab"><b>*</b>入住人数：</label>
            <div class="controls">
                <div class="spinner-box">

                    <select class="oselectInput" id="PeopleCount1" name="PeopleCount1"><option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
                </div>
            </div>
        </div>
    </div>

<input type="hidden" id="hidGuestMaxCount" name="hidGuestMaxCount" value="0" />
<input type="hidden" id="hidExtraBedLimit" name="hidExtraBedLimit" value="0" />
<input type="hidden" id="hidspnProductName" name="hidspnProductName" />
<input type="hidden" id="hidspnIsNeedConfirm" name="hidspnIsNeedConfirm" value="需要确认" />
<input type="hidden" id="hidspnPrePayDes" name="hidspnPrePayDes" />
<input type="hidden" id="hiddivReturnTasteVoucher" name="hiddivReturnTasteVoucher" value="419" />
<input type="hidden" id="hiddivGiftPackage" name="hiddivGiftPackage" />
<input type="hidden" id="hidCancelRule" name="hidCancelRule" />
<input type="hidden" id="useFullPrepay" name="useFullPrepay" value="False" />
<input type="hidden" id="consumptionTypeTitle" name="consumptionTypeTitle" value="不支持" />
<input type="hidden" id="hiddivReturnCashBack" name="hiddivReturnCashBack" value=" f0" />
<input type="hidden" id="hiddivOwnerReturnCashBack" name="hiddivOwnerReturnCashBack" value="0" />
<input type="hidden" id="FastBooking" name="FastBooking" value="value" />
<input type="hidden" id="TotalAmountNoChange" name="TotalAmountNoChange" value="419.0000" />
<input type="hidden" id="TotalPrePayNoChange" name="TotalPrePayNoChange" value="419" />
<input type="hidden" id="TotalAmount" name="TotalAmount" value="419.0000" />
<input type="hidden" id="UnitID" name="UnitID" value="3581" />
<input type="hidden" id="CheckInDate" name="CheckInDate" value="2016-05-29" />
<input type="hidden" id="CheckOutDate" name="CheckOutDate" value="2016-05-30" />
<input type="hidden" id="ConsumptionVoucherCash" name="ConsumptionVoucherCash" value="0" />
<input type="hidden" id="TasteVoucherCash" name="TasteVoucherCash" value="0" />
<input type="hidden" id="EnumProductType" name="EnumProductType" value="Base" />
<input type="hidden" id="BookingCount" name="BookingCount" value="1" />
<input type="hidden" id="PeopleCount" name="PeopleCount" value="1" />
<input type="hidden" id="ProductID" name="ProductID" value="3693" />
<input type="hidden" id="UnitType" name="UnitType" value="Sweetome" />


<div class="m-tips-wrap" id="freepickupassuredescribe-tip" style="display: none">
    <div class="tips-content text-description">
        <div class="tips-info">
            什么是预付首晚？<br />
            酒店房间紧张或者您的最晚到店时间过晚，酒店会要求冻结您的一定资金以保证您会按时入住，预付首晚是指需要冻结房费进行担保。<br />
            如何担保<br />
            通过信用卡预授权或者支付宝担保的方式冻结您的担保金额，您正常入住后久久会立即操作解冻，担保金额预计在5-7天内到账。
        </div>
    </div>
</div>
            </div>
           



            <!--联系人信息-->
            
<div class="m-columns-hd t-columns-hd">
    <h2>联系信息</h2>
    <span class="hint-text">
    </span>
</div>

<div class="m-form-cont contact-cont">
    <div class="control-group">
        <label for="" class="control-lab"><b>*</b>姓名： </label>
        <div class="controls">
            <input class="ipt-lg" data-val="true" data-val-required="请填写真实的入住联系人姓名" id="Name" maxlength="20" name="OrderLinkmanList[0].Name" placeholder="" type="text" value="{{$user->u_name}}" />
            <div data-valmsg-for="OrderLinkmanList[0].Name" data-valmsg-replace="true"></div>
        </div>
    </div>
    <div class="control-group">
        <label for="" class="control-lab"><b>*</b>手机：</label>
        <div class="controls">
            <input class="ipt-lg" data-val="true" data-val-regex="请填写有效手机号码,我们将通过此号码与您取得联系" data-val-regex-pattern="^[1-9]\d{10}$" data-val-required="请填写有效手机号码,我们将通过此号码与您取得联系" id="Mobile" maxlength="11" name="OrderLinkmanList[0].Mobile" type="text" value="{{$user->u_tel}}" />
            <div data-valmsg-for="OrderLinkmanList[0].Mobile" data-valmsg-replace="true"></div>
        </div>
    </div>

    <div class="control-group">
        <label for="" class="control-lab">邮箱：</label>
        <div class="controls">
            <input class="ipt-lg" data-val="true" data-val-regex="E-mail 格式错误" data-val-regex-pattern="[A-Za-z0-9._%+-]+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)+" id="Email" maxlength="50" name="OrderLinkmanList[0].Email" type="text" value="" />

            <div data-valmsg-for="OrderLinkmanList[0].Email" data-valmsg-replace="true"></div>
        </div>
    </div>
</div>



            <!--发票信息-->
            

            <!--可选服务-->
            
  
            <!--游客赠送保险-->
            
    <div class="m-columns-hd t-columns-hd">
        <h2>保险</h2>
        <span class="hint-text">让出行有保障</span>
    </div>
    <div class="depiction-cont">
        <label>
                <input type="checkbox" id="checkboxInsurence" name="NeedInsurance" value="True" /><span>接受</span>
            <span class="orange-color">免费赠送</span>的众安保险《<i class="j-detail-freeInsurancetastevoucher blue-color" rel="freeInsurancetastevoucher-tip">住宿意外险</i>》1份,最高赔付11万
        </label>
    </div>
<input id="maxInsurence" name="maxInsurence" type="hidden" value="1" />    <div id="div_Insurence" class="m-form-cont insurance-cont" style="display: none;">
            <div class="control-group">
                <label class="control-lab">入住人：</label>
                <div class="controls">
                    <div class="form-inline">
                        <div class="form-group user-group">
                            <label for="" class="control-label">姓名</label>
                            <div class="form-control">
                                <input data-val="true" data-val-number="字段 InsurenceID 必须是一个数字。" data-val-required="InsurenceID 字段是必需的。" id="OrderInsurenceList_0__InsurenceID" name="OrderInsurenceList[0].InsurenceID" type="hidden" value="" />
                                <input class="ipt-sm" id="insuredName_0" maxlength="15" name="OrderInsurenceList[0].InsuredName" placeholder="真实姓名" type="text" value="" />
                                <span class="field-validation-valid" data-valmsg-for="OrderInsurenceList[0].InsuredName" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="form-group certificate-type-group ">
                            <label for="" class="control-label">证件</label>
                            <div class="form-control">
                                <div class="dorp-cont">
                                    <select class="ipt-sm oselectInput" data-val="true" data-val-required="EnumInsuredCertiType 字段是必需的。" id="insuredCertiType_0" name="OrderInsurenceList[0].EnumInsuredCertiType"><option value="1">身份证</option>
<option value="2">军官证</option>
<option value="3">护照</option>
</select>
                                    <input class="ipt-primary" id="insuredCertiNo_0" maxlength="18" name="OrderInsurenceList[0].InsuredCertiNo" placeholder="有效证件号" type="text" value="" />
                                </div>
                                <span class="field-validation-valid" data-valmsg-for="OrderInsurenceList[0].InsuredCertiNo" data-valmsg-replace="true"></span>
                            </div>
                        </div>
                        <div class="form-group sex-group">
                            <label for="" class="control-label">性别</label>
                            <div class="form-control">
                                <select class="ipt-sm oselectInput" data-val="true" data-val-required="Sex 字段是必需的。" id="insuredSex_0" name="OrderInsurenceList[0].Sex" readonly="readonly">
								<option value="">选择性别</option>
								<option value="1">男</option>
<option value="2">女</option>
</select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="m-tips-wrap" id="freeInsurancetastevoucher-tip" style="display: none">
        <div class="tips-content text-description">
            <h2>住宿意外险说明</h2>
            <div class="tips-info">
                久久租与众安保险公司合作推出"住宿旅客意外伤害保险"，保障您在住宿期间的人身安全。<br />
                保险生效时间为入住前2小时，保障时长为您在线预订的入住天数。您可以随时在房客后台查看保险状态。如果您有其他保险相关问题，请拨打众安保险全国统一服务热线<br>
                400-999-9595。
                <a href="http://content.tujia.com/Clause/PassengerCasualty.htm" style="display: block; text-align: right; color: #5d91cd;" target="_blank">查看详情</a>

            </div>
        </div>
    </div>
    <script type="text/javascript">


        function choiceInsuranceContact(e) {
            //alert(e.attr("contactCardType"));
            $("#" + e.attr("parentid")).val(e.attr("commonname"));
            var cardType = e.attr("contactCardType");
            $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).val('');
            $("#" + e.attr("parentid").replace("insuredName", "insuredCertiType")).val(cardType);
            $("#" + e.attr("parentid").replace("insuredName", "insuredCertiType")).data("selectinput").repaint();
            $("#" + e.attr("parentid").replace("insuredName", "insuredSex")).val(e.attr("sex"));
            $("#" + e.attr("parentid").replace("insuredName", "insuredSex")).data("selectinput").repaint();
            $("#" + e.attr("parentid").replace("insuredName", "insuredCertiNo")).val(e.attr("contactCardNumber")).blur();
            if (cardType == 1) {
                $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).attr("readonly", "readonly");

            } else if (cardType > 1) {
                $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).removeAttr("readonly");
                $("#" + e.attr("parentid").replace("insuredName", "insuredBirthDay")).val(e.attr("birthday")).blur();
            }

            $("#commonContacts").removeClass("dn").addClass("dn");
        }

        function clearInsurance(index) {
            $("#insuredName_" + index).attr("value", "");;
            $("#insuredCertiNo_" + index).attr("value", "");;
        }

        function removeInsurenceRule() {
            $("#insuredName_0").rules("remove");
            $("input[id^='insuredCertiNo']").each(function (i, el) {
                $("#insuredCertiNo_" + i).rules("remove");
            })
            $("input[id^='insuredBirthDay']").each(function (i, el) {
                $("#insuredBirthDay_" + i).rules("remove");
            })
        }

        function addInsurenceRule() {
            $("#insuredName_0").rules("add", { required: true, messages: { required: "<span class='error-info'>姓名必填</span>" } });
            $("#insuredCertiNo_0").rules("add", {
                required: true, messages: {
                    required: "<span class='error-info'>证件号码必填</span>"
                }
            });
            $("input[id^='insuredCertiNo']").each(function (i, el) {
                $(this).rules("add", { certiNoCheck: true, cardNoCheck: true })
                $('#insuredCertiType_' + i).bind("change", function () {
                    if ($('#insuredCertiType_' + i).val() == "1") {
                        $("#insuredBirthDay_" + i).attr("readonly", "readonly");
                        $("#insuredBirthDay_").rules("remove");
                        $("#insuredSex_" + i).attr("readonly", "readonly");
                    }
                    else {
                        $("#insuredSex_" + i).removeAttr("readonly");
                        $("#insuredBirthDay_" + i).removeAttr("readonly");
                    }
                });
                $(this).bind("blur", function () {
                    var cardNo = $(this).val();
                    if ($('#insuredCertiType_' + i).val() == "1" && cardNo.length > 1) {
                        var sex = getSexByIdCard(cardNo);
                        var birthday = getBirthdayByIdCard(cardNo);
                        if (sex) {
                            $("#insuredSex_" + i).val(sex == "man" ? "1" : "2").blur();
                            $("#insuredSex_" + i).attr("readonly", "readonly");
                            $("#insuredSex_" + i).data("selectinput").repaint();
                        }
                        if (birthday) {
                            $("#insuredBirthDay_" + i).val(birthday).blur();
                            $("#insuredBirthDay_" + i).attr("readonly", "readonly");
                        }
                    }
                });
            });
            $("input[id^='insuredBirthDay']").each(function (i, el) {
                $("#insuredBirthDay_" + i).rules("add", { required: true, dateISO: true, birthDayCheck: true, messages: { dateISO: "<span class='error-info'>格式错误</span>", required: "<span class='error-info'>出生日期必填</span>" } })
            })

            $("input[id^='insuredName_']").focus(function () {
                var parentId = $(this).attr("id");

                $.ajax({
                    type: "POST",
                    url: "/Order/GetCommonContact",
                    success: function (data) {
                        var jsonContact = new Array();
                        for (var i = 0; i < data.length; i++) {
                            //var li = getCommonContactli(data[i].ContactName, data[i].ContactMobile);
                            //$('#ulCommonContact')[0].appendChild(li);
                            jsonContact.push(data[i]);
                        }
                        if (jsonContact.length > 0) {
                            $("#commonContacts").remove();
                            var child = getCommonContactsDiv(parentId, jsonContact);
                            parentId = $(this)[0].id;
                            $("body")[0].appendChild(child);
                        }
                        $('input:[commonname]').bind("click", function () {
                            choiceInsuranceContact($(this), parentId);
                        });

                    },
                    error: function () {
                    }
                });



            });
        }

        jQuery.validator.addMethod("cardNoCheck", function (value, element) {
            if (value.length > 0) {
                var certiType = $("#" + element.id.replace("insuredCertiNo", "insuredCertiType")).val();
                switch (certiType) {
                    case "1":
                        return checkIdCard(value).rst;
                    case "2":
                        return checkMilitaryCardNo(value).rst;
                    case "3":
                        return checkPassPortCardNo(value).rst;
                }
            }
            return true;
        }, "<span class='error-info'>证件号码格式不正确</span>");

        var birthDayCheckErrStr;
        jQuery.validator.addMethod("birthDayCheck", function (value, element) {
            if ($("#" + element.id.replace("insuredBirthDay", "insuredCertiType")).val() != "1" && value.length > 1) {
                var ds = value.match(/\d+/g);
                var ts = ['getFullYear', 'getMonth', 'getDate'];
                if (ds == null || ds.length != 3) {
                    return false;
                }
                var d = new Date(value.replace(/-/g, '/'));
                var i = 3;
                var now = new Date();
                if (d > now) {
                    return false;
                }
                ds[1]--;
                while (i--) {
                    if (ds[i] * 1 != d[ts[i]]()) {
                        return false;
                    }
                }
            }
            return true;
        }, "<span class='error-info'>日期错误</span>");

        jQuery.validator.addMethod("certiNoCheck", function (value, element) {
            if ($("#" + element.id.replace("insuredCertiNo", "insuredName")).val().length > 1) {
                return value.length > 0;
            }
            return true;
        }, "<span class='error-info'>证件号码必填</span>");

        $(function () {
            insurenceTemplate = $('#div_Insurence .control-group').first().clone();
            $("#checkboxInsurence").bind("click", function () {
                if ($(this).is(":checked")) {
                    addInsurenceRule();
                    $("#div_Insurence").show();
                }
                else {
                    removeInsurenceRule();
                    $("#div_Insurence").hide();
                }
            });

            $(".j-detail-freeInsurancetastevoucher").powerFloat({
                container: "plugin",
                reverseSharp: true,
                position: "6-7"
            });

        });
    </script>

            <!--退订规则-->
            
<div id="outUnsubscribeRule">
    <!--全额预付-->
            <div class="m-columns-hd">
                <h2>退订规则</h2>
            </div>
                <div class="edsc-info">
                    <p>如果取消订单或没有入住，预付订金不予退还，如提前退房，剩余房费不退还 </p>
                </div>
</div>

            <!--预订须知-->
            



            <input id="CacheKey" name="CacheKey" type="hidden" value="cbc00b72-7fb1-45eb-9169-3b04c241d4fa" />

            <div class="buy-cont">
                <div class="agree-box">
                    <input type="checkbox" name="mustagree" id="mustagree" checked="checked" />
                    <label for="">
                        我已阅读并同意《<a href="http://content.tujia.com/Clause/Index.htm" target="_blank" onclick="_gaq.push(['_trackEvent', 'pcOrderInfo', '隐私条款']);">久久租服务条款</a> 》和上述退订规则</label>
                    <p id="dontagree" class="field-validation-error" style="display: none; color: #f60">请同意隐私和条款</p>
                </div>
                <div class="btn-cont">
                    
                    <input type="button" value="提交订单" id="ordersubmit1" class="submit-btn" onclick="tijiao()" />
                    <input type="button" value="正在提交中..." id="submitting" class="submit-btn dn" style="cursor: default; display: none;" />
                </div>
            </div>
        </div>
        <div class="side-bar-cont" id="outHouseInfo">
            
<div class="side-info">
   
    <div class="order-cont">
        <div class="picture-box">
            <a href="http://www.tujia.com/unitdetail/index/3581?scenicspotpinyin=chaoyangqu&amp;destinationpinyin=beijing" target="_blank" rel="nofollow">
                <img src="../images/uploads/{{$house->pi_path}}" width="300" height="200" title="{{$house->h_title}}" alt="{{$house->h_title}}" /></a>
            
        </div>
        <div class="side-hd">
            <h2><a href="http://www.tujia.com/unitdetail/index/3581?scenicspotpinyin=chaoyangqu&amp;destinationpinyin=beijing" target="_blank" onclick="_gaq.push(['_trackEvent', 'pcOrderInfo', '预订房屋点击']);">{{$house->h_title}}</a></h2>
        </div>
        <div class="info-box">
            <span class="label-text">宜住{{$house->h_people}}人</span>
        </div>



        <div class=" total-price-cont">
            <div class="hlt-cont">

                <div class="m-order-list price-list">
                    <ul>
                            <li><span class="label-text">订单总价</span><span class="price-info total-price"><dfn>¥</dfn>{{$house->h_price}}</span></li>
                       

                    </ul>
                </div>

                <div class="m-order-list payment-info">
                    <ul>
                            <li class="total-payment"><span class="label-text">在线支付</span><span class="price-info total-price"><dfn>¥</dfn>{{$house->h_price}}</span></li>
                                            </ul>
                </div>
            </div>
                <div class="m-order-list promotion-info">
                    <ul>
                        <li><span class="label-text">发点评赢体验券<i class="j-detail-freepickupreturntastevoucher icon-hint" rel="freepickupreturntastevoucher-tip"></i></span><span class="number-box">{{$house->h_price}}</span></li>

                                <!--<li><span class="label-text">下单送积分</span><span class="number-box">419</span></li>
                           -->

                    </ul>
                </div>
     
        </div>
    </div>
</div>

    <div class="m-tips-wrap" id="specialreturncashback-tip" style="display: none">
        <div class="tips-content text-description">
            <h2>额外返现说明</h2>

        </div>
    </div>


    <div class="m-tips-wrap" id="freepickupreturncashback-tip" style="display: none">
        <div class="tips-content text-description">
            <h2>返现说明</h2>
            <div class="tips-info">
                该订单<span class="consumptionTypeTitle">返现</span><span class="spanReturnCashBack">0</span>元现金，入住完成并核实后的2-7个工作日内，可至您的久久账户提现！

            </div>
            <div style="margin-top:10px;height:10px;border-top:1px dashed  #b3b3b3;overflow:hidden;"></div>
            <h2>提现说明</h2>
            <div class="tips-info">
                在“我的久久”的“账户余额”中可以查看到返现金额并进行提现，支持支付宝和银行卡两种方式，您设置好正确的账号信息后，就可以做提现申请。久久在收到提现申请后进行审核，审核通过后3-7个工作日将现金打入到您的提现账号里。

            </div>
        </div>
    </div>

    <div class="m-tips-wrap" id="freepickupreturntastevoucher-tip" style="display: none">
        <div class="tips-content text-description">
            <div class="tips-info">
                下单入住后，发表含至少100字符、3张相关照片的精华点评，在系统审核通过后，便可获得久久赠送的体验券。800元（含）以下的订单按金额1：1的比例赠送体验券，800元以上的订单赠送800元体验券。
            </div>
        </div>
    </div>

<script type="text/javascript">
    $("#openPackageDetail").click(function () {
        if ($(".package-list").attr("status") == "show") {
            $('#openPackageDetail').parent().parent().attr("class", "cont-off cont-on");
            $(".package-list").attr("status", "hidden");

        } else {
            $('#openPackageDetail').parent().parent().attr("class", "cont-off cont-off");
            $(".package-list").attr("status", "show");

        }
    });


    //抵扣 
    $("#openDeductionDetail").click(function () {
        var deductionList = $(".deduction-box") , _self = $(this);
       
        if (_self.attr("data-status") == "true") {
            deductionList.show();
            _self.attr("data-status", "false").addClass("active");
        } else {
            deductionList.hide();
            _self.attr("data-status", "true").removeClass("active");
        }


    });
</script>
        </div>
        <input id="IsShowPayDeduction" name="IsShowPayDeduction" type="hidden" value="False" />
    </div>
    

    </form><div class="m-ensure-cont">
    <ul>
        <li class="first-box">
            <i class="icon-ensure"></i>
            <div class="text-cont">
                <h4>1000万安心租100%保障</h4>
                <p>房屋描述失真、到店无房、房东加价全部退订金并补偿</p>
            </div>
        </li>
        <li>
            <i class="icon-tel"></i>
            <div class="text-cont">
                <h4>400-188-1234</h4>
                <p>7X24小时热线，30分钟保障处理响应</p>
            </div>
        </li>
    </ul>
</div>

    <div id="flightNumberNotice" class="dn" style="position: relative">
        <div style="width: 220px;">
            <a href="javascript:;" class="closePowerFloat" title="关闭" style="position: absolute; top: 2px; right: 4px; width: 8px; height: 8px; font-weight: bold; line-height: 8px; text-align: center; font-size: 14px; color: #999">x</a>
            <div style="width: 206px">如航班尚未确定可不填，请最晚在航班到达前24小时致电 <span class="fw fb cf60">400-188-1234</span> 提供航班信息以便安排接机。</div>
        </div>
    </div>

    <form action="/order/CheckBlackList" data-ajax="true" data-ajax-complete="isNeedValidateCode" id="checkBlackListForm" method="post"><input class="tel" id="checkMobile" name="mobile" type="hidden" value="" />
    <input type="button" id="submitCheckBlackList" class="dn" />
    </form>

    <div class="floatMask dn" id="div_BlackListMask">
    </div>
    <div class="m-elastic-layer dn" id="div_ErrorMessage">
            <div class="hd-cont">
                <a href="javascript:;" onclick="closeDiv(this)" title="关闭" class="close-btn"></a>
            </div>
            <div id="div_Error"class="bd-cont">
                <div class="verify-cont">
                    <div class="control-group ">
                        <span class="controls-span" id="span_Message" style="text-align:center">您已被拉入黑名单，无法下单，请联系久久客服</span>
                    </div>
                 </div>
            </div>
        </div>
    <div class="m-elastic-layer dn" id="div_ValidateCode">
            <div class="hd-cont">
                <h2>获取语音验证码</h2>
                <a href="javascript:;" onclick="closeDiv(this)" title="关闭" class="close-btn"></a>
            </div>
            <form action="/order/ConfirmValidateCode" data-ajax="true" data-ajax-complete="confirmVoiceCodeAfter" id="confirmVoiceCodeForm" method="post">
            <div id="div_VerifyCodeInfo" class="bd-cont">
                <div class="verify-cont">
                    <div class="control-group ">
                        <span class="colItem">验证码将以语音形式发送至手机<span id="span_mobile" style="color:red"></span></span>
                        <div class="controls">
                            <label class="label-txt">验证码：</label>
                            <div class="colItem">
                                <input class="verify-code" data-val="true" data-val-required="请输入验证码" id="ValidateCode" maxlength="4" name="ValidateCode" type="text" value="" />
                                <input class="tel" id="ValidateTel" name="ValidateTel" type="hidden" value="" />
                                <input id="btn_SendVerifyCode" class="verifyCode" type="button" value="获取语音验证码" onclick="getVoiceCode()">
                                <br />
                                <input id="btn_ConfirmVoiceValidateCode" type="submit" value="确认" class="verify-btn" onclick="confirmVoiceCodeBefore()" style="margin: 20px 0 0 0" />
                                <input id= "btn_ConfirmWaiting" class="verify-btn" value="确认中..." style="margin: 20px 0 0 0;display:none">
                                <div class="error-cont" id="div_ValidateMessage"><span class="field-validation-valid" data-valmsg-for="ValidateCode" data-valmsg-replace="true"></span></div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

        </div>

    <form action="/order/IsNeedValidate" data-ajax="true" data-ajax-complete="isNeedValidateComplete" id="isNeedValidateForm" method="post"><input class="tel" id="checkMobile" name="Tel" type="hidden" value="" />
    <input id="FastBooking" name="FastBooking" type="hidden" value="True" />
    <input type="button" id="submitNeedValidate" class="dn" />
    </form>

    <div class="m-elastic-layer dn" id="maskLayer">
        <div class="hd-cont">
            <h2>请验证手机号码</h2>
            <a href="javascript:;" title="关闭" class="close-btn"></a>
        </div>

        <form action="/order/SendValidateCode" data-ajax="true" data-ajax-complete="sendValidateCodeComplete" id="sendValidateCodeForm" method="post">
        <div id="sendValidateCodePanel" class="bd-cont">
            <div class="verify-cont">
                <div class="control-group ">
                    <span class="controls-span">您输入的手机尚未验证：</span>
                    <div class="controls">
                        <input class="ipt-text tel" disabled="disabled" id="validateTel" name="validateTel" type="text" value="" />
                        <input class="tel" id="Vtel" name="Vtel" type="hidden" value="" />
                        <input id="SendValidateCodeBtn" type="submit" value="获取验证码" class="verify-btn" />
                    </div>
                </div>
            </div>
        </div>
        </form><form action="/order/ConfirmValidateCode" data-ajax="true" data-ajax-complete="confirmValidateCodeComplete" id="confirmValidateCodeForm" method="post">
        <div id="confirmValidateCodePanel" class="bd-cont dn">
            <div class="verify-cont">
                <div class="control-group ">
                    <span class="controls-span">请输入验证码：</span>
                    <div class="controls">
                        <input class="verify-code" data-val="true" data-val-required="请输入验证码" id="ValidateCode" maxlength="4" name="ValidateCode" type="text" value="" />
                        <input class="tel" id="ValidateTel" name="ValidateTel" type="hidden" value="" />
                        <input id="ConfirmValidateCodeBtn" type="submit" value="确认" class="verify-btn" onclick="confirmValidateCodeBefore();" />
                        <input style="display: none" hidden="hidden" id="ConfirmWaiting" class="verify-btn" value="确认">
                        <div class="error-cont"><span class="field-validation-valid" data-valmsg-for="ValidateCode" data-valmsg-replace="true"></span></div>
                        <div class="point-cont">
                            验证码已发送到您手机：<span class="tel-box"></span>  <span id="reSendWaiting"></span><a href="#" id="reSendValidateCode" class="link-btn">重新验证</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>


   
    
<!-- footer Start -->






<div class="m-seo-list">


</div>

<div style="display: none">SeoFooter执行时间: 6.1077</div>

<div class="m-footer-link-list" style="text-align: center;">
    <a href="http://content.tujia.com/Home/Index.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
        <a href="http://content.tujia.com/BusinessIntro/HolidayApartment.htm" target="_blank" rel="nofollow">业务介绍</a>|
        <a href="http://content.tujia.com/Jobs/Social.htm" target="_blank" rel="nofollow">加入久久</a>|
        <a href="http://content.tujia.com/Help/Index.htm" target="_blank" rel="nofollow">帮助中心</a>|
        <a href="/SiteMap/UnitDestination" target="_blank">网站地图</a>|
        <a href="/SiteMap/Default" target="_blank">城市地图</a>
     <p class="safe-cont">
        <a href="http://www.12377.cn/" target="_blank"><img src="http://staticfile.tujia.com/PortalSite2/Images/safeImages/safe-img1.jpg" alt="互联网违法和不良信息举报中心" width="138" height="40" /></a>

            <a href="http://bj.cyberpolice.cn/" target="_blank"><img src="http://staticfile.tujia.com/PortalSite2/Images/safeImages/safe-img3.jpg" alt="北京市公安局网络违法犯罪举报"  width="98" height="40" /></a>

    </p>
</div>


<style>
    .black_overlay1 {
        display: none;
        position: absolute;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 200%;
        background-color: black;
        z-index: 1001;
        -moz-opacity: 0.8;
        opacity: .80;
        filter: alpha(opacity=80);
    }

    .white_content {
        display: none;
        position: absolute;
        top: 25%;
        left: 35%;
        width: 30%;
        /*height: 45%;
            padding: 20px;*/
        border: 1px solid #ccc;
        background-color: white;
        z-index: 1002;
        overflow: auto;
    }

        .white_content li {
            font-size: 12px;
        }
</style>

<div id="light1" class="m-elastic-layer white_content">
    <div class="hd-cont">
        <h2>恭喜您</h2>
        <a href="javascript:;" onclick="closeNoticeBtn('light1','divfadebg1');" class="close-btn"></a>
    </div>

        <div class="bd-cont">
            <div class="info-box">
                            </div>
            <div class="btn-cont">
                <span style="cursor:pointer" onclick="closeNoticeBtn('light1','divfadebg1');" class="btn">知道了</span>
            </div>
            <br />
        </div>



</div>

<!--弹出层时背景层DIV-->
<div id="divfadebg1" class="black_overlay1"></div>
<script type="text/javascript">

    (function () {
        if ($("#unLoginCustomerStatus").val() != null && $("#unLoginCustomerStatus").val() != "") {
            $(".highcustomerlevel-text").html($("#unLoginCustomerStatus").val());
            $(".maxrate-text").html($("#unLoginCustomerMaxRate").val());
            showDialogForBooking("light1", "divfadebg1", 0);
        } else {
            //alert('bg2');
        }
        //var CustomerInfoEnumCustomerLevel = $("#CustomerInfoEnumCustomerLevel").val();
        //alert(CustomerInfoEnumCustomerLevel);

        var highLevelCustomerNoticeStatus = $.cookie("highLevelCustomerNoticeStatus");
        if (highLevelCustomerNoticeStatus === null) {
            //alert('null1');

            setTimeout("getEnumCustomerLevel()", 1000);





        } else {
            //alert(highLevelCustomerNoticeStatus);
            //alert('already-show');
        }


    })();




    function showDialogForBooking(id, bg_div, ticketCount) {
        $(".black_overlay1").height(document.body.clientHeight);
        document.getElementById(id).style.display = 'block';
        $(".black_overlay1").show();
        var topy = 300 + ticketCount * 30;
        document.getElementById(id).style.top = topy + "px";
    }
    function closeNoticeBtn(id, bg_div) {
        document.getElementById(id).style.display = 'none';
        $(".black_overlay1").hide();

    }
</script>



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
    setTimeout(function () {
        var a = document.createElement("script");
        var b = document.getElementsByTagName("script")[0];
        a.src = document.location.protocol + "//dnn506yrbagrg.cloudfront.net/pages/scripts/0025/8248.js?" + Math.floor(new Date().getTime() / 3600000);
        a.async = true; a.type = "text/javascript"; b.parentNode.insertBefore(a, b)
    }, 1);
    //var qimoClientId = "4245750";
</script>
<script type='text/javascript' src='http://webchat.7moor.com/javascripts/7moorInit.js?accessId=797098a0-b29d-11e5-b3b1-49764155fe50&autoShow=false' async='async'></script>


     <script type="text/javascript">
         var staticFileRoot = "http://staticfile.tujia.com",
              minDate = "2016-05-29",
               maxDate = "2017-04-29",
               houseId,
               ServerDomain = "tujia.com",
               TUJIA_CLIENTID = 'b5a69639-5a39-4a0b-891e-5ec4eb4a0e72';
         var imUrl = "http://im.tujia.com";
         var portalUrl = "http://www.tujia.com";
         var customerUrl =  "http://vip.tujia.com";
         var favoriteUrl = "http://vip.tujia.com";
         var MESSAGE_RADIO="http://staticfile.tujia.com/PortalSite2/radio/message.wav";
         var worldUrl = "";

               
     </script>
     <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/im_v2.js?v=67e5d64"></script>
    <script type="text/javascript" src="http://cdn.ronghub.com/RongIMLib-2.0.10.min.js"></script>
     
    <script type="text/javascript" src="http://staticfile.tujia.com/common/scripts/jquery.numeric.js?v=67e5d64"></script>
    <script type="text/javascript" src="http://staticfile.tujia.com/bookingsite/scripts/js_order_foot?v=67e5d64"></script>
    <!-- 携程追踪代码   -->
    
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

            _mvq.push(['$setGeneral', 'cartview', '', /*用户名*/ '', /*用户id*/ '']);
            _mvq.push(['$logConversion']);
            _mvq.push(['$addGoods', /*分类id*/ '', /*品牌id*/ '', /*商品名称*/ '',/*商品ID*/ $("#UnitID").val(),/*本店商品售价*/ '', /*商品图片url*/ '', /*分类名*/ '', /*品牌名*/ '', /*商品库存状态1或是0*/ '', /*市场参考价*/ '',/*收藏人数*/, /*商品下架时间*/,'']);
            _mvq.push(['$logData']);
        })();


        (function () {
            if (traceLog) {
                traceLog("Common", {
                    pageName: "Booking",
                    pageId: traceData.pageId,
                    prevId: getPrevId(),
                    url: traceData.url,
                    params: traceData.params
                });
            }
        })();

    </script>

    



<!--Donut#<ActionSettings xmlns="http://schemas.datacontract.org/2004/07/DevTrends.MvcDonutCaching" xmlns:i="http://www.w3.org/2001/XMLSchema-instance"><ActionName>TraceUser</ActionName><ControllerName i:nil="true"/><RouteValues i:nil="true" xmlns:a="http://schemas.microsoft.com/2003/10/Serialization/Arrays"/></ActionSettings>#--><script type='text/javascript'>$.post('/Home/TraceUser', {"ID":0,"CreateTime":"2016-05-29T17:33:42.6639795+08:00","UserAgent":"Mozilla/5.0 (Windows NT 6.3; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0","UserBrowser":"Firefox46","PageName":"Order_TraceUser","Url":"http://booking.tujia.com/order/info?unitid=3581&startDate=2016-05-29&endDate=2016-05-30&productId=3693&bookingCount=1&unitType=Sweetome","UserIP":"114.249.232.225","SessionId":"","UserId":"c3dfe987-9193-4eae-8a12-1fcad5adbf3f","Host":"Order-81-48","IsFirstRequest":false,"PageSessionId":"006ee7da-ef75-4686-9003-6b24c90bb250","IsAjax":false,"OperaterName":"18811444781","ModuleName":"Web.Booking","ParentPageSessionId":"","UrlReferrer":"http://www.tujia.com/beijing_gongyu/chaoyangqu_3581.htm","Site":2});</script><!--EndDonut-->

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

    if (typeof selectedConditionInfos != "undefined") {
        var arrList = selectedConditionInfos.split("|");
        _gaq.push(['_setCustomVar', 1, 'City', arrList[0],3]);
        _gaq.push(['_setCustomVar', 2, 'District', arrList[1],3]);
        _gaq.push(['_setCustomVar', 3, 'Circle', arrList[2],3]);
        _gaq.push(['_setCustomVar', 4, 'Price', arrList[3],3]);
    }

    if (typeof (ServerDomain) != 'undefined' && $.cookie && $.cookie(ServerDomain + "_ABTest") && $.cookie(ServerDomain + "_ABTest") != "None") {
        _gaq.push(['_trackPageview', window.location.pathname + window.location.search + (window.location.search == "" ? "?" : "&") + "abtest=" + $.cookie(ServerDomain + "_ABTest")]);
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
            
        //var bd = document.createElement('script'); bd.type = 'text/javascript'; bd.async = true;
        //bd.src = unescape(_bdhmProtocol + "hm.baidu.com/h.js%3F405c96e7f6bed44fb846abfe1f65c6f5");
        //var b = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(bd, b);

        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?405c96e7f6bed44fb846abfe1f65c6f5";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();

    }, 800);
</script>


    <script type="text/javascript" src="http://tajs.qq.com/gdt.php?sId=36632340" charset="UTF-8"></script>


<script type='text/javascript'>
    var _zpq = _zpq || [];
    _zpq.push(['_setPageID', '480']);
    _zpq.push(['_setPageType', 'orderInfoPage']);
    _zpq.push(['_setParams', '48','3581','419','1']);
    _zpq.push(['_setAccount', '184']);
    (function() {
        var zp = document.createElement('script'); zp.type = 'text/javascript'; zp.async = true;
        zp.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.zampda.net/s.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(zp, s);
    })();
</script>



<script  type="text/javascript" src="http://staticfile.tujia.com/statkeyword.js"></script>

    <!-- Google Code for Remarketing Tag -->
    <script type="text/javascript">
        var google_tag_params = {
            ecomm_prodid: '3581',
            ecomm_pagetype: 'order',
            ecomm_totalvalue: ''
        };
        var google_tag_params
        /* <![CDATA[ */
        var google_conversion_id = 964995166;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
   </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/964995166/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>

<!--网易有道DSP跟踪代码 -->
<script type="text/javascript">var youdao_conv_id = 273380;</script> 
<script type="text/javascript" src="http://conv.youdao.com/pub/conv.js"></script>

 


</body>
</html>
<script type="text/javascript">
function tijiao(){
	var h_id='{{$house->h_id}}';
	var c_num=document.getElementById('PeopleCount1').value;
	var user=document.getElementById('Name').value;
	var tel=document.getElementById('Mobile').value;
	var email=document.getElementById('Email').value;
	var c_name=document.getElementById('insuredName_0').value;
	var c_cart=document.getElementById('insuredCertiNo_0').value;
	var c_sex=document.getElementById('insuredSex_0').value;
	var c_price='{{$house->h_price}}';
	var xiang=h_id+','+c_num+','+user+','+tel+','+email+','+c_name+','+c_cart+','+c_sex+','+c_price;
	location.href="{{ URL::route('Details/CartAdd') }}?xiang="+xiang;
}
</script>