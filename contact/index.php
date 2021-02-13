<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,400;0,600;1,900&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="/assets/css/simple-lightbox.min.css">
	<link rel="stylesheet" href="/assets/css/style.min.css">
</head>

<body>

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
			<a class="header-logo" href="/#hero">www.<strong>thexvisions</strong>.com</a>
			<div class="socials-top">
				<a href="#">
					<img src="./assets/img/facebook.svg">
				</a>
				<a href="#">
					<img src="./assets/img/youtube.svg">
				</a>
				<a href="#">
					<img src="./assets/img/instagram.svg">
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

	<section class="home-form">
		<div class="content">
			<div class="container">
				<span id="contact-bacc" onclick="transitionToPage('/')" class="bacc-button">Back to home</span>
				<h4>Since 2015</h4>

				<p>Beside of hitting VIRAL VIEWS on various youtube channels, we've created SUCCESSFUL CAMPAIGNS for
					Brands / Products and Shows. If you like our work feel free to contact us and let's create something
					! </p>

				<strong>London / Europe</strong>
				<a href="#">theXvisions@gmail.com</a>
				<a href="#">07939090337</a>
			</div>
			<video src="/assets/video/top-video.mp4" autoplay loop playsinline muted></video>
		</div>
		<div class="form">
			<div class="line-top"></div>
			<form>
				<h2>Get in touch</h2>
				<input type="text" placeholder="Name *" required>
				<input type="email" placeholder="Email *" required>
				<select>
					<option selected disabled>Service</option>
					<option>Reklamička 1</option>
					<option>Reklamička 2</option>
					<option>Reklamička 3</option>
				</select>
				<textarea placeholder="Message" rows="4"></textarea>
				<button type="submit">Send</button>
			</form>
			<div class="line-bottom"></div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
	<script src="/assets/js/simple-lightbox.jquery.min.js"></script>
	<script src="/assets/js/script.js"></script>
	<script src="/assets/js/transition.js"></script>

</body>

</html>
