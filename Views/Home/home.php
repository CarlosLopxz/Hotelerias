<?=header_admin($data);?>

		<!-- Start Sidebar Modal -->
		<div class="sidebar-modal">  
			<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">
									<i class="bx bx-x"></i>
								</span>
							</button>
							<h2 class="modal-title" id="myModalLabel2">
								<a >
									<img src="<?= media();?>img/home-one/logo.jpg" alt="Logo">
								</a>
							</h2>
						</div>
						<div class="modal-body">
							<div class="sidebar-modal-widget">
								<h3 class="title">Sobre Nosotros</h3>
								<p>Creemos que cada proyecto existe para resolver problemas y generar valor para nuestros clientes. Es por eso que nos enfocamos en la calidad y la experiencia del usuario.</p>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Enlaces Adicionales</h3>
								<ul>
									<li>
										<a href="log-in.html">Iniciar Sesión</a>
									</li>
									<li>
										<a href="sign-up.html">Registrarse</a>
									</li>
									<li>
										<a href="faq.html">Preguntas Frecuentes</a>
									</li>
									<li>
										<a href="#">Cerrar Sesión</a>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Información de Contacto</h3>
								<ul class="contact-info">
									<li>
										<i class="bx bx-location-plus"></i>
										Dirección
										<span>Nueva York - 1060, Calle Primera 78 Gran Carretera Occidental</span>
									</li>
									<li>
										<i class="bx bx-envelope"></i>
										Correo Electrónico
										<span>hello@prevoz.com</span>
									</li>
									<li>
										<i class="bx bxs-phone-call"></i>
										Teléfono
										<span>+502-464-679, +265-497-466</span>
									</li>
								</ul>
							</div>
							<div class="sidebar-modal-widget">
								<h3 class="title">Conéctate Con Nosotros</h3>
								<ul class="social-list">
									<li>
										<a href="#">
											<i class='bx bxl-twitter'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-facebook'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-instagram'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-linkedin'></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class='bx bxl-youtube'></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sidebar Modal -->

		<!-- Start Ecorik Slider Area -->
		<section class="eorik-slider-area">
			<div class="eorik-slider owl-carousel owl-theme">
				<div class="eorik-slider-item slider-item-bg-1">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden one eorik-slider-text-one">
									<h1>Vacaciones Relajantes</h1>
									<span>Descubre el lugar donde te diviertes y disfrutas mucho</span>
									<div class="slider-btn">
										<a class="default-btn" href="#">
											Reservar Estancia
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-2">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden two eorik-slider-text-one">
									<h1>Toma Vacaciones</h1>
									<span>Descubre el lugar donde te diviertes y disfrutas mucho</span>
									<div class="slider-btn">
										<a class="default-btn" href="#">
											Reservar Estancia
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="eorik-slider-item slider-item-bg-3">
					<div class="d-table">
						<div class="d-table-cell">
							<div class="container">
								<div class="eorik-slider-text overflow-hidden three eorik-slider-text-one">
									<h1>Vacaciones Favoritas</h1>
									<span>Descubre el lugar donde te diviertes y disfrutas mucho</span>
									<div class="slider-btn">
										<a class="default-btn" href="#">
											Reservar Estancia
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="white-shape">
				<img src="assets/img/home-one/slider/white-shape.png" alt="Imagen">
			</div>
			<div class="social-link">
				<ul>
					<li>
						<a href="#">
							<i class="bx bxl-facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="bx bxl-twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="bx bxl-linkedin"></i>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- End Ecorik Slider Area -->

		<!-- Start Check Area -->
        <div class="check-area mb-minus-70">
            <div class="container">
                <form class="check-form">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Fecha de Llegada</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-1">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2020">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div>
						</div>
									
						<div class="col-lg-3 col-sm-6">
							<div class="check-content">
								<p>Fecha de Salida</p>
								<div class="form-group">
									<div class="input-group date" id="datetimepicker-2">
										<i class="flaticon-calendar"></i>
										<input type="text" class="form-control" placeholder="29/02/2020">
										<span class="input-group-addon">
											<i class="glyphicon glyphicon-th"></i>
										</span>
									</div>
								</div>
							</div> 
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<div class="check-content">
										<p>Adultos</p>
										<div class="form-group">
											<select name="adult" class="form-content">
												<option value="1">01</option>
												<option value="2">02</option>
												<option value="3">03</option>
												<option value="4">04</option>
												<option value="5">05</option>
											</select>
										</div>
									</div> 
								</div>
								<div class="col-lg-6 col-sm-6">
									<div class="check-content">
										<p>Niños</p>
										<div class="form-group">
											<select name="adult" class="form-content">
												<option value="1">01</option>
												<option value="2">02</option>
												<option value="3">03</option>
												<option value="4">04</option>
												<option value="5">05</option>
											</select>
										</div>
									</div> 
								</div>
							</div>
						</div>
                        <div class="col-lg-3">
							<div class="check-btn check-content mb-0">
								<button class="default-btn">
									Verificar Disponibilidad
									<i class="flaticon-right"></i>
								</button>
							</div> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Check Section -->

		<!-- Start Explore Area -->
		<section class="explore-area pt-170 pb-100">
			<div class="container">
				<div class="section-title">
					<span>Explorar</span>
					<h2>Somos geniales para darte placer</h2>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="explore-img">
							<img src="assets/img/explore-img.png" alt="Imagen">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="explore-content ml-30">
							<h2>Tanto como el confort que quieres obtener de nosotros, todo</h2>
							<p>Nuestro hotel ofrece una experiencia única con servicios de alta calidad y atención personalizada. Nos esforzamos por brindar un ambiente acogedor y relajante para todos nuestros huéspedes.</p>

							<p>Disfruta de nuestras instalaciones de clase mundial y servicios excepcionales que te harán sentir como en casa. Nuestro equipo está dedicado a hacer que tu estancia sea memorable y placentera.</p>
							<a href="about.html" class="default-btn">
								Explorar Más
								<i class="flaticon-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Explore Area -->

		<!-- End Facilities Area -->
		<section class="facilities-area pb-60">
			<div class="container">
				<div class="section-title">
					<span>Instalaciones</span>
					<h2>Ofreciendo algo increíble</h2>
				</div>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-pickup"></i>
								<h3>Recogida y Dejada</h3>
								<p>Servicio de recogida y dejada disponible para todos nuestros huéspedes.</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-coffee-cup"></i>
								<h3>Bebida de Bienvenida</h3>
								<p>Disfruta de una bebida de bienvenida al llegar a nuestro hotel.</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-garage"></i>
								<h3>Espacio de Estacionamiento</h3>
								<p>Estacionamiento seguro y conveniente para todos nuestros huéspedes.</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="single-facilities-wrap">
							<div class="single-facilities">
								<i class="facilities-icon flaticon-water"></i>
								<h3>Agua Fría y Caliente</h3>
								<p>Agua fría y caliente disponible en todas las habitaciones.</p>
								<a href="service-details.html" class="icon-btn">
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Facilities Area -->

		<!-- End Incredible Area -->
		<section class="incredible-area ptb-140 jarallax">
			<div class="container">
				<div class="incredible-content">
					<a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="video-btn popup-youtube">
						<i class="flaticon-play-button"></i>
					</a>
					<h2><span>¡Increíble!</span> ¿Vienes hoy?</h2>
					<p>Nuestro hotel ofrece una experiencia única con servicios de alta calidad y atención personalizada. Nos esforzamos por brindar un ambiente acogedor y relajante para todos nuestros huéspedes.</p>
					<a href="#" class="default-btn">
						Únete a Nosotros Hoy
						<i class="flaticon-right"></i>
					</a>
				</div>
			</div>
			<div class="white-shape">
				<img src="assets/img/shape/white-shape-top.png" alt="Imagen">
				<img src="assets/img/shape/white-shape-bottom.png" alt="Imagen">
			</div>
		</section>
		<!-- End Incredible Area -->

		<!-- Start Our Rooms Area -->
		<section class="our-rooms-area pt-60 pb-100">
			<div class="container">
				<div class="section-title">
					<span>Nuestras Habitaciones</span>
					<h2>Habitaciones y suites fascinantes</h2>
				</div>
				<div class="tab industries-list-tab">
					<div class="row">
						<div class="col-lg-4">
							<ul class="tabs">
								<li class="single-rooms">
									<img src="assets/img/rooms/button-img-1.jpg" alt="Imagen">
									<div class="room-content">
										<h3>Habitación Doble</h3>
										<span>Desde $75.9/noche</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="assets/img/rooms/button-img-2.jpg" alt="Imagen">
									<div class="room-content">
										<h3>Habitación de Lujo</h3>
										<span>Desde $50.9/noche</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="assets/img/rooms/button-img-3.jpg" alt="Imagen">
									<div class="room-content">
										<h3>Mejor Habitación</h3>
										<span>Desde $70.9/noche</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="assets/img/rooms/button-img-4.jpg" alt="Imagen">
									<div class="room-content">
										<h3>Habitación Clásica</h3>
										<span>Desde $95.9/noche</span>
									</div>
								</li>
								<li class="single-rooms">
									<img src="assets/img/rooms/button-img-5.jpg" alt="Imagen">
									<div class="room-content">
										<h3>Habitación Económica</h3>
										<span>Desde $95.9/noche</span>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-lg-8">
							<div class="tab_content">
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-1">
									</div>
									<span class="preview-item">Vista Previa de la Habitación Doble</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-2">
									</div>
									<span class="preview-item">Vista Previa de la Habitación de Lujo</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-3">
									</div>
									<span class="preview-item">Vista Previa de la Mejor Habitación</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-4">
									</div>
									<span class="preview-item">Vista Previa de la Habitación Clásica</span>
								</div>
								<div class="tabs_item">
									<div class="our-rooms-single-img room-bg-5">
									</div>
									<span class="preview-item">Vista Previa de la Habitación Económica</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our Rooms Area -->

		<!-- Start City View Area -->
		<section class="city-view-area ptb-100">
			<div class="container">
				<div class="city-wrap">
					<div class="single-city-item owl-carousel owl-theme">
						<div class="city-view-single-item">
							<div class="city-content">
								<span>Vista de la Ciudad</span>
								<h3>Una encantadora vista de la ciudad</h3>
								<p>Nuestro hotel ofrece una vista impresionante de la ciudad, perfecta para relajarse y disfrutar del paisaje urbano. Cada habitación está diseñada para brindar comodidad y elegancia.</p>
		
								<p>La vista desde nuestro hotel te permite disfrutar de la belleza de la ciudad mientras te relajas en un ambiente acogedor y confortable.</p>
							</div>
						</div>
						<div class="city-view-single-item">
							<div class="city-content">
								<span>Vista de la Ciudad</span>
								<h3>La encantadora vista de la ciudad</h3>
								<p>Nuestro hotel ofrece una vista impresionante de la ciudad, perfecta para relajarse y disfrutar del paisaje urbano. Cada habitación está diseñada para brindar comodidad y elegancia.</p>
		
								<p>La vista desde nuestro hotel te permite disfrutar de la belleza de la ciudad mientras te relajas en un ambiente acogedor y confortable.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End City View Area -->

		<!-- Start Exclusive Area -->
		<section class="exclusive-area pt-100 pb-70"> 
			<div class="container">
				<div class="section-title">
					<span>Ofertas Exclusivas</span>
					<h2>Puedes obtener una oferta exclusiva</h2>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="exclusive-wrap">
							<div class="row">
								<div class="col-lg-6 pr-0">
									<div class="exclusive-img bg-1"></div>
								</div>
								<div class="col-lg-6 pl-0">
									<div class="exclusive-content">
										<span class="title">Hasta 30% de Descuento</span>
										<h3>Natación para hombres</h3>
										<span class="review">
											4.5
											<a href="#">(432 Reseñas)</a>
										</span>
										<p>Natación dolor sit amet, consectetur adipisicing elit.</p>
										<ul>
											<li>
												<i class="bx bx-time"></i>
												Duracion: 2 Horas
											</li>
											<li>
												<i class="bx bx-target-lock"></i>
												18+ años
											</li>
										</ul>
										<a href="book-table.html" class="default-btn">
											Reservar en Línea
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="exclusive-wrap">
							<div class="row">
								<div class="col-lg-6 pr-0">
									<div class="exclusive-img bg-2"></div>
								</div>
								<div class="col-lg-6 pl-0">
									<div class="exclusive-content">
										<span class="title">Solo Este Mes</span>
										<h3>Paquete de Desayuno $5</h3>
										<span class="review">
											5.0
											<a href="#">(580 Reseñas)</a>
										</span>
										<p>Comienza con $5 dolor sit amet, consectetur adipisicing elit.</p>
										<ul>
											<li>
												<i class="bx bx-time"></i>
												Duracion: 2 Horas
											</li>
											<li>
												<i class="bx bx-target-lock"></i>
												18+ años
											</li>
										</ul>
										<a href="book-table.html" class="default-btn">
											Reservar en Línea
											<i class="flaticon-right"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Exclusive Area -->

		<!-- Start Booking Area -->
		<section class="bokking-area pb-70">
			<div class="container">
				<div class="section-title">
					<span>Reserva</span>
					<h2>Beneficios de reserva directa</h2>
				</div>

				<div class="row">
					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<i class="book-icon flaticon-online-booking"></i>
								<span class="booking-title">Costo Gratuito</span>
								<h3>Sin tarifa de reserva</h3>
							</a>
							
							<div class="modal fade" id="staticBackdrop">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Sin tarifa de reserva</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>Nuestro hotel ofrece reservas sin tarifa adicional, asegurando que obtengas el mejor valor por tu dinero. Reserva directamente con nosotros y disfruta de beneficios exclusivos.</p>
										</div>

										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Reservar Ahora
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-2">
								<i class="book-icon flaticon-podium"></i>
								<span class="booking-title">Costo Gratuito</span>
								<h3>Garantía de mejor tarifa</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-2">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Garantía de mejor tarifa</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>Garantizamos las mejores tarifas para tu estancia. Si encuentras una tarifa más baja en otro lugar, te ofreceremos un precio aún mejor.</p>
										</div>

										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Reservar Ahora
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-3">
								<i class="book-icon flaticon-airport"></i>
								<span class="booking-title">Costo Gratuito</span>
								<h3>Reservas 24/7</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-3">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Reservas 24/7</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>Nuestro servicio de reservas está disponible las 24 horas del día, los 7 días de la semana. Reserva en cualquier momento y desde cualquier lugar.</p>
										</div>

										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Reservar Ahora
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-4">
								<i class="book-icon flaticon-slow"></i>
								<span class="booking-title">Costo Gratuito</span>
								<h3>Wi-Fi de Alta Velocidad</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-4">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Wi-Fi de Alta Velocidad</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>Disfruta de Wi-Fi de alta velocidad en todas las áreas del hotel. Mantente conectado y disfruta de una experiencia sin interrupciones.</p>
										</div>

										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Reservar Ahora
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="booking-col-2">
						<div class="single-booking">
							<a href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop-5">
								<i class="book-icon flaticon-coffee-cup-1"></i>
								<span class="booking-title">Costo Gratuito</span>
								<h3>Desayuno Gratuito</h3>
							</a>

							<div class="modal fade" id="staticBackdrop-5">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Desayuno Gratuito</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>

										<div class="modal-body">
											<p>Comienza tu día con un delicioso desayuno gratuito. Ofrecemos una variedad de opciones para satisfacer todos los gustos.</p>
										</div>
										
										<div class="modal-footer">
											<a href="book-table.html" class="default-btn">
												Reservar Ahora
												<i class="flaticon-right"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Booking Area -->

		<!-- Start Restaurants Area -->
		<section class="restaurants-area pb-100">
			<div class="container-fluid p-0">
				<div class="section-title">
					<span>Restaurantes</span>
					<h2>El área que cubrimos bajo Ecorik</h2>
				</div>
				
				<div class="restaurants-wrap owl-carousel owl-theme">
					<div class="single-restaurants bg-1">
						<i class="restaurants-icon flaticon-coffee-cup"></i>
						<span>Restaurantes</span>
						<p>Nuestros restaurantes ofrecen una experiencia culinaria excepcional con platos preparados por chefs de clase mundial.</p>
						<a href="#" class="default-btn">
							Explorar Más
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-2">
						<i class="restaurants-icon flaticon-swimming"></i>
						<span>Piscina</span>
						<p>Disfruta de nuestra piscina de clase mundial, perfecta para relajarse y refrescarse durante tu estancia.</p>
						<a href="#" class="default-btn">
							Explorar Más
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-3">
						<i class="restaurants-icon flaticon-speaker"></i>
						<span>Sala de Conferencias</span>
						<p>Nuestras salas de conferencias están equipadas con tecnología de última generación para eventos y reuniones.</p>
						<a href="#" class="default-btn">
							Explorar Más
							<i class="flaticon-right"></i> 
						</a>
					</div>
					<div class="single-restaurants bg-4">
						<i class="restaurants-icon flaticon-podium"></i>
						<span>Mejor Tarifa</span>
						<p>Garantizamos las mejores tarifas para tu estancia, asegurando que obtengas el mejor valor por tu dinero.</p>
						<a href="#" class="default-btn">
							Explorar Más
							<i class="flaticon-right"></i> 
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Restaurants Area -->

		<!-- start Testimonials Area -->
		<section class="testimonials-area pb-100">
			<div class="container">
				<div class="section-title">
					<span>Testimonios</span>
					<h2>Lo que dicen los clientes</h2>
				</div>
				<div class="testimonials-wrap owl-carousel owl-theme">
					<div class="single-testimonials">
						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>
						<h3>Habitación Excelente</h3>
						<p>"Increíble yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod"</p>
						<div class="testimonials-content">
							<img src="assets/img/testimonials/2.jpg" alt="Imagen">
							<h4>James Anderson</h4>
							<span>Cliente</span>
						</div>
					</div>
					<div class="single-testimonials">
						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>
						<h3>Hotel Excelente</h3>
						<p>"Increíble yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod"</p>
						<div class="testimonials-content">
							<img src="assets/img/testimonials/3.jpg" alt="Imagen">
							<h4>Sarah Taylor</h4>
							<span>Cliente</span>
						</div>
					</div>
					<div class="single-testimonials">
						<ul>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
							<li>
								<i class="bx bxs-star"></i>
							</li>
						</ul>
						<h3>Natación Excelente</h3>
						<p>"Increíble yksum dolor sit ametco elit, sed do eiusmod tempor incididunt et md do eiusmoeiusmod tempor inte emamnsecacing eiusmoeiusmod"</p>
						<div class="testimonials-content">
							<img src="assets/img/testimonials/1.jpg" alt="Imagen">
							<h4>David Warner</h4>
							<span>Cliente</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Testimonials Area -->

		<!-- End News Area -->
		<section class="news-area pb-60">
			<div class="container">
				<div class="section-title">
					<span>Nuestro Blog</span>
					<h2>Noticias y actualizaciones de artículos</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-news">
							<div class="news-img">
								<a href="news-details.html">
									<img src="assets/img/news/1.jpg" alt="Imagen">
								</a>
								<div class="dates">
									<span>HOTEL</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-conversation"></i>
											Comentario
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>Celebrando Década de Años del Hotel en 2020</h3>
								</a>
								<p>Nuestro hotel celebra una década de excelencia y servicio al cliente. Únete a nosotros en esta celebración especial.</p>
								<a class="read-more" href="news-details.html">
									Leer Más
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="single-news">
							<div class="news-img">
								<a href="news-details.html">
									<img src="assets/img/news/2.jpg" alt="Imagen">
								</a>
								<div class="dates">
									<span>PRECIO</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-conversation"></i>
											Comentario
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>Un Día Perfecto con un Empresario en el Hotel Ecorik</h3>
								</a>
								<p>Descubre cómo nuestro hotel ofrece un ambiente perfecto para reuniones de negocios y eventos corporativos.</p>
								<a class="read-more" href="news-details.html">
									Leer Más
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-news">
							<div class="news-img">
								<a href="news-details.html">
									<img src="assets/img/news/1.jpg" alt="Imagen">
								</a>
								<div class="dates">
									<span>TIENDA</span>
								</div>
							</div>
							<div class="news-content-wrap">
								<ul>
									<li>
										<a href="#">
											<i class="flaticon-user"></i>
											Admin
										</a>
									</li>
									<li>
										<a href="#">
											<i class="flaticon-conversation"></i>
											Comentario
										</a>
									</li>
								</ul>
								<a href="news-details.html">
									<h3>Celebrando Década de Años del Hotel en 2019</h3>
								</a>
								<p>Nuestro hotel celebra una década de excelencia y servicio al cliente. Únete a nosotros en esta celebración especial.</p>
								<a class="read-more" href="news-details.html">
									Leer Más
									<i class="flaticon-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">Hotel Ecorik</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Habitaciones</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contacto</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

<?= footer_admin($data); ?>







        






