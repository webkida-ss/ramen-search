<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper front-page">

		<!-------------------------------------------------- 
		- ヘッダー
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>


		<!-------------------------------------------------- 
		- メイン
		---------------------------------------------------->
		<div class="container">
			<main class="main">

				<!-- トップ -->
				<section class="front-page__top">
					<?php get_template_part('src-php/20_component/01_top/_top'); ?>
				</section>

				<!-- 詳細検索 -->
				<section class="front-page__detail-search">
					<?php get_template_part('src-php/10_common/_detail-search'); ?>
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