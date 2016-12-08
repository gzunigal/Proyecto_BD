<?php $this->layout = 'login'; ?>
<head>
    <title>Registro - Handy Hand</title>
    <link type="text/css" rel="stylesheet" href="/css/handyhand.css">
</head>


<body style="padding-top: 100px;">


<div class="panel panel-default">				
	<div class="panel-heading">
		<h1 style="text-align: center;">Nuevo usuario</h1>
	</div>

  	<div class="panel-body">
  		<?php echo $this->Form->create(NULL, ['url' => ['controller' => 'Login', 'action' => 'register']]); ?>
  		<div class="col-md-offset-2 col-md-8">
  			<?php 
  				echo $this->Form->input('Nombre de Usuario', ["name"=>"user_nickname", "placeholder" => "Nickname",'required' => true, 'allowEmpty' => false]);

  				echo $this->Form->input('Contraseña', ["name"=>"user_password", "type" => "password", "placeholder" => "Contraseña",'required' => true, 'allowEmpty' => false]);

  				echo $this->Form->input('Nombre', ["name"=>"user_name", "placeholder" => "Nombre",'required' => true, 'allowEmpty' => false]);

  				echo $this->Form->input('Apellido', ["name"=>"user_surname", "placeholder" => "Apellido",'required' => true, 'allowEmpty' => false]);

  				echo $this->Form->input('Rut', ["name"=>"user_rut", "placeholder" => "12345678-9",'required' => true, 'allowEmpty' => false]);

  				echo $this->Form->input('Correo', ["name"=>"user_email", "placeholder" => "correo@host.cl",'required' => true, 'allowEmpty' => false]);

  				echo $this->Form->input('Teléfono', ["name"=>"user_phone", "type" => "tel", "placeholder" => "123456789",'required' => true, 'allowEmpty' => false]);
  			?>

			 <select name="communes" required>
			 	<?php
			 		echo '<option value="">Elige una comuna</option>';
			 		foreach ($communes as $commune) {
			 			echo '<option value='.$commune->id.'>'.$commune->nombre_comuna.'</option>';
			 		}
			 	?>
			 </select>

			<select class="form-control" name="availability" required>
	  			<option value="">¿Estás disponible?</option>
	  			<option value=1>Sí</option>	
	  			<option value=0>No</option>
	  		</select>

			<?php
				echo $this->Form->button('Registrarme', ['type' => 'submit', 'class' => 'btn btn-primary']);
				echo $this->Html->link('Cancelar', ['controller' => 'login', 'action' => 'index'], ['class' => 'btn pull-right btn-danger']);
			?>
		</div>
	</div>
</div>

	
</body>
</html>