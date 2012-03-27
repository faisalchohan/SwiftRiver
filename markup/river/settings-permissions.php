<?php
	$page_title = "Ushahidi at SXSW";
	$template_type = "settings";
	include $_SERVER['DOCUMENT_ROOT'].'/markup/_includes/header.php';
?>

	<hgroup class="page-title cf">
		<div class="center">
			<h1><?php print $page_title; ?> <em>settings</em></h1>
			<h2 class="back label">
				<a href="/markup/river">
					<span class="icon"></span>
					<span class="label">Return to river</span>
				</a>
			</h2>
		</div>
	</hgroup>

	<nav class="page-navigation cf">
		<ul class="center">
			<li><a href="/markup/river/settings-filters.php">Filters</a></li>
			<li><a href="/markup/river/settings-channels.php">Channels</a></li>
			<li><a href="/markup/river/settings-collaborators.php">Collaborators</a></li>
			<li><a href="/markup/river/settings-display.php">Display</a></li>
			<li class="active"><a href="/markup/river/settings-permissions.php">Permissions</a></li>
		</ul>
	</nav>

	<div id="content" class="settings channels cf">
		<div class="center">
			<div class="col_12">
				<article class="container base">
					<header class="cf">
						<div class="property-title">
							<h1>Who can view this river</h1>
						</div>
					</header>
					<section class="property-parameters">
						<div class="parameter">
							<select>
								<option>Public</option>
								<option>Collaborators only</option>
							</select>
						</div>
					</section>
				</article>
			</div>
		</div>
	</div>

<div id="modal-container">
	<div class="modal-window"></div>
	<div class="modal-fade"></div>
</div>

</body>
</html>