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
                                                    <h2>Encargado - Enviar Solicitud</h2>
                                                </div>

                                                <div class="panel-body">
                                                    <!-- .row -->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    Tarea actual: 
                                                                    <?php 
                                                                        foreach($task as $t){} 
                                                                        echo $t->nombre_tarea; 
                                                                    ?>
                                                                </div>
                                                                <form id="formulario" method="post" <?= 'action="/tasks/select/'.$t->id.'"' ?>>
                                                                <!-- .panel-heading -->
                                                                <div class="panel-body">
                                                                    <div class="panel-group" id="accordion">
                                                                        <!-- desde aquí el foreach -->
                                                                        <input type="hidden" name="request_name" value="Ayuda en tarea <?= $t->nombre_tarea ?>">
                                                                        <input type="hidden" name="request_task" value=<?= $t->id ?>>
                                                                                    
                                                                        <?php foreach($candidatos as $c): ?>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                <?php
                                                                                    echo '<a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$c->id.'">Voluntario '.$c->id.'</a>';
                                                                                ?>
                                                                                </h4>
                                                                            </div>
                                                                            <?php
                                                                                echo '<div id="collapse'.$c->id.'" class="panel-collapse collapse">'
																			?>
                                                                            	<div class="panel-body">
                                                                                    <div class="form-group col-lg-6">
                                                                                        <label>Nombre: </label>
                                                                                        <label><?= $c->name.' '.$c->surname ?></label>
                                                                                    </div>
																					<div class="form-group col-lg-6">
																					<input type="hidden" name="request_user" value=<?= $c->id ?>>
                                                                                    
                                                                                    </div>
                                                                                    <a name="request" type="submit" class="btn btn-primary pull-right">Enviar Solicitud</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php endforeach; ?>
                                                                        <!-- hasta aquí -->
                                                                </div>
                                                                </form>
                                                        </div>
                                                    </div>
                                                    <a href="/missions/view/<?= $idMision ?>" class="btn btn-danger">Volver</a>
                                                    <!-- .panel-body -->                                                    
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