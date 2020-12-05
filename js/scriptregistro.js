function registrar(){
	var datos= new FormData(document.getElementById('formulario_usuario'));
	console.log(datos);
	$.ajax({
		url:"registrar.php",
		type:"POST",
		data:datos,
		cache: false,
		contentType: false,
		processData: false,
		success:function(data){
			var data2 = JSON.parse(data);
				console.log(data2);
				if(data2.res == false){
					swal("Error", data2.mensaje, "error");
				}else{
					swal({
					  	title:  data2.mensaje,
					 	text: "",
					 	type: "info",
					 	closeOnConfirm: false,
					  	showLoaderOnConfirm: true,
					},
					function(){
					  setTimeout(function(){
					   location.href="index.php";
					  }, 2000);
					});
				}	
		}
	});
}