<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginalumni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'Menu');
	}

	public function sendlogin()
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
			$_SESSION['s_title'] = $user->s_title;
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

	// public function showAll()
	// {

	// }
}
