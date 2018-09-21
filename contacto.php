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
		<title><?php echo $xTitulo; ?> | Joel Henrique Perez</title>
		<?php include('module/head.php'); ?>
		<script>
		    function sendContact(){
		        var valid;
		        valid = validateContact();
		        if(valid) {
		            jQuery.ajax({
		                url: "/contact_form.php",
		                data:'nombres='+$("#nombre").val()+'&email='+$("#email").val()+'&mensaje='+$("#mensaje").val()+'&fecha_ingreso='+$("#fecha").val(),
		                type: "POST",
		                success:function(data){
		                    $("#mail-status").html(data);
		                },
		                error:function (){}
		            });
		        }
		    }
		    function validateContact() {
		        var valid = true;
		        if(!$("#nombre").val()) {
		            $("#nombre").css('background-color','#f28282');
		            valid = false;
		        }
		        if(!$("#email").val()) {
		            $("#email").css('background-color','#f28282');
		            valid = false;
		        }
		        if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		            $("#email").css('background-color','#f28282');
		            valid = false;
		        }
		        if(!$("#mensaje").val()) {
		            $("#mensaje").css('background-color','#f28282');
		            valid = false;
		        }
		        return valid;
		    }
		</script>
	</head>
	<body>
		<?php $menu="contacto"; include ('module/menu.php'); ?>
		<style type="text/css">
			.back_intro{
			background-image: url(/img/big-header-2.jpeg);
			}
		</style>
		<!-- servicioshead -->
		<div class="fh5co-parallax back_intro" data-stellar-background-ratio="0.5" style="background-position: -400px 0px !important;">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Contactanos</h1>
							<p class="text_p">Cualquier consulta puedes llamarme</p>
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
							<li><a href="/index.php"><i class="fas fa-home"></i> Inicio</a> / Contacto</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- brumcs-->
		<!-- end:fh5co-hero -->
		<div id="fh5co-contact">
			<div class="container">
				<div>
					<div class="row">
						<div class="col-md-6 animate-box">
							<h3 class="section-title">Contactenos</h3>
							<?php
			                 	$consultarCot = 'SELECT * FROM contacto';
			                 	$resultadoCot = mysqli_query($enlaces,$consultarCot) or die('Consulta fallida: ' . mysqli_error($enlaces));
			                 	$filaCot  = mysqli_fetch_array($resultadoCot);
				                    $xDirection   = $filaCot['direction'];
				                    $xPhone       = $filaCot['phone'];
			    	                $xMobile      = $filaCot['mobile'];
			        	            $xEmail       = $filaCot['email'];
			            	        $xMap         = $filaCot['map'];
			                	    $xFormem      = $filaCot['form_mail'];
		                	?>
							<ul class="contact-info">
								<?php if($xDirection!=""){ ?><li><i class="fas fa-map-marker-alt"></i> <?php echo $xDirection; ?></li><?php } ?>
								<?php if($xPhone!=""){ ?><li><i class="fas fa-phone"></i> <?php echo $xPhone; ?></li><?php } ?>
								<?php if($xMobile!=""){ ?><li><i class="fab fa-whatsapp"></i> <?php echo $xMobile; ?></li><?php } ?>
								<?php if($xEmail!=""){ ?><li><i class="far fa-envelope"></i> <?php echo $xEmail; ?></li><?php } ?>
							</ul>
						</div>
						<div class="col-md-6 animate-box">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombres">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" id="email" name="email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea id="mensaje" name="mensaje" class="form-control" cols="30" rows="7" placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 co-xs-12">
                                	<div class="form-group">
                                		<div id="mail-status"></div>
                                	</div>
                            	</div>
								<div class="col-md-12">
									<div class="form-group">
										<?php $fecha = date("Y-m-d"); ?>
                                        <input type="hidden" id="fecha" name="fecha_ingreso" value="<?php echo $fecha ?>">
										<button name="submit" onClick="sendContact();" class="btn btn-primary">
		                                	Enviar Mensaje
		                                </button>
									</div>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo $xMap; ?>
		<?php 
			include('module/footer.php');
			include('module/script.php');
		?>
	</body>
</html>