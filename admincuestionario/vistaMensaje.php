<?php

class vistaMensaje{
        public function mostrar($mensaje,$dificultad) {
            ?>				
<div  style="width: 100%; padding: 8% 0 0; margin: 0 auto;">
		<?php echo $mensaje ?>
		 <form method="post" action="<?php echo "/sigloxix/administrar-cuestionario/"?>">
                            <input class="oculto" "type="text" name="dificultad" value="<?php echo $dificultad ?>"/></br>
                            <input type="submit" name="empezar" value="Continuar"/>
                        </form>
		
  
            
</div>
            <?php
        }
    }
