<?php

	class User_model extends CI_model{

		public function getUser(){
			$list = $this->db->get('user');
			
			return $list;
		}
		public function getUserMessage($sn){
			$list = $this->db
						 ->select()
						 ->from('user')
						 ->where(array('sn =' => $sn))
						 ->get();
			
			return $list;

		}

		public function getUserAllMessage($id){
			$list = $this->db->get_where('user', array('id' => $id));
			return $list;
		}

		public function inserUser($data){
			//var_dump($data);
			$this->db->insert('user', $data); 
			//echo $this->db->last_query();
		}

		public function checkLogin($data){
			$res = $this->db->get_where('user', $data);
			return $res;
		}

		public function checkSign($date){
			$res = $this->db
						->select('sn')
						->from('user')
						->where(array('sn ='=>$date['sn']))
						->get();
			return $res;
		}

		public function inserMessage($data){
			//检查获取数据
			//插入信息
			$this->db->insert('service', $data);
		}

		public function getService($sn){
			$res = $this->db
						->select()
						->from('service')
						->where(array('sn =' => $sn))
						->order_by("id", "desc")
						->get();
			return $res;

		}

		public function updateUser($data,$id){
			$this->db->where('id',$id);
			$this->db->update('user', $data);
		}

	}

?>