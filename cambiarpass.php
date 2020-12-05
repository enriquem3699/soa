<?php
	include 'conexion.php';
	$pass = $_REQUEST["pass"];
	$usuario = $_REQUEST["usuario"];			
		if ($usuario !="") {
			if ($pass!=""){
				$sql1 = "SELECT COUNT(*) FROM usuario WHERE usuario = '$usuario'";
				$res1 = mysqli_query($con,$sql1);
				$rw = mysqli_fetch_array($res1);					
				if($rw["COUNT(*)"]> 0){
					$sql = "UPDATE usuario SET password='$pass' WHERE usuario = '$usuario' ";
					$res = mysqli_query($con,$sql);
					echo json_encode(['res'=>true,'mensaje'=>'Your password was successfully changed']);
				}else{
					echo json_encode(['res'=>false,'mensaje'=>'Error updating password .. try again later']);
				}
			}else{
				echo json_encode(['res'=>false,'mensaje'=>'Enter your new password']);
			}
		}else{
			echo json_encode(['res'=>false,'mensaje'=>'Enter your username']);
		}  
?> 
