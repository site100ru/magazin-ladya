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
		<!-- Quiz CSS -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/quiz.css" rel="stylesheet">
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
							<a class="nav-link ico-button pe-0" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a>
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
				
						<li class="nav-item">
							<a class="nav-link" href="/наши-работы">Наши работы</a>
						</li>
						<li class="nav-item d-none d-xl-inline">
							<span class="nav-link px-1"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/menu-point-ico.png"></span>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="actions.html">Акции</a>
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
							<!-- <a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a> -->
							<a class="ico-button" href="https://vk.com/club90212067"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/vk-ico.png"></a>
						</li>
						<!-- End mobile menu -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- /Menu 2 -->

<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

//get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
//do_action( 'woocommerce_before_main_content' );

?>


<!-- Header -->
<header class="second-header woocommerce-products-header">
	<div class="container">
		<div class="row align-items-center">
			<div class="col text-center">
				<h1><?php woocommerce_page_title(); ?></h1>
				<?php do_action( 'woocommerce_archive_description' ); ?>
				
				<!-- Home section advantages -->
				<div class="row gx-0 align-items-center pb-5 text-start">
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-free-design-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Бесплатный дизайн</h3>
							<p class="home-section-advantage-description">По Вашим размерам</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-free-measure-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Бесплатный замер</h3>
							<p class="home-section-advantage-description">С образцами материалов</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-lg-3 mb-2 mb-md-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-discount-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Скидки до 30%</h3>
							<p class="home-section-advantage-description">И бытовая техника в подарок</p>
						</div>
						<div style="clear: both;"></div>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0">
						<div class="block-home-advantage-left">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico/home-advantage-manufacture-icon.svg">
						</div>
						<div class="block-home-advantage-right">
							<h3 class="text-light mb-0 home-section-advantage-title">Свое производство</h3>
							<p class="home-section-advantage-description">С гарантией 2 года</p>
						</div>
						<div style="clear: both;"></div>
					</div>
				</div>
				<!-- /Home section advantages -->
				
				<button type="submit" class="btn btn-lg btn-corporate-outline-1 mb-3 mb-md-0" data-bs-toggle="modal" data-bs-target="#designerModal">Запись к дизайнеру</button>
				<a href="#quiz-sp" type="button" class="btn btn-lg btn-corporate-1 mb-3 mb-md-0">Рассчитать стоимость</a>
				<button type="submit" class="btn btn-lg btn-corporate-outline-1" data-bs-toggle="modal" data-bs-target="#measurerModal">Вызов замерщика</button>
				
				<!--p class="header-description mt-5" style="background: #dd127b; padding: 10px; max-width: 675px; margin-x: auto; border-radius: 5px;">При заказе мебели скажи кодовое слово "МЕБЕЛЬ"<br>и получи <span class="fw-bold text-uppercase">подарок!</span></p-->
			</div>
		</div>
	</div>
</header>
<!-- /Header -->


