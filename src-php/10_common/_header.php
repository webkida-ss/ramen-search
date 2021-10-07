<!-- データ -->
<?php
$array_header = [];
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
					<!-- ラーメンスープから選ぶ -->
					<li class="header__item">
						<p class="header__item--main">ラーメンスープから選ぶ<span>soup</span></p>
						<div class="header__item--detail">
							<a href="">醤油</a>
							<a href="">味噌</a>
							<a href="">豚骨</a>
						</div>
					</li>
					<!-- 麺の太さから選ぶ -->
					<li class="header__item">
						<p class="header__item--main">麺の太さから選ぶ<span>thickness</span></p>
						<div class="header__item--detail">
							<a href="">太麺</a>
							<a href="">中太麺</a>
							<a href="">細麺</a>
						</div>
					</li>
					<!-- 特徴から選ぶ -->
					<li class="header__item">
						<p class="header__item--main">
							<a href="">お店の特徴から選ぶ<span>feature</span></a>
						</p>
					</li>
					<!-- お問い合わせ -->
					<li class="header__item">
						<p class="header__item--main">
							<a href="contact">お問い合わせ<span>contact</span></a>
						</p>
					</li>
				</ul>
			</nav>
		</div><!-- /.header__main -->

	</div><!-- /.header__container -->
</header>