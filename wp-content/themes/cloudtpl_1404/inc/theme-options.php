<?php 
function cTpl_pc007_blue_theme_options_init() {
	if ( false === cTpl_pc007_blue_get_theme_options() )
		add_option( 'cTpl_pc007_blue_theme_options', cTpl_pc007_blue_get_default_theme_options() );

	register_setting(
		'cTpl_pc007_blue_options',
		'cTpl_pc007_blue_theme_options',
		'cTpl_pc007_blue_theme_options_validate'
	);
}
add_action( 'admin_init', 'cTpl_pc007_blue_theme_options_init' );

function cTpl_pc007_blue_option_page_capability( $capability ) {
	return 'edit_theme_options';
}
add_filter( 'option_page_capability_cTpl_pc007_blue_options', 'cTpl_pc007_blue_option_page_capability' );

function cTpl_pc007_blue_theme_options_add_page() {
	$theme_page = add_theme_page(
		'テーマ設定',
		'テーマ設定',
		'edit_theme_options',
		'theme_options',
		'cTpl_pc007_blue_theme_options_render_page'
	);

	if ( ! $theme_page )
		return;
}
add_action( 'admin_menu', 'cTpl_pc007_blue_theme_options_add_page' );


function cTpl_pc007_blue_get_default_theme_options() {
	$default_theme_options = array(
		'logo' => 'logo.png',
	);
}

function cTpl_pc007_blue_get_theme_options() {
	return get_option( 'cTpl_pc007_blue_theme_options', cTpl_pc007_blue_get_default_theme_options() );
}

get_template_part('inc/theme-options-edit');


/*	ヘッダー ロゴ
/*---------------------------------------------------------*/
function cTpl_pc007_blue_print_Logo() {
	$options = cTpl_pc007_blue_get_theme_options();
	$logo = $options['logo'];
	if ($logo) {
		print '<img src="'.$logo.'" alt="'.get_bloginfo('name').'">';
	} else {
		echo bloginfo('name');
	}
}

	
/*	ヘッダー 住所
/*---------------------------------------------------------*/
function cTpl_pc007_blue_print_contactInfo() {
	$options = cTpl_pc007_blue_get_theme_options();
	$contactAddress = $options['contactAddress'];
		if ($contactAddress) {
			print '<p>'.$contactAddress.'</p>'."\n";
		}
}


/*	サイドバー バナー
/*-------------------------------------------*/
function cTpl_pc007_blue_sidebarBanner()	{
	$options = cTpl_pc007_blue_get_theme_options();
	
	$banner1Img = $options['banner1Img'];
	$banner2Img = $options['banner2Img'];
	$banner1Name = $options['banner1Name'];
	$banner2Name = $options['banner2Name'];
	$banner1Link = $options['banner1Link'];
	$banner2Link = $options['banner2Link'];

	if ($banner1Img || $banner2Img) {?>
  <div id="banners">
  <?php }
	if ($banner1Img) {?>
  <p class="banner">
	<?php if ($banner1Link):?>
  <a href="<?php echo $banner1Link; ?>"><img src="<?php echo $banner1Img; ?>" alt="<?php echo $banner1Name; ?>" /></a>
	<?php else: ?>
  <img src="<?php echo $banner1Img; ?>" alt="<?php echo $banner1Name; ?>" />
  <?php endif;?>
	</p>
<?php }

	if ($banner2Img) {?>
  <p class="banner">
	<?php if ($banner2Link):?>
  <a href="<?php echo $banner2Link; ?>"><img src="<?php echo $banner2Img; ?>" alt="<?php echo $banner2Name; ?>" /></a>
	<?php else: ?>
  <img src="<?php echo $banner2Img; ?>" alt="<?php echo $banner2Name; ?>" />
  <?php endif;?>
	</p>
<?php }

	if ($banner1Img || $banner2Img) {?>
  </div>
  <?php }

}