<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中山大学南方学院报修系统</title>
	    <meta name="description" content="微信报修平台">
    <meta name="author" content="heaven">
    <link rel="shortcut icon" href="<?php echo base_url() ?>/images/favicon.png">
</head>
<body>

	<!--
		栏目导航menu.php
	-->
	
	<?php 
		include './application/views/admin/menu.php';
	 ?>
	<table border="1px">
		<th>维修信息详细表(未处理)</th>
		<?php
			
			foreach ($list->result() as $row){
				print_r($list);
			echo '<tr>';
			echo '<td>短号</td>';
			echo '<td>类型</td>';
			echo '<td>标题</td>';
			echo '<td>内容</td>';
			echo '<td>文件名</td>';
			echo '<td>状态</td>';
			echo '<td>时间</td>';
			echo '<td>操作</td>';
			echo '</tr>';
				echo '<tr>';
				echo '<td>'.$row->Snumber.'</td>';
				echo '<td>'.$row->type.'</td>';
				echo '<td>'.$row->title.'</td>';
				echo '<td>'.$row->content.'</td>';
				if($row->filename == ''){
					echo '<td>无文件存在</td>';
				}else{
					echo '<td colspan="4"><a href="'.base_url().'/uploads/'.$row->filename.'" class="thumbnail"><img data-src="holder.js/100%x100%" title="相关图片" style="height: 100%; width: 100%; display: block;" src="'.base_url().'/uploads/'.$row->filename.'"  /></a></td>';
				}

				if($row->status == '-1'){
					echo '<td>未处理</td>';
				}
				if($row->status == '0'){
					echo '<td>锁定</td>';
				}
				if($row->status == '1'){
					echo '<td>已处理</td>';
				}

				echo '<td>'.date('Y-m-d',$row->time).'</td>';

				if($row->status == '-1'){
					echo '<td><a href="'.site_url('admin/lockService').'/'.$row->id.'">锁定</a></td>';
				}
				if($row->status == '0'){
					echo '<td><a href="'.site_url('admin/lockService').'/'.$row->id.'">负责人</a></td>';
				}
				if($row->status == '1'){
					echo '<td><a href="'.site_url('admin/lockService').'/'.$row->id.'">删除信息</a></td>';
				}
				echo '</tr>';
			
			}
		?>
	</table>
</body>
</html>