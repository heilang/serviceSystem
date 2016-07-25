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
    
  </head>
  <body>

	<!--
		栏目导航menu.php
	-->
	<?php 
		include './application/views/admin/menu.php';
	 ?>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!--导航路径开始-->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url() ?>/admin/checkLogin"><span class="glyphicon glyphicon-home"></span></a>
      <a class="navbar-brand" style="width:0px;">></a>
      <a class="navbar-brand">管理员明细</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <a href="<?php echo site_url() ?>/admin/signAdmin" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a>
        </div>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--导航路径结束-->

<!--未处理中每一个报修单的头部-->
<div class="panel-group" id="accordion">
<!--===================================================================================-->
  <!--用户信息折叠卡的开始-->
   <?php
   $a = 0;
            foreach ($list->result() as $row){
                
                ?>
 <div class="panel panel-default">
    <div class="panel-heading ">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapseuser<?php echo $a ?>">
         <h4>基本信息：<?php echo $row->administrator ?></h4>
        </a>
      </h4>
    </div>
<!--未处理中点击每一个报修单头部显示出来的详细内容-->
  <div id="collapseuser<?php echo $a ?>" class="panel-collapse collapse">
      <div class="panel-body">
          <table class="table table-bordered table-condensed" style="word-break:break-all; word-wrap:break-all;">   
      <tbody style="text-align:center">
        <tr>
          <td>账号</td>
          <td>密码</td>
            </tr>
            <tr>
               <tr>
          <td ><?php echo $row->administrator ?></td>
          <td ><?php echo $row->password ?></td>
            </tr>
</tbody>
</table>
</div>
</div>
</div>
<div style="height:10px;"></div>
<?php
$a++;
}
?>
<!--用户信息折叠卡的结束-->
</div>
</div>
			    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
</body>
</html>