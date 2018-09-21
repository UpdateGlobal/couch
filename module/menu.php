	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo">
							<?php
								$consultarMet = 'SELECT * FROM metatags';
						    	$resultadoMet = mysqli_query($enlaces,$consultarMet) or die('Consulta fallida: ' . mysqli_error($enlaces));
						    	$filaMet = mysqli_fetch_array($resultadoMet);
						    		$xLogo = $filaMet['logo'];
					    	?>
							<a href="/index.php">
								<img src="/cms/assets/img/meta/<?php echo $xLogo; ?>" width="150">
							</a>
						</h1>
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="<?php echo ($menu == "inicio" ? "active" : "")?>"><a href="/index.php">Inicio</a></li>
								<li class="<?php echo ($menu == "nosotros" ? "active" : "")?>"><a href="/joel.php">Sobre Joel</a></li>
								<li>
									<a class="<?php echo ($menu == "servicios" ? "active" : "")?>" href="#">Servicios <i class="fas fa-angle-down"></i></a>
									<ul class="fh5co-sub-menu">
										<?php
	                                        $consultarservicio = "SELECT * FROM servicios WHERE estado='1' ORDER BY orden";
	                                        $resultadoservicio = mysqli_query($enlaces,$consultarservicio) or die('Consulta fallida: ' . mysqli_error($enlaces));
	                                        while($filaSer = mysqli_fetch_array($resultadoservicio)){
	                                            $xCodigo = $filaSer['cod_servicio'];
	                                            $xTitulo = $filaSer['titulo'];
	                                            $xSlug   = $filaSer['slug'];
	                                    ?>
	                                	<li><a href="/servicios/<?php echo $xSlug; ?>"><?php echo $xTitulo; ?></a></li>
		                                <?php
		                                    }
		                                    mysqli_free_result($resultadoservicio);
		                                ?>
									</ul>
								</li>
								<li class="<?php echo ($menu == "blog" ? "active" : "")?>"><a href="/blog.php">Blog</a></li>
								<li class="<?php echo ($menu == "galeria" ? "active" : "")?>"><a href="/galeria.php">Galer&iacute;a</a></li>
								<li class="<?php echo ($menu == "videos" ? "active" : "")?>"><a href="/videos.php">V&iacute;deos</a></li>
								<li class="<?php echo ($menu == "contacto" ? "active" : "")?>"><a href="/contacto.php">Contacto</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</nav>
		</header>		
	</div>