<?php
session_start();
  if(isset($_SESSION['username'])) 
  {
  header('Location: inicio.php'); 
  exit();
    }
    
  ?>
<!DOCTYPE html>

<html lang="en">

<head>
	<title>Aplicacion de Internet :D</title>
	<meta charset="utf-8">
	<meta name="description" content="Web sobre sitios de comida">
	<meta name="keywords" content="comida">
	<meta name="author" content="Barreto Aviles Ezequiel Adrian">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
	<link rel="stylesheet" type="text/css" href="vistas/style.css">
	<link rel="shortcut icon" href="img/icon.png" type="image/png" />
	<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.indigo-pink.min.css">
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/scripts.js"></script>
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>

	
</head>

<body class="bg-info"> 
	<div id="central" class="container">
		<div id="header">
			<H1>Nombre de la pagina</H1>
			
		</div>
		<div id="imagen">
			 <img class="img-responsive" src="img/food.png" alt="Chania"> 
		</div>
		<div id="div_texto">
			<p class="text-success" id="texto">Texto de Bienvenida</p>
			<p class="text-success"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lorem metus, faucibus eu laoreet eu, efficitur vehicula sem. Phasellus ac varius neque. Suspendisse potenti. Aliquam ultricies malesuada nunc ornare feugiat. Proin at viverra risus. Sed ac suscipit est. Praesent mattis id ante ut scelerisque. Maecenas convallis, velit vel egestas bibendum, purus lorem posuere quam, ac auctor risus risus quis ligula. Cras nec placerat nulla. Vivamus non placerat ex.

Morbi dignissim enim enim, sit amet luctus massa vestibulum sit amet. Sed tincidunt sagittis urna, eu sagittis purus placerat quis. Aliquam erat volutpat. Nullam cursus justo ut diam laoreet, nec lobortis turpis tincidunt. Nullam congue, ante vel vulputate venenatis, quam libero consectetur diam, ac elementum eros turpis ut enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris ut leo turpis. Quisque sed leo maximus, consectetur mauris vel, molestie eros. Quisque tincidunt nulla condimentum scelerisque tincidunt. Vivamus massa neque, viverra auctor eros eget, elementum finibus purus. Quisque diam metus, cursus nec fermentum vitae, ullamcorper ut nulla. </p>

		</div>
		<div class="panel-heading" id="botonUno">
			<p>
   			<button type="button" class="btn btn-primary" id="ingresa_boton">Ingresar</button>
   			</p> 
   		</div>
   		<div class="panel-heading"  id="botonDos">
   			<p>
   			<button type="button" class="btn btn-primary" id="registra_boton">Registrarse</button>
   			</p>
   		</div>

  		<div id="ingresa" class="panel panel-default login">
   			    		<div class="panel-body" id="panelLogin">
    			<form role="form" action="ingresar.php" method= "POST" >
    				<div class="form-group">
      					<label for="username">Username:</label>
      					<input type="text" class="form-control" id="username" placeholder="Ingresa tu usuario" name="txtusuario" >
    				</div>
    				<div class="form-group">
     					<label for="pwd">Password:</label>
      					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="txtpassword">
    				</div>
    				<input type="submit" class="btn btn-info" value="Ingresar" name="entrar">
  				</form>
    				
    		</div>
  		</div>
  		<div id="registro"  class="panel panel-default login">
   			
    		<div class="panel-body" >
    			<form role="form" action="agregar.php" method="POST" >
    				<div class="form-group form-group-sm">
      					<label  for="formGroupInputSmall" >Email:</label>
      					<input type="text" class="form-control" id="email" placeholder="Escribe tu correo" name="txtemail" >
    				</div>
    				<div class="form-group form-group-sm">
      					<label  for="formGroupInputSmall">Nombre:</label>
      					<input type="text" class="form-control" id="nombre" placeholder="Escribe tu Nombre" name="txtnombre" >
    				</div>

    				<div class="form-group form-group-sm">
      					<label  for="formGroupInputSmall">Apellidos:</label>
      					<input type="text" class="form-control" id="apellido" placeholder="Escribe tus Apellidos" name="txtapellido">
    				</div>
    				<div class="form-group form-group-sm">
      					<label for="formGroupInputSmall">Username:</label>
      					<input type="text" class="form-control" id="username_registro" placeholder="Escribe un usuario"  name="txtusername">
    				</div>
    				<div class="form-group form-group-sm">
     					<label for="formGroupInputSmall">Password:</label>
      					<input type="password" class="form-control" id="pwd_registro" placeholder="Escribe una contraseña"  name="txtpassword">
    				</div>
    				<div class="form-group form-group-sm">
     					<label for="formGroupInputSmall">Edad:</label>
      					<input type="text" class="form-control" id="edad" placeholder="Escribe tu edad"  name="txtedad">
    				</div>
    				<div class="radio">
  						<label for="formGroupInputSmall">
    						<input type="radio"  id="optionsRadios1" value="h"  name="sexo" checked="">
    						Hombre
  						</label>
					</div>
					<div class="radio">
						<label>
 							<input type="radio"  id="optionsRadios1" value="m"  name="sexo">
    						Mujer
  						</label>
					</div>
					<input type="submit" class="btn btn-info" value="Registrarse" onclick="return validacion()">
  			
    		</div>
  		</div>
 	
	</div>

</body>

</html>
