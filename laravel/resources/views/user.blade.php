<!doctype html> 
<html> 
<head> 
  <meta charset="utf-8"> 
  <title>用户中心</title> 
</head>
<body>
<link rel="stylesheet" type="text/css" href="../css/user.css" />
  <h1></h1>
              <div class="right_con">
                                                                                <div class="manage_breadcrumb">
        <a href="http://www.xiaozhu.com/xzweb.php?op=FangKe_Index">用户中心</a>
                <span> &gt;</span>我的设置
                    <span> &gt;</span><strong>个人资料</strong>
            </div>                                <ul class="tabs marginT15 width594">
                    <li class="no_tab no_pointer"><strong>账户信息</strong></li>
                </ul>
                <form  method="post" action="" name="userForm" id="userForm" target="postframe">
                <div class="con_wraper width594 fl">
                    <!--
                    <p class="field_p">
                        <label>用户名：</label>
                        <span>xza_673118536yqgs4</span>
                    </p>
                    -->
                    <p class="field_p">
                        <label>用户名：</label> 
                        <input type="text" class="small_input" value="<?php echo $_COOKIE['name']?>" id="nickname" name="nickname" />
                        <span id="tip_nickname" class="gray"></span>
                    </p>            
                    <p class="field_p">
                        <label>邮 箱：</label>
                         
                            <input type="text" class="mid_input" id="email" name="email" value="" />
                            <span class="check" id="tip_email"></span>
                                            </p>
                    <p class="field_p">
                        <label>手 机：</label>
                                                <input type="text" class="small_input" readonly="readonly" style="background-color:#EFEFEF;" id="mobile" name="mobile" value="15210168509" maxlength=11 />&nbsp;&nbsp;<a href="#ongo" userid="1" class="checkphonenum blue" class="btn_normal marginL157">更改手机号</a><span id="tip_mobile"></span>
                                            </p>
                                        <ul class="tabs marginT15 width594">
    <li class="no_tab no_pointer paddingL3"><strong>个人信息</strong></li>
</ul>      
<div class="field_p">
    <label>真实姓名：</label>
    <input type="text" class="small_input" value="任鹏东" id="realname" name="realname" onblur="countUserInfoPercent($(this));"  />        <span id="fk_zhima_con" class="fk_zhima_con">
        
        <div class="zhima_con fk_zhima top30" style="display: none" id="fk_zhima_on">
            
        </div>
    </span>
    </div>
<p id="tip_realname" class="check space"></p>
<p class="field_p">
     <label>身份证号：</label>
     <input type="text" class="mid_input valid" name="cardno" id="cardno" value="142631199503251719" maxlength="18"   />     <p id="tip_cardno" class="check space"></p>
</p>
<p class="field_p">
    <label>性 别：</label>
     
        <input type="radio"  name="sex" id="sex"  value="man" onclick="countUserInfoPercent($(this));"  required /> 男&nbsp;
         
        <input type="radio"  name="sex" id="sex"  value="women" onclick="countUserInfoPercent($(this));"  required /> 女&nbsp;
          
    <span id="tip_sex"></span>
