<?php get_header(); ?>
<div id="wrapper">

  <div id="content">
	<section>

	<?php if ( is_category() ) : ?>
	<h2 class="title first"><span><?php single_cat_title(); ?></span></h2>
	<?php elseif (is_day()) : ?>
	<h2 class="title first"><span><?php the_time('Y/m/d'); ?></span></h2>
	<?php elseif (is_month()) : ?>
	<h2 class="title first"><span><?php the_time('Y/m'); ?></span></h2>
	<?php elseif (is_year()) : ?>
	<h2 class="title first"><span><?php the_time('Y'); ?></span></h2>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
	<h2 class="title first"><span>Blog Archives</span></h2>
	<?php endif; ?>

	<?php get_template_part('module_loop'); ?>

	</section>
  	<?php cTpl_pc007_blue_content_nav('nav-below'); ?>

<?php get_footer(); ?>