<!DOCTYPE html>
<html lang="en">
<?php $this->layout = 'login'; ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administrar emergencias</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    
    <!-- Metis Menu CSS -->
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet" type="text/css">

    <!-- Material Design Iconic -->
    <link rel="stylesheet" href="../assets/css/material-design-iconic-font.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">

    <!-- Legit Ripple CSS -->
    <link rel="stylesheet" href="../assets/css/ripple.min.css">

    <!-- Hover CSS -->
    <link rel="stylesheet" href="../assets/css/hover.css">

    <!-- Sweet Alert CSS -->
    <link rel="stylesheet" href="../assets/css/sweetalert.min.css">

    <!-- Deluxe Custom CSS -->
    <link href="../assets/css/deluxe-admin.css" rel="stylesheet">
    <!-- Legit Scrollbar CSS -->
    <!-- <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css"> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="pages">
        <article>
            <div id="pages-form" class="container animated fadeIn">
                <section>
                    <div class="row">
                        <div class="col-md-14 col-md-offset-14">
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
                                                                    Listado de emergencia
                                                                    <a href="/emergencies/add">
                                                                    <button class="btn m-red btn-xs" style="float: right">Nueva Emergencia</button>
                                                                    </a>
                                                                </div>
<!-- .panel-heading -->
<div class="panel-body">
    <div class="panel-group" id="accordion">

        <?php
            foreach($emergencies as $emmergencie)
            {
        echo   '<div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Emergencia '.$emmergencie->id.'</a>
                        </h4>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse in">
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
                                                                                    <a href="/administrator/gestionarPersona">
                                                                                    <button type="submit" class="btn btn-primary">Gestionar</button>
                                                                                    </a>
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
                                </div>  <!-- panel dody -->
                        </div>  <!-- col-md-14 col-md-offset-14 -->
                    </div>  <!-- row -->
                </section>
            </div>  <!-- container fadeIn -->
        </article>

    <!-- jQuery -->
    <script src="../assets/js/jquery-2.2.4.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../assets/js/bootstrap.min.js"></script>

    </body>
</html>