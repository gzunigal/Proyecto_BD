<head>
    <title>Login</title>
</head>


<body class="scrollable">

<img style="border:2px solid grey" src="http://www.smartienda.cl/estampados/clientes/11388/MENSAJE_CENTRO_FOTO1.jpg" class="img-responsive center-block">
<!--<div class="btn-group"></div>-->
<div class="panel panel-default">
	<div class="panel-heading">
    	<h1>Iniciar sesión</h1>
  	</div>

  	<div class="panel-body">
		<?php 
			echo $this->Form->create(null, ['url' => ['controller' => 'Login', 'action' => 'login']]);
    		echo $this->Form->input('Nombre de usuario');
    		echo $this->Form->input('Contraseña');
    		echo $this->Form->button('Log in', ['type' => 'submit', 'class' => 'btn btn-primary']);
    		echo $this->Form->end();
		?>
		<hr>
		<?php 
			echo $this->Html->link('Quiero registrarme', 'http://www.google.cl', ['class' => 'btn btn-success']); 
		?>
	</div>
</div>
</body>
</html>