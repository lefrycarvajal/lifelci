<!--// Footer \\-->
	<footer id="hotmeal-footer" class="hotmeal-footer-one">
		<span class="hotmeal-footer-transparent"></span>

		<!--// Footer Widget \\-->
		<div class="hotmeal-footer-widget">
			<div class="container">
				<div class="row">

					<!--// Widget About Us \\-->
					<aside class="col-md-4 widget widget_latest_post">
						<h2 class="footer-widget-title">NOTICIAS GASTRONOMICAS</h2>
						<ul>
							<li>
								<h5 ><a style="color: white">El gran giro de la gastronomía post Covid-19 en Dominicana</a></h5>
								<h6><a href="blog-detail.html">12/2/2021</a></h6>
								
								
							</li>
							<li>
								<h5 ><a style="color: white">Dominicana Gourmet – Food & Travel</a></h5>
								<h6><a href="blog-detail.html">10/3/2021</a></h6>
							</li>
							<li>
								<h5 ><a style="color: white">Impulso de la gastronomia</a></h5>
								<h6><a href="blog-detail.html">22/01/2021</a></h6>
							</li>
						</ul>
					</aside>
					<!--// Widget About Us \\-->

					<!--// Widget Links \\-->
					<aside class="col-md-4 widget widget_links">
						<h2 class="footer-widget-title">ACCESO RAPIDO</h2>
						<ul>
							<li><a href="index.php">INICIO</a></li>
							<li><a href="lugares.php">LUGARES</a></li>
							<li><a href="about.php">SOBRE NOSOTROS</a></li>
							<li><a href="reserva.php">RESERVAS</a></li>
							
						</ul>
					</aside>
					<!--// Widget Links \\-->

					<!--// Widget Our Newsletter \\-->
					<aside class="col-md-4 widget widget_newsletter">
						<h2 class="footer-widget-title">NOTICIAS</h2>
						<p>SUBSCRIBETE PARA RECIBIR TODAS NUESTRAS NOTIFICACIONES</p>
						<form method="POST">
							<ul>
								<li><input type="email" name="correo" value="Correo" onblur="if(this.value == '') { this.value ='Email*'; }" onfocus="if(this.value =='Email*') { this.value = ''; }"></li>
								<li><label class="submit"><input type="submit" name="send" value="Subscribete ahora"><span></span></label></li>
							</ul>
						</form>
						<?php 
						include_once("newsletter.php")
						?>
					</aside>
					<!--// Widget Our Newsletter \\-->

				</div>
			</div>
		</div>
		<!--// Footer Widget \\-->

		<!--// CopyRight \\-->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="hotmeal-copyright">
						<p><a target="_blank" href="https://www.templateshub.net">Dominican Gourmet</a></p>
					</div>
				</div>
			</div>
		</div>		
		<!--// CopyRight \\-->

	</footer>
	<!--// Footer \\-->

	<div class="clearfix"></div>

	</div>
	<!--// Main Wrapper \\-->

	<!-- Modal -->
	<div class="modal fade searchmodal" id="searchmodal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-body">
				<a href="#" class="hotmeal-close-btn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></a>
				<form>
					<input type="text" value="Type Your Keyword" onblur="if(this.value == '') { this.value ='Type Your Keyword'; }" onfocus="if(this.value =='Type Your Keyword') { this.value = ''; }">
					<input type="submit" value="">
					<i class="fa fa-search"></i>
				</form>
			</div>
		</div>
	</div>

	 <!-- jQuery (necessary for JavaScript plugins) -->
	 <script type="text/javascript" src="script/jquery.js"></script>
	 <script type="text/javascript" src="script/bootstrap.min.js"></script>
	 <script type="text/javascript" src="script/slick.slider.min.js"></script>
	 <script type="text/javascript" src="script/fancybox.pack.js"></script>
	 <script type="text/javascript" src="script/isotope.min.js"></script>
	 <script type="text/javascript" src="script/progressbar.js"></script>
	 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	 <script type="text/javascript" src="script/functions.js"></script>

	</body>

</html>