<?php  
//Loads Post Thumbnail
add_theme_support( 'post-thumbnails' );

//Loads Custom Menu
add_action( 'init', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'main_nav', __( 'Main Nav' ) );
}
function is_post_type($type){
    global $wp_query;
    if($type == get_post_type($wp_query->post->ID)) return true;
    return false;
}

update_option('image_default_link_type','none'); 

/* Custom ajax loader */
?>