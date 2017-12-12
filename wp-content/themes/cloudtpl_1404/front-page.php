<?php get_header();
$header_image = get_header_image();
if ($header_image):?>
  <div id="mainImg"><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo( 'description' ); ?>"></div><?php endif;?>

<div id="wrapper">
	<div id="content">
  
  	<section>
    <?php if ( have_posts()) : the_post(); ?>
  	<article id="post-<?php the_ID(); ?>" class="content">
		  <header> 	
      	<h2 class="title first"><span><?php the_title(); ?></span></h2>     
    	</header>
      <div class="post">
      <?php the_content();?>
      </div>
    </article>
		<?php endif; ?>
    
    <?php query_posts($query_string . "showposts=3&cat=-" .(get_category_by_slug('info')->term_id)); ?>
  	<?php if (have_posts()) :?>
    <h2 class="title"><span>最新記事</span></h2>
		<div class="thumbWrap">
			<ul class="thumb">
  	 		<?php while (have_posts()) : the_post(); ?>
  			<li>
    		<?php echo get_the_post_thumbnail($post->ID, 'size1'); ?>
      	<?php the_excerpt();?>
        <h3><a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a></h3>
    		<?php endwhile; ?>
  		</ul> 
	  </div>
		<?php else: ?>
 		<?php endif; ?>
		</section>

<?php get_footer(); ?>