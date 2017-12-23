<?php
	session_start();
	include_once 'admincuestionario/vistaAcceso.php';
    include_once 'admincuestionario/vistaPreguntas.php';
    include_once 'admincuestionario/dbAccess.php';
	include_once 'admincuestionario/pregunta.php';
	include_once 'admincuestionario/vistaMensaje.php';
/**
 * Template name: AdminCuestionario
 */
get_header(); ?>
<div id="content">
	<div class="container">
		<div class="shadow_block">
			<div class="inner_page clearfix sidebar_right">
				<div class="page_section">
					<div class="gutter">
						<article class="single_post">
							<div class="article_text">
								<h2><?php the_title(); ?></h2>
								<!-- INICIO PLANTILLA -->
								<link href="http://iescelia.org/sigloxix/wp-content/themes/honma/admincuestionario/admincuestionario.css" rel="stylesheet" type="text/css"/>
	
								         <?php
	if(isset($_REQUEST["empezar"])){
		$dificultad=$_REQUEST['dificultad'];
		$preguntas=array();
        $dbAccess=new dbAccess;
		//$preguntas=$dbAccess->getAllPreguntas();
		$preguntas=$dbAccess->getPreguntas($dificultad);
        $vista=new vistaPreguntas();
		$vista->mostrar($preguntas,$dificultad); 
    }else if(isset($_REQUEST["addPregunta"])){
		$dbAccess=new dbAccess;
        $id=$dbAccess->getIdPregunta();
		$id++;
		if(isset($_FILES['imagen']) ){
					$target_path =$_SERVER['DOCUMENT_ROOT']."/sigloxix/wp-content/themes/honma/cuestionario/imagenes/";
                    $target_path = $target_path . basename( $_FILES['imagen']['name']); 
					$target_final =$_SERVER['DOCUMENT_ROOT']."/sigloxix/wp-content/themes/honma/cuestionario/imagenes/".$id.".jpg";
                    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_final)) { 
						$imagen=$id.".jpg";
                    } 
                    else{
                        $imagen="sin.jpg";
						$directorio = $_SERVER['DOCUMENT_ROOT'].'/imagenes/';
                    }
                }
		$pregunta=new pregunta($id,$_REQUEST['enunciado'],$_REQUEST['r1'],$_REQUEST['r2'],$_REQUEST['r3'],$imagen,$_REQUEST['dificultad']);
		if($dbAccess->addPreguntas($pregunta)){
			$mensaje= "Se insertado la pregunta nueva.";
		}
		else{
			$mensaje="La operación a fallado pruebe más tarde";
		}
		$vista=new vistaMensaje();
		$vista->mostrar($mensaje,$_REQUEST['dificultad']); 
	}else if(isset($_REQUEST["editar"])){
		$id=$_REQUEST['id'];
		$dificultad=$_REQUEST['dificultad'];
		$imagen="sin.jpg";
		if(isset($_FILES['imagen']) ){
                    $target_path =$_SERVER['DOCUMENT_ROOT']."/sigloxix/wp-content/themes/honma/cuestionario/imagenes/";
                    $target_path = $target_path . basename( $_FILES['imagen']['name']); 
					$target_final =$_SERVER['DOCUMENT_ROOT']."/sigloxix/wp-content/themes/honma/cuestionario/imagenes/".$id.".jpg";
                    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_final)) { 
						$imagen=$id.".jpg";
                    } 
                    else{
                        $imagen="sin.jpg";
						$directorio = $_SERVER['DOCUMENT_ROOT'].'/imagenes/';
					}
                }
		$pregunta=new pregunta($_REQUEST['id'],$_REQUEST['enunciado'],$_REQUEST['r1'],$_REQUEST['r2'],$_REQUEST['r3'],$imagen,$_REQUEST['dificultad']);
		$dbAccess=new dbAccess;
		if($dbAccess->editarPregunta($pregunta)){
			$mensaje= "Se ha modificado correctamente.";
		}
		else{
			$mensaje="La operación a fallado pruebe más tarde";
		}
		$vista=new vistaMensaje();
		$vista->mostrar($mensaje,$dificultad); 
	}else if(isset($_REQUEST["borrarPregunta"])){
		$id=$_REQUEST['id'];
		$dificultad=$_REQUEST['dificultad'];
		$dbAccess=new dbAccess;
		if($dbAccess->borrarPregunta($id)){
			$mensaje= "Se borrado la pregunta con identidicación nº ".$id;
		}
		else{
			$mensaje="La operación a fallado pruebe más tarde";
		}
		$vista=new vistaMensaje();
		$vista->mostrar($mensaje,$dificultad); 
	}else{
		$vista=new vistaAcceso();
		$vista->mostrar();
    }
?>
								<!-- FIN PLANTILLA -->
							</div>
						</article>
					</div>
				 </div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
