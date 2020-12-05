<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="images/imagen.png">
	<meta name="description" content="Here you can find all the rock music performed by different Polleria's Paredess worldwide" />
	<meta name="keywords" content="music rock, national, international, web pages" />
	<meta charset="utf-8">
	<title>Polleria's Paredes</title>
	<link rel="stylesheet" href="./css/estiloregistro.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet">
	<link rel="stylesheet" href="css/sweetalert.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="./js/scriptregistro.js"></script>
	<script src="js/sweetalert.min.js"></script>
</head>
<body>
	<div>
		<form id="formulario_usuario">
			<h1> Create an account </h1>
			<label for="">Name</label>
			<input type="text" placeholder="Name" name="nombre" id="nombre">
			<label for="">Last name</label>
			<input type="text" placeholder="Last name" name="apellido" id="apellido">
			<label for="">User name</label>
			<input type="text" placeholder="Username" name="usuario" id="usuario">
			<label for="">Password</label>
			<input type="password" placeholder="Password" name="pass" id="pass">
			<label for="">Level</label>
			<input type="text" placeholder="Level" name="nivel" id="nivel">
			<label for="">Email</label>
			<input type="email" placeholder="Email" name="correo" id="correo">
			<label for="">Upload an image</label>
			<input type="file" name="foto" id="foto">
			<button type="button" onclick="registrar()">Sign up</button>
			<div id="resultado"></div>
		</form>
	</div>
</body>
</html>
