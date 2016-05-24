<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit">
<title>久久租</title><meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="../css/xzcss.css?css=jquery-ui,global,page,city,suggest,calendar" rel="stylesheet" />
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
<meta content="webkit" name="renderer" />
<meta content="no-transform " http-equiv="Cache-Control" />
<meta content="format=html5; url=http://m.xiaozhu.com/" http-equiv="mobile-agent" />

<!-- [if ite IE 8]>
    <script src="../js/respond.js"></script>
    <![endif]-->
</head>

<body>
<!--header-->
 
<!--[if lte IE 7]>
<div style="background:#f16b80;  width:100%; height:50px; line-height:50px; text-align:center; font-size:14px; color:#fff; font-family:"微软雅黑";>
    温馨提示：您目前的浏览器版本过低，网站部分功能无法正常使用，建议尽快升级：
        <a href="http://www.microsoft.com/china/windows/IE/upgrade/index.aspx" name="升级ie浏览器" id="upgrade_ie" target="_blank" style=" display:inline-block;width:154px; height:40px;  vertical-align:middle;  margin:0 18px 0 12px;_margin-top:4px;"><img src="/images/ie.jpg" width="154" height="40"/></a>
             或安装
        <a href="http://www.firefox.com.cn" target="_blank" name="升级火狐浏览器" id="upgrade_firefox" style="display:inline-block;width:154px; height:40px;  vertical-align:middle;  margin:0 18px 0 12px;_margin-top:4px;"><img src="/images/firefox.jpg" width="154" height="40"/></a>
</div>
<![endif]-->

<div class="head_wrapper">
    <span class="slogan_v2 slogan_black"></span>
<!--    <span class="list_city" id="suggest_icon4Search">北京<i id="showCitySuggestion" class="icon_tri_down tri_down_f"></i><i id="closeCitySuggestion" class="icon_tri_down icon_tri_up"></i></span>-->
    <ul class="nav_R nav_commen">
                <li><a rel="nofollow" title="首次预订即可抵用房租" class="show-register-box" href="http://www.xiaozhu.com/register?next=http%3A%2F%2Fbj.xiaozhu.com%2F">注册就送200元</a></li>
        <li>&middot;</li>
        <li>
		<?php if(@$_COOKIE['name']){?>
		欢迎{!! $name !!}登录
		<?php }else{ ?>
		<a rel="nofollow" href="#" class="logindialog">登录</a>
		<?php } ?></li>
        <li>&middot;</li>
                <li class="current">
            <a href="#ongo" class="openTri_R">短租指南</a>
            <div class="head_pop width_58 top40">
                <div class="pop_column">
                    <span><a class="fl" href="http://www.xiaozhu.com/xzweb.php?op=Help_UserGuide&type=tenant">房客指南</a><a class="fr" href="http://www.xiaozhu.com/xzweb.php?op=Help_UserGuide&type=landlord">房东指南</a></span>
                </div>
            </div>
        </li>
                <li><a rel="nofollow" href="http://www.xiaozhu.com/publish" class="btn_free show-register-box">免费发布房间</a></li>
            </ul>