<!-- Catalogy section 2 -->
<section class="catalogy-section-2 py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
					$obj = get_queried_object();
					$cat_name = $obj->name;
				?>
			
				<h2 class="text-center text-corporate-2 mb-1"><?php echo $cat_name; ?></h2>
				<p class="section-subtitle text-center mb-2" style="max-width: 750px; margin: auto;">Выбирайте из нашего каталога или присылайте свое изображение понравившейся кухни для расчета ее стоимости у нас!</p>
				<div class="title-line m-auto mb-5">
					<div class="title-quadro" style="left: 0;"></div>
					<div class="title-quadro" style="left: 25px;"></div>
					<div class="title-quadro" style="right: 0px;"></div>
				</div>
				
				
				<div class="row">
					<div class="col-md-2">
						<?php dynamic_sidebar( 'wsidebar-1' ); ?>
						<!--ul class="nav flex-column catalogy-menu">
							<?php				
								/*
								$obj = get_queried_object();
								$cat_id = $obj->term_id;
								$cat_name = $obj->name;
								
								/*
								echo '<hr>';
								echo $cat_id;
								echo '<br>';
								echo $cat_name;
								echo '<hr>';
								*/
								
								/* Определяем радителя текущей категории
								$ancestors = get_ancestors( $cat_id, 'product_cat' );
								$term = get_term( $cat_id );
								
								/*
								echo '<hr>';
								//print_r( $ancestors );
								echo '<br>';
								print_r( $term );
								echo '<hr>';
								*/
								
								/*$term = get_term( $ancestors[0] );
								
								
								
								// Имя родителя текущей категории
								$parent = $term->name;
								// ID родителя текущей категории
								$parent_id = $term->term_id;
								
								
								// Если есть родитель, то...
								if ( $parent ) {
									
									// Выводим в меню родительскую категорию
									//$cat_name = $obj->name;
									//$cat_id = $obj->term_id;
									
									if ( $parent == 'Мягкая мебель' ) {
										echo '<a href="'.get_category_link( $parent_id ).'" class="nav-link">Вся <span class="text-lowercase">'.$parent.'</span></a>';
									} else {
										echo '<a href="'.get_category_link( $parent_id ).'" class="nav-link">Все <span class="text-lowercase">'.$parent.'</span></a>';
									}
									
									
									
									
									
									
									
									$args = [
										'taxonomy'      => [ 'product_cat' ],
										'orderby'       => 'menu_order', // Сортировка как в админке
										'order'         => 'ASC',
										'hide_empty'    => true,
										'object_ids'    => null,
										'include'       => array(),
										'exclude'       => array(),
										'exclude_tree'  => array(),
										'number'        => '',
										'fields'        => 'all',
										'count'         => false,
										'slug'          => '',
										'parent'         => '',
										'hierarchical'  => true,
										'child_of'      => $parent_id,
										'get'           => '', // ставим all чтобы получить все термины
										'name__like'    => '',
										'pad_counts'    => false,
										'offset'        => '',
										'search'        => '',
										'cache_domain'  => 'core',
										'name'          => '',    // str/arr поле name для получения термина по нему. C 4.2.
										'childless'     => true, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
										'update_term_meta_cache' => true, // подгружать метаданные в кэш
										'meta_query'    => '',
									];

									$terms = get_terms( $args );

									foreach ( $terms as $term ) { ?>
										<li class="nav-item">
											<a href="<?php echo get_category_link( $term->term_id ); ?>" class="nav-link active" aria-current="page"><?php echo $term->name; ?></a>
										</li>
									<?php }
								
								// Если нет родителя, то ...
								} else {
									
									// Выводим в меню родительскую категорию
									$cat_name = $obj->name;
									$cat_id = $obj->term_id;
									
									if ( $cat_name == 'Мягкая мебель' ) {
										echo '<a href="'.get_category_link( $cat_id ).'" class="nav-link active">Вся <span class="text-lowercase">'.$cat_name.'</span></a>';
									} else {
										echo '<a href="'.get_category_link( $cat_id ).'" class="nav-link active">Все <span class="text-lowercase">'.$cat_name.'</span></a>';
									}
									
									$args = [
										'taxonomy'      => [ 'product_cat' ],
										'orderby'       => 'menu_order', // Сортировка как в админке
										'order'         => 'ASC',
										'hide_empty'    => true,
										'object_ids'    => null,
										'include'       => array(),
										'exclude'       => array(),
										'exclude_tree'  => array(),
										'number'        => '',
										'fields'        => 'all',
										'count'         => false,
										'slug'          => '',
										'parent'         => '',
										'hierarchical'  => true,
										'child_of'      => $cat_id,
										'get'           => '', // ставим all чтобы получить все термины
										'name__like'    => '',
										'pad_counts'    => false,
										'offset'        => '',
										'search'        => '',
										'cache_domain'  => 'core',
										'name'          => '',    // str/arr поле name для получения термина по нему. C 4.2.
										'childless'     => true, // true не получит (пропустит) термины у которых есть дочерние термины. C 4.2.
										'update_term_meta_cache' => true, // подгружать метаданные в кэш
										'meta_query'    => '',
									];

									$terms = get_terms( $args );

									foreach ( $terms as $term ) { ?>
										<li class="nav-item">
											<a href="<?php echo get_category_link( $term->term_id ); ?>" class="nav-link" aria-current="page"><?php echo $term->name; ?></a>
										</li>
									<?php }
								}
								*/
							?>
						</ul-->
					</div>
					<div class="col-md-10">
						
							<?php
								if ( woocommerce_product_loop() ) {

									/**
									 * Hook: woocommerce_before_shop_loop.
									 *
									 * @hooked woocommerce_output_all_notices - 10
									 * @hooked woocommerce_result_count - 20
									 * @hooked woocommerce_catalog_ordering - 30
									 */
									//do_action( 'woocommerce_before_shop_loop' );

									woocommerce_product_loop_start();

									if ( wc_get_loop_prop( 'total' ) ) {
										
										/*
										global $query_string;
										// Добавляем базовые параметры в массив $query_string_args
										parse_str( $query_string, $query_string_args );
										// Добавляем параметры в новый массив
										$query_string_args[ 'order' ] = 'ASC';
										$query_string_args[ 'orderby' ] = 'menu_order';
										// Не выводим продукты, которые имеют тэги 'витринные-образцы'
										$query_string_args[ 'tax_query' ] = array(
											'relation' => 'AND',
											array(
												'taxonomy' => 'product_tag',
												'field'    => 'slug',
												'terms'    => 'витринные-образцы',
												'operator' => 'NOT IN'
											)
										);
										
										query_posts( $query_string_args ); */
										
										while ( have_posts() ) { the_post();

											/**
											 * Hook: woocommerce_shop_loop.
											 */
											do_action( 'woocommerce_shop_loop' );

											wc_get_template_part( 'content', 'product' );
										}
										wp_reset_query();
									}

									woocommerce_product_loop_end();

									/**
									 * Hook: woocommerce_after_shop_loop.
									 *
									 * @hooked woocommerce_pagination - 10
									 */
									do_action( 'woocommerce_after_shop_loop' );
								} else {
									/**
									 * Hook: woocommerce_no_products_found.
									 *
									 * @hooked wc_no_products_found - 10
									 */
									do_action( 'woocommerce_no_products_found' );
								}
							?>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Catalogy section 2 -->


