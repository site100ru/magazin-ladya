<?php
	session_start();
	$win = "true";
	// Если существует переменная POST, то
	
	/*
	if($_POST){
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		print_r( $Return );
		
		/* Принимаем данные обратно
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if( $Return->success == true && $Return->score > 1 ){ */
			
			$answer1 = $_POST['answer1'];
			$answer2 = $_POST['answer2'];
			$answer3 = $_POST['answer3'];	
			$answer4 = $_POST['answer4'];	
			$answer5 = $_POST['answer5'];	
			$answer6 = $_POST['answer6'];	
			$name = $_POST['name'];	
			$phone = $_POST['phone'];
			
			/* Проверям что заполнено поле с телефоном */
			if ( $_POST['phone'] ) {
				// Если поле с телефоно заполненно
				mail( "vasilyev-r@mail.ru, ladya.kuhni@mail.ru", "Зявка на расчет стоимости шкафа с сайта магазин-ладья.рф", "
					Тип мебели: " . $answer1 ."\n
					Тип шкафа: " . $answer2 ."\n
					Материал фасада: " . $answer3 ."\n
					Ширина: " . $answer4 ."\n
					Количество дверей: " . $answer5 ."\n
					Желаемый подарок: " . $answer6 ."\n
					Клиент: " . $name ."\n
					Телефон: " . $phone
				); 	
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в мебельный магазин «Ладья». Мы ответим Вам в&#160;ближайшее время.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
			} else {
				// Если поле с телефоно НЕ заполненно
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполненно! Пожалуйста, повторите попытку и заполенте поле с номером телефона.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}
			
		
		/*} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	} */
?>