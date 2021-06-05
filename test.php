<?php
	foreach (array_filter(glob('assets/img/sequence/*'), 'is_file') as $file) {
		echo "\"/$file\",<br>";
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link rel="stylesheet" href="/assets/css/style.min.css">
</head>

<body style="height: 200vh;">
	<!-- <video id="videomain" class="top-video" src="./assets/video/top-video.mp4" autoplay loop playsinline muted></video> -->
	<div id="specificVideoContainer"></div>
	<!-- <form class="move">
	<fieldset>
		<legend>Toggle duration</legend>
		<div>
			<input type="radio" name="duration" id="bound" value="300" checked="">
			<label for="bound">bound to scrollbar (duration = 300)</label>
		</div>
		<div>
			<input type="radio" name="duration" id="unbound" value="0">
			<label for="unbound">unbound from scrollbar (duration = 0)</label>
		</div>
	</fieldset>
</form> -->
	<div class="spacer s2"></div>
	<div class="spacer s0" id="trigger"></div>
	<div id="pin">
		<div id="imagesequence">
			<img id="myimg" src="/assets/img/sequence/0001.jpg"><br>
			<!-- <a href="#" class="viewsource">view source</a> -->
		</div>
	</div>
	<div class="spacer s2"></div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="assets/js/transition.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
	<script src="assets/js/sequence.js"></script>
</body>

</html>
