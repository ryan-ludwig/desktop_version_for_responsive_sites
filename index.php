<!DOCTYPE html>
<html>
	<head>
		<?php include_once("includes/stylesheets.php"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div class="container">
			<h1>Demo Page 1</h1>
			<?php
				if ($view_option == "desktop") {
					echo "<p>Cookie currently is set to desktop.</p>";
				} else {
					echo "<p>Cookie is not set or is set to responsive.</p>";
				}
			?>
			<p>Resize your browser window to test.</p>
			<p>
				<a href="index2.php">Demo Page 2</a> to see user choice persist throughout site</a>.
			</p>
			<?php include_once("includes/footer_links.php"); ?>
		</div>
	</body>
</html>