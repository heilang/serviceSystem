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
    <script src="<?php echo base_url() ?>/js/index.js"></script>
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
    .fileInputContainer{
        height:128px;
        background:url(<?php echo base_url() ?>/images/upload2.png);
        position:relative;
        width: 128px;
    }
    .fileInput{ 
        height:128px;
        overflow: hidden;
        font-size: 300px;
        position:absolute;
        right:0;
        top:0;
        opacity: 0;
        filter:alpha(opacity=0);
        cursor:pointer;
    }
</style>
  </head>
<body style="background:url(<?php echo base_url() ?>/images/background.jpg);-moz-background-size:1800px 1000px;background-size:1800px 1000px;
  background-repeat: repeat;color:white;">
  <div class="container">
    <!--表单-->
    <form action="<?php echo site_url('user/sendMessage') ?>" onsubmit="return form_Validator(this)" method="post" enctype="multipart/form-data" accept-charset="utf-8" name="form">
    <!--头部导航-->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
<a href="<?php echo base_url() ?>index.php" class="btn btn-primary btn-lg pull-left"><strong>返回</strong></a>
<button type="submit" class="btn btn-success btn-lg pull-right"><strong>确定</strong></button>
</nav> 

<div style="height:70px;"></div>
<!--显示文件类型上传的错误信息 弹框显示-->
<?php 
      if(isset($uploadError)){
        echo '<script>alert("文件类型错误!");</script>';
      }
    ?>
<!--报修类型下拉框-->

<div class="row">
<!-- 左侧表单 =================================-->
  <div class="col-xs-12 col-sm-12 col-md-6 col-6">
<div class="form-group has-success ">
    <h3><strong>收件人：</strong></h3>
    <input type="text" readonly="readonly" name="skill" value="<?php echo $type ?>" class="form-control">
</div>


<!--标题-->
  <div class="form-group has-success">
    <h3><strong>问题:</strong></h3>
    <input type="text" name="title" class="form-control input-lg" placeholder="请输入标题">
  </div>
<!--详细问题-->
    <div class="form-group has-success">
    <h3><strong>详细描述：</strong></h3>
    <textarea  type="text" name="content" class="form-control input-lg" rows="6" placeholder="详细问题及晚上空闲时间"></textarea>
  </div>
    
<!--上传图片-->
<div class="form-group">


 <div class="fileInputContainer">
    <!-- <h3><strong>上传图片:</strong></h3>  -->
 <input title="点击上传图片" type="file" name="userfile" id="userfile" class="fileInput" multiple accept="image/*"  onchange="handleFiles(this)">
</div>
<div style="height:5px;"></div>
<p class="text-success">若有拍摄相关问题的图片，请点击按钮上传。仅限一张图片上传！</p>

</div>

</div>
<!-- 左侧表单 =================================-->
<!-- 右侧预览 =================================-->
  <div class="col-xs-12 col-sm-12 col-md-6 col-6">
  <div id="fileList" ></div>
</div>  
<!-- 右侧预览 =================================-->
</div>
  <!--===============================显示预览上传的图片===========================================-->
  <script>
  window.URL = window.URL || window.webkitURL;
  var userfile = document.getElementById("userfile"),
      fileList = document.getElementById("fileList");
  function handleFiles(obj) {
    var files = obj.files,
      img = new Image();
    if(window.URL){
      //File API
        alert(files[0].name + "。" + "添加成功！");
          img.src = window.URL.createObjectURL(files[0]); //创建一个object URL，并不是你的本地路径
          img.width = 300;
          img.onload = function(e) {
             window.URL.revokeObjectURL(this.src); //图片加载后，释放object URL
          }
          fileList.appendChild(img);
    }else if(window.FileReader){
      //opera不支持createObjectURL/revokeObjectURL方法。我们用FileReader对象来处理
      var reader = new FileReader();
      reader.readAsDataURL(files[0]);
      reader.onload = function(e){
        alert(files[0].name + "。" +"添加成功！");
        img.src = this.result;
        img.width = 300;
        fileList.appendChild(img);
      }
    }else{
      //ie
      obj.select();
      obj.blur();
      var nfile = document.selection.createRange().text;
      document.selection.empty();
      img.src = nfile;
      img.width = 300;
      img.onload=function(){
          alert(nfile+"。"+"添加成功！");
        }
      fileList.appendChild(img);
      //fileList.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='image',src='"+nfile+"')";
    }
  }
</script>
  <!--=====================================================================================-->
  

  <input type="hidden" name="sn" value="<?php echo $row['sn'] ?>">
</form>
  </div>
    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>js/bootstrap.min.js"></script> 

</body>
</html>