<?php
function archi_default_page_template()
{
    global $post;
    if ('page' == $post->post_type
        && 0 != count(get_page_templates($post))
        && get_option('page_for_posts') != $post->ID // Not the page for listing posts
        && '' == $post->page_template // Only when page_template is not set
    ) {
        $post->page_template = "blank-template.php";
    }
}

/**
 * function to output page builder blocks or only return list of blocks
 */
function acf_display_pb_blocks(){
    $blocks = array(
        'content_with_image',
        'textblock_one_col',
        'textblock_form',
    );

    if( have_rows('blocks') ):
        while ( have_rows('blocks') ) : the_row();
            $layout = get_row_layout();

            if( in_array( get_row_layout(), $blocks ) ){
                get_template_part( 'page-templates/blocks/block', $layout );
            }
        endwhile;
    endif;
}

////add this function to the page
//<?php
//  acf_display_pb_blocks();

add_action('add_meta_boxes', 'archi_default_page_template', 1);

if (!function_exists('jm_setup')) :
    function jm_setup()
    {
        load_theme_textdomain('jm', get_template_directory() . '/languages');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_image_size('hero', 1920);
        add_theme_support('post-thumbnails');
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);
        register_nav_menu('header-menu', 'Header Menu');
        register_nav_menu('footer-menu', 'Footer Menu');
        register_nav_menu('socket-menu', 'Socket Menu');
    }
endif;
add_action('after_setup_theme', 'jm_setup');


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page([
            'page_title'    => __('Logo voor in de menus'),
            'menu_title'    => __('Logo voor in de menus'),
            'menu_slug'     => 'logo-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ]);
    }
}