<?php
	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	//do_action( 'woocommerce_after_main_content' );

	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	//do_action( 'woocommerce_sidebar' );

	//get_footer( 'shop' );
?>


<!-- Order section -->
<section class="order-section bg-light">
	<div class="order-section-img d-none d-md-block" style="background: url(<?php echo get_template_directory_uri(); ?>/img/order-img-1.jpg) center; background-size: cover; right: 0%; left: 50%;"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-5 text-md-end">
				<h2 class="text-corporate-2 mb-4">Не нашли подходящего варианта из нашего каталога?</h2>
				<p class="mb-4">Наш дизайнер создаст для Вас дизайн любой корпусной мебели Вашей мечты абсолютно <strong>бесплатно!</strong></p>
				<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/order-mail.php">
					<div class="row justify-content-end">
						<div class="col-md-6">
							<label class="form-label">Ваше имя</label>
							<input type="text" name="name" class="form-control-corporate-2" id="exampleFormControlInput1" placeholder="">
						</div>
						<div class="col-md-6">
							<label class="form-label">Ваш телефон*</label>
							<input type="text" name="tel" class="form-control-corporate-2 telMask" id="exampleFormControlInput2" required>
						</div>
						<div class="col-md-6 mb-5 mb-md-0">
							<button type="submit" class="d-block w-100 btn btn-lg btn-corporate-2">Записаться к дизайнеру</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-6">
				<img src="<?php echo get_template_directory_uri(); ?>/img/order-img-1.jpg" class="img-fluid d-md-none">
			</div>
		</div>
	</div>
</section>
<!-- /Order section -->

	
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
		
		
<!-- Process -->
<section class="section-process bg-white pt-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2 class="universal-section-title text-center mb-1 text-corporate-2">Как заказать</h2>
				<div class="title-line m-auto mb-5">
					<div class="title-quadro" style="left: 0;"></div>
					<div class="title-quadro" style="left: 25px;"></div>
					<div class="title-quadro" style="right: 0px;"></div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/1.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3 class="block-title">Свяжитесь с нами любым удобным для Вас способом</h3>
								<p class="mb-0">Расскажите нам, какую кухню Вы хотите. При наличии набросок, картинок, размеров и другой информации — присылайте нам на почту, в Whatsapp или Telegram.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/2.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3 class="block-title">Бесплатно сделаем дизайн проект и рассчитаем стоимость</h3>
								<p class="mb-0">Сделаем проект кухни, расскажем детали, сделаем пояснения, рассчитаем ее стоимость.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/3.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3 class="block-title">Утверждение проекта и сроков исполнения</h3>
								<p class="mb-0">Если Вас все устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы, заключаем договор.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/4.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3 class="block-title">Производство</h3>
								<p class="mb-0">Производим Вашу кухню согласно проекту и срокам.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/5.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3 class="block-title">Доставка и установка</h3>
								<p class="mb-0">После производства доставляем и устанавливаем кухню.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 mb-5">
						<div class="row">
							<div class="col-2 text-center">
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico/6.svg" class="img-fluid">
							</div>
							<div class="col-10">
								<h3 class="block-title">Гарантия</h3>
								<p class="mb-0">Дадим гарантию 2 года.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Process -->


