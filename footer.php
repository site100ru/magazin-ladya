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
	

</body>
</html>