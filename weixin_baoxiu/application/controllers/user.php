<?php 
/*
*	这个PHP文件是专为用户设定的控制器
*		login()显示用户登录界面
*		checkLogin()检查用户登录
*		username_check()检查用户注册是否重名
*		show_insert()显示注册页面
*		insert()将用户注册的信息放入数据库
*		sendMessage()上传用户的维修信息
*		sendMessageType()传递报修类型
*		selectService()用户查询维修信息
*		getUserMessage()获取用户个人信息
*		changeUser()用户修改个人信息
*
*
*
*/
session_start();

class user extends MY_Controller {

	public function login(){
		//显示登录界面
		$this->load->view('user/login');
	}

	public function sendMessageType(){

		$type = $this->input->post('type');
		$id = $this->input->post('id');

		//加载模型并改名
		$this->load->model('user_model','user');
		$res = $this->user->getUserAllMessage($id)->result_array();


		$this->load->view('user/index', array('type' => $type, 'row' => $res['0']));
	}

	public function checkLogin(){
			//获取表单数据
			//将表单数据整理成关联数组
			$data = array(
				'sn' => $this->input->post('sn'),
				'password' => $this->input->post('password'),	
			);	

			//加载模型并改名
			$this->load->model('user_model','user');

			//检查用户
			$res = $this->user->checkLogin($data);		

			if($res->num_rows()>0){
				$row = $res->row_array();
				//echo $row['username'].'</br>';
				//echo $row['password'];
				
				$_SESSION['id'] = $row['id'];
				$_SESSION['username'] = $row['name'];

				$this->load->view('user/selectType', array('row' => $row));
			}else{
				
				$this->load->view('user/error');
			}
		
	}

	public function username_check($str){
		//加载模型并改名
			$this->load->model('user_model','user');
			$data = array(
				'username' => $str
			);
			//检查用户
			$res = $this->user->checkSign($data);


			if($res -> nom_rows()>0){
				$this->form_validation->set_message('username_check', '该用户已存在，请重新注册！');
				return false;
			}else{
				return true;
			}
	}


	public function insert(){
		/*
		//验证码信息
		$this->load->helper('captcha');
		//设置验证码配置
		$vals = array(
			'word' => rand(1000,9999),		//自己生成的验证码
			'img_path' => './captcha/',		//验证码图片存放位置
			'img_url' => base_url().'/captcha/',		//验证码图片URL链接
			//'font_path' => './path/to/fonts/texb.ttf',		//字体库文件，可自行添加
			'img_width' => '100',			//验证码图片宽度
			'img_height' => 30,				//验证码图片高度
			'expiration' => 60*10 			//验证码删除时间
		);

		$cap = create_captcha($vals);
*/

		//进行表单验证处理
		$this->load->library('form_validation');
		//设置表单验证规则
				$signConfig = array(
				array(
					'field' => 'sn',
					'label' => '学号',
					'rules' => 'required'
				),
				array(
					'field' => 'password',
					'label' => '密码',
					'rules' => 'required'
				),
				array(
					'field' => 'name',
					'label' => '姓名',
					'rules' => 'required'
				),
				array(
					'field' => 'Snumber',
					'label' => '手机短号',
					'rules' => 'required'
				),
				array(
					'field' => 'hostel',
					'label' => '宿舍地址',
					'rules' => 'required'
				),			
			);
		$this->form_validation->set_rules($signConfig); 
		

		$signBool = $this->form_validation->run();
		if($signBool){

			//获取表单数据
			//将表单数据整理成关联数组
			$data = array(
				'sn' => $this->input->post('sn'),
				'weixinhao' => '',
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password'),
				'Lnumber' => $this->input->post('Lnumber'),	
				'Snumber' => $this->input->post('Snumber'),		
				'hostel' => $this->input->post('hostel')
			);	
			

				//加载模型并改名
				$this->load->model('user_model','user');

				//查找是否存在相同用户
				$res = $this->user->checkSign($data);
				$res = $res->result_array();
				if(count($res) >= 1){
					echo '<script Language="JavaScript">alert("该用户已存在，请重新注册！");</script>';
					$signError = "该用户已存在，请重新注册！";
					$this->load->view('user/sign', array('signError' => $signError));
					
				}else{
					//插入用户数据
					$this->user->inserUser($data);

					//直接跳转登录界面
					echo '<script Language="JavaScript">alert("恭喜你注册成功！");</script>';
					$this->load->view('user/login');
				}
			
		}else{
			//跳转注册页面，并将错误信息发送
			$signError = "";
			$this->load->view('user/sign', array('signError' => $signError));

		}

	}

	public function sendMessage(){
		//判断是否有文件，若有，判断是否符合配置
		
		if(empty($_FILES['userfile']['name'])) {
			$fileName['file_name'] = '';
		}
		else{
		
		if(!$this->upload->do_upload() && $_FILES['userfile']['name'] != ''){
			//获取错误信息
			$uploadError = array('error' => $this->upload->display_errors('<p>','</p>'));
			//将文件名重置
			$fileName['file_name'] = '0';
			//发送到视图
			$this->load->view('user/index', array('type' => $_POST['skill'],'uploadError' => $uploadError));
	   	
		}else{
			$fileName =  $this->upload->data();
			//不管有没有上传图片，该fileName的值都不为
		}
	}
			//获取上传维修信息的学号
			$sn = $this->input->post('sn');

			//加载用户模型并改名
			$this->load->model('user_model','user');

			//获取到用户信息
			$userMessage = $this->user->getUserMessage($sn);
			$userMessage = $userMessage->result_array();


			//收集表单提交的信息
			$data = array(
				'sn' => $this->input->post('sn'),
				'name' => $userMessage[0]['name'],
				'type' => $_POST['skill'],
				'Snumber' => $userMessage[0]['Snumber'],
				'hostel' => $userMessage[0]['hostel'],
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'filename' => $fileName['file_name'],
				'status' => '-1',
				'time' => time()
			);

			//插入用户提交数据
			$this->user->inserMessage($data);

			//返回界面
			$url = site_url();
			echo "<script Language='JavaScript' type='text/JavaScript'>";
			echo "alert('Succeed !');window.location.href='$url'";
			echo "</script>";
			//我将原先的user/index改成了user/selectType，用于报修完以后跳转到选择类型页面
	}

	public function selectService(){
		$sn = $this->uri->segment(3);
		//加载模型并改名
		$this->load->model('user_model', 'user');
		//获取用户的维修信息
		$list = $this->user->getService($sn);
		//返回界面
		$this->load->view('user/getService', array('list' => $list));
	}

	public function getUserMessage(){
		$id = $this->uri->segment(3);
		//加载模型并改名
		$this->load->model('user_model', 'user');
		//获取用户的个人信息
		$list = $this->user->getUserAllMessage($id);
		//返回界面
		$this->load->view('user/changeUser', array('list' => $list));
	}

	public function changeUser(){
		$id = $this->input->post('id');
		$data = array(
				'sn' => $this->input->post('sn'),
				'weixinhao' => $this->input->post('weixinhao'),
				'name' => $this->input->post('name'),
				'password' => $this->input->post('password'),
				'Lnumber' => $this->input->post('Lnumber'),	
				'Snumber' => $this->input->post('Snumber'),		
				'hostel' => $this->input->post('hostel')
			);	
			//加载模型并改名
			$this->load->model('user_model', 'user');
			//修改用户信息
			$this->user->updateUser($data,$id);
			//跳转用户界面
			$url = base_url()."index.php";
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Success !');window.location.href='$url'";
			echo "</script>";
	}

	
}

?>

