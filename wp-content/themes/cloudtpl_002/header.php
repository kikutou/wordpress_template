<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta name="author" content="" />
<meta name="keyword" content="" />
<meta name="description" content="<?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('description'); ?>" />
<title><?php echo trim(wp_title('', false)); if(wp_title('', false)) { echo ' - '; } bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body>

<!-- ヘッダー -->
<div id="header">

	<h1><?php bloginfo('name'); ?></h1>
	<h2><?php bloginfo('description'); ?></h2>

	<!-- ロゴ -->
	<h3><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="ロゴサンプル" width="205" height="65" /></a></h3>
	<!-- / ロゴ -->

	<!-- トップナビゲーション -->
	<ul>
		<li><a href="#" id="contact">お問い合わせ</a></li>
		<li><a href="#" id="sitemap">サイトマップ</a></li>
		<li><a href="#" id="access">アクセス地図</a></li>
	</ul>
	<!-- / トップナビゲーション -->

	<div class="banners">
		<a href="#"><img src="<?php bloginfo('template_directory');?>/images/bannerS1.gif" alt="ヘッダーバナー１" width="160" height="45" /></a>
		<a href="#"><img src="<?php bloginfo('template_directory');?>/images/bannerS2.gif" alt="ヘッダーバナー２" width="160" height="45" /></a>
	</div>

</div>
<!-- / ヘッダー -->

<!-- メインナビゲーション -->
<ul id="mainnav" class="nav">
	<li><a href="#" id="home">サービス詳細</a></li>
	<li><a href="#" id="menu1">料金一覧</a></li>
	<li><a href="#" id="menu2">制作実績</a></li>
	<li><a href="#" id="menu3">お客様の声</a></li>
	<li><a href="#" id="menu4">会社概要</a></li>
</ul>
<!-- / メインナビゲーション -->
