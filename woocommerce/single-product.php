<?php

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
						<!--li class="nav-item">
							<a class="nav-link ico-button pe-0" href="whatsapp://send?phone=+79119548494"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
						</li-->
						<!--li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
						</li>
						<li class="nav-item">
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
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
							<a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/наши работы">Наши работы</a>
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
							<!--a class="ico-button pe-2" href="whatsapp://send?phone=+79119548494"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a-->
							<!--a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
							<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a-->
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
						<h1><?php the_title(); ?></h1>
						
						<!--p class="header-description">Готовые и на заказ.</p>
						<button type="submit" class="btn btn-lg btn-corporate-1 mb-3 mb-md-0" data-bs-toggle="modal" data-bs-target="#designerModal">Запись к дизайнеру</button>
						<button type="submit" class="btn btn-lg btn-corporate-outline-1 mb-3 mb-md-0">Узнать стоимость кухни</button>
						<button type="submit" class="btn btn-lg btn-corporate-1" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</button-->
					</div>
					<!--div class="col-12 col-lg-4 offset-xxl-1 col-xxl-3">
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/order-mail.php" class="header-form">
							<h5><strong class="d-block">Бесплатно сделаем</strong> дизайн-проект и&nbsp;расчет стоимости в&nbsp;течение 24&nbsp;часов!</h5>
							<input type="text" name="name" class="form-control-lightgrey" id="exampleFormControlInput1" placeholder="Имя">
							<input type="text" name="tel" class="form-control-lightgrey telMask" id="exampleFormControlInput2" placeholder="Телефон*" required>
							
						</form>
					</div-->
				</div>
			</div>
		</header>
		<!-- /Header -->
		
		
		<!-- Catalogy section 2 -->
		<section class="catalogy-section-2 py-5">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="row">
							
							<?php
							/**
							 * The Template for displaying all single products
							 *
							 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
							 *
							 * HOWEVER, on occasion WooCommerce will need to update template files and you
							 * (the theme developer) will need to copy the new files to your theme to
							 * maintain compatibility. We try to do this as little as possible, but it does
							 * happen. When this occurs the version of the template file will be bumped and
							 * the readme will list any important changes.
							 *
							 * @see         https://docs.woocommerce.com/document/template-structure/
							 * @package     WooCommerce\Templates
							 * @version     1.6.4
							 */

							if ( ! defined( 'ABSPATH' ) ) {
								exit; // Exit if accessed directly
							}

							//get_header( 'shop' ); ?>

								<?php
									/**
									 * woocommerce_before_main_content hook.
									 *
									 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
									 * @hooked woocommerce_breadcrumb - 20
									 */
									//do_action( 'woocommerce_before_main_content' );
								?>

									<?php while ( have_posts() ) : ?>
										<?php the_post(); ?>

										<?php wc_get_template_part( 'content', 'single-product' ); ?>

									<?php endwhile; // end of the loop. ?>

								<?php
									/**
									 * woocommerce_after_main_content hook.
									 *
									 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
									 */
									//do_action( 'woocommerce_after_main_content' );
								?>

								<?php
									/**
									 * woocommerce_sidebar hook.
									 *
									 * @hooked woocommerce_get_sidebar - 10
									 */
									//do_action( 'woocommerce_sidebar' );
								?>

							<?php
							//get_footer( 'shop' );

							/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
							?>

						</div>
					</div>
				</div>
			</div>
			
		</section>
		<!-- /Catalogy section 2 -->
		

			<?php
				/**
				 * Hook: woocommerce_after_single_product_summary.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				do_action( 'woocommerce_after_single_product_summary' );
			?>
		
		
		<!-- Advantages -->
		<div id="advantages-sp" class="scroll-point"></div>
		<section class="advantages bg-white py-5">
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
		<section class="actions-section bg-light pt-5">
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
								<!--a class="ico-button pe-2" href="whatsapp://send?phone=+79119548494"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/whatsapp-ico.png"></a>
								<!--a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/telegram-ico.png"></a>
								<a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a-->
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
							<div id="im-in-footer">Создание и продвижение сайтов: <a href="https://сайт100.рф" class="text-light">сайт100.рф</a></div>
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
		
		
		<!-- Callback Modal -->
		<div class="modal fade" id="getPriceModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/callback-mail.php" class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="callbackModalLabel">Узнать стоимость</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<p><small>Оставьте Ваши контакты, наш менеджер свяжется с Вами в ближайшее время и ответит на все вопросы.</small></p>
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
						<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
						<button type="submit" class="btn btn-corporate-2 px-3 mx-auto">Отправить</button>
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
						<input type="hidden" id="g-recaptcha-response-message" name="g-recaptcha-response">
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
			
			<div id="gallery-<?php the_ID(); ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
						
				<!--div class="carousel-indicators">
					<?php
						for ( $i=1; $i<=9; $i++ ) {
							if ( get_post_meta($post->ID, '_img-'.$i ) ) { ?>
								<button class="carousel-indicator-2<?php if ( $i == 1 ) echo ' active'; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $i-1; ?>" aria-label="Slide 1"></button>
							<?php }
						}
					?>
				</div-->
				
				<div class="carousel-inner h-100">
					<?php
						$attachment_ids = $product->get_gallery_image_ids();
						$count = false;
						foreach ( $attachment_ids as $attachment_id ) {
						
					?>
						<div class="carousel-item carousel-item-2 h-100<?php if ( $count == false ) { echo ' active'; $count = true; } ?>">
							<div class="row align-items-center h-100">
								<div class="col text-center">
									<img src="<?php echo wp_get_attachment_url( $attachment_id ); ?>" class="img-fluid" loading="lazy" style="max-width: 75vw; max-height: 75vh;" alt="...">
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php the_ID(); ?>" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

			<!-- Кнопка закрытия галереи -->
			<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		</div> <!-- #galleryWrapper -->


		<script>
			/* Функция открытия галереи */
			function galleryOn(gal) {
				var gallery = gal; // Получаем ID галереи
				// Открываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'block';
				
				/* Открываем галерею */
				document.getElementById(gallery).style.display = "block";
				
			}

			/* Кнопка закрытия галереи */
			function closeGallery() {
				// Закрываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'none';
				document.getElementById("gallery-<?php the_ID(); ?>").style.display = "none";
			}
		</script>
		
		
		<!-- Загрузка изображений с приоритетом
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
		</script> -->
		
		
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
