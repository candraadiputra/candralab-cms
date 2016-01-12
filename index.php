<?php /* Candra adi putra <candraadiputra@gmail.com
 * CandraLab Studio (c)(2013)
 * http://www.candra.web.id
 * last edit: 14 okt 2013
 */
session_start();
require_once ('inc/config.php');
require_once ('inc/function.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CandraLab CMS  </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Le styles -->

		<link href='assets/css/biru.min.css' rel='stylesheet'>
		
		<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
		<!--	<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">-->

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="assets/img/abkk.png">
		<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
	body {
		background: url('assets/img/demo.png') repeat;
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
	label.error {

		color: red;
	}
		</style>

		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/jquery.validate.js"></script>
		<script src="assets/js/messages_id.js"></script>
		<script>
			$(document).ready(function() {
				$("#form1").validate();
				$("#form2").validate();
			});
		</script>

	</head>

	<body style="background-color:#fff;">
		<div id='pmb'>
		<div class="navbar navbar-fixed-top navbar-inverse">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>
					<a class="brand" href="http://localhost/smajufri"><img style="margin-right:10px; margin-bottom:-5px; margin-top:-5px;" src="assets/img/abkk.png">CandraLab CMS  </a>
	<div class="nav-collapse">
					
						<ul class="nav pull-right">
							<?php list_halaman(); ?>

</ul>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row-fluid">
<!--header -->
<div id="carouselimg" class="carousel slide span12 bg-white">
<div class="carousel-inner">
<div id="header-background" class="item active">
<!--<div  class="hero-unit pull-left">

</div>-->
<div class='clear_both'></div>
</div>

<div id="header-background_dua" class="item">

<div class='clear_both'></div>
</div>
<div id="header-background_tiga" class="item">

<div class='clear_both'></div>
</div>
</div>
<a class="carousel-control left" href="#carouselimg" data-slide="prev">&lsaquo;</a>
<a class="carousel-control right" href="#carouselimg" data-slide="next">&rsaquo;</a>
</div>
</br>

<!--header end-->

<div class="navbar" style="margin-bottom:0">

<div class="navbar-inner-orange">
<div class="container">
<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a>

<div class="nav-collapse">
<ul class="nav">

<li>
<a href="index.php?mod=berita&pg=berita"><i class="icon-list-alt icon-white"></i>Berita</a>
</li>
<li>
<a href="index.php?mod=galeri&pg=galeri"><i class="icon-list-alt icon-white"></i>Galeri</a>
</li>
<li>
<a href="index.php?mod=bukutamu&pg=bukutamu_uview"><i class="icon-list-alt icon-white"></i>Bukutamu</a>
</li>

</div>
<?php
if(isset($_SESSION['tipe'])){
?>
<ul class="nav pull-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user icon-white"></i><? echo $_SESSION[nama]; ?>
<b class="caret"></b></a>
<ul class="dropdown-menu">
<li>
<a href="index.php?mod=login&pg=cp_form"><i class="icon-lock icon-white"></i>Change Password</a>
</li>
<li class="divider"></li>
<li>
<a href="login/logout.php"><i class="icon-arrow-right icon-white"></i>Logout</a>
</li>
</ul>
</li>
<? } else{ ?>
<ul class="nav pull-right">

<li class="dropdown">
<a class="dropdown-toggle" href="#" data-toggle="dropdown">Login <strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="index.php?mod=login&pg=form_login&t=admin"><i class="icon-user icon-white"></i>Login Admin</a>
</li>


</ul>
</li>

</ul>
<?php }//end of if ?>
</ul>

<ul class="nav pull-right">

</ul>
</div>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span12 well">
<div class="row-fluid">
<div class="span9" style='background: #fff;padding: 20px;'>

<?php $pg = '';
	/*
	 * PHP Code untuk mendapatkan halaman view masing masing tabel
	 */

	//	include ('inc/function.php');
	if (!isset($_GET['pg'])) {
		if (!empty($_SESSION['username'])) {
			include ('login/welcome.php');
		} else {
			include ('berita/berita.php');
		}

	} else {
		$pg = $_GET['pg'];
		$mod = $_GET['mod'];
		include $mod . '/' . $pg . ".php";
	}
?>

<!-- /end dynamic content -->
</div><!--/span-->
<div class="span3">

<div class="widget">
<div class="widget-header">
<i class="icon-info-sign"></i>
<h3>Menu</h3>
</div>
<div class="widget-content">
<div class="  sidebar-nav" >
<ul class="nav nav-tabs nav-stacked ">
<?php
include ('inc/menu.php');

$sessi = $_SESSION['tipe'];
menu($sessi);
?>
</ul>
</div>
</div>
<div class="widget-header">
<i class="icon-info-sign"></i>
<h3>Links</h3>
</div>
<div class="widget-content">
<div class="  sidebar-nav" >
<ul class="nav nav-tabs nav-stacked ">
<?php list_links(); ?>
</div>
</div>
</div>

</div>
<hr>
</div>
<!-- /container -->
</div>

</div>
<div class="footer">
<div class="footer-inner">
<div class="container">
<div class="row">
<div class="span12">
<p style='text-align:center'
>
Copyright &copy; 2013 <a href="index.php?mod=login&pg=form_login&t=admin">Candralab CMS  </a>
</p>
</div>

</div>
<!-- /row -->
</div>
<!-- /container -->
</div>
<!-- /footer-inner -->
</div>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.carousel').carousel();
	}); 
</script>
</div>
</body>
</html>
