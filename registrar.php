<?php

	include 'conexion.php';
	$nombre= $_REQUEST["nombre"];
	$apellido= $_REQUEST["apellido"];
	$usuario= $_REQUEST["usuario"];
	$pass= $_REQUEST["pass"];
	$nivel= $_REQUEST["nivel"];
	$correo= $_REQUEST["correo"];
	$foto= $_FILES["foto"];
	$nombre_foto=$_FILES["foto"]["name"];
	$ruta=$_FILES["foto"]["tmp_name"];
	$destino="userimages/".$nombre_foto;
	if ($nombre_foto != "") {
		copy($ruta,$destino);
	}
	
		if($nombre !=""){
			if ($apellido !="") {
				if ($usuario !="") {
					if ($pass !="") {
						if ($nivel) {
							if ($correo !="") {
								if ($nombre_foto !="") {

									$sql = "INSERT INTO usuario( `nombre`, `apellido`, `usuario`, `password`, `nivel`, `correo`, `foto`, `estado`) VALUES ('$nombre','$apellido','$usuario','$pass','$nivel','$correo','$destino','1')";

									$res = mysqli_query($con,$sql);

									if($res){										
										echo json_encode(['res'=>true,'mensaje'=>'Successful registration Welcome to RockBand']);
									}
									else{
										echo json_encode(['res'=>false,'mensaje'=>'Not registered']);
									}
								}else{
									echo json_encode(['res'=>false,'mensaje'=>'Upload an image']);
									}
							}else{
								echo json_encode(['res'=>false,'mensaje'=>'Enter email']);
							}
						}else{
							echo json_encode(['res'=>false,'mensaje'=>'Enter level']);
						}
					}else{
						echo json_encode(['res'=>false,'mensaje'=>'Enter password']);
					}
				}else{
					echo json_encode(['res'=>false,'mensaje'=>'Enter username']);
				}
			}else{
				echo json_encode(['res'=>false,'mensaje'=>'Enter your lastname']);
			}
		}else{
			echo json_encode(['res'=>false,'mensaje'=>'Enter your name']);
		}		
?>
