<body class="design" style="padding-top: 80px">
	<img style="border:2px solid grey" src="/img/Gente_voluntaria.png" class="img-responsive center-block">

	<div class="btn-group"></div>


	<hr>
	<div class="container">
		<div class="pull-left">
			<?php 
				echo $this->Html->link('Solicitudes', ['controller' => 'volunteers', 'action' => 'request'], ['class' => 'btn btn-primary']); 
			?>
		</div>
	    <div class="pull-right">
	     	<?php 
				echo $this->Html->link('Documentos guía', ['controller' => 'volunteers', 'action' => 'documents'], ['class' => 'btn btn-primary']); 
			?>
		</div>
	    <div class="pull-center">
	      	<?php 
				echo $this->Html->link('Tareas', ['controller' => 'volunteers', 'action' => 'tasks'], ['class' => 'btn btn-primary']); 
			?>
		</div>
	</div>
</body>