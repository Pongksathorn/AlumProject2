<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function index()
	{
		$this->load->view('index');
	}



	public function login()
	{
		$this->load->view('login');
	}

	public function find()
	{
		$result['user'] = $this->Menu->showAlumni();
		$this->load->view('find', $result);
	}

	public function information()
	{
		$result['user'] = $this->Menu->showDataAlumni();
		$this->load->view('information', $result);
	}

	public function profile()
	{
		$result['user'] = $this->Menu->showDataAlumni();
		$this->load->view('profile', $result);
	}

	public function search()
	{
		// $data = $this->input->post();

		// $data = $this->Manu->getSearchUsers($data);

		// echo json_encode($data);

		$data = $this->input->post('searchalumni');
		$result['user'] = $this->Menu->getSearchUsers($data);
		$this->load->view('search', $result);
		// $this->session->set_flashdata('result',$result);
		// redirect('Alumni/alumnisearch', 'refresh');
	}

	public function test()
	{
		// $postData = $this->input->post();

		// $data = $this->Manu->getSearchUsers($postData);

		// echo json_encode($data);
		$this->load->view('test');
	}
	public function reg(){

		$this->load->view('register');
	}
	// public function showAll()
	// {
		public function register(){
			$data = array(
				's_gender' => $this->input->post("s_gender"),
				's_fname' => $this->input->post("s_fname"),
				's_lname'=> $this->input->post("s_lname"),
				's_nickname'=> $this->input->post("s_nickname"),
				's_bday'=> $this->input->post("s_bday"),
				's_facebook'=> $this->input->post("s_facebook"),
				's_email'=> $this->input->post("s_email"),
				's_password'=> $this->input->post("s_password"),
				's_repassword'=> $this->input->post("s_repassword"),
				'address1'=> $this->input->post("address1"),
				'address2'=> $this->input->post("address2"),
				'address3'=> $this->input->post("address3"),
				'address4'=> $this->input->post("address4"),
				'address5'=> $this->input->post("address5"),
				's_generation'=> $this->input->post("s_generation"),
				's_address'=> $this->input->post("s_address"),
				's_position'=> $this->input->post("s_position"),
				's_phone'=> $this->input->post("s_phone"),
		
			);
				// $this->Menu->menu_insert($data);
				$this->Menu->Alumniw($data);
				$this->load->view('register');
				// $this->load->view('view_insert_successwithmenulink');
			  
		
		}
		public function registeruser()
		{
	
			$config['upload_path'] = './public/upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 2000;
			$config['max_width'] = 1500;
			$config['max_height'] = 1500;
	
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('fileupload')) {
				echo 'รูปไม่ถูกต้อง !!';
			} else {
				$data1 = $this->upload->data();
	
				$filename = $data1['file_name'];
				$data1 = array(
					's_fname' => $this->input->post("s_fname"),
					's_lname' => $this->input->post("s_lname"),
					's_gender' => $this->input->post("s_gender"),
					's_phone' => $this->input->post("s_phone"),
					's_nickname' => $this->input->post("s_nickname"),
					's_facebook' => $this->input->post("s_facebook"),
					's_email' => $this->input->post("s_email"),
					's_password' => $this->input->post("s_password"),
					's_repassword' => $this->input->post("s_repassword"),
					's_bday' => $this->input->post("s_bday"),
					'address1' => $this->input->post("address1"),
					'address2' => $this->input->post("address2"),
					'address3' => $this->input->post("address3"),
					'address4' => $this->input->post("address4"),
					'address5' => $this->input->post("address5"),
					's_generation' => $this->input->post("s_generation"),
					's_address' => $this->input->post("s_address"),
					's_position' => $this->input->post("s_position"),
					's_year' => $this->input->post("s_year"),
					's_class' => $this->input->post("s_class"),
					'fileupload' => $filename
				);
	
			
				if ($data1) {
					$this->Menu->insertAlumni($data1);
					redirect('alumni/login', 'refresh');
					// $this->load->view('login');
				} else {
					echo '<script> alert("เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง !!") </script>';
				}
			}
		}
		public function formlogin()
	{
		// $result['user'] = $this->Menu->showLogin();

		// $this->form_validation->set_rules('u_email', 'Email', 'required');
		// $this->form_validation->set_rules('u_pass', 'Password', 'required');

		// if ($this->form_validation->run() == TRUE) {

		$s_email = $this->input->post('s_email');
		$s_password = ($this->input->post('s_password'));

		$this->db->select('*');
		$this->db->from('register');
		$this->db->where(array('s_email' => $s_email, 's_password' => $s_password));
		$query = $this->db->get();

		$user = $query->row();

		if ($user->s_email) {
			$this->session->set_flashdata("success", "เข้าสู่ระบบสำเร็จ");

			$_SESSION['s_id'] = $user->s_id;
			$_SESSION['s_fname'] = $user->s_fname;
			$_SESSION['s_lname'] = $user->s_lname;
			$_SESSION['s_email'] = $user->s_email;
			$_SESSION['s_password'] = $user->s_password;

			redirect("alumni/index", "refresh");
		} else {
			$this->session->set_flashdata("error", "ไม่มีชื่อศิษย์เก่านี้ โปรดลงทะเบียน");
			echo '<script> alert("อีเมลล์หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบอีกครั้ง") </script>';
			redirect("alumni/login", "refresh");
		}
	}

	public function sendlogout()
	{
		$this->session->sess_destroy();
		redirect('alumni/login', 'refresh');
	}
	public function Update()
	{

		$data1 = array(
			's_fname' => $this->input->post("s_fname"),
			's_lname' => $this->input->post("s_lname"),
			's_gender' => $this->input->post("s_gender"),
			's_phone' => $this->input->post("s_phone"),
			's_nickname' => $this->input->post("s_nickname"),
			's_facebook' => $this->input->post("s_facebook"),
			's_bday' => $this->input->post("s_bday"),
			'address1' => $this->input->post("address1"),
			'address2' => $this->input->post("address2"),
			'address3' => $this->input->post("address3"),
			'address4' => $this->input->post("address4"),
			'address5' => $this->input->post("address5"),
			's_generation' => $this->input->post("s_generation"),
			's_address' => $this->input->post("s_address"),
			's_position' => $this->input->post("s_position"),
			's_year' => $this->input->post("s_year"),
			's_class' => $this->input->post("s_class")

		);

		

		$this->Menu->editAlumni($data1);

		if ($_FILES['fileupload']['name'] != "") {
			$config['upload_path'] = './public/upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 2000;
			$config['max_width'] = 1500;
			$config['max_height'] = 1500;

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('fileupload')) {

				$data4 = $this->upload->data();
				$filename = $data4['file_name'];

				$data4 = array(
					'fileupload' => $filename
				);

				$this->Menu->editImgAlumni($data4);

				if ($data4) {
					redirect('alumni/find', 'refresh');
				} else {
					echo '<script> alert("อัพเดตไม่ได้ โปรดลองอีกครั้ง") </script>';
					redirect('alumni/profile', 'refresh');
				}
			}
		} else {
			redirect('alumni/find', 'refresh');
		}


	}
	// }
}
