<title>Administrar emergencia</title>
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
                                            <h2>Administración - Gestionar emergencias</h2>
                                        </div>
                                        <div class="panel-body">
                                             <!-- .row -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            Emergencia actual:
                                                            <?php
                                                                foreach($emergency as $e){} 
                                                                echo $e->nombre_emergencia;
                                                            ?>
                                                        </div>
                                                        <!-- .panel-heading -->
                                                        <div class="panel-body">
                                                            <div class="panel-group" id="accordion">
                                                                <?php
                                                                    foreach($missions as $m)
                                                                    {
                                                                        echo'<div class="panel panel-default">
                                                                                <div class="panel-heading">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$m->id.'">Misión '.$m->id.'</a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="collapse'.$m->id.'" class="panel-collapse collapse">
                                                                                    <div class="panel-body">
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Nombre: '.$m->nombre_mision.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">';
                                                                        echo $this->Html->link('Gestionar', ['controller' => 'missions', 'action' => 'edit',$e->id, $m->id], ['class' => 'btn btn-primary']);
                                                                        echo            '</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                    }
                                                                ?>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <a <?= 'href="/missions/add/'.$e->id.'"' ?> class="btn btn-primary">Añadir misión</a>
                                                                <a <?= 'href="/emergencies/edit/'.$e->id.'"' ?> class="btn btn-primary pull-right">Editar emergencia</a>
                                                            </div>
                                                        </div>
                                                            </div>
                                                        </div>
                                                        <!-- .panel-body -->
                                                        <div class="row">
                                                            
                                                        <!-- cierra row -->
                                                        </div>
                                                        <div class="col-lg-12">
                                                                <a href="/administrators/view" class="btn btn-danger">Volver</a>
                                                        </div>
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