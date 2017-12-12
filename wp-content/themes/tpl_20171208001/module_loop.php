<?php if (have_posts()) :?>
<div class="post">
<?php while (have_posts()) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>">
  	<header>
    	<p><time datetime="<?php the_time('Y-m-d')?>"><?php the_time("Y/n/j"); ?></time> <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span><?php the_title(); ?></span></a>
    </header>
  </article>
	
<?php endwhile; ?>
</div>
<?php else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?>
<?php endif; ?>