</p>
<p class="field_p">
    <label>出生日期：</label> 
    <select class="sel_normal width105 gray_2" name="birYear" id="birYear" onchange="Ajax_MakeAgeInfo();countUserInfoPercent($(this));">
        <option value="">- 请选择 -</option>
         
                <option value ="1916">1916</option>
                 
                <option value ="1917">1917</option>
                 
                <option value ="1918">1918</option>
                 
                <option value ="1919">1919</option>
                 
                <option value ="1920">1920</option>
                 
                <option value ="1921">1921</option>
                 
                <option value ="1922">1922</option>
                 
                <option value ="1923">1923</option>
                 
                <option value ="1924">1924</option>
                 
                <option value ="1925">1925</option>
                 
                <option value ="1926">1926</option>
                 
                <option value ="1927">1927</option>
                 
                <option value ="1928">1928</option>
                 
                <option value ="1929">1929</option>
                 
                <option value ="1930">1930</option>
                 
                <option value ="1931">1931</option>
                 
                <option value ="1932">1932</option>
                 
                <option value ="1933">1933</option>
                 
                <option value ="1934">1934</option>
                 
                <option value ="1935">1935</option>
                 
                <option value ="1936">1936</option>
                 
                <option value ="1937">1937</option>
                 
                <option value ="1938">1938</option>
                 
                <option value ="1939">1939</option>
                 
                <option value ="1940">1940</option>
                 
                <option value ="1941">1941</option>
                 
                <option value ="1942">1942</option>
                 
                <option value ="1943">1943</option>
                 
                <option value ="1944">1944</option>
                 
                <option value ="1945">1945</option>
                 
                <option value ="1946">1946</option>
                 
                <option value ="1947">1947</option>
                 
                <option value ="1948">1948</option>
                 
                <option value ="1949">1949</option>
                 
                <option value ="1950">1950</option>
                 
                <option value ="1951">1951</option>
                 
                <option value ="1952">1952</option>
                 
                <option value ="1953">1953</option>
                 
                <option value ="1954">1954</option>
                 
                <option value ="1955">1955</option>
                 
                <option value ="1956">1956</option>
                 
                <option value ="1957">1957</option>
                 
                <option value ="1958">1958</option>
                 
                <option value ="1959">1959</option>
                 
                <option value ="1960">1960</option>
                 
                <option value ="1961">1961</option>
                 
                <option value ="1962">1962</option>
                 
                <option value ="1963">1963</option>
                 
                <option value ="1964">1964</option>
                 
                <option value ="1965">1965</option>
                 
                <option value ="1966">1966</option>
                 
                <option value ="1967">1967</option>
                 
                <option value ="1968">1968</option>
                 
                <option value ="1969">1969</option>
                 
                <option value ="1970">1970</option>
                 
                <option value ="1971">1971</option>
                 
                <option value ="1972">1972</option>
                 
                <option value ="1973">1973</option>
                 
                <option value ="1974">1974</option>
                 
                <option value ="1975">1975</option>
                 
                <option value ="1976">1976</option>
                 
                <option value ="1977">1977</option>
                 
                <option value ="1978">1978</option>
                 
                <option value ="1979">1979</option>
                 
                <option value ="1980">1980</option>
                 
                <option value ="1981">1981</option>
                 
                <option value ="1982">1982</option>
                 
                <option value ="1983">1983</option>
                 
                <option value ="1984">1984</option>
                 
                <option value ="1985">1985</option>
                 
                <option value ="1986">1986</option>
                 
                <option value ="1987">1987</option>
                 
                <option value ="1988">1988</option>
                 
                <option value ="1989">1989</option>
                 
                <option value ="1990">1990</option>
                 
                <option value ="1991">1991</option>
                 
                <option value ="1992">1992</option>
                 
                <option value ="1993">1993</option>
                 
                <option value ="1994">1994</option>
                 
                <option value ="1995">1995</option>
                 
                <option value ="1996">1996</option>
                 
                <option value ="1997">1997</option>
                 
                <option value ="1998">1998</option>
                 
                <option value ="1999">1999</option>
                 
                <option value ="2000">2000</option>
                 
                <option value ="2001">2001</option>
                 
                <option value ="2002">2002</option>
                 
                <option value ="2003">2003</option>
                 
                <option value ="2004">2004</option>
                 
                <option value ="2005">2005</option>
                 
                <option value ="2006">2006</option>
                 
                <option value ="2007">2007</option>
                 
                <option value ="2008">2008</option>
                 
                <option value ="2009">2009</option>
                 
                <option value ="2010">2010</option>
                 
                <option value ="2011">2011</option>
                 
                <option value ="2012">2012</option>
                 
                <option value ="2013">2013</option>
                 
                <option value ="2014">2014</option>
                 
                <option value ="2015">2015</option>
                 
                <option value ="2016">2016</option>
                    </select> 年 
    <select class="sel_normal width105 gray_2" name="birMonth" id="birMonth" onchange="Ajax_MakeAgeInfo();countUserInfoPercent($(this));">
        <option value="">- 请选择 -</option>
         
                <option value ="1">1</option>
                 
                <option value ="2">2</option>
                 
                <option value ="3">3</option>
                 
                <option value ="4">4</option>
                 
                <option value ="5">5</option>
                 
                <option value ="6">6</option>
                 
                <option value ="7">7</option>
                 
                <option value ="8">8</option>
                 
                <option value ="9">9</option>
                 
                <option value ="10">10</option>
                 
                <option value ="11">11</option>
                 
                <option value ="12">12</option>
                    </select> 月 
    <select class="sel_normal width105 gray_2" name="birDay" id="birDay" onchange="Ajax_MakeAgeInfo();countUserInfoPercent($(this));">
        <option value="">- 请选择 -</option>
         
                <option value ="1">1</option>
                 
                <option value ="2">2</option>
                 
                <option value ="3">3</option>
                 
                <option value ="4">4</option>
                 
                <option value ="5">5</option>
                 
                <option value ="6">6</option>
                 
                <option value ="7">7</option>
                 
                <option value ="8">8</option>
                 
                <option value ="9">9</option>
                 
                <option value ="10">10</option>
                 
                <option value ="11">11</option>
                 
                <option value ="12">12</option>
                 
                <option value ="13">13</option>
                 
                <option value ="14">14</option>
                 
                <option value ="15">15</option>
                 
                <option value ="16">16</option>
                 
                <option value ="17">17</option>
                 
                <option value ="18">18</option>
                 
                <option value ="19">19</option>
                 
                <option value ="20">20</option>
                 
                <option value ="21">21</option>
                 
                <option value ="22">22</option>
                 
                <option value ="23">23</option>
                 
                <option value ="24">24</option>
                 
                <option value ="25">25</option>
                 
                <option value ="26">26</option>
                 
                <option value ="27">27</option>
                 
                <option value ="28">28</option>
                 
                <option value ="29">29</option>
                 
                <option value ="30">30</option>
                 
                <option value ="31">31</option>
                    </select> 日 
    <span class="green marginL10" id="age_info"></span></p>            
