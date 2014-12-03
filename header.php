<?php
	// Variables con useragents para mobile
	$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
?>

<!--DOCTYPE html-->
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); // permite cambiar el charset desde wp, por default está en utf-8 ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
		<?php wp_head(); ?>
		<link rel="apple-touch-icon" href="/images/custom_icon.png"/><!-- 114x114 icono para iPhones y iPads -->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/animate.min.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
		<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
		<script src="<?php bloginfo('template_url'); ?>/assets/js/prefixfree.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url'); ?>/assets/js/css3-mediaqueries.js"></script>
		
		<!--[if lt IE 11]>
		 <script src="<?php bloginfo('template_url'); ?>/assets/js/html5shiv.js" type="text/javascript"></script>
		 <script src="<?php bloginfo('template_url'); ?>/assets/js/respond.min.js" type="text/javascript"></script>
		<![endif]-->
	</head>
	
	<body <?php body_class(); ?>>