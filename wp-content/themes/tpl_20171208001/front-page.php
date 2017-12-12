<?php get_header(); ?>

    <div id="mainImg">
        <img src="<?php bloginfo('template_url'); ?>/images/banners/mainImg.jpg" width="880" height="328" alt="">
    </div>

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

        
        <?php
        $args = array(
            'category_name' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 5
        );
        $the_query = new WP_Query( $args );
        ?>

    
        <?php if ($the_query->have_posts()) :?>
<!--            <h2 class="title"><span>最新記事</span><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--category/post/" style="float: right;font-size: 80%;background: url(images/arrow.gif) no-repeat 0 5px;">一覧</a></h2>-->


            <div class="newsTitle">
                <h3 class="title"><span>最新記事</span></h3>
                <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/post/">一覧</a></p>
            </div>

            <ul class="post">
  	 		<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
  			<li>
    		    <?php echo get_the_post_thumbnail($post->ID, 'size1'); ?>
                <h3><a href="<?php the_permalink() ?>"><span><?php the_title(); ?></span></a></h3>
      	        <?php the_excerpt();?>
            </li>
    		<?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
  		        </ul>
 		<?php endif; ?>
		</section>

<?php get_footer(); ?>