</p>
<p class="field_p">
    <label>所在城市：</label>
    <select name="province" class="sel_normal marginR10 gray_2" id="province">
        <option value="">请选择</option>
         
                <option value ="1">北京市</option>
                 
                <option value ="2">上海市</option>
                 
                <option value ="3">天津市</option>
                 
                <option value ="4">重庆市</option>
                 
                <option value ="5">广东省</option>
                 
                <option value ="6">四川省</option>
                 
                <option value ="7">浙江省</option>
                 
                <option value ="8">贵州省</option>
                 
                <option value ="9">辽宁省</option>
                 
                <option value ="10">江苏省</option>
                 
                <option value ="11">福建省</option>
                 
                <option value ="12">河北省</option>
                 
                <option value ="13">河南省</option>
                 
                <option value ="14">吉林省</option>
                 
                <option value ="15">黑龙江省</option>
                 
                <option value ="16">山东省</option>
                 
                <option value ="17">安徽省</option>
                 
                <option value ="18">广西壮族自治区</option>
                 
                <option value ="19">海南省</option>
                 
                <option value ="20">内蒙古自治区</option>
                 
                <option value ="21">山西省</option>
                 
                <option value ="22">宁夏自治区</option>
                 
                <option value ="23">甘肃省</option>
                 
                <option value ="24">陕西省</option>
                 
                <option value ="25">青海省</option>
                 
                <option value ="26">湖北省</option>
                 
                <option value ="27">湖南省</option>
                 
                <option value ="28">江西省</option>
                 
                <option value ="29">云南省</option>
                 
                <option value ="30">新疆维吾尔自治区</option>
                 
                <option value ="31">西藏自治区</option>
                 
                <option value ="33">香港特别行政区</option>
                 
                <option value ="35">澳门特别行政区</option>
                 
                <option value ="36">台湾省</option>
                    </select>
    <span id="tip_province"></span>
    <select name="city"  id="city" class="sel_normal gray_2" onchange="countUserInfoPercent($(this));">
        <option value="">  请选择  </option>
            </select>
    <span id="tip_city"></span>
</p>
<p class="field_p">
    <label>故乡：</label> 
    <select class="sel_normal marginR10 gray_2" name="hometownprovince" id="hometownprovince">
        <option value="">  请选择  </option>
         
                <option value ="1">北京市</option>
                 
                <option value ="2">上海市</option>
                 
                <option value ="3">天津市</option>
                 
                <option value ="4">重庆市</option>
                 
                <option value ="5">广东省</option>
                 
                <option value ="6">四川省</option>
                 
                <option value ="7">浙江省</option>
                 
                <option value ="8">贵州省</option>
                 
                <option value ="9">辽宁省</option>
                 
                <option value ="10">江苏省</option>
                 
                <option value ="11">福建省</option>
                 
                <option value ="12">河北省</option>
                 
                <option value ="13">河南省</option>
                 
                <option value ="14">吉林省</option>
                 
                <option value ="15">黑龙江省</option>
                 
                <option value ="16">山东省</option>
                 
                <option value ="17">安徽省</option>
                 
                <option value ="18">广西壮族自治区</option>
                 
                <option value ="19">海南省</option>
                 
                <option value ="20">内蒙古自治区</option>
                 
                <option value ="21">山西省</option>
                 
                <option value ="22">宁夏自治区</option>
                 
                <option value ="23">甘肃省</option>
                 
                <option value ="24">陕西省</option>
                 
                <option value ="25">青海省</option>
                 
                <option value ="26">湖北省</option>
                 
                <option value ="27">湖南省</option>
                 
                <option value ="28">江西省</option>
                 
                <option value ="29">云南省</option>
                 
                <option value ="30">新疆维吾尔自治区</option>
                 
                <option value ="31">西藏自治区</option>
                 
                <option value ="33">香港特别行政区</option>
                 
                <option value ="35">澳门特别行政区</option>
                 
                <option value ="36">台湾省</option>
                    </select> 
    <select name="hometowncity"  id="hometowncity" class="sel_normal gray_2" onchange="countUserInfoPercent($(this));">
        <option value=""> 请选择  </option>
            </select>