<!-- Section Quiz -->
<div id="quiz-sp" class="scroll-points"></div>
<section id="quiz" class="bg-light py-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col">
				<h2 class="mb-1 text-corporate-2 text-center">Ответьте на несколько вопросов ниже<br>и узнайте предварительную стоимость Вашей мебели</h2>
				<div class="title-line m-auto mb-5">
					<div class="title-quadro" style="left: 0;"></div>
					<div class="title-quadro" style="left: 25px;"></div>
					<div class="title-quadro" style="right: 0px;"></div>
				</div>
				<div class="row justify-content-center">
					
					<!-- ВОПРОСЫ ПО КУХНЯМ -->
					<div class="col-12" id="2-1">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">1/6</span>Какая планировка кухни Вам нужна?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-1">
									<input type="radio" id="answer-2-1-1" name="quostion-2-1" class="checkbox" value="Прямая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/2-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Прямая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-2">
									<input type="radio" id="answer-2-1-2" name="quostion-2-1" class="checkbox" value="Угловая">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/2-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Угловая</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-3">
									<input type="radio" id="answer-2-1-3" name="quostion-2-1" class="checkbox" value="П-образная">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/2-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">П-образная</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-2-1-4">
									<input type="radio" id="answer-2-1-4" name="quostion-2-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/2-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">С островком</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-2-1-5">
									<input type="radio" id="answer-2-1-5" name="quostion-2-1" class="checkbox" value="Пока не знаю">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/2-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пока не знаю</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '2-1' );">
							</div>
						</div>
					</div>
					
					<!-- Один размер -->
					<div class="col-md-6" id="3-1-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-1" name="quostion-3-1-1">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-1' );">
							</div>
						</div>
					</div>
					
					<!-- Два размера -->
					<div class="col-md-6" id="3-1-2" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-2" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-2" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-2' );">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-2' );">
							</div>
						</div>
					</div>
					
					<!-- Три размера -->
					<div class="col-md-6" id="3-1-3" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-4">
								<label for="answer-3-1-1" class="form-label">Длинна 1, м</label>
								<input type="text" class="form-control" id="answer-3-1-1-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-2" class="form-label">Длинна 2, м</label>
								<input type="text" class="form-control" id="answer-3-1-2-3" name="quostion-3-1-2">
							</div>
							<div class="col-md-4">
								<label for="answer-3-1-3" class="form-label">Длинна 3, м</label>
								<input type="text" class="form-control" id="answer-3-1-3-3" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-3' );">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-3' );">
							</div>
						</div>
					</div>
					
					<!-- Четыре размера -->
					<div class="col-md-6" id="3-1-4" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">2/6</span>Укажите размеры в метрах</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-md-3">
								<label for="answer-3-1-1" class="form-label">Длинна 1</label>
								<input type="text" class="form-control" id="answer-3-1-1-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-2" class="form-label">Длинна 2</label>
								<input type="text" class="form-control" id="answer-3-1-2-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-3" class="form-label">Длинна 3</label>
								<input type="text" class="form-control" id="answer-3-1-3-4" name="quostion-3-1-2">
							</div>
							<div class="col-md-3">
								<label for="answer-3-1-4" class="form-label">Длинна островка</label>
								<input type="text" class="form-control" id="answer-3-1-4-4" name="quostion-3-1-2">
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '3-1-4' );">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '3-1-4' );">
							</div>
						</div>
					</div>
					
					<!-- 4/7 -->
					<div class="col-12" id="4-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">3/6</span>Какой стиль кухни Вы рассматриваете?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-1">
									<input type="radio" id="answer-4-1-1" name="quostion-4-1" class="checkbox" value="Современный">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/4-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Современный</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-2">
									<input type="radio" id="answer-4-1-2" name="quostion-4-1" class="checkbox" value="Классический">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/4-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Классический</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-3">
									<input type="radio" id="answer-4-1-3" name="quostion-4-1" class="checkbox" value="Лофт">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/4-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Лофт</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-4-1-4">
									<input type="radio" id="answer-4-1-4" name="quostion-4-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/4-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '4-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '4-1' );">
							</div>
						</div>
					</div>
					
					<!-- 5/7 -->
					<div class="col-12" id="5-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">4/6</span>Какой материал фасада кухни Вы хотите?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-1">
									<input type="radio" id="answer-5-1-1" name="quostion-5-1" class="checkbox" value="ЛДСП/ЛМДФ">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/5-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">ЛДСП</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-2">
									<input type="radio" id="answer-5-1-2" name="quostion-5-1" class="checkbox" value="Пленка">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/5-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">МДФ ПВХ (пленка)</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-3">
									<input type="radio" id="answer-5-1-3" name="quostion-5-1" class="checkbox" value="Эмаль">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/5-1-3.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Эмаль, шпон</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-4">
									<input type="radio" id="answer-5-1-4" name="quostion-5-1" class="checkbox" value="Пластик">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/5-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пластик</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-5">
									<input type="radio" id="answer-5-1-5" name="quostion-5-1" class="checkbox" value="Массив">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/5-1-5.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">AGT</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-5-1-6">
									<input type="radio" id="answer-5-1-6" name="quostion-5-1" class="checkbox" value="Пока не знаю, нужна консультация">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/5-1-6.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Пока не знаю, нужна консультация</h3>
							</div>
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '5-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '5-1' );">
							</div>
						</div>
					</div>
					
					<!-- 6/7 -->
					<div class="col-12" id="6-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">5/6</span>Какой подарок Вы хотите получить в случае заказа?</h3>
						<div class="row justify-content-md-center mb-5">
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-1">
									<input type="radio" id="answer-6-1-1" name="quostion-6-1" class="checkbox" value="Скидка 10%">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/6-1-1.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Скидка до 30%</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-2">
									<input type="radio" id="answer-6-1-2" name="quostion-6-1" class="checkbox" value="Беспроцентная рассрочка на 6 месяцев">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/6-1-2.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Беспроцентная рассрочка на 6 месяцев</h3>
							</div>
							<div class="col-6 col-md-2">
								<label class="option_item mb-3" for="answer-6-1-3">
									<input type="radio" id="answer-6-1-3" name="quostion-6-1" class="checkbox" value="Скидка 15% на заказ шкафа в теченее года">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3 class="mb-3 mb-md-0">Дополнительная скидка на заказ шкафа в теченее года</h3>
							</div>
							<!--div class="col-2">
								<label class="option_item mb-3" for="answer-6-1-4">
									<input type="radio" id="answer-6-1-4" name="quostion-6-1" class="checkbox" value="С островком">
									<div class="option_inner">
										<div class="shadow-wrapper"><div class="shadow-wrapper-decoration"></div></div>
										<img src="<?php echo get_template_directory_uri(); ?>/img/quiz-new/6-1-4.jpg" style="width: 100%;">
									</div>
								</label>
								<h3>Пластик</h3>
							</div-->
						</div>
						<div class="row justify-content-center">
							<div class="col text-center" style="margin-top: 35px;">
								<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '6-1' );">
								<input type="button" value="Далее" class="btn btn-corporate-1" onclick="nextQuostion( '6-1' );">
							</div>
						</div>
					</div>
					
					<!-- 7/1 -->
					<div class="col-md-6" id="7-1" style="display: none;">
						<h3 class="text-center mb-5"><span class="me-2" style="color: #A5A5A5;">6/6</span>Введите Ваши контакты</h3>
						<form method="post" action="<?php echo get_template_directory_uri(); ?>/mails/get_calculate_kitchen.php">
							<div class="row justify-content-center">
								<div class="col-md-4">
									<label for="exampleFormControlInput1" class="form-label">Ваше имя</label>
									<input type="text" class="form-control" id="exampleFormControlInput1" name="name">
								</div>
								<div class="col-md-4">
									<label for="exampleFormControlInput2" class="form-label">Ваш телефон</label>
									<input type="text" class="form-control telMask" id="exampleFormControlInput2" name="phone" required>
								</div>
							</div>
							<div class="row">
								<div class="col text-center" style="margin-top: 45px;">
									<input type="hidden" id="answer1-1" name="answer1">
									<input type="hidden" id="answer2-1" name="answer2">
									<input type="hidden" id="answer3-1-1" name="answer3-1">
									<input type="hidden" id="answer3-1-2" name="answer3-2">
									<input type="hidden" id="answer3-1-3" name="answer3-3">
									<input type="hidden" id="answer3-1-4" name="answer3-4">
									<input type="hidden" id="answer4-1" name="answer4">
									<input type="hidden" id="answer5-1" name="answer5">
									<input type="hidden" id="answer6-1" name="answer6">
									<input type="button" value="Назад" class="btn btn-corporate-outline-1" onclick="previousQuostion( '7-1' );">
									<input type="submit" class="btn btn-corporate-1" value="Отправить">
								</div>
							</div>
						</form>
					</div>
					<!-- /ВОПРОСЫ ПО КУХНЯМ -->						
					
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /End section Quiz -->


