<?php

/************************************************************************
 * グローバル変数を定義
 ************************************************************************/

function my_global()
{
	global $array_soup;
	$array_soup = ['醤油', '味噌', 'とんこつ'];

	global $array_thickness;
	$array_thickness = ['太麺', '中太麺', '細麺'];

	global $array_feature;
	$array_feature = ['駅近', '店内がきれい', '1人で入りやすい'];
}
add_action('after_setup_theme', 'my_global');
