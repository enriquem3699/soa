function EnviarCorreo() {
	var nombre = $('#nombre').val();
	var email = $('#email').val();
	var mensaje = $('#mensaje').val();
	if(nombre != ""){
		if (email != "") {
			if(mensaje != ""){
				swal("Envio Exitoso", "Su consulta a sido enviada", "success");
			}else{
				swal("Error", "Ingrese mensaje", "error");
			}
		}else{
			swal("Error", "Ingrese Email", "error");
		}
	}else{
		swal("Error", "Ingrese nombre", "error");
	}
	
}