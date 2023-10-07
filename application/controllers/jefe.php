<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Jefe extends CI_Controller {
    public function index()
	{	
		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/registroCliente');
		$this->load->view('jefeVista/board/pie');
	}
	
	public function registroVehiculo()
	{	
		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/registroVehiculo');
		$this->load->view('jefeVista/board/pie');
	}

	public function cotizacion()
	{	
		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/cotizacion');
		$this->load->view('jefeVista/board/pie');
	}

	public function recepcion()
	{	
		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/recepcion');
		$this->load->view('jefeVista/board/pie');
	}
}
?>