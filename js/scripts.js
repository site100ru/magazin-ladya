/* Функция "Прилипало" */
onscroll = function prilipalo() {
	var prokrutka = window.pageYOffset;
	if ( window.screen.width >= 769 ) {
		if ( prokrutka > 50 ) {
			document.getElementById('top-menu-2').classList.add('fixed-top');
			document.getElementById('top-menu-2').style.position = 'fixed';
			document.getElementById('top-menu-2').style.top = 0;
			document.getElementById('top-menu-2').style.background = 'rgb(0,0,0,.7)';
			document.getElementById('top-menu-2').style.boxShadow = '5px 0px 5px 3px rgba(0,0,0,.25)';
			document.getElementById('navbar-brand-img').style.height = '47px';
		} else {
			document.getElementById('top-menu-2').classList.remove('fixed-top');
			document.getElementById('top-menu-2').style.position = 'absolute';
			document.getElementById('top-menu-2').style.top = '59px';
			document.getElementById('top-menu-2').style.background = 'none';
			document.getElementById('top-menu-2').style.boxShadow = 'none';
			document.getElementById('navbar-brand-img').style.height = '77px';
		}
	} else {
		document.getElementById('top-menu-2').style.position = '';
		document.getElementById('top-menu-2').style.top = 0;
		document.getElementById('top-menu-2').classList.add('fixed-top');
	}
	
	/* Убираем меню при прокрутке */
	document.getElementById( 'navbarSupportedContent2' ).classList.remove('show');
}


/* Убираем сообщение об успешной отправки */
function modalClose () {
	document.getElementById('background-msg').style.display = 'none';
	document.getElementById('message').style.display = 'none';
	document.getElementById('btn-close').style.display = 'none';
}