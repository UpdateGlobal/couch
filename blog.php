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
		<title><?php echo $xTitulo; ?> | Blog</title>
		<?php include('module/head.php'); ?>
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<?php $menu="blog"; include ('module/menu.php'); ?>
				<style type="text/css">
					.back_intro{
					background-image: url(/img/big-header-2.jpeg);
					}
				</style>
				<!-- blogheader -->
				<div class="fh5co-parallax back_intro" data-stellar-background-ratio="0.5" style="background-position: -400px 0px !important;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
								<div class="fh5co-intro fh5co-table-cell animate-box">
									<h1 class="text-center">Mi Blog</h1>
									<p class="text_p">Blog de noticias</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- blogheader -->
				<!-- brumcs-->
				<div style="background-color: #00b1e8;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-md-4">
								<ul class="breadcrumb">
									<li><a href="/index.php"><i class="fas fa-home"></i> Inicio</a> / Blog</li>
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
								<?php
			                        $consultarNoticias = "SELECT * FROM noticias WHERE estado='1'";
			                        $resultadoNoticias = mysqli_query($enlaces, $consultarNoticias);
			                        $total_registros = mysqli_num_rows($resultadoNoticias);
			                        if($total_registros==0){ 
			                    ?>
			                    <div class="col-md-12">
									<div class="fh5co-blog">
			                        	<h2>No hay entradas en nuestro blog, pronto tendremos novedades.</h2>
			                        	<div style="height: 40px;"></div>
			                    	</div>
			                    </div>
			                    <?php 
			                        }else{
			                        $registros_por_paginas = 4;
			                        $total_paginas = ceil($total_registros/$registros_por_paginas);
			                        $pagina = intval($_GET['p']);
			                        if($pagina<1 or $pagina>$total_paginas){
			                            $pagina=1;
			                        }
			                        $posicion = ($pagina-1)*$registros_por_paginas;
			                        $limite = "LIMIT $posicion, $registros_por_paginas";

			                        $consultarNoticias = "SELECT * FROM noticias WHERE estado='1' ORDER BY fecha ASC $limite";
			                        $resultadoNoticias = mysqli_query($enlaces,$consultarNoticias) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                        while($filaNot = mysqli_fetch_array($resultadoNoticias)){
			                            $xCodigo        = $filaNot['cod_noticia'];
			                            $xSlug          = $filaNot['slug'];
			                            $xTitulo        = $filaNot['titulo'];
			                            $xImagen        = $filaNot['imagen'];
			                            $xDescripcion   = $filaNot['noticia'];
			                            $xAutor			= $filaNot['autor'];
			                    ?>
								<!--ietmblog-->
								<div class="col-md-12">
									<div class="row fh5co-blog">
										<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
											<a href="/blog/<?php echo $xSlug; ?>"><img class="img-responsive" src="/cms/assets/img/noticias/<?php echo $xImagen; ?>" alt=""></a>
										</div>
										<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 desc">
											<h3><a href="/blog/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a></h3>
											<span class="posted_by">Por: <?php echo $xAutor; ?></span>
											<?php 
	                                            $xResumen_m = strip_tags($xDescripcion);
	                                            $strCut = substr($xResumen_m,0,80);
	                                            $xResumen_m = $strCut.'...';
	                                        ?>
											<p class="text_blog"><?php echo $xResumen_m; ?></p>
											<a href="/blog/<?php echo $xSlug; ?>" class="btn btn-default">Leer M&aacute;s +</a>
										</div>
									</div>
								</div>
								<!--ietmblog-->
								<?php 
									}
									mysqli_free_result($resultadoNoticias);
								?>
								<div class="clearfix"></div>
			                    <?php
			                        $paginas_mostrar = 5;
			                        if ($total_paginas>1){
			                            echo "<div class='row text-center'>
			                                <div class='col-lg-12'>
			                                    <ul class='pagination'>";
			                            if($pagina>1){
			                                echo "<li><a href='?p=".($pagina-1)."'>&laquo;</a></li>";
			                            }
			                            for($i=$pagina; $i<=$total_paginas && $i<=($pagina+$paginas_mostrar); $i++){
			                                if($i==$pagina){
			                                    echo "<li class='active'><a><strong>$i</strong></a></li>";
			                                }else{
			                                    echo "<li><a href='?p=$i'>$i</a></li>";
			                                }
			                            }
			                            if(($pagina+$paginas_mostrar)<$total_paginas){
			                                echo "<li>...</li>";
			                            }
			                            if($pagina<$total_paginas){
			                                echo "  <li><a href='?p=".($pagina+1)."'>&raquo;</a></li>";
			                            }
			                            echo "  </ul>
			                                </div>
			                            </div>";
			                        }
			                    }
			                    ?>
							</div>
							<div class="col-md-4 col-sm-12">
								<?php include("module/menu-blog.php"); ?>
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