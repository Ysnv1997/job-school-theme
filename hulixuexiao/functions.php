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

		$first_img = get_template_directory_uri() . '/gif/metinfod41d.gif';
		//请自行设置一张default.jpg图片
	}
	return $first_img;
}

class description_walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
	{
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$class_names = $value = '';
 
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
 
		$output .= $indent . '<li class="nav-item" id="menu-item-'. $item->ID . '">';
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		$description  = ! empty( $item->description ) ? '<img src="'.esc_attr( $item->description ).'">' : '';
 
		if($depth != 0) $description = "";
 
		$item_output = $args->before;
		$item_output .= '<a class="nav-link"'. $attributes .'>';
		$item_output .= $args->link_before .apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= $description.$args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
 
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
}
//取得文章的阅读次数  
function post_views($before = '点击 ', $after = ' 次', $echo = 1)  
{  
  global $post;  
  $post_ID = $post->ID;  
  $views = (int)get_post_meta($post_ID, 'views', true);  
  if ($echo) echo $before, number_format($views), $after;  
  else return $views;  
}  
function record_visitors()  
{  
    if (is_singular()) {  
      global $post;  
      $post_ID = $post->ID;  
      if($post_ID) {  
          $post_views = (int)get_post_meta($post_ID, 'views', true);  
          if(!update_post_meta($post_ID, 'views', ($post_views+1))) {  
            add_post_meta($post_ID, 'views', 1, true);  
          }  
      }  
    }  
}  
add_action('wp_head', 'record_visitors');  