<?php
include_once("header.php")
?>

<body>
	 
	 <!--// Main Wrapper \\-->
	 <div class="hotmeal-main-wrapper">

	<!--// Header \\-->
	<header id="hotmeal-header" class="hotmeal-header-one">
		<div class="hotmeal-main-header">
			<div class="container">
				<div class="row">
					<aside class="col-md-2"> <a href="index-2.html" class="logo"><img src="images/logo.png" width="100px" alt=""></a> </aside>
					<aside class="col-md-10">
						<!--// Navigation \\-->
						<a href="#menu" class="menu-link active"><span></span></a>
						<nav id="menu" class="menu navbar navbar-default">
							<ul class="level-1 navbar-nav">
								<li><a href="index.php">INICIO</a></li>
								<li><a href="lugares.php">LUGARES</a></li>
								<li><a href="about.php">SOBRE NOSOTROS</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									
								</li>
								<li><a href="reserva.php">RESERVA</a><span class="has-subnav"><i class="fa fa-angle-down"></i></span>
									
								</li>
								
								
							</ul>
						</nav>
						<!--// Navigation \\-->
						
					</aside>
			 	</div>
			</div>
		</div>
	</header>
	<!--// Header \\-->

	<!--// SubHeader \\-->
	<div class="hotmeal-subheader-map"><div id="map"></div></div>
    <!--// SubHeader \\-->

	<!--// Main Content \\-->
	<div class="hotmeal-main-content hotmeal-contact-padding">

		<!--// Main Section \\-->
		<div class="hotmeal-main-section hotmeal-contact-full">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="hotmeal-contact-us">
							<div class="hotmeal-contact-info">
								<ul>
									<li>
										<div class="hotmeal-contact-info-wrap">
											<i class="icon hotmeal-telephone"></i>
											<small></small>
											<h5>LLAMANOS A</h5>
											<p>849-578-4999</p>
											
										</div>
									</li>
									<li>
										<div class="hotmeal-contact-info-wrap">
											<i class="icon hotmeal-close-envelope"></i>
											<small></small>
											<h5>ESCRIBENOS A</h5>
											<a href="mailto:yourdomain@name.com">info@domicangourmet.com</a>
											
										</div>
									</li>
									<li>
										<div class="hotmeal-contact-info-wrap">
											<i class="icon hotmeal-facebook-placeholder-for-locate-places-on-maps"></i>
											<small></small>
											<h5>Estamos en</h5>
											<p>piantini,esquina maximo gones, doblando por blue mal calle 87</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="hotmeal-contact-form">
								<form method="POST" class="myform" >
									<ul>
										<li>
											<input value="Nombre" name="nombre"    type="text">
										</li>

										<li>
											<input value="Correo" name="correo"   type="email">
										</li>

										<li>
											<input value="Telefono" name="telefono" type="text">
										</li>

										<li class="full">
											<textarea placeholder="Mensaje" name="mensaje"></textarea>
										</li>
										<li class="full">
												<button type="submit" name="enviar" value="Enviar ahora">Enviar</button>

										</li>
									</ul>
									<?php 
									include_once("reservareg.php")
									?>
								</form>

								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--// Main Section \\-->

	

	</div>
	<!--// Main Content \\-->
<?php
include_once("footer.php")
?>