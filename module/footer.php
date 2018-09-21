		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<?php
				        	$consultarCon = "SELECT * FROM contenidos WHERE cod_contenido='5' AND estado='1'";
				        	$resultadoCon = mysqli_query($enlaces,$consultarCon) or die('Consulta fallida: ' . mysqli_error($enlaces));
				        	$filaCon = mysqli_fetch_array($resultadoCon);
				            	$xTitulo      = $filaCon['titulo_contenido'];
				                $xContenido_f = $filaCon['contenido_3'];
				        ?>
				        <div class="col-md-4">
							<h3 class="section-title">Sobre Joel</h3>
							<?php 
                            	$xResumen_m = strip_tags($xContenido_f);
                                $strCut = substr($xResumen_m,0,230);
                                $xResumen_m = $strCut.'...';
                            ?>
							<p style="color: white;"><?php echo $xResumen_m; ?><a style="color:#00b1e8;" href="/joel.php">Ver más [+]</a></p>
						</div>
						<?php
				            mysqli_free_result($resultadoCon);
				        ?>
						<?php
		                 	$consultarCot = 'SELECT * FROM contacto';
		                 	$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
		                 	$filaCot  = mysqli_fetch_array($resultadoCot);
			                    $xDirection   = $filaCot['direction'];
			                    $xPhone       = $filaCot['phone'];
		    	                $xMobile      = $filaCot['mobile'];
		        	            $xEmail       = $filaCot['email'];
		                ?>
						<div class="col-md-4">
							<h3 class="section-title">Direcci&oacute;n</h3>
							<ul class="contact-info">
								<?php if($xDirection!=""){ ?><li style="color: white;"><i class="fas fa-map-marker-alt"></i><?php echo $xDirection; ?></li><?php } ?>
								<?php if($xPhone!=""){ ?><li style="color: white;"><i class="fas fa-phone"></i><?php echo $xPhone; ?></li><?php } ?>
								<?php if($xMobile!=""){ ?><li style="color: white;"><i class="fab fa-whatsapp"></i><?php echo $xMobile; ?></li><?php } ?>
								<?php if($xEmail!=""){ ?><li style="color: white;"><i class="far fa-envelope"></i><?php echo $xEmail; ?></li><?php } ?>
							</ul>
						</div>
						<div class="col-md-4">
							<h3 class="section-title">Contacto</h3>
							<div class="contact-form">
								<div class="form-group">
									<label for="nombre-1" class="sr-only">Nombre:</label>
									<input type="text" class="form-control" id="nombre-1" name="nombres" placeholder="Nombres">
								</div>
								<div class="form-group">
									<label for="email-1" class="sr-only">Email:</label>
									<input type="email" class="form-control" id="email-1" name="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="mensaje-1" class="sr-only">Mensaje:</label>
									<textarea class="form-control" id="mensaje-1" name="mensaje" rows="4" placeholder="Mensaje"></textarea>
								</div>
								<div id="mail-status-1" class="form-group">
								</div>
								<div class="form-group">
									<div class="form-group">
										<?php $fecha = date("Y-m-d"); ?>
                                        <input type="hidden" id="fecha" name="fecha_ingreso" value="<?php echo $fecha ?>">
										<button name="submit" onClick="sendContacto();" class="btn btn-primary btn-send-message btn-md">
		                                	Enviar Mensaje
		                                </button>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row copy-right">
						<div class="col-md-8 col-md-offset-2 text-center">
							<p class="fh5co-social-icons">
								<?php
			                        $consultarSol = "SELECT * FROM social WHERE estado='1' ORDER BY orden";
			                        $resultadoSol = mysqli_query($enlaces,$consultarSol) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                        while($filaSol = mysqli_fetch_array($resultadoSol)){
			                         	$xType      = $filaSol['type'];
			                         	$xLinks     = $filaSol['links'];
			                         	if($xType=="fa-facebook-square"){ $xValor = "fa-facebook-f"; }
				                        if($xType=="fa-twitter-square"){ $xValor = "fa-twitter"; }
				                        if($xType=="fa-google-plus-official"){ $xValor = "fa-google-plus-g"; }
				                        if($xType=="fa-linkedin"){ $xValor = "fa-linkedin-in"; }
				                        if($xType=="fa-behance"){ $xValor = "fa-behance"; }
				                        if($xType=="fa-youtube-play"){ $xValor = "fa-youtube"; }
				                        if($xType=="fa-vimeo"){ $xValor = "fa-vimeo-v"; }
				                        if($xType=="fa-wordpress"){ $xValor = "fa-wordpress"; }
				                        if($xType=="fa-tumblr-square"){ $xValor = "fa-tumblr"; }
				                        if($xType=="fa-pinterest"){ $xValor = "fa-pinterest-p"; }
				                        if($xType=="fa-instagram"){ $xValor = "fa-instagram"; }
				                        if($xType=="fa-flickr"){ $xValor = "fa-flickr"; }
			                    ?>
                    			<a href="<?php echo $xLinks; ?>"><i class="fab <?php echo $xValor; ?>"></i></a>
								<?php
									}
									mysqli_free_result($resultadoSol);
								?>
							</p>
							<p>Copyright 2018 <a href="/index.php">Joel Couching</a>. Todos los derechos Reservados. <br>Dise&ntilde;ado por <a href="https://update.pe/" target="_blank">update.pe</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>