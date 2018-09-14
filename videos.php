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
		<title><?php echo $xTitulo; ?> | V&iacute;deos</title>
		<?php include('module/head.php'); ?>
		<link href="jackbox/css/jackbox.css" rel="stylesheet" type="text/css" />
		<link href="jackbox/css/jackbox_hovers.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<?php include('module/menu.php'); ?>
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
									<h1 class="text-center">Galer&iacute;a de V&iacute;deos</h1>
									<p class="text_p">V&iacute;deos</p>
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
									<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a> / Galer&iacute;a de V&iacute;deos</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--newgaleria-->
				<div id="fh5co-team-section">
					<div class="container">
						<div class="row">
							<div align="center">
								<h2 class="h2_title_black">V&iacute;deos</h2>
							</div>
						</div>
						<div class="row">
							<?php
		                        $consultarVideos = "SELECT * FROM videos WHERE estado='1' ORDER BY orden";
		                        $resultadoVideos = mysqli_query($enlaces,$consultarVideos) or die('Consulta fallida: ' . mysqli_error($enlaces));
		                        while($filaVid = mysqli_fetch_array($resultadoVideos)){
		                        	$xTitulo    = $filaVid['titulo'];
		                        	$xVideo   	= $filaVid['video'];
		                        	$xImagen    = $filaVid['imagen'];
		                    ?>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center video-gal">
								<a class="jackbox" data-group="video" href="<?php echo $xVideo; ?>">
							  		<img src="cms/assets/img/videos/<?php echo $xImagen; ?>" />
							    </a>
								<h4 class="video-titulo"><?php echo $xTitulo; ?></h4>
							</div>
							<?php
								}
								mysqli_free_result($resultadoVideos);
							?>
						</div>
					</div>
				</div>
				<!-- Modal -->	
				<!--Clientes-->
				<?php
					include ('module/footer.php');
					include ('module/script.php');
				?>
				<script type="text/javascript">
					$('#myModal').on('shown.bs.modal', function () {
						$('#myInput').focus()
					})
				</script>
				<script type="text/javascript" src="jackbox/js/libs/jquery.address-1.5.min.js"></script>
				<script type="text/javascript" src="jackbox/js/libs/Jacked.js"></script>
				<script type="text/javascript" src="jackbox/js/jackbox-swipe.js"></script>
				<script type="text/javascript" src="jackbox/js/jackbox.js"></script>
				<script type="text/javascript" src="jackbox/js/libs/StackBlur.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function() {
		//				jQuery(".jackbox[data-group]").jackBox("init");
						jQuery(".jackbox[data-group]").jackBox("init", {
							deepLinking: false,
							showInfoByDefault: false,       // show item info automatically when content loads, true/false
							preloadGraphics: true,          // preload the jackbox graphics for a faster jackbox
							fullscreenScalesContent: false,  // choose to always scale content up in fullscreen mode, true/false
		 
							autoPlayVideo: false,           // video autoplay default, this can also be set per video in the data-attributes, true/false
							flashVideoFirst: false,         // choose which technology has first priority for video, HTML5 or Flash, true/false
		     
							useThumbs: false,                // choose to use thumbnails, true/false
							thumbsStartHidden: false,       // choose to initially hide the thumbnail strip, true/false
							useThumbTooltips: false
						});
					});
				</script>
			</div>
			<!-- END fh5co-page -->
		</div>
		<!-- END fh5co-wrapper -->
	</body>
</html>