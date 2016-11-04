<?php get_header();
/**
 * Template Name: Koondleht
 */
?>
<div class="homepage_picture"></div>
<?php 
global $post;
$args = array(
    'post_type' => 'page',
    'orderby'   => 'menu_order date',
    'order'     => 'ASC',
    'posts_per_page' => '-1',
    'post_parent'    => $post->ID
    );
$index_query = new WP_Query( $args );
// The Loop
if ( $index_query ->have_posts() ) {
    while ( $index_query ->have_posts() ) {

        $index_query ->the_post();
        $template = get_page_template_slug(); 


        if (locate_template($template) != '') {
    // yep, load the page template
            $templateurl=get_template_directory().'/'.$template;
            load_template( $templateurl, false );
        }
        else
        {
            $templateurl=get_template_directory().'/'.'default_template.php';
            load_template( $templateurl, false );
        } 
    }
} else {
    echo __("Page not found",'mgo-design');
}
/* Restore original Post Data */
wp_reset_postdata();

get_footer(); ?>
