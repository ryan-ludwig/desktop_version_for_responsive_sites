<?php
// check cookies and serve the appropriate stylesheet.
if ($_COOKIE['view_option']=="responsive") {

	// For responsive viewers (default)...
	echo '
		<!-- Load the resonponsive stylesheet for browsers greater than IE8 or not IE. -->
		<!--[if gt IE 8]><!-->
		<link rel="stylesheet" media="all" href="stylesheets/responsive.css" />
		<!--<![endif]-->

		<!-- Load the desktop stylesheet IE8 and below. -->
		<!--[if lte IE 8]>
		<link rel="stylesheet" media="all" href="stylesheets/desktop.css" />
		<![endif]-->
	';
} else {
	// For desktop viewers
	echo '
		<!-- Only load the desktop stylesheet -->
		<link rel="stylesheet" media="all" href="stylesheets/desktop.css" />
	';
}
?>