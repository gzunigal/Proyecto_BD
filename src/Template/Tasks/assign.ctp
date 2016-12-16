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
                                            <h2>Encargado - Asignar habilidades a tareas</h2>
                                        </div>
                                        <div class="panel-body">
                                             <!-- .row -->

                                            <div class="row">

                                            <form method="post" action="/tasks/assign/<?= $idMision.'/'.$idTask ?> ">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-primary">
                                                        <!-- .panel-heading -->
                                                        <div class="panel-body">
                                                            <input type="hidden" name="ability_task" value=<?= $idTask ?>>

                                                            <div class="form-group col-lg-12">
                                                                <label>Habilidades actuales</label>
                                                                <select name="ability_new" multiple class="form-control">
                                                                    <?php foreach ($abilities as $a):?>
                                                                        <option value=<?= $a->id ?>><?= $a->nombre_habilidad ?></option>
                                                                       <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-12">
                                                                <label>Nivel requerido</label>
                                                                <select name="ability_lvl" class="form-control">
                                                                    <option value=1>Bajo </option>
                                                                    <option value=2>Medio</option>
                                                                    <option value=3>Alto</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-lg-12">
                                                                <label>Habilidades de la tarea</label>
                                                                <select multiple class="form-control">
                                                                    <?php foreach ($taskAbilities as $tA):?>
                                                                        <option value=<?= $tA->id ?>><?= $tA->ability->nombre_habilidad ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                                        <!-- .panel-body -->
                                                        <div class="col-lg-12">
                                                                <a href="/missions/view/<?= $idMision ?>" class="btn btn-danger">Volver</a>
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