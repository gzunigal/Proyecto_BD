<title>Administrar solicitudes</title>
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
                                            <h2>Solicitudes</h2>
                                        </div>
                                        <div class="panel-body">
                                             <!-- .row -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            Listado de solicitudes
                                                        </div>
                                                        <form method="post" id="formulario" action="/volunteers/request/<?= $idUser ?>">
                                                        <!-- .panel-heading -->
                                                        <div class="panel-body">
                                                            <div class="panel-group" id="accordion">
                                                                <?php foreach($requests as $r): ?>
                                                                        <div class="panel panel-default">
                                                                                <div class="panel-heading">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $r->id ?>">Solicitud:  "<?=$r->nombre_solicitud?>"</a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="collapse<?= $r->id ?>" class="panel-collapse collapse">
                                                                                    <div class="panel-body">
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Nombre: <?= $r->nombre_solicitud ?></label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Tarea: </label>
                                                                                            <label><?= $r->task->nombre_tarea ?></label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                        </div>
                                                                                        <button name="reject_button" id=<?= $r->id ?> class="btn btn-danger pull-right">Rechazar Solicitud</button>
                                                                                        <button name="accept_button" id=<?= $r->id ?> class="btn btn-primary pull-left">Aceptar Solicitud</button>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            
                                                                <?php endforeach; ?>

                                                            </div>
                                                        </div>
                                                        </form>
                                                            </div>
                                                        </div>
                                                        <!-- .panel-body -->
                                                        <div class="row">
                                                            
                                                        <!-- cierra row -->
                                                        </div>
                                                        <div class="col-lg-12">
                                                                <a href="/managers/index" class="btn btn-danger">Volver</a>
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

<script type="text/javascript">
        $("button[name='reject_button']").on('click', function(){
            valor = this.id;
            $('<input />').attr('type', 'hidden')
                    .attr('name', "r_del")
                    .attr('value', valor)
                    .appendTo('#formulario');
            $('<input />').attr('type', 'hidden')
                    .attr('name', "status")
                    .attr('value', 0)
                    .appendTo('#formulario');
            $("#formulario").submit();
        });

        $("button[name='accept_button']").on('click', function(){
            valor = this.id;
            $('<input />').attr('type', 'hidden')
                    .attr('name', "r_acc")
                    .attr('value', valor)
                    .appendTo('#formulario');
            $('<input />').attr('type', 'hidden')
                    .attr('name', "status")
                    .attr('value', 1)
                    .appendTo('#formulario');
            $("#formulario").submit();
        });
    </script>