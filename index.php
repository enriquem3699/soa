//<? php // (poner restriccion a tu login.php para q al poner atras no vuelva al login.phpy se mantenga en el index.php)
//session_start();
//if(isset($_SESSION["usuario"])){
//	header('Location:index.php');
//}else{
//? > 

<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Polleria Paredes</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/imagen_logo.png">
		<meta name="description" content="Se vende toda clase de pollos y parrillas" />
		<meta name="keywords" content="pollo, parrillas, nacional, web pages" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./css/estilologin.css">
		<link rel="stylesheet" href="css/sweetalert.css">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="js/scriptlogin.js" type="text/javascript"></script>   
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
		<script src="js/Vegur_700.font.js" type="text/javascript"></script>
		<script src="js/Vegur_400.font.js" type="text/javascript"></script> 
		<script src="js/FF-cash.js" type="text/javascript"></script> 
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/easyTooltip.js"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="js/hover-image.js" type="text/javascript"></script>
		<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/tms-0.3.js"></script>
		<script type="text/javascript" src="js/tms_presets.js"></script>
		<script src="js/sweetalert.min.js"></script>
		<script type="text/javascript">

			$(window).load(function(){
				$('.slider')._TMS({
					duration:800,
					easing:'easeOutQuad',
					preset:'diagonalFade',
					pagination:false,
					slideshow:6000,
					banners:false,
					waitBannerAnimation:false,
					pauseOnHover:true
				});
				$("a[data-gal^='prettyVideo']").prettyPhoto({animation_speed:'normal',theme:'facebook',slideshow:false, autoplay_slideshow: false});
			}); 
		</script>		
		<!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				</a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
			<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
		<![endif]-->
	</head>
	<body id="page1">
		<div class="extra">
<!--==============================header=================================-->
			<header>
				<div class="main">
						<div class="menu-bg-tail">							
							<div class="bg-1">
								<?php
									if(isset($_SESSION["nombre"])){
								?>
							 			<div width=30% height=100% style="float: left; background: transparent; ">
											<tr><td bgcolor=#000 style='color:#fff'>
											<div class="bienvenida"><h2>Welcome !!! Enjoy this website !!!</h2>
											</div>	
											<div class="center">
												<?php
													include 'conexion.php';
													if(isset($_SESSION["usuario"])){
														$usuario = $_SESSION["usuario"];
														$sql= "SELECT foto FROM usuario WHERE usuario = '$usuario'";
														$res= mysqli_query($con,$sql);
														$rw= mysqli_fetch_array($res);
														echo '<img src="'.$rw["foto"].'" width="60" height="80">';
													}
												?>
											</div>
											<div class="datos">
												<?php

													if(isset($_SESSION["nombre"])){
														echo " <b style = 'text-align: center;'>► ♪♫♪ Welcome: ".$_SESSION["nombre"]." ♪♫♪ ◄ ";
														echo "♦".$_SESSION["nivel"]."♦</b>";
													}else{										
													}
												?>
											</div>
											<tr><td valign=top width=20% bgcolor=white></td></tr>
										</div>
											<?php 
									}else{										
										} 	?>
									<?php 
									if(isset($_SESSION["nombre"])){
									?>
										<h1 style="width: 35% ; padding:28px 0px; float: left; text-align: center; margin-left: 27px;">
											<a href="index.php">Music </a>
										</h1>
										<?php
									}else{
										?>
											<h1>
												<a href="index.php">Music </a>
											</h1>
										<?php
									}
										?>
								
									<?php
										if(isset($_SESSION["nombre"])){
											echo '<div class="cerrar_sesion" style="width: 23%;  float: left; padding: 50px 15px 50px 0px;">';
											echo "<a href='cerrar_sesion.php'>Log out</a></TD></TR>";
											echo '</div>';
										}else{										
										}
									?>
							</div>
						<nav>
							<div class="menu-bg">
								<div class="container_12" style="height:60px;">
									<div class="grid_12">
										<?php
										if(isset($_SESSION["nombre"])){
										?>
											<ul class="menu" style="padding: 7px 0 10px 0;">
											<?php
										}else{
											?>
											<ul class="menu">
										<?php
										}
										?>
											<li class="item"><a class="active" href="index.php">Principal</a></li>
											<li><a href="">Promociones</a></li>
											<li><a href="miaporte/nectaria/index.html">Contactenos</a></li>
											<li><a href="">Carta</a></li>
											<li class="item-1"><a href="">Novedades</a></li>
											<li class="last"><a href=""></a></li>
										</ul>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</nav>
					<div class="slider-wrapper">
						<div class="slider">
							<ul class="items">
								<li><img src="images/slider-parrilla.jpg" alt="" />
								</li>
								<li>
									<img src="images/slider-pollo.jpg" alt="" />
								</li>
								<li>
									<img src="images/slider-delivery.jpg" alt="" />
								</li>
							</ul> 
						</div>
					</div>
				</div>
			</header>
