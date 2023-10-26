<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Administrador extends CI_Controller {
    public function index()
	{	
		if($this->session->userdata('login'))
		{
			$listaUsuarios = $this->usuarios_model->listaUsuarios();
			$data['listaUsuarios'] = $listaUsuarios;

			$this->load->view('administradorViews/board/cabecera');
			$this->load->view('administradorViews/board/menuSuperior');
			$this->load->view('administradorViews/board/menuLateral');
			$this->load->view('administradorViews/usuarios/listaUsuarios',$data);
			$this->load->view('administradorViews/board/pie');
		}
		else
		{
			redirect('usuario/index','refresh');
		}
	}	


	/*public function usuarios()
	{
		$listaUsuarios = $this->usuario_model->listaUsuarios();
		$data['listaUsuarios'] = $listaUsuarios;

		$this->load->view('administradorViews/board/cabecera');
        $this->load->view('administradorViews/board/menuSuperior');
        $this->load->view('administradorViews/board/menuLateral');
		$this->load->view('administradorViews/usuarios/listaUsuarios',$data);
        $this->load->view('administradorViews/board/pie');
	}*/

	public function cambioPassword()
	{

	}

	public function verificarDatosPassword()
	{

	}

/*------------------------------------------------USUARIOS-------------------------------------------*/


	public function agregarNuevoUsuario()
	{
		if ($this->session->userdata('login')) 
		{
			$this->load->view('administradorViews/board/cabecera');
			$this->load->view('administradorViews/board/menuSuperior');
			$this->load->view('administradorViews/board/menuLateral');
			$this->load->view('administradorViews/usuarios/insertarUsuarioNuevo');
			$this->load->view('administradorViews/board/pie');
		}
		else
		{
			redirect('usuarios/index','refresh');
		}
		
	}

	public function agregarUsuariobd()
	{
		if ($this->session->userdata('login')) 
		{
			$data['nombres'] = $_POST['nombres'];
			$data['primerApellido'] = $_POST['primerApellido'];
			$data['segundoApellido'] = $_POST['segundoApellido'];
			$data['ci'] = $_POST['ci'];
			$data['fechaContratacion'] = $_POST['fechaContratacion'];
			$data['numeroTelefono'] = $_POST['numeroTelefono'];
			$data['direccion'] = $_POST['direccion'];
			$data['correoElectronico'] = $_POST['correoElectronico'];			
			$data['tipo'] = $_POST['rolUsuario'];
			$data['idUsuario'] = $this->session->userdata('idUsuario');


			$nombre = $_POST['nombres'];
			$primerApellido = $_POST['primerApellido'];
			$segundoApellido = $_POST['segundoApellido'];
			$correo = $_POST['correoElectronico'];

			$nombreCompletoReceptor = $nombre . ' ' . $primerApellido . ' ' . $segundoApellido;

			$username = $this->generarNombreUsuarioUnico($nombre, $primerApellido, $segundoApellido);

			$data['nombreUsuario'] = $username;

			$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-';
			$password = substr(str_shuffle($characters), 0, 8);

			$data['contrasenia'] = md5($password);

			$datos_registro = array('nameUser' => $username, 'contraseniaUser' => $password);

			$this->session->set_userdata('datos_registro', $datos_registro);

			    
			$this->session->set_userdata('NombreReceptor', $nombreCompletoReceptor);
			$this->session->set_userdata('nombreUsuarioReceptor', $username);
			$this->session->set_userdata('contraseniaReceptor', $password);
			$this->session->set_userdata('correoReceptor', $correo);

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$this->usuarios_model->insertarUsuario($data); //trataba con base de datos
				
			}

			redirect('administrador/index','refresh');
		}
		else
		{
			redirect('usuario/index','refresh');
		}
	}

	public function generarNombreUsuarioUnico($nombres, $primerApellido, $segundoApellido)
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
		$consulta = $this->usuarios_model->verificarNameUser($nombreUsuario);

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

	public function validarContraseniaSegura($password)
	{
		$mayuscula = false;
		$minuscula = false;
		$numero = false;
		$careSpecial = false;
		$longitudMinima = 8;

		for ($i = 0; $i < strlen($password); $i++) {
			if (ctype_upper($password[$i])) {
				$mayuscula = true;
			} elseif (ctype_lower($password[$i])) {
				$minuscula = true;
			} elseif (ctype_digit($password[$i])) {
				$numero = true;
			} else {
				$careSpecial = true;
			}
		}

		if ($mayuscula && $minuscula && $numero && $careSpecial && strlen($password) >= $longitudMinima) {
			return true;
		}
		return false;
	}

	public function mostrarDatosRegistro()
	{
		// Load PHPMailer library
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'siscadcadillac@gmail.com';
		$mail->Password = 'endc cyse jiqb mqkj';
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		// DE DONDE SE VA ENVIAR
		$mail->setFrom('siscadcadillac@gmail.com', 'SISCAD ACCESOS PARA EL SISTEMA');
		$mail->addReplyTo('siscadcadillac@gmail.com', 'SISCAD ACCESOS PARA EL SISTEMA');

		// EL QUE RECIBIRA
		$mail->addAddress($this->session->userdata('correoReceptor'));

		//
		$mail->Subject = 'Bienvenido a SISCAD - ACCESOS';

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
		$mailContent = "<h1>ACCESOS SISCAD, por favor cambie la contraseña una vez ingrese al sistema</h1>
            <p>Nombre de Usuario: " . $this->session->userdata('nombreUsuarioReceptor') . " </p></hr>
			<p>Password: " . $this->session->userdata('contraseniaReceptor') . " </p></hr>
			";
		$mail->Body = $mailContent;

		// Send email
		if (!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			$this->load->view('administradorViews/usuarios/view_registro');
		}
		
	}


	public function modificarUsuario()
	{
		if ($this->session->userdata('login')) 
		{
			$idUsuario=$_POST['idUsuario'];
			$data['infoUsuario']=$this->usuarios_model->recuperarUsuario($idUsuario);

			$this->load->view('administradorViews/board/cabecera');
			$this->load->view('administradorViews/board/menuSuperior');
			$this->load->view('administradorViews/board/menuLateral');
			$this->load->view('administradorViews/servicios/modificarServicios',$data);
			$this->load->view('administradorViews/board/pie');

		}
		else
		{
			redirect('usuario/index', 'refresh');
		}		
	}

	public function modificarUsuariobd()
	{
		if ($this->session->userdata('login')) 
		{
			$idUsuario=$_POST['idUsuario'];

			$data['nombres'] = $_POST['nombres'];
			$data['primerApellido'] = $_POST['primerApellido'];
			$data['segundoApellido'] = $_POST['segundoApellido'];
			$data['ci'] = $_POST['ci'];
			$data['fechaContratacion'] = $_POST['fechaContratacion'];
			$data['numeroTelefono'] = $_POST['numeroTelefono'];
			$data['direccion'] = $_POST['direccion'];
			$data['correoElectronico'] = $_POST['correoElectronico'];
			$data['nombreUsuario'] = $_POST['nombreUsuario'];			
			$data['contrasenia'] = $_POST['contrasenia'];
			$data['rol'] = $_POST['rol'];
			
			$data['fechaActualizacion'] = date('y-m-d H:i:s');
			$data['idUsuario'] = $this->session->userdata('idUsuario');

			$config['allowed_types'] = 'jpg|png';
			// cargamos la libreria con todos los parametros de configuracion
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload()) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$this->usuarios_model->modificarUsuario($idUsuario, $data); //trataba con base de datos
				$this->upload->data(); //copia el archivo en carpeta
			}

			redirect('administrador/index','refresh');
		}
		else
		{
			redirect('usuario/index', 'refresh');
		}
	}

	public function deshabilitarUsuario()
	{
		if ($this->session->userdata('login')) 
		{
			$data['fechaActualizacion'] = date('y-m-d H:i:s');
			$datat['idUsuario'] = $this->session->userdata('idUsuario');
			$idUsuario = $_POST['idUsuario'];
			$data['estado'] = '0';
			
			$this->usuarios_model->deshabilitarUsuario($idUsuario,$data);
		
			redirect('administrador/index', 'refresh');
		}	
		else
		{
			redirect('usuario/index', 'refresh');
		}
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