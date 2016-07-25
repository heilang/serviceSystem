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
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/bootstrap.min.css">
             <script src="<?php echo base_url() ?>/js/sign.js"></script>
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
	<body style="background:url(http://nfwxbx-images.stor.sinaapp.com/nf2.jpg),url(<?php echo base_url() ?>/images/bjxu2.jpg);-moz-background-size:1800px 1000px;background-size:1800px 1000px;
  background-repeat: repeat;">
		<div class="container">

<!--警示提示框-->
 <div class="alert" style="color:#FFF;background-color:#5CB85C;border-color:#4CAE4C;">
  请务必如实填写你的信息！若因个人信息不全而导致报修信息无法处理的问题，责任由注册人负责。
  <br/>带( * )号为必填信息。没有短号的同学请在短号那一栏均填入手机长号。</div>
  <div style="height:15px;"></div>

   <?php echo validation_errors(); ?>
      <?php echo $signError; ?>
<!--表单-->
<form role="form" role="form" action="<?php echo site_url('user/insert') ?>" onsubmit="return form_Validator(this)" method="post" name="form">
   
   <!--学号-->
    <div class="form-group">
    <div class="input-group">
  <span  class="input-group-addon glyphicon glyphicon-th"></span>
    <input type="text" name="sn" value="<?php echo set_value('sn') ?>" class="form-control input-lg"  placeholder="请输入你的学号" maxlength="10">
    <span class="input-group-addon">*</span>
  </div> 
   <!--<span class="help-block">自己独占一行或多行的块级帮助文本。</span> -->
  </div> 

<!--密码-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-lock"></span>
    <input type="password" name="password" value="<?php echo set_value('password') ?>" class="form-control input-lg"  placeholder="请输入登录密码" maxlength="15">
    <span class="input-group-addon">*</span>
  </div> 
  </div> 

<!--确认密码-->
    <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-lock"></span>
    <input type="password" name="password2" value="" class="form-control input-lg" id="password2" placeholder="请再次输入密码" maxlength="15">
    <span class="input-group-addon">*</span>
  </div> 
  </div> 

<!--微信号-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-user"></span>
    <input type="text" name="weixinhao" value="" class="form-control input-lg" placeholder="请输入微信id或昵称" maxlength="29">
    <span class="input-group-addon">*</span>
  </div> 
  </div> 

<!--姓名-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-user"></span>
    <input type="text" name="name" value="" class="form-control input-lg" placeholder="请输入你的姓名" maxlength="9">
    <span class="input-group-addon">*</span>
  </div> 
  </div> 


<!--长号-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-earphone"></span>
    <input type="tel" name="Lnumber" value="" class="form-control input-lg"  placeholder="请输入你的手机长号" maxlength="11">
    <span class="input-group-addon">*</span>
  </div> 
  </div> 

<!--短号-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-phone-alt"></span>
    <input type="tel" name="Snumber" value="<?php echo set_value('Snumber') ?>" class="form-control input-lg"  placeholder="请输入你的手机短号" maxlength="11">
    <span class="input-group-addon">*</span>
  </div> 
  </div>


<!--宿舍号-->
    <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-home"></span>
    <input type="text" name="hostel" value="" class="form-control input-lg"  placeholder="输入住址：例如:H12-303" maxlength="15">
    <span class="input-group-addon">*</span>
  </div> 
  </div>  
  <div style="height:10px;"></div>
  <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <button type="submit" name="sub" class="btn btn-primary btn-lg" style="width:100%">确认注册</button>

  </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
<a href="<?php echo base_url() ?>index.php/user/login" class="btn btn-primary btn-lg"  style="width:100%">已有账号</a>
  </div>
  </div>

</form>
<div style="height:30px;"></div>
<center>
<p style="color:white;">
              <span>© heaven 2014 All right </span><a href="http://weibo.com/nfsysupc" target="_blank">PC服务队</a>
            </p>
          </center>
 </div>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
	</body>
</html>