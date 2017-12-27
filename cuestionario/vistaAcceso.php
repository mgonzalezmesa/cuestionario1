<?php

class vistaAcceso{
        public function mostrar() {
        ?>
		<div  id="container-cuestionario" >
		<div id="enunciado-cuestionario" >
			<p>Bienvenidos al cuestionario del I.E.S Celia Viñas. En el vamos a poder poner en práctica todos los conocimientos adquiridos en esta página web,<br/> El cuestionario consiste en  10 preguntas.<!-- que se tendrán que contestar en un tiempo determinado según la dificultad elegida: <br /> -Facil.............60s<br /> - Normal.......45s. <br /> - Dificil............30s.--> <br /> Contesta todas las preguntas <!--a tiempo-->, ¡mucha suerte! </p>
		</div>
		<div id="login-form">
        <div class="escudo-login"><img src="cuestionario/escudo.png" alt=""></div>
        <div class="titulo-login"> <h1>ACCESO</h1> </div>
        <form  method="post" action="<?php echo "../cuestionario/index.php" ?>">
            <div style="">   <input type="text" name="nombre" style="font-family: 'Roboto', sans-serif;outline: 0;background: #f2f2f2;width: 100%; border: 0;margin: 0 0 15px;padding: 15px;box-sizing: border-box;font-size: 14px;" placeholder="&#128100; &nbsp;&nbsp;Nombre de usuario" required /></div>
            <div style="    width: 92%;background: #f2f2f2; padding: 15px;"><label  >Dificultad</label></div>
			<div class="caja">   
                <select name="dificultad" style="background: transparent;border: none; font-size: 14px;height: 30px;padding: 5px;width: 270px;">
                <option value="facil">Fácil</option>
                <option value="normal">Normal</option>
                <option value="dificil">Difícil</option>
            </select>
                </div>
			<input style="padding:15px; width:40%;" type="submit" name="empezar" value="Empezar"/>
        </form>
		</div>
        <div id="clear" style="clear:both;"></div>
		</div>
            <?php
        }
    }
//style="font-family: 'Roboto', sans-serif;outline: 0;background: #f2f2f2;border: none;width: 90%; border: 0;margin: 0 0 20px;padding: 15px;font-size: 14px;" -->