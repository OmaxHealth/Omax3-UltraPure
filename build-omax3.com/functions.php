<?php
// WordPress: Strips information out of head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// WordPress: Removes the default Post types from the admin section
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
	// Removes for Everyone
	remove_menu_page('edit.php');                   //Posts
	remove_menu_page('edit-comments.php');          //Comments
	
	// Removes for non-Admin Users
	if(!current_user_can('update_core')) {
		remove_menu_page('tools.php');					//Tools
	}
}

// WordPress: Disable WordPress Admin Bar for all users
show_admin_bar(false);

// WordPress: Forces page templates to load without needing to set template type
add_filter('template_include', 'force_page_template', 99);
function force_page_template($template){
	global $post;

	if (is_front_page() || is_page('lp1001')){//Front Page must be assigned in Setting > Reading
		$new_template = locate_template(array('page-template-lp1001.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_front_page() || is_page('lp1002')){//Front Page must be assigned in Setting > Reading
		$new_template = locate_template(array('page-template-lp1002.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_front_page() || is_page('lp1003')){//Front Page must be assigned in Setting > Reading
		$new_template = locate_template(array('page-template-lp1003.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('select-your-plan')){
		$new_template = locate_template(array('page-template-select-your-plan.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('terms-and-conditions')){
		$new_template = locate_template(array('page-template-terms-and-conditions.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('privacy-policy')){
		$new_template = locate_template(array('page-template-privacy-policy.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('contact-us')){
		$new_template = locate_template(array('page-template-contact-us.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('kick-start-keto-diet-with-omega3s')){
		$new_template = locate_template(array('page-template-article-keto.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('5-reasons-this-new-fish-oil-supplement-is-a-total-game-changer')){
		$new_template = locate_template(array('page-template-article-5reasons.php'));
		if ('' != $new_template) {return $new_template;}
	}
	if (is_page('omax3-relieved-inflammation-joint-pain')){
		$new_template = locate_template(array('page-template-article-relieved.php'));
		if ('' != $new_template) {return $new_template;}
	}
	return $template;
}

// WordPress: Hides editor on template pages
add_action('admin_init','hide_editor');
function hide_editor(){
	$postID = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'];
	if(isset($postID)){
		$post = get_post($postID); 
		$slug = $post->post_name;
		$show_editor = true;
		
		// Comment out pages that should show the editor
		if ($slug == 'lp1001'){$show_editor = false;}
		if ($slug == 'lp1002'){$show_editor = false;}
		if ($slug == 'lp1003'){$show_editor = false;}
		if ($slug == 'select-your-plan'){$show_editor = false;}
		if ($slug == 'terms-and-conditions'){$show_editor = false;}
		if ($slug == 'privacy-policy'){$show_editor = false;}
		if ($slug == 'contact-us'){$show_editor = false;}
		if ($slug == 'kick-start-keto-diet-with-omega3s'){$show_editor = false;}
		if ($slug == '5-reasons-this-new-fish-oil-supplement-is-a-total-game-changer'){$show_editor = false;}
		if ($slug == 'omax3-relieved-inflammation-joint-pain'){$show_editor = false;}	
		
		if (!$show_editor){
			remove_post_type_support('page','editor');
		}	
	}
}

// WordPress: Makes sure there is a session set (used for tracking offer landing)
add_action('init', 'WPSession', 1);
function WPSession() {
	if(!session_id()) {
		session_start();
	}
}



// WordPress: Changes the outgoing Email Name
add_filter('wp_mail_from_name','wpb_sender_name');
function wpb_sender_name($original_email_from){
    return 'Omax Health';
}

// WordPress: Changes the outgoing Email Address
add_filter('wp_mail_from','wpb_sender_email');
function wpb_sender_email($original_email_address){
    return 'noreply@omaxhealth.com';
}

// WordPress: Add slug name to body class
add_filter('body_class','add_body_class');
function add_body_class($classes){
	global $post;
	if (isset($post)){
		$classes[] = $post->post_type.'-'.$post->post_name;
	}
	return $classes;
}

// WordPress: Sets the number of pages to show in Admin View
add_filter('get_user_metadata','pages_per_page_wpse_23503', 10, 4);
function pages_per_page_wpse_23503($check, $object_id, $meta_key, $single){ 
	if('edit_page_per_page' == $meta_key){
		return 50;
	} else {
		return $check;
	}
}

// WordPress: Prevents Thumbnail Generation of uploaded images
add_filter('intermediate_image_sizes_advanced','add_image_insert_override');
function add_image_insert_override($sizes){
	//unset($sizes['thumbnail']);
	unset($sizes['medium']);
	unset($sizes['medium_large']);
	unset($sizes['large']);
	return $sizes;
}

// WordPress: Forces lowercase on all files uploaded to the Media Library
add_filter('sanitize_file_name', 'media_library_filename_lowercase', 10);
function media_library_filename_lowercase($filename){
	$info = pathinfo($filename);
	$ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
	$name = basename($filename, $ext);
	return strtolower($name) . $ext;
}

// WordPress: Disable WP Emojicons
add_action('init','disable_wp_emojicons');
function disable_wp_emojicons(){
  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  
	function disable_emojicons_tinymce($plugins){
		if (is_array($plugins)) {
			return array_diff($plugins, array('wpemoji'));
		} else {
			return array();
		}
	}
}

// WordPress: Adds Custom Post Type for FAQ
/*
add_action('init','create_faq_cpt',0);
function create_faq_cpt() {
	$labels = array(
		'name' => 'FAQs',
		'singular_name' => 'FAQ',
		'menu_name' => 'FAQs',
		'name_admin_bar' => 'FAQ',
		'attributes' => 'FAQ Attributes',
		'parent_item_colon' => 'Parent FAQ:',
		'all_items' => 'All FAQs',
		'add_new_item' => 'Add New FAQ',
		'add_new' => 'Add New',
		'new_item' => 'New FAQ',
		'edit_item' => 'Edit FAQ',
		'update_item' => 'Update FAQ',
		'view_item' => 'View FAQ',
		'view_items' => 'View FAQs',
		'search_items' => 'Search FAQ',
		'not_found' => 'FAQ Not found',
		'not_found_in_trash' => 'FAQ Not found in Trash'
	);
	$args = array(
		'label' => 'FAQ',
		'description' => 'FAQ Question and Answer Block',
		'labels' => $labels,
		'menu_icon' => 'dashicons-book-alt',
		'supports' => array('title','editor'),
		'taxonomies' => array(),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => false,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type('faq',$args);
}
*/
?>
