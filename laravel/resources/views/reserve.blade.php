
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
    订单支付
</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--meta http-equiv="X-UA-Compatible" content="IE=8,IE=9" /-->
    <meta property="qc:admins" content="27330065376452116375" />
    <meta property="wb:webmaster" content="791d1c6849c2b026" />
    
    
    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/css_orderpaynew?v=67e5d64" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/Common/tooltip/poshytip/tip-white/tip-white.css" type="text/css" />

    <link rel="stylesheet" href="http://staticfile.tujia.com/BookingSite/Styles/common.css" type="text/css" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/BookingSite/Styles/order-pay.css" type="text/css" />
    <link rel="stylesheet" href="http://staticfile.tujia.com/PortalSite2/Styles/alert.css" type="text/css" />


    <link rel="stylesheet" type="text/css" href="http://staticfile.tujia.com/portalsite2/styles/im.css?v=67e5d64" />
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/base/jquery.js?v=67e5d64"></script>
    
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_order_head?v=67e5d64"></script>
    <script src="http://staticfile.tujia.com/Common/tooltip/poshytip/jquery.poshytip.min.js" type="text/javascript"></script>

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

    <!--ORDER-81-47-->
    
         


    
    
    
 
    
    








<div class="m-fluid-cont t-fluid-cont">
    <div class="m-hd-cont">
        <div class="logo-cont">
            <img src="../images/jiujiu.jpg" alt="久久租" style="height:70px;width:250px;" />
        </div>
        <div class="step-cont">
            <div class="m-step-no3">
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






    <input id="hidTotalUnitAmount" name="hidTotalUnitAmount" type="hidden" value="419.00" />
    <input id="hidUnitID" name="hidUnitID" type="hidden" value="3581" />
    <input id="hidCustomerLoginID" name="hidCustomerLoginID" type="hidden" value="4245750" />
    <div class="m-wrap" id="sidebar-wrap">
        <div class="status-cont">
            <div class="order-status success-box">
                <i class="icon-status"></i>
                <div class="info-box">
                    
                    <h2>感谢预订，请尽快支付订金。</h2>
                    
                    <p>请在<span class="hlt-text ">{!! $end_time !!}</span>前完成支付，避免订单超时失效。</p>
                </div>
            </div>
            <div class="listing-info progress-box">
                <div class="state-box ">
                    <div class="user-box">
                        <span class="photo-box">
                            <?php if($user->u_header){?>
                            <img src="../uploads/{{$user->u_header}}" alt=" " class="photo-img" width="66" height="66" />
                            <?php }else{?>
							<img src="http://staticfile.tujia.com/BookingSite/images/user-default.png" alt=" " class="photo-img" width="66" height="66" />
                            <?php } ?>
                        </span>
                        <p class="text-box">
                            <b class="name-box">房客</b>
                        </p>
                    </div>
                    <div class="line-box">
                        <i class="line"></i>
                        <span class="date-box">剩余支付时间：
                            
                            <i class="icon-time"></i>
                            <span id="spnTimeLast"></span>
                            <input id="showtime" name="showtime" type="hidden" value="1" />
                            
                           
                             

                        </span>
                    </div>
                    <div class="listing-box">
                        <span class="photo-box">
                            
                            <img src="../uploads/{{$h_user->u_header}}" alt=" " class="photo-img" width="66" height="66" />
                            
                            
                        </span>
                        <p class="text-box">
                            <b class="name-box">房东</b>
                            <br />
                            
                            <!-- <a href="javascript:;" onclick="qimoChatClick(); return false;" class="link-btn" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '在线客服']);">在线客服</a> -->
                            
                        </p>
                    </div>
                </div>
            </div>

            <div style="clear: left"></div>
            <div class="orede-info-cont ">
                <ul>
                    <li class="first-box">
                        <div class="info-item ">订单编号：<span class="order-number ">{!! $order !!}</span>{{ $house->h_title }}（宜住{{ $house->h_people }}人）</div>
                        <!-- <div class="info-item ">
                            <span class="date-box">2016-05-29<b class="week-box">星期日</b></span><span class="label-text">至</span>
                            <span class="date box">2016-05-30<b class="week-box">星期一</b></span>
                            <span class="booking-info">入住1晚<b class="room-number">1间房</b></span>
                        </div> -->
                    </li>

                </ul>
            </div>
        </div>
    </div>


    <div class="m-wrap">
        <div class="pay-cont">
            <div class="pay-total real-pay">
                <ul>
                    <li>
                        <h2>订单总价</h2>
                        <span class="total-price"><dfn>¥</dfn><b class="price-value">{!! $c_price !!}</b></span></li>
                    
                    <!-- <li>
                        <h2>到店支付</h2>
                        <span class="total-price"><dfn>¥</dfn><b class="price-value">0.00</b></span></li> -->
                </ul>
            </div>

            <div class="pay-total">
                <ul>
                    <li>
                        
                        <h2>在线支付</h2>
                        
                        <span class="total-price highlight-text">
                            <dfn>¥</dfn>
                            <b class="price-value">{!! $c_price !!}</b>
                            
                        </span>
                    </li>
                </ul>
            </div>
            
            <!-- <div class="pay-group">
                <h2>抵扣</h2>
                <div class="m-form-cont">
                    
                <div class="control-group">
                    
                    <label for="" class="control-label">
            <input type="checkbox" name="" checked="checked" id="chkUseIntegration">使用积分</label>
                    
                    <div class="controls" id="divIntegration">
            使用
               <input type="text" id="iptIntegration" refname="积分" class="ipt-text" value="200" maxref="200" />积分
               <span class="hint-text gray-text">（可用200积分<i class="icon-hint" id="showFloatIntegration" rel="integration-tip" score="200" amount="2.00" canusescore="200" canuseamount="2.00" percentage="10"></i> ）  </span>
               <span class="price-box">-<dfn>¥</dfn><b class="price-value" id="integrationSpend">2.00</b></span>
                    </div>
                    
                </div>
            
                    <div class="pay-group">
                        
            <div class="control-group">
                <label for="" class="control-label">
                    <input type="checkbox" name="" id="chkUseGiftCard" checked='checked' >使用礼品卡</label>
                <div class="controls" id="divUseGiftCardInfo">
            
                    
                    <div class="car-info" id="divHadUseTicketCard">
            
            <label for="" id="pGiftCard_21009736">
                <input type="checkbox" name="" id="giftCard_21009736" ref="TCC4DE45UR44444A" refpwd="7G2HB682" checked='checked'  currentcash="30.00" canusecash="30.00" maxcash="30.00" usetype="2">30元礼品卡：TCC4DE45UR44444A （ <span>卡内余额:30.00</span> 本次可使用<span id="giftCard_use_21009736">30.00</span>）</label>
            <span class="price-box">-<dfn>¥</dfn><b class="price-value" id="giftCardSpend_21009736">30.00</b></span>
            <span id="spnOrderOnce_21009736" class="m-msg-cont" style="display:none;" >该种礼品卡每个订单限用1张</span>
            
                    </div>
                    
                    <div class="from-line"  id="spnUseGiftCard" >
                <span class="card-box">
                卡号
                                    <input type="text" class="ipt-sm" maxlength="4">-
                                    <input type="text" class="ipt-sm" maxlength="4">-
                                    <input type="text" class="ipt-sm" maxlength="4">-
                                    <input type="text" class="ipt-sm" maxlength="4"></span>
                <span class="card-pwd">
                密码
                                    <input type="password" id="giftCardPwd" maxlength="8" class="ipt-primary"></span>
                <a href="javascript:void(0)" id="giftCardBtn" class="link-btn verif-btn" tip-data="点击底部的“立即支付”按钮后，礼品卡才正式使用">验证</a><span id="giftCardBtnDn" class="link-btn verif-btn" style="display: none;">请求中</span>
            </div>
            <div class="link-cont">
                <a href="http://vip.tujia.com/UserInfo/BindCustomerTickets" target="_blank" class="link-btn" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '绑定礼品卡']);" >绑定礼品卡</a>
                <a href="http://vip.tujia.com/UserInfo/CustomerTickets" target="_blank" class="link-btn" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '我的全部礼品卡']);" >我的全部礼品卡</a>
            </div>
                    
                    <p class="t-box dn validation-error" id="tickCardError"></p>
                </div>
            </div>
            <div id="tdGiftCardBinding" class="dn">
                <input type="hidden" id="isBindGiftcard" value="false" />
                <p>
                    卡号：<span class="card-numbe" id="spnGiftCardBindingNumber"></span>余额：<span id="spnGiftCardBindingLastAccount"></span>元<br />
                </p>
                <p>
                    短信验证码：
                     <input type="text" name="" id="mobileValidCode" class="verification" /><a href="javascript:void(0)" onclick="sendVercode()" id="sendVerification" class="btn" style="display: none;">重新发送</a><a href="javascript:void(0)" id="returnSendVerification" class="btn">重新发送（60）</a>
                    <span class="tips-box" id="spnGiftCardBindingSendMessage"></span>
                    <br />
                    <a href="javascript:void(0)" class="link-btn" style="margin: 10px 0 0 0" id="mobileVerify" tip-data="点击底部的“立即支付”按钮后，礼品卡才正式使用">验证</a><span class="t-box dn validation-error" id="tickCardError1"></span>
                </p>
            </div>
            
            
                        
                    </div>
                    
            
            <div class="control-group">
                <label for="" class="control-label">
                    <input type="checkbox" name="" id="chkUsePrePayCard" checked="checked">途游卡</label>
                <div class="controls" id="spnUsePrepayCard">
            
                    <div class="car-info" id="divHadUsePrepayCard">
            
                    </div>
            
                    
            
                    <div class="from-line">
            卡号
                                <input type="text" class="ipt-sm" maxlength="4">-
                                <input type="text" class="ipt-sm" maxlength="4">-
                                <input type="text" class="ipt-sm" maxlength="4">-
                                <input type="text" class="ipt-sm" maxlength="4">
            密码
                                <input type="password" id="prepayCardPwd" maxlength="8" class="ipt-primary">
            <a href="javascript:void(0)" id="prepayCardBtn" class="link-btn verif-btn" tip-data="点击底部的“立即支付”按钮后，途游卡才正式使用">验证</a><span id="prepayCardBtnDn" class="link-btn verif-btn" style="display: none;">请求中</span>
            
            <span class="hint-text gray-text">(途游卡抵扣的相关金额无法开发票)</span>
            
                    </div>
                    <div class="link-cont" id="divUsePrepayCardLink">
            <a href="http://vip.tujia.com/UserInfo/BindPrepayCard" target="_blank" class="link-btn" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '绑定途游卡']);">绑定途游卡</a>
            <a href="http://vip.tujia.com/UserInfo/PrepayCard" target="_blank" class="link-btn" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '我的全部途游卡']);">我的全部途游卡</a>
                    </div>
                </div>
                <p class="t-box dn validation-error" id="prepayCardError"></p>
            </div>
             

                </div>
            </div>
-->
            <div class="pay-total real-pay">
                <h2>实付款</h2>

                <div class="total-info" id="tdNeedTopay" cash="{!! $c_price !!}">
                    <span class="total-price"><dfn>¥</dfn><b class="price-value">{!! $c_price !!}</b></span>
                </div>
            </div>
            
            <form action="http://pay.tujia.com/Pay/index" method="get" id="payForm" target="_blank" bank="">

                <div class="pay-type-group">
                    <div id="payment">
                        <h2>支付方式</h2>
                        <div class="pay-type-cont">
                            <div class="type-list">
                                <ul>
                                    
                                    <li>

                                        <input type="radio" name="payradio" data-form-bank="" checked="checked" date-form-enumpaymenttype="TenScanPay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '微信支付']);" />
                                        <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/WePayLogo.jpg" alt="" width="132" height="38" class="payment-pic hander_forpay" />
                                    </li>
                                    
                                    <li>

                                        <input type="radio" id="radioOnAlipay" name="payradio" data-form-bank="" data-form-value="http://www.tujia.com/PaytoAlipay/Send/" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '支付宝']);" />
                                        <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/Alipaynew.png" alt="" width="132" height="38" class="payment-pic hander_forpay" />

                                    </li>
                                    
                                </ul>
                            </div>
                            

