<!DOCTYPE html>
<html>
	<head>
		<?php include_once("includes/stylesheets.php"); ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>

		<article class="container">
			<header>
				<h1>A Different Page to check if the cookie persists.</h1>
			</header>

			<?php include_once("article.html"); ?>
			
		</article>

		<?php include_once("includes/footer_links.php"); ?>

		<script>
			var viewOption = "<?php echo $view_option; ?>";
			
			if (viewOption === "desktop") {
				// load some desktop specific scripts here.
			} else {
				// run non desktop specific scripts.
			}
		</script>
	</body>
</html>