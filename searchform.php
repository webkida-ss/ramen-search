<!-- データ -->
<?php
global $array_soup;
global $array_thickness;
global $array_feature;
global $array_region;
?>

<!-- 検索画面本文 -->
<div class="searchform">
	<form role="search" method="get" action="<?php echo esc_url(home_url() . '/'); ?>">


		<!-- ラーメンの特徴 -->
		<div class="searchform__item ramen">
			<label><span>ラーメン</span>の特徴</label>
			<div class="searchform__item--select">
				<select name="soup">
					<option value="">スープ</option>
					<?php foreach ($array_soup as $item) : ?>
						<option value="<?php echo $item[1]; ?>"><?php echo esc_html($item[0]); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
			<div class="searchform__item--select">
				<select name="thickness">
					<option value="">麺の太さ</option>
					<?php foreach ($array_thickness as $item) : ?>
						<option value="<?php echo $item[1]; ?>"><?php echo esc_html($item[0]); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<!-- お店の特徴 -->
		<div class="searchform__item feature">
			<label><span>お店</span>の特徴</label>
			<div class="searchform__item--select">
				<select name="feature">
					<option value="">お店の特徴</option>
					<?php foreach ($array_feature as $item) : ?>
						<option value="<?php echo $item[1]; ?>"><?php echo esc_html($item[0]); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<!-- 地域 -->
		<div class="searchform__item region">
			<label><span>地域</span></label>
			<div class="searchform__item--select">
				<select name="region">
					<option value="">地域</option>
					<?php foreach ($array_region as $item) : ?>
						<option value="<?php echo $item[1]; ?>"><?php echo esc_html($item[0]); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
		</div>

		<!-- フリーワード検索 -->
		<div class="searchform__item">
			<label><span>フリーワード</span></label>
			<input type="text" name='s'>
		</div>

		<!-- 検索ボタン -->
		<button type="submit">
			<p>検索する</p>
			<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/ramen_shoyu_small.png'); ?>" alt="検索ボタン">
		</button>

	</form>
</div>