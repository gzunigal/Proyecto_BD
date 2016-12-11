<?php $this->layout = 'login'; ?>

    <body id="pages">
    <title>Registro</title>
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
                                    <input type="text" class="form-control" placeholder="User" name="user_nickname" required autofocus>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" placeholder="Nombre" name="user_name" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Apellido</label>
                                    <input type="text" class="form-control" placeholder="Apellido" name="user_surname" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Contraseña</label>
                                    <input type="password" class="form-control" placeholder="Password" name="user_password" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Correo</label>
                                    <input class="form-control" placeholder="E-mail@direccion.com" name="user_email" type="email" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Teléfono</label>
                                    <input class="form-control" placeholder="telefono" type="number" name="user_phone" required>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Run</label>
                                    <input class="form-control" placeholder="12345678-9" name="user_rut" required>
                                </div>

                                <div class="form-group col-lg-12">
                                    <label>Seleccione su comuna</label>
                                    <select class="form-control" name="communes" required>
									 	<?php
									 		echo '<option value="">Elige una comuna</option>';
									 		foreach ($communes as $commune) {
									 			echo '<option value='.$commune->id.'>'.$commune->nombre_comuna.'</option>';
									 		}
									 	?>
									</select>
								</div>
								<div class="form-group col-lg-12">
                                    <label>Disponibilidad</label>
                                    <select class="form-control" name="availability" required>
							  			<option value="">¿Estás disponible?</option>
							  			<option value=1>Sí</option>	
							  			<option value=0>No</option>
							  		</select>
                                </div>

                                <?php
									echo $this->Form->button('Registrarme', ['type' => 'submit', 'class' => 'btn btn-primary']);
									echo $this->Html->link('Cancelar', ['controller' => 'login', 'action' => 'index'], ['class' => 'btn pull-right btn-danger']);
								?>

                                <!-- Change this to a button or input when using this as a form -->
                                
                                <p class="text-center pages-padtop"><span>¿Ya tienes una cuenta?</span> <span><a href="/login/login">Inicia sesión acá</a>.</span></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</article>
</body>