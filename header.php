<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico?v=2" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

<script src="https://use.typekit.net/cuz5ziz.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
    
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						
						<div class="menu">
							<div class="menu-bar" id="menu-bar">
								<div class="top">
									<img src="<?php echo get_template_directory_uri(); ?>/img/popouticon.png" alt="Logo" class="logo">
									<img src="<?php echo get_template_directory_uri(); ?>/img/icons/close.png" class="close" >
								</div>
							<ul>
								<li><a href="http://bit.ly/naijamademe">Nominate a Young Nigerian</a></li>
								<li><a href="http://bit.ly/naijamadejobs">Submit a Job Opportunity</a></li>
								<li><a href="mailto:hello@naijamade.me">Contact Us</a></li>
							</ul>
						</div>
						</div>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php //html5blank_nav(); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
		</div>
