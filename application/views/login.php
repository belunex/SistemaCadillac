
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../../">
		<meta charset="utf-8" />
		<title>Login Page Cadillac</title>
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
						<!--begin::Login Header-->
						<div class="d-flex flex-center mb-15">
							<a href="#">
								<img src="<?php echo base_url();?>/gentelella/production/images/iconCad.png" class="max-h-75px" alt="" />
							</a>
						</div>
						<!--end::Login Header-->
						<!--begin::Login Sign in form-->
						<div class="login-signin">
							<div class="mb-20">
								<h3>Inicio de Sesion</h3>

								
							</div>
							
							<?php
    							echo form_open_multipart('usuario/validarUsuario', array('id' => 'from1', 'class' => 'needs-validation', 'method' => 'post'));
							?>
								
                                    <div class="row">
                                        <div class="col-1">
                                            
                                        </div>
                                        <div class="col-10">
                                            <input class="form-control h-auto form-control-solid py-4 px-8" type="text" placeholder="Ingrese su usuario" id="login" name="login" autocomplete="off" required=""/>
                                        </div>
                                        <div class="col-1">
                                            
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-1">
                                            
                                        </div>
                                        <div class="col-10">
                                            <input class="form-control h-auto form-control-solid py-4 px-8" type="password" placeholder="Ingrese su contraseña" id="password" name="password" required=""/>
                                        </div>
                                        <div class="col-1">
                                            
                                        </div>
                                    </div><br>
                                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                                        <a href="<?php echo base_url();?>index.php/usuario/forgotPass" id="kt_login_forgot" class="text-muted text-hover-primary">Olvidaste tu contraseña...?</a>
                                    </div>
								
									<button type="submit" id="kt_login_signin_submit" style="border-color: #FF7B00; background-color: #FF7B00" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Ingresar</button>
									
                                <div class="row">
                                    <div class="col-12">
                                    <?php
                                        switch ($msg) {
                                        case '1':
                                            $mensaje = 'Error de ingreso';
                                            $clase = "alert alert-light alert-danger alert-dismissible";
                                            break;
                                        case '2':
                                            $mensaje = 'Acceso no válido';
                                            $clase = "alert alert-light alert-warning alert-dismissible";
                                            break;
                                        case '3':
                                            $mensaje = 'Gracias por usar el sistema :)';
                                            $clase = "alert alert-light alert-success alert-dismissible";
                                            break;
                                        default:
                                            $mensaje = 'Ingrese su Usuario y Contraseña para iniciar Secion';
                                            $clase = "alert alert-light alert-info alert-dismissible";
                                            break;
                                        }
                                    ?>

                                    <div class="<?php echo $clase ?>" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <strong><?php echo $mensaje ?></strong>
                                    </div>
                                    </div>
                                </div>
							<?php
    							echo form_close();
							?>
							
						</div>
						<!--end::Login forgot password form-->
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