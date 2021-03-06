<?php 

/*
 * Testimonials for Visual Composer
 *
 */
add_action( 'init', 'sphene_testimonials_simple_integrateWithVC' );
function sphene_testimonials_simple_integrateWithVC() {
  vc_map( array(
    "name" => __("Testimonials Simple", 'sphene'),
    "base" => "testimonials-simple",
    'icon' => 'sphene_icon',
    'description' => __( 'Testimonials simple carousel', 'sphene' ),
    "category" => __('Sphene',"sphene"),
    "params" => array(
   
      array(
        'type' => 'dropdown',
        'heading' => __( 'Order by', 'sphene' ),
        'param_name' => 'orderby',
        'value' => array(
          __( 'Date', 'sphene' ) => 'date',
          __( 'ID', 'sphene' ) => 'ID',
          __( 'Author', 'sphene' ) => 'author',
          __( 'Title', 'sphene' ) => 'title',
          __( 'Modified', 'sphene' ) => 'modified',
          __( 'Random', 'sphene' ) => 'rand',
          __( 'Comment count', 'sphene' ) => 'comment_count',
          __( 'Menu order', 'sphene' ) => 'menu_order'
          ),
        ),
      array(
        'type' => 'dropdown',
        'heading' => __( 'Order', 'sphene' ),
        'param_name' => 'order',
        'value' => array(
          __( 'Descending', 'sphene' ) => 'DESC',
          __( 'Ascending', 'sphene' ) => 'ASC'
          ),
        ),
      array(
        'type' => 'dropdown',
        'heading' => __( 'Elements to show', 'sphene' ),
        'param_name' => 'per_page',
        'value' => array(
          '4' => '4',
          '5' => '5',
          '6' => '6',
          '7' => '7',
          '8' => '8',
          '9' => '9',
          '10' => '10',
          '11' => '11',
          '12' => '12',
          ),
        'save_always' => true,
        'std' => '6'
        ),
    
      array(
        'type' => 'custom_posts_list',
        'heading' => __( 'Testimonials items to include', 'sphene' ),
        'param_name' => 'include_posts',
        'settings' => array(
          'post_type' => 'testimonial',
          ),
        'description' => __( 'Select items, leave empty to use all.', 'sphene' )
        ),
      array(
        'type' => 'custom_posts_list',
        'heading' => __( 'Testimonials to exclude', 'sphene' ),
        'param_name' => 'exclude_posts',
        'settings' => array(
          'post_type' => 'testimonial',
          ),
        'description' => __( 'Select items to exclude from list.', 'sphene' )
        ),
      array(
        'type' => 'from_vs_indicatior',
        'heading' => esc_html__( 'From Visual Composer', 'sphene' ),
        'param_name' => 'from_vs',
        'value' => 'yes',
        'save_always' => true,
        )
      ),

));
}

?>