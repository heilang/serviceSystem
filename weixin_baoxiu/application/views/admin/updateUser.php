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
    <script src="<?php echo base_url() ?>/js/updateuser.js"></script>
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
      <a href="<?php echo site_url() ?>/admin/getAllUser" class="navbar-brand">用户明细</a>
      <a class="navbar-brand" style="width:0px;">></a>
      <a class="navbar-brand">修改信息</a>
  </div><!-- /.container-fluid -->
</nav>
<!--导航路径结束-->
<div class="container">

    <!--警示提示框-->
 <div class="alert" style="color:#FFF;background-color:#5CB85C;border-color:#4CAE4C;">
  请慎重修改</div>

<!--表单-->
<form method="post" action="<?php echo site_url('admin/updateUser') ?>" onsubmit="return form_Validator(this)"  name="form">
   <?php
            foreach ($list->result() as $row){
                ?>
        <!--学号-->
  <div class="form-group has-success">
    <h3><strong>学号:</strong></h3>
    <input type="text" class="form-control input-lg" name="sn" value="<?php echo $row->sn ?>" maxlength="10">
  </div>
  <!--密码-->
  <div class="form-group has-success">
    <h3><strong>密码:</strong></h3>
    <input type="text"  class="form-control input-lg" name="password" value="<?php echo $row->password ?>" maxlength="15">
  </div>

  <!--微信号-->
    <div class="form-group has-success">
    <h3><strong>微信:</strong></h3>
    <input type="text"  class="form-control input-lg" name="weixinhao" value="<?php echo $row->weixinhao ?>" maxlength="29">
  </div>

  <!--姓名-->
  <div class="form-group has-success">
    <h3><strong>姓名:</strong></h3>
    <input type="text"  class="form-control input-lg" name="name" value="<?php echo $row->name?>" maxlength="9">
  </div>

  <!--手机长号-->
  <div class="form-group has-success">
    <h3><strong>手机长号:</strong></h3>
    <input type="text"  class="form-control input-lg" name="Lnumber" value="<?php echo $row->Lnumber?>" maxlength="11">
  </div>
  <!--手机短号-->
  <div class="form-group has-success">
    <h3><strong>手机短号:</strong></h3>
    <input type="text"  class="form-control input-lg" name="Snumber" value="<?php echo $row->Snumber ?>" maxlength="11">
  </div>
  <!--宿舍地址-->
  <div class="form-group has-success">
    <h3><strong>宿舍:</strong></h3>
    <input type="text"  class="form-control input-lg" name="hostel" value="<?php echo $row->hostel ?>" maxlength="15">
  </div>
    <!--两个登录按钮-->
  <div class="text-center">
  <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
      <a href="<?php echo site_url('admin/getAllUser') ?>" class="btn btn-success btn-lg " style="width:100%" value="返回">返回</a>
  </div>
  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
      <button type="submit" class="btn btn-success btn-lg" style="width:100%" name="sub"  value="修改">确认修改</button>
  </div>
  </div>
  </div>
  <input type="hidden" name="userId" value="<?php echo $row->id ?>">
</form>
        <?php
}
?>
<div style="height:20px;"></div>
</div>
</div>
		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
</body>
</html>