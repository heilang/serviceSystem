<!DOCTYPE html>
<html lang="zh-cn">
  <head>
		<title>中山大学南方学院报修系统</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="微信报修平台">
    <meta name="author" content="heaven">
    <link rel="shortcut icon" href="<?php echo base_url() ?>/images/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/sign.css">
            <link rel="stylesheet" href="<?php echo base_url() ?>/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url() ?>/js/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
@-ms-viewport       { width: device-width; }
@-webkit-viewport   { width: device-width; }
@-moz-viewport      { width: device-width; }
@-ms-viewport       { width: device-width; }
@-o-viewport        { width: device-width; }
@viewport           { width: device-width; }
</style>  
<script Language="JavaScript">
<!--
  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement("style")
  msViewportStyle.appendChild(
    document.createTextNode(
      "@-ms-viewport{width:auto!important}"
    )
  )
  document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
}
//--></script>
  </head>
	<body style="background:url(<?php echo base_url() ?>/images/bjxu2.jpg);-moz-background-size:1800px 1000px;background-size:1800px 1000px;
  background-repeat: repeat;">



  
            <div class="header">
            <div class="container">
                <div class="row">
                    <div class="logo span4">
                        <h1 style="color:white;">注册</h1>
                    </div>
                    <div class="links span8">
                        <a href="<?php echo base_url() ?>index.php/user/login" style="width:200px;color:red;text-decoration:underline;" title="点击登录">已有帐号？直接登录</a>
                    </div>
                </div>
            </div>
        </div>

  <div class="register-container container">
            <div class="row">
                <div class="iphone span5">
                    <img src="<?php echo base_url() ?>/images/iphone.png" alt="特别提示！">
                </div>
                <div class="register span6">
 <form role="form" role="form" action="<?php echo site_url('user/insert') ?>"  method="post" name="form">
                         
                        <label for="sn">学号</label>
    <input type="text" id="sn" name="sn" value="<?php echo set_value('sn') ?>" class="form-control input-lg"  placeholder="请输入你的学号" maxlength="10">
                        <label for="password">密码</label>
    <input type="password" id="password" name="password" value="<?php echo set_value('password') ?>" class="form-control input-lg"  placeholder="请输入登录密码" maxlength="15">
                        <label for="password2">确认密码</label>
    <input type="password" id="password2" name="password2" value="" class="form-control input-lg" id="password2" placeholder="请再次输入密码" maxlength="15">
                        <label for="name">姓名</label>
    <input type="text" id="name" name="name" value="" class="form-control input-lg" placeholder="请输入你的姓名" maxlength="9">
                        <label for="Lnumber">手机长号</label>
    <input type="tel" id="Lnumber" name="Lnumber" value="" class="form-control input-lg"  placeholder="请输入你的手机长号" maxlength="11">
                        <label for="Snumber">手机短号</label>
    <input type="tel" id="Snumber" name="Snumber" value="<?php echo set_value('Snumber') ?>" class="form-control input-lg"  placeholder="请输入你的手机短号" maxlength="11">
                        <label for="hostel">宿舍号</label>
    <input type="text" id="hostel" name="hostel" value="" class="form-control input-lg"  placeholder="输入住址：例如:H12-303" maxlength="15">
                         <button type="submit" name="sub" class="btn btn-success btn-lg" style="width:100%;border-radius:20px;">确认注册</button>

                    </form>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="<?php echo base_url() ?>/js/jquery-1.8.2.min.js"></script>
        <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url() ?>/js/scripts.js"></script>
	</body>
</html>