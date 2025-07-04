<?php
	
	/*
		Template Name: Наши работы
		Template Post Type: page
	*/
	
	//include 'header.php';
	session_start();
	
	if ( isset( $_SESSION['win'] ) ) {
		unset( $_SESSION['win'] );
		$display = "block";
	} else $display = "none";
	
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
							<a class="nav-link ico-button pe-0" href="https://wa.me/79511004979?web=1&app_absent=1&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="https://t.me/+79511004979?text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C!%20%D0%AF%20%D1%81%20%D1%81%D0%B0%D0%B9%D1%82%D0%B0%20%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD-%D0%BB%D0%B0%D0%B4%D1%8C%D1%8F.%D1%80%D1%84"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						</li>
						<!-- <li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
						</li> -->
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
							<a class="nav-link active" href="/наши-работы">Наши работы</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/акции">Акции</a>
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
							<!-- <a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a> -->
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
						<h1>Наши работы</h1>
						<p class="header-description">Примеры нашей продукции.</p>
						<!--button type="submit" class="btn btn-lg btn-corporate-1 mb-3 mb-md-0" data-bs-toggle="modal" data-bs-target="#designerModal">Запись к дизайнеру</button>
						<button type="submit" class="btn btn-lg btn-corporate-outline-1 mb-3 mb-md-0">Узнать стоимость кухни</button>
						<button type="submit" class="btn btn-lg btn-corporate-1" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</button-->
					</div>
				</div>
			</div>
		</header>
		<!-- /Header -->
		
		
		<!-- Catalogy -->
		<div id="portfolio-sp" class="scroll-point"></div>
		<section class="portfolio-section py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<h2 class="text-center text-darkbrown mb-1">Наши работы</h2>
						<div class="title-line m-auto mb-4">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
						<div class="row mb-5">
							<div class="col">
								<div class="nav-scroller">
									<ul class="nav d-flex justify-content-center" id="myTab" role="tablist">
										<?php
											$args = [
												'taxonomy'      => [ 'cat-portfolio' ], // название таксономии с WP 4.5
												'order' => 'ASC',
												'orderby' => 'slug',
												/* Может быть много других параметров */
											];
											$terms = get_terms( $args );
											$active = false;
											foreach( $terms as $term ) { ?>
												<li class="nav-item" role="presentation">
													<a class="nav-link px-0 mx-2<?php if ( $active == false ) echo ' active'; ?>" id="<?php echo $term->name; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $term->name; ?>" role="tab" aria-controls="<?php echo $term->name; ?>" aria-selected="true"><?php echo $term->name; ?></a>
												</li>
											<?php $active = true; }
										?>
									</ul>
								</div>
								
								<div class="d-md-none text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/left-right-finger.png" style="opacity: 1; max-width: 25px;"></div>
								
								<div class="tab-content pt-4" id="myTabContent">
									<?php
										$args = [
											'taxonomy'      => [ 'cat-portfolio' ], // название таксономии с WP 4.5
											'order' => 'ASC',
											'orderby' => 'slug',
											/* Может быть много других параметров */
										];
										$terms = get_terms( $args );
										$active = false;
										foreach( $terms as $term ) { ?>
											<div class="tab-pane fade<?php if ( $active == false ) echo ' show active'; ?>" id="<?php echo $term->name; ?>" role="tabpanel" aria-labelledby="<?php echo $term->name; ?>-tab">
												<div class="row">
													<?php
														
														$query = new WP_Query( array(
															
															'tax_query' => array(
																array(
																	'taxonomy' => 'cat-portfolio',
																	'field'    => 'slug', // Поле, по которому ищем термин
																	'terms'    => $term->slug
																)
															)
														) );
																						
														while ( $query->have_posts() ) { $query->the_post(); ?>
															<div class="col-md-4 mb-5">
																<a onClick="galleryOn('gallery-<?php echo $post->ID; ?>');">	
																	<div class="approximation shadow rounded">
																		<img data-src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy">
																		<!--div class="card-wrapper"><h3><?php the_title(); ?></h3></div-->
																	</div>
																</a>
															</div>
														<?php }
													?>
												</div>
											</div>
										<?php $active = true; }
									?>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</section>
		<!-- /Catalogy -->
		
		
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
								<p class="mb-0">При заказе кухни - мойка, посудосушитель и петли с доводчиком <strong>в ПОДАРОК!</strong></p>
							</div>
							<div class="col-md-6 mb-5">
								<img src="<?php echo get_template_directory_uri(); ?>/img/actions/act-2.jpg" class="img-fluid mb-3">
								<p class="mb-0">При заказе кухни - <strong>СКИДКИ до 30%!</strong></p>
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
								<!--a class="ico-button pe-2" href="whatsapp://send?phone=+79119548494"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a-->
								<!--a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
								<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a-->
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
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
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
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
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
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Отправить</button>
					</div>
				</form>
			</div>
		</div>
		<!-- /Message Modal -->
		<!-- Показываем сообщение об успешной отправки -->
		<div style="display: <?php echo $display; ?>;" onclick="modalClose();">
			<div id="background-msg" style="display: <?php echo $display; ?>;"></div>
			<button id="btn-close" type="button" class="btn-close btn-close-white" onclick="modalClose();" style="position: absolute; z-index: 9999; top: 15px; right: 15px;"></button>
			<div id="message">
				<?php echo $_SESSION['recaptcha']; unset($_SESSION['recaptcha']); ?>
			</div> 
		</div>
		
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
		
		
		
		<!-- Gallery wrapper -->
		<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999;">
			<?php
				$query = new WP_Query( array(
					'post_type' => 'portfolio'
				) );
											
				while ( $query->have_posts() ) { $query->the_post(); ?>
					<div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
						
						
						<div class="carousel-indicators">
							<?php
								for ( $i=1; $i<=9; $i++ ) {
									if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
										<button class="carousel-indicator-2<?php if ( $i == 1 ) echo ' active'; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" aria-label="Slide 1"></button>
									<?php }
								}
							?>
						</div>
						
						
						<div class="carousel-inner h-100">
							<?php
								for ( $i=1; $i<=9; $i++ ) {
									if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
										<div class="carousel-item carousel-item-2 h-100 <?php if ( $i == 1 ) echo ' active'; ?>">
											<div class="row align-items-center h-100">
												<div class="col text-center">
													<img data-src="<?php echo get_post_meta($post->ID, '_img-'.$i )[0]; ?>" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh;" alt="...">
												</div>
											</div>
										</div>
										
									<?php }
								}
							?>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				<?php wp_reset_postdata(); }
			?>
			<!-- Кнопка закрытия галереи -->
			<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		</div>


		<script>
			/* Функция открытия галереи */
			function galleryOn(gal) {
				var gallery = gal; // Получаем ID галереи
				// Открываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'block';
				
				/* Открываем галерею */
				<?php
					$query = new WP_Query( array(
						'post_type' => 'portfolio'
					) );
					while ( $query->have_posts() ) { $query->the_post();
						echo 'if ( gallery == "gallery-'.$post->ID.'" ) { document.getElementById("gallery-'.$post->ID.'").style.display = "block"; }';
					}
				?>
			}

			// Кнопка закрытия галереи
			function closeGallery() {
				// Закрываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'none';
				//document.getElementById("gallery-<?php echo $post->ID; ?>").style.display = "none";
				<?php
					$query = new WP_Query( array(
						'post_type' => 'portfolio'
					) );
					while ( $query->have_posts() ) { $query->the_post();
						echo 'document.getElementById("gallery-'.$post->ID.'").style.display = "none";';
					}
				?>
			}
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
				var zoom = 9;
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