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


    return (true);
}
//--></script>
  </head>
  <body>

<div class="container">

<!--表单-->
<form role="form" action="<?php echo site_url('admin/checkLogin') ?>" onsubmit="return form_Validator(this)" method="post" name="form">
<!--账号-->
  <div class="form-group has-success">
    <h3><strong>账号</strong></h3>
    <input type="text" name="username" value="" class="form-control input-lg" id="exampleInputEmail1" placeholder="请输入管理员账号"  maxlength="10">
  </div>
<!--密码-->
  <div class="form-group has-success">
    <h3><strong>密码</strong></h3>
    <input type="password" name="password" value="" class="form-control input-lg" id="exampleInputPassword1" placeholder="请输入登录密码"  maxlength="6">
  </div>
  <div style="height:10px;"></div>
<!--两个登录按钮-->
  <div class="row">
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
      <a href="<?php echo base_url() ?>clear.php" class="btn btn-success btn-lg" style="width:100%">学生登录</a>
  </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
      <button type="submit" class="btn btn-success btn-lg" style="width:100%" name="sub" value="登录">登录</button>
  </div>
  </div>
</form>
</div>
	</body>

</html>