<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Administrador extends CI_Controller {
    public function index()
	{	
		//if($this->session->userdata('login'))
		//{
			$this->load->view('administradorViews/board/cabecera');
			$this->load->view('administradorViews/board/menuSuperior');
			$this->load->view('administradorViews/board/menuLateral');
			$this->load->view('administradorViews/usuarios/insertarUsuarioNuevo');
			$this->load->view('administradorViews/board/pie');
	//	}
	//	else
	//	{
			//redirect('usuario/index','refresh');
	//	}
	}	

	public function crearUser()
	{	
        $this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/crearUsuario');
        $this->load->view('administradorViews/board/pie');
	}

	/*---------------------------------------USUARIOS---------------------------------------*/

	public function usuarios()
	{
		$listaServicios = $this->servicio_model->listaServicios();
		$data['listaServicios'] = $listaServicios;

		$this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/servicios/listaServicios',$data);
        $this->load->view('administradorViews/board/pie');
	}

	public function agregarUsuario()
	{
		$this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/servicios/insertarNuevoServicio');
        $this->load->view('administradorViews/board/pie');
	}

	public function agregarUsuariobd()
	{
			$data['nombres'] = $_POST['nombres'];
			$data['primerApellido'] = $_POST['primerApellido'];
			$data['segundoApellido'] = $_POST['segundoApellido'];
			$data['ci'] = $_POST['ci'];
			$data['fechaContratacion'] = $_POST['fechaContratacion'];
			$data['numeroTelefono'] = $_POST['numeroTelefono'];
			$data['direccion'] = $_POST['direccion'];
			$data['correoElectronico'] = $_POST['correoElectronico'];			
			$data['rol'] = $_POST['rol'];
			//$data['idUsuario'] = $this->session->userdata('idUsuario');


			$nombres = $_POST['nombres'];
			$primerApellido = $_POST['primerApellido'];
			$segundoApellido = $_POST['segundoApellido'];
			$correo = $_POST['correoElectronico'];

			$nameCompleted = $nombres . ' ' . $primerApellido . ' ' . $segundoApellido;

			$username = $this->generarUsuarioUnico($nombres, $primerApellido, $segundoApellido);

			$data['nombreUsuario'] = $username;

			$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-';
			$passw = substr(str_shuffle($caracteres), 0, 8);

			$data['contrasenia'] = md5($passw);

			$datosRegistro = array('nameUser' => $username, 'contraseniaUser' => $passw);

		$this->servicio_model->agregarUsuario($data);

		redirect('administradorViews/servicios','refresh');
	}

	public function generarUsuarioUnico($nombres, $primerApellido, $segundoApellido)
	{
		// Obtener las iniciales del nombre y apellidos
		$iniciales = $this->obtenerIniciales($nombres, $primerApellido, $segundoApellido);

		// Generar un número aleatorio
		$numeroAleatorio = $this->generarNumeroAleatorio();

		// Combinar las iniciales y el número aleatorio para formar el nombre de usuario
		$nombreUsuario = $iniciales . $numeroAleatorio;

		// Verificar si el nombre de usuario generado ya existe en la base de datos
		$nombreUsuarioExistente = $this->verificarExistenciaNombreUsuario($nombreUsuario);

		// Si el nombre de usuario generado ya existe, generar uno nuevo hasta obtener uno único
		while ($nombreUsuarioExistente) {
			// Generar otro número aleatorio
			$numeroAleatorio = $this->generarNumeroAleatorio();

			// Combinar las iniciales y el nuevo número aleatorio
			$nombreUsuario = $iniciales . $numeroAleatorio;

			$nombreUsuarioExistente = $this->verificarExistenciaNombreUsuario($nombreUsuario);
		}

		return $nombreUsuario;
	}

	private function obtenerIniciales($nombres, $primerApellido, $segundoApellido)
	{
		// Obtener las iniciales del nombre y apellidos
		$iniciales = '';

		if (!empty($nombres))
			$iniciales .= $nombres[0];

		if (!empty($primerApellido))
			$iniciales .= $primerApellido[0];

		if (!empty($segundoApellido))
			$iniciales .= $segundoApellido[0];

		return strtoupper($iniciales);
	}

	private function generarNumeroAleatorio()
	{
		// Generar un número aleatorio entre 1000 y 9999
		return mt_rand(1000, 9999);
	}

	private function verificarExistenciaNombreUsuario($nombreUsuario)
	{
		$usuarioExiste = false;
		$consulta = $this->usuario_model->verificarNameUser($nombreUsuario);

		if ($consulta->num_rows() > 0) {
			$usuarioExiste = true;
		}

		return $usuarioExiste;
	}

	public function generarContraseniaInicial()
	{
		// Generar una contraseña inicial aleatoria
		$caracteresPermitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
		$contrasenia = '';
		$longitud = 8;

		for ($i = 0; $i < $longitud; $i++) {
			$indice = mt_rand(0, strlen($caracteresPermitidos) - 1);
			$contrasenia .= $caracteresPermitidos[$indice];
		}

		return $contrasenia;
	}


	public function modificarUsuario()
	{
		$idServicio=$_POST['idServicio'];
		$data['infoVehiculo']=$this->servicio_model->recuperarUsuario($idServicio);

		$this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/servicios/modificarServicios',$data);
        $this->load->view('administradorViews/board/pie');
	}

	public function modificarUsuariobd()
	{
		$idServicio=$_POST['idServicio'];

		$data['tipoServicio'] = $_POST['tipoServicio'];
		$data['descripcion'] = $_POST['descripcion'];
		$data['precioBase'] = $_POST['precioBase'];
		
		$this->servicio_model->modificarServicio($idServicio,$data);

		redirect('administradorViews/servicios','refresh');
	}

	public function deshabilitarUsuario()
	{
		$idServicio=$_POST['idServicio'];
		$data['estado']='0';

		$this->servicio_model->deshabilitarServicio($idServicio,$data);

		redirect('administradorViews/servicios','refresh');
	}

	/*---------------------------------------SERVICIOS---------------------------------------*/

	public function servicios()
	{
		$listaServicios = $this->servicio_model->listaServicios();
		$data['listaServicios'] = $listaServicios;

		$this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/servicios/listaServicios',$data);
        $this->load->view('administradorViews/board/pie');
	}

	public function agregarServicio()
	{
		$this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/servicios/insertarNuevoServicio');
        $this->load->view('administradorViews/board/pie');
	}

	public function agregarServiciobd()
	{
		$data['tipoServicio'] = $_POST['tipoServicio'];
		$data['descripcion'] = $_POST['descripcion'];
		$data['precioBase'] = $_POST['precioBase'];
		//$data['idUsuario'] = $this->session->userdata('idUsuario');

		$this->servicio_model->agregarServicio($data);

		redirect('administradorViews/servicios','refresh');
	}

	public function modificarServicio()
	{
		$idServicio=$_POST['idServicio'];
		$data['infoVehiculo']=$this->servicio_model->recuperarServicio($idServicio);

		$this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/servicios/modificarServicios',$data);
        $this->load->view('administradorViews/board/pie');
	}

	public function modificarServiciobd()
	{
		$idServicio=$_POST['idServicio'];

		$data['tipoServicio'] = $_POST['tipoServicio'];
		$data['descripcion'] = $_POST['descripcion'];
		$data['precioBase'] = $_POST['precioBase'];
		
		$this->servicio_model->modificarServicio($idServicio,$data);

		redirect('administradorViews/servicios','refresh');
	}

	public function deshabilitarServicio()
	{
		$idServicio=$_POST['idServicio'];
		$data['estado']='0';

		$this->servicio_model->deshabilitarServicio($idServicio,$data);

		redirect('administradorViews/servicios','refresh');
	}
}
?>