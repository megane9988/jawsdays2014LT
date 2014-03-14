<?php
// cssとjsの読み込み ---------------------------------------------
function wp_d_styles() {
wp_enqueue_style( 'wp_d', get_bloginfo( 'stylesheet_directory') . '/stylesheets/app.css?142022700', array(), null, 'all');
wp_enqueue_script( 'foundation_js', get_bloginfo( 'stylesheet_directory') . '/bower_components/foundation/js/foundation.min.js', array('jquery'), false, true );
wp_enqueue_script( 'app_js', get_bloginfo( 'stylesheet_directory') . '/js/app.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'wp_d_styles');

// titleタグ内を適切に表示 (twentyfourteenから流用)---------------------------------------------
function wp_d_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'wp_d' ), max( $paged, $page ) );

	return $title;
}

add_filter( 'wp_title', 'wp_d_wp_title', 10, 2 );
// ヘッダーのACFへの考慮 ---------------------------------------------
if (!function_exists('get_field')) {
	function get_field($key) {
		if ($key == 'catchcopy') {
			return '投稿のキャッチコピーを表示（ACFを有効化し"catchcopy"というキーでフィールドを設定してください）';
		} elseif ($key == 'subcopy') {
			return '投稿のサブコピーを表示（ACFを有効化し"subcopy"というキーでフィールドを設定してください）';
		} else {
			return 'Advanced Custom Fieldsプラグインが有効化されていません。';
		}
	}
}