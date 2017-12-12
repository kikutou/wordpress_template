<?php get_header(); ?>

<!-- メイン画像 -->
<div id="mainImage">
	<div class="inner">
		<img src="<?php bloginfo('template_directory');?>/images/mainImage.jpg" alt="メインイメージ" width="960" height="300" />
	</div>
</div>
<!-- / メイン画像 -->

<!-- メインコンテンツ -->
<div id="container">

	<!--  メイン（左側） -->
	<div id="main">

		<div class="boxContainer">
			<div class="box1 border">
				<p class="center"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/imageMi1.jpg" alt="サンプルイメージ１" width="325" height="125" /></a></p>
				<h3>最新技術と自然との調和</h3>
				<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。</p>
			</div>
			<div class="box1 border last"><!-- 一番最後のboxにのみ class="last" を入力してください。-->
				<p class="center"><a href="#"><img src="<?php bloginfo('template_directory');?>/images/imageMi2.jpg" alt="サンプルイメージ２" width="325" height="125" /></a></p>
				<h3>eco・環境事業</h3>
				<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。</p>
			</div>
			<div class="clear"></div>
		</div>

		<div class="box2 center">
			<p><a href="#"><img src="<?php bloginfo('template_directory');?>/images/smallImage1.jpg" alt="サンプルイメージ小１" width="225" height="225" /></a></p>
		</div>
		<div class="box2 center">
			<p><a href="#"><img src="<?php bloginfo('template_directory');?>/images/smallImage2.jpg" alt="サンプルイメージ小２" width="225" height="225" /></a></p>
		</div>
		<div class="box2 center last"><!-- 一番最後のboxにのみ class="last" を入力してください。-->
			<p><a href="#"><img src="<?php bloginfo('template_directory');?>/images/smallImage3.jpg" alt="サンプルイメージ小３" width="225" height="225" /></a></p>
		</div>
		<div class="clear"></div>

		<div class="boxContainer">
			<div class="box3">
				<h4><img src="<?php bloginfo('template_directory');?>/images/heading1_1.png" alt="最新のお知らせ" width="347" height="32" /></h4>
				<ul class="sidemenu">
					<?php
					$my_query = new WP_Query('showposts=7');
					while ($my_query->have_posts()) : $my_query->the_post(); ?>
					<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
					<?php endwhile; ?>
				</ul>
			</div>
			<div class="box3 last"><!-- 一番最後のboxにのみ class="last" を入力してください。-->
				<h4><img src="<?php bloginfo('template_directory');?>/images/heading1_2.png" alt="過去のお知らせ" width="347" height="32" /></h4>
				<ul class="sidemenu">
					<?php wp_get_archives('monthly',7); ?>
				</ul>
			</div>
			<div class="clear"></div>
		</div>

		<div class="box4">
			<h4><img src="<?php bloginfo('template_directory');?>/images/heading2_1.png" alt="見出し大１" width="715" height="37" /></h4>
			<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。</p>
			<p>革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす。</p>
			<div class="clear"></div>
		</div>
            
		<div class="box4">
			<h4><img src="<?php bloginfo('template_directory');?>/images/heading2_2.png" alt="見出し大２" width="715" height="37" /></h4>
			<img src="<?php bloginfo('template_directory');?>/images/smallImage.jpg" alt="" width="231" height="133" />
			<p>ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。</p>
			<p>革新的な技術で世の中を動かす企業を目指します。ホームページサンプル株式会社では最新技術と自然との調和を目指します。革新的な技術で世の中を動かす企業を目指しています。革新的な技術で世の中を。</p>
			<div class="clear"></div>
		</div>

	</div>
	<!-- / メイン（左側） -->

<?php get_sidebar(); ?>

</div>
<!-- / メインコンテンツ -->
<?php get_footer(); ?>
