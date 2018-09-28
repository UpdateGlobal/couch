<div class="heading-blog">
	<h2 class="h2_title_black">CATEGOR&Iacute;AS</h2>
</div>
<div class="fh5co-blog">
	<ul class="cat-lista">
		<?php
            $consultarCategoria = "SELECT * FROM noticias_categorias WHERE estado='1' ORDER BY orden";
            $resultadoCategoria = mysqli_query($enlaces,$consultarCategoria) or die('Consulta fallida: ' . mysqli_error($enlaces));
            while($filaCat = mysqli_fetch_array($resultadoCategoria)){
            	$xCodigo    = $filaCat['cod_categoria'];
                $xSlug      = $filaCat['slug'];
                $xCategoria = $filaCat['categoria'];
        ?>
        <li><a href="/categorias/<?php echo $xSlug; ?>"><?php echo $xCategoria; ?></a></li>
        <?php
        	}
            mysqli_free_result($resultadoCategoria);
        ?>
	</ul>
</div>
<div class="heading-blog">
	<h2 class="h2_title_black">Noticias Recientes</h2>
	<div class="row">
		<!--itemcalendeda-->
		<?php
        	$consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha LIMIT 3";
            $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
            while($filaNot = mysqli_fetch_array($resultadoNoticias)){
                $xTitulo    = $filaNot['titulo'];
                $xSlug      = $filaNot['slug'];
                $xDescripcion = $filaNot['noticia'];
                $xImagen    = $filaNot['imagen'];
                $xFecha     = $filaNot['fecha'];
        ?>
		<div class="col-md-12">
			<div class="fh5co-blog">
				<div class="meta-date text-center">
					<?php
                        $mydate = strtotime($xFecha);
                        $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
                        $meses = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
                    ?>
					<p><span class="date"><?php echo date('d', $mydate); ?></span><span><?php echo $meses[date('n', $mydate)-1]; ?></span><span><?php echo date('Y', $mydate); ?></span></p>
				</div>
				<div class="desc desc2">
					<h3><a href="/blog/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a></h3>
					<p class="text_calen"><?php 
		                	$xDescripcion_r = strip_tags($xDescripcion);
		                    $strCut = substr($xDescripcion_r,0,100);
		                    $xDescripcion_r = substr($strCut,0,strrpos($strCut, ' ')).'...';
		                ?>
						<?php echo strip_tags($xDescripcion_r); ?></p>
				</div>
			</div>
		</div>
		<?php 
			}
		    mysqli_free_result($resultadoNoticias);
		?>
	</div>
</div>