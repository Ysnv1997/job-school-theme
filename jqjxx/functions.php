<?php
register_nav_menus(array(
    'top' => '顶部菜单'
));
//去除头部无用代码
add_filter('show_admin_bar', '__return_false');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'locale_stylesheet');
remove_action('wp_head', 'noindex', 1);
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_footer', 'wp_print_footer_scripts');
remove_action('publish_future_post', 'check_and_publish_future_post', 10, 1);
remove_action('template_redirect', 'wp_shortlink_header', 11, 0);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('rest_api_init', 'wp_oembed_register_route');
remove_filter('rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4);
remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
remove_filter('oembed_response_data', 'get_oembed_response_data_rich', 10, 4);
add_filter('rest_enabled', '__return_false');
add_filter('rest_jsonp_enabled', '__return_false');
add_shortcode('reply', 'reply_to_read');
//移除菜单的多余CSS选择器
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}
//禁用Emoji表情
function disable_emojis() {
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_styles', 'print_emoji_styles');
	remove_filter('the_content_feed', 'wp_staticize_emoji');
	remove_filter('comment_text_rss', 'wp_staticize_emoji');
	remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
	add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}
add_action('init', 'disable_emojis');
function disable_emojis_tinymce($plugins) {
	if (is_array($plugins)) {
		return array_diff($plugins, array(
			'wpemoji',
		));
	} else {
		return array();
	}
}
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	//获取文章中第一张图片的路径并输出
	$first_img = $matches[1][0];
	//如果文章无图片，获取自定义图片
	if (empty($first_img)) {
		$random = mt_rand(1, 4);
		$first_img = get_template_directory_uri() . '/assets/images/list-' . $random . '.jpg';
		//请自行设置一张default.jpg图片
	}
	return $first_img;
}
    // 分页代码
    function par_pagenavi($range = 3){
        global $paged, $wp_query;
        if ( !$max_page ) {$max_page = $wp_query->max_num_pages;}
        if($max_page > 1){if(!$paged){$paged = 1;}
        if($paged != 1){echo "<a href='" . get_pagenum_link(1) . "' class='extend' title='跳转到首页'>«</a>";}
        if($max_page > $range){
            if($paged < $range){for($i = 1; $i <= ($range + 1); $i++){echo "<a href='" . get_pagenum_link($i) ."'";
            if($i==$paged)echo " class='current'";echo ">$i</a>";}}
        elseif($paged >= ($max_page - ceil(($range/2)))){
            for($i = $max_page - $range; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
            if($i==$paged)echo " class='current'";echo ">$i</a>";}}
        elseif($paged >= $range && $paged < ($max_page - ceil(($range/2)))){
            for($i = ($paged - ceil($range/2)); $i <= ($paged + ceil(($range/2))); $i++){echo "<a href='" . get_pagenum_link($i) ."'";if($i==$paged) echo " class='current'";echo ">$i</a>";}}}
        else{for($i = 1; $i <= $max_page; $i++){echo "<a href='" . get_pagenum_link($i) ."'";
        if($i==$paged)echo " class='current'";echo ">$i</a>";}}
        next_posts_link(' »');
    }
    }