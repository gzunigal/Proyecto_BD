<body class="scrollable">

<!--<div class="btn-group"></div>-->
<div class="panel panel-default">
	<div class="panel-heading">
    	<h1>Nuevo usuario</h1>
  	</div>

  	<div class="panel-body">
		<?php 
			echo $this->Form->create(null, ['url' => [/*aquí va la acción del controlador*/]]);
    		echo $this->Form->input('', ["placeholder" => "Id de usuario"]);
    		echo $this->Form->input('', ["placeholder" => "Contraseña"]);
    		echo $this->Form->input('', ["placeholder" => "Nombre"]);
    		echo $this->Form->input('', ["placeholder" => "Apellido"]);
    		echo $this->Form->input('', ["placeholder" => "Correo"]);
    		echo $this->Form->input('', ["placeholder" => "Teléfono"]);
    		// regions (o comunas? de una comuna aparentemente se puede determinar la región) sale del controlador, al hacer una consulta al modelo por todas las regiones.
			// echo $this->Form->select('Region', $regions);
			// Estos valores se entregan como enteros?
    		$disponibilidad = ['0' => 'Sí', '1' => 'No'];
    		echo $this->Form->select('¿Estás disponible?', $disponibilidad);
    		echo $this->Form->button('Registrarme', ['type' => 'submit', 'class' => 'btn btn-primary']);
    		echo $this->Html->link('Cancelar', ['controller' => 'Login', 'action' => 'index'], ['class' => 'btn pull-right btn-danger']);
    		echo $this->Form->end();
		?>
	</div>
</div>
</body>
</html>