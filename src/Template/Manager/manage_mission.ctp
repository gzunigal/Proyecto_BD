<?php $this->layout = 'login'; ?>

<title>Administrar misiones</title>
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
                                            <h2>Misiones</h2>
                                        </div>
                                        <div class="panel-body">
                                             <!-- .row -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            Listado de misiones
                                                        </div>
                                                        <!-- .panel-heading -->
                                                        <div class="panel-body">
                                                            <div class="panel-group" id="accordion">
                                                                <?php
                                                                    foreach($missions as $mission)
                                                                    {
                                                                        echo'<div class="panel panel-default">
                                                                                <div class="panel-heading">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$mission->id.'">Misión '.$mission->id.'</a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="collapse'.$mission->id.'" class="panel-collapse collapse">
                                                                                    <div class="panel-body">
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Nombre: '.$mission->emergency->nombre_emergencia.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Lugar: </label>
                                                                                            <label>'.$mission->emergency->commune->nombre_comuna.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">';
                                                                        echo $this->Html->link('Gestionar', ['controller' => 'missions', 'action' => 'view', $mission->id], ['class' => 'btn btn-primary']);
                                                                        echo            '</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                            </div>
                                                        </div>
                                                        <!-- .panel-body -->
                                                        <div class="row">
                                                            
                                                        <!-- cierra row -->
                                                        </div>
                                                        <div class="col-lg-12">
                                                                <a href="/administrator/index" class="btn btn-danger">Volver</a>
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