</div>
<div class="w_698 login_register_box"  style="display:none" id="registerDialog">
    <div class="r_colsed" id="closeRegiserDialog"><span></span></div>
    <div class="clearfix">
        <div class="r_main_l">
            <ul class="r_tab1 clearfix">
                <li class="fl cur">注册久久账号</li>
                <li class="fr col_gray">
                    <a href="http://www.xiaozhu.com/mailregister?next=http%3A%2F%2Fbj.xiaozhu.com%2F" class="r-no-mobile">无大陆手机号？</a>
                </li>
            </ul>
            <ul class="register_list">
                <li>
                    <div class="h_30">&nbsp;</div>
                    <div class="pr">
                        <div class=" r_telepho_ico"></div>
                        <span class="r_sym">/</span>
                        <input type="text" id="input-mobile" placeholder="手机号" class="r_input_1 col_input">
                    </div>
                </li>
                <li>
                    <div class="h_30">
                        <p class="r_error_tip" id="input-mobile-tip">请输入手机号</p>&nbsp;
                    </div>
                    <div class="pr">
                        <div class="r_pho_ico"></div>
                        <span class="r_sym">/</span>
                        <input type="text" placeholder="图片验证码" id="reg-image-code" class="r_input_small">
                        <span class="r_code"><img class="change-verify-image" id="img_imagecode" title="点击更换验证码" width="101" height="33" /></span>
                    </div>
                </li>
                <li>
                    <div class="h_30">
                        <p class="r_error_tip" id="reg-image-code-tip">请输入图片验证码</p>&nbsp;
                    </div>
                    <div class="pr">
                        <div class="r_num_ico"></div>
                        <span class="r_sym">/</span>
                        <input id="invitecode" type="text" placeholder="邀请码(选填)"  class="r_input_1">
                    </div>
                    <div class="h_30" style="display:none;">
                        <p id="input-invitecode-tip" class="r_error_tip">邀请码输入有误</p>&nbsp;
                    </div>
                    <p class="col_fgray r_tip_text">使用朋友给您的邀请码注册后，你们均可再得200元</p>
                </li>
            </ul>
            
            <a href="#" id="reg-btn" class="r_input">立即注册</a>
            <p class="tc"><a href="http://www.xiaozhu.com/help/service" class="r-service-protocol" target="_blank">注册视为同意《久久服务条款》</a></p>
        </div>
        <div class="r_main_r">
            <h5>合作网站账户登录</h5>
<ul class="r_wedsite col_gray">
    <li>
        <a class="hz_qq" href="http://www.xiaozhu.com/xzweb.php?op=GetOpenSnsAuthUrl&snsType=qqzone&state=login&next=http%3A%2F%2Fbj.xiaozhu.com%2F">QQ账号登录</a>
    </li>
    <li>
        <a class="hz_weibo" href="http://www.xiaozhu.com/xzweb.php?op=GetOpenSnsAuthUrl&snsType=sinaweibo&state=login&next=http%3A%2F%2Fbj.xiaozhu.com%2F">微博账号登录</a>
    </li>
</ul>            <p class="">已有账号？<a href="http://www.xiaozhu.com/login?next=http%3A%2F%2Fbj.xiaozhu.com%2F" id="loginDialogBtn" class="col_pink logindialog">登录&gt;&gt;</a></p>
        </div>
    </div>
</div>
<div class="w_400 login_register_box" id='mobileRegisterInfoDialog' style="display:none;"> 
    <div class="r_colsed" id="closeMobileRegisterInfoDialog"><span></span></div>
    <div class="r_top_tit">
        <h6>验证短信已发送至手机号码</h6>
        <p><span id="codeRecivePhone"></span><span class="col_pink"><a href="#" id="modifyRegisterBtn">(修改)</a></span></p>
    </div>
    <ul class="register_list">
        <li>
            <div class="h_30">&nbsp;</div>
            <div class="pr">
                <div class="r_pho_ico"></div>
                <span class="r_sym">/</span>
                <input type="text" id="activate-code" placeholder="手机验证码" class="r_input_small">
                <a href="#ongo" id="get-code-btn" class="have-nb">重新发送</a>
            </div>
        </li>
        <li>
            <div class="h_30">
                <p id="activate-code-tip" class="r_error_tip">请输入手机验证码</p>&nbsp;
            </div>
            <div class="pr">
                <div class=" r_telepho_ico"></div>
                <span class="r_sym">/</span>
                <input id="reginput-username" type="text" placeholder="用户名" class="r_input_1">
            </div>
        </li>
        <li>
            <div class="h_30">
                <p class="r_error_tip" id="reginput-username-tip">请输入用户名</p>&nbsp;
            </div>
            <div class="pr">
                <div class="r_password_ico"></div>
                <span class="r_sym">/</span>
                <input type="password" id="regpassword" placeholder="密码" class="r_input_1">
            </div>
            <div class="h_30">
                <p class="r_error_tip" id="regpassword-tip">请输入密码</p>&nbsp;
            </div>
        </li>
    </ul>
    <a href="#" id="regConfirmBtn" class="r_input mt_10">确认</a>
</div>
<div id="regSuccessDialog" class="reg_success_box login_register_box" style="display:none;">
    <div class="w_401">
        <div class="r_colsed_1" id="closeRegSuccDialogBtn"><span></span></div>
        <div id="regSuccInfo">
        </div>
    </div>
