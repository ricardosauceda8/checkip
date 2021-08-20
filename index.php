<?php 
include 'checkip.php';
$ch = new CheckIP();
    //Example ip for localhost 
    //$user_ip = "1.1.1.19";
$user_ip = $ch->getUserIP();
$inicial = $user_ip[0];
$ch->validateIP($inicial, "morelos-subdominio-lg", $user_ip);

header("Cache-Control: public, max-age=86400");

?>
<html lang="en">
<head itemscope itemtype="http://schema.org/Dataset">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" itemprop="description" content="Servicio LG en Morelos. Servicio Urgente a Domicilio en 2hrs. Centro de Servicio a Estufas LG. Reparación, Mantenimiento e Instalación de Refrigeradores, Lavadoras, Secadoras, Centros de Lavado, Estufas y Lavavajillas LG. Teléfono: 527772592447">
	<meta name="Keywords" itemprop="keywords" content="Servicio LG Morelos, Reparacion de Estufas LG Electronics, Reparacion de Lavadoras LG Electronics, Reparacion de refrigeradores LG Electronics, Reparacion de Secadoras LG Electronics, Reparacion de Centros de Lavado LG Electronics, Servicio LG Electronics, Mantenimiento LG Electronics, Reparación de refrigeradores, Reparación de refrigeradores LG, Reparación de Hornos LG, Reparación de Parrillas LG, Servicio de Linea Blanca para refrigeradores, Reparación de refrigeradores, Reparacion de refrigeradores, Servicio paa refrigeradores a Domicilio, servicio a domicilio, servicio urgente, servicio tecnico para refrigeradores, servicio LG, servicio para refrigeradores LG, servicio para estufas LG, servicio para centro de lavado LG, servicio para secadoras LG">
	<meta name="title" content="Servicio LG | Centro Especializado | Servicio Urgente en Morelos | -10% de Descuento">
	<meta name="author" content="Reparación de Linea Blanca en México">
	<meta name="Subject" content="Reparación de Estufas a Domicilio">
	<meta name="Language" content="es">
	<meta name="Revisit-after" content="15 days">
	<meta name="Distribution" content="Global">
	<meta name="Robots" content="Index, follow">
	<title>Servicio LG en Morelos  | -10% de descuento | Refrigeradores, Estufas, Lavadoras</title>

	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<link href="css/carousel.css" rel="stylesheet" crossorigin="anonymous">

	<!-- Favicons -->
	<link rel="icon" href="assets/img/reparacion-y-mantenimiento-electrolux-a-domicilio.png">

	<meta name="theme-color" content="#000">

	<!-- Custom styles for this template -->
	<link href="css/album.css" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
	<header class="sticky-top position"  >
		<div class="bg-black collapse" id="navbarHeader" style="">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
						<h4 class="text-white"><b class="color-lg">Servicio Autorizado LG</b></h4>
						<p class="text-white">Si se descompuso tu Refrigerador, Lavadora, Secadora, Centro de Lavado, Estufa o Lavavajillas, no dudes en comunicarte con nosotros y pedir la visita de uno de nuestros técnicos en la comodidad de tu hogar.</p>
					</div>
					<div class="col-sm-4 offset-md-1 py-4">
						<h4 class="text-white">Contacto</h4>
						<ul class="list-unstyled">
							<li><a href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" class="text-white" onclick="ga('send', 'event', 'lg', 'whatsheader', 'clic')">Agendar una Visita</a></li>
							<li><a href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" class="text-white" onclick="ga('send', 'event', 'lg', 'whatsheader', 'clic')">Servicio Urgente</a></li>
							<li><a href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" class="text-white" onclick="ga('send', 'event', 'lg', 'whatsheader', 'clic')">Enviar Whatsapp</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar  navbar-dark bg-black shadow-sm ">
			<div class="container d-flex justify-content-between">
				<a href="#" class="navbar-brand d-flex align-items-center">
					<img src="assets/img/logo-lg.png" class="logo-lg" alt="servicio LG">
				</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon my-toggler"></span>
				</button>
			</div>
		</div>
	</header>

	<main role="main">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" class=""></li>
				<li data-target="#myCarousel" data-slide-to="2" class=""></li>
				<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			</ol>
			<div class="carousel-inner">

				<div class="carousel-item active">

					<div itemscope="" itemtype="http://schema.org/ImageObject">
						<img class="d-block w-100 hidde-element-mobile" src="assets/img/reparacion-de-lavadora-lg.jpg" alt="servicio tecnico LG" itemprop="contentUrl">
						<img class="w-100 hidde-element-web full-size" src="assets/img/reparacion-de-lavadora-lg-mobile.jpg" alt="servicio tecnico LG" itemprop="contentUrl">
					</div>

					<div class="container">
						<div class="carousel-caption text-left" itemscope itemtype="http://schema.org/Dataset">
							<h2 class="tittle-h2"><b itemprop="name"> Servicio LG</b></h2>
							<p class="text" itemprop="description">Servicio LG a domicilio en todo Morelos. Reparamos Refrigeradores, Estufas, Lavadoras, Centros de Lavado y Congeladores.</p>
							<p><a class="btn bg-lg btn-lg btn-web-action text-white" href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" onclick="ga('send', 'event', 'lg', 'whatsslide', 'clic')" ><b>Agendar Visita</b></a>
								<a class="btn bg-lg btn-lg btn-mobile-action text-white" href="tel:+527772592447" role="button" onclick="ga('send', 'event', 'lg', 'callslide', 'clic')"><b>Agendar Visita</b></a>
							</p>
						</div>
					</div> 
				</div>

				<div class="carousel-item">

					<div itemscope="" itemtype="http://schema.org/ImageObject">
						<img class="d-block w-100 hidde-element-mobile" src="assets/img/reparacion-de-estufas-lg-cdmx.jpg" alt="servicio LG" itemprop="contentUrl">
						<img class="w-100 hidde-element-web full-size" src="assets/img/reparacion-de-estufas-lg-cdmx-mobile.jpg" alt="servicio LG" itemprop="contentUrl">
					</div>

					<div class="container">
						<div class="carousel-caption" itemscope itemtype="http://schema.org/Dataset">
							<h2 class="tittle-h2"><b itemprop="name">Servicio de Reparación</b></h2>
							<p class="text" itemprop="description">Contamos con el mejor servicio de reparación de equipos de línea blanca LG, nuestro modo de trabajo es mucho más rápido y sobre todo efectivo.</p>
							<p><a class="btn bg-lg btn-lg btn-web-action text-white" href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" onclick="ga('send', 'event', 'lg', 'whatsslide', 'clic')"><b>Solicitar Ayuda</b></a>
								<a class="btn bg-lg btn-lg btn-mobile-action text-white" href="tel:+527772592447" onclick="ga('send', 'event', 'lg', 'callslide', 'clic')"><b>Solicitar Ayuda</b></a></p>
							</div>
						</div>
					</div>

					<div class="carousel-item ">

						<div itemscope="" itemtype="http://schema.org/ImageObject">
							<img class="d-block w-100 hidde-element-mobile" src="assets/img/reparacion-de-refrigeradores-lg-cdmx.jpg" alt="servicio tecnico LG" itemprop="contentUrl">
							<img class="w-100 hidde-element-web full-size" src="assets/img/reparacion-de-refrigeradores-lg-cdmx-mobile.jpg" alt="servicio tecnico LG" itemprop="contentUrl">
						</div>

						<div class="container">
							<div class="carousel-caption text-right" itemscope itemtype="http://schema.org/Dataset">
								<h2 class="tittle-h2"><b itemprop="name">Servicio de Instalación</b></h2>
								<p class="text" itemprop="description">Al contar con más de 20 años de experiencia brindamos Servicio de Instalación para Refrigeradores, Lavadoras, Secadoras, Centros de Lavado, Estufas y Lavavajillas.</p>
								<p><a class="btn btn-lg bg-lg btn-web-action text-white" href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" onclick="ga('send', 'event', 'lg', 'msjslide', 'clic')"><b>Enviar Mensaje</b></a><a class="btn btn-lg bg-lg  btn-mobile-action text-white" href="tel:+527772592447" onclick="ga('send', 'event', 'lg', 'callslide', 'clic')" ><b>Llamar Ahora</b></a></p>
							</div>
						</div>
					</div>

					<div class="carousel-item">

						<div itemscope="" itemtype="http://schema.org/ImageObject">
							<img class="d-block w-100 hidde-element-mobile" src="assets/img/reparacion-de-estufas-cdmx.jpg" alt="servicio tecnico LG" itemprop="contentUrl">
							<img class="w-100 hidde-element-web full-size" src="assets/img/reparacion-de-estufas-cdmx-mobile.jpg" alt="servicio tecnico LG" itemprop="contentUrl">
						</div>

						<div class="container ">
							<div class="carousel-caption text-left" itemscope itemtype="http://schema.org/Dataset">
								<h2 class="tittle-h2"><b itemprop="name"> Servicio de Mantenimiento</b></h2>
								<p class="text" itemprop="description">Si tienes algún problema con tu estufa, horno, refrigerador, lavadora, centro de lavado, congelador o lavavajillas no dudes en llamarnos, te ayudaremos a resolverlo.</p>
								<p><a class="btn btn-lg bg-lg btn-web-action text-white" href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" onclick="ga('send', 'event', 'lg', 'whatsslide', 'clic')" ><b>Solicitar Servicio</b></a><a class="btn btn-lg bg-lg btn-mobile-action text-white" href="tel:+527772592447" role="button" onclick="ga('send', 'event', 'lg', 'callslide', 'clic')"><b>Llamar Ahora</b></a></p>
							</div>
						</div> 
					</div>

				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

			<section class="jumbotron cta-black">
				<div class="container marketing">
					<div class="row featurette">
						<div class="col-md-5 text-center" itemscope itemtype="http://schema.org/ImageObject" >
							<img class="img-lavadora mb-mobile" src="assets/img/lavadora.png" alt="servicio tecnico LG" itemprop="contentUrl">
						</div>
						<div class="col-md-7">
							
							<h2 class="featurette-heading-small"><b>Reparación de Lavadoras</b></h2>
							<p class="lead">Si tu lavadora, secadora, lavasecadora o centro de lavado LG hace ruidos al lavar, no lava, no centrifuna, no termina sus ciclos o no los inicia, nosotros te podemos ayudar a reparar tu equipo. <b><b>Ofrecemos refacciones originales, presupuestos honestos, garantía por escrito y en sistema.</b></b></p><br>
						</div>
					</div>
				</div>
			</section>
			<div class="container-fluid text-center inside-block bg-grey padd-tb">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
						<h2 class="featurette-heading-small "><b>Métodos de Pago</b></h2>
						<p class="lead">Gracias a la tecnología recibimos diferentes métodos de pago, por mencionar algunos: <b><b>Pago en efectivo, Pago a cuenta bancaria, Transferencia bancaria, Pago por Paypal y Pago con tarjeta de crédito o débito</b></b></p>
						<br>
					</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 pay">
						<img src="https://soportetecnicosamsung.com/assets/img/clip.png" class=" clip" alt="servicio LG" width="60px">
					</div>
					<div class="col-md-3 pay">
						<img src="https://soportetecnicosamsung.com/assets/img/bbva.png" class=" bbva" alt="servicio tecnico LG" width="120px">
					</div>
					<div class="col-md-3 pay">
						<img src="https://soportetecnicosamsung.com/assets/img/visa.png" class=" visa" alt="servicio LG" width="110px">
					</div> 
					<div class="col-md-3 pay">
						<img src="https://soportetecnicosamsung.com/assets/img/mastercard.png" class="master" alt="servicio tecnico LG" width="70px">
					</div>

				</div>
			</div>

			<section class="jumbotron cta-yellow text-white">
				<div class="container marketing">
					<div class="row featurette">
						<div class="col-md-7 mb-mobile">

							<h2 class="featurette-heading-small"><b>Reparación de Refrigeradores</b></h2>
							<p class="lead">Si tu refrigerador ya no enfría, no congela, no saca agua o no hace los hielos ni su ciclo cuando debe hacerlo, <b><b>nosotros te podemos ayudar, somos expertos en cualquier tipo de reparación, mantenimiento o instalación de refrigeradores LG.</b></b></p>
							<a href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" class="btn my-2 shadow-lg btn-lg btn-success btn-web-action" onclick="ga('send', 'event', 'lg', 'whatsbody', 'clic')"><b>Agendar Visita vía Whatsapp</b></a>

						</div>
						<div class="col-md-5 text-center" itemscope itemtype="http://schema.org/ImageObject" >
							<img class="img-whirlpool-png " src="assets/img/refrigeradores.png" alt="servicio tecnico LG" itemprop="contentUrl">
						</div>
					</div>
				</div>
			</section>

			<div class="container marketing padd-tb">

				<div class="row">
					<div class="col-12" style="text-align: center;">
						<h2 class="featurette-heading-small color-lg"><b>¿Por qué Contratarnos?</b></h2>
						<p class="lead">Porque nosotros ofrecemos alta calidad en nuestros <b><b>servicios en reparación, instalación y mantenimiento</b></b> de estufas, hornos de cocción, secadoras, lavadoras, centros de lavado, refrigeradores y parrillas LG, <b><b>tanto de hogares como industriales.</b></b></p>
						<br><br>
					</div>
					<div class="col-lg-4 col-md-4 ">
						<img src="assets/img/servicio-a-domicilio-reparacion-de-estufas.png" class="rounded" alt="servicio LG" width="100px" height="100px">
						<h2><b>Servicio a Domicilio</b></h2>
						<p>Nuestros técnicos te visitan en la comodidad de tu hogar, negocio o empresa.</p>

					</div>
					<div class="col-lg-4 col-md-4">
						<img src="assets/img/piezas-originales-reparacion-de-estufas.png" class="rounded" alt="servicio tecnico LG" width="100px" height="100px">
						<h2><b>Refacciones Originales</b></h2>
						<p>Todas nuestras refacciones son originales, nosotros no fomentamos el uso de piratería.</p>

					</div><!-- /.col-lg-4 -->
					<div class="col-lg-4 col-md-4 ">
						<img src="assets/img/garantia-de-satisfaccion-reparacion-de-estufas.png" class="rounded" alt="servicio LG" width="100px" height="100px">
						<h2><b>Garantía de Calidad</b></h2>
						<p>Todos nuestros servicios son realizados por técnicos especialistas.</p>

					</div><!-- /.col-lg-4 -->
					<!-- /.col-lg-4 -->
				</div>

			</div>

			<section class="jumbotron cta-black">
				<div class="container marketing">
					<div class="row featurette">
						<div class="col-md-5 text-center" itemscope itemtype="http://schema.org/ImageObject" >
							<img class="img-whirlpool-png mb-mobile" src="assets/img/estufa.png" alt="servicio tecnico LG" itemprop="contentUrl">
						</div>
						<div class="col-md-7">
							
							<h2 class="featurette-heading-small"><b>Reparación de Estufas</b></h2>
							<p class="lead">Somos un Centro de Servicio LG atendemos <b><b>Servicios de Reparación, Instalación y Mantanimiento de Estufas, Hornos y Parrillas LG</b></b> con cobertura en todo Morelos. Reparamos su equipo en la comodidad de su hogar. Somos expertos, no arriesgue la seguridad de su familia.</p><br>
						</div>
					</div>
				</div>
			</section>


			<section class="jumbotron cta-yellow text-white">
				<div class="container ">
					<br>
					<h2 class="featurette-heading-small text-white"><b>¿Estás interesado? <span class="text-black">Solicita una Visita</span></b></h2>

					<a href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" class="btn my-2 shadow-lg btn-success btn-web-action text-white" onclick="ga('send', 'event', 'lg', 'whatsbody', 'clic')"><b>Agendar Visita Técnica</b></a>
					<a href="tel:+527772592447" class="btn my-2 shadow-lg btn-success btn-mobile-action text-white " onclick="ga('send', 'event', 'lg', 'callbody', 'clic')"><b>Llamar Ahora</b></a>
							<!--
							<form id="contact" class="needs-validation" novalidate>
								<div class="form-group">
									<label for="nombre">Nombre del Interesado</label>
									<input type="text" class="form-control" id="nombre" placeholder="ej: Jose Perez Lopez" name="nombre" minlength="4" maxlength="40" required pattern="^[a-zA-Z0-9 ]*$">
									<div class="valid-feedback">Correcto.</div>
									<div class="invalid-feedback">Ingresa un nombre correcto. No aceptamos puros espacios en blanco. Min 5 Max 50 caracteres. No usar (*%/$+-.,).</div>
								</div>
								<div class="form-group">
									<label for="empresa">Nombre del Negocio ó Particular</label>
									<input type="text" class="form-control" id="empresa" placeholder="ej: Limpieza Industrial" name="empresa" minlength="5" maxlength="50" required pattern="^[a-zA-Z0-9 ]*$">
									<div class="valid-feedback">Correcto.</div>
									<div class="invalid-feedback">Ingresa un numero de empresa correcto. No aceptamos puros espacios en blanco. Min 5 Max 50 caracteres. No usar (*%/$+-.,).</div>
								</div>
								<div class="form-group">
									<label for="servicio">Servicio de Interés</label>
									<select class="form-control" id="servicio" name="servicio" required>
										<option value="">Selecciona una opción...</option>
										<option>LG - Visita a Domicilio</option>
										<option>LG - Instalación</option>
										<option>LG - Mantanimiento</option>
										<option>LG - Reparación</option>
									</select>

									<div class="valid-feedback">Correcto.</div>
									<div class="invalid-feedback">Selecciona una opción...</div>
								</div>
								<div class="form-group">
									<label for="telefono">Teléfono</label>
									<input class="form-control" type="tel" id="telefono" name="telefono" placeholder="ej: 5554664364" pattern="[0-9]{10}" required>
									<div class="valid-feedback">Correcto.</div>
									<div class="invalid-feedback">Ingresa un teléfono correcto, de 10 dígitos.</div>
								</div>
								<div class="form-group">
									<label for="correo">Correo</label>
									<input type="email" class="form-control" id="correo" placeholder="ej: contacto@limpiezaindustrial.com.mx" name="correo" required>
									<div class="valid-feedback">Correcto.</div>
									<div class="invalid-feedback">Ingresa un correo correcto.</div>
								</div>
								<div class="form-group form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox" name="terms" required> Acepto los <span class="text-black" >Términos y Condiciones</span>.
										<div class="valid-feedback">Correcto.</div>
										<div class="invalid-feedback">Es necesario que aceptes los términos y condiciones para continuar.</div>
									</label>
								</div>
								<a onclick="sendForm(this)" class="btn btn-success text-white shadow-lg">Solicitar Visita</a>
							</form>
						-->
					</div>
				</section>

				<div class="container-fluid bg-black">
					<div class="row">

						<div class="col-md-1 hidden-xs-down"></div>
						<div class="col-md-10 text-white" style="text-align: center;">
							<br><br>
							<h2 class="featurette-heading-small"><strong>Preguntas Frecuentes</strong>
							</h2>
							<p class="lead">A continuación listamos una pequeña serie de preguntas que hemos identificado como frecuentes o muy frecuentes, cualquier observación o comentario, no dudes y <b><a class="text-success" href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" onclick="ga('send', 'event', 'lg', 'whatsbody', 'clic')">envía un mensaje </a></b></p>
							<br><br>
						</div>
						<div class="col-md-1 hidden-xs-down"></div>

						<div class="col-md-1"></div>
						<div class="col-md-4 col-sm-6">
							<div id="list-example" class="list-group">
								<a class="list-group-item list-group-item-action active disabled" href="#list-item-1">¿Qué precio tiene la visita a mi domicilio?</a>
								<a class="list-group-item list-group-item-action disabled" href="#list-item-2">¿El precio total incluye refacciones?<a>
									<a class="list-group-item list-group-item-action disabled" href="#list-item-3">¿Cuál es su red de cobertura actúal?</a>
									<a class="list-group-item list-group-item-action disabled" href="#list-item-4">¿Me dan garatía del servicio?</a>
									<a class="list-group-item list-group-item-action disabled" href="#list-item-5">¿Qué metodos de pago aceptamos?</a>
								</div>
								<br>
							</div>

							<div class="col-md-6 col-sm-6 text-white shadow-ask">
								<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">
									<h4 id="list-item-1">¿Qué precio tiene la visita a mi domicilio?</h4>
									<p>La visita no tiene ningun costo, <b>siempre y  cuando acepte el presupuesto que nuestros técnicos le ofrezcan para la reparación de su electrodoméstico.</b> En caso contrario la visita tiene un costo de $200 pesos en la CDMX, $350 pesos en el Estado de México, también visitamos Toluca, Morelos, Cuernavaca y el precio depende de la distancia de la ubicación del servicio.</p>
									<h4 id="list-item-2">¿El precio total incluye refacciones?</h4>
									<p>Así es, el precio total incluye piezas y también te brindamos de paso una garantía que asegura la calidad y los buenos resultados de nuestros servicios.<b> Recuerda que contamos con servicio a domicilio</b> y si te animas a reparar tu equipo, la visita no tiene costo, es completamente gratis.</p>
									<h4 id="list-item-3">¿Cuál es su red de cobertura actúal?</h4>
									<p>Actualmente tenemos cobertura en toda la CDMX y sus 16 Alcaldias <b>(Álvaro Obregón, Azcapotzalco, Benito Juárez, Coyoacán, Cuajimalpa de Morelos, Cuauhtémoc, Gustavo A. Madero, IztacalcoI, ztapalapa, Magdalena Contreras, Miguel Hidalgo, Milpa Alta, Tláhuac, Tlalpan, Venustiano Carranza, Xochimilco)</b>, Ciudad de México, Área Metropolitana, Toluca, Morelos y Cuernavaca.</p>
									<h4 id="list-item-4">¿Me dan garatía del servicio?</h4>
									<p>Claro, La garantía te la entregamos en papel, con un formato impreso y también con un registro que llevamos de nuestros servicios en sistema.</b> Entonces tu garantía estará disponible también en la bandeja de entrada de tu correo personal si así lo deseas.</b></p>
									<h4 id="list-item-5">¿Que métodos de pago aceptamos?</h4>
									<p>Actualmente recibimos todas las tarjetas de <b>Crédito y Débito</b>. Por mencionar algunas: <b>VISA, AMERICAN EXPRESS, MASTER CARD, MAESTRO y más...</b> La idea principal es tener la oportunidad de trabajar contigo y abrir el catálogo de oportunidades que tenemos disponibles para ti.</p>
								</div>
							</div>
							<div class="col-md-1"></div>
						</div>
						<br><br><br><br>
					</div>

					<section class="jumbotron text-center cta-grey">
						<div class="container marketing">
							<h2 class="featurette-heading-small"><b>¿Tu refrigerador LG no funciona?</b></h2>
							<p class="lead">Nosotros brindamos un excelente <b><b>servicio de instalación, mantenimiento o reparación de refrigeradores y congeladores LG a domicilio</b></b>. Con cobertura en Morelos, servicio urgente.</p>
							<p>
								<a href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" class="btn my-2 shadow-lg bg-lg btn-lg btn-web-action text-white" onclick="ga('send', 'event', 'lg', 'whatsbody', 'clic')"><b>Enviar Whatsapp</b></a>
								<a href="tel:+527772592447" class="btn btn-lg my-2 shadow-lg bg-lg btn-mobile-action text-white " onclick="ga('send', 'event', 'lg', 'callbody', 'clic')"><b>Llamar Ahora</b></a>

							</p>
						</div>
					</section>


				</main>



				<div style="position: fixed; display: block;" id="" class="myDiv sticky">
					<div class="container">
						<div class="row text-center">
							<div class="col-12">
								<p class="text-white"><strong class="text-white">¿Necesitas ayuda?</strong></p>
							</div>
							<div class="col-6 pd-inside bg-success">
								<a class=" btn btn-success btn-block" id="whats_link" href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" onclick="ga('send', 'event', 'ge-sub', 'whats', 'clic')">
									<img src="assets/img/reparacion-de-estufas-a-domicilio-mensaje-white.png" alt="servicio LG" class="wp-image-31 alignnone size-medium" width="30" height="30" style="display: inline-block;">
								</a>
							</div>
							<div class="col-6 pd-inside bg-primary">
								<a class="btn btn-primary btn-block" id="llamar_link" href="tel:+527772592447" onclick="ga('send', 'event', 'ge-sub', 'llamada', 'clic')">
									<img src="assets/img/reparacion-de-estufas-a-domicilio-llamada-white.png" alt="servicio tecnico LG" class="wp-image-31 alignnone size-medium " width="30" height="30">
								</a>
							</div>      
						</div>
					</div>
				</div>


				<!-- SUCCESS / FAIL ACTION MODAL -->

				<div class="modal" id="actionModal" tabindex="-1">
					<div class="modal-dialog">
						<div class="modal-content">

							<!-- Modal Header -->
							<div class="modal-header">
								<h2 class="modal-title"><p id="successModalTitle"></p></h2>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<form>
								<!-- Modal body -->
								<div class="modal-body">
									<p id="successModalDescription"></p>
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button class="btn btn-success" type="button" data-dismiss="modal" onclick="this.form.reset();">Continuar</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<!-- START ALERT -->
				<div class="toast sticky bg-black text-white fade show" data-autohide="false">
					<div class="toast-header">
						<strong class="mr-auto ">Gran Oferta</strong>
						<small class="text-muted">Servicio en 2 hrs</small>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast">×</button>
					</div>
					<div class="toast-body">
						En nuestro centro de servicio <b class="text-info">contamos con las medidas de sanidad necesarias contra covid19.</b> Aprovecha y agenda una visita<b><a href="https://wa.me/527772592447?text=Quiero%20agendar%20una%20visita%20técnica" onclick="ga('send', 'event', 'inicio', 'whatsbody', 'clic')" class="text-danger btn-web-action"> dando clic aquí</a>
							<a href="tel:+527772592447" onclick="ga('send', 'event', 'inicio', 'llamada', 'clic')" class="text-danger btn-mobile-action"> dando clic aquí</a></b>
						</div>
					</div>

        <!--
			<div class="toast sticky off hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="26000">
			  <div class="toast-header head-cta-chriss">
			    <strong class="mr-auto text-white">¡OFERTA NAVIDEÑA!</strong>
			    <small class="text-white">Servicio Urgente</small>
			    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
			      <span aria-hidden="true">&times;</span>
			    </button>
			  </div>
			  <div class="toast-body text-white body-cta-chriss">
			    No te quedes sin tu cena navideña, reparamos tu horno, estufa, refrigerador ó congelador hoy mismo, <a class="text-warning btn-web-action" href="https://wa.me/525567757255" onclick="ga('send', 'event', 'inicio', 'whatsbody', 'clic')">¡aprovecha un -10% de descuento en tu primer servicio!</a>
			        <a class="text-warning btn-mobile-action" href="tel:+525565020417" onclick="ga('send', 'event', 'inicio', 'callbody', 'clic')">¡aprovecha un -15% de descuento en tu primer servicio!</a>
			  </div>
			</div>

		-->


		<div class="toast sticky newyear hide bg-success " role="alert" aria-live="assertive" aria-atomic="true" data-delay="26000">
			<div class="toast-header">
				<strong class="mr-auto">¡Gran Oferta!</strong>
				<small class="">Servicio Urgente</small>
				<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="toast-body text-white">
				<p><b>Apoyamos a tus bolsillos</b>, solicita una visita técnica y obtén un -10% de descuento en tu primer servicio. <a class="text-warning btn-web-action" href="https://wa.me/527772592447" onclick="ga('send', 'event', 'inicio', 'whatsbody', 'clic')">Agendar una visita</a><a class="text-warning btn-mobile-action" href="tel:+527772592447" onclick="ga('send', 'event', 'inicio', 'callbody', 'clic')">Agendar una visita.</a></p>
			</div>
		</div>


		<footer class="text-muted bg-black">
			<div class="container">
				<p class="float-right">
					<a href="#" class="text-warning">Volver al Principio</a>
				</p>
				<p class="text-white">Servicio LG | COMODO SECURE&trade; – <b class="text-success">RapidSSL®</b></p>
				<p>Todas las imágenes y logotipos son propiedad de la marca correspondiente.</p>
				<p style="color:black">Powered by <a style="color:black" href="https://paginaswebpremium.com">Páginas Web Premium</a></p>
			</div>
		</footer>
		<script type="text/javascript" src="js/form.js"></script>
	</body>
	</html>
