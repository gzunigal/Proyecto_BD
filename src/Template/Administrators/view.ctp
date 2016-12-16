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
                                                            <a href="/emergencies/add" class="btn m-red btn-xs" style="float: right">Nueva Emergencia</a>
                                                        </div>
                                                        <!-- .panel-heading -->
                                                        <form name="formulario" id="formulario" method="post">
                                                        <div class="panel-body">
                                                            <div class="panel-group" id="accordion">
                                                                <?php
                                                                    foreach($emergencies as $emmergencie)
                                                                    {
                                                                        echo'<div class="panel panel-default">
                                                                                <div class="panel-heading">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$emmergencie->id.'">'.$emmergencie->nombre_emergencia.'</a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="collapse'.$emmergencie->id.'" class="panel-collapse collapse">
                                                                                    <div class="panel-body">
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Nombre: '.$emmergencie->nombre_emergencia.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Fecha: </label>
                                                                                            <label>'.$emmergencie->fecha_emergencia.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <label>Lugar: </label>
                                                                                            <label>'.$emmergencie->commune->nombre_comuna.'</label>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">
                                                                                            <div class="dropdown">
                                                                                            <label>Estado de la emergencia</label>
                                                                                                <select name="emergency_status" id='.$emmergencie->id.'>
                                                                                                    <option value=0 '; 
                                                                                                    if($emmergencie->estado_emergencia == 0) echo 'selected';
                                                                                                    echo'>Creada</option>
                                                                                                    <option value=1 '; 
                                                                                                    if($emmergencie->estado_emergencia == 1) echo 'selected';
                                                                                                    echo'>En proceso</option>
                                                                                                    <option value=2 ';
                                                                                                    if($emmergencie->estado_emergencia == 2) echo 'selected';
                                                                                                    echo'>Finalizada</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group col-lg-6">';
                                                                        if($emmergencie->estado_emergencia == 1) echo $this->Html->link('Gestionar', ['controller' => 'emergencies', 'action' => 'view', $emmergencie->id], ['class' => 'btn btn-primary']);
                                                                        echo            '</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>';
                                                                    }
                                                                ?>
                                                            </div>

                                                        </div>
                                                        </form>
                                                            </div>
                                                        </div>
                                                        <!-- .panel-body -->
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <a href="/administrators/index" class="btn btn-danger">Volver</a>
                                                            </div>
                                                        <!-- cierra row -->
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
    $("select[name='emergency_status']").on('focusin', function(){
        $(this).data('val', this.value);
    });

    
    $("select[name='emergency_status']").on('change', function(){
        prev = $(this).data('val');
        id_elemento = this.id;
        if(prev == 0 && this.value == 2)
        {
            alert('Aún no se ha iniciado la emergencia.');
            $(this).data('val', prev);
            this.value = prev;
        }
        else if(prev == 2)
        {
            alert('La emergencia ya ha finalizado.');
            $(this).data('val', prev);
            this.value = prev;
        }
        else if(this.value == 0)
        {
            alert('La emergencia está en progreso');
            this.value = prev;
            $(this).data('val', prev);
        }
        else if(this.value == 1)
        {
            pop_up = confirm('Desea iniciar la emergencia?');
            if(pop_up == true)
            {
                $('<input />').attr('type', 'hidden')
                    .attr('name', "id")
                    .attr('value', this.id)
                    .appendTo('#formulario');
                $('<input />').attr('type', 'hidden')
                    .attr('name', "cambio")
                    .attr('value', 1)
                    .appendTo('#formulario');
                $("#formulario").submit();
            }
            else
            {
                this.value = prev;
                $(this).data('val', prev);
            }
        }
        else if(this.value == 2)
        {
            pop_up = confirm('Desea terminar la emergencia?\nUna vez finalizada esta no se puede reiniciar.');
            if(pop_up == true)
            {
                $('<input />').attr('type', 'hidden')
                    .attr('name', "id")
                    .attr('value', this.id)
                    .appendTo('#formulario');
                $('<input />').attr('type', 'hidden')
                    .attr('name', "cambio")
                    .attr('value', 2)
                    .appendTo('#formulario');
                $("#formulario").submit();
            }
            else
            {
                this.value = prev;
                $(this).data('val', prev);
            }
        }
    });
</script>