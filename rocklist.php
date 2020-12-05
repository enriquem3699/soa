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
	<script type="text/javascript">
		location.href="index.php";
	</script>
	<?php
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome to www.rockband.com.</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/imagen.png">
		<meta name="description" content="Here you can find all the rock music performed by different Polleria's Paredess worldwide" />
		<meta name="keywords" content="music rock, national, international, web pages" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/resete.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
		<link rel="stylesheet" href="css/sweetalert.css">
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
		<script src="js/Vegur_700.font.js" type="text/javascript"></script>
		<script src="js/Vegur_400.font.js" type="text/javascript"></script>
		<script src="js/FF-cash.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/easyTooltip.js"></script>
		<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
		<script src="js/jquery.galleriffic.js" type="text/javascript"></script>
		<script src="js/jquery.opacityrollover.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('div.navigation').css({'width' : '920px', 'float' : 'left'});
				$('div.content').css('display', 'block');

				// Initially set opacity on thumbs and add
				// additional styling for hover effect on thumbs
				var onMouseOutOpacity = 1;
				$('#thumbs ul.thumbs li a').opacityrollover({
					mouseOutOpacity:   onMouseOutOpacity,
					mouseOverOpacity:  0.6,
					fadeSpeed:		'fast',
					exemptionSelector: '.selected'
				});

				// Initialize Advanced Galleriffic Gallery
				var gallery = $('#thumbs').galleriffic({
					delay:					30000,
					numThumbs:				6,
					preloadAhead:			6,
					enableTopPager:			false,
					enableBottomPager:		false,
					imageContainerSel:		'#slideshow',
					controlsContainerSel:	'#controls',
					captionContainerSel:	'#caption',
					loadingContainerSel:	'',
					renderSSControls:		true,
					renderNavControls:		true,
					playLinkText:			'',
					pauseLinkText:			'P',
					prevLinkText:			'Prev',
					nextLinkText:			'Next',
					nextPageLinkText:		'',
					prevPageLinkText:		'',
					enableHistory:			false,
					autoStart:				7000,
					syncTransitions:		true,
					defaultTransitionDuration: 900,
					onSlideChange:			function(prevIndex, nextIndex) {
						// 'this' refers to the gallery, which is an extension of $('#thumbs')
						this.find('ul.thumbs li').children()
							.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
							.eq(nextIndex).fadeTo('fast', 0.6);
					},
					onPageTransitionOut:	function(callback) {
						this.fadeTo('fast', 0.0, callback);
					},
					onPageTransitionIn:		function() {
						this.fadeTo('fast', 1.0);
					}
				});
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
	<body id="page4">
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
											echo '<div class="cerrar_sesion" style="width: 23%; float: left; padding: 50px 15px 50px 0px;">';
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
											<li><a href="gallery.php">Contactenos</a></li>
											<li><a href="gallery.php">Carta</a></li>
											<li class="item-1"><a href="tour-dates.php">Eventos</a></li>
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
				<div class="main" style="height:680px">
					<center>
						<div class="t">
							<?php
								$cod="";
                     			if(isset($_GET['txtcod']))
                    			$cod=$_GET["txtcod"];
								$con = mysqli_connect("localhost", "root", "","sistemita");
																         
									if (mysqli_connect_error()) {
									die("Error de conexion con mysql:".mysqli_connect_error());}

									$database = mysqli_select_db($con,"sistemita");
									if (!$database){ 
									die("Error de Base de Datos:".mysqli_error());}

									$sql = "select * from rockband where idrock='".$cod."'";
									
									$result = mysqli_query($con,$sql);
									if (!$result){
				                    die("Error de Consulta:".mysqli_error());
				                    exit();}

				                    echo "<form name=fmr1 method=GET action=rocklist.php>";
					                echo "<table border=0>"
					                         ."<tr><td>PUT THE ROCKBAND NUMBER HERE:</td>"
					                         ."<td><input type=text placeholder=ejm:rb01 name=txtcod></td>"
					                         . "<td><input type=submit value=Accept class='boton'></tr>";
					                echo "</table>";
									echo "<table border=1 style='width:550px'>"
										. "<tr><td>Number</td>"
										. "<td>Polleria's Paredes</td>"
										. "<td>Country</td>"
										. "<td>Category</td>"
										. "<td>Image</td></tr>";

									while($row=  mysqli_fetch_array($result))
										{
										echo"<tr><td>".$row[0]."</td>"
										. "<td>".$row[1]."</td>"
										. "<td>".$row[2]."</td>"
										. "<td>".$row[3]."</td>"
										. "<td><img src=rockimages/".$row[0].".jpg width=180></td></tr>";
										}
									echo "</table>";
									echo "</form>";
									mysqli_close($con);
							?>
							<div class="clear"></div>
						</div>				        
					</center>	
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