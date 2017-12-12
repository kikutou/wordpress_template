<?php 
function cTpl_pc007_blue_theme_options_render_page() { ?>
<div class="wrap" id="cTpl_pc007_blue_options">
<?php //screen_icon(); ?>
	<h2><?php printf( __( '%s Theme Options', '' ), wp_get_theme() ); ?></h2>
	<?php settings_errors(); ?>
	<form method="post" action="options.php">
	<?php
		settings_fields( 'cTpl_pc007_blue_options' );
		$options = cTpl_pc007_blue_get_theme_options();
		$default_options = cTpl_pc007_blue_get_default_theme_options();
	?>
  
<div class="section first">
<h3>テーマの特徴</h3>
<table>
<tr>
<th>メニュー</th>
<td>
<p>カスタムメニューに対応。</p>
<ol>
<li>Main Navigation → ヘッダーグローバルナビゲーション部分</li>
<li>Sub Navigation → ヘッダー右上のプライマリナビゲーション</li>
<li>Footer Navigation → フッターのメニュー</li>
</ol>
<img src="<?php echo site_url(); ?>/wp-content/themes/<?php printf( __( '%s', '' ), wp_get_theme() ); ?>/images/englishMenu.png" class="alignLeft">

<p>ヘッダーグローバルナビゲーションは<a href="<?php echo site_url(); ?>/wp-admin/nav-menus.php" target="_blank">メニュー</a>の各項目で説明を英表記で書くと、日本語と英語でメニューが表示されます。(画像参照)</p>
<p>※「メニュー」画面の右上「表示オプション」で「説明」にチェックを入れて説明が表示されるようにして下さい。</p>
<p style="padding-top:30px">※ ヘッダーの右上に表示されるメニューは子カテゴリー、子ページには対応していません。</p><p>※ フッターのメニューではIE7では子カテゴリー、子ページは表示されません。</p></td>
</tr>
<tr>
<th>日付</th>
<td>投稿のみに表示され、固定ページには表示されません。</td>
</tr>
<tr>
<th>ページナビゲーション</th>
<td>投稿のみに表示され、固定ページには表示されません。</td>
</tr>
<tr>
<th>コメント機能</th>
<td>コメント機能はついていません。</td>
</tr>
</table>
</div>

<div class="section first">
<h3>各設定方法</h3>
<table>
<tr>
<th>ページの設定</th>
<td><a href="<?php echo site_url(); ?>/wp-admin/options-reading.php" target="_blank">管理画面の設定</a> → 表示設定 → フロントページの表示 → 固定ページ で、フロントページに表示させたいページを選択します。
</td>
</tr>
<tr>
<th>お知らせの設定（サイドバーに表示されます）</th>
<td>お知らせと言う名前のカテゴリーを作ります。スラッグは<strong>info</strong>にします。このカテゴリー内の投稿がサイドバーに5件まで表示されます。
</td>
</tr>
<tr>
<th>お知らせの一覧へのリンクの設定</th>
<td><a href="<?php echo site_url(); ?>/wp-admin/options-permalink.php" target="_blank">パーマリンク設定</a>をカスタム構造にしてください。値は　<strong>/%category%/%postname%/</strong>　にしてください。
</td>
</tr>
</table>
</div>

<div class="section">
<h3>ロゴの設定 <span>-画像がない場合はサイト名が表示されます-</span></h3>
<table>
<tr>
<th><p><img src="<?php if(isset($options['logo'])):?><?php echo esc_attr( $options['logo'] ); ?><?php else:?><?php echo site_url(); ?>/wp-content/themes/<?php printf( __( '%s', '' ), wp_get_theme() ); ?>/images/banners/logo.png<?php endif;?>"></p>
ヘッダーロゴ画像 URL <br />[ <a href="<?php echo site_url(); ?>/wp-admin/media-new.php" target="_blank">画像のアップロード</a> ] </th>
<td><input type="text" name="cTpl_pc007_blue_theme_options[logo]" id="logo" value="<?php if(isset($options['logo'])):?><?php echo esc_attr( $options['logo'] ); ?><?php else:?><?php echo site_url(); ?>/wp-content/themes/<?php printf( __( '%s', '' ), wp_get_theme() ); ?>/images/banners/logo.png<?php endif;?>" style="width:100%;" /><br /><span>例) http://c-tpl.com/uploads/2012/09/logo.png</span>
</td>
</tr>
</table>
<?php submit_button(); ?>
</div>

