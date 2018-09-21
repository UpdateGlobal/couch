<div class="fh5co-hero">
	<?php
        $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='8'";
        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
        $filaCon = mysqli_fetch_array($resultadoCon);
        	$xCodigo      = $filaCon['cod_contenido'];
            $xTitulo      = $filaCon['titulo_contenido'];
            $xContenido   = $filaCon['contenido_1'];
            $xImagen      = $filaCon['img_contenido'];
            $xEstado      = $filaCon['estado'];
    ?>
	<style type="text/css">
		.back_intro{
		background-image: url(/cms/assets/img/nosotros/<?php echo $xImagen; ?>);
		}
	</style>
	<div class="fh5co-overlay"></div>
	<div class="fh5co-cover back_intro" data-stellar-background-ratio="0.5" style="background-position: 400px 0px !important;">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<h1 class="title_principal"><b><?php echo $xTitulo; ?></b></h1>
						<span class="boton-banner"><a class="btn btn-primary" href="<?php echo $xContenido; ?>">Mas Info</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
        mysqli_free_result($resultadoCon);
    ?>
</div>