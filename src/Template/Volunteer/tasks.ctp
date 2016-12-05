<body class="design">

<img style="border:2px solid grey" src="/img/Gente_voluntaria.png" class="img-responsive center-block">

<div class="btn-group"></div>


<div class="container">
  <div class="row">
    <div class="panel-body">
      <h2>
        <center>
          Mis tareas
        </center>
      </h2>
      <div class="tareas">
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Tarea 1
        </div>
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Tarea 2
        </div>
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Tarea 3
        </div>
        <div type="button" class="btn btn-default btn-block" style="text-align: left;">
          Tarea 4
        </div>
      </div>
    </div>
    <?php echo $this->Html->link('Volver', ['controller' => 'volunteer', 'action' => 'index'], ['class' => 'btn pull-left btn-danger']); ?>
  </div>

</div>

  
</body>