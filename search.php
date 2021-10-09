<!-- 検索結果画面 -->
<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_header(); ?>
</head>

<body>
	<div class="wrapper search">

		<!-------------------------------------------------- 
		- ヘッダー
		---------------------------------------------------->
		<?php get_template_part('src-php/10_common/_header'); ?>


		<!-------------------------------------------------- 
		- メイン
		---------------------------------------------------->
		<div class="container">
			<main class="main">

				<!-- 詳細検索 -->
				<section class="search__search-detail">
					<?php get_template_part('src-php/20_component/04_search/_search-detail'); ?>
				</section>

				<!-- 検索結果 -->
				<section class="search__search-result">
					<?php get_template_part('src-php/20_component/04_search/_search-result'); ?>
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