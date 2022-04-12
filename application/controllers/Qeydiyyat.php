<?php 
/**
 * 
 */
class Qeydiyyat extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('vb');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('qeydiyyat');
	}
	public function qeydol(){
		$this->form_validation->set_rules('fname','Ad','required|max_length[12]');
		$this->form_validation->set_rules('lname','Soyad','required|max_length[12]');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Şifrə','required|matches[password2]');
		$this->form_validation->set_rules('password2','Şifrə2','required|matches[password]');
		$this->form_validation->set_message('required','%s inputunu doldurun..!!');
		$this->form_validation->set_message('max_length','%s inputu max 12 simvol olmalidir..!!');
		$this->form_validation->set_message('valid_email','Duzgun email daxil edin..!!');
		$this->form_validation->set_message('matches','Daxil etdiyiniz sifreler eynilik teski etmir..!!');
		if ($this->form_validation->run()) {
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$data=array(
			'fname'=>$fname,
			'lname'=>$lname,
			'email'=>$email,
			'password'=>md5($password)
		);
		$this->vb->register($data);
		$this->session->sess_destroy();
		$this->load->view('girish');

		}else{
			$this->index();
		}
	}
}
 ?>