<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Usuario extends CI_Controller {
    public function index()
	{
		//$data['msg'] = $this->url->segment(3);	
		//if($this->session->userdata('login'))
		//{
			//redirect('usuario/panel','refresh');
		//}
		//else
		//{
			//$data['msg'] = $this->url->segment(3);
			$this->load->view('login');
		//}
	}

	public function validarIngresoUsuarios()
	{
		$login = $_POST['login'];
		$password = md5($_POST['password']);
	}

	public function forgotPass()
	{
		$this->load->view('forgot_password');
	}
}
?>