<?php get_header(); ?>
<div id="wrapper">

<div id="content">
<section>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" class="content">
	  <header>  	
      <h2 class="title first"><span><?php the_title(); ?></span></h2>   
      <p class="dateLabel"><time datetime="<?php the_time('Y-m-d')?>"><?php the_time('Y/m/d')?></time>  
    </header>
    <div class="post">
		<?php the_content(); ?>
    </div>
    <?php wp_link_pages('before=<p id="pageLinks">ページ:&after=</p>'); ?> 
  </article>
	<?php endwhile;?>
  <div class="pagenav">
			<span class="prev"><?php previous_post_link( '%link', '&laquo; 前のページ' ); ?></span>          
			<span class="next"><?php next_post_link( '%link', '次のページ &raquo;' ); ?></span>
	</div>
  <?php endif; ?>
</section>
<?php get_footer(); ?>