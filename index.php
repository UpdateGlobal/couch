<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<!--https://freehtml5.co/preview/?item=fitness-free-website-template-using-bootstrap-3-->
<html class="no-js">
	<head>
		<?php
			$consultarMet = 'SELECT * FROM metatags';
	        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
	        $filaMet = mysqli_fetch_array($resultadoMet);
	            $xTitulo = $filaMet['titulo'];
    	?>
		<title><?php echo $xTitulo; ?> | Inicio</title>
		<?php include('module/head.php'); ?>
		<style>
			.text_p {
				margin-bottom: 1.5em;
				font-size: 18px !important;
				font-family: helvetica !important;
			}
			.card_Serv {
				margin: 0.5em;
				font-size: 16px;
				color: #000;
				font-family: helvetica !important;
			}
			.h2_title {
				color: #fff;
				font-family: helvetica !important;
				font-weight: 200;
				margin: 0;
				font-size: 52px;
			}
			h1, h2, h3, h4, h5, h6 {
				font-family: helvetica !important;
				font-weight: 50;
			}
			p, ul, ol {
				font-size: 15px !important;
				color: #4c4c4c;
				font-family: helvetica !important;
				list-style: none;
				padding: 0;
			}
		</style>
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<?php
					include ('module/menu.php');
					include ('module/intro.php');
				?>
				<!-- Servicios -->
				<div id="fh5co-programs-section" style="background-color: #f9f9f9;">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="text-center">
									<h2 class="h2_title_black">JopaCoaching</h2>
									<p class="text_p">Presentamos a continuación nuestra propuesta de servicios profesionales de coaching con la finalidad de darles a conocer nuestra organización y cómo desde ella podemos agregar valor sostenible a sus resultados deseados.</p>
								</div>
							</div>
						</div>
						<div class="row text-center">
							<div class="col-md-12">
								<div class="owl-carousel owl-theme servicios">
									<?php
				                        $consultarservicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
				                        $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
				                        while($filaBan = mysqli_fetch_array($resultadoservicio)){
				                         	$xCodigo    = $filaBan['cod_servicio'];
				                         	$xImagen    = $filaBan['imagen'];
				                         	$xTitulo    = $filaBan['titulo'];
				                         	$xOrden     = $filaBan['orden'];
				                         	$xEstado    = $filaBan['estado'];
				                    ?>
									<div class="item">
										<div class="program">
											<img class="img-responsive" src="img/servicio_1.jpeg" alt="">
											<h3 style="margin: 0px;"><?php echo $xTitulo; ?></h3>
											<p class="card_Serv">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
											<span><a href="servicio.php?cod_servicio=<?php echo $xCodigo; ?>" class="btn btn-default">Mas info.</a></span>
										</div>
									</div>
									<?php
										}
										mysqli_free_result($resultadoservicio);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Servicios -->
				<!--Parlareto-->
				<div class="fh5co-parallax" style="background-image: url(img/parla.jpeg);" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
								<div class="fh5co-intro fh5co-table-cell ">
									<h2 class="h2_title">¿Qui&eacute;n es JopaCoaching?</h2>
									<p class="text_p">Somos una organización conformada por un equipo de coaches certificados que facilitamos procesos de desarrollo,transformación personal y organizacional elevando los niveles de liderazgo, desempeño, motivación, trabajo en equipo y cambio.</p>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Parlareto-->
				<!-- Seccion Undefine-->
				<div id="fh5co-programs-section" style="background-color: #f9f9f9;">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<h1 class="h1-que-hacemos">¿QU&Eacute; METODOLOG&Iacute;A UTILIZAMOS?</h1>
								<p>Nuestro enfoque es integral, Combinamos diferentes estilos y herramientas: el aprendizaje experiencial, PNL(Programación Neurolingüística), Gestalt, Inteligencia Emocional, Análisis Transaccional y Aprendizaje para adultos(andragogía) y Modelo de Coaching, modelo Meta Learning Dr. Losada. Nos Apoyamos en herramientas como el DISC, Myer Briggs, Liderazgo Situacional, Herramientas de Covey, entre otras.</p>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<h1 class="h1-que-hacemos">¿QU&Eacute; ORGANIZACIONES NOS RESPALDAN?</h1>
								<p>Contamos con una alianza estratégica con GROWING COACHING COMMUNITY que es una organización internacional de coaches con 7 años de experiencia en el desarrollo profesional del coaching en el Perú a nivel nacional. Quien complementa y respalda el profesionalismo de nuestra organización y sus servicios al mercado.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Seccion Undefine-->
				<?php include('module/calltoaction.php'); ?>
				<!--bLog and Eventos -->
				<div id="fh5co-blog-section">
					<div class="container">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="heading-section">
									<h2 class="h2_title_black">Noticias Recientes</h2>
								</div>
							</div>
						</div>
						<div class="row">
							<?php 
	                            $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha,cod_noticia ASC LIMIT 2";
	                            $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
	                            while($filaNot = mysqli_fetch_array($resultadoNoticias)){
	                            	$xCodigo        = $filaNot['cod_noticia'];
	                                $xTitulo        = $filaNot['titulo'];
	                                $xSlug          = $filaNot['slug'];
	                                $xImagen        = $filaNot['imagen'];
	                                $xDescripcion   = $filaNot['noticia'];
	                                $xAutor   		= $filaNot['autor'];
	                                $xFecha         = $filaNot['fecha'];
	                        ?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="fh5co-blog">
									<div class="inner-post">
										<a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>"><img class="img-responsive" src="cms/assets/img/noticias/<?php echo $xImagen; ?>" alt=""></a>
									</div>
									<div class="desc">
										<h3><a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>"><?php echo $xTitulo; ?></a></h3>
										<span class="posted_by">Por: <?php echo $xAutor; ?></span>
										<?php 
                                            $xResumen_m = strip_tags($xDescripcion);
                                            $strCut = substr($xResumen_m,0,100);
                                            $xResumen_m = $strCut.'...';
                                        ?>
										<p class="text_blog"><?php echo $xResumen_m; ?></p>
										<a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>" class="btn btn-default">Leer Mas +</a>
									</div>
								</div>
							</div>
							<?php
								}
								mysqli_free_result($resultadoNoticias);
	                        ?>
						</div>
					</div>
				</div>
			</div>
			<!--bLog and Eventos -->
			<?php 
				include ('module/footer.php');
				include ('module/script.php');
			?>
		</div>
		<!-- END fh5co-page -->
	</body>
</html>