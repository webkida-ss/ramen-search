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
	 * タブメニュー制御
	 * jQuery
	 *********************************************/
	let tab_menus = jQuery('.js-tab-menu');
	tab_menus.click(function () {
		jQuery('.tab-active').removeClass('tab-active'); // tab-activeクラスを消す
		jQuery(this).addClass('tab-active'); // クリックした箇所にtab-activeクラスを追加
		let index = tab_menus.index(this);
		jQuery('.js-tab-item').eq(index).addClass('tab-active');
	});
});