<?php include("cms/module/conexion.php"); ?>
<?php $cod_noticia   = $_REQUEST['cod_noticia']; ?>
<!DOCTYPE html>
<html class="no-js">
	<!--<![endif]-->
	<head>
		<?php
			$consultarMet = 'SELECT * FROM metatags';
	        $resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
	        $filaMet = mysqli_fetch_array($resultadoMet);
	            $xTitulo 	= $filaMet['titulo'];
	            $xSlogan    = $filaMet['slogan'];
    	        $xDes       = $filaMet['description'];
    	        $xFace1     = $filaMet['face1'];
    	        $xFace2     = $filaMet['face2'];
    	?>
		<title><?php echo $xTitulo; ?> | Blog</title>
		<?php include('module/head.php'); ?>
		<!-- Facebook and Twitter integration -->
		<meta property="og:title" content="<?php echo $xTitulo; ?>" />
		<meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace1; ?>" />
		<meta property="og:image" content="cms/assets/img/meta/<?php echo $xFace2; ?>" />
		<meta property="og:description" content="<?php echo $xDes; ?>" />
		<meta name="twitter:title" content="<?php echo $xTitulo; ?>" />
		<meta name="twitter:image" content="cms/assets/img/meta/<?php echo $xFace1; ?>" />
		<meta name="twitter:image" content="cms/assets/img/meta/<?php echo $xFace2; ?>" />
		<meta name="twitter:descripcion" content="<?php echo $xDes; ?>" />
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<?php include ('module/menu.php'); ?>
				<style type="text/css">
					.back_intro{
						background-image: url(img/big-header-2.jpeg);
					}
					h1, h2, h3, h4, h5, h6 {
						font-family: helvetica !important;
						font-weight: 50;
					}
				</style>
				<?php 
					$consultarNoticias = "SELECT * FROM noticias WHERE cod_noticia='$cod_noticia'";
			        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
			        $filaNot = mysqli_fetch_array($resultadoNoticias);
						$cod_noticia = $filaNot['cod_noticia'];
						$cod_categoria = $filaNot['cod_categoria'];
						$xImagen       = $filaNot['imagen'];
						$xTitulo       = $filaNot['titulo'];
						$xDescripcion  = $filaNot['noticia'];
						$xAutor        = $filaNot['autor'];
				?>
				<!-- blogheader -->
				<div class="fh5co-parallax back_intro" data-stellar-background-ratio="0.5" style="background-position: -400px 0px !important;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
								<div class="fh5co-intro fh5co-table-cell animate-box">
									<h1 class="text-center"><?php echo $xTitulo; ?></h1>
									<p class="text_p">Descripcion corta de la noticia</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- blogheader -->
				<!-- brumcs-->
				<div class="container-flud" style="background-color: #00b1e8;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-md-4">
								<ul class="breadcrumb">
									<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a> / <a href="blog.php">Blog</a> / <?php echo $xTitulo; ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- brumcs-->
				<!--bLog and Eventos -->
				<div id="fh5co-blog-section">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<div class="col-md-12">
									<div class="heading-section">
										<h2 class="h2_title_black">Noticias Recientes</h2>
									</div>
								</div>
								<!--ietmblog-->
								<div class="col-md-12">
									<img class="img-responsive" style="width: 100%;" src="cms/assets/img/noticias/<?php echo $xImagen; ?>" alt="" />
									<div class="desc" style="padding-top:20px;">
										<h3><?php echo $xTitulo; ?></h3>
										<span class="posted_by">Publicado por: <?php echo $xAutor; ?></span>
										<div class="text_contenido">
											<?php echo $xDescripcion; ?>
										</div>
									</div>
									<a class="btn btn-primary" href="blog.php">&lt; Volver</a>
								</div>
								<!--ietmblog-->
							</div>
							<div class="col-md-4 col-sm-12">
								<?php include('module/menu-blog.php'); ?>	
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
		</div>
		<!-- END fh5co-wrapper -->
	</body>
</html>