
<!--头部导航条-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header ">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="<?php echo site_url() ?>/admin/checkLogin" class="navbar-brand navbar-left" >南方学院微信报修</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
            <li>
          
  <?php
    if($_SESSION['administrator'] == 'admin'){
  ?>
  <a >欢迎你<?php echo $_SESSION['administrator'] ?>,你是超级管理员</a>
    
  <?php
    }else{
  ?>
  <a >欢迎你<?php echo $_SESSION['administrator'] ?>,你是普通管理员</a>
    
  <?php
    }
  ?>
</li>


 <form action="<?php echo site_url('admin/searchData') ?>" method="post" class="navbar-form navbar-left" role="search">
        <center>
        <div class="form-group">
          <input type="text" name="sn" class="form-control" maxlength="10" placeholder="请输入学号">
        </div>
        <button type="submit" class="btn btn-success" value="查询">查询</button>
      </center>
      </form>
      <!--
      <li><a href="<?php echo site_url() ?>/admin/getAllUser"><strong>用户信息表</strong></a></li>
      -->
      <!--二级列表-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>报修信息</strong><span class="caret"></span></a>
        <!--二级列表里面的内容-->
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url() ?>/admin/getUntreatedService">
            <span class="glyphicon glyphicon-eye-open"></span><strong>未处理</strong></a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/getLockService">
            <span class="glyphicon glyphicon-eye-close"></span><strong>锁定</strong></a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/getProcessedService">
            <span class="glyphicon glyphicon-ok"></span><strong>已处理</strong></a></li>
        </ul>
      </li>

    <!--二级列表-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>管理员</strong><span class="caret"></span></a>
       <!--二级列表里面的内容-->
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url() ?>/admin/getAllUser">
            <span class="glyphicon glyphicon-record"></span><strong>用户信息表</strong></a></li>
                    <?php
      if($_SESSION['administrator'] == 'admin'){
    ?>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/signAdmin">
            <span class="glyphicon glyphicon-plus"></span><strong>注册新的管理员</strong></a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/getAllAdmin">
            <span class="glyphicon glyphicon-record"></span><strong>管理员明细</strong></a></li>

        <?php
      }
    ?>
        </ul>
      </li>
<li><a href="<?php echo base_url() ?>clear2.php"><span class="glyphicon glyphicon-log-out" style="width:20px"></span><strong>退出报修系统</strong></a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
  </div>
</nav>

<div style="height:60px"></div>