<?php
	/*
	$obj = get_queried_object();
	$cat_name = $obj->name;
	
	$query = new WP_Query( array(
		'product_cat' => $cat_name,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_tag',
				'field'    => 'slug', // Поле, по которому ищем термин
				'terms'    => 'витринные-образцы'
			)
		)
	) );
									
	// Считаем кол-во записей
	$posts_count = 0;
	while ( $query->have_posts() ) { $query->the_post();
		$posts_count = $posts_count + 1;
	} wp_reset_postdata();
	
	// Если есть записи для распродажи, то добавляем раздел
	if ( $posts_count != 0 ) { ?>
		<!-- SALE SECTION -->
		<section class="sale-section pt-5 pb-2 bg-light">
			<div class="container shkafy-cupe-section site-section">
				<div class="row">
					<div class="col">
						<h2 class="text-center text-corporate-2 mb-0">Распродажа витринных образцов</h2>
						<p class="section-subtitle text-center mb-2">Покупайте готовую мебель со скидкой до 50%!</p>
						<div class="title-line m-auto mb-5">
							<div class="title-quadro" style="left: 0;"></div>
							<div class="title-quadro" style="left: 25px;"></div>
							<div class="title-quadro" style="right: 0px;"></div>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<?php
						// Выводим записи
						while ( $query->have_posts() ) {
							$query->the_post();				
							$price = number_format( get_post_meta( get_the_ID(), '_regular_price', true), 0, ',', ' ' );
							$sale = number_format( get_post_meta( get_the_ID(), '_price', true), 0, ',', ' ' );
							
							if ( get_post_meta(get_the_ID(), '_stock_status', true) == 'instock') { ?>
								<div class="col-md-<?php if ( $posts_count <= 2 ) { echo '6'; } else { echo '4'; } ?> mb-5">
									<div class="approximation<?php if ( $posts_count <= 2 ) { echo ' approximation-lg'; } ?> shadow rounded">
										
										<a href="<?php echo get_permalink(); //echo get_permalink( $product->post->id ); ?>">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
											<div class="card-wrapper">
												<?php
													if ( $sale != $price ) { ?>
														<div class="flag">
															<div class="flag-old-price"><?php echo 	$price; ?> руб</div>
															<div class="flag-price"><?php echo $sale; ?> руб</div>
														</div>
													<?php } else { ?>
														<div class="flag pt-3">
															<div class="flag-price"><?php echo $price; ?> руб</div>
														</div>
													<?php }
												?>
												<h2><?php the_title(); ?></h2>
											</div>
										</a>
									</div>
								</div>
							<?php } else { // Если продукта НЕТ в наличии?>
								<div class="col-md-<?php if ( $posts_count <= 2 ) { echo '6'; } else { echo '4'; } ?> mb-5">
									<div class="approximation<?php if ( $posts_count <= 2 ) { echo ' approximation-lg'; } ?> shadow rounded">
										<a href="<?php echo get_permalink(); //echo get_permalink( $product->post->id ); ?>">
											<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
											<div class="card-wrapper">
												<div class="flag pt-3">
													<div class="flag-price">Продано</div>
												</div>
												<h2><?php the_title(); ?></h2>
											</div>
										</a>
									</div>
								</div>
							<?php }
						}
					?>
				</div>
			</div>
		</section>
		<!-- END SALE SECTION -->
	<?php } */
