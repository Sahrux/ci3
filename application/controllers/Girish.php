<?php 
/**
 * 
 */
class Girish extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('vb');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('index');
		// $this->load->view('admdash');
		// $this->load->view('admin-dash');
	}
	public function login(){
		if (!empty($this->session->fname)) {
		redirect('Admin/');
		}else{
			$this->load->view('girish');
		}
	}
	public function girish(){
		
			if (isset($_POST['login'])) {
			$fname=$this->input->post('fname');
			$password=$this->input->post('password');
			$result=$this->vb->formcontrol($fname,$password);
			if($result==true){
				// $sesdata=array('fname'=>$fname);
				// $this->session->set_userdata($sesdata);
				$this->session->set_userdata('fname',$fname);
				redirect('Admin/');
				}
				else{
				$e['errmsg']='İstifadəçi adı və ya şifrəni düzgün yazdığınızdan əmin olun';
				$this->load->view('girish',$e);

			}
		} else {
			echo "inputlari doldurun";
		}
		
		
		
	}
}
 ?>