<?php $this->layout = 'login'; ?>
<head>
    <title>Login: Handy Hand</title>
    <link type="text/css" rel="stylesheet" href="/css/handyhand.css">
</head>


<body style="padding-top: 100px">

<!--<div class="btn-group"></div>-->
<div class="panel panel-default">
	<div class="panel-heading">
    	<h1 style="text-align: center;">Iniciar sesión</h1>
  	</div>

  	<div class="panel-body">
        <div class="col-md-offset-2 col-md-8">
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
</div>
</body>
</html>