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
    <script src="<?php echo base_url() ?>/js/changeUser.js"></script>
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
  请务必如实填写你的信息！若因个人信息不全而导致报修信息无法处理的问题，责任由本人负责。
  <br/>没有短号的同学请在短号那一栏均填入手机长号。</div>
  <div style="height:15px;"></div>


<!--表单-->
<form role="form"  action="<?php echo site_url('user/changeUser') ?>" onsubmit="return form_Validator(this)" method="post" name="form">
   <?php
      foreach ($list->result() as $row){
    ?>


    <!--姓名-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon ">姓名</span>
    <input type="text" name="name" value="<?php echo $row->name?>" class="form-control input-lg"  maxlength="9">
  </div> 
  </div> 

<!--新密码-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon">新密码</span>
    <input type="password" name="password" value="<?php echo $row->password?>" class="form-control input-lg"   maxlength="15">
  </div> 
  <!--<span class="help-block">自己独占一行或多行的块级帮助文本。</span> -->
  </div> 

<!--微信号-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon">微信</span>
    <input type="text" name="weixinhao" value="<?php echo $row->weixinhao?>" class="form-control input-lg" placeholder="请输入微信id或昵称"  maxlength="29">
  </div> 
  <!--<span class="help-block">自己独占一行或多行的块级帮助文本。</span> -->
  </div>

<!--长号-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon ">手机长号</span>
    <input type="tel" name="Lnumber" value="<?php echo $row->Lnumber?>" class="form-control input-lg"   maxlength="11">
  </div> 
  </div> 

<!--短号-->
  <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon ">手机短号</span>
    <input type="tel" name="Snumber" value="<?php echo $row->Snumber?>" class="form-control input-lg"  maxlength="11">
  </div> 
  </div>


<!--宿舍号-->
    <div class="form-group">
    <div class="input-group">
  <span class="input-group-addon ">宿舍地址</span>
    <input type="text" name="hostel" value="<?php echo $row->hostel?>" class="form-control input-lg"   maxlength="15">

  </div> 
  </div>  
<input type="hidden" name="id" value="<?php echo $row->id ?>">
<input type="hidden" name="sn" value="<?php echo $row->sn ?>">
<?php
	}
	?>
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <a href="<?php echo base_url() ?>index.php" class="btn btn-primary btn-lg" style="width:100%">返回</a>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
  <input type="submit" name="sub" class="btn btn-primary btn-lg" style="width:100%" value="确认修改">
  </div>
</div>
</form>
</div>
<!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
</body>
</html>