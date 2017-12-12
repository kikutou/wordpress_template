<?php get_header(); ?>
<div id="wrapper">

<div id="content">
<section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="content">
	  <header> 	
      <h2 class="title first"><span><?php the_title(); ?></span></h2>     
    </header>
    <div class="post">
		<?php the_content(); ?>
    </div>
    <?php wp_link_pages('before=<p id="pageLinks">ページ:&after='); ?> 
  </article>
	<?php endwhile;?>
  <?php endif; ?>
</section>
<?php get_footer(); ?>