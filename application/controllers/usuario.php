<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Usuario extends CI_Controller {
    public function index()
	{
		$data['msg'] = $this->uri->segment(3);	

		if($this->session->userdata('login'))
		{
			redirect('usuario/panel','refresh');
		}
		else
		{
			$data['msg'] = $this->uri->segment(3);
			$this->load->view('login',$data);
		}
	}

	public function validarUsuario()
	{
		$login = $_POST['login'];
		$password = md5($_POST['password']);

		$consulta=$this->usuarios_model->validar($login, $password);

		if($consulta->num_rows()>0)
		{
			foreach ($consulta->result() as $row) {

				$this->session->set_userdata('idUsuario',$row->id);
				$this->session->set_userdata('login',$row->nombreUsuario);
				$this->session->set_userdata('password',$row->contrasenia);
				$this->session->set_userdata('tipo',$row->rolUsuario);
				$this->session->set_userdata('nameUser',$row->nameUser);

				redirect('usuario/panel', 'refresh');
			}
		}
		else
		{
			redirect('usuario/index/1', 'refresh');
		}
	}

	public function panel()
	{
		if ($this->session->userdata('login'))
		{
			$tipo = $this->session->userdata('tipo');
			if ($tipo=='Administrador') 
			{
				redirect('administrador/index', 'refresh');
			}
			else 
			{
				redirect('jefe/clientes', 'refresh');
			}
		} 
		else
		{
			redirect('usuarios/index/2', 'refresh');
		}
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('usuarios/index/3', 'refresh');
    }

    // RESTABLECER LA CONTRASEÑA
    public function recovery()
	{
        $this->load->view('recovery');
	}

	public function forgotPass()
	{
		$this->load->view('forgot_password');
	}
}
?>