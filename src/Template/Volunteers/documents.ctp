<body class="design">

<img style="border:2px solid grey" src="/img/Gente_voluntaria.png" class="img-responsive center-block">

<div class="btn-group"></div>


<div class="container">
  <div class="row">
    <div class="panel-body">
      <h2>
        <center>
          Mis documentos
        </center>
      </h2>
      <div class="tareas">
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Documento 1
        </div>
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Documento 2
        </div>
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Documento 3
        </div>
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Documento 4
        </div>
      </div>
    </div>
    <?php echo $this->Html->link('Volver', ['controller' => 'volunteers', 'action' => 'index'], ['class' => 'btn pull-left btn-danger']); ?>
  </div>
  <br>
</div>

  