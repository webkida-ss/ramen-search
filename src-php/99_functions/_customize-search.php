<?php

/************************************************************************
 * 検索仕様をカスタマイズ
 ************************************************************************/


/***************************************************************
 * 検索条件の基本設定
 ***************************************************************/
function edit_pre_get_posts($query)
{
	// 管理画面の場合、メインクエリではない場合は対象外
	if (is_admin() || !$query->is_main_query()) {
		return;
	}

	// 検索結果画面の場合のみを対象
	if ($query->is_search()) {
		$query->set('post_type', 'shop'); // カスタム投稿：学校詳細のみ
	}

	// クエリ検索条件
	$meta_query = [];

	/******************************************
	 * スープ：タクソノミー検索
	 ******************************************/
	$soup = $_GET['soup'];
	if (!empty($soup)) {
		$meta_query[] =    array(
			array(
				'taxonomy' => 'soup',
				'field' => 'slug',
				'terms' => $soup
			)
		);
	}

	/******************************************
	 * 麺の太さ：タクソノミー検索
	 ******************************************/
	$thickness = $_GET['thickness'];
	if (!empty($thickness)) {
		$meta_query[] =    array(
			array(
				'taxonomy' => 'thickness',
				'field' => 'slug',
				'terms' => $thickness
			)
		);
	}

	/******************************************
	 * 地域：タクソノミー検索
	 ******************************************/
	$region = $_GET['region'];
	if (!empty($region)) {
		$meta_query[] =    array(
			array(
				'taxonomy' => 'region',
				'field' => 'slug',
				'terms' => $region
			)
		);
	}

	/******************************************
	 * 特徴：タクソノミー検索
	 ******************************************/
	$feature = $_GET['feature'];
	if (!empty($feature)) {
		$meta_query[] =    array(
			array(
				'taxonomy' => 'feature',
				'field' => 'slug',
				'terms' => $feature
			)
		);
	}

	// 絞り込み条件をセット
	$query->set('meta_query', $meta_query);
	// var_dump($meta_query);
	return;
}
add_action('pre_get_posts', 'edit_pre_get_posts');


/***************************************************************
 * カスタムフィールドを検索
 * 　検索結果画面の場合のみを対象
 * 　検索項目
 ***************************************************************/
function custom_search($search, $wp_query)
{
	global $wpdb;
	if (!$wp_query->is_search) return $search; // 検索結果のみ対象
	if (!isset($wp_query->query_vars)) return $search; // 検索ワード(s)がある場合のみ対象：空文字もここは抜ける

	// 検索ワード（半角スペース区切り）
	$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');

	// 検索ワードがある場合のみ検索
	if (count($search_words) > 0) {
		$search = '';
		foreach ($search_words as $word) {
			if (!empty($word)) { // 空文字の場合はWHERE区作成しない
				$search_word = '%' . esc_sql($word) . '%'; // 検索ワードをエスケープ
				$search .= " AND (
                    {$wpdb->posts}.post_title LIKE '{$search_word}' 
                    OR {$wpdb->posts}.ID IN (
                        SELECT distinct post_id
                        FROM {$wpdb->postmeta}
                        WHERE 
                            {$wpdb->postmeta}.meta_key LIKE 'shop_%'
                            AND meta_value LIKE '{$search_word}'
                    )
                ) ";
			}
		}
	}
	// var_dump($search_words);
	// var_dump($search);
	return $search;
}
add_filter('posts_search', 'custom_search', 10, 2);
