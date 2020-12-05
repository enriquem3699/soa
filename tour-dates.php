<?php
session_start();
if(isset($_SESSION["usuario"])){

	if($_SESSION["nivel"] == "Editor" || $_SESSION["nivel"] == "Administrador"){

	}else{
		?>
		<script type="text/javascript">
			location.href="error.php";
		</script>
		<?php
	}

}else{
	?>
	<script type="text/javascript">alert("Por favor Logueate para poder continuar :) Bienvenido a Polleria Paredes");
		location.href="index.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Polleria's Paredes</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/imagen.png">
		<meta name="description" content="Here you can find all the rock music performed by different Polleria's Paredess worldwide" />
		<meta name="keywords" content="music rock, national, international, web pages" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="./css/estilologin.css">
		<link rel="stylesheet" href="css/sweetalert.css">
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
		<script src="js/Vegur_700.font.js" type="text/javascript"></script>
		<script src="js/Vegur_400.font.js" type="text/javascript"></script> 
		<script src="js/FF-cash.js" type="text/javascript"></script> 
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/easyTooltip.js"></script>			
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
	<body id="page5">
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
										<h1 style="width: 35% ; padding:28px 0px; float: left; text-align: center;">
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
											<li><a href="audio.php">Promociones</a></li>
											<li><a href="miaporte/nectaria/index.html">Contactenos</a></li>
											<li><a href="gallery.php">Carta</a></li>
											<li class="item-1"><a href="tour-dates.php"></a></li>
											<!-- <li class="last"><a href="contacts.php">Contacts</a></li> -->
										</ul>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>
<!--==============================content================================-->
			<section id="content"><div class="ic"></div>
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
								<div class="grid_8">
									<div class="padding-grid-1">
										<h3>Tour <strong>Dates</strong></h3>
									</div>	
									<div class="wrapper">
										<article class="grid_4 alpha">
											<div class="padding-grid-1">
												<div class="wrapper img-indent-bot2">
													<time class="time time-stule-2" datetime="2011-11-09"> <strong class="text-3">09</strong><strong class="text-4">nov</strong></time>
													<div class="extra-wrap">
														<h4 class="indent-top"><a href="#">New York</a></h4>
														Lorem ipsum dolor consctetur 
													</div>
												</div>
												<div class="wrapper img-indent-bot2">
													<time class="time time-stule-2" datetime="2011-11-05"> <strong class="text-3">05</strong><strong class="text-4">nov</strong></time>
													<div class="extra-wrap">
														<h4 class="indent-top"><a href="#">Los Angeles</a></h4>
														Adipisicing elitdo esmod tempor
													</div>
												</div>
												<div class="wrapper img-indent-bot2">
													<time class="time time-stule-2" datetime="2011-11-01"> <strong class="text-3">01</strong><strong class="text-4">nov</strong></time>
													<div class="extra-wrap">
														<h4 class="indent-top"><a href="#">San Diego</a></h4>
														Lorem ipsum dolor consctetur 
													</div>
												</div>
												<div class="wrapper img-indent-bot2">
													<time class="time time-stule-2" datetime="2011-10-31"> <strong class="text-3">31</strong><strong class="text-4">oct</strong></time>
													<div class="extra-wrap">
														<h4 class="indent-top"><a href="#">San Francisco</a></h4>
														Lorem ipsum dolor consctetur 
													</div>
												</div>
												<div class="wrapper img-indent-bot2">
													<time class="time time-stule-2" datetime="2011-10-29"> <strong class="text-3">29</strong><strong class="text-4">oct</strong></time>
													<div class="extra-wrap">
														<h4 class="indent-top"><a href="#">Washington</a></h4>
														Adipisicing elitdo esmod tempor 
													</div>
												</div>
												<div class="wrapper">
													<time class="time time-stule-2" datetime="2011-10-24"> <strong class="text-3">24</strong><strong class="text-4">oct</strong></time>
													<div class="extra-wrap">
														<h4 class="indent-top"><a href="#">Las Vegas</a></h4>
														Lorem ipsum dolor consctetur  
													</div>
												</div>
											</div>
										</article>
										<article class="grid_4 omega">
											<div class="padding-grid-4">
												<div class="margin-bot1">
													<span class="text-width">Tickets:</span> <span class="inline"><a class="link" href="#">http://demolink.org/Okedo</a></span>
													<span class="text-width">Telephone:</span>  <span class="color-1 inline">+1 959 603 6035</span>
												</div>
												<div class="margin-bot1">
													<span class="text-width">Tickets:</span> <span class="inline"><a class="link" href="#">http://demolink.org/Okedo</a></span>
													<span class="text-width">Telephone:</span>  <span class="color-1 inline">+1 959 603 6035</span>
												</div>
												<div class="margin-bot1">
													<span class="text-width">Tickets:</span> <span class="inline"><a class="link" href="#">http://demolink.org/Okedo</a></span>
													<span class="text-width">Telephone:</span>  <span class="color-1 inline">+1 959 603 6035</span>
												</div>
												<div class="margin-bot1">
													<span class="text-width">Tickets:</span> <span class="inline"><a class="link" href="#">http://demolink.org/Okedo</a></span>
													<span class="text-width">Telephone:</span>  <span class="color-1 inline">+1 959 603 6035</span>
												</div>
												<div class="margin-bot1">
													<span class="text-width">Tickets:</span> <span class="inline"><a class="link" href="#">http://demolink.org/Okedo</a></span>
													<span class="text-width">Telephone:</span>  <span class="color-1 inline">+1 959 603 6035</span>
												</div>
												<span class="text-width">Tickets:</span> <span class="inline"><a class="link" href="#">http://demolink.org/Okedo</a></span>
												<span class="text-width">Telephone:</span>  <span class="color-1 inline">+1 959 603 6035</span>
											</div>
										</article>
									</div>
								</div>
								<article class="grid_4 alpha">
									<div class="padding-grid-3">
										<h3>Past <strong>Tours</strong></h3>
										<ul class="list-3">
											<li><a href="#">Lorem ipsum dolor consctetur</a></li>
											<li><a href="#">Adipisicing eusmod tempor incididunt</a></li>
											<li><a href="#">Dolore magna aliqua enim ad minim</a></li>
											<li><a href="#">Quis nostrud exercitation ullamco laboris</a></li>
											<li><a href="#">Nisi ut aliquip ex ea commodo</a></li>
											<li><a href="#">Duis aute irure dolor in reprehenderit</a></li>
											<li><a href="#">Coluptate velit esse cillum</a></li>
											<li><a href="#">Dolore eu fugiat nulla pariatur</a></li>
											<li><a href="#">Excepteur sint occaecat cupidatat</a></li>
											<li><a href="#">Sunt in culpa qui officia</a></li>
											<li><a href="#">Deserunt mollit anim id est laborum</a></li>
										</ul>
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
										<span class="footer-link"><span>Like and Follow !!!</span> <a rel="nofollow" target="_blank" class="link">Website Designed</a> by JF</span>
										<ul class="list-services">
											<li><a class="tooltips n-1" title="Twitter" target="_blank" href="https://twitter.com/"></a></li>
											<li><a class="tooltips n-2" title="Facebook" target="_blank" href="https://www.facebook.com/"></a></li>
											<li class="last"><a class="tooltips n-3" title="Youtube" target="_blank" href="https://www.youtube.com/"></a></li>
										</ul>
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
