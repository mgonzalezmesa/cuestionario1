<?php

class vistaAcceso{
        public function mostrar() {
        ?>
		<div  style="width: 100%; padding: 8% 0 0; margin: 0 auto;background:#2c92c6;">
		<div style="width: 100%;padding: 25px;background-color:light-grey; float:left;margin-top:-90px; margin-left:425px;max-width:400px; ">
			<p style="font-size:17px;">Bienvenidos al cuestionario de Almería siglo XIX. En el vamos a poder poner en práctica todos los conocimientos adquiridos en esta página web,<br/> El cuestionario consiste en  10 preguntas.<!-- que se tendrán que contestar en un tiempo determinado según la dificultad elegida: <br /> -Facil.............60s<br /> - Normal.......45s. <br /> - Dificil............30s.--> <br /> Contesta todas las preguntas <!--a tiempo-->, ¡mucha suerte! </p>
		</div>
		<div  style="float:left;width:100%;background: #FFFFFF;margin-top:20px;margin-left:425px;max-width: 360px;margin-bottom:30px;padding: 45px;text-align: center;box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">
        <h1>Acceso</h1>
        <form  method="post" action="<?php echo "../cuestionario/index.php" ?>">
            <br/><input type="text" name="nombre" style="font-family: 'Roboto', sans-serif;outline: 0;background: #f2f2f2;width: 100%; border: 0;margin: 0 0 15px;padding: 15px;box-sizing: border-box;font-size: 14px;" placeholder="&#128100;Nombre del usuario" required /><br/>
            <label style="font-family: 'Roboto', sans-serif;outline: 0;background: #f2f2f2;border: none;width: 90%; border: 0;margin: 0 0 20px;padding: 15px;font-size: 14px;" >Dificultad</label>
			<select name="dificultad" style="background: transparent;border: none; font-size: 14px;height: 30px;padding: 5px;width: 270px;">
                <option value="facil">Fácil</option>
                <option value="normal">Normal</option>
                <option value="dificil">Difícil</option>
            </select><br/><br/>
			<input type="submit" name="empezar" value="Empezar"/>
        </form>
		</div>
        <div id="clear" style="clear:both;"></div>
		</div>
            <?php
        }
    }