</div><div id="userlogindialog" class="login_register_box" style="display:none">
    <div class="w_698"> 
        <div class="r_colsed" id="closeUserLoginDialog"><span></span></div>
        <div class="clearfix">
            <div class="r_main_l">
                <ul class="r_tab clearfix">
                    <li class="percent_50 tc cur underL1" id="generalLi">普通登录</li>
                    <li class="percent_50 tc cur" id="mobileLi">短信快捷登录</li>
                </ul>
                <div id="generalLogin">
                    <ul class="register_list">
                        <li>
                            <div class="h_30">&nbsp;</div>
                            <div class="pr">
                                <div class="r_tel_ico"></div>
                                <span class="r_sym">/</span>
                                <input type="text" class="r_input_1" id="input-username" placeholder="手机号、邮箱" disabled="true">
                            </div>
                        </li>
                        <li>
                            <div class="h_30"><div class="r_error_tip" id="input-username-tip"><span class="icon-wrong" id=""></span>手机号未注册</div></div>
                            <div class="pr">
                                <div class="r_password_ico"></div>
                                <span class="r_sym">/</span>
                                <input type="password" class="r_input_1" id="password" placeholder="密码" disabled="true">
                                <div class="h_30">
                                    <div class="r_error_tip" id="password-tip"><span class="ipt-text-pass"></span></div>
                                </div>    
                            </div>
                        </li>
                        <span  style="display:none"  id="verify-show">
                        <li>
                            <div class="pr">
                                <div class="r_pho_ico"></div>
                                <span class="r_sym">/</span>
                                <input type="text" class="r_input_small" id="image-verify-code" disabled="true" placeholder="图片验证码">
                                <span><img class="r_code change-verify-image" width="101px" height="33px" id="img_imagecodes" title="点击更换验证码" /></span>
                                <div class="h_30">
                                    <div class="r_error_tip" id="image-verify-code-tip"></div>
                                </div>
                            </div>
                        </li>
                        </span>
                    </ul>
                    <a href="###" class="r_input mt_10" id="orgBtn">登录</a>
                    <div class="r_login_space clearfix"><span class="fl cur "><input class="ipt-checkbox2" type="checkbox" id="setcookie" checked="checked" />自动登录</span>
                    <span class="fr col_gray"><a href="http://www.xiaozhu.com/findpwdbyphone">忘记密码?</a></span></div>
                </div>
                <div id="mobileLogin" style="display:none">
                    <ul class="register_list">
                        <li>
                            <div class="h_30">&nbsp;</div>
                            <div class="pr">
                                <div class="r_telepho_ico"></div>
                                <span class="r_sym">/</span>
                                <input type="text" class="r_input_1" id="quick-input-mobile" placeholder="手机号" disabled="true" >
                            </div>
                        </li>
                        <li>
                            <div class="h_30">
                                <div class="r_error_tip" id="quick-input-mobile-tip"><span class="icon-ok"></span></div>
                            </div>
                            <div class="pr">
                                <div class="r_pho_ico"></div>
                                <span class="r_sym">/</span>
                                <input type="text" class="r_input_small" id="quick-image-code" placeholder="图片验证码" disabled="true" >
                                <span ><img class="r_code change-verify-image" width="104px" height="33px" id="img_imagecodeMobile" title="点击更换验证码" /></span>
                            </div>
                        </li>
                        <li>
                            <div class="h_30">
                                <div class="r_error_tip" id="quick-image-code-tip"></div>
                            </div>
                            <div class="pr">
                                <div class="r_vali_ico"></div>
                                <span class="r_sym">/</span>
                                <input type="text" class="r_input_small" id="quick-activate-code" placeholder="动态验证码" disabled="true" >
                                <span class="btn have-nb"  id="quick-get-code-btn">获取动态验证码</span>    
                                <div class="h_30">
                                    <div class="r_error_tip"  id="quick-activate-code-tip"><span class="icon-ok"></span></div> 
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a href="###" class="r_input mt_10" id="orgBtnMobile">登录</a>
                    <p class="mt_10">＊验证即登录，未注册将自动创建久久账号</p>
                </div>
            </div>
            <div class="r_main_r">
                <h5>合作网站账户登录</h5>
