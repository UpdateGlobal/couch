<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html class="no-js">
	<head>
		<?php
			$consultarMet = 'SELECT * FROM metatags';
	        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
	        $filaMet = mysqli_fetch_array($resultadoMet);
	            $xTitulo = $filaMet['titulo'];
    	?>
		<title><?php echo $xTitulo; ?> | Joel Henrique Perez</title>
		<?php include('module/head.php'); ?>
		<style>
			p, ul, ol {
			margin-bottom: 1.5em;
			font-size: 18px;
			color: #4c4c4c;
			font-family: helvetica;
			list-style: none;
			padding: 0;
			}
		</style>
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<?php $menu="nosotros"; include ('module/menu.php'); ?>
				<style type="text/css">
					.back_intro{
					background-image: url(/img/big-header-2.jpeg);
					}
				</style>
				<!-- titleJoel -->
				<div class="fh5co-parallax back_intro" data-stellar-background-ratio="0.5" style="background-position: -400px 0px !important;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
								<?php
				                	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5'";
				                	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
				                	$filaCon = mysqli_fetch_array($resultadoCon);
				                    	$xTitulo      = $filaCon['titulo_contenido'];
				                    	$xContenido_1 = $filaCon['contenido_1'];
				                ?>
								<div class="fh5co-intro fh5co-table-cell">
									<h1 class="text-center"><?php echo $xTitulo; ?></h1>
									<p class="text_p"><?php echo $xContenido_1; ?></p>
								</div>
								<?php
				                 	mysqli_free_result($resultadoCon);
				                ?>
							</div>
						</div>
					</div>
				</div>
				<!-- titleJoel -->
				<!-- brumcs-->
				<div style="background-color: #00b1e8;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-md-4">
								<ul class="breadcrumb">
									<li><a href="/index.php"><i class="fas fa-home"></i> Inicio</a> / Sobre M&iacute;</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- brumcs-->
				<!-- AboutJoel -->
				<div id="fh5co-team-section">
					<div class="container">
						<div class="row animate-box">
							<div class="col-md-6">
								<?php
				                	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5'";
				                	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
				                	$filaCon = mysqli_fetch_array($resultadoCon);
				                    	$xTitulo      = $filaCon['titulo_contenido'];
				                    	$xContenido_1 = $filaCon['contenido_1'];
				                    	$xContenido_2 = $filaCon['contenido_2'];
					                    $xImagen      = $filaCon['img_contenido'];
					            ?>
								<div class="team-section-grid animate-box" style="background-image: url(/cms/assets/img/nosotros/<?php echo $xImagen; ?>);">
									<div class="overlay-section">
										<div class="desc">
											<h3><?php echo $xTitulo; ?></h3>
											<span><?php echo $xContenido_1; ?></span>
											<p><?php echo $xContenido_2; ?></p>
											<p class="fh5co-social-icons">
											<?php
						                        $consultarSol = "SELECT * FROM social WHERE estado='1' ORDER BY orden LIMIT 4";
						                        $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
						                        while($filaSol = mysqli_fetch_array($resultadoSol)){
						                         	$xType      = $filaSol['type'];
						                         	$xLinks     = $filaSol['links'];
						                         	if($xType=="fa-facebook-square"){ $xValor = "fa-facebook-f"; }
							                        if($xType=="fa-twitter-square"){ $xValor = "fa-twitter"; }
							                        if($xType=="fa-google-plus-official"){ $xValor = "fa-google-plus-g"; }
							                        if($xType=="fa-linkedin"){ $xValor = "fa-linkedin-in"; }
							                        if($xType=="fa-behance"){ $xValor = "fa-behance"; }
							                        if($xType=="fa-youtube-play"){ $xValor = "fa-youtube"; }
							                        if($xType=="fa-vimeo"){ $xValor = "fa-vimeo-v"; }
							                        if($xType=="fa-wordpress"){ $xValor = "fa-wordpress"; }
							                        if($xType=="fa-tumblr-square"){ $xValor = "fa-tumblr"; }
							                        if($xType=="fa-pinterest"){ $xValor = "fa-pinterest-p"; }
							                        if($xType=="fa-instagram"){ $xValor = "fa-instagram"; }
							                        if($xType=="fa-flickr"){ $xValor = "fa-flickr"; }
						                    ?>
			                    			<a href="<?php echo $xLinks; ?>"><i class="fab <?php echo $xValor; ?>"></i></a>
											<?php
												}
												mysqli_free_result($resultadoSol);
											?>
											</p>
										</div>
									</div>
								</div>
								<?php
				                 	mysqli_free_result($resultadoCon);
				                ?>
							</div>
							<div class="col-md-6">
								<?php
				                	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5'";
				                	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
				                	$filaCon = mysqli_fetch_array($resultadoCon);
				                        $xContenido_3 = $filaCon['contenido_3'];
					            ?>
								<?php echo $xContenido_3; ?>
								<?php
				                 	mysqli_free_result($resultadoCon);
				                ?>
							</div>
						</div>
					</div>
				</div>
			<!-- AboutJoel -->
			<!--AccordionStady-->
			<div id="fh5co-programs-section" style="background-color: #f9f9f9;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-section text-center animate-box">
							<?php
			                    $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='6'";
			                    $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                    $filaCon = mysqli_fetch_array($resultadoCon);
			                        $xCodigo      = $filaCon['cod_contenido'];
			                        $xTitulo      = $filaCon['titulo_contenido'];
			                        $xContenido_1 = $filaCon['contenido_1'];
			                        $xEstado      = $filaCon['estado'];
			                ?>
								<h2><?php echo $xTitulo; ?></h2>
								<p><?php echo $xContenido_1; ?></p>
							<?php
		                    	mysqli_free_result($resultadoCon);
		                    ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<?php
			                    	$consultarExperiencia = "SELECT * FROM experiencia WHERE estado='1' AND tipo='0' ORDER BY orden";
			                        $resultadoExperiencia = mysqli_query($enlaces,$consultarExperiencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                        while($filaExp = mysqli_fetch_array($resultadoExperiencia)){
			                        	$xCodigo    = $filaExp['cod_experiencia'];
			                        	$xTitulo    = $filaExp['titulo'];
			                        	$xContenido = $filaExp['contenido'];
			                        	$xTipo   	= $filaExp['tipo'];
			                    ?>
								<div class="panel">
									<div class="panel-heading" role="tab" id="heading<?php echo $xCodigo; ?>">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $xCodigo; ?>" aria-expanded="true" aria-controls="collapse<?php echo $xCodigo; ?>">
												<i class="fas fa-graduation-cap"></i> <?php echo $xTitulo; ?> <i class="fas fa-plus-circle" style="float: right;"></i>
											</a>
										</h4>
									</div>
									<div id="collapse<?php echo $xCodigo; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $xCodigo; ?>">
										<div class="panel-body">
											<div class="contenido-tab">
												<?php echo $xContenido; ?>
											</div>
										</div>
									</div>
								</div>
								<?php 
									}
									mysqli_free_result($resultadoExperiencia);
								?>
							</div>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<?php
			                    	$consultarExperiencia = "SELECT * FROM experiencia WHERE estado='1' AND tipo='1' ORDER BY orden";
			                        $resultadoExperiencia = mysqli_query($enlaces,$consultarExperiencia) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                        while($filaExp = mysqli_fetch_array($resultadoExperiencia)){
			                        	$xCodigo    = $filaExp['cod_experiencia'];
			                        	$xTitulo    = $filaExp['titulo'];
			                        	$xContenido = $filaExp['contenido'];
			                        	$xTipo   	= $filaExp['tipo'];
			                    ?>
								<div class="panel">
									<div class="panel-heading" role="tab" id="heading<?php echo $xCodigo; ?>">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $xCodigo; ?>" aria-expanded="true" aria-controls="collapse<?php echo $xCodigo; ?>">
												<i class="fas fa-briefcase"></i> <?php echo $xTitulo; ?> <i class="fas fa-plus-circle" style="float: right;"></i>
											</a>
										</h4>
									</div>
									<div id="collapse<?php echo $xCodigo; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $xCodigo; ?>">
										<div class="panel-body">
											<div class="contenido-tab">
												<?php echo $xContenido; ?>
											</div>
										</div>
									</div>
								</div>
								<?php 
									}
									mysqli_free_result($resultadoExperiencia);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--AccordionStady-->
		<?php 
			include ('module/footer.php');
			include ('module/script.php');
		?>
	</body>
</html>