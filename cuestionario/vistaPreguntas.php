﻿<?php

class vistaPreguntas{
        public function mostrar($preguntas,$jugador) {
            ?>
         <script>
		 
		var comprobar= new Array(0,0,0,0,0,0,0,0,0,0); 
		 
			function respuesta(r,n){
				var eh = document.getElementById("podrio").value;
				
				if(eh != "agustico"){
					document.getElementById("r1"+n).style.backgroundColor = "white";
					document.getElementById("r2"+n).style.backgroundColor = "white";
					document.getElementById("r3"+n).style.backgroundColor = "white";
					document.getElementById("rfinal"+n).value=r;
					document.getElementById(r+""+n).style.backgroundColor = "#2c92c6";
					comprobar[n-1]=1;
				}
			}
			function corregir(){
				var todo = true;
				var aciertos = 10;
				for(i=0;i<10;i++){
					if(comprobar[i]==0){
						todo=false;
					}
				}
				if(todo){
					var enlaces=document.getElementsByClassName("pabajo");
					for(i=1;i<11;i++){
						r=document.getElementById("rfinal"+i).value;
					if(r!="r1"){
						document.getElementById(r+i).style.backgroundColor = "red";
						document.getElementById("img"+i).src="../cuestionario/cuestionario/imagenes/error.png";
						aciertos--;
					}
					document.getElementById("r1"+i).style.backgroundColor = "green";
					enlaces[i-1].style.visibility="visible";
					}
					document.getElementById("podrio").value = "agustico";
					document.getElementById("aciertos").innerHTML=aciertos;
					document.getElementById("corregir").style.display="none";
					document.getElementById("correccion").style.display="block";
					
					var mensaje;
					if(aciertos<5){
						mensaje="Necesitas mejorar, prueba a revisar otra vez la pagina.";
					}
					else if(aciertos>4&&aciertos<8){
						mensaje="Muy bien pero seguro que lo puedes hacer mejor.";
					}else if(aciertos>7){
						mensaje="Excelente se nota que eres un experto el la Almeria del siglo XIX.";
					}
					document.getElementById("mensaje").innerHTML=mensaje;
				}
					else{
						alert("Debes de responder todas las preguntas para corregir el test.");
					}
			}
			
		</script> 
		<div>
        <div id="preguntas" style="color:black;width:90%;margin:0 auto;">
			<h3>Jugador: <?php echo $jugador ?></h3>
			<?php 
				for($j=0;$j<10;$j++){
			?>
			<div id=<?php echo "'"."p".($j+1)."'" ?> style="background: #FFFFFF;width: 700px;margin: 0 auto 100px;padding:15px 45px;text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">	
			</br>
			<?php if($preguntas[$j]->foto!="sin.jpg"){?>
						<div id="imagen" style="width:45%;float:left;height:375px;">
							<img src=<?php echo "../cuestionario/cuestionario/imagenes/".$preguntas[$j]->foto ?> width="300px" alt="imagen" style="margin-top:60px;" />
						</div>
					<?php } ?>
			 <div id="enunciado" style="width:55%;float:left;height:375px;">
			 	<h4><?php echo $preguntas[$j]->enunciado; ?></h4></br>
					<?php 
					$indices = array("r1","r2","r3");
					for($i=0;$i<3;$i++){
						$n=rand(0,count($indices)-1);
						$cont=$indices[$n];
						?>
						<div id=<?php echo "'".$indices[$n].($j+1)."'" ?> style="margin:0 auto;background-color:white; width:300px;  border:2px solid black;border-radius:15px; padding:10px;text-align:center;cursor:pointer;" onclick="respuesta(<?php echo "'".$indices[$n]."'" ?> ,<?php echo $j+1 ?> )"> <?php echo $preguntas[$j]->$cont; ?> </div></br>
						<?php
						unset($indices[$n]);
						$indices=array_values($indices);
					}
					$i=0;
					?>
			 </div>
			 <div id="numerosP" style="width:100%;float:left;height:50px;padding:0px;">
				
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p1'> 1 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p2'> 2 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p3'> 3 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p4'> 4 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p5'> 5 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p6'> 6 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p7'> 7 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p8'> 8 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p9'> 9 </a>"?>

		 		</div>
		 		<div class="numeroPregunta" style="float:left;margin:10px 10px;background:#d3d6d6;border:2px solid #9ba0a2;border-radius:10px; width:20px;padding:12px;font-weight: bold;">
		 			<?php echo "<a class='cuest' href='#p10'> 10 </a>"?>

		 		</div>

				
			</div>
		 	<div style="clear:both;"></div>
				</br>
				
					
				</br>
				<a class="pabajo" href="#correccion">Ir a la corrección</a>
				
				
				</div>
				<?php }
				?>
				<form id="form" hidden name="form"  method="post" action="<?php echo "../cuestionario/index.php/"?>">
					<input id="rfinal1" type="text" name="rfinal" />
					<input id="rfinal2" type="text" name="rfinal" />
					<input id="rfinal3" type="text" name="rfinal" />
					<input id="rfinal4" type="text" name="rfinal" />
					<input id="rfinal5" type="text" name="rfinal" />
					<input id="rfinal6" type="text" name="rfinal" />
					<input id="rfinal7" type="text" name="rfinal" />
					<input id="rfinal8" type="text" name="rfinal" />
					<input id="rfinal9" type="text" name="rfinal" />
					<input id="rfinal10" type="text" name="rfinal" />
					<input id="podrio" type="text" name="rfinal" value="asdf" />
					<input type="text" name="siguiente" value="Siguiente" />
				</form>
				<div id="corregir" style=" margin:0 auto; background-color:white; width:300px;  border:2px solid black; border-radius:15px; padding:10px; text-align:center; cursor:pointer;" onclick="corregir()"> Corregir 
				</div>
				<div id="correccion" style="background: #FFFFFF;width: 700px;margin: 0 auto 100px;padding: 45px;text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24); display:none;">	
				<h3>Resultados del cuestionario:</h3></br>
				Ha conseguido <span id="aciertos"></span> aciertos.</br>
				<span id="mensaje"></span></br> 
				<h3>Revisar preguntas</h3>
				<table style="width:100%;">
					<tr>
						<td><a class="cuest" href="#p1">1.<img id="img1" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p2">2.<img id="img2" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p3">3.<img id="img3" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p4">4.<img id="img4" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p5">5.<img id="img5" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p6">6.<img id="img6" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p7">7.<img id="img7" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p8">8.<img id="img8" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p9">9.<img id="img9" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						<td><a class="cuest" href="#p10">10.<img id="img10" src="../cuestionario/cuestionario/imagenes/acierto.png" alt="Mountain View"></a></td>
						
					</tr>
				</table>
				<a href="../cuestionario/index.php">Volver a empezar</a>
				</div>
				
</div>
</div>
            <?php
        }
	}
