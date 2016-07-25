<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>出错了！</title>
  <meta name="description" content="微信报修平台">
    <meta name="author" content="heaven">
    <link rel="shortcut icon" href="<?php echo base_url() ?>/images/favicon.png">
<!--两种弹框处理
<script language="javascript">
alert("账号或密码错误！请重新登录！");
top.location='<?php echo base_url() ?>index.php/user/login';
</script>
-->
<script language="javascript">
			alert("账号或密码错误！请重新登录！");
           window.location.href="<?php echo base_url() ?>index.php/user/login"; 
    </script> 

</head>
<body>
</body>
</html>