<!--==============================content================================-->
			<section id="content"><div class="ic"></div>
				<div class="main">
					<div class="bg-2" style="height: 370px;">
						<div class="content-padding-1">
							<div class="container_12">
								<div class="wrapper">
									<article class="grid_4">
										<div class="padding-grid-1">
											<h3 class="letter">Ultimas <strong>Novedades</strong></h3>
											<div class="wrapper img-indent-bot1">
												<time class="time time-stule-1" datetime="2011-11-09"> <strong class="text-1"></strong><strong class="text-2"></strong></time>
												<div class="extra-wrap">
													<div class="indent-top">
														<a class="link"></a> 
													</div>
												</div>
											</div>
											<div class="wrapper img-indent-bot1">
												<time class="time time-stule-1" datetime="2011-11-07"> <strong class="text-1"></strong><strong class="text-2"></strong></time>
												<div class="extra-wrap">
													<div class="indent-top">
														<a class="link"></a>  <br>
													</div>
												</div>
											</div>
											<div class="wrapper">
												<time class="time time-stule-1" datetime="2011-11-02"> <strong class="text-1"></strong><strong class="text-2"></strong></time>
												<div class="extra-wrap">
													<div class="indent-top">
														<a class="link"></a> <br> 
													</div>
												</div>
											</div>
										</div>
									</article>
									<article class="grid_4 alpha">
										<div class="padding-grid-1">
											<h3>Fechas <strong>Importantes</strong></h3>
											<div class="wrapper img-indent-bot2">
												<time class="time time-stule-2" datetime="2011-11-09"> <strong class="text-3"></strong><strong class="text-4"></strong></time>
												<div class="extra-wrap">
													<h4 class="indent-top"><a></a></h4>
													
												</div>
											</div>
											<div class="wrapper img-indent-bot2">
												<time class="time time-stule-2" datetime="2011-11-05"> <strong class="text-3"></strong><strong class="text-4"></strong></time>
												<div class="extra-wrap">
													<h4 class="indent-top"><a></a></h4>
													
												</div>
											</div>
											<div class="wrapper">
												<time class="time time-stule-2" datetime="2011-11-01"> <strong class="text-3"></strong><strong class="text-4"></strong></time>
												<div class="extra-wrap">
													<h4 class="indent-top"><a></a></h4>
													
												</div>
											</div>
										</div>
									</article>
									<article class="grid_4 alpha">
										<div class="padding-grid-2">
											<form>
												<h1>Polleria Login</h1>
												<input type="text" name="" value="" id="usuario"  placeholder="Usuario">
												<input type="password"  name="" value="" id="pass" placeholder="Constraseña">
												<div id="respuesta"></div>
												<button type="button" onclick="registrarse()">Registrate</button>
												<button type="button" name="button" onclick="validar()">Inicia Sesion</button>
												<p><a href="cambiar_pass.php">Olvidaste tu contraseña?</a></p>
											</form>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
								<article class="grid_4">
									<div class="padding-grid-1">
										<h3>Proximos <strong>Eventos</strong></h3>
										<div class="wrapper img-indent-bot1">
											<time class="time time-stule-3" datetime="2011-11-09"> <strong class="text-5"></strong><strong class="text-6"></strong></time>
											<div class="extra-wrap">
												<div class="indent-top">
													<a class="link"></a> 
												</div>
											</div>
										</div>
										<div class="wrapper">
											<time class="time time-stule-3" datetime="2011-11-03"> <strong class="text-5"></strong><strong class="text-6"></strong></time>
											<div class="extra-wrap">
												<div class="indent-top">
													<a class="link"> </a>
												</div>
											</div>
										</div>
									</div>
								</article>
								<article class="grid_4 alpha">
									<div class="padding-grid-2">
										<h3 class="letter">Ultimo<strong>Video</strong></h3>
										
										<div class="wrapper">
											<iframe width="275" height="175" src="https://www.youtube.com/embed/Cu1fssCL8H8" frameborder="0" allowfullscreen></iframe>
										</div>
									</div>
								</article>
								<article class="grid_4 alpha">
									<div class="padding-grid-2">
										<h3 class="letter prev-indent-bot1">Breve <strong>Descripcion</strong></h3>
										<h6>Polleria Paredes</h6>
										
									</div>
								</article>
							</div>
						</div>
					</div>
				</div>
				<div class="block"></div>
			</section>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="main">
				<div class="footer-bg">
					<div class="container_12">
						<div class="wrapper">
							<div class="grid_12">
								<div class="footer-padding">
									<div class="wrapper">
										<span class="footer-link"><span>Dale me gusta y Siguenos !!!</span> <a rel="nofollow" target="_blank" class="link"></a> Nuestras Redes Sociales </span>
										<ul class="list-services">
											<li><a class="tooltips n-1" title="Twitter" target="_blank" href="https://twitter.com/"></a></li>
											<li><a class="tooltips n-2" title="Facebook" target="_blank" href="https://www.facebook.com/Pollos-y-Parrillas-Paredes-448287905282876/"></a></li>
											<li class="last"><a class="tooltips n-3" title="Youtube" target="_blank" href="https://www.youtube.com/"></a></li>
										</ul>
									</div>
									<div class="aligncenter">
										<!-- {%FOOTER_LINK} -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript"> Cufon.now(); </script>
	</body>
</html>
//<? php
//}
//? >