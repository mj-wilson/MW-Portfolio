<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!--[if IE 6]>
	<html id="ie6" dir="ltr" lang="en-US">
	<![endif]-->
	<!--[if IE 7]>
	<html id="ie7" dir="ltr" lang="en-US">
	<![endif]-->
	<!--[if IE 8]>
	<html id="ie8" dir="ltr" lang="en-US">
	<![endif]-->
	<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
	<!--<![endif]-->
	<meta charset="UTF-8" />
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.png">

	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<!-- include js files -->
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/scripts.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_directory' ); ?>/ie8.css"></script>
	<![endif]-->

	<meta property="og:title" content="Marisa Wilson | Web Development"/>
	<meta property="og:url" content="http://marisareed.com"/>
	<meta property="og:description" content="front end web developer and designer | WordPress CMS customization, HTML/CSS/JS"/>
	<meta property="og:image" content="<?php bloginfo( 'template_directory' ); ?>/images/mw.png"/>	
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
	
	<meta name="google-site-verification" content="I1DVqb-KPh5e_PGcI7nQ3_aleimGRTq-Qt_-bL7a8cs" />
	
	<?php wp_head(); ?>

</head>
<body class="home">
	<header>
		<div class="content">
			<div id="header-left">
				<a href="/">
					<div id="logo">
						<span></span>
					</div>
					<div id="title">
						<h1>Marisa Wilson
						<span>web development</span></h1>
					</div>
				</a>
			</div>
			<div id="header-right">
				<div class="nav-toggle">
					<span></span>
				</div>
				<nav id="nav">
					<ul>
						<li><a href="#development">development</a></li>
						<li><a href="#design">design</a></li>
						<li><a href="#contact">get in touch</a></li>
					</ul>
				</nav>
			</div>
			<div class="clear"></div>
		</div>		
	</header>
	<div class="wrapper">