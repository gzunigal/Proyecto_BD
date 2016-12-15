    <article>
            <div id="pages-form" class="container animated fadeIn">
                <section>
                    <div class="row">
                        <div class="col-md-14 col-md-offset-14">
                            <div class="panel box-shadow">
                                <div class="panel-body center-block">

                                    <!-- .row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h2>Encargado - Definir Habilidad</h2>
                                                </div>
                                                <div class="panel-body">

                                                    <!-- .row -->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                    <!-- .panel-body -->
                                                    <form role="form" method="post" action="/abilities/add">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    Definir habilidad
                                                                </div>

                                                                <div style="margin-top: 20px" class="form-group col-lg-12">
                                                                    <label>Nombre de la habilidad</label>
                                                                    <input type="text" name="ability_name" class="form-control" placeholder="Ej: Cavar, Volar" required>
                                                                </div>
                                                                <div style="margin-top: 20px" class="form-group col-lg-12">
                                                                    <label for="description">Descripción</label>
                                                                    <textarea class="form-control" rows="5" name="ability_description" id="description" placeholder="Escriba una descripción de la habilidad aquí..."></textarea>
                                                                </div>
                                                                <div style="margin-top: 20px" class="form-group col-lg-12">
                                                                    <label>Habilidades actuales</label>
                                                                    <select multiple class="form-control">
                                                                        <?php
                                                                            foreach ($abilities as $a) {
                                                                                echo '<option>'.$a->nombre_habilidad.'</option>';
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn m-blue btn-block" type="submit">Agregar</button>
                                                    <a href="/managers/index" class="btn btn-block btn-danger">Volver</a>
                                                </div>
                                                </form>
                                            </div>
                                            <!-- /.panel -->
                                        </div>
                                        <!-- /.col-lg-12 -->
                                    </div>
                                    <!-- /.row -->
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
</div>
</article>