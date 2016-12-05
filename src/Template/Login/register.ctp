<?php $this->layout = 'login'; ?>

    <title>Sistema de administración de voluntarios: Registro</title>
    <link type="text/css" rel="stylesheet" href="/css/handyhand.css">
</head>


<body>

<img style="border:2px solid grey" src="https://userscontent2.emaze.com/images/0dca5196-0bee-457a-aa14-01b69d4fc44e/e33d76ff78b9f524fdcc9a5440746117.jpg" class="img-responsive center-block">
<div class="btn-group"></div>
  	<div class="container">
  		<div class="row">
  				
		  	<div class="panel-body">

		  		<div class="col-md-offset-3 col-md-6">
		  			<h1>Nuevo usuario</h1>
		  		</div>
		  		<?php echo $this->Form->create(NULL, ['url' => ['controller' => 'Login', 'action' => 'register']]); ?>
		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input('Nombre de Usuario', ["name"=>"user_nickname", "placeholder" => "Nickname",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input('Contraseña', ["name"=>"user_password", "type" => "password", "placeholder" => "Contraseña",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input('Nombre', ["name"=>"user_name", "placeholder" => "Nombre",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input('Apellido', ["name"=>"user_surname", "placeholder" => "Apellido",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input('Rut', ["name"=>"user_rut", "placeholder" => "12345678-9",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input('Correo', ["name"=>"user_email", "placeholder" => "correo@host.cl",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input('Teléfono', ["name"=>"user_phone", "type" => "tel", "placeholder" => "123456789",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>
		  		
		  		<div class="col-md-offset-3 col-md-6">
					 <select name="communes" required>
					 	<?php
					 		echo '<option value="">Elige una comuna</option>';
					 		foreach ($communes as $commune) {
					 			echo '<option value='.$commune->id.'>'.$commune->nombre_comuna.'</option>';
					 		}
					 	?>
					 </select>
				</div>

				<div class="col-md-offset-3 col-md-6">
					<select class="form-control" name="availability" required>
			  			<option value="">¿Estás disponible?</option>
			  			<option value=1>Sí</option>	
			  			<option value=0>No</option>
			  		</select>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
					<?php
						echo $this->Form->button('Registrarme', ['type' => 'submit', 'class' => 'btn btn-primary']);
						echo $this->Html->link('Cancelar', ['controller' => 'login', 'action' => 'index'], ['class' => 'btn pull-right btn-danger']);
					?>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>