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
		<title><?php echo $xTitulo; ?> | Servicios</title>
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
									<h1 class="text-center">Galer&iacute;a</h1>
									<p class="text_p">Fotos</p>
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
									<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a> / Galer&iacute;a de Im&aacute;genes</li>
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
								<h2 class="h2_title_black">Galer&iacute;a</h2>
							</div>
							<br>
							<div id="filters" class="button-group">
							  <button class="button is-checked" data-filter="*">Todos</button>
							  <?php
			                   	$consultarCategoria = "SELECT * FROM galerias_categorias WHERE estado='1' ORDER BY orden";
			                    $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                    while($filaCat = mysqli_fetch_array($resultadoCategoria)){
			                    	$xCategoria = $filaCat['categoria'];
			                        $xSlug 		= $filaCat['slug'];
			                  ?>
							  <button class="button" data-filter=".<?php echo $xSlug; ?>"><?php echo $xCategoria; ?></button>
							  <?php
							  	}
							  	mysqli_free_result($resultadoCategoria); 
							  ?>
							</div>
							<div class="grid">
							  <?php
					            $consultarGal = "SELECT gc.cod_categoria, gc.categoria, gc.slug, g.* FROM galerias_categorias as gc, galerias as g WHERE g.cod_categoria=gc.cod_categoria AND g.estado='1' ORDER BY orden ASC";
					            $resultadoGal = mysqli_query($enlaces,$consultarGal) or die('Consulta fallida: ' . mysqli_error($enlaces));
					            while($filaGal = mysqli_fetch_array($resultadoGal)){
					              $xCodigo        = $filaGal['cod_galeria'];
					              $xCategoria     = utf8_encode($filaGal['categoria']);
					              $xSlug          = $filaGal['slug'];
					              $xNomGal        = utf8_encode($filaGal['titulo']);
					              $xCategoria     = $filaGal['categoria'];
					              $xImagen        = $filaGal['imagen'];
					          ?>
							  <div class="element-item <?php echo $xSlug; ?>" data-category="<?php echo $xSlug; ?>">
							  	<a class="jackbox" data-group="img<?php echo $xCodigo; ?>" href="cms/assets/img/galerias/<?php echo $xImagen; ?>">
							    	<img src="cms/assets/img/galerias/<?php echo $xImagen; ?>" class="img-thumbnail" />
							    </a>
							    <h3 class="name"><?php echo $xNomGal; ?></h3>
							  </div>
							  <?php
							  	}
							  	mysqli_free_result($resultadoGal);
							  ?>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->	
				<?php 
					include ('module/footer.php');
					include ('module/script.php');
				?>
				<script src="js/jquery.min.js"></script>
				<script src="js/isotope.pkgd.js"></script>
				<script type="text/javascript">
					$('#myModal').on('shown.bs.modal', function () {
					  $('#myInput').focus()
					})

					// external js: isotope.pkgd.js
					// init Isotope
					var $grid = $('.grid').isotope({
					  itemSelector: '.element-item',
					  layoutMode: 'fitRows',
					  getSortData: {
					    name: '.name',
					    symbol: '.symbol',
					    number: '.number parseInt',
					    category: '[data-category]',
					    weight: function( itemElem ) {
					      var weight = $( itemElem ).find('.weight').text();
					      return parseFloat( weight.replace( /[\(\)]/g, '') );
					    }
					  }
					});

					// filter functions
					var filterFns = {
					  // show if number is greater than 50
					  numberGreaterThan50: function() {
					    var number = $(this).find('.number').text();
					    return parseInt( number, 10 ) > 50;
					  },
					  // show if name ends with -ium
					  ium: function() {
					    var name = $(this).find('.name').text();
					    return name.match( /ium$/ );
					  }
					};

					// bind filter button click
					$('#filters').on( 'click', 'button', function() {
					  var filterValue = $( this ).attr('data-filter');
					  // use filterFn if matches value
					  filterValue = filterFns[ filterValue ] || filterValue;
					  $grid.isotope({ filter: filterValue });
					});

					// bind sort button click
					$('#sorts').on( 'click', 'button', function() {
					  var sortByValue = $(this).attr('data-sort-by');
					  $grid.isotope({ sortBy: sortByValue });
					});

					// change is-checked class on buttons
					$('.button-group').each( function( i, buttonGroup ) {
					  var $buttonGroup = $( buttonGroup );
					  $buttonGroup.on( 'click', 'button', function() {
					    $buttonGroup.find('.is-checked').removeClass('is-checked');
					    $( this ).addClass('is-checked');
					  });
					});
					  
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