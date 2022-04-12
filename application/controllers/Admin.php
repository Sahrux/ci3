<?php
class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('vb');
		$this->load->library('form_validation');
		$this->load->library('pagination');
	}

	public function index()
	{
		$sesdata=$this->session->fname;
		if(!empty($sesdata)){
			$data['sesdata']=$sesdata;

			$config['base_url'] = base_url().'/Admin/';
			$config['total_rows'] = $this->vb->num_rows();
			$config['per_page'] = 3;
			$config['num_links'] = 3;
			$config['use_page_numbers'] = TRUE;
			$config['full_tag_open'] = '<div><ul class="pagination">';
			$config['full_tag_close'] = '</ul></div><!--pagination-->';
			$config['first_link'] = '&laquo; First';
			$config['first_tag_open'] = '<li class="prev page">';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Öncəki &raquo;';
			$config['last_tag_open'] = '<li class="next page">';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = 'Sonrakı &rarr;';
			$config['next_tag_open'] = '<li class="next page">';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&larr; Öncəki';
			$config['prev_tag_open'] = '<li class="prev page">';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active" ><a style="color:white;" href="">';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li class="page">';
			$config['num_tag_close'] = '</li>';
			$data['vbdata']=$this->vb->getalldata($config['per_page'],$this->uri->segment(2));
			$data['count']=$this->vb->num_rows();
			$data['per_page']=$config['per_page'];
			$this->pagination->initialize($config);
			$data['links']=$this->pagination->create_links();
			$this->load->view('admdash',$data);

		}else{
			redirect('Girish/');

		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('Girish/','refresh');
		

	}
	public function addnewuser(){
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
		redirect('Admin');		
	}else{
		echo "Inputlari duzgun doldurun";
	}
}

	/*public function gotoedit($id){
		$info= $this->vb->getbyid($id)[0];
		$fname= $info->fname;
		$lname= $info->lname;
		$data=['id'=>$id,'fname'=>$fname,'lname'=>$lname];
		$this->load->view('tableupdate',$data);

	}*/
	public function update(){
		if ($_POST['modfname']) {
		$this->form_validation->set_rules('modfname','Ad','required|max_length[12]');
		$this->form_validation->set_rules('modlname','Soyad','required|max_length[12]');
		$this->form_validation->set_rules('password','Şifrə','required|matches[password2]');
		$this->form_validation->set_rules('password2','Şifrə2','required|matches[password]');
		$this->form_validation->set_message('required','%s inputunu doldurun..!!');
		$this->form_validation->set_message('max_length','%s inputu max 12 simvol olmalidir..!!');
		$this->form_validation->set_message('matches','Daxil etdiyiniz sifreler eynilik teski etmir..!!');
		if($this->form_validation->run()){
			$id=$this->input->post('editedid');
			$fname=$this->input->post('modfname');
			$lname=$this->input->post('modlname');
			$password=$this->input->post('password');
			$data=array(
			'fname'=>$fname,
			'lname'=>$lname,
			'password'=>md5($password)
		);
			$update=$this->vb->edit($data,$id);
			if ($update) {
				redirect('Admin');
			}else{
				echo "Yenilənmədi";
			}
		}else{
			echo 'Vətəndaş inputları düzgün doldur!!!';
		}
		}else{
			echo "Post gəlmir";
		}


	}
	public function delete(){
		$id=$this->input->post('deletedid');
		$result=$this->vb->deleterow($id);
		if ($result) {
			if(!empty($this->vb->getdataswithoutlimit()[0]->id)){
		redirect('Admin/');

	}else{
		redirect('Girish/');
	}
		}else{
			echo "Problem yarandi";
		}
	}
}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */