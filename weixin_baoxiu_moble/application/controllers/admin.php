<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*	这个PHP文件是专为管理系统设定的控制器
*		index()是管理登录控制器
*		checkLogin()是检查登录信息
*		getAllUser()是获取用户信息	
*		getAllService()获取维修信息
*		getAllAdmin()获取所有管理员信息（包括超级管理员）
*		insertAdmin()将普通管理员信息插入数据库
*		signAdmin()注册一个普通管理员账号（只有先登录超级管理员才能进行注册）
*		lockService()将维修信息锁定
*		unlockService()将维修信息解锁
*		ProcessedService()将维修信息状态设成已完成
*		lockServiceMessage()获取锁定的维修信息
*		writeFile()将负责人的信息写入文件
*		deleteService()删除维修信息和相应的文件
*		updateUser()修改用户信息
*		searchService()显示查询用户维修信息的界面
*		searchData()显示查询结果
*		delUser()删除用户
*
*
*
*
*
*
*
*
*
*
*/

session_start();


class Admin extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->view('admin/login');
	}

	public function checkLogin()
	{
		if(!isset($_SESSION['administrator'])){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if($username != ''){

				//获取表单数据，并将数据组合成关联数组
				$data = array(
					'administrator' => $username,
					'password' => $password
				);

				//加载模型并改名
				$this->load->model('administrator_model','administrator');

				//检查管理员
				$res = $this->administrator->checkLogin($data);

				if($res->num_rows()>0){
					//将管理员的信息加载到session
					$_SESSION['administrator'] = $this->input->post('username');

					$row = $res->row_array();

					

					//将所需要的信息全部发送过去
					$this->load->view('admin/index');			
				}else{
					
					$this->load->view('admin/error');
				}

			}else{
				$url = site_url('admin/index');
				echo "<script language='javascript' type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
			}
		}else{
			$this->load->view('admin/index');
		}

	}

	public function getAllUser(){
		if($_SESSION['administrator'] != ''){
		//加载用户模型并改名
			$this->load->model('administrator_model','administrator');

			//获取偏移量
			$offset = intval($this->uri->segment(3));

			//获取用户总数
			$number = $this->administrator->getUserNumber();

			//获取分页信息返回对象
			//加载分页类文件
			$this->load->library('pagination');

			//分页配置信息
			$config['base_url'] = site_url('admin/getAllUser');
			//一共多少条数据
			$config['total_rows'] = $number;
			//每页显示的数量
			
			$this->pagination->initialize($config); 
			//拼装sql语句
			$link = $this->pagination->create_links();



			$list = $this->administrator->getUser($offset,10);
			//将信息发送到视图
			$this->load->view('admin/userMessage', array('list' => $list, 'link' => $link));
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	
	//获取未处理信息
	public function getUntreatedService(){

		if($_SESSION['administrator'] != ''){
		//加载用户模型并改名
			$this->load->model('administrator_model','administrator');
			

			//获取偏移量
			$offset = intval($this->uri->segment(3));

			//获取用户总数
			$number = $this->administrator->getUntreatedNumber(array('status' => '-1'));

			//获取分页信息返回对象
			//加载分页类文件
			$this->load->library('pagination');

			//分页配置信息
			$config['base_url'] = site_url('admin/getUntreatedService');
			//一共多少条数据
			$config['total_rows'] = $number;
			//每页显示的数量
			
			$this->pagination->initialize($config); 
			$link = $this->pagination->create_links();

			$list = $this->administrator->getService(array('status' => '-1'), $offset, 10);

			//var_dump($list);

			//将信息发送到视图
			$this->load->view('admin/untreatedService', array('list' => $list, 'link' => $link));
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	//获取锁定信息
	public function getLockService(){

		if($_SESSION['administrator'] != ''){
			$this->load->helper('file');
		//加载用户模型并改名
			$this->load->model('administrator_model','administrator');
			
			//获取偏移量
			$offset = intval($this->uri->segment(3));

			//获取用户总数
			$number = $this->administrator->getLockNumber(array('status' => '0'));

			//获取分页信息返回对象
			//加载分页类文件
			$this->load->library('pagination');

			//分页配置信息
			$config['base_url'] = site_url('admin/getLockService');
			//一共多少条数据
			$config['total_rows'] = $number;
			//每页显示的数量
			
			$this->pagination->initialize($config); 
			$link = $this->pagination->create_links();

			$list = $this->administrator->getService(array('status' => '0'), $offset, 10);

			//var_dump($list);

			//将信息发送到视图
			$this->load->view('admin/lockService', array('list' => $list, 'link' => $link));
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	//获取已处理信息
	public function getProcessedService(){

		if($_SESSION['administrator'] != ''){
		//加载用户模型并改名
			$this->load->model('administrator_model','administrator');
			

			//获取偏移量
			$offset = intval($this->uri->segment(3));

			//获取用户总数
			$number = $this->administrator->getProcessedServiceNumber(array('status' => '1'));

			//获取分页信息返回对象
			//加载分页类文件
			$this->load->library('pagination');

			//分页配置信息
			$config['base_url'] = site_url('admin/getProcessedService');
			//一共多少条数据
			$config['total_rows'] = $number;
			//每页显示的数量
			
			$this->pagination->initialize($config); 
			$link = $this->pagination->create_links();
			$list = $this->administrator->getService(array('status' => '1'), $offset, 10);


			//var_dump($list);

			//将信息发送到视图
			$this->load->view('admin/treatedService', array('list' => $list, 'link' => $link));
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function getAllAdmin(){
		if($_SESSION['administrator'] != ''){
		//加载用户模型并改名
			$this->load->model('administrator_model','administrator');
			
			$list = $this->administrator->getAdmin();

			//var_dump($list);

			//将信息发送到视图
			$this->load->view('admin/adminMessage', array('list' => $list));
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function insertAdmin(){
		if($_SESSION['administrator'] != ''){
			//获取表单数据
			//将表单数据整理成关联数组
			$data = array(
				'administrator' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'time' => time()
			);	


			//加载模型并改名
			$this->load->model('administrator_model','administrator');

			//插入用户数据
			$this->administrator->inserAdmin($data);

			//跳转管理界面
			echo '<script Language="JavaScript">alert("注册成功！");</script>';
			$this->load->view('admin/index');
		}
		else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function signAdmin(){
		if($_SESSION['administrator'] != ''){
			$this->load->view('admin/otherAdmin');
		}
		else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	


	public function lockService(){
		if($_SESSION['administrator'] != ''){
			//获取维修信息的ID号
			$userId = $this->uri->segment(3);
			//将ID信息变成关联数组
			$data = array(
				'id' => $userId,
				'status' => '0'
			);
			//echo $userId;
			//修改维修信息状态
			//加载模型并改名
			$this->load->model('administrator_model','administrator');
			//修改维修信息状态
			$this->administrator->uploadService($data);
			//跳转到维修信息页面
			$url = site_url('admin/getUntreatedService');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function unlockService(){
		if($_SESSION['administrator'] != ''){
			//获取维修信息的ID号
			$userId = $this->uri->segment(3);
			//将ID信息变成关联数组
			$data = array(
				'id' => $userId,
				'status' => '-1'
			);
			//echo $userId;
			//修改维修信息状态
			//加载模型并改名
			$this->load->model('administrator_model','administrator');
			//修改维修信息状态
			$this->administrator->uploadService($data);
			//跳转到维修信息页面
			$url = site_url('admin/getLockService');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function ProcessedService(){
		if($_SESSION['administrator'] != ''){
			//获取维修信息的ID号
			$userId = $this->uri->segment(3);
			//将ID信息变成关联数组
			$data = array(
				'id' => $userId,
				'status' => '1'
			);
			//echo $userId;
			//修改维修信息状态
			//加载模型并改名
			$this->load->model('administrator_model','administrator');
			//修改维修信息状态
			$this->administrator->uploadService($data);
			
			$url = site_url('admin/getLockService');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	//在未处理页面上点击删除
	public function DelService(){
		if($_SESSION['administrator'] != ''){
			//获取维修信息的ID号
			$userId = $this->uri->segment(3);
			//将ID信息变成关联数组
			$data = array(
				'id' => $userId,
				'status' => '1'
			);
			//echo $userId;
			//修改维修信息状态
			//加载模型并改名
			$this->load->model('administrator_model','administrator');
			//修改维修信息状态
			$this->administrator->uploadService($data);
			
			$url = site_url('admin/getUntreatedService');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function lockServiceMessage(){
		if($_SESSION['administrator'] != ''){
			//获取维修信息的ID号
			$userId = $this->uri->segment(3);
			$data = array(
				'id' => $userId
			);
			//根据ID号获取用户的信息
			//加载模型并修改名字
			$this->load->model('administrator_model','administrator');
			//获取维修信息
			$list = $this->administrator->geiServiceMessage($data);
			//跳转界面


			$this->load->view('admin/sendService',array('list' => $list));
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}

	}

	public function writeFile(){
		if($_SESSION['administrator'] != ''){
			//加载所需要的文件
			$this->load->helper('file');
			//获取表单信息
				$id = $this->input->post('id');
				$sn = $this->input->post('sn');
				$snumber = $this->input->post('snumber');
				$hostel = $this->input->post('hostel');
				$title = $this->input->post('title');
				$person = $this->input->post('person');
			//设定文件路径
			//命名规则：用户名+维修信息id号.txt
			$path = './file/'.$sn."-".$id.'.txt';
			//拼装写入信息，并设定标示符|*|
			$data = read_file($path)."短号：".$snumber."-地址：".$hostel."-标题：".$title."-负责人：".$person."|*|";
			//写入文件
			if(write_file($path,$data)){
				$url = site_url('admin/getLockService');
				echo "<script language='javascript' type='text/javascript'>";
				echo "window.location.href='$url'";
				echo "</script>";
			}else{
				echo "文件写入失败";
			}

		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function deleteService(){
		if($_SESSION['administrator'] != ''){
			//获取要删除的ID号
			$userId = $this->uri->segment(3);
			$data = array(
				'id' => $userId
			);
			//加载模型并修改名字
			$this->load->model('administrator_model','administrator');
			//删除维修信息(文件)
			$this->administrator->deleteFile($data);
			//删除维修信息（图片）
			$this->administrator->deleteUpload($data);
			//获取维修信息(数据库)
			$res = $this->administrator->geiServiceMessage($data);
			$res = $res->result_array();
			//插入数据到回收站中
			$this->administrator->insertRecycle($res);

			//删除原数据库信息
			$this->administrator->deleteService($data);
			//跳转界面
			$url = site_url('admin/getProcessedService');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function selectUser(){
		if($_SESSION['administrator'] != ''){
			$userId = $this->uri->segment(3);
			//加载模型并改名
			$this->load->model('administrator_model', 'administrator');
			//获取用户信息
			$list = $this->administrator->getUserMessage($userId);
			//跳转界面
			$this->load->view('admin/updateUser', array('list' => $list));
		}else{
		$url = site_url('admin/index');
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
		}
	}

	public function delUser(){
		if($_SESSION['administrator'] != ''){
			$userId = $this->uri->segment(3);
			//加载模型并改名
			$this->load->model('administrator_model', 'administrator');
			//获取用户信息
			$this->administrator->delUser($userId);
			//跳转界面
			$url = site_url('admin/getAllUser');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}else{
		$url = site_url('admin/index');
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
		}
	}



	public function updateUser(){
		if($_SESSION['administrator'] != ''){
			$data = array(
				'id' => $this->input->post('userId'),
				'sn' => $this->input->post('sn'),
				'weixinhao' => $this->input->post('weixinhao'),
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password'),	
				'Lnumber' => $this->input->post('Lnumber'),	
				'Snumber' => $this->input->post('Snumber'),		
				'hostel' => $this->input->post('hostel')
			);	
			//加载模型并改名
			$this->load->model('administrator_model', 'administrator');
			//修改用户信息
			$this->administrator->updateUser($data);
			//跳转用户界面
			$url = site_url('admin/getAllUser');
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Success !');window.location.href='$url'";
			echo "</script>";
		}else{
		$url = site_url('admin/index');
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
		}
	}

	public function searchService(){
		if($_SESSION['administrator'] != ''){
			$this->load->view('admin/searchService');
		}else{
		$url = site_url('admin/index');
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
		}
	}

	public function searchData(){
		if($_SESSION['administrator'] != ''){
			$data = array(
				'sn' => $this->input->post('sn'),
			);
			//加载模型并改名
			$this->load->model('administrator_model', 'administrator');
			//获取查询维修信息
			$list = $this->administrator->getUserSerach($data);
			//跳转界面
			$this->load->view('admin/searchData', array('list' => $list));
		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}

	public function inserNote() {
		if($_SESSION['administrator'] != ''){
			$data = array(
				'zhujie' => $this->input->post('content'),
				'id' => $this->input->post('id'),
				'status' => '2',
			);
			//加载模型并改名
			$this->load->model('administrator_model', 'administrator');
			$this->administrator->inserNote($data);
			
			$url = site_url('admin/getUntreatedService');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";

		}else{
			$url = site_url('admin/index');
			echo "<script language='javascript' type='text/javascript'>";
			echo "window.location.href='$url'";
			echo "</script>";
		}
	}



}
