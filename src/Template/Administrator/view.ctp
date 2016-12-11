<title>Administrar emergencias</title>
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
                                            <h2>Emergencias</h2>
                                        </div>
                                        <div class="panel-body">
                                             <!-- .row -->
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-primary">
                                                        <div class="panel-heading">
                                                            Listado de emergencias
                                                            <button type="button" class="btn m-red btn-xs" style="float: right">Nueva Emergencia</button>
                                                        </div>
                                                        <!-- .panel-heading -->
                                                        <div class="panel-body">
                                                            <div class="panel-group" id="accordion">
                                                                <?php
                                                                    foreach($emergencies as $emmergencie)
                                                                    {
                                                                        echo'<div class="panel panel-default">
                                                                                <div class="panel-heading">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$emmergencie->id.'">Emergencia '.$emmergencie->id.'</a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="collapse'.$emmergencie->id.'" class="panel-collapse collapse">
                                                                                    <div class="panel-body">
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Nombre: '.$emmergencie->nombre_emergencia.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Fecha</label>
                                                                                            <label>'.$emmergencie->fecha_emergencia.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Lugar</label>
                                                                                            <label>'.$emmergencie->commune_id.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <button type="submit" class="btn btn-primary">Gestionar</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                                <form role="form">
                                                                    <fieldset>
                                                                        <div class="form-group col-lg-12">
                                                                            <label>Ingrese ID de la emergencia</label>
                                                                            <input type="number" class="form-control" placeholder="">
                                                                            <br></br>
                                                                            <button type="submit" class="btn btn-primary">Buscar</button>
                                                                        </div>
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <!-- .panel-body -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="panel panel-primary">
                                                                    <div class="panel-heading">
                                                                        Gestionar personas
                                                                    </div>
                                                                    <div class="panel-body">
                                                                        <form role="form">
                                                                            <fieldset>
                                                                                <div class="form-group col-lg-12">
                                                                                    <label>Ingrese el RUT de la persona</label>
                                                                                    <input type="number" class="form-control" placeholder="">
                                                                                    <br></br>
                                                                                    <button type="submit" class="btn btn-primary">Gestionar</button>
                                                                                </div>
                                                                            </fieldset>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  <!-- cierra row -->
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