<div class="bank-list" id="payment">


    <ul class="clearfix" id="paytype">
        
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio6"  data-form-bank="CMB" data-form-value="/PaytoAlipay/Send?bank=CMB" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '招行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/CMB_OUT.gif" alt="招商银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio5" data-form-bank="ICBCB2C" data-form-value="/PaytoAlipay/Send?bank=ICBCB2C" date-form-enumpaymenttype="Alipay"  onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '工行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/ICBC_OUT.gif" alt="中国工商银行 " />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio8" data-form-bank="ABC" data-form-value="/PaytoAlipay/Send?bank=ABC" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '农行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/ABC_OUT.gif" alt="中国农业银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio7" data-form-bank="CCB" data-form-value="/PaytoAlipay/Send?bank=CCB" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '建行']);"  />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/CCB_OUT.gif" alt="中国建设银行 " />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio4" data-form-bank="BOCB2C" data-form-value="/PaytoAlipay/Send?bank=BOCB2C" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '中国银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/BOC_OUT.gif" alt="中国银行" />
            </label>
        </li>
        




        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio11" data-form-bank="SPDB" data-form-value="/PaytoAlipay/Send?bank=SPDB" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '浦发银行']);"  />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/SPDB_OUT.gif" alt="上海浦东发展银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio13" data-form-bank="CMBC" data-form-value="/PaytoAlipay/Send?bank=CMBC" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '民生银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/CMBC_OUT.gif" alt="中国民生银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio15" data-form-bank="CIB" data-form-value="/PaytoAlipay/Send?bank=CIB" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '兴业银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/CIB_OUT.gif" alt="兴业银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio16" data-form-bank="SPABANK" data-form-value="/PaytoAlipay/Send?bank=SPABANK" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '平安银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/SPABANK_OUT.gif" alt=" 平安银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio17" data-form-bank="GDB" data-form-value="/PaytoAlipay/Send?bank=GDB" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '广东发展银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/GDB_OUT.gif" alt="广东发展银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio19" data-form-bank="POSTGC" data-form-value="/PaytoAlipay/Send?bank=POSTGC" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '邮政储蓄银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/PSBC_OUT.gif" alt=" 中国邮政储蓄银行" />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio18" data-form-bank="HZCBB2C" data-form-value="/PaytoAlipay/Send?bank=HZCBB2C" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '杭州银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/HZCB_OUT.gif" alt=" 杭州银行 " />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio20" data-form-bank="NBBANK" data-form-value="/PaytoAlipay/Send?bank=NBBANK" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '宁波银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/NBBANK_OUT.gif" alt=" 宁波银行 " />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio21" data-form-bank="BJRCB" data-form-value="/PaytoAlipay/Send?bank=BJRCB" date-form-enumpaymenttype="Alipay"  onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '北京农商银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/BJRCB_OUT.gif" alt=" 北京农村商业银行 " />
            </label>
        </li>
        <li>
            <label for="">
                <input type="radio" name="payradio" id="Radio22" data-form-bank="FDB" data-form-value="/PaytoAlipay/Send?bank=FDB" date-form-enumpaymenttype="Alipay" onclick="_gaq.push(['_trackEvent', 'pcOrderPay', '富滇银行']);" />
                <img src="http://staticfile.tujia.com/PortalSite2/Images/Bank/FDB_OUT.gif" alt=" 富滇银行 " />
            </label>
        </li>
        
    </ul>
</div>

                        </div>
                    </div>
                    <div class="btn-cont">
                        <input type="submit" id="pay" value="立即支付" class="pay-btn" rel="#popup" />
                        <a href="javascript:void(0)" class="pay-btn pay-btn-dis" id="hidPayButton" style="display: none;">支付中...</a>
                    </div>
                </div>

            </form>
            
        </div>
    </div>

    <div class="m-wrap">
        <div class="help-cont ">
            <div class="help-hd ">
                <h2>支付相关帮助</h2>
            </div>
            <div class="help-list ">
                <ul>
                    <li>
                        <h2>没有网上银行怎么付款？</h2>
                        <p class="text-cont ">
                            只要您有储蓄卡/信用卡，可使用“银联在线支付”进行购买，无需开通网上银行。
                        </p>
                    </li>
                    <li>
                        <h2>网上银行扣款后，订单仍显示"未付款"怎么办？</h2>
                        <p class="text-cont ">可能是由于银行的数据没有及时传输，请您不要担心，稍后刷新页面查看。如较长时间仍显示未付款，可联系途家客服400-188-1234为您解决。</p>
                    </li>
                    <li>
                        <h2>网上银行支付失败怎么办？</h2>
                        <p class="text-cont ">如有因网络中断或页面过期、超时、错误等问题导致支付失败，请先确认是否已经扣款，如未扣款可尝试再支付一次。您也可以联系您使用的银行或支付平台获得帮助。</p>
                    </li>
                    <li>
                        <h2>取消订单，退款什么时候到账？</h2>
                        <p class="text-cont ">支付宝退款1-2个工作日到账；网银/信用卡2到7个工作日到账。</p>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <div class="m-ensure-cont">
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

    <form id="formTran" method="post" action="/Order/PayTran1/" target="_blank">
        <input data-val="true" data-val-number="字段 OrderID 必须是一个数字。" data-val-required="OrderID 字段是必需的。" id="OrderID" name="OrderID" type="hidden" value="0" />
        <input data-val="true" data-val-number="字段 PaymentInfoID 必须是一个数字。" data-val-required="PaymentInfoID 字段是必需的。" id="paymentinfoid" name="paymentinfoid" type="hidden" value="0" />
        <input id="channelTran" name="channelTran" type="hidden" value="" />
        <input id="bankTran" name="bankTran" type="hidden" value="" />
        <input id="orderNumber" name="orderNumber" type="hidden" value="MN9963407" />
        <input id="customerID" name="customerID" type="hidden" value="4245750" />
        <input id="enumpaymenttype" name="enumpaymenttype" type="hidden" value="TenScanPay" />
        <input id="thirdPay" name="thirdPay" type="hidden" value="419.00" />
    </form>

    <div class="dn" id="payLoading" ref="支付中">
        <div class="pay-info-box" id="payOnebyOne">
            <p>
                <img src="http://staticfile.tujia.com/PortalSite2/Images/orders-img/loading.gif" alt="支付中" />
            </p>
            <p>您好，系统正在进行订金抵扣，稍后进入支付页面</p>
        </div>
    </div>


    <div id="payError" class="pay-info-box" style="display: none;" ref="支付异常">
        <p id="spnPayError">
        </p>
        <p class="reLink"><a href="javascript:;" id="payErrorConfirm">&raquo;&nbsp;确定</a></p>
    </div>



    <div class="alertWraper dn" id="popup">
        <div class="alertHead"><span id="popNoticeInfo"></span><a href="javascript:" class="closeBtn " id="closePopup"></a></div>
        <div class="alertBody" id="popupColumn2">
            <div class="pay-info-box">
                <p>
                    <img src="http://staticfile.tujia.com/PortalSite2/Images/orders-img/loading.gif" alt="支付中" />
                </p>
                <p>您好，系统正在进行订金抵扣，稍后进入支付页面</p>
            </div>
        </div>
    </div>


    <div class="pay-info-box" style="display: none;" id="hidPayOnOther" ref="完成支付">
        <p>
            请您在新打开的页面上完成付款。<br />
            付款完成前请不要关闭此窗口。 
        </p>
        <p class="reLink"><a href="#" class="tc db" id="endpay">已完成付款</a></p>
        <p><a href="javascript:;" id="repay">&raquo;&nbsp;重新选择付款方式</a></p>
    </div>




    <div class="dn" id="hidCanContainUse" ref="及时付款提醒">
        <div class="pay-info-box">
            <p>您还有<span id="canContainUseType"></span>可以使用，请确认是否使用！</p>
            <p class="reLink"><a href="javascript:void(0)" id="ContainUse">使用</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="NoContainUse" class="dis-relink">不使用</a></p>
        </div>
    </div>

    
    <div class="m-tips-wrap dn" id="integration-tip" style="display: none;">
        <div class="tips-content">
            <p>您的积分：<span style="font-family: Tahoma; font-weight: bold">200</span></p>
            <p>100分=<span style="color: #f60;"><dfn style="font-family: Arial; font: inherit;">¥</dfn><b class="price-value" style="font-family: Tahoma">1</b></span></p>
            <p>积分抵订金上限：房费<span style="font-family: Tahoma;">10%</span></p>
        </div>
    </div>
    
   
    
<!-- footer Start -->




<div class="m-seo-list">


</div>

<div style="display: none">SeoFooter执行时间: 9.6002</div>

<div class="m-footer-link-list" style="text-align: center;">
    <a href="http://content.tujia.com/Home/Index.htm" target="_blank" class="forst" rel="nofollow">关于我们</a>|
        <a href="http://content.tujia.com/BusinessIntro/HolidayApartment.htm" target="_blank" rel="nofollow">业务介绍</a>|
        <a href="http://content.tujia.com/Jobs/Social.htm" target="_blank" rel="nofollow">加入途家</a>|
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


    function getEnumCustomerLevel() {
        $.ajax({
            type: "Get",
            url: "/Order/GetEnumCustomerLevel/t=" + new Date().getTime(),
            success: function (data) {
                var models = data.split('|');
                var title = models[0];
                var isKA = models[1];
                if (title == "false" && isKA == "false") {
                    //alert('nohighLevel');
                } else {
                    $.cookie("highLevelCustomerNoticeStatus", 1, { expires: 100 });
                    //alert(data);
                    $(".highcustomerlevel-text").html(title);
                    if (title == "钻石会员") {
                        $(".maxrate-text").html("10");
                    } else if (title == "白金会员" || title == "途家员工") {
                        $(".maxrate-text").html("5%-10");
                    } else {
                        $(".maxrate-text").html("3%-5");
                    }
                    showDialogForBooking("light1", "divfadebg1", 0);
                }
            }
        });
    }

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
               TUJIA_CLIENTID = '126fd571-613e-4bc8-aedd-aea08c6873b9';
         var imUrl = "http://im.tujia.com";
         var portalUrl = "http://www.tujia.com";
         var customerUrl =  "http://vip.tujia.com";
         var favoriteUrl = "http://vip.tujia.com";
         var MESSAGE_RADIO="http://staticfile.tujia.com/PortalSite2/radio/message.wav";
         var worldUrl = "";

               
     </script>
     <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/im_v2.js?v=67e5d64"></script>
    <script type="text/javascript" src="http://cdn.ronghub.com/RongIMLib-2.0.10.min.js"></script>
     
    <div class="m-login-wrap " id="userPop">
    <div class="login-head">
         
            <h2>登录即享：积分余额抵订金，高级会员有优惠</h2>
        <i class="close-btn  closeSubmit" title="关闭"></i>
    </div>
    <div class="login-tabs">
            <a id="tabSmsLogin" href="javascript:;" class="phone-pwd">短信快捷登录/注册</a>
                            <a id="tabPwdLogin" href="javascript:;" class="user-pwd">普通登录</a>
    </div>
    <div class="login-body">
        <div id="tabPwdLoginContent" class="dn">
                    <div class="column-box">
                   <p>注册立送<span class="highlight-box">100</span> 元礼品卡，预订立即可用</p>        
        </div>

        <div class="control-group" style="margin-top:10px;">
            <div class="controls">
                <label for="account">
                    <input type="text" class="ipt-text" name="username" id="account" value="" />
                    <span class="text-watermark">用户名/手机号/邮箱</span>
                </label>
            </div>
        </div>

        <div class="control-group">

            <div class="controls">
                <label for="password">
                    <input type="password" class="ipt-text" name="pwd" id="password" />
                    <span class=" text-watermark">密码</span>
                </label>
            </div>
            <div class="validationError dn" id="loginerrormsg"></div>
        </div>

        <div class="control-group  " id="validateArea">
            <div class="controls">
                <label for="verifycode">
                    <input type="text" class="ipt-text verify-ipt" name="verifycode" id="verifycode" />
                    <span class="text-watermark" style="width: 140px;">请输入计算结果</span>
                    <img id="verifyImage" alt="看不清楚，换一张" class="verify-img" />
                    <a id="verifyImageLink" href="javascript:void(0)" class="change-rand" style="display:none">看不清，换一张</a>
                </label>
            </div>
            <div class="validationError dn" id="verifycodeErorr"></div>
        </div>

            <div class="control-group t-control-group">
                <div class="controls">
                    
                    <label for="saveUserLongTime"><input type="checkbox" name="" class="check-btn " id="saveUserLongTime">保存登录状态2周</label>

                    <a href="https://passport.tujia.com/PortalSite/FetchPassword" class="forget-pwd" target="_blank">忘记密码？</a>

                    <input type="hidden" name="userExpiresHours" id="userExpiresHours" value="" />
                </div>
            </div>

        <div class="control-group btn-group">
            <div class="controls">
                <input type="button" value="登录" class="login-btn" id="loginSubmit" style="cursor:pointer;" />
                <input type="button" value="登录中" class="login-btn" style="display:none;" id="loginSubmitIng" />
                
            </div>
          
        </div>

             <div class="coagent-cont">
                <div class="coagent-tit"><span>合作网站账号登录</span></div>
                <div class="link-btn-cont">
                     <a href="javascript:;" id="qqLogin" title="QQ账户登录" onclick="qqLogin();return false;"  class="qq-login-btn">QQ</a>
                     <a href="javascript:;" id="sinaLogin" title="新浪微博账户登录" onclick="sinaLogin();return false;" class="sian-login-btn">新浪微博</a>
                     <a href="javascript:;" id="" title="微信账户登录" onclick="wechatLogin();return false;" class="weixin-login-btn">微信</a>
                </div>
            </div>


