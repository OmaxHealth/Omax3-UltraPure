<?php
// WordPress: Strips information out of head
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);

// WordPress: Disable WordPress Admin Bar for all users
show_admin_bar(false);

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

// WordPress: Add slug name to body class
add_filter('body_class','add_body_class');
function add_body_class($classes){
	global $post;
	if (isset($post)){
		$classes[] = $post->post_type.'-'.$post->post_name;
	}
	return $classes;
}

// WordPress: Forces page templates to load without needing to set template type
add_filter('template_include', 'force_page_template', 99);
function force_page_template($template){
	global $post;

	if (is_front_page() || is_page('home')){//Front Page must be assigned in Setting > Reading
		$new_template = locate_template(array('page-template-home.php'));
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
	return $template;
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

// WordPress: Forces lowercase on all files uploaded to the Media Library
add_filter('sanitize_file_name', 'media_library_filename_lowercase', 10);
function media_library_filename_lowercase($filename){
	$info = pathinfo($filename);
	$ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
	$name = basename($filename, $ext);
	return strtolower($name) . $ext;
}

?>
