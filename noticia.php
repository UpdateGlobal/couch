<?php include("cms/module/conexion.php"); ?>
<!DOCTYPE html>
<html class="no-js">
	<!--<![endif]-->
	<head>
		<title>JopaCoaching | Blog</title>
		<?php include('module/head.php'); ?> 
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<?php include ('module/menu.php'); ?>
				<style type="text/css">
					.back_intro{
					background-image: url(img/big-header-2.jpeg);
					}
					h1, h2, h3, h4, h5, h6 {
					font-family: helvetica !important;
					font-weight: 50;
					}
					@media screen and (max-width: 1250px) {
					.back_intro{
					background-image: url(img/big-header-2.jpeg);
					}
					}
					@media screen and (max-width: 992px) {
					.back_intro{
					background-image: url(img/big-header-3.jpeg);
					}
					}
					@media screen and (max-width: 450px) {
					.back_intro{
					background-image: url(img/big-header-1.jpeg);
					}
					}
				</style>
				<!-- blogheader -->
				<div class="fh5co-parallax back_intro" data-stellar-background-ratio="0.5" style="background-position: -400px 0px !important;">
					<div class="overlay"></div>
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
								<div class="fh5co-intro fh5co-table-cell animate-box">
									<h1 class="text-center">Titulo de Noticia</h1>
									<p class="text_p">Descripcion corta de la noticia</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- blogheader -->
				<!-- brumcs-->
				<div class="container-flud" style="background-color: #00b1e8;">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-md-4">
								<br>
								<ul class="breadcrumb">
									<li><a href="index.php"><i class="fas fa-home"></i> Inicio</a> / <a href="blog.php">Blog</a> / Noticia</li>
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
								<!--ietmblog-->
								<div class="col-md-12">
									<a href="#"><img class="img-responsive" style="width: 100%;" src="img/noticia.jpeg" alt=""></a>
									<div class="desc" style="padding: 20px;">
										<h3>Loren Ipsum Moment Morat Relax text.</h3>
										<span class="posted_by">Posted by: Admin</span>
										<p class="text_blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
									</div>
								</div>
								<!--ietmblog-->
							</div>
							<div class="col-md-4 col-sm-12">
								<?php include('module/menu-blog.php'); ?>	
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