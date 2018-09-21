		<?php
	        $consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='4'";
	        $resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
	        $filaCon = mysqli_fetch_array($resultadoCon);
	            $xTitulo      = $filaCon['titulo_contenido'];
	            $xContenido   = $filaCon['contenido_1'];
	            $xImagen      = $filaCon['img_contenido'];
	            $xEstado      = $filaCon['estado'];
	    ?>
		<!-- call to action-->
		<div class="fh5co-parallax" style="background-image: url(/cms/assets/img/nosotros/<?php echo $xImagen; ?>);background-repeat: no-repeat; background-size: cover;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 fh5co-table">
						<div class="fh5co-intro fh5co-table-cell box-area">
							<h2 class="h2_title"><?php echo $xTitulo; ?></h2>
							<p><?php echo $xContenido; ?></p>
							<a href="/contacto.php" class="btn btn-primary">Contactame</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- call to action-->
		<?php
            mysqli_free_result($resultadoCon);
        ?>