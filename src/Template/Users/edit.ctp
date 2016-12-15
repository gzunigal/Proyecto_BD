<head>
    <title>Perfil</title>
</head>

<body>
    <article>
        <div id="pages-form" class="container animated fadeIn">
            <section>
                <div class="row">
                    <div class="col-md-14 col-md-offset-14">
                        <div class="panel box-shadow">
                            <div class="panel-body center-block">
                                <div class="pages-header text-center">
                                    <h2>Perfil</h2>
                                </div>
                                <main>
                                    <div class="w3-container">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="profile-sidebar box-shadow" style="min-height: inherit;">
                                                    <div class="row">
                                                        <div class="col-sm-4 col-sm-offset-4 col-md-12 col-md-offset-0">
                                                            <img class="img-responsive center-block" src="/img/avatar.jpg" alt="">
                                                            <div class="profile-username text-center">
                                                                <p><?=$User['name'].' '.$User['surname']?></p>
                                                            </div>
                                                            <div class="profile-job text-center">
                                                                <?php
                                                                    if($User['admin']) echo "<p>Administrador</p>";
                                                                    if($User['isEncargado']) echo "<p>Administrador</p>";
                                                                    echo "<p>Voluntario</p>";
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-9">
                                                <div class="panel box-shadow">
                                                    <div class="panel-body center-block">
                                                        <form method="post" role="form">
                                                            <fieldset>
                                                                <div class="row"><div class="col-sm-12">

                                                                <div class="form-group col-lg-6">
                                                                    <label>Nombre</label>
                                                                    <input type="text" name="user_name" class="form-control" placeholder="" value="<?=$User['name']?>" required>
                                                                </div>

                                                                <div class="form-group col-lg-6">
                                                                    <label>Apellido</label>
                                                                    <input type="text" name="user_surname" class="form-control" placeholder="" value="<?=$User['surname']?>" required>
                                                                </div>

                                                                <div class="form-group col-lg-6">
                                                                    <label>Correo electrónico</label>
                                                                    <input class="form-control" placeholder="" name="user_email" type="email" value="<?=$User['email']?>" required>
                                                                </div>
                                                                <div class="form-group col-lg-6">
                                                                    <label>Seleccione su comuna</label>
                                                                    <select name="communes" class="form-control">
                                                                        <?php
                                                                            foreach ($communes as $comuna) {
                                                                                echo "<option value=".$comuna->id." ".(($User["commune_id"]==$comuna->id)?"selected":"").">".$comuna->nombre_comuna."</option>";
                                                                            }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                                </div></div>

                                                                <div class="row"><div class="col-sm-12">
                                                                <div class="form-group col-lg-6">
                                                                    <label>Habilidades actuales</label>
                                                                    <select multiple class="form-control" style="height: 118px">
                                                                    <?php
                                                                        foreach ($habUser as $hab) {
                                                                            echo "<option >".$hab->Ability->nombre_habilidad."</option>";
                                                                        }
                                                                    ?>
                                                                 </select>
                                                                 <button class="btn m-blue btn-block">Gestionar</button>
                                                                 </div>

                                                             </div></div>
                                                         </div>




                                                         <!-- Change this to a button or input when using this as a form -->
                                                         <button class="btn btn-success btn-block" type="submit">Actualizar</button>
                                                     </fieldset>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>


                                 </div>


                             </div>  
                             <!-- /#page-wrapper --></div>

                         </div>
                     </div>
                 </div>
             </div>
         </section>
     </div>
 </article>

</main>
</body>
</html>
