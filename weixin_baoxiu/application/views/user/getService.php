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
        <link rel="stylesheet" href="<?php echo base_url() ?>/css/index.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/css/reset.css" />
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
  if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement("style")
  msViewportStyle.appendChild(
    document.createTextNode(
      "@-ms-viewport{width:auto!important}"
    )
  )
  document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
}

</script> 


  </head>
<body style="background:url(<?php echo base_url() ?>/images/bjxu1.jpg);-moz-background-size:1800px 1000px;background-size:1800px 1000px;
  background-repeat: repeat;">

		<!--头部导航-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <strong class="navbar-brand pull-left">个人维修记录</strong>
<a href="<?php echo base_url() ?>index.php" class="btn btn-primary btn-lg pull-right"><strong>返回</strong></a>
</nav>



   <div class="container" style="padding-top:80px;">
<!--===================================================================================-->
    <!--折叠卡的开始-->
<?php
$a = 0;
      foreach ($list->result() as $row){
        ?>
        
<!--未处理中每一个报修单的头部-->
<div class="panel-group" id="accordion">
        <div class="panel panel-info">
    <div class="panel-heading ">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a ?>">
          问题：<?php echo $row->title ?> <br/>收件人：<?php echo $row->type ?>
        </a>
      </h4>
    </div>
<!--未处理中点击每一个报修单头部显示出来的详细内容-->
  <div id="collapse<?php echo $a ?>" class="panel-collapse collapse">
      <div class="panel-body">
 <table class="table table-bordered table-condensed" style="word-break:break-all; word-wrap:break-all;">     
       <thead>
          <tr>
            <th colspan="1">类型</th>
            <th colspan="3"><?php echo $row->type?></th>
          </tr>
        </thead>
      
        <tbody>
          <tr>
            <td>收件人</td>
            <?php
            if($row->status == '-1'){
            echo '<td class="label-danger" colspan="1">未处理</td>';
            }
            else if($row->status == '0'){
            echo '<td class="label-danger" colspan="1">处理中</td>';
            }
            else if($row->status == '1'){
            echo '<td class="label-danger" colspan="1">已解决</td>';
            }
            else{
            echo '<td class="label-danger" colspan="1">报修失败</td>';
            }
            ?>
          </tr>
            <tr>
       <td>时间</td>
           <td colspan="1"><?php echo date('Y-m-d',$row->time) ?></td>
          </tr>
          <tr>
            <td colspan="4">问题</td>
          </tr>
          <tr>
            <td colspan="4" class="label-info"><?php echo $row->title ?></td>
          </tr>
          <tr>
            <td colspan="4">详细描述</td>
          </tr>
          <tr>
            <td colspan="4" class="label-info"><?php echo $row->content ?></td>
          </tr> 
          <tr>
      <td colspan="4">图片:</td>
    </tr>
    <tr>
     <?php 
     if($row->filename == ''){
    echo '<td colspan="4">无文件存在</td>';
 }else{
      ?>
   <!-- 图片查看Modal -->
<div class="modal fade" id="otherModal<?php echo $a ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <?php
echo '<img class="img-responsive" title="相关图片" width="100%" height="100%" src="'.base_url().'/uploads/'.$row->filename.'"  />';
?>
</div>
      <div class="modal-footer">
        <center><button type="button" style="width:80px" class="btn btn-default btn-lg" data-dismiss="modal">关闭</button></center>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<td colspan="4" ><a href="#otherModal<?php echo $a ?>"  data-toggle="modal" data-target="#otherModal<?php echo $a ?>">
  <?php
    echo '<img class="img-responsive" title="相关图片" width="40%" height="40%" src="'.base_url().'/uploads/'.$row->filename.'"  />';
    } 
    ?>
  
  </a></td></tr>
  <?php 
     if($row->zhujie == ''){

 }else{
      ?>
  <tr>
            <td colspan="4">管理员备注:</td>
          </tr>
      <tr>
            <td colspan="4" class="label-info"><?php echo $row->zhujie ?></td>
          </tr> 
 <?php
 } 
    ?>
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
</div>
<!--未处理每一个报单的整个部分-->
<!--折叠卡结束-->

</div>

	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script> 

</body>
</html>