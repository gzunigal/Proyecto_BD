<article>
    		<div id="pages-form" class="container animated fadeIn">
    			<section>
    				<div class="row">
    					<div class="col-md-13 col-md-offset-13">
    						<div class="panel box-shadow">
    							<div class="panel-body center-block">
    								<div class="pages-header text-center">
    									<div class="pages-box-icon"><i class="zmdi zmdi-account-o"></i></div>
    									<h4>Encargado - Definir Tarea</h4>
    								</div>
    		                        <form action="/tasks/add" method="post">
    		                            <fieldset>
    		                                <div class="form-group">
                                                <label for="emergency">Nombre de la tarea</label>
    		                                    <input class="form-control" placeholder="Ej: Limpiar escombros" id="task" name="task_name" type="text" required autofocus>
    		                                	<input type="hidden" name="idMision" value=<?= $idMision ?>></input>
    		                                </div>                                            
                                            <div class="form-group">
                                                <label for="description">Descripción</label>
                                                <textarea class="form-control" rows="5" name="task_description" id="description" placeholder="Escriba una descripción de la tarea aquí..." required></textarea>
                                            </div>
    		                                <!-- Change this to a button or input when using this as a form -->
    		                                <button class="btn btn-success btn-block" type="submit">Definir</button>
    		                                <a <?= 'href="/missions/view/'.$idMision.'"' ?> class="btn btn-danger btn-block">Volver</a>
                                            </div>
    		                            </fieldset>
    		                        </form>
    							</div>
    						</div>
    					</div>
    				</div>
    			</section>
    		</div>
	</article>