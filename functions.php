<?php
/**
 * 
 * Template Name: functions.php
 * Description: Add features to wordpress theme
 * 
 */
//add wp_bootstrap_navwalker.php file
require_once('wp_bootstrap_navwalker.php');
//add customizer.php file
get_template_part('/templates/helpers/customizer','');
require get_template_directory() .'/templates/helpers/class-bh-widget-recent-posts.php';
require get_template_directory() .'/templates/helpers/class-bh-widget-popular-tags.php';
require get_template_directory() .'/templates/helpers/class-bh-widget-categories.php';
require get_template_directory() .'/templates/helpers/class-bh-widget-search.php';
require get_template_directory() .'/templates/helpers/class-bh-widget-author.php';
//require get_template_directory() .'/templates/helpers/class-bh-widget-popular-posts.php';
@ini_set( 'upload_max_size' , '120M' );
@ini_set( 'post_max_size', '120M');
@ini_set( 'max_execution_time', '300' );

function behealthy_scripts(){

    //link css
   
    //include bootstrap.css file
    wp_enqueue_style('bootstrap-css','//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
    //include bootstrap-icon cdn file
    wp_enqueue_style('bootstrap-icon-css','//cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
    //include style.css file
    wp_enqueue_style('custom-style',get_stylesheet_uri());
    //include javascript files 
    //include bootstrap-js
    wp_enqueue_script('bootstrap-js','//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js');
}
add_action("wp_enqueue_scripts","behealthy_scripts");

function behealthy_bootstrapping(){
    load_theme_textdomain("behealthy");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    add_theme_support('html5',array('search-form'));
   
    $behealthy_custom_logo_defaults= array(
       "width"=>'50',
       "height"=>'50'
    );
    add_theme_support('custom-logo',$behealthy_custom_logo_defaults);
    add_theme_support("posts-formats",array("image","quote","video","audio","link"));

}

add_action("after_setup_theme","behealthy_bootstrapping");
// customize admin bar css
function behealthy_override_admin_bar_css() { 

    if ( is_admin_bar_showing() ) { ?>
 
 
       <style type="text/css">
        
        .customize-support .fixed-top {
         margin-top: 32px !important;
        }
        @media (max-width: 600px) {
        #wpadminbar{
        position: fixed;
         top:0;
        }
  
        }
        @media (max-width: 800px) {

        .customize-support .fixed-top {
         margin-top: 46px !important;
        }
        }
          
       </style>
      
 
    <?php }
 
 }
 
 // on backend area
add_action( 'admin_head', 'behealthy_override_admin_bar_css' );
 
 // on frontend area
 
 add_action( 'wp_head', 'behealthy_override_admin_bar_css' );
 
 //register nav menu
 function behealthy_nav_menu(){
     register_nav_menus(array(
         'primary-menu'=>__('Primary Menu','behealthy'),
         'secondary-menu'=>__('Secondary Menu','behealthy'),
         'footer-menu'=>__('Footer Menu','behealthy'),
         'categories-menu'=>__('Categories Menu','behealthy')
         
     ));
     
 };
 add_action('init','behealthy_nav_menu');

 //add link attributes for navigation bar
 function behealthy_add_links_atts($atts,$item,$args){
     if($args->theme_location=='primary-menu'){
     $atts['class'] = 'nav-link link-danger fw-bold';
     }
     else if($args->theme_location=='secondary-menu'){
        $atts['class'] = 'nav-link link-dark fw-bold';
     }
     else if($args->theme_location=='categories-menu'){
         $atts['class']='nav-link text-dark fw-lighter';
     }
     return $atts;
 }
 add_filter('nav_menu_link_attributes','behealthy_add_links_atts',10,3);
 function behealthy_add_li_classes($classes){
     $classes['class']='nav-item';
     return $classes;

 }
 add_filter('nav_menu_css_class','behealthy_add_li_classes');

 function behealthy_custom_excerpt_length($length){
     return 15;

 }
 add_filter('excerpt_length','behealthy_custom_excerpt_length');

 function behealthy_custom_pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type'  => 'array',
        'prev_next'   => true,
        'prev_text'    => __( '«', 'text-domain' ),
        'next_text'    => __( '»', 'text-domain'),
    ) );
    $output = '';

    if ( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var( 'paged' );

        $output .=  '<ul class="pagination justify-content-center">';
        foreach ( $pages as $page ) {
            $output .= "<li class='page-item'>$page</li>";
        }
        $output .= '</ul>';

        // Create an instance of DOMDocument 
        $dom = new \DOMDocument();

        // Populate $dom with $output, making sure to handle UTF-8, otherwise
        // problems will occur with UTF-8 characters.
        $dom->loadHTML( mb_convert_encoding( $output, 'HTML-ENTITIES', 'UTF-8' ) );

        // Create an instance of DOMXpath and all elements with the class 'page-numbers' 
        $xpath = new \DOMXpath( $dom );

        $page_numbers = $xpath->query( "//*[contains(concat(' ', normalize-space(@class), ' '), ' page-numbers ')]" );

        // Iterate over the $page_numbers node...
        foreach ( $page_numbers as $page_numbers_item ) {

            // Add class="mynewclass" to the <li> when its child contains the current item.
            $page_numbers_item_classes = explode( ' ', $page_numbers_item->attributes->item(0)->value );
            if ( in_array( 'current', $page_numbers_item_classes ) ) {          
                $list_item_attr_class = $dom->createAttribute( 'class' );
                $list_item_attr_class->value = 'page-link text-light bg-danger border-0 me-2';
                $page_numbers_item->parentNode->appendChild( $list_item_attr_class );
            }
         
            // Replace the class 'current' with 'active'
            $page_numbers_item->attributes->item(0)->value = str_replace( 
                            'current',
                            'active',
                            $page_numbers_item->attributes->item(0)->value );
          

            // Replace the class 'page-numbers' with 'page-link text-dark bg-light me-2'
            $page_numbers_item->attributes->item(0)->value = str_replace( 
                            'page-numbers',
                            'page-link text-dark bg-light me-2',
                            $page_numbers_item->attributes->item(0)->value );
        }

        // Save the updated HTML and output it.
        $output = $dom->saveHTML();
        wp_reset_query();
    }

    return $output;
}
function behealthy_sidebar(){
    register_sidebar(array(
        /* translators: %d: Sidebar number. */
        'name'           => __('Right Sidebar','behealthy'),
        'id'             => "sidebar-1",
        'description'    => __('Add widgets here','behealthy'),
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s mb-5">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h6 class="pb-2 title-text fw-bold d-inline border-bottom border-2 border-danger">',
        'after_title'    => "</h6>\n",
        'before_sidebar' => '',
        'after_sidebar'  => '',
    )
    );
    register_sidebar(array(
        /* translators: %d: Sidebar number. */
        'name'           => __('Footer 1','behealthy'),
        'id'             => "footer-1",
        'description'    => __('Add widgets here','behealthy'),
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s mb-5">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h6 class="pb-2 title-text fw-bold d-inline text-danger">',
        'after_title'    => "</h6>\n",
        'before_sidebar' => '',
        'after_sidebar'  => '',
    )
    );
    register_sidebar(array(
        /* translators: %d: Sidebar number. */
        'name'           => __('Footer 2','behealthy'),
        'id'             => "footer-2",
        'description'    => __('Add widgets here','behealthy'),
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s mb-5">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h6 class="pb-2 title-text fw-bold d-inline text-danger">',
        'after_title'    => "</h6>\n",
        'before_sidebar' => '',
        'after_sidebar'  => '',
    )
    );
    register_sidebar(array(
        /* translators: %d: Sidebar number. */
        'name'           => __('Footer 3','behealthy'),
        'id'             => "footer-3",
        'description'    => __('Add widgets here','behealthy'),
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s mb-5">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h6 class="pb-2 title-text fw-bold d-inline text-danger">',
        'after_title'    => "</h6>\n",
        'before_sidebar' => '',
        'after_sidebar'  => '',
    )
    );
    register_sidebar(array(
        /* translators: %d: Sidebar number. */
        'name'           => __('Footer 4','behealthy'),
        'id'             => "footer-4",
        'description'    => __('Add widgets here','behealthy'),
        'class'          => '',
        'before_widget'  => '<div id="%1$s" class="widget %2$s mb-5">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h6 class="pb-2 title-text fw-bold d-inline text-danger">',
        'after_title'    => "</h6>\n",
        'before_sidebar' => '',
        'after_sidebar'  => '',
    )
    );

}
add_action("widgets_init","behealthy_sidebar");