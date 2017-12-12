<?php

/*	Register navigation
/*---------------------------------------------------------*/
/*
 * used for header
 */
register_nav_menus( array(
        'primary' => __('Main Navigation', 'cTpl_pc007_blue'),
    )
);

/*
 * used for footer
 */
register_nav_menus( array(
        'footer' => __('Footer Navigation', 'cTpl_pc007_blue'),
    )
);


/*	Register sidebars
/*---------------------------------------------------------*/
register_sidebar(array(
        'name' => __( 'sidebar' ),
        "id" => "sidebar-1",
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3><span>',
        'after_title' => '</span></h3>',
    )
);



/*	custom walker for the navigation
/*-------------------------------------------*/
class description_walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        $class_names = ' class="'. esc_attr( $class_names ) . '"';

        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

        $prepend = '<strong>';
        $append = '</strong>';
        $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

        if($depth != 0)
        {
            $description = $append = $prepend = "";
        }


        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
        $item_output .= $description.$args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


/*	This is all for compatibility with versions of WordPress prior to 3.4.
/*---------------------------------------------------------*/
define( 'NO_HEADER_TEXT', true );
define( 'HEADER_TEXTCOLOR', true );
define('HEADER_IMAGE', '%s/images/banners/mainImage.jpg');
define('HEADER_IMAGE_WIDTH', 960);
define('HEADER_IMAGE_HEIGHT', 350);

add_theme_support('custom-header');

if (!function_exists('admin_header_style')) :
    function admin_header_style() { }
endif;

if (!isset( $content_width )) {
    $content_width = 625;
}



/*	This theme uses post thumbnails
/*---------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );
add_image_size('size1',135,92);


/*	Custom Excerpt "more" Link
/*---------------------------------------------------------*/
add_filter('excerpt_more', 'change_excerpt_more');
function change_excerpt_more($post) {
    return ' ...';
}

?>