<ul class="r_wedsite col_gray">
    <li>
        <a class="hz_qq" href="http://www.xiaozhu.com/xzweb.php?op=GetOpenSnsAuthUrl&snsType=qqzone&state=login&next=http%3A%2F%2Fbj.xiaozhu.com%2F">QQ账号登录</a>
    </li>
    <li>
        <a class="hz_weibo" href="http://www.xiaozhu.com/xzweb.php?op=GetOpenSnsAuthUrl&snsType=sinaweibo&state=login&next=http%3A%2F%2Fbj.xiaozhu.com%2F">微博账号登录</a>
    </li>
</ul>                <p>还没有注册？<a href="#" class="col_pink show-register-box" >注册账号&gt;&gt;</a></p>
            </div>
        </div>
    </div>
</div>
<div id="mobilePerfeactInfoDialog" style="display:none;">
    <div class="w_400" style="height:386px;"> 
        <div class="perfeact-info-content" style="display:none;">
            <div class="r_colsed" id="mobilePerfeactInfoBtn"><span></span></div>
        <div class="r_top_logo">
            <p>首次登录，请完善资料后，开启久久住宿之旅！</p>
        </div>
        <ul class="register_list">
            <li>
                <div class="h_30">
                    <p class="r_error_tip" style="display:none;"></p>&nbsp;
                </div>
                <div class="pr">
                    <div class="r_tel_ico"></div>
                    <span class="r_sym">/</span>
                    <input id="quick-input-username" type="text" placeholder="用户名" class="r_input_1">
                </div>
            </li>
            <li>
                <div class="h_30">
                    <p class="r_error_tip" id="quick-input-username-tip">请输入用户名</p>&nbsp;
                </div>
                <div class="pr">
                    <div class="r_password_ico"></div>
                    <span class="r_sym">/</span>
                    <input type="password" id="quick-regpassword" placeholder="密码" class="r_input_1">
                </div>
            </li>
            <li>
                <div class="h_30">
                    <p class="r_error_tip" id="quick-regpassword-tip">请输入密码</p>&nbsp;
                </div>
                <div class="pr">
                    <div class="r_num_ico"></div>
                    <span class="r_sym">/</span>
                    <input id="quick-invitecode" type="text" placeholder="邀请码(选填)" class="r_input_1">
                </div>
                <div class="h_30" style="display:none;">
                    <p id="quick-invitecode-tip" class="r_error_tip">邀请码输入有误</p>&nbsp;
                </div>
                <p class="col_fgray r_tip_text">使用朋友给您的邀请码注册后，均可获得200元</p>
            </li>
        </ul>
        <a class="r_input" id="mobileInfoPerfeactBtn" href="#">确定</a>
        </div>
    </div>
</div>

<!--/header-->
<div class="city_wrap">
    <!--city top-->
    <div class="city_top_box clearfix" id="list_filter">
        <div class="city_l">
               <div class="clearfix mb_14">
                  <div class="city_select city_bg">
                     <input type="text" value="{!! $city !!}" id="searchcityd" placeholder="请选择或输入城市"> 
                     <span id="searchcityd_search" class="icon_searchandremove" style="display: none"><span class="ipt_icon icon_search_s"></span></span>
                     <div id="suggest" class="ac_results2 marginT1" style="display:none;"></div>
<div class="sug  marginT1 sug4search">    
    <div class="sug-tit">
    	<span id="hotcity" value="hotcity" class="sug-hover">热门</span>
        <span id="a_d" value="a_b_c_d">ABCD</span>
        <span id="e_j" value="e_f_g_h_j">EFGHJ</span>
        <span id="k_n" value="k_l_m_n">KLMN</span>
        <span id="p_w" class="width64" value="p_q_r_s_t_w">PQRSTW</span>
        <span id="x_z" class="nobor width43" value="x_y_z">XYZ</span>
    </div>
    <div id="con_one_1" class="sug-city">
    </div>   
