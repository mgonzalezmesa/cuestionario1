<?php

class vistaAcceso{
        public function mostrar() {
            ?>				
<div  style="width: 100%; padding: 8% 0 0; margin: 0 auto;">
		
		
		<div style="width: 400px;padding: 25px; left:60px; top:150px; position:absolute; background-color:light-grey;">
			<p style="font-size:17px;">Administrador de preguntas del Cuestionario.</br>Opciones:</br>- Añadir</br>- Editar</br>- Borrar</br>Seleccione la dificultad que desee gestionar.</p>
		</div>
		
		<div  style="position:relative; left:70%; button:10%;background: #FFFFFF;max-width: 360px;padding: 45px;text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
        <h1>Acceso</h1>
        <form  method="post" action="<?php echo "/sigloxix/administrar-cuestionario/" ?>">
            <label style="font-family: 'Roboto', sans-serif;outline: 0;background: #f2f2f2;border: none;width: 90%; border: 0;margin: 0 0 20px;padding: 15px;font-size: 14px;">Dificultad
			<select name="dificultad" style="background: transparent;border: none; font-size: 14px;height: 30px;padding: 5px;width: 270px;">
                                <option value="facil">Fácil</option>
                                <option value="normal">Normal</option>
                                <option value="dificil">Difícil</option>
                            </select><br/><br/>
			<input type="submit" name="empezar" value="Empezar"/>
        </form>
		</div>
  
            
</div>
            <?php
        }
    }
