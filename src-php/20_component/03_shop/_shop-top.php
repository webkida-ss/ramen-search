<div class="shop-top">
	<div class="shop-top__top-msg"><?php the_field('shop_top_msg'); ?></div>
	<div class="shop-top__menu">
		<div class="shop-top__main">
			<?php the_post_thumbnail(); ?>
		</div>
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