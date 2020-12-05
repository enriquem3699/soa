function validar(){
	var usuario = $('#usuario').val();
	var pass = $('#pass').val();
	$.ajax({
		url:"validar_login.php",
		type:"POST",
		data:{usuario:usuario,pass:pass},
		success: function(data){
			var data2 = JSON.parse(data);
			console.log(data2);
			if(data2.res == false){
				swal("Error", data2.mensaje, "error");
			}else{
				location.href= data2.pagina;
			}
			
		}
	})
}
