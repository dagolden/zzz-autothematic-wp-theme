<?php

//
//  Custom Child Theme Functions
//

// I've included a "commented out" sample function below that'll add a home link to your menu
// More ideas can be found on "A Guide To Customizing The Thematic Theme Framework" 
// http://themeshaper.com/thematic-for-wordpress/guide-customizing-thematic-theme-framework/

// Adds a home link to your menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
function childtheme_menu_args($args) {
    $args = array(
        'show_home' => 'Home',
        'sort_column' => 'menu_order',
        'menu_class' => 'menu',
        'echo' => true
    );
	return $args;
}
add_filter('wp_page_menu_args','childtheme_menu_args');

function bannerlet() {
?>
<div id="bannerlet"></div>
<?php
}
add_action('thematic_header','bannerlet',11);
remove_filter('the_title', 'wptexturize');
remove_filter('the_content', 'wptexturize');
remove_filter('the_excerpt', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

function childtheme_favicon() { ?>
    <link rel="shortcut icon" href="<?php echo bloginfo('stylesheet_directory') ?>/images/favicon.ico" />
<?php }
add_action('wp_head', 'childtheme_favicon');

?>
