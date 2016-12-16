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
                                                    <form role="form" method="post" <?= 'action="/tasks/assign/'.$idMision.'/'.$idTask.'"' ?>>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    Definir habilidad
                                                                </div>

                                                                <input type="hidden" name="task" value="<?= $idTask ?>">

                                                                <div style="margin-top: 20px" class="form-group col-lg-12">
                                                                    <label>Habilidades disponibles</label>
                                                                    <select multiple class="form-control" name="all_abilities">
                                                                        <?php
                                                                            foreach ($abilities as $a) {
                                                                                echo '<option value='.$a->id.'>'.$a->nombre_habilidad.'</option>';
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>

                                                                <div style="margin-top: 20px" class="form-group col-lg-12">
                                                                    <label>Nivel de Habilidad</label>
                                                                    <select multiple class="form-control" name="lvl">
                                                                        <option value=1>Baja</option>
                                                                        <option value=2>Media</option>
                                                                        <option value=3>Alta</option>
                                                                    </select>
                                                                </div>

                                                                <div style="margin-top: 20px" class="form-group col-lg-12">
                                                                    <label>Habilidades actuales</label>
                                                                    <select multiple class="form-control">
                                                                        <?php
                                                                            foreach ($taskabilities as $t) {
                                                                                echo '<option>'.$t->nombre_habilidad.'</option>';
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn m-blue btn-block" type="submit">Agregar</button>
                                                    <a <?= 'href="/missions/view/'.$idMision.'"' ?> class="btn btn-block btn-danger">Volver</a>
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