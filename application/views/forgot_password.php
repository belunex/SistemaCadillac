
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Forgot Password</title>
		<meta name="description" content="Login page example" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="canonical" href="https://keenthemes.com/metronic" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="<?php echo base_url();?>/gentelella/assets/css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="<?php echo base_url();?>/gentelella/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>/gentelella/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url();?>/gentelella/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		
		<link rel="shortcut icon" href="<?php echo base_url();?>/gentelella/production/images/iconCad.png" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled sidebar-enabled page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
				<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat" style="background-image: url('<?php echo base_url();?>/gentelella/assets/media/bg/bg-3.jpg');">
					<div class="login-form text-center p-7 position-relative overflow-hidden">
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="<?php echo base_url();?>/gentelella/production/images/iconCad.png" class="max-h-75px" alt="" />
							</a>
						</div>
                        <div class="login-forgot">
							<div class="mb-20">
								<h3>Olvidaste tu contraseña ? Te ayudamos a restaurarla</h3>
								<div class="text-muted font-weight-bold">Ingresa tu email para reestablecer tu contraseña!!</div>
							</div>
							<?php
								echo form_open_multipart('usuario/validarIngresoUsuarios', array('id' => 'form1','class' => 'needs-validation', 'method' => 'post'));
							?>	
								<div class="form-group mb-10">
									<input class="form-control form-control-solid h-auto py-4 px-8" type="email" placeholder="Ingrese su correo electronico valido" name="correoElectronico" autocomplete="off" required=""/>
								</div>
								<div class="form-group d-flex flex-wrap flex-center mt-10">
									<button type="submit" id="kt_login_forgot_submit" style="border-color: #FF7B00; background-color: #FF7B00" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Enviar</button>
									<button type="button" id="kt_login_forgot_cancel" style="border-color: #7AB700; background-color: #7AB700" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2"><a href="<?php echo base_url();?>index.php/usuario/index">Cancelar</a></button>
								</div>
							<?php
								echo form_close();
							?>	
						</div>
					</div>
				</div>
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#663259", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#F4E1F0", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?php echo base_url();?>/gentelella/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo base_url();?>/gentelella/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?php echo base_url();?>/gentelella/assets/js/scripts.bundle.js"></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?php echo base_url();?>/gentelella/assets/js/pages/custom/login/login-general.js"></script>
		<!--end::Page Scripts-->
	</body>
	<!--end::Body-->
</html> 