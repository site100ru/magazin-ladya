<?php
	
	/*
		Template Name: Акции
		Template Post Type: page
	*/
	
	//include 'header.php';
	
?>

<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Мебельный магазин «Ладья»</title>
		<!-- Bootstrap CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<!-- Style CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
		<!-- Theme CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/theme.css" rel="stylesheet">
	</head>
	<body>
		
		
		<div id="home-sp" class="scroll-point"></div>
		
		<!-- Menu 1 -->
		<nav id="top-menu-1" class="navbar navbar-expand-xl navbar-light d-none d-lg-block py-1">
			<div class="container">
				<a class="navbar-brand text-light d-none d-xxl-inline mx-3" href="#">Мебельный магазин</a>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px;">гор. Рязань,<br>ул. Грибоедова, д. 9</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<div class="row align-items-center">
								<div class="col-2">
									<img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png" style="position: relative; right: -5px;">
								</div>
								<div class="col-10">
									<span class="nav-link" style="line-height: 20px;">Пн-Сб: 10:00-19:00<br>Вс: 10:00-18:00</span>
								</div>
							</div>
						</li>
						<li class="nav-item me-2">
							<a href="mailto:ladya.kuhni@mail.ru" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png" class="me-2">ladya.kuhni@mail.ru</a>
						</li>
						<li class="nav-item me-2">
							<a href="tel:89511004979" id="top-menu-tel" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobail-ico.png" class="me-2">8 (951) 100-49-79</a>
						</li>
						<li class="nav-item me-2">
							<a href="tel:84912246429" id="top-menu-tel" class="nav-link"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/phone-ico.png" class="me-2">8 (4912) 24-64-29</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="whatsapp://send?phone=+79119548494"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
						</li-->
						<li class="nav-item">
							<a class="nav-link ico-button" href="https://vk.com/club90212067"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Menu 1 -->
		
		
		<!-- Menu 2 -->
		<nav id="top-menu-2" class="navbar navbar-expand-xl navbar-dark py-3">
			<div class="container">
				<a class="navbar-brand" href="#"><img id="navbar-brand-img" src="<?php echo get_template_directory_uri(); ?>/img/ico/logo.png"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent2">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="/главная">Главная</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Каталог
							</a>
							<ul class="dropdown-menu">
								<?php
									$terms = get_terms( array(
										'taxonomy' => 'product_cat',
										'hide_empty' => true,
										'pad_counts'=> true,
										'orderby' => 'menu_order',
										'parent' => 0
									) );

									if( $terms ) :
										foreach( $terms as $term ) : ?>
											<li><a class="dropdown-item" href="<?php echo get_term_link($term->term_id);?>"><?php echo $term->name;?></a></li>
										<?php endforeach;
									endif;
								?>
							</ul>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="/наши-работы">Наши работы</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="/акции">Акции</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contacts-sp">Контакты</a>
						</li>
						<!-- Mobile menu -->
						<!--li class="nav-item d-xl-none">
							<a class="nav-link active" href="#">Бесплатный возов замерщика</a>
						</li-->
						<li class="nav-item d-xl-none">
							<a id="top-menu-tel" class="nav-link" href="tel:89511004979">8 (951) 100-49-79</a>
						</li>
						<li class="nav-item d-xl-none">
							<a class="ico-button pe-2" href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
							<a class="ico-button pe-2" href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						<!-- <a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a--> 
							<a class="ico-button" href="https://vk.com/club90212067"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li>
						<!-- End mobile menu -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Menu 2 -->
		
		
		<!-- Header -->
		<header class="second-header">
			<div class="container">
				<div class="row align-items-center">
					<div class="col text-center">
						<h1>Акции</h1>
					</div>
				</div>
			</div>
		</header>
		<!-- /Header -->
		
		
		<!-- Advantages -->
		<div id="advantages-sp" class="scroll-point"></div>
		<section class="actions-section bg-white pt-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="mb-1 text-corporate-2 text-center">Наши акции</h2>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-5">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/act-1.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - мойка, посудосушитель и петли с доводчиком <strong>в&#160;ПОДАРОК!</strong></p>
							</div>
							<div class="col-md-6 mb-5">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/act-2.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - <strong>СКИДКИ до 30%!</strong></p>
							</div>
						</div>
						<!--div class="row">
							<div class="col-md-4 mb-5">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/act-1.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - мойка, посудосушитель и петли с доводчиком <strong>в ПОДАРОК!</strong></p>
							</div>
							<div class="col-md-4 mb-5">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/act-1.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - <strong>СКИДКИ до 30%!</strong></p>
							</div>
							<div class="col-md-4 mb-5">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/act-1.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - <strong>СКИДКИ до 30%!</strong></p>
							</div>
						</div-->
					</div>
				</div>
			</div>
		</section>
		<!-- /Advantages -->
		
		
		<!-- Advantages -->
		<div id="advantages-sp" class="scroll-point"></div>
		<section class="advantages bg-light py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="mb-1 text-corporate-2 text-center">Наши преимущества</h2>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/adv-1.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Большой выбор мебели</h3>
										<p class="mb-0">Кухни, шкафы, гардеробные, гостиные, мягкая мебель, прихожие, спальни, детские, обеденные группы и другая мебель готовая и на заказ.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/adv-2.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Сделаем на заказ</h3>
										<p class="mb-0">Сделаем любую корпусную мебель на заказ по Вашим размерам.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/adv-3.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Бесплатная парковка</h3>
										<p class="mb-0">Удобная и бесплатная парковка для наших клиентов.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 mb-5">
								<div class="row">
									<div class="col-2 text-center">
										<img src="<?php echo get_template_directory_uri(); ?>/img/ico/adv-4.png" class="img-fluid">
									</div>
									<div class="col-10">
										<h3>Сделаем дизайн</h3>
										<p class="mb-0">Сделаем дизайн любой корпусной мебели <strong>бесплатно!</strong></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Advantages -->
		
		
		<!-- Contacts -->
		<div id="contacts-sp" class="scroll-point"></div>
		<section class="contacts-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<h2 class="text-light mb-1">Контакты</h2>
						<div class="title-line mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<ul class="mb-5">
							<li class="mb-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/location-ico.png" class="me-2">гор. Рязань, ул. Грибоедова, д. 9</li>
							<li class="mb-2"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/clock-ico.png" class="me-2">Пн-Сб: 10:00-19:00, Вс: 10:00-18:00</li>
							<li class="mb-2"><a href="tel:84912246429" class="text-light text-decoration-none"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/phone-ico.png" class="me-2">8 (4912) 24-64-29</a></li>
							<li class="mb-2"><a href="tel:89511004979" class="text-light text-decoration-none"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/mobail-ico.png" class="me-2">8 (951) 100-49-79</a></li>
							<li><a href="mailto:ladya.kuhni@mail.ru" class="text-light text-decoration-none"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/email-ico.png" class="me-2">ladya.kuhni@mail.ru</a></li>
						</ul>
						<div class="row align-items-center">
							<div class="col-md-6 mb-5 mb-md-0">
								<button type="button" class="d-block btn btn-corporate-1" data-bs-toggle="modal" data-bs-target="#messageModal">Напишите нам</button>
							</div>
							<div class="col-md-6">
								<a class="ico-button pe-2" href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
								<a class="ico-button pe-2" href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
								<!--a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a-->
								<a class="ico-button" href="https://vk.com/club90212067"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="map"></div>
			<footer style="border-top: 1px solid rgba(255,255,255,.35);">
				<div class="container">
					<div class="row">
						<div class="col py-2">
							<div id="company-in-footer">©<?php echo date('Y'); ?> Мебельный магазин «Ладья»</div>
							<div id="im-in-footer">Создание и продвижение сайтов: <a href="https://site100.ru" class="text-light">site100.ru</a></div>
						</div>
					</div>
				</div>
			</footer>
		</section>
		<!-- /Contacts -->
		
		
		<!-- Callback Modal -->
		<div class="modal fade" id="designerModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="callback-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="callbackModalLabel">Записаться к дизайнеру</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Оставьте Ваши контакты и дизайнер свяжется с Вами в ближайшее время.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
							</div>
						</div>
						
						<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-callback">

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Записаться</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Callback Modal -->
		
		
		<!-- Callback Modal -->
		<div class="modal fade" id="measurerModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="callback-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="callbackModalLabel">Пригласить замерщика</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Оставьте Ваши контакты и замерщик свяжется с Вами в ближайшее время.</small></p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 mb-3 mb-md-0">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6">
								<input type="text" name="tel" class="form-control telMask" placeholder="Ваш телефон*">
							</div>
						</div>
						
						<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-order">

					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Пригласить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Callback Modal -->
		
		
		<!-- Message Modal -->
		<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/message-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="messageModalLabel">Задать вопрос</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6 mb-3">
								<input type="text" name="name" class="form-control" placeholder="Ваше имя">
							</div>
							<div class="col-md-6 mb-3">
								<input type="text" name="email" class="form-control" placeholder="Ваш email*" required>
							</div>
							<div class="col-12">
								<textarea type="text" name="mes" class="form-control" placeholder="Ваш вопрос*" required></textarea>
							</div>
						</div>
						
						<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-message">
					
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Отправить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Message Modal -->

		<!-- reCaptcha v3 New from Google -->
		<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
		<script>
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {action: 'action_name'}).then(function(token) {
					if ( document.getElementById('g-recaptcha-response-callback') ) {
						document.getElementById('g-recaptcha-response-callback').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-order') ) {
						document.getElementById('g-recaptcha-response-order').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-measurer') ) {
						document.getElementById('g-recaptcha-response-measurer').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-designer') ) {
						document.getElementById('g-recaptcha-response-designer').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-message') ) {
						document.getElementById('g-recaptcha-response-message').value=token;
					}
				});
			});
		</script>

		<!-- Callback button HTML -->
		<div class="callback-button-wrapper">
			<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
				<div id="btnIco" class="callback-button-ico"></div>
			</div>

			<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left"
				data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
				<a type="button"  data-bs-toggle="modal" data-bs-target="#messageModal">
					<div class="callback-form-button-ico"></div>
				</a>
			</div>
			<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left"
				data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
				<a href="tel:79511004979">
					<div class="callback-phone-button-ico"></div>
				</a>
			</div>
			<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
				data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
				<a href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"
					target="blank">
					<div class="callback-whatsapp-button-ico"></div>
				</a>
			</div>
			<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
				data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
				<a href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"
					target="blank">
					<div class="callback-telegram-button-ico"></div>
				</a>
			</div>
		</div>
		<!-- /Callback button HTML -->

		<!-- Callback button JS -->
		<script>
			function callbackButtonClick() {

				let formBtn = document.getElementById('formBtn').style.top;


				if (formBtn == "0px" || formBtn == 0) {
					document.getElementById('callbackBtn').style.animation = "none";
					document.getElementById('btnIco').style.animation = "change2 linear .5s";
					document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
					document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";

					document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
					document.getElementById('btnIco').style.transform = "rotate(180deg)";


					document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/callback/callback-button-close.png)";
					document.getElementById('btnIco').style.backgroundPosition = "center";
					document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

					document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
					document.getElementById('btnIco').style.backgroundSize = "cover";


					document.getElementById('formBtn').style.top = "-60px";
					document.getElementById('formBtn').style.opacity = "1";

					document.getElementById('phoneBtn').style.top = "-120px";
					document.getElementById('phoneBtn').style.opacity = "1";

					document.getElementById('whatsappBtn').style.top = "-180px";
					document.getElementById('whatsappBtn').style.opacity = "1";

					document.getElementById('telegramBtn').style.top = "-240px";
					document.getElementById('telegramBtn').style.opacity = "1";
				} else {
					document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
					document.getElementById('btnIco').style.animation = "change linear 16s infinite";
					document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";
					document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
					document.getElementById('btnIco').style.transform = "rotate(180deg)";
					document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
					document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/callback/callback-button-ico.png)";
					document.getElementById('btnIco').style.backgroundPosition = "center";
					document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

					document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
					document.getElementById('btnIco').style.backgroundSize = "cover";


					document.getElementById('formBtn').style.top = "0px";
					document.getElementById('formBtn').style.opacity = "0";

					document.getElementById('phoneBtn').style.top = "0px";
					document.getElementById('phoneBtn').style.opacity = "0";

					document.getElementById('whatsappBtn').style.top = "0px";
					document.getElementById('whatsappBtn').style.opacity = "0";

					document.getElementById('telegramBtn').style.top = "0px";
					document.getElementById('telegramBtn').style.opacity = "0";
				}
			}
		</script>
		<!-- /Callback button JS -->
		
		
		<!-- Bootstarp JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
		
		<!-- Main scripts -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		
		<!-- Telephone number mask -->
		<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script>
			var telMask = document.getElementsByClassName("telMask");
			var im = new Inputmask("+7(999)999-99-99");
			im.mask(telMask);
		</script>
		
		<!-- Загрузка изображений с приоритетом -->
		<script>
			// Добавить в img атрибут data-src вместо src
			if ('loading' in HTMLImageElement.prototype) {
				const images = document.querySelectorAll('img[loading="lazy"]');
				images.forEach(img => {
					img.src = img.dataset.src;
				});
			} else {
				// Dynamically import the LazySizes library
				const script = document.createElement('script');
				script.async = true;
				script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.1.2/lazysizes.min.js';
				document.body.appendChild(script);
			}
		</script>
		
		
		<!-- API Yandex Map -->
		<script src="https://api-maps.yandex.ru/2.1/?apikey=7a322092-0e89-4de6-8bff-0a1795b5548e&lang=ru_RU" type="text/javascript"></script>
		<script type="text/javascript">
			// Функция ymaps.ready() будет вызвана, когда
			// загрузятся все компоненты API, а также когда будет готово DOM-дерево.
			ymaps.ready(init);
			/* На разную ширину экрана разное приближение карты */
			var screenWidth = document.documentElement.clientWidth;
			if ( screenWidth > 1000 ) {
				var zoom = 17;
			} else {
				var zoom = 17;
			}
			
			function init() {
				// Создание карты.
				var myMap = new ymaps.Map("map", {
					// Координаты центра карты.
					// Порядок по умолчанию: «широта, долгота».
					// Чтобы не определять координаты центра карты вручную,
					// воспользуйтесь инструментом Определение координат.
					center: [54.6295,39.7635], // Map center
					// Уровень масштабирования. Допустимые значения:
					// от 0 (весь мир) до 19.
					zoom: zoom
				});
				var myPlacemark = new ymaps.Placemark( [54.62913002081631,39.76371698175319], {}, {
					iconLayout: 'default#image',
					iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/ico/placemark.png',
					iconImageSize: [320, 282],
					iconImageOffset: [-160,-272]
				});
				myMap.behaviors.disable('scrollZoom'); // Disable zoom on scroll
				//myMap.behaviors.disable('multiTouch'); // Disable zoom
				//myMap.behaviors.disable('drag'); // Disable drag
				myMap.geoObjects.add(myPlacemark);
			}
		</script>
		
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript" >
		   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
		   var z = null;m[i].l=1*new Date();
		   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
		   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
		   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		   ym(90223431, "init", {
				clickmap:true,
				trackLinks:true,
				accurateTrackBounce:true,
				webvisor:true
		   });
		</script>
		<noscript><div><img src="https://mc.yandex.ru/watch/90223431" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
		<!-- /Yandex.Metrika counter -->
	</body>
</html>