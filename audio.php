<?php
session_start();
if(isset($_SESSION["usuario"])){

	if($_SESSION["nivel"] == "Moderador" || $_SESSION["nivel"] == "Administrador"){

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
		<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
		<script src="js/Vegur_700.font.js" type="text/javascript"></script>
		<script src="js/Vegur_400.font.js" type="text/javascript"></script> 
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
	<body id="page2">
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
								<div class="grid_12">
									<div class="padding-grid-1">
										<h3 class="letter">Our <strong>Discography</strong></h3>
									</div>
									<div class="wrapper p3">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper">
													<figure class="style-img-2 fleft"><a ><img src="images/page2-img1.jpg"  alt=""></a></figure>
												</div>
											</div>
										</article>
										<article class="grid_8 alpha">
											<div class="padding-grid-2">
												<h4 class="margin-none indent-top1"><strong>2010s.</strong>  Rock Remixes</h4>
												<p class="prev-indent-bot">Rock has remained popular, although it has declined in chart presence since the late 2000s alongside changes in radio format. Rock has also moved from hard rock and heavy metal, which have dominated since the mid-1980s. Mainstream rock since the early 2010s has become softer and more refined because of indie rock.</p>
												<div class="wrapper">
													<ul class="list-1 fleft">
														<li><a >01. System Of A Down - Chop Suey</a></li>
														<li><a >02. Sum 41 - Jessica Kill</a></li>
														<li><a >03. Guns N' Roses - Sweet Child O' Mine.mp3</a></li>
														<li><a >04. Fit For Rivals - Hallelujah</a></li>
														<li><a >05. My Chemical Romance - Helena</a></li>
														<li><a >06. Nirvana - Smells Like Teen Spirit</a></li>
														<li><a >07. Rise against - Prayer Of The Refugee</a></li>
														<li><a >08. SR 71 - Lucky</a></li>
														<li><a >09. Blink 182 - The Rock Show</a></li>
														<li><a >10. The Offspring - Want You Bad</a></li>
														<li><a >11. The Rolling Stone - Paint it black</a></li>
													</ul>
													<ul class="list-2 fright">
														<?php
														include 'conexion.php';
														$sql= "SELECT * FROM musica WHERE discografica = '1'";								$res= mysqli_query($con,$sql);	
														 while($rw = mysqli_fetch_array($res)){?>
														<li>
															<span id="muted<?php echo $rw["id_music"] ?>"><a class="left-list" aria-hidden="true" onclick="muted('<?php echo $rw["id_music"] ?>')"></a></span>
															<span id="reproducir<?php echo $rw["id_music"] ?>"><a class="right-list" aria-hidden="true" onclick="play('<?php echo $rw["id_music"] ?>')"></a></span>
															<audio src="sounds/<?php echo $rw["nombre"] ?>" id="a<?php echo $rw["id_music"] ?>" ></audio>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
										</article>
									</div>
									<div class="wrapper p3">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper">
													<figure class="style-img-2 fleft"><a ><img src="images/page2-img2.jpg"  alt=""></a></figure>
												</div>
											</div>
										</article>
										<article class="grid_8 alpha">
											<div class="padding-grid-2">
												<h4 class="margin-none indent-top1"><strong>1980s.</strong> Rock Remixes</h4>
												<p class="prev-indent-bot">Throughout the 1980s, alternative rock was mainly an underground phenomena. While on occasion <br>a song would become a commercial hit or albums would receive critical praise in mainstream publications, alternative rock in the 1980s was primarily relegated to independent record labels, fanzines and college radio stations.</p>
												<div class="wrapper">
													<ul class="list-1 fleft">
														<li><a >01. Billy Idol - Bailando conmigo mismo</a></li>
														<li><a >02. Alphaville - Big in Japan</a></li>
														<li><a >03. Bee Gees - Stayin' Alive</a></li>
														<li><a >04. Culture Club - Karma Chameleon</a></li>
														<li><a >05. Jhon Travolta &amp; Olivia Newton John - The Grease</a></li>
														<li><a >06. Juice Newton - Reina de Corazones</a></li>
														<li><a >07. The Vapors - Turning Japanese</a></li>
														<li><a >08. The Metro - Berlin</a></li>
														<li><a >09. Steve Wonder - Amante a tiempo compartido</a></li>
														<li><a >10. Peter Schilling - Major Tom</a></li>
														<li><a >11. Sultans of Swing - Dire Straits </a></li>
													</ul>
													<ul class="list-2 fright">
														<?php
														include 'conexion.php';
														$sql= "SELECT * FROM musica WHERE discografica = '2'";
														$res= mysqli_query($con,$sql);	
														 while($rw = mysqli_fetch_array($res)){?>
														<li>
															<span id="muted<?php echo $rw["id_music"] ?>"><a class="left-list" aria-hidden="true" onclick="muted('<?php echo $rw["id_music"] ?>')"></a></span>
															<span id="reproducir<?php echo $rw["id_music"] ?>"><a class="right-list" aria-hidden="true" onclick="play('<?php echo $rw["id_music"] ?>')"></a></span>
															<audio src="sounds/<?php echo $rw["nombre"] ?>" id="a<?php echo $rw["id_music"] ?>" ></audio>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
										</article>
									</div>
									<div class="wrapper">
										<article class="grid_4 alpha">
											<div class="padding-grid-2">
												<div class="wrapper">
													<figure class="style-img-2 fleft"><a><img src="images/page2-img3.jpg"  alt=""></a></figure>
												</div>
											</div>
										</article>
										<article class="grid_8 alpha">
											<div class="padding-grid-2">
												<h4 class="margin-none indent-top1"><strong>1980s. </strong>Rock Remixes(Spanish)</h4>
												<p class="prev-indent-bot"> A majority of groups signed to independent record labels were mining from a variety of rock and particularly 1960s rock influences. New bands would form in the wake of previous bands, which created an extensive underground circuit in America, filled with different scenes in various parts of <br>the country.</p>
												<div class="wrapper">
													<ul class="list-1 fleft">
														<li><a >01. El Tri - Triste cancion de amor</a></li>
														<li><a >02. Enanitos verdes - Lamento Boliviano</a></li>
														<li><a >03. Hombres G - Devuelveme a mi Chica</a></li>
														<li><a >04. Los Prisioneros - Sexo</a></li>
														<li><a >05. Los Violadores - Uno, dos, ultraviolento!</a></li>
														<li><a >06. Los Rabanes - My Commanding Wife</a></li>
														<li><a >07. Panda - Narcisista por excelencia</a></li>
														<li><a >08. Soda Stereo - De musica ligera</a></li>
														<li><a >09. Virus - Una luna de miel en la mano</a></li>
														<li><a >10. Charly Garcia - No me dejan salir</a></li>
														<li><a >11. Don Tetto - Fallido Intento</a></li>
													</ul>
													<ul class="list-2 fright">
														<?php
														include 'conexion.php';
														$sql= "SELECT * FROM musica WHERE discografica = '3'";
														$res= mysqli_query($con,$sql);	
														 while($rw = mysqli_fetch_array($res)){?>
														<li>
															<span id="muted<?php echo $rw["id_music"] ?>"><a class="left-list" aria-hidden="true" onclick="muted('<?php echo $rw["id_music"] ?>')"></a></span>
															<span id="reproducir<?php echo $rw["id_music"] ?>"><a class="right-list" aria-hidden="true" onclick="play('<?php echo $rw["id_music"] ?>')"></a></span>
															<audio src="sounds/<?php echo $rw["nombre"] ?>" id="a<?php echo $rw["id_music"] ?>" ></audio>
														</li>
														<?php } ?>
													</ul>
												</div>
											</div>
										</article>
									</div>
								</div>
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
