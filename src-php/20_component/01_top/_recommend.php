<!-- データ -->
<?php
$args = array(
	'post_type' => 'shop', // 投稿タイプ：ラーメン屋
	'order' => 'ASC',
	'meta_key' => 'shop_ranking', //カスタムフィールド名
	'orderby' => 'meta_value_num',
	'posts_per_page'   => 3, // ランキング上位3件	
);
$the_query = get_posts($args);
?>

<!-- 本文 -->
<div class="recommend">
	<div class="inner recommend__container">
		<?php if ($the_query) : ?>
			<div class="inner recommend__top">
				<span>Ranking</span>
				<p>今週のおすすめランキングTOP3！</p>
			</div>
			<ul class="recommend__list">
				<?php for ($i = 0; $i < count($the_query); $i++) :
					$post = $the_query[$i];
					setup_postdata($post); ?>
					<li class="recommend__item">
						<a href="<?php the_permalink(); ?>">
							<p class="recommend__item--rank"><span><?php echo esc_html($i + 1); ?></span>位</p>
							<div class="recommend__item--thumnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<p class="recommend__item--title"><?php the_title(); ?></p>
							<div class="recommend__item--msg"><?php the_excerpt(); ?></div>
						</a>
					</li>
				<?php endfor; ?>
			</ul><!-- /.recommend__list -->
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</div>