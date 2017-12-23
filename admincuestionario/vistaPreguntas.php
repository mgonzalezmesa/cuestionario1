<?php

class vistaPreguntas{
        public function mostrar($contexto,$dificultad) {
            ?>
        <script>
        	function cambiarestado(id,opcion){
				if(opcion==1){
					document.getElementById("enunciado"+id).readOnly=false;
					document.getElementById("r1"+id).readOnly=false;
					document.getElementById("r2"+id).readOnly=false;
					document.getElementById("r3"+id).readOnly=false;
					document.getElementById("editar"+id).style.display="none";
					document.getElementById("confirmar"+id).style.display="inline";
					document.getElementById("cancelar"+id).style.display="inline";
				}
				else{
					document.getElementById("enunciado"+id).readOnly=true;
					document.getElementById("r1"+id).readOnly=true;
					document.getElementById("r2"+id).readOnly=true;
					document.getElementById("r3"+id).readOnly=true;
					document.getElementById("editar"+id).style.display="inline";
					document.getElementById("confirmar"+id).style.display="none";
					document.getElementById("cancelar"+id).style.display="none";
				}

        	}
			function mostrarAddPregunta(){
				if(document.getElementById("addPregunta").style.display=="none"){
					document.getElementById("addPregunta").style.display="block";
				}
				else{
					document.getElementById("addPregunta").style.display="none";
				}
			}
			
		</script>
		<style>
			div.insertar {
				margin: .4em 0;
			}
			div label {
				width: 20%;
				float: left;
			}
			textarea {
				resize: none;
			}
		</style>
		<div>
		<div id="cabecera" style=" position: relative; background: #FFFFFF;left:15%;width: 100%;margin: 0 auto 50px;padding:15px 45px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
        <h2>Preguntas de nivel <?php 
							if($dificultad=="facil"){
								$lit_dificultad="Fácil";
							}
							else if($dificultad=="normal"){
								$lit_dificultad="Normal";
							}
							else{
								$lit_dificultad="Difícil";
							}
							echo $lit_dificultad ?></h2>
		<input type="button" value="Insertar Pregunta" onclick="mostrarAddPregunta()" />
		<input type="button" value="Volver a selección de dificultad" onclick="location.href='/sigloxix/administrar-cuestionario/'" />
		</div>
		<div id="addPregunta" style="display:none; position: relative; background: #FFFFFF;left:15%;width: 100%;margin: 0 auto 50px;padding:15px 45px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
                        <h3>Insertar una pregunta</h3>
                        <form method="post" enctype="multipart/form-data" action="<?php echo "/sigloxix/administrar-cuestionario/"?>">
							<div class="insertar">
								<label for="enunciado">Enunciado:</label>
								<textarea name="enunciado" id="enunciado"  rows="4" cols="50" required></textarea>
							</div>
                            <div class="insertar">
								<label for="r1">Respuesta correcta:</label>
								<input type="text" name="r1" id="r1" size="50" required/>
							</div>
                            <div class="insertar">
								<label for="r2">Respuesta incorrecta 1:</label>
								<input type="text" name="r2" id="r2" size="50" required/>
							</div>
							<div class="insertar">
								<label for="r3">Respuesta incorrecta 2:</label>
								<input type="text" name="r3" id="r3" size="50" required/>
							</div>
							<div class="insertar">
							<label for="select_dif">Dificultad:</label>
                            <select name="dificultad" id="select_dif" >
                                <option value="facil" <?php if($dificultad=="facil"){echo "selected='selected'";}?> >Fácil</option>
                                <option value="normal" <?php if($dificultad=="normal"){echo "selected='selected'";}?> >Normal</option>
                                <option value="dificil" <?php if($dificultad=="dificil"){echo "selected='selected'";}?> >Difícil</option>
                            </select>
							</div>
							<div class="insertar">
							<label for="subir_imagen">Asociar una imagen:</label>
							<input id="subir_imagen" type="file" name="imagen" />
							</div>
                            <input type="submit" name="addPregunta" value="Insertar"/>
                        </form>
                    </div>
        <div id="preguntas" style="color:black;width:100%;margin:0 auto;">
			<?php 
				for($j=0;$j<count($contexto);$j++){
			?>
			<div id="<?php echo $contexto[$j]->id; ?>" style="position: relative; background: #FFFFFF;left:15%;width: 100%;margin: 0 auto 50px;padding:15px 45px;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">	
			</br>
			<h1>Pregunta nº:<?php echo $contexto[$j]->id;?></h1>
				<form method="post" enctype="multipart/form-data" action="<?php echo "/sigloxix/administrar-cuestionario/"?>">
							<div class="insertar">
								<label for="enunciado">Enunciado:</label>
								<textarea name="enunciado" id="<?php echo "enunciado".$contexto[$j]->id;?>"  rows="4" cols="50" readonly="" required><?php echo $contexto[$j]->enunciado; ?></textarea>
							</div>
                            <div class="insertar">
								<label for="r1">Respuesta correcta:</label>
								<input type="text" name="r1" id="<?php echo "r1".$contexto[$j]->id;?>" size="50" value="<?php echo $contexto[$j]->r1; ?> " readonly="" required/>
							</div>
                            <div class="insertar">
								<label for="r2">Respuesta incorrecta 1:</label>
								<input type="text" name="r2" id="<?php echo "r2".$contexto[$j]->id;?>" size="50" value="<?php echo $contexto[$j]->r2; ?>" readonly="" required/>
							</div>
							<div class="insertar">
								<label for="r3">Respuesta incorrecta 2:</label>
								<input type="text" name="r3" id="<?php echo "r3".$contexto[$j]->id;?>" size="50" value="<?php echo $contexto[$j]->r3; ?>" readonly="" required/>
							</div>
							<div class="insertar">
							<label for="select_dif">Dificultad:</label>
                            <select name="dificultad" id="select_dif">
                                <option value="facil" <?php if($dificultad=="facil"){echo "selected='selected'";}?> >Fácil</option>
                                <option value="normal" <?php if($dificultad=="normal"){echo "selected='selected'";}?> >Normal</option>
                                <option value="dificil" <?php if($dificultad=="dificil"){echo "selected='selected'";}?> >Difícil</option>
                            </select>
							</div>
							<div class="insertar">
							<label for="subir_imagen">Asociar o modificar una imagen:</label>
							<input id="subir_imagen" type="file" name="imagen" />
							</div>
							<?php if($contexto[$j]->foto!="sin.jpg"){?>
								<div style="margin:0 auto;width:300px;">
								<img src=<?php echo "http://iescelia.org/sigloxix/wp-content/themes/honma/cuestionario/imagenes/".$contexto[$j]->foto ?> width="300px" alt="imagen" />
								</div>
							<?php } ?>
							</br>
							<input style="display:none;" "type="text" name="id" value="<?php echo $contexto[$j]->id ?>"/>
							<input type="button" id="<?php echo "editar".$contexto[$j]->id;?>" value="Editar" onclick="cambiarestado(<?php echo $contexto[$j]->id;?>,1)" />
							<input style="display:none;" id="<?php echo "confirmar".$contexto[$j]->id;?>" type="submit" name="editar" value="Confirmar"/>
							<input style="display:none;" type="button" id="<?php echo "cancelar".$contexto[$j]->id;?>" value="Cancelar" onclick="cambiarestado(<?php echo $contexto[$j]->id;?>,0)" />
                        </form>
				<form method="post" enctype="multipart/form-data" action="<?php echo "/sigloxix/administrar-cuestionario/"?>">
                            <input style="display:none;" type="text" name="id" value="<?php echo $contexto[$j]->id; ?>">
                            <input style="display:none;" "type="text" name="dificultad" value="<?php echo $dificultad ?>"/>
                            <input type="submit" name="borrarPregunta" value="Borrar" onclick="confirm('Confirme para borrar')"/>
                        </form>
				</div>
				
				<?php }
				?>
				
</div>
</div>
            <?php
        }
	}

