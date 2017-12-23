<?php
	session_start();
	include_once 'cuestionario/vistaAcceso.php';
    include_once 'cuestionario/vistaPreguntas.php';
    include_once 'cuestionario/pregunta.php';
    include_once 'cuestionario/dbAccess.php';	
/**
 * Template name: Cuestionario
 */
//get_header(); ?>
<div id="content">
	<div class="container">
		<div class="shadow_block">
			<div class="inner_page clearfix sidebar_right">
				<div class="page_section">
					<div class="gutter">
						<article class="single_post">
							<div class="article_text">
								<h2><?php //the_title(); ?></h2>
								<!-- INICIO PLANTILLA -->
								<link href="../cuestionario/cuestionario/cuestionario.css" rel="stylesheet" type="text/css"/>
									         <?php
												if (isset($_REQUEST['empezar'])) {
													$preguntas=array();
													$dbAccess=new dbAccess;
													$sorteo=$dbAccess->getIdPreguntas($_REQUEST['dificultad']);
													
													for($i=0;$i<10;$i++){
													   $n=rand(0,count($sorteo)-1);
													   $preguntas[$i]= $dbAccess->getPregunta($sorteo[$n]);
													   unset($sorteo[$n]);
													   $sorteo=array_values($sorteo);
													}
													$vista=new vistaPreguntas();
													$vista->mostrar($preguntas,$_REQUEST['nombre']); 
												}
												else{
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

<?php //get_footer(); ?>
