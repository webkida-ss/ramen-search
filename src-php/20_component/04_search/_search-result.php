<!-- データ -->
<?php
global $array_soup;
global $array_region;
global $array_thickness;
global $array_feature;

$soup = $_GET['soup']; // スープ
$region = $_GET['region']; // 地域
$thickness = $_GET['thickness']; // 麺の太さ
$feature = $_GET['feature']; // 特色
$search_word = get_search_query(); // 検索ワード

$result_word = "";
$result_word = !empty($search_word) ? $search_word . 'を含む' : '';
$result_word .= !empty($region) ? get_value_by_key($array_region, $region) . 'の' : '';
$result_word .= !empty($soup) ? get_value_by_key($array_soup, $soup) . 'の' : '';
$result_word .= !empty($thickness) ? get_value_by_key($array_thickness, $thickness) . 'の' : '';
$result_word .= !empty($feature) ? get_value_by_key($array_feature, $feature) . 'の' : '';

$found_posts = $wp_query->found_posts; // 件数

// ページネーション
$pagenation_args = array(
	'mid_size' => 8,
	'prev_text' => '前へ',
	'next_text' => '次へ',
	'screen_reader_text' => '', // ページャーのタイトル
);
?>


<!-- 本文 -->
<div class="search-result">
	<div class="inner">

		<!-- 検索結果トップ -->
		<div class="search-result__top">
			<div class="search-result__top--result">
				<p class="search-result__top--condition"><span><?php echo esc_html($result_word); ?></span>ラーメン屋</p>
				<p class="search-result__top--num">対象件数： <span><?php echo esc_html($found_posts); ?></span>件</p>
			</div>
			<!-- ページネーション -->
			<div class="search-result__pagenation upper">
				<?php the_posts_pagination($pagenation_args); ?>
			</div>
		</div>


		<!-- 検索結果一覧 -->
		<div class="search-result__main">

			<?php if (have_posts()) : ?>
				<ul class="search-result__list">
					<?php while (have_posts()) : the_post(); ?>
						<li class="search-result__item">
							<a href="<?php the_permalink(); ?>">
								<div class="search-result__item--img"><?php the_post_thumbnail(); ?></div>
								<div class="search-result__item--content">
									<p class="search-result__item--title"><?php the_title(); ?></p>
									<div class="search-result__item--msg"><?php the_field('shop_top_msg'); ?></div>
								</div>
							</a>
						</li><!-- /.search-result__item -->
					<?php endwhile; ?>
				</ul><!-- /.search-result__list -->

			<?php else : ?>
				<p class="search-result__notfound">検索結果がありません。</p>
			<?php endif; ?>

			<!-- ページネーション -->
			<div class="search-result__pagenation lower">
				<?php the_posts_pagination($pagenation_args); ?>
			</div>

		</div><!-- /.search-result__main -->

	</div>
</div>