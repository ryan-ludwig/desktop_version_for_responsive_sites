<?php
// check cookies and serve the appropriate stylesheet.

$view_option = $_COOKIE['view_option'];

if ($view_option == "desktop") {
	// For users who made a desktop choice 
	echo '
		<link rel="stylesheet" media="all" href="stylesheets/desktop.css" />
	';
} else {
	// For responsive viewers. Default.
	echo '
		<!-- Load the resonponsive stylesheet for browsers greater than IE8 or not IE. -->
		<!--[if gt IE 8]><!-->
		<link rel="stylesheet" media="all" href="stylesheets/responsive.css" />
		<!--<![endif]-->

		<!-- Load the desktop stylesheet for IE8 and below. -->
		<!--[if lte IE 8]>
		<link rel="stylesheet" media="all" href="stylesheets/desktop.css" />
		<![endif]-->
	';
}

?>