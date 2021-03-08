const cookiesCloser = document.getElementById('cookiesCloser')
const cookiesBanner = document.getElementById('cookiesBanner')

function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return null;
}

function checkCookies() {
	if (getCookie('cookie')) {
		cookiesBanner.classList.add('disabled');
	} else {
		cookiesBanner.classList.remove('disabled');
	}
}
checkCookies()

cookiesCloser.addEventListener('click', () => {
	setTimeout(function () {
		cookiesBanner.classList.remove('disabled');
	}, 1 * 24 * 60 * 60 * 1000)
	var dd = new Date();
	dd.setTime(dd.getTime() + (1 * 24 * 60 * 60 * 1000));
	var expiresb = "; expires=" + dd.toGMTString();
	document.cookie = "cookie=1" + expiresb + "; path=/";
	cookiesBanner.classList.add('disabled');
})
