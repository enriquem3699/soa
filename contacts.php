<?php
session_start();
if(isset($_SESSION["usuario"])){

	if($_SESSION["nivel"] == "Analista" || $_SESSION["nivel"] == "Administrador"){

	}else{
		?>
		<script type="text/javascript">
			location.href="error.php";
		</script>
		<?php
	}

}else{
	?>
	<script type="text/javascript">alert("Create a new account to access! Go to Sign Up");
		location.href="index.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rock Band</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/imagen.png">
		<meta name="description" content="Here you can find all the rock music performed by different rock bands worldwide" />
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
		<script src="js/sweetalert.min.js"></script>
		<script src="js/script_contacto.js"></script>		
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
											<li class="item"><a class="active" href="index.php">About</a></li>
											<li><a href="audio.php">Audio</a></li>
											<li><a href="video.php">Video</a></li>
											<li><a href="gallery.php">Gallery</a></li>
											<li class="item-1"><a href="tour-dates.php">Tour Dates</a></li>
											<li class="last"><a href="contacts.php">Contacts</a></li>
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
								<article class="grid_8">
									<div class="padding-grid-1">
										<h3>Contact <strong>Form</strong></h3>
										<form id="contact-form" enctype="multipart/form-data" method="post" style= "height: 365px; margin-top: 15px;padding-top: 5px;padding-left: 15px;padding-top: 15px;">
											<fieldset>
												<label>
													<span class="name-input">Name:</span>
													<input name="name" id="nombre" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
												</label>
												<label>
													<span class="name-input">Email:</span>	
													<input name="name1" id="email" value="" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" />
												</label>
												<label>
													<span class="name-input">Message:</span>
													<textarea id="mensaje" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''"></textarea>
												</label>						
											</fieldset>
											<div class="link-form">
												<button type="button" name="button" onClick="EnviarCorreo()">Send</button>
											</div> 
											<div class="clear"></div>		
										</form>	
									</div>
								</article>
								<article class="grid_4 alpha">
									<div class="padding-grid-3">
										<h3>Contact <strong>Info</strong></h3>
										<div class="wrapper p2">
											<figure class="style-img-2 fleft">
												<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d975.8263002129426!2d-77.07002655419817!3d-11.953358521946113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2spe!4v1497325726494" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
											</figure>
										</div>
										<dl class="list-4">
											<dt>Av. Alfredo Mendiola, Panamericana Nte. 6377,<br>Los Olivos 15306.</dt>
											<dd>Cellphone: +51 985 425 014</dd>
											<dd>E-mail: <a class="link" href="#">j.vargas@utp.edu.pe</a></dd>
										</dl>
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
