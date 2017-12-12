<?php get_header(); ?>
<div id="wrapper">
  <div id="content">
	<section>

	<?php if (is_search()) : ?>		
		<h2 class="title first"><span>『<?php the_search_query(); ?>』の検索結果<?php if (get_query_var('paged')) echo ' | '. get_query_var('paged') .'ページ目'; ?></span></h2>
	<?php endif; ?>	
	<?php if (have_posts()) :?>
<div class="news post">
<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>">
  	<header>
    	<p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span><?php the_title(); ?></span></a>
    </header>
  </article>
	
<?php endwhile; ?>
</div>
<?php else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>

  <?php cTpl_pc007_blue_content_nav( 'nav-below' ); ?>

<?php get_footer(); ?>