<!DOCTYPE html>
<html lang="es"> <!--<![endif]-->
<!-- *******************SECCION ENCABEZADO****************** -->
<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	include ("php/secciones/pagComun/header.php");
?>
<!-- ******************************************************* -->
<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->
<!-- TOP NAV -->
<!-- ***********SECCION DE MENU*************** -->
<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	include ("php/secciones/pagComun/menu.php");
	
?>
<!-- ***************************************** -->
<!-- WRAPPER -->
<div id="wrapper">
	<div class="content container">
            <div id="promo-slider" class="slider flexslider">

            <!--***************************************CONTENIDO PAGINA******************************-->

				<!-- *******************SECCION SLIDER****************** -->
				<?php
					include ("php/secciones/home/slider.php");
				?>
				<!-- *************************************************** -->
			</div>	
				
				<!-- ******************SECCION PROMO***************** -->
				<?php
					include ("php/secciones/home/promo.php");
				?>
				<!-- *************************************************** -->
				<!-- TWO COLUMNS -->
				<div class="row">
					<!-- **************SECCION NOTICIAS*********** -->
					<?php
						include ("php/secciones/home/news.php");
					?>
					<!-- *************************************************** -->
					<!-- second column -->
					<!-- ****************SECCION CONTENIDO *************** -->
					<?php
						include ("php/secciones/home/contenido.php");
					?>
					<!-- *************************************************** -->
				</div>
				<!-- /TWO COLUMNS -->
				<div class="divider half-margins"><!-- divider -->
				<!--<i class="fa fa-star"></i>-->
			</div>
			<!-- ****************SECCION PREMIOS*************** -->
			<?php
				include ("php/secciones/home/premios.php");
			?>
			<!-- *************************************************** -->
		</div>
		<!-- /center column -->
		<!-- right column -->
	</div><!-- /.row -->
</div><!-- /.container -->

		<!-- /WRAPPER -->
		<!-- *****************SECCION FOOTER *********************** -->
		<?php
			include ("php/secciones/pagComun/footer.php");
		?>
		<!-- *************************************************** -->



		<!-- *****************SECCION JS_FOOTER ******************** -->
		<?php
			include ("php/secciones/pagComun/js_footer.php");
		?>
		<!-- ******************************************************* -->
		<!-- <script type="text/javascript" src="assets/js/video.js"></script> -->
</body>
	<!-- Mirrored from theme.stepofweb.com/Atropos/v1.7/HTML/magazine-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jan 2016 20:07:19 GMT -->
</html>