<!--DOCTYPE html-->
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
		<script src="<?php bloginfo('template_url'); ?>/assets/js/prefixfree.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/assets/css3-mediaqueries.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/assets/respond.js"></script>
		
		<!--[if lt IE 11]>
		 <script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.js" type="text/javascript"></script>
		 <script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js" type="text/javascript"></script>
		<![endif]-->
	</head>
	
	<body <?php body_class(); ?>>