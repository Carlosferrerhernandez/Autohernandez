

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="shortcut icon" href="{{asset ('img/logo_autohernandez.png')}}" />
		<meta name="description" content="AutoHernandez de la Costa SAS, empresa dedicada a ofrecer servicios con calidad de agencia para las diferentes marcas en diagnóstico, mantenimiento y reparación de vehículos">
  		<meta name="keywords" content="Autos,reparacion,diesel,alineacion">
  		<meta name="author" content="Carlos Ferrer Hernandez">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- SITE TITLE -->
		<title>AutoHernandez de la Costa SAS</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href="{{asset ('bootstrap/css/bootstrap.min.css')}}" >		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900" rel="stylesheet" type="text/css">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="{{asset ('fonts/font-awesome.min.css')}}">
		<!--- owl carousel Css-->
		<link rel="stylesheet" href="{{asset ('owlcarousel/css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{asset ('owlcarousel/css/owl.theme.css')}}">
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href="{{asset ('css/magnific-popup.css')}}">			
		<!-- component CSS -->	
		<link rel="stylesheet" href="{{asset ('css/aos.css')}}">			
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset ('css/style.css')}}">	
		<!-- CSS FOR COLOR SWITCHER -->
		<link rel="stylesheet" href="{{asset ('css/switcher/switcher.css')}}"> 	
		<link rel="stylesheet" href="{{asset ('css/switcher/style1.css')}}" id="colors">		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

    	{{ csrf_field() }}

		<!-- START PRELOADER -->
		<div class="preloader">
			<div class="status">
				<div class="status-mes"></div>
			</div>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->
		<div class="navbar navbar-default navbar-fixed-top menu-top">
            <div class="container">
                <div class="row">
					<div class="col-md-3">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a href="https://autohernandezdelacosta.com.co/" class="navbar-brand"><img id="logo" src="{{asset ('img/logo.png')}}" alt="logo"></a>
						</div>
					</div>
					<div class="col-md-9">
						<div class="navbar-collapse collapse">
							<nav>
								<ul class="nav navbar-nav navbar-right scrollable-menu">
									<li><a class="page-scroll" href="#about">NOSOTROS</a></li>
									<!-- <li><a class="page-scroll" href="#team">EQUIPO</a></li> -->
									<li><a class="page-scroll" href="#process">SERVICIOS</a></li>
									<li><a class="page-scroll" href="#work">TRABAJOS</a></li>	
									<li><a class="page-scroll" href="#pricing">PROMOCION</a></li>
									<li><a class="page-scroll" href="#contact">CONTACTO</a></li>
									<li><a class="page-scroll" href="{{('/')}}"><i class="fa fa-sign-in"></i></a></li>
								</ul>
							</nav>
						</div>	
					</div>
				</div> 
            </div><!--- END CONTAINER -->
        </div> 	
		<!-- END NAVBAR -->		
		<!-- START HOME -->
		<section data-stellar-background-ratio="0.3" id="home" class="home_parallax ripple" style="background-image: url('img/bg/IMG_2564.JPG'); background-size:cover; background-position: center center;">			
			<div class="container">
				<div class="row">
				  <div class="col-md-12 text-center">
					<div class="hero-text">
						<h1>AutoHernandez</h1>
						<p>Solución Tecnica Automotriz y Diesel</p>
						<a href="#contacto" class="page-scroll btn btn-lg btn-contact-bg">Contáctanos</a>	
					</div>
				  </div><!--- END COL -->		  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME DESIGN -->

		<!-- START ABOUT -->
		<section id="about" class="about_us section-padding">
		   <div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section-title">
							<h1>Quienes somos</h1>
							<span></span>
							<p><strong>Auto Hernandez</strong><br>Es una empresa dedicada a ofrecer servicios con calidad de agencia para las diferentes marcas en diagnóstico, mantenimiento y reparación de vehículos, con precios competitivos en el sector de talleres. Por ello contamos con adecuadas instalaciones, équipos de diagnóstico computarizados, tecnología de punta y un equipo humano capacitado para brindar a todos nuestros clientes la satisfacción con soluciones técnicas a sus problemas y necesidades.</p>
						</div>
					</div>
				</div>
				<div class="row text-center">					
					<div class="col-lg-3 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="serviceBox">
							<div class="service-icon"><i class="fa fa-handshake-o"></i></div>
							<h3 class="title">Atención al cliente</h3><p class="description">Contamos con un personal capacitado que le brindara la mejor atención en cada uno de sus problemas sin excepción.</p>
						</div>
					</div> <!-- END COL -->			
					<div class="col-lg-3 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="serviceBox">
							<div class="service-icon"><i class="fa fa-area-chart"></i></div>
							<h3 class="title">lideres en el mercado</h3>
							<p class="description">Nuestra meta es convertirnos en el taller lider del mercado a nivel regional</p>
						</div>
					</div> <!-- END COL -->			
					 <div class="col-lg-3 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="serviceBox">
							<div class="service-icon"><i class="fa fa-building-o"></i></div>
							<h3 class="title">Servicio <br>innovador</h3>
							<p class="description">Tenemos a nuestra disposición la maquinaria mas reciente para dar un excelente servicio.</p>
						</div>
					</div> <!-- END COL -->			
					<div class="col-lg-3 col-sm-6 col-xs-12" data-aos="fade-up">
						<div class="serviceBox">
							<div class="service-icon"><i class="fa fa-cogs"></i></div>
							<h3 class="title">Repuestos de calidad</h3>
							<p class="description">Contamos con los respuestos de mejor calidad y estandares certificados en el mercado a nivel nacional.</p>
						</div>
					</div>
					<!-- END COL -->				
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END ABOUT -->	
	

		<!-- START PROCESS -->
		<section id="process" class="our_service section-padding">
			<div class="container">			
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="section-title">
							<h1>Nuestros servicios</h1>
							<span></span>
							<p>Somos especialistas en brindarte la mejor calidad</p>
						</div>
					</div>
				</div>
				<div class="row" data-aos="fade-up">	
					<div class="col-xs-12 col-sm-4">
						<div class="single_service">							
							<i class="fa fa-cogs"></i> 
							<h3>Reparación de sistemas electricos</h3>
							<p>Diagnostico, programación y reparacion de modulos de control electronico y sistemas electricos</p>
							<ul>
								<li><i class="fa fa-long-arrow-right"></i><strong>inspección del motor</strong></li>  
								<li><i class="fa fa-long-arrow-right"></i><strong>Diagnostico</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Montaje del repuesto</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Prueba de ruta</strong></li>
							</ul>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4">
						<div class="single_service">							
							<i class="fa fa-wrench"></i> 
							<h3>Repuestos y lubricantes</h3>
							<p>Para la comodidad de nuestros clientes contamos con un surtido de repuestos y lubricantes de la mejor calidad y así poder agilizar nuestros procesos.</p>
							<ul>
								<li><i class="fa fa-long-arrow-right"></i><strong>Repuestos parte eléctrica y mecánica</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Aceites y filtración</strong></li>  
								<li><i class="fa fa-long-arrow-right"></i><strong>Repuestos en general</strong></li>
							</ul>
						</div>
					</div>

					<div class="col-xs-12 col-sm-4">
						<div class="single_service">							
							<i class="fa fa-cogs"></i> 
							<h3>Mantenimiento de sistemas de inyección</h3>
							<p>Servicio para el mantenimiento de los sistemas de inyección electrónica diesel y gasolina</p>
							<ul>
								<li><i class="fa fa-long-arrow-right"></i><strong>Inyectores y bombas</strong></li>  
								<li><i class="fa fa-long-arrow-right"></i><strong>Sensores y actuadores</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Turbo alimentadores</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Sistema eléctrico y electrónica</strong></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="row" data-aos="fade-up" style="margin-top: 70px;">	
					<div class="col-xs-12 col-md-5 col-sm-4">
						<div class="single_service">							
							<i class="fa fa-thermometer-quarter" aria-hidden="true"></i> 
							<h3>Refrigeración automotriz</h3>
							<p>Ofrecemos servicios de refrigeración automotriz y equipo pesado, con personal y equipo técnico especializado en el tema.</p>
							<ul>
								<li><i class="fa fa-long-arrow-right"></i><strong>Desmonte de radiador</strong></li>  
								<li><i class="fa fa-long-arrow-right"></i><strong>Desmonte de bomba de agua</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Cambio de termostato</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Pruebas de presión</strong></li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-md-5 col-sm-4">
						<div class="single_service">							
							<i class="fa fa-wrench"></i> 
							<h3>Mecanica en general</h3>
							<p>Con una gran experiencia en el campo automotriz y diésel, ofrecemos nuestros servicios con la mejor calidad en el mercado</p>
							<ul>
								<li><i class="fa fa-long-arrow-right"></i><strong>Motores</strong></li>  
								<li><i class="fa fa-long-arrow-right"></i><strong>Trasmisiones manuales y automaticas</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Caja de dirección mecanica, hidráulica y electroasistidas</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Sistemas de frenos ABS y convencionales</strong></li>
								<li><i class="fa fa-long-arrow-right"></i><strong>Suspensión</strong></li>
							</ul>
						</div>
					</div>				
				</div>
			</div>
		</section>
		<!-- END PROCESS -->

		<!-- START PROJECTS  -->
		<section id="work" class="our_work section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h1>Nuestros trabajos</h1>
							<span></span>
							<p>Siempre lideres en mantenimiento automotriz especializado</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12" data-aos="fade-up">
						<div id="gallery-slider" class="owl-carousel">
							<div class="single_gallery">
								<img src="{{asset ('img/gallery/IMG_2541.JPG')}}" class="img-gallery" alt="" />
								<div class="gallery_overlay"></div>
								<div class="gallery_info">
									<!-- <h1></h1>
									<p></p> -->
									<a href="#" class="btn btn-lg btn-contact-bg" data-toggle="modal" data-target="#projectModal">Ver mas</a>
								</div>
							</div><!-- END SINGLE GALLERY -->
							<div class="single_gallery">
								<img src="{{asset ('img/gallery/IMG_2604.JPG')}}" class="img-gallery" alt="" />
								<div class="gallery_overlay"></div>
								<div class="gallery_info">
									<!-- <h1></h1>
									<p></p> -->
									<a href="#" class="btn btn-lg btn-contact-bg" data-toggle="modal" data-target="#projectModal2">Ver mas</a>
								</div>
							</div><!-- END SINGLE GALLERY -->
							<div class="single_gallery">
								<img src="{{asset ('img/gallery/IMG_2642.JPG')}}" class="img-gallery" alt="" />
								<div class="gallery_overlay"></div>
								<div class="gallery_info">
									<!-- <h1>project title</h1>
									<p>project subtitle here</p> -->
									<a href="#" class="btn btn-lg btn-contact-bg" data-toggle="modal" data-target="#projectModal3">Ver mas</a>
								</div>
							</div><!-- END SINGLE GALLERY -->
							<div class="single_gallery">
								<img src="{{asset ('img/gallery/IMG_2607.JPG')}}" class="img-gallery" alt="" />
								<div class="gallery_overlay"></div>
								<div class="gallery_info">
									<!-- <h1>project title</h1>
									<p>project subtitle here</p> -->
									<a href="#"  class="btn btn-lg btn-contact-bg" data-toggle="modal" data-target="#projectModal4">Ver mas</a>
								</div>
							</div><!-- END SINGLE GALLERY -->
						</div>
					</div><!-- END COL  -->
					<div class="col-md-12">
						<!-- Overlay Modal  -->
						<div  tabindex="0" class="modal fade" id="projectModal">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">REPARACION</h4>
									</div>
									<div class="modal-body">
										<img src="{{asset ('img/gallery/IMG_2541.JPG')}}" class="img-responsive" alt=""/>
										<p>Reparación de ambulancia de nuestro cliente, un cambio de rediador.</p>
										 <ul class="list-unstyled project-list" >
											<li><label>Cliente : </label>RUC - Red de urgencias de la Costa Ltda</li>
											<li><label>Categoria :</label> Desmonte de radiador</li>
											<li><label>Date : </label> 12 octubre 2017</li>
										</ul>
								  </div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Overlay Modal  -->
						<div  tabindex="0" class="modal fade" id="projectModal2">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">INSTALACION</h4>
									</div>
									<div class="modal-body">
										<img src="{{asset ('img/gallery/IMG_2604.JPG')}}" class="img-responsive" alt=""/>
										<p>Instalación de motor V8 para aerodeslisador</p>
										 <ul class="list-unstyled project-list" >
											<li><label>Cliente : </label> Jose Blades</li>
											<li><label>Categoria :</label> Instalación de motor</li>
											<li><label>Fecha : </label> 12 marzo 2017</li>
											<li><label>Lugar : </label> Club de pesca - Barranquilla</li>					
										</ul>
								  </div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Overlay Modal  -->
						<div  tabindex="0" class="modal fade" id="projectModal3">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">MANTENIMIENTO</h4>
									</div>
									<div class="modal-body">
										<img src="{{asset ('img/gallery/IMG_2642.JPG')}}" class="img-responsive" alt=""/>
										<p>Alineación y valenceo de ruedas a nuestros clientes para mayor seguridad en el rodaje de su vehículo.</p>
										 <ul class="list-unstyled project-list" >
											<li><label>Cliente : </label> Alfredo Arango</li>
											<li><label>Categoria :</label> Balanceo</li>
											<li><label>Fecha : </label> 13 noviembre 2017</li>
										</ul>
								  </div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
						<!-- Overlay Modal  -->
						<div  tabindex="0" class="modal fade" id="projectModal4">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">REPARACION</h4>
									</div>
									<div class="modal-body">
										<img src="{{asset ('img/gallery/IMG_2607.JPG')}}" class="img-responsive" alt=""/>
										<p>Reparación de sistemas de frenos convecionales.</p>
										 <ul class="list-unstyled project-list" >
											<li><label>Cliente : </label> Guillermo Perdomo</li>
											<li><label>Categoria :</label> Reparación de frenos convencionales</li>
											<li><label>Fecha : </label> 28/noviembre/2017</li>
										</ul>
								  </div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div><!-- /.modal -->
					</div>				
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END PROJECTS -->
		
		<!-- START PRICING  -->
		<section id="pricing" class="our_pricing section-padding" style="background-image: url('img/gallery/IMG_2642.JPG'); background-size:cover; background-position: center center;background-attachment:fixed;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h1 class="section-title-white">Nuestras promociónes</h1>
							<span></span>
							<p class="section-title-white">Aprovecha estos grandes descuentos para darle el mejor cuidado y mantenimiento a tu auto.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-4" data-aos="fade-up">
						<div class="pricingTable">
							<span class="icon"><i class="fa fa-handshake-o"></i></span>
							<div class="pricingTable-header">
								<h3 class="title">Plan economico</h3>
								<span class="price-value">Próximamente</span>
							</div>
							<ul class="pricing-content">
								<li>-</li>
								<li>-</li>
								<li>-</li>
								<li>-</li>
							</ul>
							<a href="#contacto" class="pagcontactoe-scroll page-scroll btn btn-lg btn-contact-bg">Contáctanos</a>
						</div>
					</div><!-- END COL  -->
					<div class="col-xs-12 col-sm-4" data-aos="fade-up">
						<div class="pricingTable">
							<span class="icon"><i class="fa fa-handshake-o"></i></span>
							<div class="pricingTable-header">
								<h3 class="title">Plan estandar</h3>
								<span class="price-value">Próximamente</span>
							</div>
							<ul class="pricing-content">
								<li>-</li>
								<li>-</li>
								<li>-</li>
								<li>-</li>
							</ul>
							<a href="#contacto" class="page-scroll btn btn-lg btn-contact-bg">Contáctanos</a>
						</div>
					</div><!-- END COL  -->
					<div class="col-xs-12 col-sm-4" data-aos="fade-up">
						<div class="pricingTable">
							<span class="icon"><i class="fa fa-handshake-o"></i></span>
							<div class="pricingTable-header">
								<h3 class="title">Plan esclusivo</h3>
								<span class="price-value">Próximamente</span>
							</div>
							<ul class="pricing-content">
								<li>-</li>
								<li>-</li>
								<li>-</li>
								<li>-</li>
							</ul>
							<a href="#contacto" class="page-scroll btn btn-lg btn-contact-bg">Contáctanos</a>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END PRICING -->

		<!-- START NEWSLETTER -->
		<section  class="newsletter_section">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 text-center col-xs-12 col-md-8" data-aos="fade-up">
						<h1 class="newsletter-title">Suscribete para ver nuevas promociones</h1>
						<div class="newsletter_form">
							<span class="newsletter_form_border"></span>
							<!-- Replace the form action in the line below with your MailChimp embed action! -->
							<form action="https://site90.us11.list-manage.com/subscribe/post?u=599a2153f4b86cb2f92d4af3a&amp;id=26d7c26287" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div class="input-group input-group-lg newsletter">
									<input type="email" name="EMAIL" class="form-control" placeholder="Correo electronico">
									<span class="input-group-btn">
										<button type="submit" name="subscribe" class="btn-newsletter-bg">Suscribete</button>
									</span>
								</div>
								<div id="mce-responses">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>
							</form>
						</div>
					</div><!-- END COL -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END NEWSLETTER -->

		<!-- START TESTIMONIALS  -->
		<section id="testimonial" class="our_testimonial section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h1>Nuestros clientes</h1>
							<span></span>
							<p>Comentarios y recomendaciones de nuestros clientes.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12" data-aos="fade-up">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<div class="pic">
									<img src="{{asset ('img/testimonial/RENTING.png')}}" alt="renting colombia">
								</div>
								<div class="testimonial-profile">
									<h3 class="title">RENTING COLOMBIA</h3>
									<span class="post">Grupo Bancolombia</span>
									<!-- <a href="mailto:servicio@rentingcolombia.com"></a> -->
								</div>
								<p class="description">
									En Renting Colombia sabemos lo importante que es para nuestra empresa estar conectados con los mejores, por eso confiamos en la mejor alternativa para servicios de mantenimientos y repaciones de nuestra flota de vehículos por lo cual confiamos en <strong>AutoHernandez de la Costa SAS</strong>
								</p>
							</div>
							<div class="testimonial">
								<div class="pic">
									<img src="{{asset ('img/testimonial/RUC.png')}}" alt="RUC - Red de urgencias de la costa">
								</div>
								<div class="testimonial-profile">
									<h3 class="title">Red de Urgencias</h3>
									<span class="post">Red De Urgencias Ltda</span>
								</div>
								<p class="description">
									Estamos agradecidos en Red De Urgencias De la Costa (RUC) por el gran servicio y trasparencia que nos brindan en <strong>AutoHernandez de la Costa SAS</strong> para cada una de las reparaciones de nuestros vehículos ¡Gracias a ellos nuestros siempre estan a la disponibilidad de nuestros usuarios!.
								</p>
							</div>
							<div class="testimonial">
								<div class="pic">
									<img src="{{asset ('img/testimonial/grupo-empresarial.png')}}" alt="">
								</div>
								<div class="testimonial-profile">
									<h3 class="title">Grupo CAMBELL</h3>
									<span class="post">Grupo empresarial</span>
								</div>
								<p class="description">
									Siempre confiamos nuestros vehículos a los mejores y <strong>AutoHernandez de la Costa SAS</strong> siempre nos han cumplido trasparentemente con nuestros requerimientos.
								</p>
							</div>
							<div class="testimonial">
								<div class="pic">
									<img src="{{asset ('img/testimonial/Grupo-zambrano.png')}}" alt="">
								</div>
								<div class="testimonial-profile">
									<h3 class="title">Grupo Zambrano</h3>
									<span class="post">Grupo empresarial</span>
								</div>
								<p class="description">
									Somos una emprea que deseamos la mejor calidad para nuestros clientes por tal motivo siempre contamos con los mejores y <strong>AutoHernandez de la Costa SAS</strong> siempre ha cumplido con nuestras necesidades para nosotros ofrecerle lo mejor a nuestros clientes.
								</p>
							</div>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END TESTIMONIALS -->
		
		<!-- START CONTACT -->
		<section id="contact" class="contact_us section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h1>Contáctanos</h1>
							<span></span>
							<p>Envianos un mensaje para resolver todas tus dudas.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-1 text-center col-xs-12 col-md-10" data-aos="fade-up">
						<div class="contact">
							<form id="contact-form" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="form-group col-md-4">
										<input type="text" name="name" class="form-control" placeholder="Nombre" required="required">
									</div>
									<div class="form-group col-md-4">
										<input type="email" name="email" class="form-control" placeholder="Correo electronico" required="required">
									</div>
									<div class="form-group col-md-4">
										<input type="text" name="subject" class="form-control" placeholder="Tema" required="required">
									</div>
									<div class="form-group col-md-12">
										<textarea rows="6" name="message" class="form-control" placeholder="Escribe tu mensaje" required="required"></textarea>
									</div>
									<div class="col-md-12 text-center">
										<button type="submit" value="Send message" name="submit" id="submitButton" class="btn btn-lg btn-contact-bg" title="Submit Your Message!">Enviar</button>
									</div>
								</div>
							</form>
						</div>
					</div><!-- END COL  -->
				</div><!-- END ROW -->
			</div><!-- END CONTAINER -->
		</section>
		<!-- END CONTACT -->
		
		<!-- START ADDRESS  -->
		<section id="contacto" class="contact-address section-padding" style="background-image: url('img/bg/IMG_2613.JPG'); background-size:cover; background-position: center center;background-attachment:fixed;">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-3 text-center col-xs-12 col-md-6">
						<div class="address">
							<h2>atencionalcliente@autoher<br>nandezdelacosta.com.co</h2>
							<h1>310-735-4058</h1>
							<h1>301-398-3738</h1>
							<h3>Avenida circunvalar <br>Carrera 28 No. 54 - 05</h3>
						</div>
						<div class="footer_social">
							<ul>
								<li><a class="f_facebook" href="https://www.facebook.com/autohernandezdelacosta/" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a class="f_google" href="https://www.facebook.com/autohernandezdelacosta/" target="_blank"><i class="fa fa-google-plus"></i></a></li>
								<li><a class="f_linkedin" href="https://www.facebook.com/autohernandezdelacosta/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a class="f_youtube" href="https://www.instagram.com/autohernandezdelacosta/"><i class="fa fa-youtube"></i></a></li>
							</ul>
						</div>
						<div class="footer_copyright">
							<p>AutoHernandez. todos los derechos reservados. &copy; 2017</p>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</section>
		<!-- END ADDRESS -->

		<!-- STYLE SWITCHER -->
		 <div id="style-switcher">
			<h2>Ves algun fallo? Envianos un mensaje, lo resolveremos de inmediato<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>		
		 </div>  
		 <!-- END OF STYLE SWITCHER -->	

		<!-- Click -->
		 <!-- <script type="text/javascript">document.oncontextmenu = function(){return false;}
		 </script> -->
		<!-- Latest jQuery -->
			<script src="{{asset ('js/jquery-1.12.4.min.js')}}"></script>
		<!-- Latest compiled and minified Bootstrap -->
			<script src="{{asset ('bootstrap/js/bootstrap.min.js')}}"></script>
		<!-- modernizer JS -->		
			<script src="{{asset ('js/modernizr-2.8.3.min.js')}}"></script>																		
		<!-- owl-carousel min js  -->
			<script src="{{asset ('owlcarousel/js/owl.carousel.min.js')}}"></script>
		<!-- magnific-popup js -->               
			<script src="{{asset ('js/jquery.magnific-popup.min.js')}}"></script>			
		<!-- jquery mixitup js -->   
			<script src="{{asset ('js/jquery.mixitup.min.js')}}"></script>	
		<!-- stellar js -->
			<script src="{{asset ('js/jquery.stellar.min.js')}}"></script>		
		<!-- scrolltopcontrol js -->
			<script src="{{asset ('js/scrolltopcontrol.js')}}"></script>									
		<!-- aos js -->
			<script src="{{asset ('js/aos.js')}}"></script>
		<!-- ripples js -->	
			<!-- <script src="/js/ripples-min.js"></script> -->
		<!-- switcher js -->
			<script src="{{asset ('js/switcher.js')}}"></script>			
		<!-- scripts js -->
			<script src="{{asset ('js/scripts.js')}}"></script>
    </body>
</html>