</p>
<p class="field_p">
    <label>血型：</label>
    <select class="sel_normal marginR10 gray_2" name="blood" id="blood" onchange="countUserInfoPercent($(this));">
        <option value="">  请选择  </option>
         
                <option value ="a">A型</option>
                 
                <option value ="b">B型</option>
                 
                <option value ="ab">AB型</option>
                 
                <option value ="o">O型</option>
                    </select>
</p>
<p class="field_p">
    <label>工作：</label>
    <input type="text" class="sel_normal_input marginR10 gray_2" value="请填写职业" name="profession" id="profession" onfocus="keyFocus('profession','请填写职业');" onblur="keyBlur('profession','请填写职业');countUserInfoPercent($(this));" />
    <input type="text" class="sel_normal_input gray_2" value="请填写职位名称" name="position" id="position" onfocus="keyFocus('position','请填写职位名称');" onblur="keyBlur('position','请填写职位名称');countUserInfoPercent($(this));" />
</p>
<p class="field_p">
    <label>教育：</label>
    <select class="sel_normal marginR24 gray_2" name="education" id="education" onchange="countUserInfoPercent($(this));">
        <option value="">请选择学历</option>
         
                <option value ="doctor">博士</option>
                 
                <option value ="master">硕士</option>
                 
                <option value ="undergraduate">本科</option>
                 
                <option value ="college">大专</option>
                 
                <option value ="secondary">中专</option>
                 
                <option value ="senior">高中</option>
                 
                <option value ="junior">初中</option>
                    </select>
    <input type="text" class="sel_normal_input1 gray_2" value="请填写学校名称" name="schoolname" id="schoolname" onfocus="keyFocus('schoolname','请填写学校名称');" onblur="keyBlur('schoolname','请填写学校名称');countUserInfoPercent($(this));" />
</p>                  <p class="field_p_1"><a class="btn_normal">保存设置</a> <span class="tips_right hidden">保存设置成功</span>
<span class="tips_error hidden">操作失败</span></p> 

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
</div>            </form>
            </div>
        </div>
        <!-- content dialog-->
        <div class="zhima_pop pop_330" style="display:none" id="alipayTrustAuthDialog">
    <a href="#ongo" class="pop_close_v2" onclick="closeDialog('alipayTrustAuthDialog')"></a>
    <div class="pop_head">提交身份信息</div>
    <form name="alipayTrustAuthForm" id="alipayTrustAuthForm" method="post" action="http://www.xiaozhu.com/xzweb.php?op=AlipayTrustAuth">
        <p class="ipt_field marginL40">
            <input class="ipt_short" type="text" id="realname4alipay" name="realname4alipay" placeholder="真实姓名" autocomplete="off" value="" />
        </p>
                <span class="ipt_tips pink marginL40" id="realname4alipay-tip" style="display:none;"></span>
        <p class="ipt_field marginL40">
            <input class="ipt_short" type="text" id="certno4alipay" name="certno4alipay" placeholder="身份证号码" value="" autocomplete="off"/>
            <input type="hidden" id="aliview" name="aliview" value="pc">
            <input type="hidden" id="nexturl4alipay" name="nexturl4alipay" value="http://www.xiaozhu.com/xzweb.php?op=FangKe_UserInfo"/>
        </p>
        <span class="ipt_tips pink marginL40" id="certno4alipay-tip" style="display:none;"></span>
        
    </form>
</div>
</body>
<script type="text/javascript" src="http://jci.xiaozhustatic3.com/e1605163/js/jquery/jquery.js"></script>
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/xzjs?k=Footer&httphost=www.xiaozhu.com"></script>
<link rel="stylesheet" type="text/css" href="http://jci.xiaozhustatic1.com/e1605163/xzcss?css=jquery.mCustomScrollbar,nyroModal,uploadify" />
<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/js/jquery/lazyload.js"></script>
<script type="text/javascript" src="http://www.xiaozhu.com/e1605163/js/webimv4/application/xzim4.js?source=xiaozhu&dm=xiaozhu.com" id="webimSource"></script>

<script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/xzjs?k=FangDong_Header&httphost=www.xiaozhu.com"></script>
        <script type="text/javascript" src="http://jci.xiaozhustatic1.com/e1605163/xzjs?k=FangKe_UserInfo&httphost=www.xiaozhu.com"></script>
</html>