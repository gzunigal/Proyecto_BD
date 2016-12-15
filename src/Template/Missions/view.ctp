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
                                                    <h2>Encargado - Misiones</h2>
                                                </div>

                                                <div class="panel-body">
                                                    <!-- .row -->
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="panel panel-primary">
                                                                <div class="panel-heading">
                                                                    Misión actual: 
                                                                    <?php 
                                                                        foreach($mission as $m){} 
                                                                        echo $m->nombre_mision; 
                                                                    ?>
                                                                    <a <?= 'href="/tasks/add/'.$m->id.'"' ?> class="btn m-red btn-xs" style="float: right">Nueva Tarea</a>
                                                                </div>
                                                                <form id="formulario" method="post" <?= 'action="/missions/view/'.$m->id.'"' ?>>
																<div class="panel-body">
																	<div class="form-group col-lg-6">
																			<button type="submit" class="btn btn-primary">Solicitar voluntarios</button>
																	</div>
																</div>
                                                                <!-- .panel-heading -->
                                                                <div class="panel-body">
                                                                    <div class="panel-group" id="accordion">
                                                                        <!-- desde aquí el foreach -->
                                                                        <?php foreach($tasks as $t): ?>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading">
                                                                                <h4 class="panel-title">
                                                                                <?php
                                                                                    echo '<a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$t->id.'">Tarea '.$t->id.'</a>';
                                                                                ?>
                                                                                </h4>
                                                                            </div>
                                                                            <?php
                                                                                echo '<div id="collapse'.$t->id.'" class="panel-collapse collapse">'
																			?>
                                                                            	<div class="panel-body">
                                                                                    <div class="form-group col-lg-6">
                                                                                        <label>Nombre: </label>
                                                                                        <label><?= $t->nombre_tarea ?></label>
                                                                                    </div>
																					<div class="form-group col-lg-6">
																						<a class="btn btn-primary">Gestionar voluntarios</a>
																					</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <?php endforeach; ?>
                                                                        <!-- hasta aquí -->
                                                                </div>
                                                                </form>
                                                                <form role="form">
                                                                  <fieldset>

                                                                    <div class="form-group col-lg-12">
                                                                        <label>Ingrese ID de la tarea</label>
                                                                        <input type="number" class="form-control" placeholder="123451">
                                                                    </div>
																	<div class="form-group col-lg-12">
                                                                        <button type="submit" class="btn btn-primary">Buscar</button>
                                                                    </div>
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <a href="/managers/manageMission " class="btn btn-danger">Volver</a>
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