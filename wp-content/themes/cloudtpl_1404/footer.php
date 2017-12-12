  
</div><!-- / content -->
  <?php get_sidebar(); ?>
</div>
<!-- / wrapper -->


<footer id="footer">
  <div class="inner">
	<?php $footerNav = wp_nav_menu( array( 'container' => '', 'items_wrap' => '<ul>%3$s</ul>','theme_location'=>'footer') );?>
  </div>
</footer>
<!-- / footer -->

<p id="copyright">Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights Reserved.</p>

<?php wp_footer(); ?>
</body>
</html>