?>

			
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
						<!-- <a class="ico-button pe-2" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ico/inst-ico.png"></a> -->
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

<!-- Quiz scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/quiz.js"></script>

<!-- Telephone number mask -->
<script src="<?php echo get_template_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
var telMask = document.getElementsByClassName("telMask");
var im = new Inputmask("+7(999)999-99-99");
im.mask(telMask);
</script>

<!-- Загрузка изображений с приоритетом --
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
</script>-->		

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

<!-- QUIZ -->
<!-- Quiz modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
	<div class="modal-content">
		<div class="modal-header">
			<!-- <h5 class="modal-title" id="exampleModalLabel">Выберите Вашу планировку</h5> -->
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
				
			</button>
		</div>
		<!-- Quiz container -->
		<div id="quiz-container" class="container shadow bg-white pt-4 rounded-lg">
			<div class="row">
				<div class="col pb-4 text-center">
					<h3>Выберите Вашу планировку</h3>
				</div>
			</div>
			<div class="row justify-content-center text-left" style="min-height: 275px;">
				<div class="col-md-3 pb-5">
					<div class="card w-100 border-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/q-1-1.jpg" class="card-img-top" alt="...">
						<div class="card-body pl-1 pr-1" style="min-height: auto;">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline1"><h5 class="card-title mb-0">Линейная</h5></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pb-5">
					<div class="card w-100 border-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/q-1-2.jpg" class="card-img-top" alt="...">
						<div class="card-body pl-1 pr-1" style="min-height: auto;">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline2"><h5 class="card-title mb-0">Г-образная</h5></label>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 pb-5">
					<div class="card w-100 border-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/quiz/q-1-3.jpg" class="card-img-top" alt="...">
						<div class="card-body pl-1 pr-1" style="min-height: auto;">
							<div class="custom-control custom-radio custom-control-inline">
								<input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
								<label class="custom-control-label" for="customRadioInline3"><h5 class="card-title mb-0">П-образная</h5></label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row pb-5">
				<div class="col text-center">
					<button class="btn btn-lg btn-primary2 btn-corporate-1" onclick="question1();">Следующий вопрос</button>
				</div>
			</div>
		</div>
		<!-- End quiz container -->
	</div>
