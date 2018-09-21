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
					$menu="inicio"; include ('module/menu.php');
					include ('module/intro.php');
				?>
				<!-- Servicios -->
				<div id="fh5co-programs-section" style="background-color: #f9f9f9;">
					<div class="container">
						<?php
				        	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='7' AND estado='1'";
				        	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
				        	$filaCon = mysqli_fetch_array($resultadoCon);
				        		$xTitulo      = $filaCon['titulo_contenido'];
				            	$xContenido   = $filaCon['contenido_1'];
				        ?>
						<div class="row">
							<div class="col-md-12">
								<div class="text-center">
									<h2 class="h2_title_black"><?php echo $xTitulo; ?></h2>
									<p class="text_p"><?php echo $xContenido; ?></p>
									
								</div>
							</div>
						</div>
						<?php
							mysqli_free_result($resultadoCon);
						?>
						<div class="row text-center">
							<div class="col-md-12">
								<div class="owl-carousel owl-theme servicios">
									<?php
				                        $consultarServicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
				                        $resultadoServicio = mysqli_query($enlaces,$consultarServicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
				                        while($filaSer = mysqli_fetch_array($resultadoServicio)){
				                         	$xCodigo		= $filaSer['cod_servicio'];
				                         	$xImagen    	= $filaSer['imagen'];
				                         	$xTitulo    	= $filaSer['titulo'];
				                         	$xSlug  	  	= $filaSer['slug'];
				                         	$xDescripcion 	= $filaSer['descripcion'];
				                         	$xOrden     	= $filaSer['orden'];
				                         	$xEstado    	= $filaSer['estado'];
				                    ?>
									<div class="item">
										<div class="program">
											<img class="img-responsive" src="/cms/assets/img/servicios/<?php echo $xImagen; ?>" alt="">
											<h3 style="margin: 0px;"><?php echo $xTitulo; ?></h3>
											<p class="card_Serv">
												<?php 
		                                            $xResumen_m = strip_tags($xDescripcion);
		                                            $strCut = substr($xResumen_m,0,120);
		                                            $xResumen_m = $strCut.'...';
		                                        ?>
												<?php echo $xResumen_m; ?>
											</p>
											<span><a href="/servicios/<?php echo $xSlug; ?>" class="btn btn-default">Mas info.</a></span>
										</div>
									</div>
									<?php
										}
										mysqli_free_result($resultadoServicio);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Servicios -->
				<!--Parlareto-->
				<?php
				    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='1' AND estado='1'";
				    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
				    $filaCon = mysqli_fetch_array($resultadoCon);
				    	$xTitulo     	= $filaCon['titulo_contenido'];
				    	$xContenido  	= $filaCon['contenido_1'];
				    	$xImagen   		= $filaCon['img_contenido'];
				?>
				<div class="fh5co-parallax" style="background-image: url(/cms/assets/img/nosotros/<?php echo $xImagen; ?>);" data-stellar-background-ratio="0.5">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
								<div class="fh5co-intro fh5co-table-cell ">
									<h2 class="h2_title"><?php echo $xTitulo; ?></h2>
									<p class="text_p"><?php echo $xContenido; ?></p>
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php
					mysqli_free_result($resultadoCon);
				?>
				<!--Parlareto-->
				<!-- Seccion Undefine-->
				
				<div id="fh5co-programs-section" style="background-color: #f9f9f9;">
					<div class="container">
						<div class="row">
							<?php
							    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='2' AND estado='1'";
							    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
							    $filaCon = mysqli_fetch_array($resultadoCon);
							    	$xTitulo     	= $filaCon['titulo_contenido'];
							    	$xContenido  	= $filaCon['contenido_1'];
							?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<h1 class="h1-que-hacemos"><?php echo $xTitulo; ?></h1>
								<?php echo $xContenido; ?>
							</div>
							<?php
								mysqli_free_result($resultadoCon);
							?>
							<?php
							    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='3' AND estado='1'";
							    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
							    $filaCon = mysqli_fetch_array($resultadoCon);
							    	$xTitulo     	= $filaCon['titulo_contenido'];
							    	$xContenido  	= $filaCon['contenido_1'];
							?>
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<h1 class="h1-que-hacemos"><?php echo $xTitulo; ?></h1>
								<?php echo $xContenido; ?>
							</div>
							<?php
								mysqli_free_result($resultadoCon);
							?>
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
							<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
								<div class="row fh5co-blog">
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>"><img class="img-responsive" src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" alt=""></a>
									</div>
									<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 desc">
										<h3><a href="noticia.php?cod_noticia=<?php echo $xCodigo; ?>"><?php echo $xTitulo; ?></a></h3>
										<span class="posted_by">Por: <?php echo $xAutor; ?></span>
										<?php 
                                            $xResumen_m = strip_tags($xDescripcion);
                                            $strCut = substr($xResumen_m,0,80);
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