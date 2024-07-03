<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
	<title>Welcome To | Perpustakaan Online</title>
	<!-- Favicon-->
	<link rel="icon" href="favicon.ico" type="image/x-icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css" />

	<!-- Bootstrap Core Css -->
	<link href="http://localhost/perpus/assets/plugins_dashboard/bootstrap/css/bootstrap.css" rel="stylesheet" />

	<!-- Waves Effect Css -->
	<link href="http://localhost/perpus/assets/plugins_dashboard/node-waves/waves.css" rel="stylesheet" />

	<!-- Animation Css -->
	<link href="http://localhost/perpus/assets/plugins_dashboard/animate-css/animate.css" rel="stylesheet" />

	<!-- Morris Chart Css-->
	<link href="http://localhost/perpus/assets/plugins_dashboard/morrisjs/morris.css" rel="stylesheet" />

	<!-- Custom Css -->
	<link href="http://localhost/perpus/assets/css_dashboard/style.css" rel="stylesheet" />

	<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
	<link href="http://localhost/perpus/assets/css_dashboard/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
	<!-- Page Loader -->
	<div class="page-loader-wrapper">
		<div class="loader">
			<div class="preloader">
				<div class="spinner-layer pl-red">
					<div class="circle-clipper left">
						<div class="circle"></div>
					</div>
					<div class="circle-clipper right">
						<div class="circle"></div>
					</div>
				</div>
			</div>
			<p>Loading Coyy...</p>
		</div>
	</div>
	<!-- #END# Page Loader -->
	<!-- Overlay For Sidebars -->
	<div class="overlay"></div>
	<!-- #END# Overlay For Sidebars -->

	<!-- Top Bar -->
	<nav class="navbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
				<a href="javascript:void(0);" class="bars"></a>
				<a class="navbar-brand" href="index.html">Perpustakaan Online</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="pull-right">
						<a href="<?= base_url('index.php/login/logout')?>" class="js-right-sidebar"><i class="material-icons">logout</i></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>