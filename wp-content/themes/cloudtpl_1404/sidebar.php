<aside id="sidebar">
  <?php cTpl_pc007_blue_sidebarBanner(); ?>
  <?php $posts = get_posts('category_name=info&numberposts=5');?>
  <?php if ($posts):?>
  <section class="widgetInfo">
  <div class="newsTitle">
		<h3 class="title"><span>お知らせ</span></h3>
    <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/info/">一覧</a>
  </div>
	<div class="news">
	  <?php foreach($posts as $post) : setup_postdata($post)?>
		<p><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><time datetime="<?php the_time('Y-m-d')?>"><?php the_time("Y/n/j"); ?></time><span><?php the_title(); ?></span></a>
		<?php endforeach;?>
	</div>
  </section>
  <?php endif;?>
  
	<?php dynamic_sidebar('sidebar'); ?>
  
</aside>