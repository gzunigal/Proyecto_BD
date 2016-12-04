<?php $this->layout = 'login'; ?>
<head>
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="/css/handyhand.css">
</head>


<body>

<!--<div class="btn-group"></div>-->
<div class="panel panel-default">
	<div class="panel-heading">
    	<h1>Iniciar sesión</h1>
  	</div>

  	<div class="panel-body">
		<?php 
			echo $this->Form->create(NULL, ['url' => ['controller' => 'Login', 'action' => 'login']]);
    		echo $this->Form->input('username', ["name"=>"username", "placeholder" => "Nombre de usuario"]);
    		echo $this->Form->input('password', ["name"=>"password", "type"=>"password", "placeholder" => "Contraseña"]);
    		echo $this->Form->button('Log in', ['type' => 'submit', 'class' => 'btn btn-primary']);
    		echo $this->Html->link('Quiero registrarme', ['controller'=>'Login', 'action'=>'register'], 
    			['class' => 'btn btn-success pull-right']);
    		echo $this->Form->end();
    	?>
    		
	</div>
</div>
</body>
</html>