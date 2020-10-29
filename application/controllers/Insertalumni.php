<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Insertalumni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function adding1()
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
				's_title' => $this->input->post("s_title"),
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
				echo '<script> alert("สมัครสำเร็จ กรุณาเข้าสู่ระบบ !!") </script>';
				redirect('alumni/login', 'refresh');
				// $this->load->view('login');
			} else {
				echo '<script> alert("เกิดข้อผิดพลาด โปรดลองใหม่อีกครั้ง !!") </script>';
			}
		}
	}

	// public function showAll()
	// {

	// }
}
