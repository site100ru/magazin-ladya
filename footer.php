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