</div>                  </div>
                  <div class="date_box city_bg">
                                                  <input class="ipt_list1" type="text" readonly="" id="startenddate" name="startenddate"   value="选择入住离开日期" />
                                                  <input type="hidden" name="startdate" id="startdate" value=""/>  
                        <input type="hidden" name="enddate" id="enddate" value=""/>
                        <div id="calendar-box" style="display:none" class="nomargin"> </div>
                                                <span class="icon_searchandremove" style="display:none"><span class="ipt_icon icon_delete"></span></span>
                                          
                  </div>
               
               </div>
        
                <div class="type_bg clearfix">
                  <h6 class="type_tit1">最多宜居</h6>
                  <div class="select_box1">
                    <span class="s_arrow"></span>
                                          <input class="s_int " type="text" key='未选择' value="未选择" readonly />
                    <ul class="s_box" id='int_s_box'>
                       <li value="">未选择</li>
                                               <li value="1">1</li>
                                               <li value="2">2</li>
                                               <li value="3">3</li>
                                               <li value="4">4</li>
                                               <li value="5">5</li>
                                               <li value="6">6</li>
                                               <li value="7">7</li>
                                               <li value="8">8</li>
                                               <li value="9">9</li>
                                               <li value="10">10</li>
                                               <li value="11">大于10</li>
                                           </ul>
                  </div>
                     </div>
                <div class="type_bg clearfix">
                   <h6 class="type_tit1">关键词</h6>
                   <div class="select_box">
                     <!--<div class="search_ico" style="display:none;"></div>
                     <div class="closed_ico" title="关闭"></div>-->
                     
                                        <input class="ipt_list hiddenTxt " type="text" value="" id="keyword" autocomplete="off"      placeholder="位置，房间名，或房东名" />
                       <span id="search_keyword" class="icon_searchandremove"><span class="ipt_icon icon_search_s"></span></span>
                        <input type="hidden" name="keywordtype" id="keywordtype" value="landmark" />
                        <input type="hidden" name="keywordvalue" id="keywordvalue" value="" />
                   </div>
                
                </div>

        
        </div>
        <div class="city_r">
               <input type="hidden" id="no_price" value="http://bj.xiaozhu.com/search-duanzufang-0/" />
               <div class="type_bg clearfix" id='space_list'>
                   <div class="type_tit"></div>
               </div>
               <div class="type_bg clearfix">
                  <h6 class="type_tit2"></h6>
               </div>
               <div class="type_bg clearfix">
                  <h6 class="type_tit2"></h6>
               </div>
             <input type="hidden" class="btn_pink4search" id="filter_confirm" value="确定" />
  </div>
</div>    <!--/city top-->

    <div class="top_line" style="display:none;"></div>
    <div class="tj_box clearfix"  style="display:none;">
                <div class="select_down" id="select_more">收起筛选条件</div>


    </div>
    <div class="clearfix">
        <!--map-->
        <div class="city_map">
            <div class="list_map">
    <div class="map-canvas">
        <div id="XZMap" style="width:100%;height:100%;overflow:hidden;margin:0;"></div>
    </div>
</div>        </div>
        <!--/map-->
        <!--search list-->
        <div class="search_box">
            <div class="result_box clearfix">
                <div class="fl"> <a href="http://www.xiaozhu.com">久久</a>&nbsp;&gt;&nbsp;&nbsp;北京短租<span class="paddingL10">
                        超过<span id="searchTotal">6000</span>个房源
                </span> </div>
                <div class="fr" id="checkfra">
                                                                                                                                            
                    
                                        <span class="col_pink pr20" id="defalut_sort"><a href="javascript:void(0);" onlick="return false;" >推荐排序</a></span>
                    
                    
                                                            <span id="nodefalut_sort"><a title="点击按价格由低到高排序" href="http://bj.xiaozhu.com/zuipianyi-duanzufang-10/">价格<span class="arrow_top"></span><span class="arrow_down"></span></a></span>
                    
                </div>

            </div>
            <!--pic list-->
			
            <div id="page_list">
               
    <ul class="pic_list clearfix">
	@foreach($db as $v)           
             
          
                <li lodgeunitid="lodgeunit_1779571235" latlng="40.052654,116.423421">
    <a target="_blank" href="http://bj.xiaozhu.com/fangzi/1779571235.html" class="resule_img_a">
          <img class="lodgeunitpic" title="{{ $v->h_title }}" src="../images/uploads/{{ $v->pi_path }}" lazy_src="../images/uploads/{{ $v->pi_path }}" alt="{{ $v->h_title }}" style="height:300px;width:380px;" />
    </a>
    
                <div class="favorite  lodge_1779571235 wsc_ico"  alt="1779571235"  title="收藏"></div>
        <div class="result_btm_con lodgeunitname" detailurl="http://bj.xiaozhu.com/fangzi/1779571235.html" style="cursor:pointer">
                <span class="result_price">&yen;<i>{{ $v->h_price }}</i>/晚</span>
                                <span class="room_status">
            <em class="icon_youhui"></em>
            <p class="show">优惠</p>
        </span>
                 
        <span class="result_img">
                                    <a class=="search_result_gridsum" href="http://www.xiaozhu.com/fangdong/1694126035/" target="_blank"><img class="landlordimage" width="42" height="42" lazy_src="http://image.xiaozhustatic2.com/23/5,0,96,1679,414,414,dde31210.jpg" /></a>
                                </span>
        <div class="result_intro">
            <a><span class="result_title hiddenTxt">{{ $v->h_title }}</span></a>
            <em class="hiddenTxt">
                                单间出租
                 -                                 <span class="commenthref">11条点评</span>
                 -                                                 
                                {{ $v->h_site }}                            </em>
        </div>
    </div>
