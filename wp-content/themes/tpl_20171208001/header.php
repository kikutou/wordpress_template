<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>">
<title><?php global $page, $paged;
  wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'cTpl_pc007_blue' ), max( $paged, $page ) );
	?>
</title>

<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
<![endif]-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery1.7.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/script.js"></script>

<?php wp_head(); ?>
</head>
<body>
<header id="header" role="banner">
  	<div class="inner">
		<h1><?php bloginfo( 'description' ); ?></h1>
		<h2><a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/banners/logo.png" alt=""></a></h2>
		<div class="contact">
			<p class="tel">012-345-6789</p>
			<p>〒012-3456 見本県見本市サンプル1-2</p>
		</div>
    </div>
</header>
<nav id="mainNav">
	<div class="inner">
		<a class="menu" id="menu"><span>MENU</span></a>
		<div class="panel">
		<?php $topNav = wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul>%3$s</ul>','theme_location'=>'primary','walker' => new description_walker()) );?>
		</div>
	</div>
</nav>


