<?php

// set a variable from our get parameter
$view_option = $_GET['view_option']; 

// set a cookie based on that variable
if ($view_option == "desktop") {
	setcookie("view_option", "desktop", time()+3600, "/");
} else {
	// Else we want responsive, so remove the desktop cookie if there is one
	setcookie("view_option", "desktop", time()-3600, "/");
}

// redirect to the refering page.
header("Location: " . $_SERVER['HTTP_REFERER']);

?>