</li>
@endforeach
 <div class="mapresult_no" id="noLodgeUnitsAtNYN" style="display:none">
        <em></em>
        <p>
        <span>没有符合条件的房间</span>
            建议您减少或更改一些查询条件重新搜索
        </p>
        </div>
    </ul>
 <div class="pagination_v2 pb0_vou"><span class="active_link">1</span><a target="_self" href="http://bj.xiaozhu.com/search-duanzufang-p2-0/">2</a><a target="_self" href="http://bj.xiaozhu.com/search-duanzufang-p3-0/">3</a><a target="_self" href="http://bj.xiaozhu.com/search-duanzufang-p4-0/">4</a><a target="_self" href="http://bj.xiaozhu.com/search-duanzufang-p5-0/">5</a><a class="font_st" target="_self" href="http://bj.xiaozhu.com/search-duanzufang-p2-0/">&gt;</a></div> <div class="list_adpic" >
    <a href="http://www.xiaozhu.com/appdownload/fk?ca_source=xzliebiaoye&utm_source=lbyrk&utm_medium=lbyrkgg&pk_campaign=APP-xzlbyrk-marketing" target="_blank" style="cursor:auto"><img lazy_src="/images/search_adpic1.png" /></a>
</div> 
            </div>
            <div class="result_foot clearfix">
        <dl class="link_dl">
        <dt>城市导航</dt>
        <dd>
            <a target="_blank" href="http://bj.xiaozhu.com/">北京短租房</a>
            <a target="_blank" href="http://sh.xiaozhu.com/">上海短租房</a>
            <a target="_blank" href="http://nj.xiaozhu.com/">南京短租房</a>
            <a target="_blank" href="http://cd.xiaozhu.com/">成都短租房</a>
            <a target="_blank" href="http://gz.xiaozhu.com/">广州短租房</a>
            <a target="_blank" href="http://cq.xiaozhu.com/">重庆短租房</a>
            <a target="_blank" href="http://wh.xiaozhu.com/">武汉短租房</a>
            <a target="_blank" href="http://dl.xiaozhu.com/">大连短租房</a>
            <a target="_blank" href="http://sanya.xiaozhu.com/">三亚短租房</a>
            <a target="_blank" href="http://lijiang.xiaozhu.com/">丽江短租房</a>
            <a target="_blank" href="http://tj.xiaozhu.com/">天津短租房</a>
            <a target="_blank" href="http://xianggang.xiaozhu.com/">香港短租房</a>
            <a target="_blank" href="http://cs.xiaozhu.com/">长沙短租房</a>
            <a target="_blank" href="http://wx.xiaozhu.com/">无锡短租房</a>
            <a target="_blank" href="http://km.xiaozhu.com/">昆明短租房</a>
            <a target="_blank" href="http://jn.xiaozhu.com/">济南短租房</a>
            <a target="_blank" href="http://xm.xiaozhu.com/">厦门短租房</a>
            <a target="_blank" href="http://qd.xiaozhu.com/">青岛短租房</a>
            <a target="_blank" href="http://zz.xiaozhu.com/">郑州短租房</a>
            <a target="_blank" href="http://xa.xiaozhu.com/">西安短租房</a>
            <a target="_blank" href="http://hz.xiaozhu.com/">杭州短租房</a>
            <a target="_blank" href="http://sz.xiaozhu.com/">深圳短租房</a>
            <a target="_blank" href="http://sy.xiaozhu.com/">沈阳短租房</a>
            <a target="_blank" href="http://su.xiaozhu.com/">苏州短租房</a>
        </dd>
    </dl>
    <dl class="link_dl">
        <dt>友情链接</dt>
        <dd>
            <a target="_blank" href="http://nj.tuniu.com/">南京旅游网</a>
            <a target="_blank" href="http://jiudian.kuxun.cn/">酷讯酒店预订</a>
            <a target="_blank" href="http://www.yododo.cn/">多多驿站</a>
            <a target="_blank" href="http://tianjin.8684.cn/">天津公交</a>
            <a target="_blank" href="http://hangzhou.fangtoo.com/">杭州房产网</a>
            <a target="_blank" href="http://lvyou.mangocity.com/">旅游网</a>
            <a target="_blank" href="http://www.hqcyw.cn/">畅游</a>
            <a target="_blank" href="http://www.82222919.com/">深圳旅行社</a>
            <a target="_blank" href="http://www.pintour.com/">驴友</a>
            <a target="_blank" href="http://www.mengyoo.com/">国内旅游</a>
            <a target="_blank" href="http://www.sfkkkkkkkkk.com/">沙发客</a>
            <a target="_blank" href="http://www.57go.com/">四川旅游</a>
            <a target="_blank" href="http://www.shidu.cn/">十渡旅游</a>
            <a target="_blank" href="http://bengbu.cncn.com/">蚌埠旅游</a>
            <a target="_blank" href="http://tt-ly.com/">深圳旅行社</a>
            <a target="_blank" href="http://www.keyunzhan.com/chuzuche/">出租车电话</a>
            <a target="_blank" href="http://www.zoutu.com/">云南旅游</a>
            <a target="_blank" href="http://bj.58.com/duanzu/">北京日租房</a>
            <a target="_blank" href="http://sh.to8to.com/">上海装修网</a>
            <a target="_blank" href="http://www.tieyou.com/fuxiagaotie/">福厦高铁</a>
            <a target="_blank" href="http://www.yidujia.com/">产权式酒店</a>
            <a target="_blank" href="http://www.eptxw.com/">机票加盟</a>
            <a target="_blank" href="http://www.4006777711.com/">酒店之星</a>
            <a target="_blank" href="http://www.ctcnn.com/">劲旅网</a>
        </dd>
    </dl>
        <div class="foot_btm">许可证号：<a target="_blank" href="http://www.miibeian.gov.cn" rel="nofollow">京ICP证140510号</a> &nbsp;&nbsp; <a href="http://www.anquan.org/s/www.xiaozhu.com" |="" name="mt8SMvYyRDI92b06nuDs8dPFapllCJYidqhM1WlOoGRZ9DWpbo" rel="nofollow" target="_blank">安全联盟</a> &nbsp;&nbsp;北京快跑信息科技有限公司 &nbsp;&nbsp;</div>
    <div style="width:300px;margin:0 auto;">
        <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020380" style="display:inline-block;text-decoration:none;height:20px;line-height:20px;"><img src="/images/record_icon.png" style="float:left;"/><p style="float:left;height:20px;line-height:20px;margin: 0px 0px 0px 5px; color:#bdc3c7;">京公网安备 11010802020380号</p></a>
    </div>

