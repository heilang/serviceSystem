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
    <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url() ?>/js/respond.min.js"></script>
    <![endif]-->
    <script Language="JavaScript">
    <!--
    function form_Validator(theForm)
{
  if (theForm.sn.value == "")
  {
    alert("请输入你的学号");
    theForm.sn.focus();
    return (false);
  }
   if (theForm.password.value == "")
  {
    alert("请输入密码");
    theForm.password.focus();
    return (false);
  }
}
    //--></script>
  </head>
	<body style="background:url(http://nfwxbx-images.stor.sinaapp.com/bjxu1.jpg),url(<?php echo base_url() ?>/images/bjxu2.jpg);-moz-background-size:1800px 1000px;background-size:1800px 1000px;
  background-repeat: repeat;color:white;">

<?php
function isMobile(){  
 $useragent=isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';  
 $useragent_commentsblock=preg_match('|\(.*?\)|',$useragent,$matches)>0?$matches[0]:'';     
 function CheckSubstrs($substrs,$text){  
  foreach($substrs as $substr)  
   if(false!==strpos($text,$substr)){  
    return true;  
   }  
   return false;  
 }
 $mobile_os_list=array('Google Wireless Transcoder','Windows CE','WindowsCE','Symbian','Android','armv6l','armv5','Mobile','CentOS','mowser','AvantGo','Opera Mobi','J2ME/MIDP','Smartphone','Go.Web','Palm','iPAQ');
 $mobile_token_list=array('Profile/MIDP','Configuration/CLDC-','160×160','176×220','240×240','240×320','320×240','UP.Browser','UP.Link','SymbianOS','PalmOS','PocketPC','SonyEricsson','Nokia','BlackBerry','Vodafone','BenQ','Novarra-Vision','Iris','NetFront','HTC_','Xda_','SAMSUNG-SGH','Wapaka','DoCoMo','iPhone','iPod');  

 $found_mobile=CheckSubstrs($mobile_os_list,$useragent_commentsblock) ||  
     CheckSubstrs($mobile_token_list,$useragent);  

 if ($found_mobile){  
  return true;  
 }else{  
  return false;  
 }  
}
if (isMobile())
 echo "<script Language='JavaScript' type='text/JavaScript'>window.location.href='http://localhost/weixin_baoxiu_moble/'</script>";
else
?>


		<div class="container" style="width:400px;text-align:center;padding-top:50px;">

<h1>中山大学南方学院</h1>
<h6>请输入学号、密码进入<abbr title="中山大学南方学院" class="initialism">中大南方</abbr>报修系统</h6>
  <div style="height:20px;"></div>
<!--表单-->
<form role="form" action="<?php echo site_url('user/checkLogin') ?>" onsubmit="return form_Validator(this)" method="post" name="form" >
  <!--学号-->
  <div class="form-group has-success">

    <input type="text" class="form-control input-lg" style="border-radius:20px;padding-left:140px;border-color:rgba(255, 255, 255, 0.69);background:transparent;color:white;" id="sn" placeholder="请输入学号" name="sn" value="" maxlength="10">
  </div>
  <!--密码-->
  <div class="form-group has-success">

    <input type="password" class="form-control input-lg" style="border-radius:20px;padding-left:140px;border-color:rgba(255, 255, 255, 0.69);background:transparent;color:white;" id="password" placeholder="请输入密码" name="password" maxlength="15" value="">
  </div>
  <div style="height:10px;"></div>
  <!--两个登录按钮-->
  <div class="text-center">
    <!--
  <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
      <a href="<?php echo base_url() ?>clear2.php" class="btn btn-success btn-lg " style="width:100%" value="管理员登录">管理员登录</a>
  </div>
-->
  <div class="text-center">
      <button type="submit" class="btn btn-primary btn-lg" style="width:100%;border-radius:20px;" name="sub" value="登录">登录</button>
  <div style="height:20px;"></div>
  </div>
  </div>
</form>

  <center>
  <a href="#" style="color:white;">忘记密码</a> | <a href="<?php echo base_url() ?>index.php/user/insert" style="color:white;">注册新用户</a>
</center>

 </div>


	</body>
</html>