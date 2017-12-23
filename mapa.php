<?php
/**
 * Template name: Mapa
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
								<!-- INICIO MAPA -->
								<link href="http://iescelia.org/sigloxix/mapa/css/mapa.css" rel="stylesheet" type="text/css"/>
								<link rel="stylesheet" type="text/css" href="http://iescelia.org/sigloxix/mapa/css/galeria.css" media="screen"/>
								<script src="http://iescelia.org/sigloxix/mapa/js/libs/jquery/jquery.js" type="text/javascript"></script>
								<script src="http://iescelia.org/sigloxix/mapa/js/miscript.js" type="text/javascript"></script>
								<script src="http://iescelia.org/sigloxix/mapa/js/libs/jquery-mousewheel/jquery.mousewheel.min.js" type="text/javascript"></script>
								<div id="contenedor">
			<script type="text/javascript">
				function mostrarPopup() {
					$('#window').fadeIn(600);
				}
				function ocultarPopup(){
					$('#window').fadeOut(600);
				}
			</script>
			<div id="window" style="display:none;">  
				<h4 style="text-transform: uppercase;">Ayuda de navegación</h4>  
				<ul>
					<li><strong>Ampliar:</strong> Mediante la rueda del ratón o los botones de zoom.</li>  
					<li><strong>Desplazar:</strong> Pinchando y arrastrando el ratón.</li>  
					<li><strong>Consultar:</strong> Pinchando en los puntos sensibles marcados en dorado.</li>  
				</ul>
				<div id="exit" class="btn-cerrar" onClick="ocultarPopup();"></div>
			</div>  
			<div id="show" onClick="mostrarPopup();" class="btn-ayuda"></div> 
			
			<!-- Debajo del botón ayuda navegación -->
			<div id="botonesZoom">
				<div id="btnZoomMas"></div>
				<div id="btnZoomMenos"></div>
			</div>
			
			<div id = 'mapa'>
				<div id='objetos'>
						<div id="mapa2" style='top:0; left:0;'></div>
						<!--Lista de puntos sensibles con clase puntos e id referenciativo para el css-->
						<!--Itinerario 1 -->
						<div id="p_1_0" class="puntos" onclick="seleccion(1)"></div>
						<div id="p_1_1" class="puntos" onclick="seleccion(2)"></div>
						<div id="p_1_2" class="puntos" onclick="seleccion(3)"></div>
						<div id="p_1_3" class="puntos" onclick="seleccion(4)" ></div>
						<div id="p_1_4" class="puntos" onclick="seleccion(5)" ></div>
						<div id="p_1_5" class="puntos" onclick="seleccion(6)" ></div>
						<div id="p_1_6" class="puntos" onclick="seleccion(7)" ></div>
						<div id="p_1_7" class="puntos" onclick="seleccion(8)" ></div>
						<div id="p_1_8" class="puntos" onclick="seleccion(9)" ></div>
						<div id="p_1_9" class="puntos" onclick="seleccion(10)" ></div>
						<div id="p_1_10" class="puntos" onclick="seleccion(11)" ></div>
						<div id="p_1_11" class="puntos" onclick="seleccion(12)" ></div>
						<div id="p_1_12" class="puntos" onclick="seleccion(13)" ></div>
						<div id="p_1_13" class="puntos" onclick="seleccion(14)" ></div>
						<div id="p_1_14" class="puntos" onclick="seleccion(15)" ></div>
						<div id="p_1_15" class="puntos" onclick="seleccion(16)" ></div>
						<!-- Itinerario 2 -->
						<div id="p_2_0" class="puntos" onclick="seleccion(17)" ></div>
						<div id="p_2_1" class="puntos" onclick="seleccion(18)" ></div>
						<div id="p_2_2" class="puntos" onclick="seleccion(19)" ></div>
						<div id="p_2_3" class="puntos" onclick="seleccion(20)" ></div>
						<div id="p_2_4" class="puntos" onclick="seleccion(21)" ></div>
						<div id="p_2_5" class="puntos" onclick="seleccion(22)" ></div>
						<div id="p_2_6" class="puntos" onclick="seleccion(23)" ></div>
						<div id="p_2_7" class="puntos" onclick="seleccion(24)" ></div>
						<div id="p_2_8" class="puntos" onclick="seleccion(25)" ></div>
						<!-- Itinerario 3 -->
						<div id="p_3_0" class="puntos" onclick="seleccion(26)" ></div>
						<div id="p_3_1" class="puntos" onclick="seleccion(27)" ></div>
						<div id="p_3_2" class="puntos" onclick="seleccion(28)" ></div>
						<div id="p_3_3" class="puntos" onclick="seleccion(29)" ></div>
						<div id="p_3_4" class="puntos" onclick="seleccion(30)" ></div>
						<div id="p_3_5" class="puntos" onclick="seleccion(31)" ></div>
						<div id="p_3_6" class="puntos" onclick="seleccion(32)" ></div>
						<div id="p_3_7" class="puntos" onclick="seleccion(33)" ></div>
				</div>
			</div>
			
			<div id='derecha'>
				<ul id="lista_puntos">
				<div id="itinerario1">
					<h3 id="h31">Itinerario 1</h3>
					<li id="l_1_0" onclick="reubicarMapa(3000,425,2000), seleccion(1)">Plaza de la Constitución</li>
					<li id="l_1_1" onclick="reubicarMapa(4000,675,2750), seleccion(2)">Monumento a los Mártires de la Libertad</li>
					<li id="l_1_2" onclick="reubicarMapa(4000,908, 2318), seleccion(3)">V. burguesa Plaza Marin esquina C/Covadonga</li>
					<li id="l_1_3" onclick="reubicarMapa(4000,1200,2800), seleccion(4)">Plaza de San Pedro</li>
					<li id="l_1_4" onclick="reubicarMapa(1300,300,875), seleccion(5)">Paseo de Almería</li>
					<li id="l_1_5" onclick="reubicarMapa(4000,1450,2500), seleccion(6)">Esquina C/Tenor Iribarne con Paseo</li>
					<li id="l_1_6" onclick="reubicarMapa(4000,1775,2700), seleccion(7)">Mercado Central</li>
					<li id="l_1_7" onclick="reubicarMapa(4000, 2004, 2635), seleccion(8)">Teatro Apolo</li>
					<li id="l_1_8" onclick="reubicarMapa(4000, 1850,2900), seleccion(9)">Diputación Provincial</li>
					<li id="l_1_9" onclick="reubicarMapa(4000, 2275, 2810), seleccion(10)">Compañía de María</li>
					<li id="l_1_10" onclick="reubicarMapa(4000, 1413, 3630), seleccion(11)">V. C/Conde Ofalia 26, junto Escuela de Arte</li>
					<li id="l_1_11"  onclick="reubicarMapa(4000, 1325,3700), seleccion(12)">Escuela de Arte</li>
					<li id="l_1_12" onclick="reubicarMapa(4000, 1522, 3605), seleccion(13)">V. Plurifamiliar en Plaza Marqués de Heredia</li>
					<li id="l_1_13" onclick="reubicarMapa(4000,1625,4045), seleccion(14)">Delegación del Gobierno</li>
					<li id="l_1_14" onclick="reubicarMapa(4000,1750,4260), seleccion(15)">Plaza Emilio Pérez, 'Circular'</li>
					<li id="l_1_15" onclick="reubicarMapa(4000,1775,4150), seleccion(16)">Casa de la Peña</li>
				</div>
				<div id="itinerario2">
					<h3 id="h32">Itinerario 2</h3>
						<li id="l_2_0" onclick="reubicarMapa(4000,3388,4480), seleccion(17)">Antigua Estación de Ferrocarril</li>
						<li id="l_2_1" onclick="reubicarMapa(4000,431,3866), seleccion(18)">Paseo de San Luís</li>
						<li id="l_2_2" onclick="reubicarMapa(4000,35,3727), seleccion(19)">Edificio Cruz Roja</li>
						<li id="l_2_3" onclick="reubicarMapa(4000,0,3676), seleccion(20)">V. Plurifamiliar burguesa esquina C/Alborán</li>
						<li id="l_2_4" onclick="reubicarMapa(4000,350,3000), seleccion(21)">Palacio de los Marqueses de Cabra</li>
						<li id="l_2_5" onclick="reubicarMapa(4000,400,3100), seleccion(22)">Edificio del Granero</li>
						<li id="l_2_6" onclick="reubicarMapa(4000,500,3150), seleccion(23)">Casa del Poeta José Ángel Valente</li>
						<li id="l_2_7" onclick="reubicarMapa(4000,650,2875), seleccion(24)">Casa Duimovich</li>
						<li id="l_2_8" onclick="reubicarMapa(4000,816, 3348), seleccion(25)">Hotel Catedral</li>
				</div>
				<div id="itinerario3">
					<h3 id="h33">Itinerario 3</h3>
					<li id="l_3_0" onclick="reubicarMapa(4000,2042, 2235), seleccion(26)">Antigua Casa de Socorro</li>
					<li id="l_3_1" onclick="reubicarMapa(4000,1900,1900), seleccion(27)">V. plurifamiliar burguesa C/Granada, 33</li>
					<li id="l_3_2" onclick="reubicarMapa(4000,2175,1600), seleccion(28)">V. unifamiliar burguesa C/Granada, 72</li>
					<li id="l_3_3" onclick="reubicarMapa(4000,1875,1100), seleccion(29)">Viviendas obreras C/Santa Matilde</li>
					<li id="l_3_4" onclick="reubicarMapa(2800,1350,475), seleccion(30)">Plaza de toros</li>
					<li id="l_3_5" onclick="reubicarMapa(4000,1250,450), seleccion(31)">Barrio de la Caridad</li>
					<li id="l_3_6" onclick="reubicarMapa(4000,1350,150), seleccion(32)">Cortijo Fischer</li>
					<li id="l_3_7" onclick="reubicarMapa(4000,2746, 1506), seleccion(33)">Malecón de los jardinillos</li>
				</div>	
				</ul>
			</div>
			</div>
								<div id='abajo'>
								
								<!-- END MAPA -->
							</div>
						</article>
					</div>
				 </div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
