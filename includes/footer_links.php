		<footer>
			<?php
				if($view_option == "desktop") {
					echo 'Desktop | <a href="set_cookie.php?view_option=responsive">Responsive</a>';
				} else {
					echo '<a href="set_cookie.php?view_option=desktop">Desktop</a> | Responsive';
				}
			?>		
		</footer>