<script type="text/javascript">
    $('#loginSubmit').bind('click', function () {
        if (!$("#account").val() || !$("#password").val()) {
            $('#loginerrormsg').html("用户名或密码不能为空！").show();
            return;
        }

        $("#loginSubmit").hide();
        $("#loginSubmitIng").show();
        $.ajax({
            url: 'https://passport.tujia.com/PortalSite/AjaxLogin',
            data: {
                'username': $('#account').val()
                , 'pwd': $('#password').val()
                , 'verifycode': $('#verifycode').val()
                , 'userExpiresHours': $('#userExpiresHours').val()
                , 'currentUrl': window.location.href
            },
            type: 'post',
            dataType: 'jsonp',
            success: function (res) {
                if (res.IsSuccess) {
                    if (res.RedirectUrl) {
                        window.location.href = res.RedirectUrl;
                        return;
                    }

                    if ($("#showButton").val() == "3" || $("#showButton").val() == "4") {
                        if (window.location.href.indexOf("?") > -1) {
                            window.location.href = window.location.href + "&show=" + $("#showButton").val();
                        }
                        else {
                            window.location.href = window.location.href + "?show=" + $("#showButton").val();
                        }
                    }
                    else {
                        var redirectUrl = '';

                        var href = redirectUrl == "" ? $("div.j-logon-directorder > a").attr("href") : redirectUrl;
                        if (href) {
                            window.location.href = href;
                        }
                        else {
                            window.location.reload();
                        }
                    }

                } else {
                    $("#loginSubmit").show();
                    $("#loginSubmitIng").hide();
                    if (res.ErrorCount >= 5) {
                        $('#validateArea').show();
                    }
                    if (res.ErrorCode == 1) {
                        $('#loginerrormsg').html(res.Message).show();
                        $('#verifycodeErorr').hide();
                    } else {
                        $('#validateArea').show();
                        $('#loginerrormsg').hide();
                        $('#verifycodeErorr').html(res.Message).show();
                    }
                    $('#verifyImageLink').click();
                }
            }
        });
    });

    $('#account,#password,#verifycode').focus(function () {
        $(this).next().hide();

        $('#loginerrormsg').hide();
        $('#verifycodeErorr').hide();
    }).blur(function () {
        if ($.trim($(this).val()) == "") {
            $(this).next().show();
        }
    });

    $("#saveUserLongTime").click(function () {
        if (this.checked) {
            $("#userExpiresHours").val(350);
        } else {
            $("#userExpiresHours").val("");
        }
    });

    $("#verifyImage,#verifyImageLink").click(function () {
        var verifyimagesrc = 'https://passport.tujia.com/PortalSite/VerifyImage?r=' + Math.random();
        $("#verifyImage").attr("src", verifyimagesrc);
        return false;
    });

    function qqLogin() {
        window.location = "https://passport.tujia.com/PortalSite/QQLogin?srcUrl=http%3a%2f%2fbooking.tujia.com%2fOrder%2fPayQueue%3fordernumber%3dMN9963407%26isNewOrder%3dTrue";
    }

    function sinaLogin() {
        window.location = "https://passport.tujia.com/PortalSite/SinaLogin?srcUrl=http%3a%2f%2fbooking.tujia.com%2fOrder%2fPayQueue%3fordernumber%3dMN9963407%26isNewOrder%3dTrue";
    }

    function wechatLogin() {
        window.location = "https://passport.tujia.com/PortalSite/WeChatLogin?srcUrl=http%3a%2f%2fbooking.tujia.com%2fOrder%2fPayQueue%3fordernumber%3dMN9963407%26isNewOrder%3dTrue";
    }
</script>

        </div>
        <div id="tabSmsLoginContent" class="dn">
            
        <div class="column-box">
                <p>注册立送<span class="highlight-box">100</span> 元礼品卡，预订立即可用</p>

        </div>
        <div class="control-group" style="margin-top:10px;">
            <div class="controls">
                <label for="smobile">
                    <input type="text" class="ipt-text" name="smobile" id="smobile" value=""/>
                    <span class="text-watermark">手机号</span>
                </label>
            </div>
        </div>

<div class="control-group  " id="svalidatearea">
    <div class="controls">
        <label for="sverifycode">
            <input type="text" class="ipt-text verify-ipt" name="sverifycode" id="sverifycode" />
            <span class="text-watermark" style="width: 140px;">请输入计算结果</span>
            <img id="sverifyImage" alt="看不清楚，换一张" class="verify-img" />
            <a id="sverifyImageLink" href="javascript:void(0)" class="change-rand" style="display:none">看不清，换一张</a>
        </label>
    </div>
</div>

        <div class="control-group  pwd-group">
    <div class="controls">
        <label for="spassword">
            <input type="text" class="ipt-text" name="code" id="spassword" />
            <span class=" text-watermark">动态密码</span>
        </label>

        <input type="button" id="sbtnGetVerifyCode" value="获取手机验证码" class="verify-btn" />
    </div>
    <div class="validationError dn" id="sloginerrormsg"></div>
</div>


        

        <div class="control-group btn-group">
            <div class="controls">
                <input type="button" value="登录/注册" class="login-btn" id="sloginSubmit" style="cursor:pointer;" />
                <input type="button" value="登录/注册中" class="login-btn" style="display:none;" id="sloginSubmitIng" />

            </div>
            
        </div>



            <div class="coagent-cont">
                <div class="coagent-tit"><span>合作网站账号登录</span></div>
                <div class="link-btn-cont">
                     <a href="javascript:;" id="qqLogin" title="QQ账户登录" onclick="qqLogin();return false;"  class="qq-login-btn">QQ</a>
                     <a href="javascript:;" id="sinaLogin" title="新浪微博账户登录" onclick="sinaLogin();return false;" class="sian-login-btn">新浪微博</a>
                     <a href="javascript:;" id="" title="微信账户登录" onclick="wechatLogin();return false;" class="weixin-login-btn">微信</a>
                </div>
            </div>
        

<script type="text/javascript">

    $('#sloginSubmit').click(function () {
        if (!$("#smobile").val() || !$("#spassword").val()) {
            $('#sloginerrormsg').html("电话或短信验证码不能为空！").show();
            return;
        }

        $("#sloginSubmit").hide();
        $("#sloginSubmitIng").show();

        
        $.ajax({
            url: 'https://passport.tujia.com/PortalSite/SmsAjaxLogin',
            data: {
                'smobile': $('#smobile').val(), 'spassword': $('#spassword').val(), 'currentUrl': window.location.href
            },
            type: 'post',
            dataType: 'jsonp',
            success: function (res) {
                if (res.IsSuccess) {
                    
                    if (res.RedirectUrl) {
                        window.location.href = res.RedirectUrl;
                        return;
                    }

                    var redirectUrl = '';

                    var href = redirectUrl == "" ? $("div.j-logon-directorder > a").attr("href") : redirectUrl;
                    if (href) {
                        window.location.href = href;
                    }
                    else {
                        window.location.reload();
                    }
                } else {
                    $("#sloginSubmit").show();
                    $("#sloginSubmitIng").hide();
                    $('#sloginerrormsg').html(res.Message).show();
                }
            }
        });
       
    });

    var countdownTimeWait = 60;
    function CountdownTime() {

        if (countdownTimeWait == 0) {
            $('#sbtnGetVerifyCode').removeAttr("disabled").val('获取动态密码');
            countdownTimeWait = 60;
        } else {
            $('#sbtnGetVerifyCode').attr("disabled", true).val('重新发送(' + countdownTimeWait + ')');
            countdownTimeWait--;
            setTimeout(function () {
                CountdownTime();
            }, 1000)
        }
    }

    $('#sbtnGetVerifyCode').click(function () {
        var $sverifycode = $("#sverifycode");

        if (!$("#svalidatearea").hasClass("dn") && !$sverifycode.val()) {
            $('#sloginerrormsg').html("验证码不能为空！").show();
            return;
        }

        var $smobile = $("#smobile");

        if (!$smobile.val()) {
            $('#sloginerrormsg').html("手机号不能为空！").show();
            return;
        }

        var re = /^1\d{10}$/;
        if (!re.test($smobile.val())) {
            $('#sloginerrormsg').html("手机号不正确！").show();
            return;
        }

        $('#sloginerrormsg').html("正在发送验证码至你的手机，请稍等！").show();

        $.ajax({
            url: 'https://passport.tujia.com/PortalSite/SmsSendVerifyCode',
            data: {
                'smobile': $smobile.val(), 'sverifycode': $sverifycode.val()
            },
            type: 'post',
            dataType: 'jsonp',
            success: function (res) {

                $('#sloginerrormsg').html(res.Message).show();

                if (!res.IsSuccess) {
                    $('#sverifyImageLink').click();
                }
                else {
                    CountdownTime();
                }
            }
        });
    });


    

        $('#smobile,#spassword,#sverifycode').focus(function () {
            $(this).next().hide();

            $('#sloginerrormsg').hide();
        }).blur(function () {
            if ($.trim($(this).val()) == "") {
                $(this).next().show();
            }
        });        

        $("#saveUserLongTime").click(function () {
            if (this.checked) {
                $("#userExpiresHours").val(350);
            } else {
                $("#userExpiresHours").val("");
            }
        });

        $("#sverifyImage,#sverifyImageLink").click(function () {
            var sverifyImagesrc = 'https://passport.tujia.com/PortalSite/VerifyImage?r=' + Math.random();
            $("#sverifyImage").attr("src", sverifyImagesrc);
            return false;
        });


</script>

        </div>
    </div>
