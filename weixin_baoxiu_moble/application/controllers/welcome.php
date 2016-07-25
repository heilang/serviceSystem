<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
		if(!isset($_SESSION['username'])){
			$this->load->view('user/login');
		}else{
			$id = $_SESSION['id'];
			//加载模型并改名
			$this->load->model('user_model', 'user');
			//获取用户的个人信息
			$row = $this->user->getUserAllMessage($id)->result_array();

			$this->load->view('user/selectType', array('row' => $row['0']));
		}
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */