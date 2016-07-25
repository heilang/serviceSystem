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
  <ol class="breadcrumb">
  <li><a href="<?php echo site_url() ?>/admin/checkLogin">Home</a></li>
  <li class="active">用户明细</li> </ol>
  <center>

    
       <form action="<?php echo site_url('admin/searchDataUser') ?>" method="post" class="navbar-form" role="search">
      <!-- /input-group -->
      <div class="input-group" style="width:300px;">
<input type="text" name="sn" class="form-control" maxlength="11" placeholder="请输入学号">
      <span class="input-group-btn">
        <button type="submit" class="btn btn-success" value="查询">查询</button>
      </span>
    </div><!-- /input-group -->
      </form>
</center>

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
         <h4>基本信息：<?php echo $row->name ?></h4>
        </a>
      </h4>
    </div>
<!--未处理中点击每一个报修单头部显示出来的详细内容-->
  <div id="collapseuser<?php echo $a ?>" class="panel-collapse collapse">
      <div class="panel-body">
          <table class="table table-bordered table-condensed" style="word-break:break-all; word-wrap:break-all;">   
      <tbody style="text-align:center">
        <tr>
          <td>用户ID</td>
          <td colspan="4"><?php echo $row->id ?></td>
        </tr>
        <tr>
          <td>学号</td>
          <td colspan="4"><?php echo $row->sn ?></td>
        </tr>
                 <?php
      if($_SESSION['administrator'] == 'admin'){
    ?>
        <tr>
          <td>密码</td>
          <td colspan="4"><?php echo $row->password ?></td>
        </tr>
                              <?php
      }
    ?>
          <tr>
            <td>姓名</td>
            <td colspan="4"><?php echo $row->name ?></td>
          </tr>
                    <?php
      if($_SESSION['administrator'] == 'admin'){
    ?>
          <tr>
            <td>微信号</td>
            <td colspan="4"><?php echo $row->weixinhao ?></td>
          </tr>
                                     <?php
      }
    ?>
          <tr>
            <td>手机长号</td>
            <td colspan="4"><?php echo $row->Lnumber ?></td>
          </tr>
          <tr>
            <td>手机短号</td>
            <td colspan="4"><?php echo $row->Snumber ?></td>
          </tr>
          <tr>
                      <td>宿舍号</td>
            <td colspan="4"><?php echo $row->hostel ?></td>
            </tr> 
                    </tbody>
</table>
         <?php
      if($_SESSION['administrator'] == 'admin'){
    ?>
<div class="pull-right">
<a href="<?php echo site_url('admin/selectUser').'/'.$row->id ?>" class="btn btn-primary btn-lg">修改</a>
<a href="<?php echo site_url('admin/delUser').'/'.$row->id ?>" class="btn btn-danger btn-lg">删除</a>
</div>
                      <?php
      }
    ?>
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