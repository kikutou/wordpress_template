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

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
<script src="<?php bloginfo('template_url'); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<header id="header" role="banner">

  <div class="bg">
  	<div class="inner">
			<h1><?php bloginfo( 'description' ); ?></h1>
      <?php cTpl_pc007_blue_print_contactInfo();?>
    </div>
  </div>

	<div class="inner">		
  	<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php cTpl_pc007_blue_print_Logo();?></a></h2>
    
    <?php $subNav = wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul>%3$s</ul>','theme_location'=>'sub') );?> 
	</div>
</header>

  <nav id="mainNav">
    <div class="inner"> 
    <?php $topNav = wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul>%3$s</ul>','theme_location'=>'primary','walker' => new description_walker()) );?>
    </div>
  </nav>