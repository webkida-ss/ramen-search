jQuery(function () {

	/*********************************************
	 * ドロワー
	 * jQuery
	 *********************************************/
	let drawerBtn = jQuery("#js-drawer");
	drawerBtn.on("click", function (e) {
		e.preventDefault();
		let targetClass = jQuery(this).attr("data-target");
		jQuery("." + targetClass).toggleClass("is-checked"); // for-drawerクラスがついてる要素をトグルでis-checked
		return false;
	});
	// リンク選択時にドロワーを閉じる
	jQuery('.js-drawer-item').on('click', function (e) {
		let targetClass = drawerBtn.attr("data-target");
		jQuery("." + targetClass).removeClass('is-checked');
	});
	jQuery(window).resize(function () {
		if (jQuery(window).width() > 559) {
			let targetClass = drawerBtn.attr("data-target");
			jQuery("." + targetClass).removeClass('is-checked');
		}
	});

	/*********************************************
	 * スライダー
	 * jQueryプラグイン
	 *********************************************/
	new Swiper('.swiper-container', {
		width: 274, // スライドサイズ
		spaceBetween: 24, // スライド間
		loop: true, // 最後に達したら先頭に戻る
		loopedSlides: 6, // スライド数
		pagination: { // ページネーション
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
		breakpoints: { // ブレイクポイント
			600: { // min-width 600
				spaceBetween: 40,
				width: 400,
			}
		}
	});

});