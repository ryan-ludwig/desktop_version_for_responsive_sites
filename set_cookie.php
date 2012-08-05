<?php

// set the option from our get variable
$view_option = $_GET['view_option']; 

// set a cookie based on that variable
if ($view_option == "responsive") {
	setcookie("view_option", "responsive", time()+3600, "/");
} else {
	// this essentially removes the cookie
	setcookie("view_option", "desktop", time()-3600, "/");
}

// redirect to the reffering page.
header("Location: " . $_SERVER['HTTP_REFERER']);

?>