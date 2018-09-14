<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html class="no-js">
	<!--<![endif]-->
	<head>
		<?php
			$consultarMet = 'SELECT * FROM metatags';
	        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
	        $filaMet = mysqli_fetch_array($resultadoMet);
	            $xTitulo = $filaMet['titulo'];
    	?>
		<title><?php echo $xTitulo; ?> | Joel Henrique Perez</title>
		<?php include('module/head.php'); ?>
	</head>
	<body>
		<?php include ('module/menu.php'); ?>
		<style type="text/css">
			.back_intro{
			background-image: url(img/big-header-2.jpeg);
			}
		</style>
		<!-- servicioshead -->
		<div class="fh5co-parallax back_intro" data-stellar-background-ratio="0.5" style="background-position: -400px 0px !important;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Contactanos</h1>
							<p class="text_p">Cualquier consulta puedes llamarme </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- servicioshead -->
		<!-- brumcs-->
		<div style="background-color: #00b1e8;">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-4">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a> / Contacto</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- brumcs-->
		<!-- end:fh5co-hero -->
		<div id="fh5co-contact">
			<div class="container">
				<form action="#">
					<div class="row">
						<div class="col-md-6 animate-box">
							<h3 class="section-title">Nuestra Direcci&oacute;n</h3>
							<?php
			                 	$consultarCot = 'SELECT * FROM contacto';
			                 	$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                 	$filaCot  = mysqli_fetch_array($resultadoCot);
				                    $xDirection   = $filaCot['direction'];
				                    $xPhone       = $filaCot['phone'];
			    	                $xMobile      = $filaCot['mobile'];
			        	            $xEmail       = $filaCot['email'];
			            	        $xMap         = $filaCot['map'];
			                	    $xFormem      = $filaCot['form_mail'];
		                	?>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="contact-info">
								<li><i class="fas fa-map-marker-alt"></i> <?php echo $xDirection; ?></li>
								<li><i class="fas fa-phone"></i> <?php echo $xPhone; ?></li>
								<li><i class="fab fa-whatsapp"></i> <?php echo $xMobile; ?></li>
								<li><i class="far fa-envelope"></i> <?php echo $xEmail; ?></li>
							</ul>
						</div>
						<div class="col-md-6 animate-box">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Nombre">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="" class="form-control" id="" cols="30" rows="7" placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Enviar Mensaje" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<?php echo $xMap; ?>
		
		<?php 
			include('module/footer.php');
			include('module/script.php');
		?>
	</body>
</html>