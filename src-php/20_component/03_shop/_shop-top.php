<!-- データ -->
<?php
global $post;
$post_id = $post->ID;
$region = get_the_terms($post_id, 'region');
$soups = get_the_terms($post_id, 'soup');
$features = get_the_terms($post_id, 'feature');
$thicknesses = get_the_terms($post_id, 'thickness');

$region_text = !empty($region) ? $region[0]->name : '-';

$soup_text = '';
if (!empty($soups)) {
	foreach ($soups as $item) {
		$soup_text .= $item->name . ',';
	}
}
$soup_text = trim($soup_text, ',');

$feature_text = '';
if (!empty($features)) {
	foreach ($features as $item) {
		$feature_text .= $item->name . ',';
	}
}
$feature_text = trim($feature_text, ',');

$thickness_text = '';
if (!empty($thicknesses)) {
	foreach ($thicknesses as $item) {
		$thickness_text .= $item->name . ',';
	}
}
$thickness_text = trim($thickness_text, ',');
?>

<!-- 本文 -->
<div class="shop-top">
	<dl>
		<div>
			<dt>地域：</dt>
			<dd><?php echo esc_html($region_text); ?></dd>
		</div>
		<div>
			<dt>スープ：</dt>
			<dd><?php echo esc_html($soup_text); ?></dd>
		</div>
		<div>
			<dt>麺の太さ：</dt>
			<dd><?php echo esc_html($thickness_text); ?></dd>
		</div>
		<div>
			<dt>お店の特徴：</dt>
			<dd><?php echo esc_html($feature_text); ?></dd>
		</div>
	</dl>
	<div class="shop-top__top-msg"><?php the_field('shop_top_msg'); ?></div>
	<div class="shop-top__menu">
		<div class="shop-top__thumbnail"><?php the_post_thumbnail(); ?></div>
		<div class="shop-top__sub">
			<!-- 最大4件表示 -->
			<?php if (have_rows('shop_menu')) : $i = 0; ?>
				<?php while (have_rows('shop_menu')) : the_row();
					if ($i > 3) break; ?>
					<div class="shop-top__sub--item">
						<img src="<?php the_sub_field('shop_menu_img'); ?>" alt="メニュー画像">
						<p><?php the_sub_field('shop_menu_title'); ?></p>
						<p><strong><?php the_sub_field('shop_menu_price'); ?></strong>円</p>
					</div>
			<?php
					$i++;
				endwhile;
			endif; ?>
		</div>
	</div>
</div>