<input type="hidden" name="actionName" id="actionName" value="Front_Search"/>
<!-- Piwik --> 
<noscript><p><img src="http://piwik.xiaozhu.com/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
<input type="hidden" id="piwik_trigger" value="1">

<input type="hidden" id="pagetype" value="Front_Search">
<script type="text/javascript" src="/js/jquery/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="../css/xzcss.css?css=jquery.mCustomScrollbar,nyroModal,uploadify" />
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/xzjs?k=Footer&httphost=bj.xiaozhu.com"></script>
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/js/jquery/lazyload.js"></script>
<script type="text/javascript" src="http://www.xiaozhu.com/e1605163/js/webimv4/application/xzim4.js?source=xiaozhu&dm=xiaozhu.com" id="webimSource"></script>            <!--/link-->
        </div>
        <!--search list-->
    </div>
    <input type="hidden" id="pageNo" value="1"/>
    <input type="hidden" id="totalPages" value="13"/>
    <input type="hidden" id="total" value="6000"/>
    <input type="hidden" id="fullTextTNo" value="1"/>
    <input type="hidden" id="hasFullText" value="0" />
    <input type="hidden" id="selectcitydomain" value="bj"/>
    <input type="hidden" id="landmark4map" value=""/>  
    <input type="hidden" id="putkey" value=""/>  
    <input type="hidden" id="keywordcache" value=""/>  
    <input type="hidden" id="subway" value=""/>
    <input type="hidden" id="cityid" value="12"/>
    <input type="hidden" id="city" value="北京"/>
    <input type="hidden" id="lowprice" value="0"/>
    <input type="hidden" id="highprice" value="0"/>
    <input type="hidden" id="landmarklat" value=""/>
    <input type="hidden" id="landmarklng" value=""/>
    <input type="hidden" id="tmpstartdate" value=""/>
    <input type="hidden" id="tmpenddate" value=""/>

    <input type="hidden" id="housetyperoomcnt" value=""/>
    <input type="hidden" id="leasetype" value=""/>
    <input type="hidden" id="district" value=""/>
    <input type="hidden" id="facility" value=""/>
    <input type="hidden" id="housetype" value=""/>
    <input type="hidden" id="guestnum" value=""/>
    <input type="hidden" id="sort" value=""/>
    <input type="hidden" id="dSelCondtions" value=""/>
    <input type="hidden" id="actionname" value="Front_Search"/>
    <input type="hidden" id="searchkey" value=""/>
    <input type="hidden" id="landmarkid" value=""/>
    <input type="hidden" id="log_landmark_type" />
    <input type="hidden" id="searchcity" value="北京"/>
    <input type="hidden" id="citydomain" value="bj"/>
    <strong  defineUrl="http://bj.xiaozhu.com/pricefrom-pricetoyuan-duanzufang-1/" id="userDefinePrice"></strong>
    <input type="hidden" id="clearKeyWord" value="http://bj.xiaozhu.com/search-duanzufang-0/" />
    <input type="hidden" id="nowUrl" value="http://bj.xiaozhu.com/search-duanzufang-0/" />
    <input type="hidden" id="areaPinyin" value="" />
    <input type="hidden" id="partner" value="" />
    <input type="hidden" id="mapcheck" value="0" />
    <input type="hidden" id="mapzoom" value="" />
    <input type="hidden" id="mapPageNo" value="0"/>
    <input type="hidden" id="mapAction" value="0"/>
    <input type="hidden" id="mapScrolTop" value="0"/>
    <input type="hidden" id="mapHeightFinish" value="0"/>
    <input type="hidden" id="scrollTopVal" value="0"/>
    <input type="hidden" id="radius" value="5"/>
    <input type="hidden" id="mapSelectNone" value="0"/>
    <input type="hidden" id="hadSelCondtionsCount" value="0">
    <input type='hidden' id='defaultCityShowStr' value="请选择城市或目的地"/>
    <input type="hidden" name="suggestion_citydomain" id="suggestion_citydomain" value=""/>    
    <input type="hidden" name="searchkey" id="searchkey" value=""/>    
    <input type="hidden" name="landmarkid" id="landmarkid" value=""/>  
    <input type="hidden" name="landmarktype" id="landmarktype" value=""/>  
    <input type="hidden" name="defaulturl" id="defaulturl" value=""/>
    <div class="keywords_pop ldDiv" id="keyWordsDialog" style="display:none;">
</div>    <div class="dropDiv" style='display:none'>
</div></div>
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/xzjs?k=Front_Search&httphost=bj.xiaozhu.com"></script>
</body>
<!-- Google Tag Manager -->

<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W85X4L" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W85X4L');
</script>

<!-- End Google Tag Manager --></html>