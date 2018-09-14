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
        <li><a href="categorias.php?cod_categoria=<?php echo $xCodigo; ?>"><?php echo $xCategoria; ?></a></li>
        <?php
        	}
            mysqli_free_result($resultadoCategoria);
        ?>
	</ul>
</div>
<div class="heading-blog">
	<h2 class="h2_title_black">Eventos</h2>
	<div class="row">
		<!--itemcalendeda-->
		<div class="col-md-12">
			<div class="fh5co-blog">
				<div class="meta-date text-center">
					<p><span class="date">14</span><span>June</span><span>2018</span></p>
				</div>
				<div class="desc desc2">
					<h3><a href="#">Loren Ipsum Moment.</a></h3>
					<p class="text_calen">simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
		<!--itemcalendeda-->
		<!--itemcalendeda-->
		<div class="col-md-12">
			<div class="fh5co-blog ">
				<div class="meta-date text-center">
					<p><span class="date">16</span><span>June</span><span>2018</span></p>
				</div>
				<div class="desc desc2">
					<h3><a href="#">Loren Ipsum Moment.</a></h3>
					<p class="text_calen">simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
		<!--itemcalendeda-->
		<!--itemcalendeda-->
		<div class="col-md-12">
			<div class="fh5co-blog ">
				<div class="meta-date text-center">
					<p><span class="date">23</span><span>June</span><span>2018</span></p>
				</div>
				<div class="desc desc2">
					<h3><a href="#">Loren Ipsum Moment.</a></h3>
					<p class="text_calen">simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
		</div>
		<!--itemcalendeda-->
	</div>
</div>