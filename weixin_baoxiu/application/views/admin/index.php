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

<?php
    //栏目导航menu.php
  include './application/views/admin/menu.php';
?>

<div class="col-md-12 col-lg-12">

<!--导航路径结束-->
         <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <a href="#" name="skill">
            <form action="<?php echo site_url() ?>/admin/getUntreatedService" method="post">
              <input type="hidden" name="type" value="PC志愿者服务" />
              <input type="image" name="submit" src="<?php echo base_url() ?>/images/pc.png" style="height: 180px; width: 100%; display: block;"  >
            </form>
          </a>
          <div class="text-center">
            <p>报修单</p>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <a href="" name="skill">
            <form action="<?php echo site_url('admin/searchData') ?>" method="post">
              <input type="hidden" name="type" value="查询报修单" />
              <input type="image" name="submit" src="<?php echo base_url() ?>/images/chazhao.png" style="height: 180px; width: 100%; display: block;"  >
            </form>
          </a>
          <div class="text-center">
            <p>查询报修单</p>
          </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <a href="" name="skill">
            <form action="<?php echo site_url() ?>/admin/getAllUser" method="post">
              <input type="hidden" name="type" value="用户反馈" />
              <input type="image" name="submit" src="<?php echo base_url() ?>/images/xiugai.png" style="height: 180px; width: 100%; display: block;"  >
            </form>
          </a>
           <div class="text-center">
            <p>用户明细</p>
          </div>
        </div>
         <?php
      if($_SESSION['administrator'] == 'admin'){
    ?>
        <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
          <a href="" name="skill">
            <form action="<?php echo site_url() ?>/admin/getAllAdmin" method="post">
              <input type="hidden" name="type" value="用户明细" />
              <input type="image" name="submit" src="<?php echo base_url() ?>/images/xiugai.png" style="height: 180px; width: 100%; display: block;"  >
            </form>
          </a>
           <div class="text-center">
            <p>管理员明细</p>
          </div>
        </div>
                      <?php
      }
    ?>
      </div>
  </div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
</body>

</html>