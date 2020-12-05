<?php 
	session_start();
	$usuario = $_REQUEST["usuario"];
	$pass = $_REQUEST["pass"];

	$con = mysqli_connect('localhost','root','','sistemita');

	if($usuario !=""){
		if($pass!=""){
			$sql1 = "SELECT count(*) FROM usuario WHERE usuario = '$usuario' and estado = 1";
			$res1 = mysqli_query($con,$sql1);
			$res1 = mysqli_fetch_array($res1);
			if ($res1["count(*)"] > 0) {
				$sql2 = "SELECT count(*) FROM usuario WHERE password = '$pass' and estado = 1";
				$res2 = mysqli_query($con,$sql2);
				$res2 = mysqli_fetch_array($res2);
				if ($res2["count(*)"] > 0) {
					$_SESSION["usuario"]= $usuario;
					$_SESSION["password"] = $pass;
					$sql="SELECT * FROM usuario where usuario='$usuario' and password='$pass'";
					$rs=mysqli_query($con,$sql)or die(mysql_error());
					$num=mysqli_fetch_array($rs);
					if($num>0)
						{
							$_SESSION['nombre']=$num['nombre'];
							$_SESSION['nivel']=$num['nivel'];

							if($_SESSION['nivel'] == "Administrador"){
								$pagina = "index.php";
						
							}elseif ($_SESSION['nivel'] == "Moderador") {
								$pagina = "audio.php";
							}
							echo json_encode(['res'=>true,'pagina'=>$pagina]);
						}
						?>						
					<?php
				}else{
					echo json_encode(['res'=>false,'mensaje'=>'Incorrect password']);
				}
			}else{
				echo json_encode(['res'=>false,'mensaje'=>'This user does not exist']);
			}
		}else{
			echo json_encode(['res'=>false,'mensaje'=>'Enter your password']);
		}
	}else{			
		echo json_encode(['res'=>false,'mensaje'=>'Enter your username']);
			//echo json_encode( ['tipo'=>false,'respuesta'=>'hola']);
	}
?>
