<?php

/************************************************************************
 * グローバル変数を定義
 ************************************************************************/

function my_global()
{
	// global $param;
	// $param = 1;
}
add_action('after_setup_theme', 'my_global');
