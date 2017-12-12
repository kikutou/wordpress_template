	<!-- サイドバー（右側） -->
	<div id="sidebar">

		<p><a href="#"><img src="<?php bloginfo('template_directory');?>/images/banner1.gif" alt="サイドバナー１" width="225" height="60" /></a></p>
		<p><a href="#"><img src="<?php bloginfo('template_directory');?>/images/banner2.gif" alt="サイドバナー２" width="225" height="60" /></a></p>
		<div class="box1">
			<h3>最新のお知らせ</h3>
			<ul class="sidemenu">
				<?php
				$my_query = new WP_Query('showposts=10');
				while ($my_query->have_posts()) : $my_query->the_post(); ?>
				<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
			</ul>
		</div>

		<div class="box1">
			<h3>過去のお知らせ</h3>
			<ul class="sidemenu">
				<?php wp_get_archives('monthly',36); ?>
			</ul>
		</div>

		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>

	</div>
	<!-- / サイドバー（右側） -->
