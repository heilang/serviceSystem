		<div class="container">
			<div class="text-center">
<?php

	$config['per_page'] = 10; 
	$config['first_link'] = '首页';
	$config['last_link'] = '尾页';
	$config['next_link'] = '下一页';
	$config['prev_link'] = '上一页';
	//分页外层包含属性
	$config['full_tag_open'] = '<ul class="pager pagination-lg">';
	$config['full_tag_close'] = '</ul>';
	//上一页外层包含DIV
	$config['prev_tag_open'] = '<li class="text-center">';
	$config['prev_tag_close'] = '</li>';
	//下一页外层包含DIV
	$config['next_tag_open'] = '<li class="text-center">';
	$config['next_tag_close'] = '</li>';
	//当前页信息
	$config['cur_tag_open'] = '<li class="pagination">';
	$config['cur_tag_close'] = '</li>';

?>
</div></div>