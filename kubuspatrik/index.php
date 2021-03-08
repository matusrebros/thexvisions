<?php require_once '../_partials/header.php'; ?>

	<div id="specificVideoContainer">
		<section id="videoiframe" class="video-preview">
			<!-- <img class="cross-back" src="/assets/img/cross.svg"> -->
			<div class="video-container">
				<div style="padding:41.67% 0 0 0;position:relative;"><iframe
						src="https://player.vimeo.com/video/395266080?title=0&byline=0&portrait=0"
						style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
						allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
				<script src="https://player.vimeo.com/api/player.js"></script>
		</section>

		<section id="videocontent" class="video-preview-content">
			<div class="content-container">
				<h2>THE X VISIONS | AUTOMOTIVE SHOWREEL</h2>
				<!-- <p>Client: <strong>McLaren</strong></p> -->
				<span onclick="transitionToPage('/#work')" class="bacc-button">Back to our work</span>
			</div>
		</section>

		<?php require_once '../_partials/videos.php'; ?>
	</div>

	<?php require_once '../_partials/footer.php'; ?>
