<!DOCTYPE HTML>
<html>
<head>
<title>SmartBell::Horarios</title>
<meta charset="utf-8">
<!-- Bootstrap -->
<!--<link href="css/bootstrap.min.css" rel='stylesheet'/>--> 
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Kreon:300,400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--<script type="text/javascript" src="js/comprobar.js"></script>-->
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
<br>
<br>
<h2><center>HORARIOS REGISTRADOS</center></h2>
<h4>Seleccione el horario que desea usar:</h4>
<br>
<div class="table-responsive">
	<form action="" method="get">
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Descripcion</th>
			<th>1a Hora</th>
			<th>2a Hora</th>
			<th>3a Hora</th>
			<th>Descanso</th>
			<th>4a Hora</th>
			<th>5a Hora</th>
			<th>6a Hora</th>
			<th>Hora De Salida</th>
			<th>Seleccionar</th>
		</thead>
		<?php
			require_once "conexion.php";
			$sql = "SELECT * FROM horarios";
			$result = mysqli_query($con,$sql);
			while($mostrar = mysqli_fetch_array($result)){
		?>
		<tbody>
			<tr>
				<td><?php echo $mostrar['id_horario'];?></td>
				<td><?php echo $mostrar['descripcion'];?></td>
				<td><?php echo $mostrar['hora1'];?></td>
				<td><?php echo $mostrar['hora2'];?></td>
				<td><?php echo $mostrar['hora3'];?></td>
				<td><?php echo $mostrar['descanso'];?></td>
				<td><?php echo $mostrar['hora4'];?></td>
				<td><?php echo $mostrar['hora5'];?></td>
				<td><?php echo $mostrar['hora6'];?></td>
				<td><?php echo $mostrar['salida'];?></td>
				<td><input type="checkbox" name = "<?php echo $mostrar['descripcion'];?>" id = "<?php echo $mostrar['descripcion'];?>" value="<?php echo $mostrar['id_horario'];?>" onclick="if(this.checked)localStorage.setItem(this.id,this.value);else localStorage.removeItem(this.id);"></td>
			</tr>
			<?php 
				}
			 ?>
		</tbody>
	</table>
	</form>
	<div id="log"></div> 
	<script type="text/javascript"> 
		document.getElementById('log').innerHTML='Valores checkeados:<br>'; 
		for (var i=0; i<localStorage.length; i++){ 
    		var key = localStorage.key(i); 
    		document.getElementById(key).checked=1; 
    		document.getElementById('log').innerHTML+=localStorage.getItem(key); 
		} 
		if(!i)document.getElementById('log').innerHTML+='ninguno'; 
	</script> 
	<center><input type="submit" value="Aceptar" class="btn btn-warning"></center>
</div>

<br>

<div class="footer_bg" id="nosotros"><!-- start footer -->
<div class="container">
	<div class="col-md-4  contact_right">
		<h1><a href="#"><font color=white>SmartBell</font></a></h1>
			<p>"Tu Nueva Herramienta":</h4>
			<p><span>Acerca de: </span> SmartBell es un proyecto el cual busca facilitar la mecanica del tradicional timbre estudiantil realizado en las escuelas de la ciudad de monteria, ha sido desarrolada por un grupo de estudiantes de Ingenieria De Sistemas, conformado por: Eva Padilla, Saul Machado, Jesus Nieves, José Murillo. Los cuales desidieron icnursionar en este campo y desarrollar este aplicativo para la solucion de algunos  problemas que se venian presentando en las instituciones. </p>
			<ul class="list-unstyled address">
				<li><i class="fa fa-map-marker"></i><span>Universidad de Cordoba - Campus Monteria</span></li>
				<!--<li><i class="fa fa-phone"></i><span>(00) 222 666 444</span></li>
				<li><i class="fa fa-envelope"></i><a href="mailto:info@mycompany.com">info(at)mycompany.com</a></li>-->
			</ul>
		</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
				<p class="link"><span>&#169; Todos los derechos reservados | Template by&nbsp;<a href="http://w3layouts.com/"> Unicordoba</a></span></p>
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