<div class="section">
<h3>連絡先の設定 <span>-ヘッダー右上部に表示されます-</span></h3>
<table>
<tr>
<th>住所</th>
<td>
<input type="text" name="cTpl_pc007_blue_theme_options[contactAddress]" id="contactAddress" value="<?php if(isset($options['contactAddress'])):?><?php echo esc_attr( $options['contactAddress'] ); ?><?php else:?>見本県見本市サンプル1-2<?php endif;?>" /><br /><span>例) 見本県見本市サンプル1-2</span>
</td>
</tr>
</table>
<?php submit_button(); ?>
</div>


<div class="section">
<h3>バナーの設定 <span>-サイドバーに表示されます-</span></h3>
<table>
<tr>
<th>バナー1</th>
<th>バナー2</th>
</tr>
<tr>
<td>
<p class="img"><img src="<?php if(isset($options['banner1Img'])):?><?php echo esc_attr( $options['banner1Img'] ); ?><?php else:?><?php echo site_url(); ?>/wp-content/themes/<?php printf( __( '%s', '' ), wp_get_theme() ); ?>/images/banners/banner1.gif<?php endif;?>"></p>
<dl>
<dt>画像URL　[ <a href="<?php echo site_url(); ?>/wp-admin/media-new.php" target="_blank">画像のアップロード</a> ] </dt>
<dd><input type="text" name="cTpl_pc007_blue_theme_options[banner1Img]" id="banner1Img" value="<?php if(isset($options['banner1Img'])):?><?php echo esc_attr( $options['banner1Img'] ); ?><?php else:?><?php echo site_url(); ?>/wp-content/themes/<?php printf( __( '%s', '' ), wp_get_theme() ); ?>/images/banners/banner1.gif<?php endif;?>" /><br />
<span>横幅225px以上の場合は自動縮小されます。</span></dd>
<dt>画像の説明　(alt属性)</dt>
<dd><input type="text" name="cTpl_pc007_blue_theme_options[banner1Name]" id="banner1Name" value="<?php echo esc_attr( $options['banner1Name'] ); ?>" /></dd>
<dt>リンク先のURL　(リンク先は空でも問題ありません)</dt>
<dd><input type="text" name="cTpl_pc007_blue_theme_options[banner1Link]" id="banner1Link" value="<?php echo esc_attr( $options['banner1Link'] ); ?>" /><br />
<span>例) http://c-tpl.com/</span></dd>
</dl>
</td>
<td>
<p class="img"><img src="<?php if(isset($options['banner2Img'])):?><?php echo esc_attr( $options['banner2Img'] ); ?><?php else:?><?php echo site_url(); ?>/wp-content/themes/<?php printf( __( '%s', '' ), wp_get_theme() ); ?>/images/banners/banner2.gif<?php endif;?>"></p>
<dl>
<dt>画像URL　[ <a href="<?php echo site_url(); ?>/wp-admin/media-new.php" target="_blank">画像のアップロード</a> ] </dt>
<dd><input type="text" name="cTpl_pc007_blue_theme_options[banner2Img]" id="banner2Img" value="<?php if(isset($options['banner2Img'])):?><?php echo esc_attr( $options['banner2Img'] ); ?><?php else:?><?php echo site_url(); ?>/wp-content/themes/<?php printf( __( '%s', '' ), wp_get_theme() ); ?>/images/banners/banner2.gif<?php endif;?>" /><br />
<span>横幅225px以上の場合は自動縮小されます。</span></dd>
<dt>画像の説明　(alt属性)</dt>
<dd><input type="text" name="cTpl_pc007_blue_theme_options[banner2Name]" id="banner2Name" value="<?php echo esc_attr( $options['banner2Name'] ); ?>" /></dd>
<dt>リンク先のURL　(リンク先は空でも問題ありません)</dt>
<dd><input type="text" name="cTpl_pc007_blue_theme_options[banner2Link]" id="banner2Link" value="<?php echo esc_attr( $options['banner2Link'] ); ?>" /><br />
<span>例) http://c-tpl.com/</span></dd>
</dl>
</td>
</tr>
</table>
<?php submit_button(); ?>
</div>
</form>
</div>
<?php
}

function cTpl_pc007_blue_theme_options_validate( $input ) {
	$output = $defaults = cTpl_pc007_blue_get_default_theme_options();
	
	$output['logo'] = $input['logo'];
	
	$output['contactAddress'] = $input['contactAddress'];
	
  for ( $i = 1; $i <= 2 ;){
		$output['banner'.$i.'Img'] = $input['banner'.$i.'Img'];
		$output['banner'.$i.'Name'] = $input['banner'.$i.'Name'];
		$output['banner'.$i.'Link'] = $input['banner'.$i.'Link'];
	$i++;
	}
	return apply_filters( 'cTpl_pc007_blue_theme_options_validate', $output, $input, $defaults );
}

?>