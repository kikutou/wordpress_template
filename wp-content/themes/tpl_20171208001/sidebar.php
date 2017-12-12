<aside id="sidebar">


    <p class="banner">
        <a href="subpage.html"><img src="<?php bloginfo('template_url'); ?>/images/banners/side_banner1_df.jpg" alt="" /></a>
    </p>
    
    <?php
    $args = array(
        'category_name' => 'info',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => 5
    );
    $the_query = new WP_Query( $args );
    ?>

  <?php if ($the_query->have_posts()):?>
  <section class="widgetInfo">
  <div class="newsTitle">
		<h3 class="title"><span>お知らせ</span></h3>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/info/">一覧</a></p>
  </div>
	<div class="post news">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
		<p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><time datetime="<?php the_time('Y-m-d')?>"><?php the_time("Y/n/j"); ?></time><span><?php the_title(); ?></span></a>
		<?php endwhile;?>
        <?php wp_reset_postdata(); ?>
	</div>
  </section>
  <?php endif;?>
  
	<?php dynamic_sidebar('sidebar'); ?>

    <p class="banner">
        <a href="subpage.html"><img src="<?php bloginfo('template_url'); ?>/images/banners/side_banner2_df.jpg" alt="" /></a>
    </p>
    <p class="banner">
        <a href="subpage.html"><img src="<?php bloginfo('template_url'); ?>/images/banners/side_banner3_df.jpg" alt="" /></a>
    </p>
  
</aside>