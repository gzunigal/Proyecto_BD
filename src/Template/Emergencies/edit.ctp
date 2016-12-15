<body id="pages">
    <article>
            <div id="pages-form" class="container animated fadeIn">
                <section>
                    <div class="row">
                        <div class="col-md-13 col-md-offset-13">
                            <div class="panel box-shadow">
                                <div class="panel-body center-block">
                                    <div class="pages-header text-center">
                                        <div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
                                        <h4>Administrador - Definir Emergencia</h4>
                                    </div>
                                    <form role="form" method="post" action="/emergencies/add">
                                        <fieldset>
                                            <div class="form-group">
                                                <label for="emergency">Nombre de la emergencia</label>
                                                <?php foreach ($emergency as $e); ?>
                                                <input class="form-control" <?= 'value="'.$e->nombre_emergencia.'"' ?> id="emergency" name="emergency_name" type="text" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="commune">Comuna</label>
                                                <select class="form-control" id="commune" name="emergency_commune" required>
                                                    <option value=0>Seleccione una comuna</option>
                                                    <?php
                                                        foreach ($comunas as $comuna) {
                                                            echo '<option value='.$comuna->id.'>'.$comuna->nombre_comuna.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="datetime">Fecha</label>
                                                <input class="form-control" placeholder="Ej: 2016-05-02 07:05:07" id="datetime" name="emergency_datetime" type="datetime" required autofocus>
                                            </div>
                                            <div class="form-group">
                                                <label for="gravity">Gravedad</label> 
                                                <select class="form-control" id="gravity" name="emergency_gravity" required>
                                                    <option value=0>Indique la gravedad de la emergencia</option>>
                                                    <option value=1>Baja</option>
                                                    <option value=2>Media</option>
                                                    <option value=3>Alta</option>
                                                    <option value=4>Urgente</option>
                                                </select>
                                            </div>
                                            <!-- Esto no es necesario, todas las emergencias parten con el estado "creada".
                                            Por medio de la gestión de la misma se debería poder cambiar el estado. 
                                            <div class="form-group">
                                                <label for="state">Estado</label>
                                                <select class="form-control" id="state" name="emergency_commune">
                                                    <option value=0>Indique el estado de la emergencia</option>>
                                                    <option value=1>Creada</option>
                                                    <option value=2>En progreso</option>
                                                    <option value=3>Finalizada</option>
                                                </select>
                                            </div>
                                            -->
                                            <div class="form-group">
                                                <label for="description">Descripción</label>
                                                <textarea class="form-control" rows="5" name="emergency_description" id="description" placeholder="Escriba una descripción de la emergencia aquí..."></textarea>
                                            </div>
                                            <!-- Change this to a button or input when using this as a form -->
                                                <button class="btn btn-success btn-block" type="submit">Definir</button>
                                                <a class="btn btn-danger btn-block"  href="/administrators/view">Volver</a>
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