</div>
<script type="text/javascript">

    $("#loginBtn").overlay({
        top: "center",
        mask: {
            color: '#000',
            loadSpeed: 100,
            opacity: 0.5
        },
        target: "#userPop",
        closeOnClick: false,
        close: ".closeSubmit,div.link-group > a",
        fixed: false,
        onBeforeLoad: function () {
            $(".login-tabs").children().first().click();
        }

    });

    $("#tabPwdLogin").click(function () {
        $("#tabPwdLogin").addClass("isActive");
        $("#tabSmsLogin").removeClass("isActive");

        $("#tabPwdLoginContent").show();
        $("#tabSmsLoginContent").hide();
        $("#verifyImageLink").click();

        if ($("#account").val() !== "")
            $("#account").focus();
    });

    $("#tabSmsLogin").click(function () {
        $("#tabSmsLogin").addClass("isActive");
        $("#tabPwdLogin").removeClass("isActive");

        $("#tabPwdLoginContent").hide();
        $("#tabSmsLoginContent").show();
        $("#sverifyImageLink").click();

        if ($("#smobile").val() !== "")
            $("#smobile").focus();
    });

    $("#tabPwdLoginContent,#tabSmsLoginContent").on("keydown", "input:visible", function (event) {
        if (event.keyCode != '13') {
            return;
        }

        $(event.delegateTarget).find("input.login-btn:button:visible").click();
        return false;
    })
