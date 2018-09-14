		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						
						<div class="col-md-4">
							<h3 class="section-title">Sobre Joel</h3>
							<p style="color: white;">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
						</div>
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
								<li style="color: white;"><i class="fas fa-map-marker-alt"></i><?php echo $xDirection; ?></li>
								<li style="color: white;"><i class="fas fa-phone"></i><?php echo $xPhone; ?></li>
								<li style="color: white;"><i class="fab fa-whatsapp"></i><?php echo $xMobile; ?></li>
								<li style="color: white;"><i class="far fa-envelope"></i><?php echo $xEmail; ?></li>
							</ul>
						</div>
						
						<div class="col-md-4">
							<h3 class="section-title">Contacto</h3>
							<form class="contact-form">
								<div class="form-group">
									<label for="name" class="sr-only">Nombre:</label>
									<input type="name" class="form-control" id="name" placeholder="Nombre">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Mensaje:</label>
									<textarea class="form-control" id="message" rows="4" placeholder="Mensaje"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Enviar Mensaje">
								</div>
							</form>
						</div>
					</div>
					
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<?php
			                        $consultarSol = 'SELECT * FROM social WHERE estado=1 ORDER BY orden';
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
							<p>Copyright 2018 <a href="index.php">Joel Couching</a>. Todos los derechos Reservados. <br>Dise&ntilde;ado por <a href="update.pe" target="_blank">update.pe</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>