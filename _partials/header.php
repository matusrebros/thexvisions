<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>X</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="/assets/css/simple-lightbox.min.css">
	<link rel="stylesheet" href="/assets/css/style.min.css">
</head>

<body>
	<div id="cookiesBanner">
		<p>Tento web používa súbory cookies. Prehliadaním webu vyjadrujete súhlas s ich používaním.</p>
		<button id="cookiesCloser">Súhlasím</button>
	</div>

	<div id="mobileNav">
		<nav>
			<ul>
				<li>
					<a href="/#about">About</a>
				</li>
				<li>
					<a href="/#portfolio">Our work</a>
				</li>
				<li>
					<a href="/#clients">Clients</a>
				</li>
				<li>
					<a class="special-one" onclick="transitionToPage('/contact')">Get in touch</a>
				</li>
			</ul>
		</nav>
	</div>

	<header id="header">
		<a class="header-logo" href="/">www.<strong>thexvisions</strong>.com</a>
		<div class="socials-top">
			<a target="_blank" href="https://www.facebook.com/theXvisions">
				<img loading="lazy" src="/assets/img/facebook.svg">
			</a>
			<a target="_blank" href="https://www.youtube.com/theXvisions">
				<img loading="lazy" src="/assets/img/youtube.svg">
			</a>
			<a target="_blank" href="https://www.instagram.com/theXvisions">
				<img loading="lazy" src="/assets/img/instagram.svg">
			</a>
		</div>
		<nav>
			<ul>
				<li>
					<a href="#home">Home</a>
				</li>
				<div class="line"></div>
				<li>
					<a href="#about">About</a>
				</li>
				<div class="line"></div>
				<li>
					<a href="#work">Our work</a>
				</li>
				<div class="line"></div>
				<li>
					<a href="#clients">Clients</a>
				</li>
				<li>
					<a class="special-one" onclick="transitionToPage('/contact')">Get in touch</a>
				</li>
			</ul>
		</nav>
		<div id="burger" class="burger">
			<div class="top"></div>
			<div class="mid"></div>
			<div class="bot"></div>
		</div>
	</header>
