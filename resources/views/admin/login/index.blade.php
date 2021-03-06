<!DOCTYPE html><html>
<head>
<title>青岛新高度系统登录</title>
<!-- 页面基本设置禁止随意更改 -->
<meta charset="utf-8">
<meta name="author" content="forework">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="msapplication-tap-highlight" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<!-- 页面基本设置禁止随意更改 -->
<!-- 基础CSS类库可随意更改 -->
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/less.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/basic.css') }}">
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/ie8.css') }}">
<![endif]-->
<!--[if gte IE 9]> 
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/ie.css') }}">
<link href="{{ URL::asset('img/admin/viewfile.png') }}" rel="shortcut icon" />
<![endif]-->
    <style>
        input.btn-register{
            width: 228px;
            font-size: 14px;
            color:#ffffff;
            background-color: #3598db;
            line-height: 22px;
            text-align: center;
            padding: 8px 0px;
            margin: 33px 0px 0px 0px;
            cursor: pointer;
            border-radius: 5px;
            display: inline-block;
            border:none;
        }
    </style>
</head>
<body>
<div class="wrapper" style="background-color: white;">
  <div class="login-top">
  <div style="height: 60px;background-color: white;">
	<div style=";margin-left: 160px;">
        <a href="{{ route('index') }}" style="font-size: bold;"><img src="{{ URL::asset('img/admin/log_1.jpg') }}" /></a>
	</div>
  </div>
    <div class="login-topBg">
        <div class="login-topStyle" >
          <div class="login-topStyle3" id="loginStyle" style="margin-top: 75px;">
              <h3>管理后台登录</h3>
              <form action="{{ route('login_vil') }}" method="post">
                  {{ csrf_field() }}
                  <div class="ui-form-item loginUsername">
                      <input type="username" name="admin_name" placeholder="请输入用户名" value="{{ old('username') }}">
                  </div>
                  <div class="ui-form-item loginPassword">
                      <input type="password" name="admin_pwd" placeholder="请输入密码" value="{{ old('password') }}">
                  </div>
                  <input type="submit" class="btnStyle btn-register" value="立即登录" />
              </form>
          </div>
        </div>
    </div>
  </div>
  <div class="loginCen" style="margin-top: 170px;">
    <div class="login-center">
      <div class="loginCenter-moudle">
        <div class="loginCenter-moudleLeft" style="margin-right: 60px;"> &nbsp;</div>
        <div class="loginCenter-moudleRight" style="  width: 1067px;"> 
          <!--第一个--> 
          <a class="loginCenter-mStyle loginCenter-moudle1" id="moudleRemove" style=" display:block;width: 340px;">
               <span class="moudle-img"><img src="{{ URL::asset('img/admin/login_bg_01.png') }}"></span>
               <span class="moudle-text">
                   <span class="moudle-text1" style="font-family:'微软雅黑'">一体化战略预算</span>
                   <span class="moudle-text2" style="font-family:'微软雅黑'">Integrated strategic budget</span>
               </span>
          </a>
           <!--第二个-->
          <a class="loginCenter-mStyle loginCenter-moudle2" style=" display:block; width: 357px;" id="moudleRemove2" >
              <span class="moudle-img"><img src="{{ URL::asset('img/admin/login_bg_02.png') }}"></span>
              <span class="moudle-text">
                  <span class="moudle-text1" style="font-family:'微软雅黑'"> 精细化财务核算</span>
                  <span class="moudle-text2" style="font-family:'微软雅黑'">Refined financial accounting</span>
              </span>
          </a>
            <!--第三个-->
                 <a class="loginCenter-mStyle loginCenter-moudle3" style=" display:block;" id="moudleRemove3" >
                 <span class="moudle-img"><img src="{{ URL::asset('img/admin/login_bg_03.png') }}"></span>
                 <span class="moudle-text">
                    <span class="moudle-text">
                        <span class="moudle-text1" style="font-family:'微软雅黑'">独立化自主经营</span>
                        <span class="moudle-text2" style="font-family:'微软雅黑'">Independent operation</span>
                    </span>
                 </span>
             </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer"> <span class="footerText">Copyright &copy; 2014  青岛新高度信息科技有限公司&nbsp&nbsp版权所有</span> </div>
</div>
</body>
</html>