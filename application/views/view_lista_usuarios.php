<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista Usuarios</title>
  <!-- MATERIAL ICON FONT -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>js/javaScript.js"></script>
</head>
<body>

<div class="row">
<?php  
foreach ($usuarios as $key) {
	echo '
        <div class="col s6 m4 l4">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">'.$key['nombre'].' '.$key['a_paterno'].'</span>
              <p>Correo: '.$key['e-mail'].'</p>
              <p>Edad: '.$key['edad'].'</p>
            </div>
            <div class="card-action">
              <a href="#" >Editar</a>
              <a href="#" onClick="eliminar('.$key['id'].');">Eliminar</a>
            </div>
          </div>
        </div>
        ';
}

?>
</div>


<div class="fixed-action-btn" style="bottom: 50px; right: 24px;">
    <a class="btn-floating btn-large red" href="<?php echo base_url();?>/index.php/maincontroller/anadir">
      <i class="large material-icons">add</i>
    </a>
</div>
  
</body>
</html>