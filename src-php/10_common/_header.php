<!-- データ -->
<?php
global $array_soup;
global $array_thickness;
global $array_region;
global $array_feature;
?>


<!-- 本文 -->
<header class="header">
	<div class="header__container">
		<div class="header__upper">ラーメン屋検索サイトです！</div>

		<div class="header__main">
			<h1 class="header__title">
				<a href="<?php echo esc_url(home_url()); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.png'); ?>" alt="サイトロゴ">
				</a>
			</h1>
			<nav class="header__nav">
				<ul class="inner header__list">
					<!-- スープ -->
					<li class="header__item">
						<p class="header__item--main">スープ<span>soup</span></p>
						<div class="header__item--detail">
							<?php foreach ($array_soup as $item) : ?>
								<a href="<?php echo esc_url(home_url() . '/?s=&soup=' . $item[1]); ?>"><?php echo esc_html($item[0]) ?></a>
							<?php endforeach; ?>
						</div>
					</li>
					<!-- 麺の太さ -->
					<li class="header__item">
						<p class="header__item--main">麺の太さ<span>thickness</span></p>
						<div class="header__item--detail">
							<?php foreach ($array_thickness as $item) : ?>
								<a href="<?php echo esc_url(home_url() . '/?s=&thickness=' . $item[1]); ?>"><?php echo esc_html($item[0]) ?></a>
							<?php endforeach; ?>
						</div>
					</li>
					<!-- 地域 -->
					<li class="header__item">
						<p class="header__item--main">地域<span>region</span></p>
						<div class="header__item--detail">
							<?php foreach ($array_region as $item) : ?>
								<a href="<?php echo esc_url(home_url() . '/?s=&region=' . $item[1]); ?>"><?php echo esc_html($item[0]) ?></a>
							<?php endforeach; ?>
						</div>
					</li>
					<!-- 特徴 -->
					<li class="header__item">
						<p class="header__item--main">お店の特徴<span>feature</span></p>
						<div class="header__item--detail">
							<?php foreach ($array_feature as $item) : ?>
								<a href="<?php echo esc_url(home_url() . '/?s=&feature=' . $item[1]); ?>"><?php echo esc_html($item[0]) ?></a>
							<?php endforeach; ?>
						</div>
					</li>
				</ul>
			</nav>
		</div><!-- /.header__main -->

	</div><!-- /.header__container -->
</header>