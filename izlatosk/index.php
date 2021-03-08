<?php require_once '../_partials/header.php'; ?>

	<div id="specificVideoContainer">
		<section id="videoiframe" class="video-preview">
			<!-- <img class="cross-back" src="/assets/img/cross.svg"> -->
			<div class="video-container">
				<div style="padding:56.25% 0 0 0;position:relative;"><iframe width="560" height="315"
						src="https://www.youtube.com/embed/6RBH5XLAIVk" frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</div>
		</section>

		<section id="videocontent" class="video-preview-content">
			<div class="content-container">
				<h2>iZlato.sk | Online campaign</h2>
				<p>Client: <strong>iZlato</strong></p>
				<p>Agency: <strong>DP Marketing Group</strong></p>
				<p>Filmmaker: <strong>Patrik Kubuš</strong></p>
				<p>Production: <strong>The X Visions</strong></p>
				<span onclick="transitionToPage('/#work')" class="bacc-button">Back to our work</span>
			</div>
		</section>

		<?php require_once '../_partials/videos.php'; ?>
	</div>

	<?php require_once '../_partials/footer.php'; ?>
