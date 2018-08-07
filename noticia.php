
<!DOCTYPE html>
 <html class="no-js"> <!--<![endif]-->
	<head>
		<title>JopaCoaching | Blog</title>
		<?php 
			include ('module/head.php')
		?> 

	</head>
	<body>
<div id="fh5co-wrapper">
<div id="fh5co-page">

		<?php 
			include ('module/menu.php');
		?>
		<style type="text/css">
			.back_intro{
				background-image: url(img/big-header-2.jpeg);
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
							<p class="text_p">Descripcion corta de la noticia </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- blogheader -->

		<!-- brumcs-->
		<div class="container-flud" style="background-color: #cccccc;">
			<div class="container">
				<div class="row">
					<div class="col-md-8 offset-md-4"><br>
						<ul class="breadcrumb">
						  <li><a href="index.php"><i class="fas fa-home"></i> Blog</a></li>
						  <li><a href="#">Titulo de Noticia</a></li>
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
						<div class="col-md-12">
							<div class="heading-section">
								<h2 class="h2_title_black">Noticias Recientes</h2>
							</div>
						</div>

					<div class="col-md-8 col-sm-12">

						<!--ietmblog-->
						<div class="col-md-12">
							<div class="fh5co-blog ">
								
									<a href="#"><img class="img-responsive" style="width: 100%;" src="http://via.placeholder.com/500x250" alt=""></a>
								
								<div class="desc" style="padding: 20px;">
									<h3><a href=""#>Loren Ipsum Moment Morat Relax text.</a></h3>
									<span class="posted_by">Posted by: Admin</span>
									<p class="text_blog">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								</div> 
							</div>
							<hr>
						</div>
						<!--ietmblog-->




					</div>
					<div class="col-md-4 col-sm-12">
						<div class="heading-blog">
							<h2 class="h2_title_black">Categorias</h2>
						</div>
						<ul style="column-count: 2;">
							<li>Categoria #1</li>
							<li>Categoria #2</li>
							<li>Categoria #3</li>
							<li>Categoria #4</li>
							<li>Categoria #5</li>
						</ul>
						<div class="heading-blog">
							<h2 class="h2_title_black">Eventos</h2>
							<div class="row">
								<!--itemcalendeda-->
								<div class="col-md-12">
									<div class="fh5co-blog ">
										<div class="meta-date text-center">
											<p><span class="date">14</span><span>June</span><span>2018</span></p>
										</div>
										<div class="desc desc2">
											<h3><a href=""#>Loren Ipsum Moment.</a></h3>
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
											<h3><a href=""#>Loren Ipsum Moment.</a></h3>
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
											<h3><a href=""#>Loren Ipsum Moment.</a></h3>
											<p class="text_calen">simply dummy text of the printing and typesetting industry.</p>
										</div> 
									</div>
								</div>
								<!--itemcalendeda-->
							</div>
						</div>
						<!-- <div class="heading-blog">
							<h2 class="h2_title_black">Tags</h2>
							<div class="row">
								<ul>
									<li class="tags">loren</li>
									<li class="tags">loren</li>
									<li class="tags">loren</li>
									<li class="tags">loren</li>
									<li class="tags">loren</li>		
								</ul>
							</div>
						</div> -->	
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