</script>
    <script type="text/javascript">
        function showDialog(id, ticketCount) {
            $("a[name='closebtn']").each(function () { this.click() });
            document.getElementById(id).style.display = 'block';
            var topy = 300 + ticketCount * 30;
            document.getElementById(id).style.top = topy + "px";
        }
        function closeBtn(id) {
            document.getElementById(id).style.display = 'none';
        }

        if ($("#showFloatIntegration").length > 0) {
            $("#showFloatIntegration").powerFloat({
                container: "plugin",
                reverseSharp: true,
                position: "7-5"
            });
        }



        Date.prototype.format = function (format) {
            var o = {
                "M+": this.getMonth() + 1, //month
                "d+": this.getDate(),    //day
                "h+": this.getHours() - 8,   //hour
                "m+": this.getMinutes(), //minute
                "s+": this.getSeconds(), //second
                "q+": Math.floor((this.getMonth() + 3) / 3),  //quarter
                "S": this.getMilliseconds() //millisecond
            }
            if (/(y+)/.test(format)) format = format.replace(RegExp.$1,
                (this.getFullYear() + "").substr(4 - RegExp.$1.length));
            for (var k in o) if (new RegExp("(" + k + ")").test(format))
                format = format.replace(RegExp.$1,
                RegExp.$1.length == 1 ? o[k] :
                ("00" + o[k]).substr(("" + o[k]).length));
            return format;
        }


        $.extend({
            timeLess: function (ele, time, format, fn) {
                if (Number(time) > 0) {
                    var a = setInterval(function () {
                        time -= 1000;
                        var date = new Date(Number(time));
                        ele.html(date.format(format));
                    }, 1000);
                    setTimeout(function () {
                        clearInterval(a);
                        if (fn) {
                            fn();
                        }
                    }, Number(time))
                }
            }
        });

        var time = Number('2698636');
        if (time > 0) {
            if ($("#showtime").val() == "1") {
                $.timeLess($("#spnTimeLast"), time, "mm分ss秒", ClearPay);
            }
            else {
                $.timeLess($("#spnTimeLast"), time, "hh时mm分", ClearPay);
            }
        }
        else {
            ClearPay();
        }

        var hidOrderID = '0'
        var hidOrderNumber = 'MN9963407'
        $("#endpay").attr("href", "/Order/FinishOrderQueue?ordernumber=MN9963407");



        var integration = 0;
        var customerAccount = 0;
        var rentalAccount = 0;
        var giftCard = [];
        var giftCardAll = 0;
        var prepayCard = [];
        var prepayCardAll = 0;


        function ClosePay() {

            $("#payment").hide();
            $("#pay").val("完成支付");

        }

        function ShowPay() {

            $("#payment").show();
            $("#pay").val("立即支付");
        }

        function ClearPay() {
            $("#payForm").remove();
        }


        function getData() {
            if ($("#iptIntegration").length > 0) {
                if ($("#chkUseIntegration").attr("checked") == "checked") {
                    integration = Number($("#iptIntegration").val()) / 100;
                }
                else {
                    integration = 0;
                }
            }


            if ($("#iptCustomerAccount").length > 0) {
                if ($("#chkUseCustomerAccount").attr("checked") == "checked") {
                    customerAccount = Number($("#iptCustomerAccount").val());
                }
                else {
                    customerAccount = 0;
                }
            }
            if ($("#chkUseRental").length > 0) {
                if ($("#chkUseRental").attr("checked") == "checked") {
                    if ($("#iptRentalAccount").length > 0) {
                        rentalAccount = Number($("#iptRentalAccount").val());
                    }
                } else {
                    rentalAccount = 0;
                }
            }



            prepayCard = [];
            prepayCardAll = 0;
            if ($("#chkUsePrePayCard").length > 0) {
                if ($("#chkUsePrePayCard").attr("checked") == "checked") {
                    $("input[id^='prepayCard_']").each(function () {
                        if ($(this).attr('checked') == 'checked') {
                            var note = $(this).attr("id").split("_")[1];
                            var o = {};
                            o.ID = note;
                            o.CardNumber = $(this).attr("ref");
                            o.Pwd = $(this).attr("refpwd");
                            o.Cash = Number($(this).attr("currentcash"));
                            o.MaxCash = Number($(this).attr("maxcash"));
                            prepayCardAll += Number(o.Cash);
                            prepayCard.push(o);
                        }
                    });
                } else {
                    prepayCardAll = 0;
                }
            }


            giftCard = [];
            giftCardAll = 0;
            if ($("#chkUseGiftCard").length > 0) {
                if ($("#chkUseGiftCard").attr("checked") == "checked") {
                    $("input[id^='giftCard_']").each(function () {
                        if ($(this).attr('checked') == 'checked') {
                            var note = $(this).attr("id").split("_")[1];
                            var o = {};
                            o.ID = note;
                            o.CardNumber = $(this).attr("ref");
                            o.Pwd = $(this).attr("refpwd");
                            o.Cash = Number($(this).attr("currentcash"));
                            o.MaxCash = Number($(this).attr("maxcash"));
                            giftCardAll += Number(o.Cash);
                            giftCard.push(o);
                        }
                    });
                }
                else {
                    giftCardAll = 0;
                }
            }

        }

        function SetUseMax(index) {
            if (index == 5) {
                if ($("#chkUsePrePayCard").length > 0) {
                    if ($("#chkUsePrePayCard").attr("checked") == "checked") {
                        $("input[id^='prepayCard_']").each(function () {
                            if ($(this).attr('checked') == 'checked') {
                                var note = $(this).attr("id").split("_")[1];
                                var max = Number($(this).attr("maxcash")).toFixed(2);
                                var canuse = Number($(this).attr("canusecash")).toFixed(2);
                                $("#prepayCard_use_" + note).html(canuse);
                                $("#prepayCard_last_" + note).html(Number(max - canuse));
                                $(this).attr("currentcash", canuse);
                                $("#prepayCardSpend_" + note).html(canuse);
                            }
                            else {
                                var note = $(this).attr("id").split("_")[1];
                                $("#prepayCardSpend_" + note).html("0.00");
                            }
                        });
                    }
                }

            }
            if (index == 4) {
                if ($("#chkUseRental").length > 0) {
                    if ($("#chkUseRental").attr("checked") == "checked") {
                        if ($("#iptRentalAccount").length > 0) {
                            var max = Number($("#iptRentalAccount").attr("maxref")).toFixed(2);
                            $("#iptRentalAccount").val(max);
                        }
                    }
                }
            }

            if (index == 3) {
                if ($("#chkUseGiftCard").length > 0) {
                    if ($("#chkUseGiftCard").attr("checked") == "checked") {
                        $("input[id^='giftCard_']").each(function () {
                            if ($(this).attr('checked') == 'checked') {
                                var note = $(this).attr("id").split("_")[1];
                                var max = Number($(this).attr("maxcash")).toFixed(2);
                                var canuse = Number($(this).attr("canusecash")).toFixed(2);
                                $("#giftCard_use_" + note).html(canuse);
                                $("#giftCardSpend_" + note).html(canuse);
                                //$("#giftCard_last_" + note).html(Number(max - canuse).toFixed(2));
                                $(this).attr("currentcash", canuse);
                            }
                            else {
                                var note = $(this).attr("id").split("_")[1];
                                $("#giftCardSpend_" + note).html("0.00");
                            }
                        });
                    }
                }


            }
            if (index == 2) {
                if ($("#iptCustomerAccount").length > 0) {
                    if ($("#chkUseCustomerAccount").attr("checked") == "checked") {
                        var max = Number($("#iptCustomerAccount").attr("maxref")).toFixed(2);
                        $("#iptCustomerAccount").val(max);
                        $("#customerAccountSpend").html(max);
                    }
                    else {
                        $("#customerAccountSpend").html("0.00");
                    }
                }
            }
            if (index == 1) {
                if ($("#iptIntegration").length > 0) {
                    if ($("#chkUseIntegration").attr("checked") == "checked") {
                        var max = Number($("#iptIntegration").attr("maxref")).toFixed(0);
                        $("spnIntegration").html(max / 100);
                        $("#iptIntegration").val(max);
                        $("#integrationSpend").html(max);
                    }
                    else {
                        $("#integrationSpend").html("0.00");
                    }
                }
            }
        }


        function computePrice(index) {
            //只向下进行计算，优先修改最低层的
            var needTopay = Number($("#tdNeedTopay").attr("cash"));

            if (index == 5) {
                SetUseMax(5);
            }
            //index以下的默认使用最大值
            for (var i = 5; i > index; i--) {
                SetUseMax(i);
            }
            if (index == 3) {
                SetUseMax(3);
            }
            getData();
            var sum = integration + customerAccount + prepayCardAll + rentalAccount + giftCardAll;
            var sumArray = [];
            sumArray.push(integration);
            sumArray.push(customerAccount);
            sumArray.push(giftCardAll);
            sumArray.push(rentalAccount);
            sumArray.push(prepayCardAll);
            if (sum > needTopay) {
                var partSum = 0;
                $.each(sumArray, function (i, obj) {
                    if (i < index) {
                        partSum += sumArray[i];
                    }
                    else {
                        return false;
                    }
                })
                if (partSum >= needTopay) {
                    //index向下的所有都去掉
                    clearInput(index);
                    //修改本行的值
                    if (Number(partSum - needTopay) == 0) {
                    }
                    else {
                        setInput(index, (partSum - needTopay));
                    }
                }
                else {
                    RecursionCompute(sumArray, (sum - needTopay));
                }
                ClosePay();
            }
            else {
                if (sum == needTopay) {
                    ClosePay()
                }
                else {
                    ShowPay();
                }
            }

            $("input[id^='giftCard_']").each(function () {
                if ($(this).attr("checked") && $(this).attr("usetype") == 2) {
                    var cardID = $(this).attr("id").split("_")[1];
                    $("#spnUseGiftCard input").attr("disabled", "disabled");
                    $("#giftCardBtn").addClass("link-btn-dis");
                    $("#giftCardBtn").attr("disabled", "disabled");
                    $("#spnOrderOnce_" + cardID).show();
                }
            });




            var maxGiftCardCash = 0;
            var giftNowCardAll = 0;

            if ($("#chkUseGiftCard").attr("checked") == "checked") {
                $("input[id^='giftCard_']").each(function () {
                    if ($(this).attr('checked') == 'checked') {
                        maxGiftCardCash += Number($(this).attr("currentcash"));
                        giftNowCardAll += Number($(this).attr("maxcash"));
                    }
                    else {
                        giftNowCardAll += Number($(this).attr("maxcash"));
                    }
                });
            }
            else {
                maxGiftCardCash = 0;
                giftNowCardAll = 0;
            }

            if (giftCardAll > 0 || maxGiftCardCash > 0) {
                $("#spnThisOrderSumTicket").html(Number(giftNowCardAll).toFixed(2));
                $("#spnThisOrderCanUseTicket").html(Number(maxGiftCardCash).toFixed(2));
            }

            PrintStr();
        }

        function clearInput(index) {
            if (index < 5) {
                setInput(5, 0);
            }
            if (index < 4) {
                setInput(4, 0);
            }
            if (index < 3) {
                setInput(3, 0);
            }
            if (index < 2) {
                setInput(2, 0);
            }
        }

        function setInput(index, cash) {
            if (index == 5) {
                prepayCard.reverse();
                if (prepayCard.length > 0) {
                    if (cash <= 0) {
                        prepayCard = [];
                        prepayCardAll = 0;
                        //$("input[id^='prepayCard_']").attr("checked", false);
                        $("b[id^='prepayCardSpend_']").html("0");
                    }
                    else {
                        $.each(prepayCard, function (i, obj) {
                            if (obj.Cash >= cash) {
                                var everyPay = 0;
                                everyPay = obj.Cash - cash;
                                $("#prepayCard_" + obj.ID).attr("currentcash", Number(everyPay).toFixed(2));
                                $("#prepayCard_use_" + obj.ID).html(Number(everyPay).toFixed(2));
                                $("#prepayCard_last_" + obj.ID).html(Number(prepayCard[i].MaxCash - everyPay).toFixed(2));
                                $("#prepayCardSpend_" + obj.ID).html(Number(everyPay).toFixed(2));
                                return false;
                            }
                            else {
                                cash -= obj.Cash;
                                var everyPay = 0;
                                $("#prepayCard_" + obj.ID).attr("currentcash", Number(everyPay).toFixed(2));
                                $("#prepayCard_use_" + obj.ID).html(Number(everyPay).toFixed(2));
                                $("#prepayCardSpend_" + obj.ID).html(Number(everyPay).toFixed(2));
                                $("#prepayCard_last_" + obj.ID).html(Number(prepayCard[i].MaxCash - everyPay).toFixed(2))
                            }
                        });
                    }
                }
            }
            else if (index == 4) {
                if (rentalAccount > 0) {
                    if (cash <= 0) {
                        rentalAccount = 0;
                        $("#iptRentalAccount").val("0");
                        $("#rentalAmountSpend").html("0");
                    }
                    else {
                        if (rentalAccount >= cash) {
                            rentalAccount -= cash;
                            $("#iptRentalAccount").val(Number(rentalAccount).toFixed(2));
                            $("#rentalAmountSpend").html(Number(rentalAccount).toFixed(2));
                        }
                        else {
                            rentalAccount = 0;
                            $("#iptRentalAccount").val("0");
                            $("#rentalAmountSpend").html("0");
                        }
                    }
                }
            }
            else if (index == 3) {
                giftCard.reverse();
                if (giftCard.length > 0) {
                    if (cash <= 0) {
                        giftCard = [];
                        girfCardPay = 0;
                        //$("input[id^='giftCard_']").attr("checked", false);
                        $("b[id^='giftCardSpend_']").html("0");
                    }
                    else {
                        $.each(giftCard, function (i, obj) {
                            if (obj.Cash >= cash) {
                                var everyPay = 0;
                                everyPay = obj.Cash - cash;
                                $("#giftCard_" + obj.ID).attr("currentcash", Number(everyPay).toFixed(2));
                                $("#giftCard_use_" + obj.ID).html(Number(everyPay).toFixed(2));
                                $("#giftCardSpend_" + obj.ID).html(Number(everyPay).toFixed(2));
                                //$("#giftCard_last_" + obj.ID).html(Number(giftCard[i].MaxCash - everyPay).toFixed(2))
                                return false;
                            }
                            else {
                                cash -= obj.Cash;
                                var everyPay = 0;
                                $("#giftCard_" + obj.ID).attr("currentcash", Number(everyPay).toFixed(2));
                                $("#giftCard_use_" + obj.ID).html(Number(everyPay).toFixed(2));
                                $("#giftCardSpend_" + obj.ID).html(Number(everyPay).toFixed(2));

                            }
                        });
                    }
                }
            }
            else if (index == 2) {
                if (customerAccount > 0) {
                    if (cash <= 0) {
                        customerAccount = 0;
                        $("#iptCustomerAccount").val("0");
                        $("#customerAccountSpend").html("0");
                    }
                    else {
                        if (customerAccount >= cash) {
                            customerAccount -= cash;
                            $("#iptCustomerAccount").val(Number(customerAccount).toFixed(2));
                            $("#customerAccountSpend").html(Number(customerAccount).toFixed(2));
                        }
                        else {
                            customerAccount = 0;
                            $("#iptCustomerAccount").val("0");
                            $("#customerAccountSpend").html("0");
                        }
                    }
                }
            }
            else if (index == 1) {
                if (integration > 0) {
                    if (cash < 0) {
                        integration = 0;
                        $("#iptIntegration").val("0");
                        $("#integrationSpend").html("0");
                    }
                    else {
                        if (integration >= cash) {
                            integration -= cash;
                            $("#iptIntegration").val(Number(integration).toFixed(2) * 100);
                            $("#spnIntegration").html(Number(integration).toFixed(2));
                            $("#integrationSpend").html(Number(integration).toFixed(2));
                        }
                        else {
                            customerAccount = 0;
                            $("#iptIntegration").val("0");
                            $("#integrationSpend").html("0");
                        }
                    }
                }
            }
        }

        function RecursionCompute(arr, sum) {
            arr.reverse();
            $.each(arr, function (i, obj) {
                if (obj >= sum) {
                    setInput((arr.length - i), sum);
                    return false;
                }
                else {
                    sum -= obj;
                    setInput((arr.length - i), obj);
                }
            })
        }

        function PrintStr() {
            getData();
            var needToPay = Number($("#tdNeedTopay").attr("cash"));
            var newNeedToPay = needToPay - Number(integration) - Number(customerAccount) - Number(giftCardAll) - Number(rentalAccount) - Number(prepayCardAll);
            if (newNeedToPay < 0) {
                newNeedToPay = 0;
            }

            //<span class="total-price"><dfn>¥</dfn><b class="price-value">2845.02</b></span>

            var html = '<span class="total-price"><dfn>¥</dfn><b class="price-value">' + Number(newNeedToPay).toFixed(2) + '</b></span>';
            //if (integration > 0 || customerAccount > 0 || prepayCardAll > 0 || rentalAccount > 0 || giftCardAll > 0) {
            //    html += '=<span class="total-price"><dfn>¥</dfn><b class="price-value">' + needToPay.toFixed(2) + ' (原支付金)</b></span>';
            //    if (integration > 0) {
            //        html += '-<span class="total-price"><dfn>¥</dfn><b class="price-value">' + integration.toFixed(2) + ' (积分)</b></span>';
            //    }
            //    if (customerAccount > 0) {
            //        html += '-<span class="total-price"><dfn>¥</dfn><b class="price-value">' + customerAccount.toFixed(2) + ' (账户余额)</b></span>';
            //    }
            //    if (giftCardAll > 0) {
            //        html += '-<span class="total-price"><dfn>¥</dfn><b class="price-value">' + giftCardAll.toFixed(2) + ' (礼品卡)</b></span>';
            //    }
            //    if (rentalAccount > 0) {
            //        html += '-<span class="total-price"><dfn>¥</dfn><b class="price-value">' + rentalAccount.toFixed(2) + ' (惠住卡)</b></span>';
            //    }

            //    if (prepayCardAll > 0) {
            //        html += '-<span class="total-price"><dfn>¥</dfn><b class="price-value">' + prepayCardAll.toFixed(2) + ' (途游卡)</b></span>';
            //    }
            //}
            $("#tdNeedTopay").empty().html(html);
            $("#thirdPay").val(Number(newNeedToPay).toFixed(2));

            if ($("#spnThisOrderSumTicket").length > 0 && $("#spnThisOrderCanUseTicket").length > 0) {
                var sum = 0;
                var canUse = 0;
                if (giftCard.length > 0) {
                    $.each(giftCard, function (i, obj) {
                        sum += obj.MaxCash;
                        canUse += obj.Cash;
                    });
                    $("#spnThisOrderSumTicket").val(Number(sum).toFixed(2));
                    $("#spnThisOrderCanUseTicket").val(Number(canUse).toFixed(2));
                }
            }
        }

        function preGiftcardPay(cardNumber) {
            if (cardNumber.length != 16) {
                showGiftcardPayError("礼品卡卡号或密码不正确");
                return false;
            }
            if (/[^a-zA-Z0-9]+/gi.test(cardNumber)) {
                showGiftcardPayError("礼品卡卡号或密码不正确");
                return false;
            }

            var pwd = $pwd.val();

            if (pwd.length == 0) {
                showGiftcardPayError("请输入密码");
                return false;
            }

            if (pwd.length != 8) {
                showGiftcardPayError("礼品卡卡号或密码不正确");
                return false;
            }

            return true;
        }

        function prePrePaycardPay(cardNumber) {
            if (cardNumber.length != 16) {
                showGiftcardPayError("途游卡卡号或密码不正确");
                return false;
            }
            if (/[^a-zA-Z0-9]+/gi.test(cardNumber)) {
                showGiftcardPayError("途游卡卡号或密码不正确");
                return false;
            }

            var pwd = $pwd.val();

            if (pwd.length == 0) {
                showGiftcardPayError("请输入密码");
                return false;
            }

            if (pwd.length != 8) {
                showGiftcardPayError("途游卡卡号或密码不正确");
                return false;
            }

            return true;
        }

        function getGiftCardNumber() {
            var cardNumber = "";
            $("#spnUseGiftCard .ipt-sm[maxlength=4]").each(function (i, obj) {
                cardNumber += $(obj).val();
            })
            cardNumber = $.trim(cardNumber);

            return cardNumber;
        }

        function getprepayCardNumber() {
            var cardNumber = "";
            $("#spnUsePrepayCard .ipt-sm[maxlength=4]").each(function (i, obj) {
                cardNumber += $(obj).val();
            })
            cardNumber = $.trim(cardNumber);

            return cardNumber;
        }



        function getContainName() {
            var str = "";
            var strArr = [];
            $("#iptIntegration,#iptCustomerAccount,#iptRentalAccount").each(function () {
                if (Number($(this).val()) < Number($(this).attr("maxref"))) {
                    strArr.push($(this).attr("refname"));
                }
            });
            if (strArr.length > 0) {
                str = strArr.join(",");
            }
            return str;
        }

        function setFouceContain() {
            $("#iptIntegration,#iptCustomerAccount,#iptRentalAccount").each(function () {
                if (Number($(this).val()) < Number($(this).attr("maxref"))) {
                    $(this).focus();
                    return false;
                }
            });
        }



        // 获取选中项
        function getPayIptChecked() {
            return $("#paytype input:checked");
        }

        // 设定选中项
        function setPayIptChecked($elem) {
            var $checked = getPayIptChecked();

            $checked.attr("checked", false);
            $elem.attr("checked", true);

            $("#payForm").attr("action", $elem.attr("data-form-value"));
            $("#payForm").attr("bank", $elem.attr("data-form-bank"));
            //alert($("#orderId").val());


            //PaytoBOCOMUnion
        }


        function ClearOtherCard(ele) {
            var cardID = ele.attr("id").split("_")[1];
            if (ele.attr("usetype") == 2) {
                //将其他的所有设置为不选中
                var note = ele.attr("id").split("_")[1];
                $("input[id^='giftCard_']").not($("#giftCard_" + note)).attr('checked', false);

                $("input[id^='giftCard_']").not($("#giftCard_" + note)).each(function () {
                    var note1 = $(this).attr("id").split("_")[1];
                    $("#giftCardSpend_" + note1).html("0.00");
                });
                $("#spnUseGiftCard input").attr("disabled", "disabled");
                $("#giftCardBtn").addClass("link-btn-dis");
                $("#giftCardBtn").attr("disabled", "disabled");
                $("#spnOrderOnce_" + cardID).show();
            }
            else {
                //如果不是单一使用，则所有单一使用的去除
                $("input[id^='giftCard_'][usetype='2']").attr('checked', false);
                $("input[id^='giftCard_'][usetype='2']").each(function () {
                    var note = $(this).attr("id").split("_")[1];
                    $("#giftCardSpend_" + note).html("0.00");
                });
                $("#spnUseGiftCard input").removeAttr("disabled");
                $("#giftCardBtn").removeClass("link-btn-dis");
                $("#giftCardBtn").removeAttr("disabled");
                $("#spnOrderOnce_" + cardID).hide();
            }
            //var cardID = ele.attr("id").split("_")[1];
            var max = $("#giftCard_" + cardID).attr("maxcash");
            $("#giftCardSpend_" + cardID).html(Number(max).toFixed(2));
        }



        //// 初始化表单
        //var paychecked = getPayIptChecked();
        //setPayIptChecked(paychecked);

        // 绑定支付按钮
        $("#payment img").click(function () {
            $(this).prev().click();
        });

        $("#payment input").bind("click", function () {
            setPayIptChecked($(this));
        });

        //$("#payment input").next("img").bind("click", function () {
        //    var  $elem = 
        //    setPayIptChecked($(this));
        //});


        //$("#radioOnAlipay").click(function () {
        //    //$(this).find("input:radio").attr('checked', 'true');
        //    //$(this).parents("li").addClass("box-Show");
        //    //$("#radioOnWebPay").parents("li").removeClass("box-Show");
        //    $("#payForm").attr("bank", "");
        //    $("#payForm").attr("action", "/PaytoAlipay/Send/");
        //    //$("#divOnWebPay").hide();
        //});

        //$("#radioOnWebPay").click(function () {
        //    $(this).find("input:radio").attr('checked', 'true');
        //    $("#divOnWebPay").show();
        //    $(this).parents("li").addClass("box-Show");
        //    $("#radioOnAlipay").parents("li").removeClass("box-Show");
        //    $("input[name='payradio']:first").attr('checked', 'checked');
        //    $("#payForm").attr("action", "/PaytoAlipay/Send?bank=CMB");
        //    $("#payForm").attr("bank", "CMB");
        //})


        $("input[date-form-enumpaymenttype]").click(function () {
            var enumpaymenttype = $(this).attr("date-form-enumpaymenttype");
            $("#enumpaymenttype").val(enumpaymenttype);
        })


        //支付相关
        computePrice(1);

        $("#iptIntegration").blur(function () {
            var max = $(this).attr("maxref");
            var curr = $(this).val();
            if (!/^[0-9]*$/.test(curr)) {
                $("#iptIntegration").val(Number(max).toFixed(0));
                curr = Number(max).toFixed(0);
                $("#iptIntegration").val(max);
                $("#integrationSpend").html(Number(max / 100).toFixed(2));
            }

            if (Number(curr) > Number(max)) {
                $("#iptIntegration").val(Number(max).toFixed(0));
                $("#integrationSpend").html(Number(max / 100).toFixed(2));
            }
            else {
                //修改抵用
                $("#spnIntegration").html(Number(curr / 100).toFixed(2));
                $("#integrationSpend").html(Number(curr / 100).toFixed(2));
            }

            computePrice(1);
        });

        $("#iptCustomerAccount").blur(function () {
            var max = $(this).attr("maxref");
            var curr = $(this).val();

            if (!(/^[0-9]*$|^\d+(\.\d+)?$/.test(curr))) {
                $("#iptCustomerAccount").val(Number(max).toFixed(2));
                curr = Number(max).toFixed(0);
                $("#customerAccountSpend").html(Number(max).toFixed(2));
            }

            if (Number(curr) > Number(max)) {
                $("#iptCustomerAccount").val(Number(max).toFixed(2));
                $("#customerAccountSpend").html(Number(max).toFixed(2));

            }
            else {
                $("#iptCustomerAccount").val(Number(curr).toFixed(2));
                $("#customerAccountSpend").html(Number(curr).toFixed(2));
            }
            computePrice(2);
        });

        //$("#iptPrePayCardAccount").blur(function () {
        //    var max = $(this).attr("maxref");
        //    var curr = $(this).val();

        //    if (!(/^[0-9]*$|^\d+(\.\d+)?$/.test(curr))) {
        //        $("#iptPrePayCardAccount").val(Number(max).toFixed(0));
        //        curr = Number(max).toFixed(0);
        //    }

        //    if (Number(curr) > Number(max)) {
        //        $("#iptPrePayCardAccount").val(Number(max).toFixed(2));
        //    }
        //    else {
        //        $("#iptPrePayCardAccount").val(Number(curr).toFixed(2));
        //    }
        //    computePrice(3);
        //});

        $("input[id^='prepayCard_']").live("click", function () {
            if ($(this).attr("checked")) {
                var cardID = $(this).attr("id").split("_")[1];
                var max = $(this).attr("maxcash");
                var canuse = $(this).attr("canusecash");
                var note = $(this).attr("id").split("_")[1];
                $("#prepayCard_use_" + note).html(canuse);
                $(this).attr("currentcash", canuse);
                $("#prepayCard_last_" + note).html(Number(max - canuse));

                if ($("#spnOrderOnce_" + cardID + ":visible").length > 0) {
                    $("#spnOrderOnce_" + cardID).hide();
                }

            }
            else {
                var max = $(this).attr("maxcash");
                var canuse = $(this).attr("canusecash");
                var note = $(this).attr("id").split("_")[1];
                $("#prepayCard_use_" + note).html("0.00");
                $(this).attr("currentcash", canuse);
                $("#prepayCard_last_" + note).html(Number(max).toFixed(2));
                $("#prepayCardSpend_" + note).html("0.00");
            }
            computePrice(5);
        });


        $("#iptRentalAccount").blur(function () {
            var max = $(this).attr("maxref");
            var curr = $(this).val();


            if (!(/^[0-9]*$|^\d+(\.\d+)?$/.test(curr))) {
                $("#iptRentalAccount").val(Number(max).toFixed(0));
                curr = Number(max).toFixed(0);
            }


            if (Number(curr) > Number(max)) {
                $("#iptRentalAccount").val(Number(max).toFixed(2));
            }
            else {
                $("#iptRentalAccount").val(Number(curr).toFixed(2));
            }
            computePrice(4);
        });

        $("input[id^='giftCard_']").live("click", function () {
            if (!$(this).attr("checked")) {
                var cardID = $(this).attr("id").split("_")[1];
                $("#spnUseGiftCard input").removeAttr("disabled");
                $("#giftCardBtn").removeClass("link-btn-dis");
                $("#giftCardBtn").removeAttr("disabled");
                $("#giftCardBtn").show();

                var max = $(this).attr("maxcash");
                var canuse = $(this).attr("canusecash");
                var note = $(this).attr("id").split("_")[1];
                $("#giftCard_use_" + note).html(canuse);
                $(this).attr("currentcash", canuse);
                //$("#giftCard_last_" + note).html(Number(max - canuse).toFixed(2));

                if ($("#spnOrderOnce_" + cardID + ":visible").length > 0) {
                    $("#spnOrderOnce_" + cardID).hide();
                }
                $("#giftCardSpend_" + note).html("0.00");

            }
            else {
                ClearOtherCard($(this));
            }
            computePrice(3);
        });

        $("#queryGiftcardRecord").click(function () {
            var cardNumber = getGiftcardNumber();
            if (cardNumber.length == 16) {
                this.href += "?giftcardNumber=" + cardNumber;
            }
        });

        $(".ipt-sm[maxlength=4]").keyup(function (event) {
            var $input = $(event.target);
            if (event.target.value.length == event.target.maxLength) {
                var $nextInput = $input.next(":input");
                if ($nextInput.length > 0) {
                    $nextInput.focus();
                }
                else {
                    $("#giftCardBtn").focus();
                }
            }
        });


        $("#prepayCardBtn").click(function () {

            var newPrepayCard = getprepayCardNumber();
            var isContain = true;
            $("input[id^='prepayCard_']").each(function () {
                if ($(this).attr("ref") == newPrepayCard) {
                    $("#prepayCardError").html("途游卡已使用").show();
                    isContain = false;
                    return false;
                }
            })

            if (isContain) {
                //按钮不可点，变为请求中
                $("#prepayCardBtn").hide();
                $("#prepayCardBtnDn").show();
                getData();

                var prePayModel = {};
                prePayModel.OrderID = Number(hidOrderID);
                prePayModel.OrderNumber = hidOrderNumber;
                prePayModel["InfoList[0].CardNo"] = newPrepayCard;
                prePayModel["InfoList[0].Pwd"] = $("#prepayCardPwd").val();



                $.post("/Order/PrePayCardPayCheck",
                    prePayModel
                    , function (data) {
                        if (data.IsSuccess) {
                            $("#prepayCardBtnDn").hide();
                            $("#prepayCardBtn").show();
                            $("#prepayCardError").hide();
                            if ($("#prepayCard_" + data.Card.ID).length == 0) {

                                var html = ' <label for="" id="pPrepayCard_' + data.Card.ID + '">';
                                html += '<input type="checkbox"  id="prepayCard_' + data.Card.ID + '" ref="' + newPrepayCard + '" refpwd="' + $("#prepayCardPwd").val() + '" checked="checked" class="ck" currentcash ="' + data.Card.CurrentMoney + '" canusecash ="' + data.Card.CurrentMoney + '" maxcash ="' + data.Card.CurrentMoney + '" />' + Number(data.Card.Money).toFixed(0) + '元途游卡：';
                                html += newPrepayCard;
                                html += ' （卡内余额<span>' + data.Card.CurrentMoney + '</span>  本次可使用<span id="prepayCard_use_' + data.Card.ID + '">' + data.Card.CurrentMoney + '</span>剩余<span id="prepayCard_last_' + data.Card.ID + '">' + 0 + '</span>）';
                                html += '</label>';

                                html += '<span class="price-box">-<dfn>¥</dfn><b class="price-value" id="prepayCardSpend_' + data.Card.ID + '">' + data.Card.CurrentMoney + '</b></span>';

                                $(html).appendTo($("#divHadUsePrepayCard"));
                                //清空输入框
                                $("#spnUsePrepayCard input").val("");
                                //检查
                                if ($("#chkUsePrePayCard").attr("checked") != "checked") {
                                    $("#chkUsePrePayCard").attr("checked", true);
                                }
                            }
                            computePrice(4);
                        }
                        else {
                            $("#prepayCardBtn").show();
                            $("#prepayCardBtnDn").hide();
                            $("#prepayCardError").html(data.Message).show();
                        }
                    });
            }
        });


        $("#giftCardBtn").click(function () {
            $("#tickCardError").hide();
            var newGiftCard = getGiftCardNumber();
            var isContain = true;
            $("input[id^='giftCard_']").each(function () {
                if ($(this).attr("ref") == newGiftCard) {
                    $("#tickCardError").html("礼品卡已使用").show();
                    isContain = false;
                    return false;
                }
            })

            if (isContain) {
                //按钮不可点，变为请求中
                $("#giftCardBtn").hide();
                $("#giftCardBtnDn").show();
                var otherGiftCard = [];
                var strOtherGiftCard = "";
                getData();


                if (otherGiftCard != undefined && giftCard.length > 0) {
                    $.each(giftCard, function (i, obj) {
                        otherGiftCard.push(obj.CardNumber)
                    });
                    strOtherGiftCard = otherGiftCard.join(",");
                }


                $.post("/Order/GiftCardCheck",
                    { "orderID": hidOrderID, "CustomerLoginID": Number($("#hidCustomerLoginID").val()), "giftcardNumber": getGiftCardNumber(), "pwd": $("#giftCardPwd").val(), "isBindGiftcard": $("#isBindGiftcard").val(), "OtherGiftCards": strOtherGiftCard, "Vercode": $('#mobileValidCode').val(), "OrderNumber": hidOrderNumber }
                    , function (data) {
                        if (data.IsSuccess) {
                            $("#tickCardError").hide();
                            $("#giftCardBtnDn").hide();
                            $("#giftCardBtn").show();
                            $("span[id^='spnOrderOnce_']").each(function (event) {
                                $(event).hide();
                            });
                            $("#giftCardBtn").removeAttr("disabled");
                            if ($("#giftCard_" + data.TicketCardID).length == 0) {
                                //o.Cash = Number($(this).attr("currentcash"));
                                //o.MaxCash = Number($(this).attr("maxcash"));
                                //data.LeftAmount = data.LeftAmount.ToPrice();

                                data.LeftAmount = Number(data.LeftAmount).toFixed(2);
                                data.CanUseAmount = Number(data.CanUseAmount).toFixed(2);
                                var html = '<label for="" id="pGiftCard_' + data.TicketCardID + '">';
                                html += '<input type="checkbox" name="" id="giftCard_' + data.TicketCardID + '" ref="' + getGiftCardNumber() + '" refpwd="' + $("#giftCardPwd").val() + '" checked="checked"  currentcash="' + data.CanUseAmount + '" canusecash="' + data.CanUseAmount + '" maxcash="' + data.LeftAmount + '" usetype="' + data.EnumUseType + '">' + Number(data.TicketTotalAmount).toFixed(2) + '元礼品卡：';
                                html += getGiftCardNumber();
                                html += '（<span>卡内余额:' + data.LeftAmount + '</span>  本次可使用<span id="giftCard_use_' + data.TicketCardID + '">' + data.LeftAmount + '</span>）</label>';
                                html += '<span class="price-box">-<dfn>¥</dfn><b class="price-value" id="giftCardSpend_' + data.TicketCardID + '">' + data.LeftAmount + '</b></span>';

                                $(html).appendTo($("#divHadUseTicketCard"));

                                $("#tdGiftCardBinding").hide();
                                $("#isBindGiftcard").val("false");
                                //清空输入框
                                $("#spnUseGiftCard input").val("");
                                if (data.EnumUseType == 2) {
                                    //只能使用一次的礼品卡，将选择框置灰，按钮置灰
                                    $("#spnUseGiftCard input").attr("disabled", "disabled");
                                    $("#giftCardBtn").addClass("link-btn-dis");
                                    $("#giftCardBtn").attr("disabled", "disabled");
                                    $("#spnOrderOnce_" + data.TicketCardID).show();
                                    //删除其他已经添加的
                                    ClearOtherCard($("#giftCard_" + data.TicketCardID));
                                }
                            }
                            computePrice(3);
                            //$("#tdTicketCard input").val("");
                        }
                        else {
                            if (data.ErrorCode == 1) {
                                //绑定礼品卡信息
                                $("#tickCardError").hide();
                                $("#giftCardBtnDn").hide();
                                $("#tdGiftCardBinding").show();
                                $("#spnGiftCardBindingNumber").html(getGiftCardNumber());
                                $("#spnGiftCardBindingLastAccount").html(data.LeftAmount);
                                $("#spnGiftCardBindingSendMessage").html(data.Message);
                                $("#isBindGiftcard").val(true);
                                $('#mobileValidCode').attr("refCardID", data.TicketCardID);
                                var times = 59;
                                $("#sendVerification").hide();
                                $("#returnSendVerification").show();
                                var interval = setInterval(function () {
                                    $("#returnSendVerification").html("重新发送（" + times + "）");
                                    times--;
                                }, 1000);
                                setTimeout(function () {
                                    $("#sendVerification").show();
                                    $("#returnSendVerification").hide();
                                    $("#returnSendVerification").html("重新发送（60）");
                                    clearInterval(interval);
                                }, 60000)
                            }
                            else if (data.ErrorCode == 10) {
                                $("#giftCardBtnDn").hide();
                                $("#tickCardError").hide();
                                $("#tickCardError1").html(data.Message).show();
                            }
                            else {
                                $("#giftCardBtn").show();
                                $("#giftCardBtnDn").hide();
                                $("#tickCardError").html(data.Message).show();
                            }

                        }
                    });
            }
        });

        $("#mobileVerify").click(function () {
            if ($("#isBindGiftcard").val() == "true") {
                var code = $('#mobileValidCode').val();
                if ($.trim(code).length == 0) {
                    alert('请输入验证码');
                    return false;
                }
            }

            $("#giftCardBtn").click();
        });



        $("#payErrorConfirm").click(function () {
            $("#pay").overlay().close();
            $("#popup").hide();
            window.location.reload();
        });

        $("#pay").overlay({
            closeOnClick: false,
            closeOnEsc: false,
            mask: {
                color: '#000',
                closeSpeed: 200
            },
            onBeforeLoad: function () {
                getData();
                var needToPay = Number($("#tdNeedTopay").attr("cash"));
                var newNeedToPay = Number(needToPay - integration - customerAccount - prepayCardAll - rentalAccount - giftCardAll).toFixed(2);
                var str = getContainName();
                if (str.length > 0 && newNeedToPay > 0) {
                    //显示继续支付的东西
                    $("#canContainUseType").html(str);
                    $("#popupColumn2").empty().html($("#hidCanContainUse").html());
                    $("#popNoticeInfo").html($("#hidCanContainUse").attr("ref"));
                    $("#ContainUse").click(function () {
                        $("#pay").overlay().close();
                        $("#popup").hide();
                        setFouceContain();
                    });

                    $("#NoContainUse").click(function () {
                        $("#payErrorConfirm").click(function () {
                            $("#pay").overlay().close();
                            $("#popup").hide();
                        });
                        //直接提交
                        doPayWork();
                    });
                }
                else {
                    doPayWork();
                }

            },
            onLoad: function () {
                $("#repay,#closePopup").unbind().bind("click", function () {
                    $("#pay").overlay().close();
                    $("#popup").hide();
                    window.location.reload();
                    return false;
                });

            }

        });

        function doPayWork() {

            $("#popupColumn2").empty();
            $("#hidPayOnOther").show();
            $("#hidPayOnOther").appendTo($("#popupColumn2"));
            $("#popNoticeInfo").html($("#hidPayOnOther").attr("ref"));

            $("#channelTran").val($("#payForm").attr("action"));

            $("#bankTran").val($("#payForm").attr("bank"));


            getData();

            //计算是否还需要银行支付
            if (integration > 0 || customerAccount > 0 || prepayCardAll > 0 || rentalAccount > 0 || giftCardAll > 0) {

                var formIndex = 0;
                var htmlForm = "";
                if (integration > 0) {
                    //组装form
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].OrderID' value='" + hidOrderID + "' />";
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].PayAmount' value='" + Number(integration).toFixed(2) + "' />";
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].EnumPaymentType' value='7' />";
                    formIndex++;
                }
                if (customerAccount > 0) {

                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].OrderID' value='" + hidOrderID + "' />";
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].PayAmount' value='" + Number(customerAccount).toFixed(2) + "' />";
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].EnumPaymentType' value='12' />";
                    formIndex++;
                }
                if (giftCardAll > 0) {
                    $.each(giftCard, function (i, obj) {
                        if (Number(obj.Cash) > 0) {
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].OrderID' value='" + hidOrderID + "' />";
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].CardNo' value='" + obj.CardNumber + "' />";
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].EnumPaymentType' value='8' />";
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].Pwd' value='" + obj.Pwd + "' />";
                            formIndex++;
                        }
                    });
                }
                if (rentalAccount > 0) {
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].OrderID' value='" + hidOrderID + "' />";
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].PayAmount' value='" + Number(rentalAccount).toFixed(2) + "' />";
                    htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].EnumPaymentType' value='14' />";
                    formIndex++;
                }
                if (prepayCardAll > 0) {
                    $.each(prepayCard, function (i, obj) {
                        if (Number(obj.Cash) > 0) {
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].OrderID' value='" + hidOrderID + "' />";
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].CardNo' value='" + obj.CardNumber + "' />";
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].EnumPaymentType' value='22' />";
                            htmlForm += "<input type='text' style='display:none;' name='list[" + formIndex + "].Pwd' value='" + obj.Pwd + "' />";
                            formIndex++;
                        }
                    });

                }

                if (htmlForm.length > 0) {
                    $(htmlForm).appendTo($("#formTran"));
                }
                $("#formTran").submit();
            }
            else {
                //直接进行支付
                //跳转到银行页面
                if ($("#paymentinfoid").val() != "" && Number($("#paymentinfoid").val()) == 0) {
                    //说明是余额支付，则在支付的时候创建余额支付单
                    $("#formTran").submit();
                }
                else {
                    $("#formTran").submit();
                }
            }
        }

        $("#payErrorConfirm").click(function () {
            $("#pay").overlay().close();
            $("#popup").hide();
        });





        $("#giftCardBtn").each(function () {
            var el = $(this), html = "", arr = el.attr("tip-data").replace(/\[/g, '<span style="color:#FF6600"><strong>').replace(/\]/g, "</strong></span>");
            html += '<p>' + arr + '</p>';
            el.tooltip({ position: "top", html: '<div class="tips-wrap"><div>' + html + '</div></div>', clearOther: true });
        });

        $("#mobileVerify").each(function () {
            var el = $(this), html = "", arr = el.attr("tip-data").replace(/\[/g, '<span style="color:#FF6600"><strong>').replace(/\]/g, "</strong></span>");
            html += '<p>' + arr + '</p>';
            el.tooltip({ position: "bottom", html: '<div class="tips-wrap"><div>' + html + '</div></div>', clearOther: true });
        });


        function sendVercode() {
            $.post("/Order/SendMobileCode", { "orderID": hidOrderID }, function (data) {
                if (!data.IsSuccess) {
                    return;
                }
                else {
                    var times = 59;
                    $("#sendVerification").hide();
                    $("#returnSendVerification").show();
                    var interval = setInterval(function () {
                        $("#returnSendVerification").html("重新发送（" + times + "）");
                        times--;
                    }, 1000);

                    setTimeout(function () {
                        $("#sendVerification").show();
                        $("#returnSendVerification").hide();
                        $("#returnSendVerification").html("重新发送（60）");
                        clearInterval(interval);
                    }, 60000)
                }
            });
        }


        $("a[name='loginBtn']").click(function () {
            $('#loginBtn').click();
        });


        //$("a[name='loginBtn']").overlay({
        //    top: "center",
        //    mask: {
        //        color: '#000',
        //        loadSpeed: 100,
        //        opacity: 0.5
        //    },
        //    target: "#userPop",
        //    closeOnClick: false,
        //    close: ".closeSubmit",
        //    fixed: false
        //});


        $('#loginSubmit').bind('click', function () {
            $("#loginSubmit").hide();
            $("#loginSubmitIng").show();
            $.ajax({
                url: '/Account/AjaxLogin',
                data: { 'username': $('#account').val(), 'pwd': $('#password').val(), 'verifycode': $('#verifycode').val() },
                type: 'post',
                dataType: 'json',
                success: function (res) {
                    if (res.IsSuccess) {
                        window.location.href = window.location.href;

                    } else {
                        $("#loginSubmit").show();
                        $("#loginSubmitIng").hide();
                        if (res.ErrorCount >= 2) {
                            $('#validateArea').show();
                        }
                        if (res.ErrorCode == 1) {
                            $('#loginerrormsg').html(res.Message).show();
                            $('#verifycodeErorr').hide();
                        } else {
                            $('#validateArea').show();
                            $('#loginerrormsg').hide();
                            $('#verifycodeErorr').html(res.Message).show();
                        }
                        $('#verifyImageLink').click();
                    }
                }
            });
        });

        $('#account').focus(function () {
            $('#loginerrormsg').hide();
            $('#verifycodeErorr').hide();
        });
        $('#password').focus(function () {
            $('#loginerrormsg').hide();
            $('#verifycodeErorr').hide();
        });
        $('#verifycode').focus(function () {
            $('#loginerrormsg').hide();
            $('#verifycodeErorr').hide();
        });

        $("#verifyImage,#verifyImageLink").click(function () {
            var verifyimagesrc = 'http://www.tujia.com/Account/VerifyImage?r=' + Math.random();
            $("#verifyImage").attr("src", verifyimagesrc);
            return false;
        });


        $("#saveUserLongTime").click(function () {
            if (this.checked) {
                $("#userExpiresHours").val(350);
            } else {
                $("#userExpiresHours").val("");
            }
        });


        $("#chkUseRental").click(function () {
            if ($(this).attr("checked") == "checked") {
                $("#spnUseRental").show();
                $("#spnUseRentalLogin").show();
                if ($("#iptRentalAccount").length > 0) {
                    $("#iptRentalAccount").val($("#iptRentalAccount").attr("maxref"));
                    $("#iptRentalAccount").trigger("blur");
                }
            }
            else {
                //隐藏惠住卡支付信息，并重置为0
                $("#spnUseRental").hide();
                $("#spnUseRentalLogin").hide();
                if ($("#iptRentalAccount").length > 0) {
                    $("#iptRentalAccount").val("0");
                    $("#iptRentalAccount").trigger("blur");
                }
            }

        });



        $("#chkUsePrePayCard").click(function () {
            if ($(this).attr("checked") == "checked") {
                $("#spnUsePrepayCard").show();
                $("#divUsePrepayCardLink").show();
                $("p[id^='pPrepayCard_']").show();
                computePrice(4);
            }
            else {
                //隐藏礼品卡，并去掉checked
                $("#spnUsePrepayCard").hide();
                $("#divUsePrepayCardLink").hide();
                $("#prepayCardError").hide();
                if ($("input[id^='prepayCard_']").length > 0) {
                    $("input[id^='prepayCard_']").attr("checked", false);
                }
                if ($("#prepayCardPwd").val() != undefined && $("#prepayCardPwd").val().length > 0) {
                    $("#spnUsePrepayCard .ipt-sm[maxlength=4]").val("");
                    $("#prepayCardPwd").val("");
                    $("#prepayCardBtn").removeAttr("disabled");
                }
                //所有礼品卡信息隐藏
                $("p[id^='pPrepayCard_']").hide();
                computePrice(4);
            }
        });


        $("#chkUseGiftCard").click(function () {
            if ($(this).attr("checked") == "checked") {
                $("#divUseGiftCardInfo").show();
                $("#spnUseGiftCard").show();
                $("#spnUseGiftCardNext").show();
                $("#tdGiftCardBinding").hide();
                $("p[id^='pGiftCard_']").show();
                if ($("input[id^='giftCard_']").length > 0) {
                    if ($("input[id^='giftCard_'][usetype='2']").length > 0) {
                        if ($("input[id^='giftCard_'][usetype!='2']").length > 0) {
                            $("input[id^='giftCard_'][usetype!='2']").attr("checked", true);
                            ClearOtherCard($("input[id^='giftCard_'][usetype!='2']").eq(0));
                        }
                        else {
                            $("input[id^='giftCard_'][usetype='2']").eq(0).attr("checked", true);
                            ClearOtherCard($("input[id^='giftCard_'][usetype='2']").eq(0));
                        }
                    }
                    else {
                        $("input[id^='giftCard_']").attr("checked", true);
                        ClearOtherCard($("input[id^='giftCard_']").eq(0));
                    }
                }
                computePrice(2);
            }
            else {
                //隐藏礼品卡，并去掉checked
                $("#spnUseGiftCard").hide();
                $("#divUseGiftCardInfo").hide();
                $("#spnUseGiftCardNext").hide();
                $("#tdGiftCardBinding").hide();
                $("#tickCardError").hide();
                if ($("input[id^='giftCard_']").length > 0) {
                    $("input[id^='giftCard_']").attr("checked", false);
                }
                if ($("#giftCardPwd").val() != undefined && $("#giftCardPwd").val().length > 0) {
                    $("#spnUseGiftCard .ipt-sm[maxlength=4]").val("");
                    $("#giftCardPwd").val("");
                    $("#giftCardBtn").removeAttr("disabled");
                }
                //所有礼品卡信息隐藏
                $("p[id^='pGiftCard_']").hide();
                computePrice(2);
            }
        });


        $("#chkUseIntegration").click(function () {
            if ($(this).attr("checked") == "checked") {
                $("#divIntegration").show();
                $("#divIntegrationLogin").show();
                if ($("#iptIntegration").length > 0) {
                    $("#iptIntegration").val($("#iptIntegration").attr("maxref"));
                }
            }
            else {
                $("#divIntegration").hide();
                $("#divIntegrationLogin").hide();
                if ($("#iptIntegration").length > 0) {
                    $("#iptIntegration").val(0);
                }
            }
            $("#iptIntegration").trigger("blur");
        })

        $("#chkUseCustomerAccount").click(function () {
            if ($(this).attr("checked") == "checked") {
                $("#divUseCustomerAccountLogin").show();
                $("#divUseCustomerAccount").show();

            }
            else {
                $("#divUseCustomerAccountLogin").hide();
                $("#divUseCustomerAccount").hide();

            }
            computePrice(1);
        })


        $("span[name='showTips'] img").each(function () {
            var el = $(this), html = "", arr = el.attr("tip-data");
            el.poshytip(
             {
                 content: arr,
                 showOn: 'hover',
                 alignTo: "target",
                 alignX: "right",
                 alignY: "center",
                 className: 'tip-white',
                 offsetX: 10
             });
        });

        //$("#loginBtn").overlay({
        //    top: "center",
        //    mask: {
        //        color: '#000',
        //        loadSpeed: 100,
        //        opacity: 0.5
        //    },
        //    target: "#userPop",
        //    closeOnClick: false,
        //    close: ".closeSubmit",
        //    fixed: false
        //});


        $('#loginSubmit').bind('click', function () {

            $.ajax({
                url: '/Account/AjaxLogin',
                data: { 'username': $('#account').val(), 'pwd': $('#password').val(), 'verifycode': $('#verifycode').val() },
                type: 'post',
                dataType: 'json',
                success: function (res) {
                    if (res.IsSuccess) {
                        window.location.href = window.location.href;

                    } else {
                        if (res.ErrorCount >= 2) {
                            $('#validateArea').show();
                        }
                        if (res.ErrorCode == 1) {
                            $('#loginerrormsg').html(res.Message).show();
                            $('#verifycodeErorr').hide();
                        } else {
                            $('#validateArea').show();
                            $('#loginerrormsg').hide();
                            $('#verifycodeErorr').html(res.Message).show();
                        }
                        $('#verifyImageLink').click();
                    }
                }
            });
        });

        $('#account').focus(function () {
            if ($(this).val() == "用户名/手机号/邮箱") {
                $(this).val("");
                $(this).css("color", "black");
            }
            $('#loginerrormsg').hide();
            $('#verifycodeErorr').hide();
        }).blur(function () {
            if ($.trim($(this).val()) == "") {
                $(this).val("用户名/手机号/邮箱");
                $(this).css("color", "gray");
            }
        });


        $('#password').focus(function () {
            $('#loginerrormsg').hide();
            $('#verifycodeErorr').hide();
        });
        $('#verifycode').focus(function () {
            $('#loginerrormsg').hide();
            $('#verifycodeErorr').hide();
        });



        $("#saveUserLongTime").click(function () {
            if (this.checked) {
                $("#userExpiresHours").val(350);
            } else {
                $("#userExpiresHours").val("");
            }
        });

        function qqLogin() {
            window.location = "http://www.tujia.com/account/QQLogin?srcUrl=http://booking.tujia.com/Order/PayQueue?ordernumber=MN9963407&isNewOrder=True";
        }

        function sinaLogin() {
            window.location = "http://www.tujia.com/account/SinaLogin?srcUrl=http://booking.tujia.com/Order/PayQueue?ordernumber=MN9963407&isNewOrder=True";
        }

        //var $MenuHasFixed = false;
        //var InitTop = $("#sidebar-wrap").offset().top;
        //var left = $("#sidebar-wrap").offset().left;
        //$(window).scroll(function () {
        //    if ($(document).scrollTop() > InitTop && !$MenuHasFixed) {
        //        $MenuHasFixed = true;
        //        $("#sidebar-wrap").css({ 'position': 'fixed', 'top': 0, 'left': left + "px", 'z-Index': '100', 'background': '#fff9ef', });
        //    } else if ($(document).scrollTop() < InitTop && $MenuHasFixed) {
        //        $MenuHasFixed = false;
        //        $("#sidebar-wrap").css({ 'position': 'static', 'top': 0, 'left': left + "px", 'z-Index': '100', 'background': '#fff9ef' });
        //    }
        //});
        $(".m-tips-wrap").appendTo($("body"));
    </script>


    
    
    <script type="text/javascript">
        function trackTrans() {
            //GA跟踪订单代码
            _gaq.push(['_addTrans',
            'MN9963407',           // order ID - required
            '途家在线',  // affiliation or store name
            '419.00',          // total - required
            '',           // tax
            '0',              // shipping
            '',       // city
            '',     // state or province
            ''             // country
            ]);

            _gaq.push(['_addItem',
            'MN9963407',           // order ID - required
            '3581',           // UnitId/SKU/code - required
            '北京途家长安驿精品大床房',        // product name
            '',   // category or variation
            '419.00',          // unit price - required
            '1'               // quantity - required
            ]);

            _gaq.push(['_trackTrans']); //submits transaction to the Analytics servers
        }

    </script>
    <script type="text/javascript" src="http://staticfile.tujia.com/portalsite2/scripts/js_common_foot?v=67e5d64"></script>

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

            _mvq.push(['$setGeneral', 'ordercreate', '', '', '']);
            _mvq.push(['$logConversion']);
            _mvq.push(['$addOrder', 'MN9963407', '419.00']);
            _mvq.push(['$addItem']);
            _mvq.push(['$logData']);
        })();

        (function () {
            if (traceLog) {
                traceLog("Common", {
                    pageName: "Pay",
                    pageId: traceData.pageId,
                    prevId: getPrevId(),
                    url: traceData.url,
                    params: traceData.params
                });
            }
        })();
    </script>

    



