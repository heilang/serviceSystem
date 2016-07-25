  
<!--右侧导航栏开始-->
<div class="col-md-2 col-lg-2 navbar-inverse" style="position:fixed;width:180px;height:100%;z-index:1000;">
<ul class="nav nav-pills nav-stacked pull-left" role="tablist">
  <ul class="nav nav-pills nav-stacked" role="tablist" style="max-width:180px;">
      <li role="presentation"><a href="<?php echo site_url() ?>/admin/checkLogin"><h2><b>南方学院</b></h2><h3>微信报修平台</h3></a></li>
      <li role="presentation"><hr/></li>
      <li role="presentation" style="color:white;padding:0 10px 0 20px;">
        <h4>帐号信息：</h4>
          <?php
    if($_SESSION['administrator'] == 'admin'){
  ?>
  <h6>欢迎你<?php echo $_SESSION['administrator'] ?>,你是超级管理员</h6>
    
  <?php
    }else{
  ?>
  <h6>欢迎你<?php echo $_SESSION['administrator'] ?>,你是普通管理员</h6>
  <?php
    }
  ?>
      </li>
      <li role="presentation"><hr/></li>
      <li role="presentation">
 <form action="<?php echo site_url('admin/searchData') ?>" method="post" role="search">
<div class="input-group">
<input type="text" name="sn" class="form-control" maxlength="10" placeholder="请输入学号">
<span class="input-group-btn">
<button type="submit" class="btn btn-success" value="查询">查询</button>
</span>
</div><!-- /input-group -->
</form>
      </li>
      <li role="presentation"><hr/></li>
            <!--二级列表-->
      <li role="presentation" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-envelope" style="width:30px"></span>
          <strong>报 修 信 息 </strong>
          <span class="glyphicon glyphicon-download pull-right"></span>
        </a>
        <!--二级列表里面的内容-->
        <ul class="dropdown-menu ">
          <li><a href="<?php echo site_url() ?>/admin/getUntreatedService">
          <span class="glyphicon glyphicon-eye-open"></span>
          <strong>未 处 理</strong><span class="badge pull-right"></span></a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/getLockService">
          <span class="glyphicon glyphicon-eye-close"></span>
          <strong>锁 定</strong><span class="badge pull-right"></span></a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/getProcessedService">
          <span class="glyphicon glyphicon-ok"></span>
          <strong>已 处 理</strong><span class="badge pull-right"></span></a></li>
        </ul>
      </li>
      <li role="presentation"><hr/></li>
      <!--二级列表-->
      <li role="presentation" class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="glyphicon glyphicon-user" style="width:30px"></span>
          <strong>管 理 员</strong>
          <span class="glyphicon glyphicon-download pull-right"></span>
        </a>
       <!--二级列表里面的内容-->
        <ul class="dropdown-menu">
          <li><a href="<?php echo site_url() ?>/admin/getAllUser">
          <span class="glyphicon glyphicon-record"></span>
          <strong>用户信息表</strong></a></li>
                  <?php
      if($_SESSION['administrator'] == 'admin'){
    ?>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/signAdmin">
          <span class="glyphicon glyphicon-plus"></span>
          <strong>注册新的管理员</strong></a></li>
          <li class="divider"></li>
          <li><a href="<?php echo site_url() ?>/admin/getAllAdmin">
            <span class="glyphicon glyphicon-record"></span>
            <strong>管理员明细</strong></a></li>
                          <?php
      }
    ?>
        </ul>
      </li>
      <li role="presentation"><hr/></li>
      <li role="presentation"><a href="<?php echo base_url() ?>clear2.php">
        <span class="glyphicon glyphicon-log-out" style="width:30px"></span>
        <strong>退出报修系统</strong></a></li>
    </ul>
</ul> 
</div>
<!--右侧导航栏结束-->