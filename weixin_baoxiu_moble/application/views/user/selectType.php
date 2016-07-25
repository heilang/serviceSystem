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
<link href="<?php echo base_url() ?>/css/flexslider.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/css/indexstyle.css" rel="stylesheet">
<link href="<?php echo base_url() ?>/css/default.css" rel="stylesheet">
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

<script type="text/javascript">
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
function form_Validator(theForm)
{
if (confirm("你确定要退出吗？"))
  {
      return (true);
}else{
  return (false);
}    
}
//--></script>
  </head>
  <body >
<div id="wrapper">
  <!-- start header -->
  <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" style="display:inline;"><?php echo $_SESSION['username'] ?>,欢迎你</a>
                     <form action="<?php echo base_url() ?>clear.php" onsubmit="return form_Validator(this)" method="post"  name="form">
                        <button type="submit" class="btn btn-inverse btn-lg pull-right">
                          <span class="glyphicon glyphicon-log-out"></span>
                        </button>                      
                        </form>
                </div>
            </div>
        </div>
  </header>
  <!-- end header -->
  <section id="featured">
  <!-- start slider -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
  <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li class="flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; display: block;">
                <img src="<?php echo base_url() ?>/images/pc1.jpg" alt="">
                <div class="flex-caption">
                    <h3>PC志愿者服务队</h3> 
          <p>中山大学南方学院唯一解决电脑问题的全部由志愿者组成的队伍。</p> 
          <a href="http://weibo.com/nfsysupc" class="btn btn-theme">了解更多</a>
                </div>
              </li>
              <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <img src="<?php echo base_url() ?>/images/show_3.jpg" alt="">
                <div class="flex-caption">
                    <h3>PC志愿者服务队</h3> 
          <p>中山大学南方学院唯一解决电脑问题的全部由志愿者组成的队伍。</p> 
          <a href="http://weibo.com/nfsysupc" class="btn btn-theme">了解更多</a>
                </div>
              </li>
              <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
                <img src="<?php echo base_url() ?>/images/pc2.jpg" alt="">
                <div class="flex-caption">
                    <h3>系统开发成员</h3> 
          <p><br/><a href="#"  style="font-size:20px;"><i>heaven</i></a>
            　<a href="#"  style="font-size:20px;"><i>杰oOo哥</i></a>
              <br/><br/><b>如果有任何使用上的问题，欢迎您拨打633或者移步到<abbr title="位于图书馆一楼，进门右转最里侧办公室" class="initialism">PC办公室</abbr>进行反馈</b>
          </p> 
          
                </div>
              </li>
            </ul>
        <ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul><ol class="flex-control-nav flex-control-paging"><li><a>1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul><ol class="flex-control-nav flex-control-paging"><li><a>1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul><ol class="flex-control-nav flex-control-paging"><li><a>1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul><ol class="flex-control-nav flex-control-paging"><li><a>1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
  <!-- end slider -->
      </div>
    </div>
  </div>  
  </section>
  <section class="callaction">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="big-cta">
          <div class="cta-text">
            <h2><span>中山大学南方学院报修系统</span></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section id="content">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-4">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>PC志愿者服务报修</h4>
                <div class="icon">
                <span class="glyphicon glyphicon-briefcase"></span>
                </div>
                <p class="">
                 电脑软件问题请来这里报修
                </p>
                  
              </div>
              <div class="box-bottom">
                <form action="<?php echo site_url('user/sendMessageType') ?>" method="post">
              <input type="hidden" name="type" value="PC志愿者服务" />
              <button type="submit" class="btn btn-info btn-lg" name="skill">点我报修</button>
              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          </form>
              </div>
            </div>
          </div>
<!--
          <div class="col-lg-3">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>端口物理故障报修</h4>
                <div class="icon">
                <span class="glyphicon glyphicon-exclamation-sign"></span>
                </div>
                <p class="">
                 端口物理故障报修
                </p>
                  
              </div>
              <div class="box-bottom">
            <form action="<?php echo site_url('user/sendMessageType') ?>" method="post">
              <input type="hidden" name="type" value="端口物理故障" />
              <button type="submit" class="btn btn-info btn-lg" name="skill">点我报修</button>
              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            </form>
              </div>
            </div>
          </div>
-->
          <div class="col-lg-4">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>报修记录查询</h4>
                <div class="icon">
                <span class="glyphicon glyphicon-search"></span>
                </div>
                <p class="">
                 报修记录查询
                </p>
                  
              </div>
              <div class="box-bottom">

            <form action="<?php echo site_url('user/selectService').'/'.$row['sn'] ?>" method="post">
              <input type="hidden" name="type" value="报修记录查询" />
              <button type="submit" class="btn btn-info btn-lg" name="skill">点我查询</button>
            </form>

              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="box">
              <div class="box-gray aligncenter">
                <h4>修改个人信息</h4>
                <div class="icon">
                <span class="glyphicon glyphicon-edit"></span>
                </div>
                <p class="">
                 修改个人信息
                </p>
                  
              </div>
              <div class="box-bottom">

            <form action="<?php echo site_url('user/getUserMessage').'/'.$row['id'] ?>" method="post">
              <input type="hidden" name="type" value="修改个人信息" />
           <button type="submit" class="btn btn-info btn-lg" name="skill">点我修改</button>
            </form>
           </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- divider -->
    <div class="row">
      <div class="col-lg-12">
        <div class="solidline">
        </div>
      </div>
    </div>
    <!-- end divider -->
    <!-- Portfolio Projects -->
    

  </div>
  </section>
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="widget">
          
          <p>
          <strong>PC服务队报修电话</strong>
<br><i class="icon-phone"></i>13640734385/633<br></p>
          <p><strong>网络中心服务热线</strong><br>
            <i class="icon-phone"></i>611/612<br>
            </p>
        </div>
      </div>
      
      <div class="col-lg-6">
        <div class="widget">
          <h5 class="widgetheading">友情链接</h5>
          <ul class="link-list">
            <li><a href="#">中山大学南方学院官网</a></li>
            <li><a href="#">中山大学南方学院网络中心</a></li>
            <li><a href="#">中山大学南方学院校管部</a></li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright">
            <p>
              <span>© heaven 2014 All right </span><a href="http://weibo.com/nfsysupc" target="_blank">PC服务队</a>
            </p>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  </footer>
</div>
<a href="#" class="scrollup" style="display: none;"><span class="glyphicon glyphicon-arrow-up" style="top:7px;"></span></a>
<script src="<?php echo base_url() ?>/js/jquery.js"></script>
<script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url() ?>/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url() ?>/js/custom.js"></script>
  </body>
</html>