<?php $this->layout = 'login'; ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register | Deluxe</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Material Design Iconic -->
    <link rel="stylesheet" href="../assets/css/material-design-iconic-font.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">

    <!-- Legit Ripple CSS -->
    <link rel="stylesheet" href="../assets/css/ripple.min.css">

    <!-- Hover CSS -->
    <link rel="stylesheet" href="../assets/css/hover.css">

    <!-- Social Buttons CSS -->
    <link rel="stylesheet" href="../assets/css/social-buttons.css">

    <!-- Deluxe Custom CSS -->
    <link href="../assets/css/deluxe-admin.css" rel="stylesheet">
    <!-- Legit Scrollbar CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="pages">

       <article>
          <div id="pages-form" class="container animated fadeIn">
             <section>
                <div class="row">
                   <div class="col-md-6 col-md-offset-3">
                      <div class="panel box-shadow">
                         <div class="panel-body center-block">
                            <div class="pages-header text-center">
                               <div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
                               <h4>Crear Cuenta</h4>
                           </div>
                           <form role="form" method="post" action="/login/register">
                              <fieldset>

                                <div class="form-group col-lg-12">
                                    <label>Nombre de usuario</label>
                                    <input type="text" class="form-control" placeholder="user" name="user_nickname" required autofocus>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" placeholder="nombre" name="user_name" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" placeholder="apellido" name="user_surname" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" placeholder="password" name="user_password" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Correo</label>
                                    <input class="form-control" placeholder="E-mail" name="user_email" type="email" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Teléfono</label>
                                    <input class="form-control" placeholder="telefono" type="number" name="user_phone" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Run</label>
                                    <input class="form-control" placeholder="run" name="user_rut" required>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label>Seleccione su comuna</label>
                                    <select name="communes" required>
									 	<?php
									 		echo '<option value="">Elige una comuna</option>';
									 		foreach ($communes as $commune) {
									 			echo '<option value='.$commune->id.'>'.$commune->nombre_comuna.'</option>';
									 		}
									 	?>
									</select>
								</div>

								<div class="form-group">
                                    <select class="form-control" name="availability" required>
							  			<option value="">¿Estás disponible?</option>
							  			<option value=1>Sí</option>	
							  			<option value=0>No</option>
							  		</select>
                                </div>

                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <span>
                                                <input type="checkbox">
                                                <a>¿Disponible?</a>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <?php
									echo $this->Form->button('Registrarme', ['type' => 'submit', 'class' => 'btn btn-primary']);
									echo $this->Html->link('Cancelar', ['controller' => 'login', 'action' => 'index'], ['class' => 'btn pull-right btn-danger']);
								?>

                                <!-- Change this to a button or input when using this as a form -->
                                
                                <p class="text-center pages-padtop"><span>¿Ya tienes una cuenta?</span> <span><a href="Login.html">Inicia sesión acá</a>.</span></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</article>

<!-- jQuery -->
<script src="../assets/js/jquery-2.2.4.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Legit Ripple JavaScript -->
<script src="../assets/js/ripple.min.js"></script> 

<!-- Pages JavaScript -->
<script src="../assets/js/pages.js"></script>
</body>
</html>

