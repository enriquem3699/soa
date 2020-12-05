<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" type="image/x-icon" href="images/imagen.png">
  <meta name="description" content="Here you can find all the rock music performed by different rock bands worldwide" />
  <meta name="keywords" content="music rock, national, international, web pages" />
  <meta charset="utf-8">
  <title>Rock Band</title>
  <link rel="stylesheet" type="text/css" href="./css/estilocambiopass.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:500" rel="stylesheet"> 
  <link rel="stylesheet" href="css/sweetalert.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="./js/scriptchangepassword.js"></script>
  <script src="js/sweetalert.min.js"></script>
</head>
  <body>
    <form>
      <h1>Rock Band</h1>
      <label for="">Username</label>
      <input type="text" placeholder="Username" name="" value="" id="usuario">
      <label for="">New Password</label>
      <input type="password" placeholder="New Password" name="" value="" id="pass">
      <button type="button" onclick="cambiar()" id="pass">Send</button>
      <div id="respuesta"></div>
    </form>
  </body>
</html>
