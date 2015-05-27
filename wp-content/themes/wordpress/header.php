<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
	<div id="header" class="container">
		<h1><a href="<?php echo home_uri('/'); ?>"><?php bloginfo('name'); ?></a></h1>
				<ul class="menu">
					<li><a href="">menu</a></li>
					<li><a href="">menu</a></li>
					<li><a href="">menu</a></li>
				</ul>
	</div>