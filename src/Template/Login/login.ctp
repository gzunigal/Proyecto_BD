
<title>Sistema de administración de voluntarios: Login</title>

<body>

<!--<div class="btn-group"></div>-->
<div class="panel panel-default" style="margin-top: 50px">
	<div class="panel-heading" style="text-align: center;">
    	<h1>Iniciar sesión</h1>
  	</div>

  	<div class="panel-body form-center">
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