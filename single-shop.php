<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper single-shop">

		<!-------------------------------------------------- 
		- ヘッダー
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>


		<!-------------------------------------------------- 
		- メイン
		---------------------------------------------------->
		<div class="inner container">
			<main class="main">

				<!-- タブメニュー -->
				<section class="single-shop__shop-tab-menu">
					<?php global $array_tabmenu; ?>
					<ul class="single-shop__shop-tab-menu--list">
						<?php
						for ($i = 0; $i < count($array_tabmenu); $i++) :
							$item = $array_tabmenu[$i];
							$add_class = ($i == 0) ? 'tab-active' : '';
						?>
							<li class="js-tab-menu <?php echo $add_class; ?> single-shop__shop-tab-menu--item">
								<?php echo esc_html($item); ?>
							</li>
						<?php endfor; ?>
					</ul>
				</section>

				<!-- トップ -->
				<section class="js-tab-item single-shop__shop-top tab-active">
					<?php get_template_part('src-php/20_component/03_shop/_shop-top'); ?>
				</section>

				<!-- メニュー -->
				<section class="js-tab-item single-shop__shop-menu">
					<?php get_template_part('src-php/20_component/03_shop/_shop-menu'); ?>
				</section>

				<!-- アクセス -->
				<section class="js-tab-item single-shop__shop-access">
					<?php get_template_part('src-php/20_component/03_shop/_shop-access'); ?>
				</section>

			</main>
		</div><!-- /.container -->

		<!-------------------------------------------------- 
		- フッター
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_footer'); ?>
	</div><!-- /.wrapper -->

	<?php get_footer(); ?>
</body>

</html>