<?php require_once '../_partials/header.php'; ?>

	<div id="specificVideoContainer">
		<section id="videoiframe" class="video-preview">
			<!-- <img class="cross-back" src="/assets/img/cross.svg"> -->
			<div class="video-container">
				<div style="padding:56.25% 0 0 0;position:relative;"><iframe
						src="https://player.vimeo.com/video/497946445?title=0&byline=0&portrait=0"
						style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
						allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
				<script src="https://player.vimeo.com/api/player.js"></script>
		</section>

		<section id="videocontent" class="video-preview-content">
			<div class="content-container">
				<h2>Eurotip.sk | Commercial</h2>
				<p>Client: <strong>Eurotip</strong></p>
				<p>Filmmaker: <strong>Patrik Kubuš</strong></p>
				<p>Production: <strong>The X Visions</strong></p>
				<span onclick="transitionToPage('/#work')" class="bacc-button">Back to our work</span>
			</div>
		</section>

		<?php require_once '../_partials/videos.php'; ?>
	</div>

	<?php require_once '../_partials/footer.php'; ?>
