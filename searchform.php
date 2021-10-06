<!-- データ -->
<?php
global $array_soup;
global $array_thickness;
global $array_feature;
?>

<!-- 検索画面本文 -->
<div class="searchform">
	<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">


		<!-- ラーメンの特徴 -->
		<div class="searchform__item ramen">
			<label>ラーメンの特徴から選ぶ</label>
			<select name="soup">
				<option value="">ラーメンスープ</option>
				<?php foreach ($array_soup as $item) : ?>
					<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
				<?php endforeach; ?>
			</select>
			<select name="thickness">
				<option value="">麺の太さ</option>
				<?php foreach ($array_thickness as $item) : ?>
					<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<!-- お店の特徴 -->
		<div class="searchform__item feature">
			<label>お店の特徴から選ぶ</label>
			<select name="feature">
				<option value="">お店の特徴</option>
				<?php foreach ($array_feature as $item) : ?>
					<option value="<?php echo $item; ?>"><?php echo $item; ?></option>
				<?php endforeach; ?>
			</select>
		</div>

		<!-- フリーワード検索 -->
		<div class="searchform__item">
			<label>フリーワード</label>
			<input type="text" name='s'>
		</div>

		<!-- 検索ボタン -->
		<button type="submit">
			<p>検索する</p>
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ramen_shoyu_small.png'); ?>" alt="検索ボタン">
		</button>

	</form>
</div>