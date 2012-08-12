<?php

// set variable from a get parameter
$view_option = $_GET['view_option']; 

// set a cookie based on that variable
if ($view_option == "desktop") {
	// The user wanted desktop, so set a cookie that lasts for one hour
	setcookie("view_option", "desktop", time()+3600, "/");
} else {
	// Else the user want to go back to responsive, so remove the cookie if there is one
	setcookie("view_option", "desktop", time()-3600, "/");
}

// redirect to the refering page.
header("Location: " . $_SERVER['HTTP_REFERER']);

?>