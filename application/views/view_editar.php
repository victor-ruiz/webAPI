
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Añadir</title>
	<!-- MATERIAL ICON FONT -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- MATERIALIZE -->
    <link href="<?php echo base_url();?>css/materialize.css" rel="stylesheet">
   
</head>
<body>

<?php echo form_open(base_url('index.php/maincontroller/insertar'));?>
 	<?php

		$nombre = array(
			'name' => 'nombre',
			'id' => 'nombre',
			'size' => '30',
			'value' => set_value('nombre'),
			'class' => 'validate',
			'type' => 'text'
			);
		$aPaterno = array(
			'name' => 'aPaterno',
			'id' => 'aPaterno',
			'value' => set_value('aPaterno'),
			'class' => 'validate',
			'type' => 'text'
			);
		$aMaterno = array(
			'name' => 'aMaterno',
			'id' => 'aMaterno',
			'size' => '30',
			'value' => set_value('aMaterno'),
			'class' => 'validate',
			'type' => 'text'
			);
		$email = array(
			'name' => 'email',
			'id' => 'email',
			'value' => set_value('email'),
			'type' => 'email',
			'class' => 'validate',
			 );
		$label_email =array(
			"data-error" => "Ingrese un correo valido",
			"data-success" => "Ingreso un correo valido"
			);
		$password = array(
			'name' => 'password',
			'id' => 'password',
			'size' => '30',
			'value' => set_value('password'),
			'type' => 'password',
			'class' => 'validate',
			 );

		$edad = array(
			'name' => 'edad',
			'id' => 'edad',
			'min' => '0',
			'type' => 'number',
			'value' => set_value('edad')
			 );
		$direccion = array(
			'name' => 'direccion',
			'id' => 'direccion',
			'size' => '30',
			'value' => set_value('direccion'),
			'class' => 'validate',
			'type' => 'text'
			);
		$cp = array(
			'name' => 'cp',
			'id' => 'cp',
			'type' => 'number',
			'value' => set_value('cp')
			 );


		$submit = array(
			'name' => 'submit',
			'id' => 'submit',
			'value' => 'Guardar',
			'title' => 'Enviar',
			'class' =>'btn waves-effect waves-light' 
			 );
	 ?>

	 

<div class="container">
	<div class="row">
	    <form class="col s8 m8 8">
	    	<div class="input-field col s12">
	 			<?php echo form_input($nombre);?>
	 			<?php echo form_label('Nombre (s): '); ?>
	   		</div>
	    	<div class="input-field col s12">
	      		<?php echo form_input($aMaterno);?>
	 			<?php echo form_label('Apellido Materno: '); ?>
	    	</div>
	    	<div class="input-field col s12">
	      		<?php echo form_input($aPaterno);?>
	 			<?php echo form_label('Apellido Paterno: '); ?>
	    	</div>
			<div class="input-field col s12" >
				<input name="sexo" type="radio" id="sexoM" value="Masculino" />
	     		 <label for="sexoM">Masculino</label>
	   
	      		<input name="sexo" type="radio" id="sexoF" value="Femenino" />
	      		<label for="sexoF">Femenino</label>
			</div>
	        <div class="input-field col s12" >
				<input name="tipo" type="radio" id="normal" value="1"  checked="checked" />
	     		<label for="normal">Empleado</label>
	   
	      		<input name="tipo" type="radio" id="root" value="2" />
	      		<label for="root">Administador</label>
	 
			</div>

	        <div class="input-field col s12">
	          	<?php echo form_input($edad);?>
	 			<?php echo form_label('Edad: '); ?>
	        </div>
	        <div class="input-field col s12">
	          	<?php echo form_input($direccion);?>
	 			<?php echo form_label('Dirección: '); ?>
	        </div>
	        <div class="input-field col s12">
	          	<?php echo form_input($cp);?>
	 			<?php echo form_label('Codigo Postal: '); ?>
	        </div>
	        <div class="input-field col s12">
	        	<?php echo form_input($email);?>
	 			<?php echo form_label('Correo: ','email',$label_email); ?>
	        </div>
	        <div class="input-field col s12">
	          	<?php echo form_input($password);?>
	 			<?php echo form_label('Contraseña: '); ?>
	        </div>
	      	
			<div class="input-field col s12">
				<font color="red" style="font-weight: bold; font-size: 15;">
					<?php echo validation_errors(); ?>
				</font>
			</div>
			
			<div class="input-field col s12">
				
  				<?php echo form_submit($submit);?> 
			</div>
	    </form>
	</div>
</div>

<?php echo form_close();?>


<div class="fixed-action-btn" style="bottom: 45px; left: 24px;">
    <a class="btn-floating btn-large red" href="<?php echo base_url();?>index.php/maincontroller/carga_lista_usuarios">
      <i class="large material-icons">clear</i>
    </a>
</div>

 <!-- ================== SCRIPTS ================== -->
	<script src="<?php echo base_url();?>js/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url();?>js/materialize.min.js"></script>

</body>
</html>