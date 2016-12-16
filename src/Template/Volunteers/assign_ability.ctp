<title>Asignar Habilidades</title>
<body id="pages">
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
                                            <h2>Voluntario - Elegir habilidades que pueda desarrollar</h2>
                                        </div>
                                        <div class="panel-body">
                                             <!-- .row -->

                                            <div class="row">

                                            <form method="post" action="/volunteers/assignAbility/<?= $idVol ?>">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-primary">
                                                        <!-- .panel-heading -->
                                                        <div class="panel-body">
                                                            <input type="hidden" name="ability_user" value=<?= $idVol ?>>

                                                            <div class="form-group col-lg-12">
                                                                <label>Habilidades actuales</label>
                                                                <select name="ability_new" multiple class="form-control">
                                                                    <?php foreach ($abilities as $a):?>
                                                                        <option value=<?= $a->id ?>><?= $a->nombre_habilidad ?></option>
                                                                       <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            
                                                            <div class="form-group col-lg-12">
                                                                <label>Habilidades de la tarea</label>
                                                                <select multiple class="form-control">
                                                                    <?php foreach ($userAbilities as $uA):?>
                                                                        <option value=<?= $uA->id ?>><?= $uA->ability->nombre_habilidad ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                        <!-- .panel-body -->
                                                        <div class="col-lg-12">
                                                                <a href="/volunteers/index" class="btn btn-danger">Volver</a>
                                                                <button type="submit" class="btn btn-primary pull-right">Agregar</button>
                                                        </div>
                                                </form>
                                                    </div>  
                                                </div>  <!-- /.panel body-->
                                            </div> <!-- panel default -->
                                        </div>  <!-- /.col-lg-12 -->
                                    </div>  <!-- /.row --> 
                                </div>
                            </div>  <!-- panel dody -->
                        </div>
                    </div>  <!-- col-md-14 col-md-offset-14 -->
                </div>  <!-- row -->
            </section>
        </div>  <!-- container fadeIn -->
    </article>
</body>