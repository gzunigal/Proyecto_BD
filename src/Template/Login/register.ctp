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
		  				echo $this->Form->input(NULL, ["name"=>"user_nickname", "placeholder" => "Nickname",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input(NULL, ["name"=>"user_name", "placeholder" => "Nombre",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input(NULL, ["name"=>"user_surname", "placeholder" => "Apellido",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input(NULL, ["name"=>"user_password", "type" => "password", "placeholder" => "Contraseña",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input(NULL, ["name"=>"user_email", "placeholder" => "Correo",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<?php 
		  				echo $this->Form->input(NULL, ["name"=>"phone", "type" => "tel", "placeholder" => "Teléfono",'required' => true, 'allowEmpty' => false]);
		  			?>
		  		</div>
		  		<!--
		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="commune" placeholder="Comuna">
		  		</div>
				-->
		  		<div class="col-md-offset-3 col-md-6">
					 <select name="regions" required>
					 	<?php
					 		echo '<option value=0>Elige una region</option>';
					 		foreach ($regions as $region) {
					 			echo '<option value='.$region->id.'>'.$region->nombre_region.'</option>';
					 		}
					 	?>
					 </select>
				</div>

				<div class="col-md-offset-3 col-md-6">
					<select class="form-control" name="availability">
			  			<option>¿Estás disponible?</option>
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