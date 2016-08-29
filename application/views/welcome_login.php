<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Login</title>

    <!-- MATERIAL ICON FONT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- MATERIALIZE -->
    <link href="<?php echo base_url();?>css/materialize.css" rel="stylesheet">
    
    <!-- CUSTOM STYLE -->
    <link href="<?php echo base_url();?>css/estilos.css" id="switch_style" rel="stylesheet">
    
    <!-- ================== SCRIPTS ================== -->
	<script src="<?php echo base_url();?>js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url();?>js/materialize.min.js"></script>

</head>
<body>
	
 <!-- id -> # class -> . -->
	<div id="principal" class="home">
		<div class="container" id="contenedor">
			<div class="row">
	      		<div id="logo" class="col s6 m6">
	      			<img class="responsive-img img_logo" src="<?php echo base_url();?>css/images/logo.png">
	      		</div>
	      		<div id="login" class="col s6 m6"> 
					 <div class="row">
					    <form class="col s12" id="formulario" action="<?php echo base_url();?>index.php/Maincontroller/login" method="POST">
					      <div class="row">
					      	<div id="titulo">
					      		<h2>Bienvenido</h2>
					      		<h3>26 de Agosto de 2016</h3>
					      	</div>
					        <div class="input-field " id="email">
					          <i class="material-icons prefix">account_circle</i>
					          <input id="correo" name="correo" type="email" class="validate">
	          					<label for="email" data-error="Ingrese un correo Valido" data-success="El correo es valido">Email</label>
					        </div>
					        <div class="input-field" id="pass">
					          <i class="material-icons prefix">lock</i>
					          <input id="password" name="password" type="password" class="validate">
					          <label for="password">Contraseña:</label>
					        </div>
					        <div class="input-field" id="btn">
					        	<button class="btn waves-effect waves-light" id="btn_login" type="submit">Acceder
    							<i class="material-icons right">send</i>
  								</button>
					        </div>
					      </div>
					    </form>
					</div>
	      		</div>
	   	 	</div>
		</div>
	</div>
</body>
</html>
