

<?php require_once '_partials/header.php'; ?>

	<video class="top-video" src="./assets/video/top-video.mp4" autoplay loop playsinline muted></video>

	<section id="home" class="viewport-header">
		<h1>
			Digital content
			<span>
			  that
			  <div id=flip>
				<div class="flip-container">
					<div class="flip-wrapper"><div>works</div></div>
					<div class="flip-wrapper"><div>earns</div></div>
					<div class="flip-wrapper"><div>tells</div></div>
				</div>
			  </div>
			</span>
		  </h1>
	<div class="top-buttons">
		<a class="main-button" onclick="transitionToPage('/contact')">Get in touch</a>
		<a class="side-button" onclick="transitionToPage('/showreel')">Showreel</a>
	</div>
	<div class="socials-top">

	</div>
	</section>

	<section id="about" class="topabout">
	<img loading="lazy" src="assets/img/theX_white.png"></img>
		<div class="content">
			<!-- <small>Video Production based in London | High Tatras</small> -->
			<h2>You name it, we make it.</h2>
			<!-- <p>Beside if hitting viral views online, we've created sick campaigns for brands and filmed the important events around the world. Meet THE X VISIONS, advertising production and postproduction company based in the London / High Tatras.</p> -->
			<p>Beside hitting viral views, we are creating campaigns for brands and filming sick events around the world.</p>
			<p>Meet THE X VISIONS, advertising production and postproduction company based in London | High Tatras.</p>
		</div>
	</section>

	<?php require_once '_partials/videos.php'; ?>

	<section id="clients" class="clients">
		<div class="wrapper">
			<h3>Clients</h3>
			<div class="slider-container">
				<section class="customer-logos slider">
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/amirkhan.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/EGNE.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/kwanpen.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/skillab.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/MCEVOY.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/monkylondon3.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/moreauparis.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/MTV.png"></div>
					</a>
				  	<a href="#">
					   	<div class="slide"><img loading="lazy" src="assets/img/clients/prodrift.png"></div>
					</a>
				</section>
			 </div>
		</div>
	</section>
	<div id="specificVideoContainer"></div>

	<?php require_once '_partials/footer.php'; ?>
