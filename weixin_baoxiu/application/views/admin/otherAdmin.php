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
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url() ?>/js/respond.min.js"></script>
    <![endif]-->
 <script Language="JavaScript">
<!--
function form_Validator(theForm)
{
  if (theForm.username.value == "")
  {
    alert("请输入管理员账号");
    theForm.username.focus();
    return (false);
  }
  if (theForm.password.value == "")
  {
    alert("请输入管理员密码");
    theForm.password.focus();
    return (false);
  }
  if(theForm.password.value!=theForm.password2.value)  
  {  
  alert("两次密码不相同！")   
    password2.value = "";
    theForm.password2.focus();
     return (false);
  } 
  if (confirm("你确定要提交信息吗？"))
  {
      return (true);
}else{
  return (false);
}
}
//--></script>

  </head>
  <body>
	<!--
		栏目导航menu.php
	-->
	<?php 
		include './application/views/admin/menu.php';
	 ?>

<div class="col-md-12 col-lg-12">
  <!--导航路径开始-->
<nav class="navbar navbar-default " role="navigation">
  <div class="container-fluid">
<a class="navbar-brand" href="<?php echo site_url() ?>/admin/checkLogin">home</a>
 <a class="navbar-brand" style="width:0px;">></a>
      <a href="<?php echo site_url() ?>/admin/getAllAdmin" class="navbar-brand">管理员明细</a>
      <a class="navbar-brand" style="width:0px;">></a>
      <a class="navbar-brand">添加管理员</a>
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
<div style="height:15px;"></div>
<!--表单-->
<form role="form" action="<?php echo site_url('admin/insertAdmin') ?>" onsubmit="return form_Validator(this)" method="post" name="form">
  <!--账号-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-user"></span>
    <input type="text"  name="username" value="" class="form-control input-lg" id="username" placeholder="请输入管理员账号"  maxlength="10">
    <span class="input-group-addon">必填！</span>
  </div> 
  </div> 
<!--密码-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-lock"></span>
    <input type="password" name="password" value="" class="form-control input-lg" id="password" placeholder="请输入登录密码"  maxlength="6">
    <span class="input-group-addon">必填！</span>
  </div> 
  </div> 
<!--确认密码-->
    <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon glyphicon glyphicon-lock"></span>
    <input type="password" name="password2" value="" class="form-control input-lg" id="password2" placeholder="请再次输入密码"  maxlength="6">
    <span class="input-group-addon">必填！</span>
  </div> 
  </div> 

<!--注册按钮-->
  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <button type="submit" class="btn btn-primary btn-lg" style="width:100%">确认注册</button>

  </div>
  </div>

</form>
</div>
</div>

	      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
</body>
</html>