<!DOCTYPE html>
<html>

<head>
	<?php include_once("includes/stylesheets.php"); ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<article class="container">
		<header>
			<h1>Page 1</h1>
		</header>

		<?php include_once("article.html"); ?>

		<footer>
			<?php
				if($view_option == "desktop") {
					echo 'Desktop | <a href="set_cookie.php?view_option=responsive">Responsive</a>';
				} else {
					echo '<a href="set_cookie.php?view_option=desktop">Desktop</a> | Responsive';
				}
			?>		
		</footer>

	</article>

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