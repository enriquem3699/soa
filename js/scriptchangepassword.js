function cambiar() {
var usuario =  document.getElementById('usuario').value;
var pass =  document.getElementById('pass').value;
  $.ajax({
    url:"cambiarpass.php",
    type:"POST",
    data:{usuario:usuario, pass:pass},
    success: function (data) {
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
  })
}