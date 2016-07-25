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
<script Language="JavaScript">
<!--
function form_Validator(theForm)
{
if (confirm("你确定要删除该条信息吗？"))
  {
      return (true);
}else{
  return (false);
}    
}
//--></script>
  </head>
  <body>
	<!--
		栏目导航menu.php
	-->
	<?php 
		include './application/views/admin/menu.php';
		$a = 0;
    $b = 3;
	 ?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <!--导航路径开始-->
  <ol class="breadcrumb">
  <li><a href="<?php echo site_url() ?>/admin/checkLogin">Home</a></li>
  <li class="active">报修信息(未处理)</li>
  <li><a href="<?php echo site_url() ?>/admin/getLockService" class="btn btn-default">锁定</a>
  <a href="<?php echo site_url() ?>/admin/getProcessedService" class="btn btn-default">已处理</a></li>
</ol>
<!--导航路径结束-->

<!--未处理中每一个报修单的头部-->
<div class="panel-group" id="accordion">

<!--===================================================================================-->
    <!--折叠卡的开始-->
<?php
			foreach ($list->result() as $row){
				?>
        <div class="panel panel-success">
    <div class="panel-heading ">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $a ?>">
          <div>问题：<?php echo $row->title ?> </br>宿舍地址：<?php echo $row->hostel ?></br>收件人：<?php echo $row->type ?></div>
        </a>
      </h4>
    </div>
<!--未处理中点击每一个报修单头部显示出来的详细内容-->
	<div id="collapse<?php echo $a ?>" class="panel-collapse collapse">
      <div class="panel-body">
          <table class="table table-bordered table-condensed" style="word-break:break-all; word-wrap:break-all;">   
       <thead>
          <tr>
            <th colspan="1">收件人</th>
            <th colspan="3"><?php echo $row->type ?></th>
          </tr>
        </thead>
      
        <tbody>
          <tr>
            <td>状态</td>
            <?php
            if($row->status == '-1'){
            echo '<td class="label-danger" >未处理</td>';
            }
            ?>
       <td>时间</td>
           <td><?php echo date('Y-m-d',$row->time) ?></td>
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


       <!-- 查看图片弹窗Modal -->
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
          <tr>
            <td>操作</td>
           <td colspan="4">
            <div class="btn-block text-left">
           	<?php if($row->status == '-1'){
					echo '<a href="'.site_url('admin/lockService').'/'.$row->id.'" class="btn btn-primary" role="button" style="width:100px;">锁定</a>';
				}  
				?>
			</div>
      <!--=====外部注解,弹框表单在底部=============================================-->
        <div class="btn-block text-left">
            <?php 
            if($row->status == '-1'){
              ?>
              <a href="#otherModal<?php echo $b ?>" class="btn btn-warning" role="button" style="width:100px;" data-toggle="modal" data-target="#otherModal<?php echo $b ?>">
       <?php
        echo '外部注解';
        }  
        ?>
        </a>
      </div>
<!--=====外部注解===================================================-->
      <div class="btn-block text-left">
        <?php if($row->status == '-1'){
         echo '<form action="'.site_url('admin/DelService').'/'.$row->id.'" onsubmit="return form_Validator(this)" method="post"  name="form">
            <button type="submit" class="btn btn-danger" style="width:100px;">删除</button>
            </form>';        }  
        ?>
        </div>
        </td>
          </tr>
          <tr>
            <td colspan="4">内部注解</td>
          </tr>
          <tr>
             <?php
             if(read_file("./file/".$row->sn."-".$row->id.".txt")){ 
              $stringLeng = explode("|*|",read_file("./file/".$row->sn."-".$row->id.".txt"));
              echo '<td colspan="4">'.
              //获取负责人信息
              implode("</br>",$stringLeng)
              .'</td>';
             }else{
              echo '<td colspan="4">无负责人信息</td>';
             }
            ?>
          </tr>
      </tbody>
      </table>
      </div>
      </div>
      </div>
      <div style="height:10px;"></div>
      <!-- 外部注解弹框Modal=============================================== -->
<div class="modal fade" id="otherModal<?php echo $b ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
<!--填写相应的表单-->
<form action="<?php echo site_url() ?>/admin/inserNote" method="post" class="form-horizontal" role="form">
    <center><label>外部注解</label></center>
    <textarea  type="text" name="content" class="form-control input-lg" rows="6" placeholder="请输入错误信息"></textarea>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-lg pull-left" data-dismiss="modal" style="width:80px">关闭</button>
        <button type="submit" class="btn btn-primary btn-lg pull-right" style="width:80px">保存</button>
      </div>
      <input type="hidden" value="<?php echo $row->id ?>" name="id">
        </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
   <!-- 外部注解弹框Modal=============================================== -->
<?php
$a++;
$b++;
}
?>
</div>
</div>
<!--未处理每一个报单的整个部分-->
<!--折叠卡结束-->
<?php  echo $link ?>
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>/js/bootstrap.min.js"></script>
    

</body>

</html>