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
                                                    <h2>Administrador - Definir Misión</h2>
                                                </div>
                                                <div class="panel-body">

                                                    <!-- .row -->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                    <!-- .panel-body -->
                                                    <?= '<form role="form" method="post" action="/missions/add/'.$idM.'">'?>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    Definir misión
                                                                </div>
                                                                <?php foreach ($mision as $m) {} ?>
                                                                <div class="panel-body">
                                                                    <form role="form">
                                                                      <fieldset>
                                                                        <div class="form-group col-lg-12">
                                                                        <label>Ingrese el nombre de la misión</label>
                                                                            <input type="text" name="mission_name" class="form-control" <?= 'value="'.$m->nombre_mision.'"' ?> required> 
                                                                        </div>
                                                                        <div class="form-group col-lg-12">
                                                                        <label>Seleccione un encargado</label>
                                                                            <select class="form-control" name="mission_manager" required>
                                                                                <option value=0>Seleccione un voluntario como encargado</option>
                                                                                <?php
                                                                                    foreach ($users as $u) 
                                                                                    {
                                                                                        echo '<option value='.$u->id;
                                                                                        if($m->user_id == $u->id) echo ' selected ';
                                                                                        echo '>'.$u->name.' '.$u->surname.'</option>';
                                                                                    }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group col-lg-12">
                                                                        <a type="submit" class="btn btn-danger pull-left" <?= 'href="/emergencies/view/'.$idEm.'"' ?>>Volver</a>
                                                                        <button type="submit" class="btn btn-primary pull-right">Definir</button>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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