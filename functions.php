<?php

/************************************************************************
 * 管理メニュー修正
 * https://qiita.com/konweb/items/5483efbe87087eff5cc8
 * https://hirashimatakumi.com/blog/3916.html
 ************************************************************************/

add_action('admin_menu', function () {
	// global $menu;
	// unset($menu[5]);  // 投稿
	// remove_menu_page( 'edit.php' );// 投稿
});


/************************************************************************
 * テーマのセットアップ
 * HMTL
 * https://wpdocs.osdn.jp/%E3%83%86%E3%83%BC%E3%83%9E%E3%83%9E%E3%83%BC%E3%82%AF%E3%82%A2%E3%83%83%E3%83%97
 * HTML5でマークアップ？：具体的に出力結果がどう変わるかは謎
 * 
 * automatic-feed-links
 * 投稿とコメントのRSSフィードのリンクを有効化
 ************************************************************************/
add_action('after_setup_theme', function () {
	add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag'); // 管理画面からのタイトルの設定（header.phpには直接記述しない）
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
	// add_image_size();画像のリサイズ
});


// カスタムメニュー機能を有効化
add_action('admin_menu', function () {
	register_nav_menus(
		array(
			'global' => 'ヘッダーメニュー',
			'drawer' => 'ドロワーメニュー',
		)
	);
});

/**
 * ウィジェットの登録
 */
add_action(
	'widgets_init',
	function () {
		register_sidebar(
			array(
				'name' => 'サイドバー', // 表示するエリア名
				'id' => 'sidebar', // id
				// 'before_widget' => '<div id="%1$s" class="widget %2$s">',
				// 'after_widget' => '</div>',
				// 'before_title' => '<div class="widget-title">',
				// 'after_title' => '</div>',
			)
		);
	}
);

/************************************************************************
 * CSS・JS読み込み
 * wp_enqueue_***：cssやJS等の外部ファイル読み込みの推奨関数
 * 
 * ① functionを設定
 * ② header.php、footer.phpにてwp_head、wp_footerをフックする。※ ファイル分割していること
 * 　 → functionで定義したstyleが読み込まれる
 * 
 * wp_enqueue_script（style）
 * 第1引数：ハンドル名
 * 第2引数：読み込むファイル名
 * 第3引数：読み込むファイルの依存ファイル（事前に読み込む必要があるファイル）
 ************************************************************************/

add_action('wp_enqueue_scripts', function () {
	// CSS読み込み
	wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/lib/reset.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.0.0', 'all');

	wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.min.js', array('jquery'), '1.0.0', true);
});

/************************************************************************
 * セキュリティ対策：投稿者アー	カイブの無効化
 * author_rewrite_rules：投稿者アーカイブページのリライトルール
 * __return_empty_array：空の配列を返す
 ************************************************************************/
// 投稿者アーカイブを無効化
function disable_author_archive($query)
{
	if (!is_admin() && is_author()) {
		$query->set_404();
		status_header(404);
		nocache_headers();
	}
}
add_action('parse_query', 'disable_author_archive');


/************************************************************************
 * ファイル取込み
 ************************************************************************/
get_template_part('src-php/99_functions/_customize-search'); // グローバル変数
get_template_part('src-php/99_functions/_my-global-variables'); // グローバル変数
get_template_part('src-php/99_functions/_filter-hook'); // フィルターフック
get_template_part('src-php/99_functions/_short-code'); // ショートコード
get_template_part('src-php/99_functions/_user-define'); // ユーザ定義関数
