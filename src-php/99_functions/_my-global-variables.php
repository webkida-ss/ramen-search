<?php

/************************************************************************
 * グローバル変数を定義
 ************************************************************************/

function my_global()
{
	global $array_soup;
	$array_soup = [
		['醤油', 'shoyu'],
		['味噌', 'miso'],
		['豚骨', 'tonkotsu']
	];

	global $array_thickness;
	$array_thickness = [
		['太麺', 'thick'],
		['中太麺', 'middle-thick'],
		['細麺', 'thin']
	];

	global $array_region;
	$array_region = [
		['北海道・東北', 'hokkaido-tohoku'],
		['関東', 'kanto'],
		['中部・近畿', 'chubu-kinki'],
		['中国・四国', 'chugoku-shikoku'],
		['九州', 'kyushu'],
	];

	global $array_feature;
	$array_feature = [
		['駅近', 'near-station'],
		['店内がきれい', 'clean'],
		['1人で入りやすい', 'easy-to-enter'],
	];

	// キー項目からバリュー項目を取得
	function get_value_by_key($array, $key)
	{
		return
			array_values(array_filter($array, function ($element) use ($key) {
				return $element[1] == $key;
			}))[0][0];
	}

	global $array_tabmenu;
	$array_tabmenu = ['トップ', 'メニュー', 'アクセス'];
}
add_action('after_setup_theme', 'my_global');
