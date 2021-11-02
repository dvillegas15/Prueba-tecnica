<!DOCTYPE html>
	<html lang="en">
		<head>
    		<title>Sistema de Votación</title>
				<!-- Meta -->
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta name="description" content="" />
				<meta name="keywords" content="">
				<meta name="author" content="Phoenixcoded" />

				<!-- datatable css -->
				<link rel="stylesheet" href="<?php echo base_url('assets/css/plugins/dataTables.bootstrap4.min.css'); ?>">

				<!-- vendor css -->
				<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
		</head>
	<body>
	<!-- [ navigation menu ] inicio -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?php echo base_url('assets/images/user/user.jpg'); ?>" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details">User</div>
						</div>
					</div>	
				</div>
					<ul class="nav pcoded-inner-navbar m-t-10">
                   		<li class="nav-item pcoded-menu-caption">
							<label>Menú</label>
						</li>
						<li class="nav-item pcoded-hasmenu">
							<a href="#!" class="nav-link ">
                           		<span class="pcoded-micon"><i class="fas fa-book"></i></span>
                            	<span class="pcoded-mtext">Gestión</span>
                       		</a>
							<ul class="pcoded-submenu">
						   		 <li><a href='registrar'>Registrar</a></li>
                           		 <li><a href='general'>Listar</a></li>
								 <li><a href='votacion'>Votar</a></li>
							</ul>
						</li>
					</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] fin -->
	<!-- [ Header ] inicio -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
				<a href="#!" class="b-brand">
					<img src="<?php echo base_url('assets/images/logo-icon.png'); ?>" alt="" class="logo-thumb">
				</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
	</header>
	<!-- [ Header ] fin -->

 