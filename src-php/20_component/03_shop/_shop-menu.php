<div class="shop-menu">
	<div class="shop-menu__container">
		<?php if (have_rows('shop_menu')) : ?>
			<?php while (have_rows('shop_menu')) : the_row(); ?>
				<div class="shop-menu__item">
					<img src="<?php the_sub_field('shop_menu_img'); ?>" alt="メニュー画像">
					<div>
						<?php the_sub_field('shop_menu_title'); ?>
						<span><strong><?php the_sub_field('shop_menu_price'); ?></strong>円</span>
					</div>
					<p><?php the_sub_field('shop_menu_feature'); ?></p>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>