</div>
</div>

<!-- Scripts for quiz -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function question1() {

	var question = 'question1';

	if (document.getElementById('customRadioInline1').checked == true) {
		var answer = 'Линейная';
	} else if (document.getElementById('customRadioInline2').checked == true) {
		var answer = 'Г-образная';
	} else if (document.getElementById('customRadioInline3').checked == true) {
		var answer = 'П-образная';
	} else {
		var answer = 'Линейная';
	}

	$.ajax ({
		type: "POST",
		url: "<?php echo get_template_directory_uri(); ?>/quiz-action.php",
		data: {question, answer},
		dataType: "html",
		success: function(data) {
			var p = document.getElementById('quiz-container');
			p.innerHTML = data;
		}
	});
}

function question2() {
	var question = 'question2';
	var answer1 = document.getElementById('d1').value;
	var answer2 = document.getElementById('d2').value;
	var answer3 = document.getElementById('d3').value;

	$.ajax ({
		type: "POST",
		url: "<?php echo get_template_directory_uri(); ?>/quiz-action.php",
		data: { question, answer1, answer2, answer3 },
		dataType: "html",
		success: function(data) {
			var p = document.getElementById('quiz-container');
			p.innerHTML = data;
		}
	});
}

function question3() {

	var question = 'question3';

	if (document.getElementById('customRadioInline1').checked == true) {
		var answer = 'ДСП';
	} else if (document.getElementById('customRadioInline2').checked == true) {
		var answer = 'Пленка';
	} else if (document.getElementById('customRadioInline3').checked == true) {
		var answer = 'Пластик';
	} else if (document.getElementById('customRadioInline4').checked == true) {
		var answer = 'Массив';
	}

	$.ajax ({
		type: "POST",
		url: "<?php echo get_template_directory_uri(); ?>/quiz-action.php",
		data: {question, answer},
		dataType: "html",
		success: function(data) {
			var p = document.getElementById('quiz-container');
			p.innerHTML = data;
		}
	});
}
</script>
<!-- END QUIZ -->

		
<?php get_footer(); ?>