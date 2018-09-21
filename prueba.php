<?php include("cms/module/conexion.php"); ?>
<?php $slug = $_REQUEST["slug"]; ?>
<?php 
$conServicios = "SELECT * FROM servicios WHERE slug='$slug' ORDER BY orden";
$resServicios = mysqli_query($enlaces,$conServicios) or die('Consulta fallida: ' . mysqli_error($enlaces));
$filSer = mysqli_fetch_array($resServicios);
    $cod_servicio = $filSer['cod_servicio'];
?>
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
		<title><?php echo $xTitulo; ?> | Servicios</title>
		<?php include('module/head.php'); ?>
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<?php $menu="servicios"; include ('module/menu.php'); ?>
				<style type="text/css">
					.back_intro{
					background-image: url(/img/big-header-2.jpeg);
					}
					/* .text_descri_servi {
					text-align: justify;
					margin: 0px 20px;
					font-size: 18px;
					}
					p {
					text-align: justify;
					margin: 0 0 10px;
					font-size: 18px;
					}*/
				</style>
				<!-- servicioshead -->
				<div class="fh5co-parallax back_intro" data-stellar-background-ratio="0.5" style="background-position: -400px 0px !important;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
								<div class="fh5co-intro fh5co-table-cell animate-box">
									<h1 class="text-center">Servicios</h1>
									<!--<p class="text_p">Subtitlte Servicio </p>-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
					$consultaServicios = "SELECT * FROM servicios WHERE cod_servicio='$cod_servicio'";
					$ejecutarServicios = mysqli_query($enlaces,$consultaServicios) or die('Consulta fallida: ' . mysqli_error($enlaces));
					$filaSer = mysqli_fetch_array($ejecutarServicios);
						$imagen      = $filaSer['imagen'];
						$titulo      = $filaSer['titulo'];
						$descripcion = $filaSer['descripcion'];
						$dirige      = $filaSer['dirige'];
						$beneficios  = $filaSer['beneficios'];
				?>
				<div id="fh5co-programs-section" style="background-color: #f9f9f9;">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="text-center ">
									<h2 class="h2_title_black"><b><?php echo $titulo; ?></h2>
									</b>
								</div>
							</div>
						</div>
						<div class="row text-center">
							<div class="row">
								<div class="col-md-6 ">
									<div class="card_Servi">
										<img class="img_servi" src="/cms/assets/img/servicios/<?php echo $imagen; ?>" alt="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="text_descri_servi"><?php echo $descripcion; ?></div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<p class="title_item_serv"><strong>&iquest;A qui&eacute;n se dirige?</strong></p>
								<?php echo $dirige; ?>
							</div>
							<div class="col-md-6">
								<p class="title_item_serv"><strong>Beneficios</strong></p>
								<blockquote>
									<?php echo $beneficios; ?>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php 
				include ('module/footer.php');
				include ('module/script.php');
			?>
		</div>
		<!-- END fh5co-page -->
		</div>
		<!-- END fh5co-wrapper -->
	</body>
</html>