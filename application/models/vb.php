<?php 
class Vb extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function register($data=array()){
		$insertion=$this->db->insert('users',$data);
		return $insertion;
	}
	// public function getdata(){
	// 	$datas=$this->db->get('users');
	// 	return $datas;
	// }
	public function formcontrol($fname,$pass){
		$password=md5($pass);
		$query=$this->db->where('fname',$fname)->where('password',$password)->get('users');
		// $this->db->where('password',$password);
		// $query=$this->db->get('users'); 	
		if ($query->num_rows()>0) {
			return true;
		}else{
			return false;
		}
	}
	public function getalldata($per,$segment){
		// $data=$this->db->query('select * from users')->limit($per,$segment)->result();
		$data=$this->db->select("*")->from('users')->limit($per,$segment)->get()->result();
		return $data;
	}
	public function getdataswithoutlimit(){
		$data=$this->db->query('select * from users');
	}
	public function num_rows(){
		$data=$this->db->query('select * from users');
		return $data->num_rows();
	}
	public function getbyid($id){
		$data=$this->db->where('id',$id)->get('users')->result();
		return $data;
	}
	public function deleterow($where){
		$result=$this->db->where('id',$where)->delete('users');
		return $result;

	}
	public function edit($data,$id){
		$update=$this->db->where('id',$id)->update('users',$data);
		return $update;
	}

}


 ?>
