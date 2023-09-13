<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Jefe extends CI_Controller {
    public function indexlte()
	{	
		$this->load->view('administrador/board/cabecera');
		$this->load->view('administrador/board/menuSuperior');
		$this->load->view('administrador/board/menuLateral');
		$this->load->view('administrador/formulario');
		$this->load->view('administrador/board/pie');
	}	
}
?>