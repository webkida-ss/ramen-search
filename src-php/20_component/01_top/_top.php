<div class="top">
	<div class="inner top__container">
		<div class="top__search">
			<p>フリーワードで検索する</p>
			<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">
				<input type="text" name='s'>
				<button type="submit">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ramen_shoyu_small.png'); ?>" alt="検索ボタン">
				</button>
			</form>
		</div>
	</div>
</div>