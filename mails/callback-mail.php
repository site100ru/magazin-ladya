<?php
	session_start();
	$win = "true";

	// Капча «Пример на сложение» и проверка телефона
	require_once dirname(__DIR__) . '/captcha/captcha-check.php';

	// Если существует переменная POST, то


	if($_POST){
		/* Старая проверка Google reCaptcha (отключена)
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}

		// Принимаем данные обратно
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > .125 ) {
		*/

		// Проверяем ответ на пример и что телефон введён полностью
		if ( ! captcha_is_valid( isset( $_POST['captcha'] ) ? $_POST['captcha'] : null ) ) {
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Неверный ответ на пример. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
			exit();
		}

		if ( ! captcha_phone_is_valid( isset( $_POST['tel'] ) ? $_POST['tel'] : null ) ) {
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Введите телефон полностью в формате +7(999)999-99-99. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
			exit();
		}

			$name = $_POST['name'];
			$tel = $_POST['tel'];

			// mail( "ladya.kuhni@mail.ru, vasilyev-r@mail.ru", "Запись к дизайнеру или вызов замерщика с сайта магазин-ладья.рф", "
            mail( "sidorov-vv3@mail.ru, vasilyev-r@mail.ru", "Запись к дизайнеру или вызов замерщика с сайта магазин-ладья.рф", "
				Клиент: " . $name ."\n
				Телефон: " . $tel
			);
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в мебельный магазин «Ладья». В&#160;ближайшее время с Вами свяжется наш специалист.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);

		/*} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}*/
	}
?>
