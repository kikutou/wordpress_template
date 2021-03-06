<?php get_header(); ?>

<!-- メインコンテンツ -->
<div id="container">

	<div id="main">

	<?php if (have_posts()) : ?>

		<h2><?php _e('Search') ?></h2>
		
		<p>「<?php echo $_GET['s'] ?>」の検索結果</p>

		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h3 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
				<div class="postentry">
					<?php the_excerpt(); ?>
				</div>
		
				<div class="postmetadata">
					<?php _e('Posted on') ?> <?php the_time('jS F Y, h:i a ') ?> <?php _e('under') ?> <?php the_category(', ') ?>
					<?php if( function_exists('the_tags') ) 
						the_tags(__('. Tagged '), ', ', '.'); 
					?>
				 </div>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link(__('&laquo; Previous Entries')) ?></div>
			<div class="alignright"><?php previous_posts_link(__('Next Entries &raquo;')) ?></div>
		</div>

	<?php else : ?>
		<div class="post">
			<h2 class="posttitle"><?php _e('Not Found') ?></h2>
			<div class="postentry"><p><?php _e('Sorry, no posts matched your criteria.'); ?></p></div>
		</div>
	<?php endif; ?>


	</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
