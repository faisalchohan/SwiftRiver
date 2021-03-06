<?php
	$page_title = "Ushahidi at SXSW";
	$template_type = "masonry";
	include $_SERVER['DOCUMENT_ROOT'].'/markup/_includes/header.php';
?>

	<hgroup class="page-title cf">
		<div class="center">
			<div class="page-h1 col_9">
				<h1><?php print $page_title; ?></h1>
			</div>
			<div class="page-actions col_3">
				<h2 class="settings">
					<a href="/markup/river/settings-channels.php">
						<span class="icon"></span>
						River settings
					</a>
				</h2>
			</div>
		</div>
	</hgroup>

	<nav class="page-navigation cf">
		<div class="center">
			<div id="page-views" class="river touchcarousel col_9">
				<ul class="touchcarousel-container">
					<li class="touchcarousel-item"><a href="/markup/river">Drops</a></li>
					<li class="touchcarousel-item"><a href="/markup/river/view-list.php">List</a></li>
					<li class="touchcarousel-item active"><a href="/markup/river/view-photos.php">Photos</a></li>
					<li class="touchcarousel-item"><a href="/markup/river/view-map.php">Map</a></li>
					<li class="touchcarousel-item"><a href="/markup/river/view-timeline.php">Timeline</a></li>
				</ul>
			</div>
			<div class="filter-actions col_3">
				<p class="button-blue button-small"><a href="/markup//river/filters.php" class="zoom-trigger">Filters</a></p>
			</div>
		</div>
	</nav>

	<div id="content" class="river photos cf">
		<div class="center">
			<article class="drop col_4 base cf">
				<div class="drop-content">
					<div class="drop-body">
						<a href="#" class="drop-image-wrap"><img src="/markup/images/content/drop-photo1.jpg" class="drop-image" /></a>
						<div class="drop-actions cf">
							<ul class="dual-buttons move-drop">
								<li class="button-blue share"><a href="/markup/modal-share.php" class="modal-trigger"><span class="icon"></span></a></li>
								<li class="button-blue bucket"><a href="/markup/modal-bucket.php" class="modal-trigger"><span class="icon"></span></a></li>
							</ul>
							<ul class="dual-buttons score-drop">
								<li class="button-white like"><a href="#"><span class="icon"></span></a></li>
								<li class="button-white dislike"><a href="#"><span class="icon"></span></a></li>
							</ul>
						</div>
					</div>
					<section class="drop-source cf">
						<a href="#" class="avatar-wrap"><img src="/markup/images/content/avatar1.png" /></a>
						<div class="byline">
							<h2>Nanjira Sambuli</h2>
							<p class="drop-source-channel twitter"><a href="#"><span class="icon"></span>via Twitter</a></p>
						</div>
					</section>
				</div>
			</article>

			<article class="drop col_8 base cf">
				<div class="drop-content">
					<div class="drop-body">
						<a href="#" class="drop-image-wrap"><img src="/markup/images/content/drop-photo1.jpg" class="drop-image" /></a>
						<div class="drop-actions cf">
							<ul class="dual-buttons move-drop">
								<li class="button-blue share"><a href="/markup/modal-share.php" class="modal-trigger"><span class="icon"></span></a></li>
								<li class="button-blue bucket"><a href="/markup/modal-bucket.php" class="modal-trigger"><span class="icon"></span></a></li>
							</ul>
							<ul class="dual-buttons score-drop">
								<li class="button-white like"><a href="#"><span class="icon"></span></a></li>
								<li class="button-white dislike"><a href="#"><span class="icon"></span></a></li>
							</ul>
						</div>
					</div>
					<section class="drop-source cf">
						<a href="#" class="avatar-wrap"><img src="/markup/images/content/avatar1.png" /></a>
						<div class="byline">
							<h2>Nanjira Sambuli</h2>
							<p class="drop-source-channel twitter"><a href="#"><span class="icon"></span>via Twitter</a></p>
						</div>
					</section>
				</div>
			</article>

			<article class="drop col_4 base cf">
				<div class="drop-content">
					<div class="drop-body">
						<a href="#" class="drop-image-wrap"><img src="/markup/images/content/drop-photo1.jpg" class="drop-image" /></a>
						<div class="drop-actions cf">
							<ul class="dual-buttons move-drop">
								<li class="button-blue share"><a href="/markup/modal-share.php" class="modal-trigger"><span class="icon"></span></a></li>
								<li class="button-blue bucket"><a href="/markup/modal-bucket.php" class="modal-trigger"><span class="icon"></span></a></li>
							</ul>
							<ul class="dual-buttons score-drop">
								<li class="button-white like"><a href="#"><span class="icon"></span></a></li>
								<li class="button-white dislike"><a href="#"><span class="icon"></span></a></li>
							</ul>
						</div>
					</div>
					<section class="drop-source cf">
						<a href="#" class="avatar-wrap"><img src="/markup/images/content/avatar1.png" /></a>
						<div class="byline">
							<h2>Nanjira Sambuli</h2>
							<p class="drop-source-channel twitter"><a href="#"><span class="icon"></span>via Twitter</a></p>
						</div>
					</section>
				</div>
			</article>

			<article class="drop col_4 base cf">
				<div class="drop-content">
					<div class="drop-body">
						<a href="#" class="drop-image-wrap"><img src="/markup/images/content/drop-photo1.jpg" class="drop-image" /></a>
						<div class="drop-actions cf">
							<ul class="dual-buttons move-drop">
								<li class="button-blue share"><a href="/markup/modal-share.php" class="modal-trigger"><span class="icon"></span></a></li>
								<li class="button-blue bucket"><a href="/markup/modal-bucket.php" class="modal-trigger"><span class="icon"></span></a></li>
							</ul>
							<ul class="dual-buttons score-drop">
								<li class="button-white like"><a href="#"><span class="icon"></span></a></li>
								<li class="button-white dislike"><a href="#"><span class="icon"></span></a></li>
							</ul>
						</div>
					</div>
					<section class="drop-source cf">
						<a href="#" class="avatar-wrap"><img src="/markup/images/content/avatar1.png" /></a>
						<div class="byline">
							<h2>Nanjira Sambuli</h2>
							<p class="drop-source-channel twitter"><a href="#"><span class="icon"></span>via Twitter</a></p>
						</div>
					</section>
				</div>
			</article>
		</div>
	</div>

<div id="modal-container">
	<div class="modal-window"></div>
	<div class="modal-fade"></div>
</div>

</body>
</html>