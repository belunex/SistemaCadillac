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
	
	public function registroCliente()
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


	/*--------------------------------------CLIENTE---------------------------------------------*/


	public function clientes()
	{
		$listaClientes = $this->cliente_model->listaClientes();
		$data['listaClientes'] = $listaClientes;
		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/cliente/listaClientes',$data);
		$this->load->view('jefeVista/board/pie');
	}

	public function agregarCliente()
	{
		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/cliente/insertarClienteNuevo');
		$this->load->view('jefeVista/board/pie');
	}

	public function agregarClientebd()
	{
		$data['nombres'] = $_POST['nombres'];
		$data['primerApellido'] = $_POST['primerApellido'];
		$data['segundoApellido'] = $_POST['segundoApellido'];
		$data['numeroTelefono'] = $_POST['numeroTelefono'];
		$data['correoElectronico'] = $_POST['correoElectronico'];
		//$data['idUsuario'] = $this->session->userdata('idUsuario');

		$this->cliente_model->agregarCliente($data);

		redirect('jefe/clientes','refresh');
	}

	public function modificarCliente()
	{
		$idCliente=$_POST['idCliente'];
		$data['infoClientes']=$this->cliente_model->recuperarCliente($idCliente);

		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/cliente/modificarClientes',$data);
		$this->load->view('jefeVista/board/pie');
	}

	public function modificarClientebd()
	{
		$idCliente=$_POST['idCliente'];

		$data['nombres']=$_POST['nombres'];
		$data['primerApellido']=$_POST['primerApellido'];
		$data['segundoApellido']=$_POST['segundoApellido'];
		$data['numeroTelefono'] = $_POST['numeroTelefono'];
		$data['correoElectronico'] = $_POST['correoElectronico'];
		$data['fechaActualizacion'] = date('y-m-d H:i:s');
		
		$this->cliente_model->modificarCliente($idCliente,$data);

		redirect('jefe/clientes','refresh');
	}

	public function deshabilitarCliente()
	{
		$idCliente=$_POST['idCliente'];
		$data['estado']='0';

		$this->cliente_model->deshabilitarCliente($idCliente,$data);

		redirect('jefe/clientes','refresh');
	}

	/*--------------------------------------VEHICULO-------------------------------------------*/

	public function vehiculos()
	{
		$listaVehiculos = $this->vehiculo_model->listaVehiculos();
		$data['listaVehiculos'] = $listaVehiculos;

		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/vehiculo/listaVehiculos',$data);
		$this->load->view('jefeVista/board/pie');
	}

	public function agregarVehiculo()
	{
		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/vehiculo/insertarVehiculoNuevo');
		$this->load->view('jefeVista/board/pie');
	}

	public function agregarVehiculobd()
	{
		$data['marca'] = $_POST['marca'];
		$data['modelo'] = $_POST['modelo'];
		$data['anioFabricacion'] = $_POST['anioFabricacion'];
		$data['matricula'] = $_POST['matricula'];
		$data['color'] = $_POST['color'];
		$data['kilometraje'] = $_POST['kilometraje'];
		//$data['idUsuario'] = $this->session->userdata('idUsuario');

		$this->vehiculo_model->agregarVehiculo($data);

		redirect('jefe/vehiculos','refresh');
	}

	public function modificarVehiculo()
	{
		$idVehiculo=$_POST['idVehiculo'];
		$data['infoVehiculo']=$this->vehiculo_model->recuperarVehiculo($idVehiculo);

		$this->load->view('jefeVista/board/cabecera');
		$this->load->view('jefeVista/board/menuSuperior');
		$this->load->view('jefeVista/board/menuLateral');
		$this->load->view('jefeVista/vehiculo/modificarVehiculos',$data);
		$this->load->view('jefeVista/board/pie');
	}

	public function modificarVehiculobd()
	{
		$idVehiculo=$_POST['idVehiculo'];

		$data['marca'] = $_POST['marca'];
		$data['modelo'] = $_POST['modelo'];
		$data['anioFabricacion'] = $_POST['anioFabricacion'];
		$data['matricula'] = $_POST['matricula'];
		$data['color'] = $_POST['color'];
		$data['kilometraje'] = $_POST['kilometraje'];
		
		$this->vehiculo_model->modificarVehiculo($idVehiculo,$data);

		redirect('jefe/vehiculos','refresh');
	}

	public function deshabilitarVehiculo()
	{
		$idVehiculo=$_POST['idVehiculo'];
		$data['estado']='0';

		$this->vehiculo_model->deshabilitarVehiculo($idVehiculo,$data);

		redirect('jefe/vehiculos','refresh');
	}

}
?>