<!DOCTYPE HTML>
<html>
<head>
<title>SmartBell::Inicio</title>
<meta charset="utf-8">
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();
			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

</head>
<body>
<div class="header_bg" id="home"><!-- start header -->
<div class="container">
	<div class="row header text-center specials">
		<div class="h_logo">
			<a href="index.html"><img src="images/logo.png" alt="" class="responsive"/></a>
		</div>
		<nav class="top-nav">
			<ul class="top-nav nav_list">
				<li class="page-scroll"><a href="inicio.html"><font>INICIO</font></a></li>
				<li class="page-scroll"><a href="pedirhorario.php"><font>CREAR HORARIO</font></a></li>	
				<li class="page-scroll"><a href="mostrarHorario.php"><font>MOSTRAR HORARIOS</font></a></li>
				<li class="page-scroll"><a href="editarHorario.php"><font>EDITAR HORARIOS</font></a></li>
				<li class="page-scroll"><a href="eliminarHorario.php"><font>ELIMINAR HORARIOS</font></a></li>
				<li class="page-scroll"><a href="#nosotros"><font>NOSOTROS</font></a></li>
				<li class="page-scroll"><a href="index.html"><font>Cerrar Sesion</font></a></li>
			</ul>
			<a href="#" id="pull"><img src="images/nav-icon.png" title="menu" /></a>
		</nav>
		<div class="clearfix"></div>
	</div>
</div>
</div>

<div class="main_bg"  id="about"><!-- start about us -->
<div class="container">
	<div class="row about">
		<div class="col-md-3 about_img">
			<img src="images/update.png" alt="" class="responsive"/>
		</div>
		<div class="col-md-9">
			<?php
				include_once "conexion.php";

				$idh = $_POST['select_id'];
				$des = $_POST['descripcion_nueva'];
				$h1 = $_POST['hora1_nueva'];
				$h2 = $_POST['hora2_nueva'];
				$h3 = $_POST['hora3_nueva'];
				$descanso = $_POST['descanso_nueva'];
				$h4 = $_POST['hora4_nueva'];
				$h5 = $_POST['hora5_nueva'];
				$h6 = $_POST['hora6_nueva'];
				$salir = $_POST['salida_nueva'];


				$sql = "UPDATE horarios SET id_horario='$idh', descripcion='$des', hora1='$h1', hora2='$h2', hora3='$h3', descanso='$descanso', hora4='$h4', hora5='$h5', hora6='$h6', salida='$salir' WHERE id_horario = '$idh'";

				$resultado = mysqli_query($con, $sql);

				if(!$resultado){
					echo "<h2><center>ERROR AL ACTUALIZAR HORARIO</center></h2>";
				}
				else{
					echo "<h2><center>ACTUALIZACION EXITOSA</center></h2>";
				}
			?>
		</div>
	</div>
</div>
</div>
<div class="footer_bg" id="contact"><!-- start footer -->
<div class="container">
	<div class="row footer">
		<div class="col-md-8 contact_left">
			<h3>get in touch</h3>
			<p>In order to get in touch use the contact form below:</h4>
			<form method="post" action="contact-post.html">
				<input type="text" value="Name (Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
				<input type="text" value="Email (Required)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				<input type="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
				<textarea onfocus="if(this.value == 'Your Message here....') this.value='';" onblur="if(this.value == '') this.value='Your Message here....;" >Your Message here....</textarea>
				<span class="pull-right"><input type="submit" value="submit us"></span>
			</form>
		</div>
		<div class="col-md-4  contact_right">
			<p><span>Lorem Ipsum is simply dummy text: </span> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
			<ul class="list-unstyled address">
				<li><i class="fa fa-map-marker"></i><span>500 Lorem Ipsum Dolor Sit,</span></li>
				<li><i class="fa fa-phone"></i><span>(00) 222 666 444</span></li>
				<li><i class="fa fa-envelope"></i><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></li>
			</ul>
		</div>		
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
				<a href="#home" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<script type="text/javascript">
				$(function() {
				  $('a[href*=#]:not([href=#])').click(function() {
				    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			
				      var target = $(this.hash);
				      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				      if (target.length) {
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 1000);
				        return false;
				      }
				    }
				  });
				});
		</script>
		<!---- start-smoth-scrolling---->		
	</div>
</div>
</body>
</html>