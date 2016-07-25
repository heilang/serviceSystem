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
  <li class="active">查询报修单</li> </ol>
  <center>

    
    <form action="<?php echo site_url('admin/searchDataSnumber') ?>" method="post" class="navbar-form" role="search">
      <!-- /input-group -->
      <div class="input-group" style="width:300px;">
      <input type="text" name="Snumber" class="form-control" maxlength="11" placeholder="请输入短号">
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
    <!--折叠卡的开始-->
<?php
$a = 0;
      foreach ($list->result() as $row){
        ?>
        <div class="panel panel-success">
    <div class="panel-heading ">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a ?>">
         <div>编号<?php echo $row->id?><br/>问题：<?php echo $row->title ?> <br/>收件人：<?php echo $row->type ?></div>
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
            <td>状态</td>
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
       <td>时间</td>
           <td colspan="1"><?php echo date('Y-m-d',$row->time) ?></td>
          </tr>
         <tr>
            <td>学号</td>
            <td colspan="4"><?php echo $row->sn ?></td>
          </tr>
          <tr>
            <td>短号</td>
            <td colspan="4"><?php echo $row->Snumber ?></td>
          </tr>
          <tr>
                      <td>宿舍</td>
            <td colspan="4"><?php echo $row->hostel ?></td>
            </tr> 
          <tr>
            <td colspan="4">标题</td>
          </tr>
          <tr>
            <td colspan="4" class="label-warning"><?php echo $row->title ?></td>
          </tr>
          <tr>
            <td colspan="4">内容</td>
          </tr>
          <tr>
            <td colspan="4" class="label-warning"><?php echo $row->content ?></td>
          </tr> 
          <tr>
      <td colspan="4">文件:</td>
    </tr>
    <tr>
     <?php 
     if($row->filename == ''){
    echo '<td colspan="4">无文件存在</td>';
 }else{
      ?>

          <!-- Modal -->
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
    echo '<img class="img-responsive" title="相关图片" width="200px" height="200px" src="'.base_url().'/uploads/'.$row->filename.'"  />';
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
            <td colspan="4" class="label-warning"><?php echo $row->zhujie ?></td>
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
</div>
<!--未处理每一个报单的整个部分-->
<!--折叠卡结束-->

		    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
</body>
</html>