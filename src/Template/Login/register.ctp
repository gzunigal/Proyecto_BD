<?php $this->layout = 'login'; ?>
<head>
    <title>Registro</title>
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

		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="nickname" placeholder="Nickname">
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="name" placeholder="Nombre">
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="surname" placeholder="Apellido">
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="password" placeholder="Contraseña">
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="email" placeholder="Correo">
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="phone" placeholder="Teléfono">
		  		</div>
		  		<!--
		  		<div class="col-md-offset-3 col-md-6">
		  			<input type="text" class="form-control" name="commune" placeholder="Comuna">
		  		</div>
				-->
		  		<div class="col-md-offset-3 col-md-6">
					<select class="form-control" name="region">
						<option value="0">Selecciona una región</option>
					</select>
				</div>

				<div class="col-md-offset-3 col-md-6">
					<select class="form-control" name="availability">
			  			<option>¿Estás disponible?</option>
			  			<option>Sí</option>	
			  			<option>No</option>
			  		</select>
		  		</div>

		  		<div class="col-md-offset-3 col-md-6">
					<a href="#" class="btn btn-primary" >Registrarme</a>
					<?php
						echo $this->Html->link('Cancelar', ['controller' => 'login', 'action' => 'index'], ['class' => 'btn pull-right btn-danger']);
					?>
				</div>
			</div>
		</div>
	</div>

	
</body>
</html>