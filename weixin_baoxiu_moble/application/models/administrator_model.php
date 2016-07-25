<?php

	class Administrator_model extends CI_model{

		public function checkLogin($data){
			//var_dump($data);
			$res = $this->db
						->select('administrator,password')
						->from('administrator')
						->where(array('administrator ='=>$data['administrator'],'password ='=>$data['password']))
						->get();
			return $res;
		}

		public function getService($date, $offset, $page_size){
			$list = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('status ='=>$date['status']))
						 ->order_by("id", "desc")
						 ->limit($page_size, $offset)
						 ->get();
			
			return $list;


		}

		public function getUser($offset,$page_size){
			//$list = $this->db->get('user');
			
			$list = $this->db->get('user', $page_size, $offset);
			return $list;
		}

		public function getUserNumber(){
			//获取资源
			$res = $this->db->get('user');
			//获取用户总数
			$number = $res->num_rows();
			//返回数据
			return $number;

		}

		public function getUntreatedNumber($date){
			//获取资源
			$list = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('status ='=>$date['status']))
						 ->get();
			//获取用户总数
			$number = $list->num_rows();
			//返回数据
			return $number;
		}

		public function getProcessedServiceNumber($date){
			//获取资源
			$list = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('status ='=>$date['status']))
						 ->get();
			//获取用户总数
			$number = $list->num_rows();
			//返回数据
			return $number;
		}

		public function getLockNumber($date){
			//获取资源
			$list = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('status ='=>$date['status']))
						 ->get();
			//获取用户总数
			$number = $list->num_rows();
			//返回数据
			return $number;
		}

		public function getAdmin(){
			$list = $this->db->get('administrator');
			
			return $list;
		}

		public function inserAdmin($data){
			$this->db->insert('administrator', $data); 
		}

		public function uploadService($data){

			$this->db->update('service',$data,'id ='.$data['id']);
		}	

		public function geiServiceMessage($data){
			$res = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('id ='=>$data['id']))
						 ->get();
			
			return $res;
		}	

		public function deleteService($data){
			$this->db->delete('service',$data);
		}

		public function deleteFile($data){
			//根据ID号获取用户名
			$res = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('id ='=>$data['id']))
						 ->get();
			$result = $res->row_array();
			$name = $result['sn'];

			//拼装文件路径
			$path = './file/'.$name.'-'.$data['id'].'.txt';
			//判断文件是否存在
			if(file_exists($path)){
				if(unlink($path)){
					echo '文件已删除';
				}else{
					echo '文件删除失败';
				}
			}else{
				echo '文件不存在';
			}
		}

		public function deleteUpload($data){
			//根据ID号获取用户名
			$res = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('id ='=>$data['id']))
						 ->get();
			$result = $res->row_array();

			$fileName = $result['filename'];
			//拼装文件路径
			$path = './uploads/'.$fileName;
			//判断文件是否存在
			if(file_exists($path)){
				if(unlink($path)){
					echo '文件已删除';
				}else{
					echo '文件删除失败';
				}
			}else{
				echo '文件不存在';
			}


			
		}

		public function getUserMessage($userId){
			$list = $this->db
						 ->select()
						 ->from('user')
						 ->where(array('id =' => $userId))
						 ->get();
			
			return $list;
		}

		public function updateUser($data){
			$this->db->update('user', $data, array('id' => $data['id']));
		}

		public function insertRecycle($data){
			$this->db->insert('recycle', $data[0]);
		}

		public function getUserSerach($data){
			$list = $this->db
						 ->select()
						 ->from('service')
						 ->where(array('sn =' => $data['sn']))
						 ->get();
			
			return $list;
		}

		public function delUser($data){
			$this->db->delete('user', array('id' => $data)); 
		}

		public function inserNote($data) {
			$this->db->update('service', $data, array('id' => $data['id']));
		}		

	}

?>