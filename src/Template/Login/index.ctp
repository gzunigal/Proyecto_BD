<?php $this->layout = 'user'; ?>
<head>
    <title>Login</title>
</head>


<body class="scrollable">

<!--<div class="btn-group"></div>-->
<div class="panel panel-default">
	<div class="panel-heading">
    	<h1>Iniciar sesión</h1>
  	</div>

  	<div class="panel-body">
		<?php 
			echo $this->Form->create(null, ['url' => ['controller' => 'Login', 'action' => 'login']]);
    		echo $this->Form->input('', ["placeholder" => "Nombre de usuario"]);
    		echo $this->Form->input('', ["placeholder" => "Contraseña"]);
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