<!--Donut#<ActionSettings xmlns="http://schemas.datacontract.org/2004/07/DevTrends.MvcDonutCaching" xmlns:i="http://www.w3.org/2001/XMLSchema-instance"><ActionName>TraceUser</ActionName><ControllerName i:nil="true"/><RouteValues i:nil="true" xmlns:a="http://schemas.microsoft.com/2003/10/Serialization/Arrays"/></ActionSettings>#--><script type='text/javascript'>$.post('/Home/TraceUser', {"ID":0,"CreateTime":"2016-05-29T17:38:44.6248345+08:00","UserAgent":"Mozilla/5.0 (Windows NT 6.3; WOW64; rv:46.0) Gecko/20100101 Firefox/46.0","UserBrowser":"Firefox46","PageName":"Order_TraceUser","Url":"http://booking.tujia.com/Order/PayQueue?ordernumber=MN9963407&isNewOrder=True","UserIP":"114.249.223.104","SessionId":"","UserId":"c3dfe987-9193-4eae-8a12-1fcad5adbf3f","Host":"Order-81-47","IsFirstRequest":false,"PageSessionId":"546b76d8-3e3f-464a-b0c6-226906c934c8","IsAjax":false,"OperaterName":"18811444781","ModuleName":"Web.Booking","ParentPageSessionId":"","UrlReferrer":"http://booking.tujia.com/order/info?unitid=3581&startDate=2016-05-29&endDate=2016-05-30&productId=3693&bookingCount=1&unitType=Sweetome","Site":2});</script><!--EndDonut-->

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







<script  type="text/javascript" src="http://staticfile.tujia.com/statkeyword.js"></script>

    <!-- Google Code for Remarketing Tag -->
    <script type="text/javascript">
        var google_tag_params = {
            ecomm_prodid: '',
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
