<?php $this->layout = 'login'; ?>
<title>Sistema de Voluntarios - Login</title>
<body id="pages">

    <article>
            <div id="pages-form" class="container animated fadeIn">
                <section>
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <div class="panel box-shadow">
                                <div class="panel-body center-block">
                                    <div class="pages-header text-center">
                                        <div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
                                        <h4>Iniciar sesión</h4>
                                    </div>
                                    <form role="form" method="post" action="/login/login">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Nombre de Usuario" name="username" type="text" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Contraseña" name="password" type="password" value="" required>
                                            </div>

                                            <!-- Change this to a button or input when using this as a form -->
                                            <button class="btn btn-success btn-block" type="submit">Login</button>
                                            <p class="text-center pages-padtop">

                                            <span>¿No tienes cuenta?</span> 
                                            <span><a href="/login/register">Registrate aquí</a>.</span>
                                            </p>
                                            </div>
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
