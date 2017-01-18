<!DOCTYPE html>
<html>

<head>
	<title>M2L<?php if ($title) {echo " - ".$title;};?></title>
	<meta charset="utf-8">
  	<meta content="IE=edge" http-equiv="X-UA-Compatible">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><!-- Bootstrap 3.3.6 -->
	<link href=<?php ROOTDIR ?>"bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"><!-- Ionicons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet"><!-- Theme style -->
	<link href=<?php ROOTDIR ?>"dist/css/AdminLTE.css" rel="stylesheet">
	<link href=<?php ROOTDIR ?>"dist/css/skins/skin-blue.min.css" rel="stylesheet">
	<link href=<?php ROOTDIR ?>"Web/css/style.css" rel="stylesheet">
	<link href=<?php ROOTDIR ?>"plugins/bootstrap-slider/slider.css" rel="stylesheet">
</head>

<body <?= $classBody;?> >

	<div class="wrapper">

		<!-- Main Header -->
		<header class="main-header">
			<!-- Logo -->
			<a class="logo" href=<?php ROOTDIR ?>"index.php?controller=home&action=home"><!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>M2l</b></span> <!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>M2l</b></span></a> <!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a class="sidebar-toggle" data-toggle="offcanvas" href="#" role="button"><span class="sr-only">Toggle navigation</span></a> <!-- Navbar Right Menu -->
				<div id="disconnect">
					<a href=<?php ROOTDIR ?>"index.php?controller=security&action=logout"><i class="fa fa-fw fa-sign-out"></i>Déconnexion</a>
				</div>
			</nav>
		</header><!-- Left side column. contains the logo and sidebar -->

		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image"><img alt="User Image" class="img-circle" src=<?= $this->employee->getImage(); ?>></div>
					<div class="pull-left info">
						<p> <?= $this->employee->getUsername(); ?></p><!-- Status -->
						<p><span class="badge bg-maroon"><?= $this->employee->getCreditsLeft(); ?> CF</span> <span class="badge bg-purple"><?= $this->employee->getDaysLeft(); ?> jours</span></p>

					</div>
				</div><!-- search form (Optional) -->
				<!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header"></li><!-- Optionally, you can add icons to the links -->
					<li>
						<a href=<?php ROOTDIR ?>"index.php?controller=home&action=home"><i class="fa fa-home"></i> <span>Page d'accueil</span></a>
					</li>

					<li class="treeview">
			          <a href="#">
			            <i class="fa fa-mortar-board"></i>
			            <span>Formations</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=index"><i class="fa fa-circle-o"></i> Formations disponibles</a></li>
			            <li><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=index#__askFormations"><i class="fa fa-circle-o"></i> Formations demandées</a></li>
			            <li><a href=<?php ROOTDIR ?>"index.php?controller=formation&action=search"><i class="fa fa-circle-o"></i> Rechercher une formation</a></li>
			          </ul>
			        </li>

					<?php if($this->employee->isManager()) { ?>
						<li>
							<a href=<?php ROOTDIR ?>"index.php?controller=team&action=index"><i class="fa fa-users"></i> <span>Gestion d'équipe</span></a>
						</li>
					<?php } ?>
				</ul><!-- /.sidebar-menu -->
			</section><!-- /.sidebar -->
		</aside>

	    <?= $content ?>

        <script src=<?php ROOTDIR ?>"plugins/jQuery/jquery-2.2.3.min.js"></script> <!-- Bootstrap 3.3.6 -->
		<script src=<?php ROOTDIR ?>"plugins/jQuery/jquery-2.2.3.min.js"></script> <!-- Bootstrap 3.3.6 -->
		<script src=<?php ROOTDIR ?>"bootstrap/js/bootstrap.min.js"></script> <!-- AdminLTE App -->
		<script src=<?php ROOTDIR ?>"dist/js/app.min.js"></script>
		<script src=<?php ROOTDIR ?>"plugins/ionslider/ion.rangeSlider.min.js"></script>
		<script src=<?php ROOTDIR ?>"plugins/bootstrap-slider/bootstrap-slider.js"></script>
		<script src=<?php ROOTDIR ?>"Web/script/app.js"></script>
        <script src=<?php ROOTDIR ?>"Web/script/<?php if ($script) {echo $script;};?>"></script>
		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				<a href="#">Mentions légales</a>
			</div><!-- Default to the left -->
			<strong>Copyright &copy; 2016 <a href="#">M2L</a>.</strong> Tous droits réservés.
		</footer>

	</div><!-- ./wrapper -->
</body>

</html>